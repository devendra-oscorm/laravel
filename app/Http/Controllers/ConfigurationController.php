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
        // ── Text / scalar fields ────────────────────────────────────────
        $textFields = [
            'home_banner_title',
            'home_banner_subtitle',
            'home_banner_description',
            'home_banner_btn_text',
            'home_banner_btn_url',
            'promo_banner_title',
            'promo_banner_description',
            'promo_banner_btn_text',
            'promo_banner_btn_url',
            'fee_flight_booking',
            'fee_hotel_booking',
            'fee_convenience',
            'fee_payment_gateway',
            'policy_baggage',
            'policy_cancellation',
        ];

        foreach ($textFields as $field) {
            SiteSetting::set($field, $request->input($field));
        }

        // ── Home Banner Image ────────────────────────────────────────────
        if ($request->hasFile('home_banner_image')) {
            $this->handleImageUpload(
                $request,
                'home_banner_image',
                'home_banner_image'   // settings key
            );
        }

        // ── Promo Banner Image ───────────────────────────────────────────
        if ($request->hasFile('promo_banner_image')) {
            $this->handleImageUpload(
                $request,
                'promo_banner_image',
                'promo_banner_image'
            );
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
