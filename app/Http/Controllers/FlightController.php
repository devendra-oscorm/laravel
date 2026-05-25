<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use App\Models\Route;
use App\Models\Airport;
use App\Models\Airline;

class FlightController extends Controller
{
    public function search(Request $request)
    {
        $from = strtoupper(trim($request->from));
        $to = strtoupper(trim($request->to));

        $routes = Route::with([
            'airline',
            'sourceAirport',
            'destinationAirport'
        ])
            ->search($from, $to)
            ->get();

        return view('flight-grid', compact(
            'routes',
            'from',
            'to'
        ));
    }

    /**
     * Render the Flight Route Finder page (no DB queries — fast load).
     * Results are fetched via AJAX after page load.
     */
    public function findRoutes(Request $request)
    {
        $fromCity = trim($request->input('from_city', ''));
        $toCity   = trim($request->input('to_city', ''));

        // Cache city list for autocomplete (1 hour)
        $cities = Cache::remember('airport_cities', 3600, function () {
            return Airport::orderBy('city')->pluck('city')->unique()->values();
        });

        return view('flight-routes', compact('fromCity', 'toCity', 'cities'));
    }

    /**
     * Shared helper: resolve city string → array of IATA codes.
     * Cached per city name for 1 hour.
     */
    private function resolveIatas(string $city): array
    {
        return Cache::remember("iatas_{$city}", 3600, function () use ($city) {
            return Airport::where('city', 'like', "%{$city}%")
                ->pluck('iata')
                ->filter()
                ->unique()
                ->values()
                ->toArray();
        });
    }

    /**
     * AJAX — Direct flights JSON.
     */
    public function ajaxDirect(Request $request)
    {
        $fromCity = trim($request->input('from_city', ''));
        $toCity   = trim($request->input('to_city', ''));

        if (!$fromCity || !$toCity) {
            return response()->json([]);
        }

        $fromIatas = $this->resolveIatas($fromCity);
        $toIatas   = $this->resolveIatas($toCity);

        if (empty($fromIatas) || empty($toIatas)) {
            return response()->json([]);
        }

        $rows = DB::table('routes as r')
            ->select(
                DB::raw('r.`COL 3` as source_airport'),
                DB::raw('r.`COL 5` as destination_airport'),
                DB::raw('r.`COL 1` as airline_code'),
                'al.name as airline_name',
                'a1.city as source_city',
                'a2.city as dest_city'
            )
            ->join('airports as a1', DB::raw('r.`COL 3`'), '=', 'a1.iata')
            ->join('airports as a2', DB::raw('r.`COL 5`'), '=', 'a2.iata')
            ->leftJoin('airlines as al', DB::raw('r.`COL 1`'), '=', 'al.iata')
            ->whereIn(DB::raw('r.`COL 3`'), $fromIatas)
            ->whereIn(DB::raw('r.`COL 5`'), $toIatas)
            ->limit(3)
            ->get();

        return response()->json($rows);
    }

    /**
     * AJAX — 1-stop flights JSON.
     */
    public function ajaxOneStop(Request $request)
    {
        $fromCity = trim($request->input('from_city', ''));
        $toCity   = trim($request->input('to_city', ''));

        if (!$fromCity || !$toCity) {
            return response()->json([]);
        }

        $fromIatas = $this->resolveIatas($fromCity);
        $toIatas   = $this->resolveIatas($toCity);

        if (empty($fromIatas) || empty($toIatas)) {
            return response()->json([]);
        }

        $rows = DB::table('routes as r1')
            ->select(
                DB::raw('r1.`COL 3` as source_airport'),
                DB::raw('r1.`COL 5` as mid'),
                DB::raw('r2.`COL 5` as destination_airport'),
                DB::raw('r1.`COL 1` as airline_code1'),
                DB::raw('r2.`COL 1` as airline_code2'),
                'al1.name as airline_name1',
                'al2.name as airline_name2',
                'a1.city as source_city',
                'a_mid.city as mid_city',
                'a2.city as dest_city'
            )
            ->join('routes as r2', DB::raw('r1.`COL 5`'), '=', DB::raw('r2.`COL 3`'))
            ->join('airports as a1', DB::raw('r1.`COL 3`'), '=', 'a1.iata')
            ->join('airports as a2', DB::raw('r2.`COL 5`'), '=', 'a2.iata')
            ->join('airports as a_mid', DB::raw('r1.`COL 5`'), '=', 'a_mid.iata')
            ->leftJoin('airlines as al1', DB::raw('r1.`COL 1`'), '=', 'al1.iata')
            ->leftJoin('airlines as al2', DB::raw('r2.`COL 1`'), '=', 'al2.iata')
            ->whereIn(DB::raw('r1.`COL 3`'), $fromIatas)
            ->whereIn(DB::raw('r2.`COL 5`'), $toIatas)
            ->distinct()
            ->limit(3)
            ->get();

        return response()->json($rows);
    }

