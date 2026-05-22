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

    public function sourceAirport()
    {
        return $this->belongsTo(
            Airport::class,
            'source_airport',
            'iata'
        );
    }

    public function destinationAirport()
    {
        return $this->belongsTo(
            Airport::class,
            'destination_airport',
            'iata'
        );
    }

    public function airline()
    {
        return $this->belongsTo(
            Airline::class,
            'airline_code',
            'iata'
        );
    }

    public function scopeSearch($query, $from, $to)
    {
        return $query
            ->where('source_airport', $from)
            ->where('destination_airport', $to);
    }
}