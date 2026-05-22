<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Airport;

class AirportSeeder extends Seeder
{
    public function run()
    {
        $airports = [
            // Indian Airports
            ['iata' => 'DEL', 'city' => 'Delhi', 'name' => 'Indira Gandhi International Airport', 'country' => 'India'],
            ['iata' => 'BOM', 'city' => 'Mumbai', 'name' => 'Chhatrapati Shivaji International Airport', 'country' => 'India'],
            ['iata' => 'BLR', 'city' => 'Bangalore', 'name' => 'Kempegowda International Airport', 'country' => 'India'],
            ['iata' => 'CCU', 'city' => 'Kolkata', 'name' => 'Netaji Subhas Chandra Bose International Airport', 'country' => 'India'],
            ['iata' => 'MAA', 'city' => 'Chennai', 'name' => 'Chennai International Airport', 'country' => 'India'],
            ['iata' => 'HYD', 'city' => 'Hyderabad', 'name' => 'Rajiv Gandhi International Airport', 'country' => 'India'],
            ['iata' => 'GOI', 'city' => 'Goa', 'name' => 'Dabolim Airport', 'country' => 'India'],
            ['iata' => 'COK', 'city' => 'Kochi', 'name' => 'Cochin International Airport', 'country' => 'India'],
            
            // International Airports
            ['iata' => 'JFK', 'city' => 'New York', 'name' => 'John F. Kennedy International Airport', 'country' => 'USA'],
            ['iata' => 'LAX', 'city' => 'Los Angeles', 'name' => 'Los Angeles International Airport', 'country' => 'USA'],
            ['iata' => 'LHR', 'city' => 'London', 'name' => 'Heathrow Airport', 'country' => 'UK'],
            ['iata' => 'DXB', 'city' => 'Dubai', 'name' => 'Dubai International Airport', 'country' => 'UAE'],
            ['iata' => 'SIN', 'city' => 'Singapore', 'name' => 'Singapore Changi Airport', 'country' => 'Singapore'],
            ['iata' => 'CDG', 'city' => 'Paris', 'name' => 'Charles de Gaulle Airport', 'country' => 'France'],
            ['iata' => 'FRA', 'city' => 'Frankfurt', 'name' => 'Frankfurt Airport', 'country' => 'Germany'],
            ['iata' => 'SYD', 'city' => 'Sydney', 'name' => 'Sydney Kingsford Smith Airport', 'country' => 'Australia'],
            ['iata' => 'NRT', 'city' => 'Tokyo', 'name' => 'Narita International Airport', 'country' => 'Japan'],
            ['iata' => 'PEK', 'city' => 'Beijing', 'name' => 'Beijing Capital International Airport', 'country' => 'China'],
        ];

        foreach ($airports as $airport) {
            Airport::updateOrCreate(
                ['iata' => $airport['iata']],
                $airport
            );
        }
    }
}