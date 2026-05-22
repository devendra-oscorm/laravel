<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function getAirports(Request $request)
    {
        $search = trim($request->input('search', ''));

        // Build a base query restricted to India-like country values (case-insensitive)
        $query = Airport::query();
        $query->where(function ($q) {
            $q->whereRaw('LOWER(country) LIKE ?', ['%india%'])
                ->orWhereRaw('LOWER(country) = ?', ['in'])
                ->orWhere('country', 'India')
                ->orWhere('country', 'IN');
        });

        if ($search !== '') {
            $like = "%{$search}%";
            $query->where(function ($q) use ($like) {
                $q->where('city', 'like', $like)
                    ->orWhere('name', 'like', $like)
                    ->orWhere('iata', 'like', $like);
            });
        }

        // Get results and return unique cities (one entry per city)
        $airports = $query->orderBy('city')
            ->get(['city', 'name', 'iata'])
            ->unique('city')
            ->values()
            ->take(50);

        return response()->json($airports);
    }
}