    /**
     * AJAX — 2-stop flights JSON.
     * Strategy: avoid triple self-join (too slow on 67k rows).
     * Step 1 — find all airports reachable from source (1 hop) → midpoints1
     * Step 2 — find all airports that can reach destination (1 hop) → midpoints2
     * Step 3 — find overlap airports reachable from midpoints1 that are in midpoints2
     * Step 4 — build full route details only for matched pairs (small result set)
     */
    public function ajaxTwoStop(Request $request)
    {
        $fromCity = trim($request->input('from_city', ''));
        $toCity   = trim($request->input('to_city', ''));

        if (!$fromCity || !$toCity) {
            return response()->json([]);
        }

        $fromIatas = $this->resolveIatas($fromCity);
        $toIatas   = $this->resolveIatas($toCity);

        // Remove null/\N values
        $fromIatas = array_values(array_filter($fromIatas, fn($x) => $x && $x !== '\\N'));
        $toIatas   = array_values(array_filter($toIatas,   fn($x) => $x && $x !== '\\N'));

        if (empty($fromIatas) || empty($toIatas)) {
            return response()->json([]);
        }

        // Step 1: airports reachable in 1 hop FROM source (mid1 candidates)
        $mid1List = DB::table('routes')
            ->whereIn(DB::raw('`COL 3`'), $fromIatas)
            ->whereNotIn(DB::raw('`COL 5`'), $toIatas)
            ->select(DB::raw('`COL 5` as iata'))
            ->distinct()
            ->get()
            ->pluck('iata')
            ->filter(fn($x) => $x && $x !== '\\N')
            ->unique()
            ->values()
            ->toArray();

        if (empty($mid1List)) {
            return response()->json([]);
        }

        // Step 2: airports that can reach destination in 1 hop (mid2 candidates)
        $mid2List = DB::table('routes')
            ->whereIn(DB::raw('`COL 5`'), $toIatas)
            ->whereNotIn(DB::raw('`COL 3`'), $fromIatas)
            ->select(DB::raw('`COL 3` as iata'))
            ->distinct()
            ->get()
            ->pluck('iata')
            ->filter(fn($x) => $x && $x !== '\\N')
            ->unique()
            ->values()
            ->toArray();

        if (empty($mid2List)) {
            return response()->json([]);
        }

        // Step 3: find mid1→mid2 connections (small join — only between candidate sets)
        $connections = DB::table('routes')
            ->whereIn(DB::raw('`COL 3`'), $mid1List)
            ->whereIn(DB::raw('`COL 5`'), $mid2List)
            ->select(DB::raw('`COL 3` as m1'), DB::raw('`COL 5` as m2'))
            ->distinct()
            ->limit(10)
            ->get();

        if ($connections->isEmpty()) {
            return response()->json([]);
        }

        // Step 4: build full route details for each connection pair
        $results = collect();

        foreach ($connections->take(3) as $conn) {
            $m1 = $conn->m1;
            $m2 = $conn->m2;

            $row = DB::table('routes as r1')
                ->select(
                    DB::raw('r1.`COL 3` as source_airport'),
                    DB::raw('r1.`COL 5` as mid1'),
                    DB::raw('r2.`COL 5` as mid2'),
                    DB::raw('r3.`COL 5` as destination_airport'),
                    DB::raw('r1.`COL 1` as airline_code1'),
                    DB::raw('r2.`COL 1` as airline_code2'),
                    DB::raw('r3.`COL 1` as airline_code3'),
                    'al1.name as airline_name1',
                    'al2.name as airline_name2',
                    'al3.name as airline_name3',
                    'a1.city as source_city',
                    'a_mid1.city as mid1_city',
                    'a_mid2.city as mid2_city',
                    'a2.city as dest_city'
                )
                ->join('routes as r2', DB::raw('r1.`COL 5`'), '=', DB::raw('r2.`COL 3`'))
                ->join('routes as r3', DB::raw('r2.`COL 5`'), '=', DB::raw('r3.`COL 3`'))
                ->join('airports as a1',    DB::raw('r1.`COL 3`'), '=', 'a1.iata')
                ->join('airports as a2',    DB::raw('r3.`COL 5`'), '=', 'a2.iata')
                ->join('airports as a_mid1', DB::raw('r1.`COL 5`'), '=', 'a_mid1.iata')
                ->join('airports as a_mid2', DB::raw('r2.`COL 5`'), '=', 'a_mid2.iata')
                ->leftJoin('airlines as al1', DB::raw('r1.`COL 1`'), '=', 'al1.iata')
                ->leftJoin('airlines as al2', DB::raw('r2.`COL 1`'), '=', 'al2.iata')
                ->leftJoin('airlines as al3', DB::raw('r3.`COL 1`'), '=', 'al3.iata')
                ->whereIn(DB::raw('r1.`COL 3`'), $fromIatas)
                ->where(DB::raw('r1.`COL 5`'), $m1)
                ->where(DB::raw('r2.`COL 5`'), $m2)
                ->whereIn(DB::raw('r3.`COL 5`'), $toIatas)
                ->first();

            if ($row) {
                $results->push($row);
            }
        }

        return response()->json($results->values());
    }

    public function getAirports(Request $request)
    {
        $search = trim($request->input('search', ''));

        $query = Airport::query();

        if ($search !== '') {
            $like = "%{$search}%";
            $query->where(function ($q) use ($like) {
                $q->where('city', 'like', $like)
                    ->orWhere('name', 'like', $like)
                    ->orWhere('iata', 'like', $like);
            });
        }

        $airports = $query->orderBy('city')
            ->get(['city', 'name', 'iata'])
            ->filter(fn($a) => $a->iata && $a->iata !== '\N' && $a->city)
            ->unique('city')
            ->values()
            ->take(10);

        return response()->json($airports);
    }
}
