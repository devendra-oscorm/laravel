<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConfigurationRequest;
use App\Models\SiteSetting;
use Illuminate\Support\Facades\Storage;

class ConfigurationController extends Controller
{
    /**
     * Show the configuration page with all current settings.
     */
    public function index()
    {
        $settings = SiteSetting::allAsArray();
        return view('admin.configuration.index', compact('settings'));
    }

    /**
     * Save all configuration settings.
     */
    public function update(ConfigurationRequest $request)
    {
        // ── All scalar/text fields ────────────────────────────────────────
        $textFields = [
            // Banners
            'home_banner_title','home_banner_subtitle','home_banner_description',
            'home_banner_btn_text','home_banner_btn_url',
            'promo_banner_title','promo_banner_description',
            'promo_banner_btn_text','promo_banner_btn_url',
            // Fee rule
            'fee_rule_type',
            // Product fees
            'flight_booking_fee','flight_service_fee','flight_convenience_fee',
            'flight_cancellation_fee','flight_rescheduling_fee',
            'hotel_booking_fee','hotel_service_fee','hotel_convenience_fee',
            'hotel_cancellation_fee','hotel_rescheduling_fee',
            'bus_booking_fee','bus_service_fee','bus_cancellation_fee',
            // Route fees
            'route_fee_from','route_fee_to','route_fee_type',
            'route_booking_fee','route_service_fee','route_cancellation_fee','route_rescheduling_fee',
            // Country fees
            'country_fee_country','country_fee_currency',
            'country_booking_fee','country_service_fee','country_cancellation_fee',
            // Airline fees
            'airline_fee_name','airline_booking_fee','airline_service_fee',
            'airline_cancellation_fee','airline_rescheduling_fee',
            // Payment method fees
            'pay_credit_card_fee','pay_debit_card_fee','pay_upi_fee',
            'pay_netbanking_fee','pay_wallet_fee','pay_emi_fee',
            'pay_credit_card_type','pay_debit_card_type','pay_upi_type',
            'pay_netbanking_type','pay_wallet_type','pay_emi_type',
            // GST / VAT
            'gst_service_fee','gst_convenience_fee','tax_label','tax_registration_no',
            // Policies
            'cancel_free_hours','cancel_partial_hours','cancel_partial_percent','cancel_no_refund_hours',
            'policy_cancellation',
            'refund_processing_days','refund_method','refund_deduction_percent','policy_refund',
            'reschedule_free_hours','reschedule_fee','reschedule_max_allowed','policy_rescheduling',
            'policy_terms',
        ];

        foreach ($textFields as $field) {
            SiteSetting::set($field, $request->input($field));
        }

        // ── Value Slabs (stored as JSON) ──────────────────────────────────
        if ($request->has('slabs')) {
            SiteSetting::set('fee_value_slabs', json_encode($request->input('slabs', [])));
        }

        // ── Images ───────────────────────────────────────────────────────
        if ($request->hasFile('home_banner_image')) {
            $this->handleImageUpload($request, 'home_banner_image', 'home_banner_image');
        }

        if ($request->hasFile('promo_banner_image')) {
            $this->handleImageUpload($request, 'promo_banner_image', 'promo_banner_image');
        }

        return redirect()->route('admin.configuration')
            ->with('success', 'Configuration saved successfully.');
    }

    // ────────────────────────────────────────────────────────────────────
    // Helpers
    // ────────────────────────────────────────────────────────────────────

    /**
     * Upload an image, delete the old one, and persist the path in settings.
     */
    private function handleImageUpload($request, string $inputName, string $settingKey): void
    {
        // Delete old file if it exists
        $old = SiteSetting::get($settingKey);
        if ($old && file_exists(public_path('uploads/banners/' . $old))) {
            @unlink(public_path('uploads/banners/' . $old));
        }

        $file     = $request->file($inputName);
        $filename = time() . '_' . $inputName . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads/banners'), $filename);

        SiteSetting::set($settingKey, $filename);
    }
}
