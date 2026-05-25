<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;

    protected $table = 'routes';

    public $timestamps = false;

    protected $guarded = [];

    // Actual DB columns are: COL 1 = airline, COL 3 = source airport, COL 5 = destination airport
    public function sourceAirport()
    {
        return $this->belongsTo(Airport::class, 'COL 3', 'iata');
    }

    public function destinationAirport()
    {
        return $this->belongsTo(Airport::class, 'COL 5', 'iata');
    }

    public function airline()
    {
        return $this->belongsTo(Airline::class, 'COL 1', 'iata');
    }

    public function scopeSearch($query, $from, $to)
    {
        return $query
            ->where('COL 3', $from)
            ->where('COL 5', $to);
    }
}