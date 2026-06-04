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
                        <i class="ti ti-credit-card me-1"></i>Fees & Charges
                    </button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-policies" type="button">
                        <i class="ti ti-file-text me-1"></i>Policies
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
                    <div class="card shadow-none mb-3">
                        <div class="card-header bg-white border-bottom py-2 d-flex align-items-center gap-2">
                            <span class="avatar avatar-sm rounded bg-warning-transparent">
                                <i class="ti ti-credit-card text-warning"></i>
                            </span>
                            <h6 class="mb-0">Service Fees & Convenience Charges</h6>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-6 col-lg-3">
                                    <label class="form-label">Flight Booking Fee (%)</label>
                                    <input type="number" name="fee_flight_booking" class="form-control form-control-sm"
                                           value="{{ old('fee_flight_booking', $settings['fee_flight_booking'] ?? '2.5') }}"
                                           step="0.1" min="0" max="100">
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <label class="form-label">Hotel Booking Fee (%)</label>
                                    <input type="number" name="fee_hotel_booking" class="form-control form-control-sm"
                                           value="{{ old('fee_hotel_booking', $settings['fee_hotel_booking'] ?? '3.0') }}"
                                           step="0.1" min="0" max="100">
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <label class="form-label">Convenience Charge (₹)</label>
                                    <input type="number" name="fee_convenience" class="form-control form-control-sm"
                                           value="{{ old('fee_convenience', $settings['fee_convenience'] ?? '99') }}"
                                           min="0">
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <label class="form-label">Payment Gateway (%)</label>
                                    <input type="number" name="fee_payment_gateway" class="form-control form-control-sm"
                                           value="{{ old('fee_payment_gateway', $settings['fee_payment_gateway'] ?? '2.0') }}"
                                           step="0.1" min="0" max="100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- END FEES TAB --}}

                {{-- ══════════════════ POLICIES TAB ══════════════════ --}}
                <div class="tab-pane fade" id="tab-policies">
                    <div class="card shadow-none mb-3">
                        <div class="card-header bg-white border-bottom py-2 d-flex align-items-center gap-2">
                            <span class="avatar avatar-sm rounded bg-info-transparent">
                                <i class="ti ti-file-text text-info"></i>
                            </span>
                            <h6 class="mb-0">Baggage & Cancellation Policies</h6>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-12">
                                    <label class="form-label fw-medium">Baggage Policy</label>
                                    <textarea name="policy_baggage" class="form-control" rows="5"
                                              placeholder="Describe your baggage policy...">{{ old('policy_baggage', $settings['policy_baggage'] ?? 'Standard baggage allowance: 15kg check-in + 7kg cabin bag. Additional charges apply for excess baggage.') }}</textarea>
                                </div>
                                <div class="col-12">
                                    <label class="form-label fw-medium">Cancellation Policy</label>
                                    <textarea name="policy_cancellation" class="form-control" rows="5"
                                              placeholder="Describe your cancellation policy...">{{ old('policy_cancellation', $settings['policy_cancellation'] ?? 'Free cancellation up to 24 hours before departure. 50% refund for cancellations between 24-48 hours. No refund for cancellations within 24 hours.') }}</textarea>
                                </div>
                            </div>
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
