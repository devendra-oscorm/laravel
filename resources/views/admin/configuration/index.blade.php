@extends('admin.layout')
@section('admin_title', 'Configuration')

@section('content')
<div class="content">
    <div class="container">

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show mb-3">
                <i class="ti ti-circle-check me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show mb-3">
                <i class="ti ti-alert-circle me-2"></i>
                <ul class="mb-0 ps-3">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <form action="{{ route('admin.configuration.update') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Tabs Navigation -->
            <ul class="nav nav-tabs mb-3" role="tablist">
                <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab-banners" type="button">
                        <i class="ti ti-photo me-1"></i>Banners
                    </button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-fees" type="button">
                        <i class="ti ti-receipt me-1"></i>Fees & Charges
                    </button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-policies" type="button">
                        <i class="ti ti-file-description me-1"></i>Policies
                    </button>
                </li>
            </ul>

            <div class="tab-content">

                {{-- ══════════════════ BANNERS TAB ══════════════════ --}}
                <div class="tab-pane fade show active" id="tab-banners">

                    {{-- Home Banner --}}
                    <div class="card shadow-none mb-3">
                        <div class="card-header bg-white border-bottom py-2 d-flex align-items-center gap-2">
                            <span class="avatar avatar-sm rounded bg-primary-transparent">
                                <i class="ti ti-home text-primary"></i>
                            </span>
                            <h6 class="mb-0">Home Banner</h6>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">

                                {{-- Current Image Preview --}}
                                <div class="col-12">
                                    @php $homeImg = $settings['home_banner_image'] ?? null; @endphp
                                    @if($homeImg)
                                        <div class="mb-2">
                                            <p class="fs-13 text-muted mb-1">Current Image:</p>
                                            <img src="{{ asset('uploads/banners/' . $homeImg) }}"
                                                 class="img-thumbnail rounded"
                                                 style="max-height: 180px; object-fit: cover;"
                                                 alt="Home Banner">
                                        </div>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Banner Image
                                        <span class="text-muted fs-12">(JPG/PNG/WEBP, max 3MB)</span>
                                    </label>
                                    <input type="file" name="home_banner_image" class="form-control form-control-sm"
                                           accept="image/jpeg,image/png,image/webp">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Banner Title</label>
                                    <input type="text" name="home_banner_title" class="form-control form-control-sm"
                                           value="{{ old('home_banner_title', $settings['home_banner_title'] ?? '') }}"
                                           placeholder="e.g. Discover World Your Way">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Subtitle</label>
                                    <input type="text" name="home_banner_subtitle" class="form-control form-control-sm"
                                           value="{{ old('home_banner_subtitle', $settings['home_banner_subtitle'] ?? '') }}"
                                           placeholder="Short tagline">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Description</label>
                                    <input type="text" name="home_banner_description" class="form-control form-control-sm"
                                           value="{{ old('home_banner_description', $settings['home_banner_description'] ?? '') }}"
                                           placeholder="Brief description under subtitle">
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">Button Text</label>
                                    <input type="text" name="home_banner_btn_text" class="form-control form-control-sm"
                                           value="{{ old('home_banner_btn_text', $settings['home_banner_btn_text'] ?? 'Book Now') }}"
                                           placeholder="Book Now">
                                </div>

                                <div class="col-md-8">
                                    <label class="form-label">Button URL</label>
                                    <input type="text" name="home_banner_btn_url" class="form-control form-control-sm"
                                           value="{{ old('home_banner_btn_url', $settings['home_banner_btn_url'] ?? '/flight-grid') }}"
                                           placeholder="/flight-grid">
                                </div>

                            </div>
                        </div>
                    </div>

                    {{-- Promo Banner --}}
                    <div class="card shadow-none mb-3">
                        <div class="card-header bg-white border-bottom py-2 d-flex align-items-center gap-2">
                            <span class="avatar avatar-sm rounded bg-success-transparent">
                                <i class="ti ti-tag text-success"></i>
                            </span>
                            <h6 class="mb-0">Promotional Banner</h6>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">

                                {{-- Current Image Preview --}}
                                <div class="col-12">
                                    @php $promoImg = $settings['promo_banner_image'] ?? null; @endphp
                                    @if($promoImg)
                                        <div class="mb-2">
                                            <p class="fs-13 text-muted mb-1">Current Image:</p>
                                            <img src="{{ asset('uploads/banners/' . $promoImg) }}"
                                                 class="img-thumbnail rounded"
                                                 style="max-height: 180px; object-fit: cover;"
                                                 alt="Promo Banner">
                                        </div>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Banner Image
                                        <span class="text-muted fs-12">(JPG/PNG/WEBP, max 3MB)</span>
                                    </label>
                                    <input type="file" name="promo_banner_image" class="form-control form-control-sm"
                                           accept="image/jpeg,image/png,image/webp">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Banner Title</label>
                                    <input type="text" name="promo_banner_title" class="form-control form-control-sm"
                                           value="{{ old('promo_banner_title', $settings['promo_banner_title'] ?? '') }}"
                                           placeholder="e.g. Limited Time Offer">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Description</label>
                                    <input type="text" name="promo_banner_description" class="form-control form-control-sm"
                                           value="{{ old('promo_banner_description', $settings['promo_banner_description'] ?? '') }}"
                                           placeholder="Promo details">
                                </div>

                                <div class="col-md-3">
                                    <label class="form-label">Button Text</label>
                                    <input type="text" name="promo_banner_btn_text" class="form-control form-control-sm"
                                           value="{{ old('promo_banner_btn_text', $settings['promo_banner_btn_text'] ?? 'Grab Deal') }}"
                                           placeholder="Grab Deal">
                                </div>

                                <div class="col-md-3">
                                    <label class="form-label">Button URL</label>
                                    <input type="text" name="promo_banner_btn_url" class="form-control form-control-sm"
                                           value="{{ old('promo_banner_btn_url', $settings['promo_banner_btn_url'] ?? '/deals') }}"
                                           placeholder="/deals">
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                {{-- END BANNERS TAB --}}

                {{-- ══════════════════ FEES TAB ══════════════════ --}}
                <div class="tab-pane fade" id="tab-fees">

                    {{-- Step 1: Fee Rule Selector --}}
                    <div class="card shadow-none mb-3">
                        <div class="card-header bg-white border-bottom py-2 d-flex align-items-center gap-2">
                            <span class="avatar avatar-sm rounded bg-warning-transparent">
                                <i class="ti ti-adjustments text-warning"></i>
                            </span>
                            <h6 class="mb-0">Step 1 — Select Fee Rule Type</h6>
                        </div>
                        <div class="card-body">
                            <p class="text-muted fs-13 mb-3">Choose how you want to apply fees. The relevant fields will appear below.</p>
                            <div class="row g-2">
                                @php
                                    $feeRules = [
                                        'by_product'       => ['label' => 'By Product',        'icon' => 'ti-box',             'desc' => 'Flight / Hotel / Bus'],
                                        'by_route'         => ['label' => 'By Route',           'icon' => 'ti-route',           'desc' => 'Source → Destination'],
                                        'by_country'       => ['label' => 'By Country',         'icon' => 'ti-world',           'desc' => 'Country-specific rates'],
                                        'by_airline'       => ['label' => 'By Airline',         'icon' => 'ti-plane',           'desc' => 'Carrier-specific fees'],
                                        'by_payment'       => ['label' => 'By Payment Method',  'icon' => 'ti-credit-card',     'desc' => 'Card / UPI / Wallet'],
                                        'by_value_slab'    => ['label' => 'By Booking Value',   'icon' => 'ti-list-numbers',    'desc' => 'Slab-based pricing'],
                                    ];
                                    $activeRule = old('fee_rule_type', $settings['fee_rule_type'] ?? 'by_product');
                                @endphp
                                @foreach($feeRules as $key => $rule)
                                <div class="col-6 col-md-4 col-lg-2">
                                    <label class="fee-rule-card {{ $activeRule === $key ? 'selected' : '' }}" data-rule="{{ $key }}">
                                        <input type="radio" name="fee_rule_type" value="{{ $key }}"
                                               {{ $activeRule === $key ? 'checked' : '' }}
                                               class="d-none fee-rule-radio">
                                        <div class="border rounded p-3 text-center h-100 cursor-pointer fee-rule-option {{ $activeRule === $key ? 'border-primary bg-primary-transparent' : '' }}"
                                             style="transition: all .15s ease; cursor:pointer;">
                                            <i class="ti {{ $rule['icon'] }} fs-24 {{ $activeRule === $key ? 'text-primary' : 'text-muted' }} mb-2 d-block"></i>
                                            <div class="fw-medium fs-13">{{ $rule['label'] }}</div>
                                            <div class="text-muted fs-11">{{ $rule['desc'] }}</div>
                                        </div>
                                    </label>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    {{-- Step 2: Fee Fields (shown based on rule) --}}

                    {{-- Common Fee Fields (shown for all rule types) --}}
                    <div class="card shadow-none mb-3" id="fee-fields-common">
                        <div class="card-header bg-white border-bottom py-2 d-flex align-items-center gap-2">
                            <span class="avatar avatar-sm rounded bg-primary-transparent">
                                <i class="ti ti-coin text-primary"></i>
                            </span>
                            <h6 class="mb-0">Step 2 — Configure Fee Fields</h6>
                            <span class="badge badge-soft-primary ms-auto" id="active-rule-label">{{ $feeRules[$activeRule]['label'] ?? '' }}</span>
                        </div>
                        <div class="card-body">

                            {{-- BY PRODUCT --}}
                            <div class="fee-section" id="fee-by_product" style="{{ $activeRule === 'by_product' ? '' : 'display:none;' }}">
                                <div class="row g-3">
                                    <div class="col-12"><h6 class="text-muted fs-13 fw-semibold text-uppercase mb-0">Flight</h6></div>
                                    @foreach(['Booking Fee' => 'flight_booking_fee', 'Service Fee' => 'flight_service_fee', 'Convenience Fee' => 'flight_convenience_fee', 'Cancellation Fee' => 'flight_cancellation_fee', 'Rescheduling Fee' => 'flight_rescheduling_fee'] as $label => $key)
                                    <div class="col-6 col-md-3">
                                        <label class="form-label fs-13">{{ $label }} <span class="text-muted">(₹/%)</span></label>
                                        <input type="number" name="{{ $key }}" step="0.01" min="0"
                                               class="form-control form-control-sm"
                                               value="{{ old($key, $settings[$key] ?? '') }}"
                                               placeholder="0.00">
                                    </div>
                                    @endforeach

                                    <div class="col-12 mt-2"><hr class="my-1"><h6 class="text-muted fs-13 fw-semibold text-uppercase mb-0">Hotel</h6></div>
                                    @foreach(['Booking Fee' => 'hotel_booking_fee', 'Service Fee' => 'hotel_service_fee', 'Convenience Fee' => 'hotel_convenience_fee', 'Cancellation Fee' => 'hotel_cancellation_fee', 'Rescheduling Fee' => 'hotel_rescheduling_fee'] as $label => $key)
                                    <div class="col-6 col-md-3">
                                        <label class="form-label fs-13">{{ $label }} <span class="text-muted">(₹/%)</span></label>
                                        <input type="number" name="{{ $key }}" step="0.01" min="0"
                                               class="form-control form-control-sm"
                                               value="{{ old($key, $settings[$key] ?? '') }}"
                                               placeholder="0.00">
                                    </div>
                                    @endforeach

                                    <div class="col-12 mt-2"><hr class="my-1"><h6 class="text-muted fs-13 fw-semibold text-uppercase mb-0">Bus</h6></div>
                                    @foreach(['Booking Fee' => 'bus_booking_fee', 'Service Fee' => 'bus_service_fee', 'Cancellation Fee' => 'bus_cancellation_fee'] as $label => $key)
                                    <div class="col-6 col-md-3">
                                        <label class="form-label fs-13">{{ $label }} <span class="text-muted">(₹/%)</span></label>
                                        <input type="number" name="{{ $key }}" step="0.01" min="0"
                                               class="form-control form-control-sm"
                                               value="{{ old($key, $settings[$key] ?? '') }}"
                                               placeholder="0.00">
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            {{-- BY ROUTE --}}
                            <div class="fee-section" id="fee-by_route" style="{{ $activeRule === 'by_route' ? '' : 'display:none;' }}">
                                <div class="row g-3 mb-3">
                                    <div class="col-md-4">
                                        <label class="form-label fs-13">From City / Airport</label>
                                        <input type="text" name="route_fee_from" class="form-control form-control-sm"
                                               value="{{ old('route_fee_from', $settings['route_fee_from'] ?? '') }}"
                                               placeholder="e.g. Delhi">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label fs-13">To City / Airport</label>
                                        <input type="text" name="route_fee_to" class="form-control form-control-sm"
                                               value="{{ old('route_fee_to', $settings['route_fee_to'] ?? '') }}"
                                               placeholder="e.g. Mumbai">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label fs-13">Fee Type</label>
                                        <select name="route_fee_type" class="form-select form-select-sm">
                                            <option value="flat" {{ ($settings['route_fee_type'] ?? '') === 'flat' ? 'selected' : '' }}>Flat Amount (₹)</option>
                                            <option value="percent" {{ ($settings['route_fee_type'] ?? '') === 'percent' ? 'selected' : '' }}>Percentage (%)</option>
                                        </select>
                                    </div>
                                    @foreach(['Booking Fee' => 'route_booking_fee', 'Service Fee' => 'route_service_fee', 'Cancellation Fee' => 'route_cancellation_fee', 'Rescheduling Fee' => 'route_rescheduling_fee'] as $label => $key)
                                    <div class="col-6 col-md-3">
                                        <label class="form-label fs-13">{{ $label }}</label>
                                        <input type="number" name="{{ $key }}" step="0.01" min="0"
                                               class="form-control form-control-sm"
                                               value="{{ old($key, $settings[$key] ?? '') }}"
                                               placeholder="0.00">
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            {{-- BY COUNTRY --}}
                            <div class="fee-section" id="fee-by_country" style="{{ $activeRule === 'by_country' ? '' : 'display:none;' }}">
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <label class="form-label fs-13">Country</label>
                                        <input type="text" name="country_fee_country" class="form-control form-control-sm"
                                               value="{{ old('country_fee_country', $settings['country_fee_country'] ?? '') }}"
                                               placeholder="e.g. India">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label fs-13">Currency</label>
                                        <input type="text" name="country_fee_currency" class="form-control form-control-sm"
                                               value="{{ old('country_fee_currency', $settings['country_fee_currency'] ?? '') }}"
                                               placeholder="e.g. INR">
                                    </div>
                                    @foreach(['Booking Fee' => 'country_booking_fee', 'Service Fee' => 'country_service_fee', 'Cancellation Fee' => 'country_cancellation_fee'] as $label => $key)
                                    <div class="col-6 col-md-3">
                                        <label class="form-label fs-13">{{ $label }}</label>
                                        <input type="number" name="{{ $key }}" step="0.01" min="0"
                                               class="form-control form-control-sm"
                                               value="{{ old($key, $settings[$key] ?? '') }}"
                                               placeholder="0.00">
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            {{-- BY AIRLINE --}}
                            <div class="fee-section" id="fee-by_airline" style="{{ $activeRule === 'by_airline' ? '' : 'display:none;' }}">
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <label class="form-label fs-13">Airline Name / Code</label>
                                        <input type="text" name="airline_fee_name" class="form-control form-control-sm"
                                               value="{{ old('airline_fee_name', $settings['airline_fee_name'] ?? '') }}"
                                               placeholder="e.g. AI (Air India)">
                                    </div>
                                    @foreach(['Booking Fee' => 'airline_booking_fee', 'Service Fee' => 'airline_service_fee', 'Cancellation Fee' => 'airline_cancellation_fee', 'Rescheduling Fee' => 'airline_rescheduling_fee'] as $label => $key)
                                    <div class="col-6 col-md-2">
                                        <label class="form-label fs-13">{{ $label }}</label>
                                        <input type="number" name="{{ $key }}" step="0.01" min="0"
                                               class="form-control form-control-sm"
                                               value="{{ old($key, $settings[$key] ?? '') }}"
                                               placeholder="0.00">
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            {{-- BY PAYMENT METHOD --}}
                            <div class="fee-section" id="fee-by_payment" style="{{ $activeRule === 'by_payment' ? '' : 'display:none;' }}">
                                <div class="row g-3">
                                    @php
                                        $paymentMethods = [
                                            'Credit Card'   => 'pay_credit_card',
                                            'Debit Card'    => 'pay_debit_card',
                                            'UPI'           => 'pay_upi',
                                            'Net Banking'   => 'pay_netbanking',
                                            'Wallet'        => 'pay_wallet',
                                            'EMI'           => 'pay_emi',
                                        ];
                                    @endphp
                                    @foreach($paymentMethods as $label => $key)
                                    <div class="col-6 col-md-4 col-lg-2">
                                        <div class="border rounded p-2">
                                            <label class="form-label fs-12 fw-semibold mb-1">{{ $label }}</label>
                                            <div class="d-flex gap-1">
                                                <input type="number" name="{{ $key }}_fee" step="0.01" min="0"
                                                       class="form-control form-control-sm"
                                                       value="{{ old($key.'_fee', $settings[$key.'_fee'] ?? '') }}"
                                                       placeholder="Fee">
                                                <select name="{{ $key }}_type" class="form-select form-select-sm" style="width:60px;">
                                                    <option value="flat" {{ ($settings[$key.'_type'] ?? '') === 'flat' ? 'selected' : '' }}>₹</option>
                                                    <option value="percent" {{ ($settings[$key.'_type'] ?? 'percent') === 'percent' ? 'selected' : '' }}>%</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            {{-- BY BOOKING VALUE SLAB --}}
                            <div class="fee-section" id="fee-by_value_slab" style="{{ $activeRule === 'by_value_slab' ? '' : 'display:none;' }}">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <p class="text-muted fs-13 mb-0">Define fee slabs based on booking value ranges.</p>
                                    <button type="button" class="btn btn-sm btn-outline-primary" id="addSlab">
                                        <i class="ti ti-plus me-1"></i>Add Slab
                                    </button>
                                </div>
                                <div id="slabsContainer">
                                    @php
                                        $slabs = json_decode($settings['fee_value_slabs'] ?? '[]', true);
                                        if(empty($slabs)) $slabs = [
                                            ['min' => '0', 'max' => '5000', 'fee' => '99', 'type' => 'flat'],
                                            ['min' => '5001', 'max' => '20000', 'fee' => '2', 'type' => 'percent'],
                                        ];
                                    @endphp
                                    @foreach($slabs as $i => $slab)
                                    <div class="slab-row border rounded p-3 mb-2 bg-light">
                                        <div class="row g-2 align-items-end">
                                            <div class="col-6 col-md-2">
                                                <label class="form-label fs-12">Min Value (₹)</label>
                                                <input type="number" name="slabs[{{ $i }}][min]" class="form-control form-control-sm"
                                                       value="{{ $slab['min'] }}" placeholder="0">
                                            </div>
                                            <div class="col-6 col-md-2">
                                                <label class="form-label fs-12">Max Value (₹)</label>
                                                <input type="number" name="slabs[{{ $i }}][max]" class="form-control form-control-sm"
                                                       value="{{ $slab['max'] }}" placeholder="5000">
                                            </div>
                                            <div class="col-6 col-md-2">
                                                <label class="form-label fs-12">Fee</label>
                                                <input type="number" name="slabs[{{ $i }}][fee]" class="form-control form-control-sm"
                                                       value="{{ $slab['fee'] }}" step="0.01" placeholder="0">
                                            </div>
                                            <div class="col-6 col-md-2">
                                                <label class="form-label fs-12">Type</label>
                                                <select name="slabs[{{ $i }}][type]" class="form-select form-select-sm">
                                                    <option value="flat" {{ $slab['type'] === 'flat' ? 'selected' : '' }}>Flat (₹)</option>
                                                    <option value="percent" {{ $slab['type'] === 'percent' ? 'selected' : '' }}>Percent (%)</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 d-flex gap-1">
                                                @foreach(['Cancellation' => 'cancel', 'Rescheduling' => 'reschedule'] as $label => $suffix)
                                                <div class="flex-fill">
                                                    <label class="form-label fs-12">{{ $label }} Fee</label>
                                                    <input type="number" name="slabs[{{ $i }}][{{ $suffix }}_fee]"
                                                           class="form-control form-control-sm"
                                                           value="{{ $slab[$suffix.'_fee'] ?? '' }}" step="0.01" placeholder="0">
                                                </div>
                                                @endforeach
                                                <div class="d-flex align-items-end pb-1 ms-1">
                                                    <button type="button" class="btn btn-sm btn-danger remove-slab">
                                                        <i class="ti ti-trash"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <input type="hidden" name="fee_value_slabs" id="fee_value_slabs_json">
                            </div>

                        </div>
                    </div>

                    {{-- GST / VAT Settings (always shown) --}}
                    <div class="card shadow-none mb-3">
                        <div class="card-header bg-white border-bottom py-2 d-flex align-items-center gap-2">
                            <span class="avatar avatar-sm rounded bg-danger-transparent">
                                <i class="ti ti-percentage text-danger"></i>
                            </span>
                            <h6 class="mb-0">GST / VAT Settings</h6>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-3">
                                    <label class="form-label fs-13">GST on Service Fee (%)</label>
                                    <input type="number" name="gst_service_fee" step="0.01" min="0" max="100"
                                           class="form-control form-control-sm"
                                           value="{{ old('gst_service_fee', $settings['gst_service_fee'] ?? '18') }}"
                                           placeholder="18">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label fs-13">GST on Convenience Fee (%)</label>
                                    <input type="number" name="gst_convenience_fee" step="0.01" min="0" max="100"
                                           class="form-control form-control-sm"
                                           value="{{ old('gst_convenience_fee', $settings['gst_convenience_fee'] ?? '18') }}"
                                           placeholder="18">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label fs-13">VAT / Tax Label</label>
                                    <input type="text" name="tax_label" class="form-control form-control-sm"
                                           value="{{ old('tax_label', $settings['tax_label'] ?? 'GST') }}"
                                           placeholder="GST / VAT / Tax">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label fs-13">Tax Registration No.</label>
                                    <input type="text" name="tax_registration_no" class="form-control form-control-sm"
                                           value="{{ old('tax_registration_no', $settings['tax_registration_no'] ?? '') }}"
                                           placeholder="GSTIN / VAT No.">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                {{-- END FEES TAB --}}

                {{-- ══════════════════ POLICIES TAB ══════════════════ --}}
                <div class="tab-pane fade" id="tab-policies">

                    {{-- Cancellation Policy --}}
                    <div class="card shadow-none mb-3">
                        <div class="card-header bg-white border-bottom py-2 d-flex align-items-center gap-2">
                            <span class="avatar avatar-sm rounded bg-danger-transparent">
                                <i class="ti ti-ban text-danger"></i>
                            </span>
                            <h6 class="mb-0">Cancellation Policy</h6>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label fs-13">Free Cancellation Window</label>
                                    <div class="input-group input-group-sm">
                                        <input type="number" name="cancel_free_hours" class="form-control form-control-sm"
                                               value="{{ old('cancel_free_hours', $settings['cancel_free_hours'] ?? '24') }}"
                                               placeholder="24">
                                        <span class="input-group-text">hours before departure</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fs-13">Partial Refund Window</label>
                                    <div class="input-group input-group-sm">
                                        <input type="number" name="cancel_partial_hours" class="form-control form-control-sm"
                                               value="{{ old('cancel_partial_hours', $settings['cancel_partial_hours'] ?? '48') }}"
                                               placeholder="48">
                                        <span class="input-group-text">hours before departure</span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label fs-13">Partial Refund %</label>
                                    <div class="input-group input-group-sm">
                                        <input type="number" name="cancel_partial_percent" class="form-control form-control-sm"
                                               value="{{ old('cancel_partial_percent', $settings['cancel_partial_percent'] ?? '50') }}"
                                               placeholder="50" min="0" max="100">
                                        <span class="input-group-text">%</span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label fs-13">No-Refund Within</label>
                                    <div class="input-group input-group-sm">
                                        <input type="number" name="cancel_no_refund_hours" class="form-control form-control-sm"
                                               value="{{ old('cancel_no_refund_hours', $settings['cancel_no_refund_hours'] ?? '24') }}"
                                               placeholder="24">
                                        <span class="input-group-text">hrs</span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label fs-13">Full Cancellation Policy Text</label>
                                    <textarea name="policy_cancellation" class="form-control" rows="4"
                                              placeholder="Full policy description shown to users...">{{ old('policy_cancellation', $settings['policy_cancellation'] ?? '') }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Refund Policy --}}
                    <div class="card shadow-none mb-3">
                        <div class="card-header bg-white border-bottom py-2 d-flex align-items-center gap-2">
                            <span class="avatar avatar-sm rounded bg-success-transparent">
                                <i class="ti ti-refresh text-success"></i>
                            </span>
                            <h6 class="mb-0">Refund Policy</h6>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label class="form-label fs-13">Refund Processing Time</label>
                                    <div class="input-group input-group-sm">
                                        <input type="number" name="refund_processing_days" class="form-control form-control-sm"
                                               value="{{ old('refund_processing_days', $settings['refund_processing_days'] ?? '7') }}"
                                               placeholder="7">
                                        <span class="input-group-text">business days</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label fs-13">Refund Method</label>
                                    <select name="refund_method" class="form-select form-select-sm">
                                        @foreach(['original' => 'Original Payment Method', 'wallet' => 'Wallet Credits', 'bank' => 'Bank Transfer', 'any' => 'Any Method'] as $val => $label)
                                        <option value="{{ $val }}" {{ ($settings['refund_method'] ?? 'original') === $val ? 'selected' : '' }}>{{ $label }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label fs-13">Admin Refund Deduction (%)</label>
                                    <div class="input-group input-group-sm">
                                        <input type="number" name="refund_deduction_percent" class="form-control form-control-sm"
                                               value="{{ old('refund_deduction_percent', $settings['refund_deduction_percent'] ?? '0') }}"
                                               placeholder="0" min="0" max="100">
                                        <span class="input-group-text">%</span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label fs-13">Full Refund Policy Text</label>
                                    <textarea name="policy_refund" class="form-control" rows="4"
                                              placeholder="Full refund policy shown to users...">{{ old('policy_refund', $settings['policy_refund'] ?? '') }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Rescheduling Policy --}}
                    <div class="card shadow-none mb-3">
                        <div class="card-header bg-white border-bottom py-2 d-flex align-items-center gap-2">
                            <span class="avatar avatar-sm rounded bg-warning-transparent">
                                <i class="ti ti-calendar-event text-warning"></i>
                            </span>
                            <h6 class="mb-0">Rescheduling Policy</h6>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label class="form-label fs-13">Free Reschedule Window</label>
                                    <div class="input-group input-group-sm">
                                        <input type="number" name="reschedule_free_hours" class="form-control form-control-sm"
                                               value="{{ old('reschedule_free_hours', $settings['reschedule_free_hours'] ?? '48') }}"
                                               placeholder="48">
                                        <span class="input-group-text">hours before</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label fs-13">Reschedule Fee (₹)</label>
                                    <input type="number" name="reschedule_fee" class="form-control form-control-sm"
                                           value="{{ old('reschedule_fee', $settings['reschedule_fee'] ?? '250') }}"
                                           placeholder="250" step="0.01" min="0">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label fs-13">Max Reschedules Allowed</label>
                                    <input type="number" name="reschedule_max_allowed" class="form-control form-control-sm"
                                           value="{{ old('reschedule_max_allowed', $settings['reschedule_max_allowed'] ?? '2') }}"
                                           placeholder="2" min="0">
                                </div>
                                <div class="col-12">
                                    <label class="form-label fs-13">Full Rescheduling Policy Text</label>
                                    <textarea name="policy_rescheduling" class="form-control" rows="4"
                                              placeholder="Full rescheduling policy shown to users...">{{ old('policy_rescheduling', $settings['policy_rescheduling'] ?? '') }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Terms & Conditions --}}
                    <div class="card shadow-none mb-3">
                        <div class="card-header bg-white border-bottom py-2 d-flex align-items-center gap-2">
                            <span class="avatar avatar-sm rounded bg-info-transparent">
                                <i class="ti ti-clipboard-text text-info"></i>
                            </span>
                            <h6 class="mb-0">Terms & Conditions</h6>
                        </div>
                        <div class="card-body">
                            <textarea name="policy_terms" class="form-control" rows="8"
                                      placeholder="Enter your full Terms & Conditions...">{{ old('policy_terms', $settings['policy_terms'] ?? '') }}</textarea>
                            <p class="text-muted fs-12 mt-1">This will be displayed on the Terms & Conditions page.</p>
                        </div>
                    </div>

                </div>
                {{-- END POLICIES TAB --}}

            </div>{{-- /tab-content --}}

            {{-- Sticky Save Bar --}}
            <div class="d-flex justify-content-end gap-2 mt-3">
                <a href="{{ route('admin.dashboard') }}" class="btn btn-light">
                    <i class="ti ti-arrow-left me-1"></i>Cancel
                </a>
                <button type="submit" class="btn btn-primary">
                    <i class="ti ti-device-floppy me-1"></i>Save All Settings
                </button>
            </div>

        </form>

    </div>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {

    // ── Fee Rule Card Selection ────────────────────────────────────────
    const ruleOptions = document.querySelectorAll('.fee-rule-option');
    const ruleRadios  = document.querySelectorAll('.fee-rule-radio');
    const feeSections = document.querySelectorAll('.fee-section');
    const ruleLabel   = document.getElementById('active-rule-label');

    function activateRule(value, labelText) {
        // Update card styles
        document.querySelectorAll('.fee-rule-option').forEach(el => {
            el.classList.remove('border-primary', 'bg-primary-transparent');
            el.querySelector('i').classList.remove('text-primary');
            el.querySelector('i').classList.add('text-muted');
        });
        const selected = document.querySelector(`.fee-rule-option[data-rule="${value}"]`) ||
                         document.querySelector(`[data-rule="${value}"] .fee-rule-option`);
        if (selected) {
            selected.classList.add('border-primary', 'bg-primary-transparent');
            selected.querySelector('i').classList.remove('text-muted');
            selected.querySelector('i').classList.add('text-primary');
        }

        // Show/hide sections
        feeSections.forEach(s => s.style.display = 'none');
        const target = document.getElementById('fee-' + value);
        if (target) target.style.display = '';

        // Update label
        if (ruleLabel) ruleLabel.textContent = labelText || value;
    }

    // Attach to labels/cards
    document.querySelectorAll('.fee-rule-card').forEach(label => {
        label.style.cursor = 'pointer';
        label.addEventListener('click', function () {
            const rule   = this.dataset.rule;
            const radio  = this.querySelector('input[type=radio]');
            if (radio) radio.checked = true;
            const labelText = this.querySelector('.fw-medium') ? this.querySelector('.fw-medium').textContent : rule;
            activateRule(rule, labelText);
        });
    });

    // ── Add Slab Row ───────────────────────────────────────────────────
    let slabIndex = document.querySelectorAll('.slab-row').length;

    document.getElementById('addSlab')?.addEventListener('click', function () {
        const html = `
        <div class="slab-row border rounded p-3 mb-2 bg-light">
            <div class="row g-2 align-items-end">
                <div class="col-6 col-md-2">
                    <label class="form-label fs-12">Min Value (₹)</label>
                    <input type="number" name="slabs[${slabIndex}][min]" class="form-control form-control-sm" placeholder="0">
                </div>
                <div class="col-6 col-md-2">
                    <label class="form-label fs-12">Max Value (₹)</label>
                    <input type="number" name="slabs[${slabIndex}][max]" class="form-control form-control-sm" placeholder="5000">
                </div>
                <div class="col-6 col-md-2">
                    <label class="form-label fs-12">Fee</label>
                    <input type="number" name="slabs[${slabIndex}][fee]" class="form-control form-control-sm" step="0.01" placeholder="0">
                </div>
                <div class="col-6 col-md-2">
                    <label class="form-label fs-12">Type</label>
                    <select name="slabs[${slabIndex}][type]" class="form-select form-select-sm">
                        <option value="flat">Flat (₹)</option>
                        <option value="percent">Percent (%)</option>
                    </select>
                </div>
                <div class="col-md-4 d-flex gap-1">
                    <div class="flex-fill">
                        <label class="form-label fs-12">Cancellation Fee</label>
                        <input type="number" name="slabs[${slabIndex}][cancel_fee]" class="form-control form-control-sm" step="0.01" placeholder="0">
                    </div>
                    <div class="flex-fill">
                        <label class="form-label fs-12">Rescheduling Fee</label>
                        <input type="number" name="slabs[${slabIndex}][reschedule_fee]" class="form-control form-control-sm" step="0.01" placeholder="0">
                    </div>
                    <div class="d-flex align-items-end pb-1 ms-1">
                        <button type="button" class="btn btn-sm btn-danger remove-slab">
                            <i class="ti ti-trash"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>`;
        document.getElementById('slabsContainer').insertAdjacentHTML('beforeend', html);
        slabIndex++;
        bindRemoveSlab();
    });

    function bindRemoveSlab() {
        document.querySelectorAll('.remove-slab').forEach(btn => {
            btn.onclick = function () {
                this.closest('.slab-row').remove();
            };
        });
    }
    bindRemoveSlab();
});
</script>
@endpush
