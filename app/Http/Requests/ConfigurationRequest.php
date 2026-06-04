<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConfigurationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // AdminMiddleware already guards these routes
    }

    public function rules(): array
    {
        return [
            // Home Banner
            'home_banner_title'       => 'nullable|string|max:255',
            'home_banner_subtitle'    => 'nullable|string|max:255',
            'home_banner_description' => 'nullable|string|max:1000',
            'home_banner_image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:3072',
            'home_banner_btn_text'    => 'nullable|string|max:100',
            'home_banner_btn_url'     => 'nullable|string|max:500',

            // Promo Banner
            'promo_banner_title'       => 'nullable|string|max:255',
            'promo_banner_description' => 'nullable|string|max:1000',
            'promo_banner_image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:3072',
            'promo_banner_btn_text'    => 'nullable|string|max:100',
            'promo_banner_btn_url'     => 'nullable|string|max:500',

            // Fees
            'fee_flight_booking'  => 'nullable|numeric|min:0|max:100',
            'fee_hotel_booking'   => 'nullable|numeric|min:0|max:100',
            'fee_convenience'     => 'nullable|numeric|min:0',
            'fee_payment_gateway' => 'nullable|numeric|min:0|max:100',

            // Policies
            'policy_baggage'      => 'nullable|string',
            'policy_cancellation' => 'nullable|string',
        ];
    }

    public function messages(): array
    {
        return [
            'home_banner_image.image'  => 'Home banner must be an image file.',
            'promo_banner_image.image' => 'Promo banner must be an image file.',
            '*.max'                    => ':attribute must not exceed the allowed size.',
        ];
    }
}
