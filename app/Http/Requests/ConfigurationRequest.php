<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConfigurationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            // Banners
            'home_banner_title'        => 'nullable|string|max:255',
            'home_banner_subtitle'     => 'nullable|string|max:255',
            'home_banner_description'  => 'nullable|string|max:1000',
            'home_banner_image'        => 'nullable|image|mimes:jpg,jpeg,png,webp|max:3072',
            'home_banner_btn_text'     => 'nullable|string|max:100',
            'home_banner_btn_url'      => 'nullable|string|max:500',
            'promo_banner_title'       => 'nullable|string|max:255',
            'promo_banner_description' => 'nullable|string|max:1000',
            'promo_banner_image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:3072',
            'promo_banner_btn_text'    => 'nullable|string|max:100',
            'promo_banner_btn_url'     => 'nullable|string|max:500',

            // Fee Rule
            'fee_rule_type' => 'nullable|string',

            // Product fees
            'flight_booking_fee'       => 'nullable|numeric|min:0',
            'flight_service_fee'       => 'nullable|numeric|min:0',
            'flight_convenience_fee'   => 'nullable|numeric|min:0',
            'flight_cancellation_fee'  => 'nullable|numeric|min:0',
            'flight_rescheduling_fee'  => 'nullable|numeric|min:0',
            'hotel_booking_fee'        => 'nullable|numeric|min:0',
            'hotel_service_fee'        => 'nullable|numeric|min:0',
            'hotel_convenience_fee'    => 'nullable|numeric|min:0',
            'hotel_cancellation_fee'   => 'nullable|numeric|min:0',
            'hotel_rescheduling_fee'   => 'nullable|numeric|min:0',
            'bus_booking_fee'          => 'nullable|numeric|min:0',
            'bus_service_fee'          => 'nullable|numeric|min:0',
            'bus_cancellation_fee'     => 'nullable|numeric|min:0',

            // Route fees
            'route_fee_from'           => 'nullable|string|max:100',
            'route_fee_to'             => 'nullable|string|max:100',
            'route_fee_type'           => 'nullable|string',
            'route_booking_fee'        => 'nullable|numeric|min:0',
            'route_service_fee'        => 'nullable|numeric|min:0',
            'route_cancellation_fee'   => 'nullable|numeric|min:0',
            'route_rescheduling_fee'   => 'nullable|numeric|min:0',

            // Country fees
            'country_fee_country'      => 'nullable|string|max:100',
            'country_fee_currency'     => 'nullable|string|max:10',
            'country_booking_fee'      => 'nullable|numeric|min:0',
            'country_service_fee'      => 'nullable|numeric|min:0',
            'country_cancellation_fee' => 'nullable|numeric|min:0',

            // Airline fees
            'airline_fee_name'         => 'nullable|string|max:100',
            'airline_booking_fee'      => 'nullable|numeric|min:0',
            'airline_service_fee'      => 'nullable|numeric|min:0',
            'airline_cancellation_fee' => 'nullable|numeric|min:0',
            'airline_rescheduling_fee' => 'nullable|numeric|min:0',

            // Payment method fees
            'pay_credit_card_fee'      => 'nullable|numeric|min:0',
            'pay_debit_card_fee'       => 'nullable|numeric|min:0',
            'pay_upi_fee'              => 'nullable|numeric|min:0',
            'pay_netbanking_fee'       => 'nullable|numeric|min:0',
            'pay_wallet_fee'           => 'nullable|numeric|min:0',
            'pay_emi_fee'              => 'nullable|numeric|min:0',
            'pay_credit_card_type'     => 'nullable|string',
            'pay_debit_card_type'      => 'nullable|string',
            'pay_upi_type'             => 'nullable|string',
            'pay_netbanking_type'      => 'nullable|string',
            'pay_wallet_type'          => 'nullable|string',
            'pay_emi_type'             => 'nullable|string',

            // GST / VAT
            'gst_service_fee'          => 'nullable|numeric|min:0|max:100',
            'gst_convenience_fee'      => 'nullable|numeric|min:0|max:100',
            'tax_label'                => 'nullable|string|max:50',
            'tax_registration_no'      => 'nullable|string|max:100',

            // Value slabs
            'slabs'                    => 'nullable|array',

            // Policies
            'cancel_free_hours'        => 'nullable|numeric|min:0',
            'cancel_partial_hours'     => 'nullable|numeric|min:0',
            'cancel_partial_percent'   => 'nullable|numeric|min:0|max:100',
            'cancel_no_refund_hours'   => 'nullable|numeric|min:0',
            'policy_cancellation'      => 'nullable|string',
            'refund_processing_days'   => 'nullable|numeric|min:0',
            'refund_method'            => 'nullable|string',
            'refund_deduction_percent' => 'nullable|numeric|min:0|max:100',
            'policy_refund'            => 'nullable|string',
            'reschedule_free_hours'    => 'nullable|numeric|min:0',
            'reschedule_fee'           => 'nullable|numeric|min:0',
            'reschedule_max_allowed'   => 'nullable|numeric|min:0',
            'policy_rescheduling'      => 'nullable|string',
            'policy_terms'             => 'nullable|string',
        ];
    }
}
