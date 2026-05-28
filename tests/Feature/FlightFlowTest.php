<?php

namespace Tests\Feature;

use Tests\TestCase;

class FlightFlowTest extends TestCase
{
    public function test_selected_flight_is_rendered_on_details_and_booking_pages(): void
    {
        $payload = urlencode(json_encode([
            'route_type' => 'Direct',
            'stops' => 0,
            'airline_name' => 'AstraFlight',
            'airline_code' => 'AF',
            'from_code' => 'NYC',
            'from_city' => 'New York',
            'to_code' => 'SYD',
            'to_city' => 'Sydney',
            'stop_city' => null,
            'price' => 500,
            'duration' => '14h 20m',
            'departure' => '08:30',
            'arrival' => '22:50',
        ]));

        $details = $this->get('/flight-details?flight=' . $payload);
        $details->assertStatus(200);
        $details->assertSee('AstraFlight');
        $details->assertSee('New York');
        $details->assertSee('Sydney');

        $booking = $this->get('/flight-booking?flight=' . $payload);
        $booking->assertStatus(200);
        $booking->assertSee('AstraFlight');
        $booking->assertSee('New York');
        $booking->assertSee('Sydney');
    }

    public function test_selected_route_values_are_reflected_in_details_and_booking_ui(): void
    {
        $payload = urlencode(json_encode([
            'route_type' => 'Direct',
            'stops' => 0,
            'airline_name' => 'IndiGo',
            'airline_code' => '6E',
            'from_code' => 'DEL',
            'from_city' => 'Delhi',
            'to_code' => 'JAI',
            'to_city' => 'Jaipur',
            'stop_city' => null,
            'stop_label' => 'Non stop',
            'price' => 420,
            'duration' => '2h 05m',
            'departure' => '10:00',
            'arrival' => '12:05',
        ]));

        $details = $this->get('/flight-details?flight=' . $payload);
        $details->assertStatus(200);
        $details->assertSee('value="Delhi"', false);
        $details->assertSee('Jaipur', false);
        $details->assertSee('<h6 class="fs-16 fw-medium">Delhi</h6>', false);
        $details->assertSee('<h6 class="fs-16 fw-medium">Jaipur</h6>', false);
        $details->assertDontSee('value="Newyork"', false);

        $booking = $this->get('/flight-booking?flight=' . $payload);
        $booking->assertStatus(200);
        $booking->assertSee('Delhi to Jaipur', false);
        $booking->assertSee('DEL → JAI', false);
        $booking->assertSee('6E', false);
        $booking->assertSee('Confirm & Pay $531', false);
    }

    public function test_flight_grid_page_uses_dynamic_flight_cards(): void
    {
        $response = $this->get('/flight-grid');

        $response->assertStatus(200);
        $response->assertSee('Available Flights', false);
        $response->assertDontSee('Antonov An-32', false);
        $response->assertDontSee('SkyBound 102', false);
    }

}
