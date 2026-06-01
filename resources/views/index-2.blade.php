<?php $page = "index-2"; ?>
@extends('layout.mainlayout')
@section('content')

<!-- Hero Section -->
<section class="hero-sec-nine">
    <div class="container">
        <div class="hero-content wow fadeInUp">
            <h1 class="banner-title">Discover <span>World</span> Your Way</h1>
            <span class="banner-title-text">Flights, Hotels, Cars, Tours, Cruises & Visa Services – All in One Platform</span>
            <div class="row align-items-center">
                <div class="col-md-12 mx-auto">
                    <div class="banner-form card mb-0 wow fadeInUp" data-wow-delay="1.5">
                        <div class="card-body">
                            <form action="{{ route('flight.routes') }}" method="GET">
                                <div class="d-flex align-items-center justify-content-between flex-wrap mb-3">
                                    <div class="d-flex align-items-center flex-wrap">
                                        <div class="form-check d-flex align-items-center me-3 mb-2">
                                            <input class="form-check-input mt-0" type="radio" name="trip_type" id="oneway" value="oneway" checked>
                                            <label class="form-check-label fs-14 ms-2" for="oneway">Oneway</label>
                                        </div>
                                        <div class="form-check d-flex align-items-center me-3 mb-2">
                                            <input class="form-check-input mt-0" type="radio" name="trip_type" id="roundtrip" value="roundtrip">
                                            <label class="form-check-label fs-14 ms-2" for="roundtrip">Round Trip</label>
                                        </div>
                                        <div class="form-check d-flex align-items-center me-3 mb-2">
                                            <input class="form-check-input mt-0" type="radio" name="trip_type" id="multiway" value="multiway">
                                            <label class="form-check-label fs-14 ms-2" for="multiway">Multi Trip</label>
                                        </div>
                                    </div>
                                    <span class="fw-medium fs-16 mb-2 text-white d-none d-md-block">Millions of cheap flights. One simple search</span>
                                </div>

                                <div class="d-lg-flex">
                                    <div class="d-flex form-info flex-wrap">

                                        {{-- From --}}
                                        <div class="form-item">
                                            <label class="form-label fs-14 text-default mb-1">From</label>
                                            <input type="text" name="from_city" id="hero-from-city"
                                                class="form-control" placeholder="Departure City" autocomplete="off">
                                            <p class="fs-12 mb-0 text-muted">Enter city name</p>
                                        </div>

                                        {{-- Swap --}}
                                        <div class="d-flex align-items-center px-2 pt-3">
                                            <button type="button" id="hero-swap-btn"
                                                class="btn btn-sm btn-light rounded-circle p-1" title="Swap cities">
                                                <i class="fa-solid fa-arrow-right-arrow-left"></i>
                                            </button>
                                        </div>

                                        {{-- To --}}
                                        <div class="form-item">
                                            <label class="form-label fs-14 text-default mb-1">To</label>
                                            <input type="text" name="to_city" id="hero-to-city"
                                                class="form-control" placeholder="Destination City" autocomplete="off">
                                            <p class="fs-12 mb-0 text-muted">Enter city name</p>
                                        </div>

                                        {{-- Departure Date --}}
                                        <div class="form-item">
                                            <label class="form-label fs-14 text-default mb-1">Departure</label>
                                            <input type="text" class="form-control datetimepicker"
                                                name="departure_date" value="{{ date('d-m-Y') }}" autocomplete="off">
                                            <p class="fs-12 mb-0 text-muted">{{ date('l') }}</p>
                                        </div>

                                        {{-- Return Date (round trip only) --}}
                                        <div class="form-item round-drip" style="display:none;">
                                            <label class="form-label fs-14 text-default mb-1">Return</label>
                                            <input type="text" class="form-control datetimepicker"
                                                name="return_date" value="{{ date('d-m-Y', strtotime('+7 days')) }}" autocomplete="off">
                                            <p class="fs-12 mb-0 text-muted">{{ date('l', strtotime('+7 days')) }}</p>
                                        </div>

                                        {{-- Travellers & Cabin --}}
                                        <div class="form-item dropdown">
                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                                <label class="form-label fs-14 text-default mb-1">Travellers & Class</label>
                                                <div class="home-eight-title text-dark member-count">1 <span class="fw-normal fs-14">Person</span></div>
                                                <p class="fs-12 mb-0"><span class="adult-count">1</span> Adult, <span class="cabin-class">Economy</span></p>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-xl">
                                                <div class="mb-3 home-eight-title text-dark">Select Travelers & Class</div>
                                                <div class="mb-3 border br-10 info-item pb-1">
                                                    <div class="fs-16 fw-medium mb-2 text-dark">Travellers</div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label class="form-label text-gray-9 mb-2">Adults <span class="text-default fw-normal">(12+ Yrs)</span></label>
                                                                <div class="custom-increment">
                                                                    <div class="input-group">
                                                                        <span class="input-group-btn float-start">
                                                                            <button type="button" class="quantity-left-minus btn btn-light btn-number" data-type="minus" data-field=""><span><i class="isax isax-minus"></i></span></button>
                                                                        </span>
                                                                        <input type="text" name="adults" class="input-number" value="1" data-type="adult">
                                                                        <span class="input-group-btn float-end">
                                                                            <button type="button" class="quantity-right-plus btn btn-light btn-number" data-type="plus" data-field=""><span><i class="isax isax-add"></i></span></button>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label class="form-label text-gray-9 mb-2">Children <span class="text-default fw-normal">(2-12 Yrs)</span></label>
                                                                <div class="custom-increment">
                                                                    <div class="input-group">
                                                                        <span class="input-group-btn float-start">
                                                                            <button type="button" class="quantity-left-minus btn btn-light btn-number" data-type="minus" data-field=""><span><i class="isax isax-minus"></i></span></button>
                                                                        </span>
                                                                        <input type="text" name="children" class="input-number" value="0" data-type="children">
                                                                        <span class="input-group-btn float-end">
                                                                            <button type="button" class="quantity-right-plus btn btn-light btn-number" data-type="plus" data-field=""><span><i class="isax isax-add"></i></span></button>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label class="form-label text-gray-9 mb-2">Infants <span class="text-default fw-normal">(0-2 Yrs)</span></label>
                                                                <div class="custom-increment">
                                                                    <div class="input-group">
                                                                        <span class="input-group-btn float-start">
                                                                            <button type="button" class="quantity-left-minus btn btn-light btn-number" data-type="minus" data-field=""><span><i class="isax isax-minus"></i></span></button>
                                                                        </span>
                                                                        <input type="text" name="infants" class="input-number" value="0" data-type="infant">
                                                                        <span class="input-group-btn float-end">
                                                                            <button type="button" class="quantity-right-plus btn btn-light btn-number" data-type="plus" data-field=""><span><i class="isax isax-add"></i></span></button>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 border br-10 info-item pb-1">
                                                    <span class="fs-16 fw-medium mb-2 text-dark">Cabin Class</span>
                                                    <div class="d-flex align-items-center flex-wrap mt-2">
                                                        <div class="form-check me-3 mb-3">
                                                            <input class="form-check-input cabin-radio" type="radio" value="Economy" name="cabin_class" id="cabin-economy" checked>
                                                            <label class="form-check-label" for="cabin-economy">Economy</label>
                                                        </div>
                                                        <div class="form-check me-3 mb-3">
                                                            <input class="form-check-input cabin-radio" type="radio" value="Premium Economy" name="cabin_class" id="cabin-premium">
                                                            <label class="form-check-label" for="cabin-premium">Premium Economy</label>
                                                        </div>
                                                        <div class="form-check me-3 mb-3">
                                                            <input class="form-check-input cabin-radio" type="radio" value="Business" name="cabin_class" id="cabin-business">
                                                            <label class="form-check-label" for="cabin-business">Business</label>
                                                        </div>
                                                        <div class="form-check mb-3">
                                                            <input class="form-check-input cabin-radio" type="radio" value="First Class" name="cabin_class" id="cabin-first">
                                                            <label class="form-check-label" for="cabin-first">First Class</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-end">
                                                    <a href="#" class="btn btn-light btn-sm me-2 cancel-btn">Cancel</a>
                                                    <button type="button" class="btn btn-primary btn-sm apply-btn">Apply</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <button type="submit" class="btn btn-primary search-btn rounded">
                                        <i class="isax isax-search-normal me-1"></i>Search
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Hero Section -->

<!-- Flight Search Results (AJAX) -->
<div class="content pt-4 pb-2" id="heroResultsArea" style="display:none;">
    <div class="container">

        <div id="heroResultsHeading" class="mb-3">
            <h5 class="fw-semibold">
                Routes from <span id="heroHeadFrom" class="text-primary"></span>
                to <span id="heroHeadTo" class="text-primary"></span>
            </h5>
        </div>

        {{-- Direct --}}
        <div id="heroDirectSection" class="d-none mb-4">
            <h6 class="fw-medium text-success mb-2">
                <i class="isax isax-airplane me-1"></i>Direct Flights
                <span id="heroDirectCount" class="badge bg-success ms-1"></span>
                <span id="heroDirectSpinner" class="spinner-border spinner-border-sm text-success ms-2" role="status"></span>
            </h6>
            <div id="heroDirectCards"></div>
        </div>

        {{-- 1-stop --}}
        <div id="heroOneStopSection" class="d-none mb-4">
            <h6 class="fw-medium text-primary mb-2">
                <i class="isax isax-airplane me-1"></i>1-Stop Connections
                <span id="heroOneStopCount" class="badge bg-primary ms-1"></span>
                <span id="heroOneStopSpinner" class="spinner-border spinner-border-sm text-primary ms-2" role="status"></span>
            </h6>
            <div id="heroOneStopCards"></div>
        </div>

        {{-- 2-stop --}}
        <div id="heroTwoStopSection" class="d-none mb-4">
            <h6 class="fw-medium text-warning mb-2">
                <i class="isax isax-airplane me-1"></i>2-Stop Connections
                <span id="heroTwoStopCount" class="badge bg-warning ms-1"></span>
                <span id="heroTwoStopSpinner" class="spinner-border spinner-border-sm text-warning ms-2" role="status"></span>
            </h6>
            <div id="heroTwoStopCards"></div>
        </div>

        {{-- No results --}}
        <div id="heroNoResults" class="d-none alert alert-warning">
            <i class="isax isax-warning-2 me-2"></i>
            <strong>No Routes Found.</strong> Check city names or try nearby cities.
        </div>

        <p id="heroQueryTime" class="text-muted fs-12 text-end d-none"></p>
    </div>
</div>
<!-- /Flight Search Results -->
    <!-- destinations sec -->
    <section class="section destinations-sec-nine" style="padding-bottom: 0 !important;">
        <div class="section-head-nine px-2 text-center wow fadeInUp">
           <h2>Top <span>Destinations</span></h2>
           <span>Explore the world's most beautiful places</span>
        </div>
        <div class="destinations-slider wow fadeInUp">
            <div class="destinations-item">
                <div class="destinations-img">
                    <a href="#"><img src="{{URL::asset('./build/img/destination/destination-58.jpg')}}" alt="img"></a>
                    <div class="location-text">
                        Tokyo
                    </div>
                    <div class="destinations-amount">
                        <div>
                           <p class="text-light mb-1">Starts From</p>
                           <span class="text-white fs-20 fw-semibold">$899</span>
                        </div>
                        <a href="#" class="location-view-button"><i class="isax isax-arrow-right-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="destinations-item">
                <div class="destinations-img">
                    <a href="#"><img src="{{URL::asset('./build/img/destination/destination-59.jpg')}}" alt="img"></a>
                    <div class="location-text">
                        New York
                    </div>
                    <div class="destinations-amount">
                        <div>
                           <p class="text-light mb-1">Starts From</p>
                           <span class="text-white fs-20 fw-semibold">$1199</span>
                        </div>
                        <a href="#" class="location-view-button"><i class="isax isax-arrow-right-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="destinations-item">
                <div class="destinations-img">
                    <a href="#"><img src="{{URL::asset('./build/img/destination/destination-60.jpg')}}" alt="img"></a>
                    <div class="location-text">
                        London
                    </div>
                    <div class="destinations-amount">
                        <div>
                           <p class="text-light mb-1">Starts From</p>
                           <span class="text-white fs-20 fw-semibold">$749</span>
                        </div>
                        <a href="#" class="location-view-button"><i class="isax isax-arrow-right-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="destinations-item">
                <div class="destinations-img">
                    <a href="#"><img src="{{URL::asset('./build/img/destination/destination-61.jpg')}}" alt="img"></a>
                    <div class="location-text">
                        Sydney
                    </div>
                    <div class="destinations-amount">
                        <div>
                           <p class="text-light mb-1">Starts From</p>
                           <span class="text-white fs-20 fw-semibold">$1099</span>
                        </div>
                        <a href="#" class="location-view-button"><i class="isax isax-arrow-right-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="destinations-item">
                <div class="destinations-img">
                    <a href="#"><img src="{{URL::asset('./build/img/destination/destination-62.jpg')}}" alt="img"></a>
                    <div class="location-text">
                        Berlin
                    </div>
                    <div class="destinations-amount">
                        <div>
                           <p class="text-light mb-1">Starts From</p>
                           <span class="text-white fs-20 fw-semibold">$649</span>
                        </div>
                        <a href="#" class="location-view-button"><i class="isax isax-arrow-right-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="destinations-item">
                <div class="destinations-img">
                    <a href="#"><img src="{{URL::asset('./build/img/destination/destination-63.jpg')}}" alt="img"></a>
                    <div class="location-text">
                        Paris
                    </div>
                    <div class="destinations-amount">
                        <div>
                           <p class="text-light mb-1">Starts From</p>
                           <span class="text-white fs-20 fw-semibold">$1499</span>
                        </div>
                        <a href="#" class="location-view-button"><i class="isax isax-arrow-right-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-center justify-content-center gap-3">
            <button type="button" class="slick-arrow restaurant-prev"><i class="isax isax-arrow-left-2"></i></button>
            <button type="button" class="slick-arrow restaurant-next"><i class="isax isax-arrow-right-3"></i></button>
        </div>
    </section>
    <!-- destinations sec -->

    <!-- trending list -->
    <section class="section trending-list-nine">
        <div class="container">
            <div class="section-head-nine text-center wow fadeInUp">
                <h2>Trending <span>Listings</span></h2>
                <span>Explore the world's most beautiful places</span>
            </div>

            <div class="d-flex align-items-center justify-content-center mb-4 px-2 gap-2 wow fadeInUp">
                <ul class="nav">
                    <li>
                        <a href="#" class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab-1">
                            Flights
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                            Hotels
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                            Cars
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                            Cruise
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-5">
                            Tour
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-6">
                            Activity
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-7">
                            Visa
                        </a>
                    </li>
                </ul>
            </div>

            <div class="tab-content wow fadeInUp">
                <div class="tab-pane fade active show" id="tab-1">
                    <div class="row justify-content-center">
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="trending-list-item">
                                <div class="place-img">
                                    <a href="{{url('flight-details')}}">
                                        <img src="{{URL::asset('build/img/flight/flight-01.jpg')}}" class="img-fluid" alt="img">
                                    </a>
                                    <div class="fav-item">
                                        <span class="badge bg-white text-dark">214 Seats Left</span>
                                        <button class="fav-icon border-0">
                                            <i class="isax isax-heart5"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <h3 class="text-truncate mb-2 home-eight-title"><a
                                            href="{{url('flight-details')}}">AstraFlight 215</a></h3>
                                    <div class="d-flex align-items-center mb-3">
                                        <span class="avatar avatar-sm me-2">
                                            <img src="{{URL::asset('build/img/icons/airindia.svg')}}" class="rounded-circle" alt="icon">
                                        </span>
                                        <p class="fs-14 mb-0">Air Asia</p>
                                        <p class="fs-14 d-inline-flex align-items-center mb-0"><i
                                                class="fa-solid fa-circle fs-6 text-primary mx-2"></i>1-stop at
                                            Frankfurt</p>
                                    </div>
                                    <div class="flight-loc d-flex align-items-center justify-content-between mb-3">
                                        <span class="loc-name d-inline-flex align-items-center"><i
                                                class="isax isax-airplane rotate-45 me-2"></i>Toronto</span>
                                        <span class="arrow-icon"><i class="isax isax-arrow-2"></i></span>
                                        <span class="loc-name d-inline-flex align-items-center"><i
                                                class="isax isax-airplane rotate-135 me-2"></i>Bangkok</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <div class="d-flex align-items-center gap-2">
                                            <span
                                                class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium rounded">5.0</span>
                                            <span class="fs-14 text-gray-5">21 Reviews</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="fs-14 text-gray-5 me-2">From</span>
                                            <span class="fs-18 fw-semibold text-primary">$300</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="trending-list-item">
                                <div class="place-img">
                                    <a href="{{url('flight-details')}}">
                                        <img src="{{URL::asset('build/img/flight/flight-02.jpg')}}" class="img-fluid" alt="img">
                                    </a>
                                    <div class="fav-item">
                                        <span class="badge bg-white text-dark">45 Seats Left</span>
                                        <button class="fav-icon border-0">
                                            <i class="isax isax-heart5"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <h3 class="text-truncate mb-2 home-eight-title"><a
                                            href="{{url('flight-details')}}">Cloudrider 789</a></h3>
                                    <div class="d-flex align-items-center mb-3">
                                        <span class="avatar avatar-sm me-2">
                                            <img src="{{URL::asset('build/img/icons/airindia.svg')}}" class="rounded-circle" alt="icon">
                                        </span>
                                        <p class="fs-14 mb-0">Indigo</p>
                                        <p class="fs-14 d-inline-flex align-items-center mb-0"><i
                                                class="fa-solid fa-circle fs-6 text-primary mx-2"></i>1-stop at
                                            Frankfurt</p>
                                    </div>
                                    <div class="flight-loc d-flex align-items-center justify-content-between mb-3">
                                        <span class="loc-name d-inline-flex align-items-center"><i
                                                class="isax isax-airplane rotate-45 me-2"></i>Chicago</span>
                                        <span class="arrow-icon"><i class="isax isax-arrow-2"></i></span>
                                        <span class="loc-name d-inline-flex align-items-center"><i
                                                class="isax isax-airplane rotate-135 me-2"></i>Melbourne</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <div class="d-flex align-items-center gap-2">
                                            <span
                                                class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium rounded">5.0</span>
                                            <span class="fs-14 text-gray-5">21 Reviews</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="fs-14 text-gray-5 me-2">From</span>
                                            <span class="fs-18 fw-semibold text-primary">$300</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="trending-list-item">
                                <div class="place-img">
                                    <a href="{{url('flight-details')}}">
                                        <img src="{{URL::asset('build/img/flight/flight-03.jpg')}}" class="img-fluid" alt="img">
                                    </a>
                                    <div class="fav-item">
                                        <span class="badge bg-white text-dark">32 Seats Left</span>
                                        <button class="fav-icon border-0">
                                            <i class="isax isax-heart5"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <h3 class="text-truncate mb-2 home-eight-title"><a href="{{url('flight-details')}}">Aether Express 901</a></h3>
                                    <div class="d-flex align-items-center mb-3">
                                        <span class="avatar avatar-sm me-2">
                                            <img src="{{URL::asset('build/img/icons/airindia.svg')}}" class="rounded-circle" alt="icon">
                                        </span>
                                        <p class="fs-14 mb-0">Air India</p>
                                        <p class="fs-14 d-inline-flex align-items-center mb-0"><i
                                                class="fa-solid fa-circle fs-6 text-primary mx-2"></i>1-stop at Seoul
                                        </p>
                                    </div>
                                    <div class="flight-loc d-flex align-items-center justify-content-between mb-3">
                                        <span class="loc-name d-inline-flex align-items-center"><i
                                                class="isax isax-airplane rotate-45 me-2"></i>Miami</span>
                                        <span class="arrow-icon"><i class="isax isax-arrow-2"></i></span>
                                        <span class="loc-name d-inline-flex align-items-center"><i
                                                class="isax isax-airplane rotate-135 me-2"></i>Tokyo</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <div class="d-flex align-items-center gap-2">
                                            <span
                                                class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium rounded">5.0</span>
                                            <span class="fs-14 text-gray-5">22 Reviews</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="fs-14 text-gray-5 me-2">From</span>
                                            <span class="fs-18 fw-semibold text-primary">$450</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="trending-list-item">
                                <div class="place-img">
                                    <a href="{{url('flight-details')}}">
                                        <img src="{{URL::asset('build/img/flight/flight-04.jpg')}}" class="img-fluid" alt="img">
                                    </a>
                                    <div class="fav-item">
                                        <span class="badge bg-white text-dark">66 Seats Left</span>
                                        <button class="fav-icon">
                                            <i class="isax isax-heart5"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <h3 class="text-truncate mb-2 home-eight-title"><a href="{{url('flight-details')}}">Silverwing 505</a></h3>
                                    <div class="d-flex align-items-center mb-3">
                                        <span class="avatar avatar-sm me-2">
                                            <img src="{{URL::asset('build/img/icons/airindia.svg')}}" class="rounded-circle" alt="icon">
                                        </span>
                                        <p class="fs-14 mb-0">Emirates</p>
                                        <p class="fs-14 d-inline-flex align-items-center mb-0"><i
                                                class="fa-solid fa-circle fs-6 text-primary mx-2"></i>1-stop at London
                                        </p>
                                    </div>
                                    <div class="flight-loc d-flex align-items-center justify-content-between mb-3">
                                        <span class="loc-name d-inline-flex align-items-center"><i
                                                class="isax isax-airplane rotate-45 me-2"></i>Boston</span>
                                        <span class="arrow-icon"><i class="isax isax-arrow-2"></i></span>
                                        <span class="loc-name d-inline-flex align-items-center"><i
                                                class="isax isax-airplane rotate-135 me-2"></i>Singapore</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <div class="d-flex align-items-center gap-2">
                                            <span
                                                class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium rounded">4.9</span>
                                            <span class="fs-14 text-gray-5">99 Reviews</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="fs-14 text-gray-5 me-2">From</span>
                                            <span class="fs-18 fw-semibold text-primary">$700</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-2">
                    <div class="row  row-gap-4 justify-content-center">

                        <!-- Hotel Grid -->
                        <div class="col-xl-3 col-md-6 d-flex">
                            <div class="trending-list-item">
                                <div class="place-img">
                                    <div class="img-slide">
                                        <div class="slide-images">
                                            <a href="{{url('hotel-details')}}">
                                                <img src="{{URL::asset('build/img/hotels/hotel-01.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item">
                                        <span class="badge bg-info d-inline-flex align-items-center"><i
                                                class="isax isax-ranking me-1"></i>Trending</span>
                                        <a href="#" class="fav-icon selected">
                                            <i class="isax isax-heart5"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="d-flex align-items-center mb-1">
                                        <span
                                            class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>
                                        <p class="fs-14">(400 Reviews)</p>
                                    </div>
                                    <h5 class="mb-1 text-truncate"><a href="{{url('hotel-details')}}">Hotel Plaza Athenee</a>
                                    </h5>
                                    <p class="d-flex align-items-center mb-2"><i
                                            class="isax isax-location5 me-2"></i>Ciutat Vella, Barcelona</p>
                                    <div class="border-top pt-2 mb-2">
                                        <h6 class="d-flex align-items-center">Facillities :<i
                                                class="isax isax-home-wifi ms-2 me-2 text-primary"></i><i
                                                class="isax isax-scissor me-2 text-primary"></i><i
                                                class="isax isax-profile-2user me-2 text-primary"></i><i
                                                class="isax isax-wind-2 me-2 text-primary"></i><a href="#"
                                                class="fs-14 fw-normal text-default d-inline-block">+2</a></h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <h5 class="text-primary text-nowrap me-2">$500 <span
                                                class="fs-14 fw-normal text-default">/ Night</span></h5>
                                        <a href="#" class="d-flex align-items-center overflow-hidden">
                                            <span class="avatar avatar-md shrink-0 me-2">
                                                <img src="{{URL::asset('build/img/users/user-08.jpg')}}" class="rounded-circle"
                                                    alt="img">
                                            </span>
                                            <p class="fs-14">Beth Will</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Hotel Grid -->

                        <!-- Hotel Grid -->
                        <div class="col-xl-3 col-md-6 d-flex">
                            <div class="trending-list-item">
                                <div class="place-img">
                                    <a href="{{url('hotel-details')}}">
                                        <img src="{{URL::asset('build/img/hotels/hotel-05.jpg')}}" class="img-fluid" alt="img">
                                    </a>
                                    <div class="fav-item">
                                        <span class="badge bg-info d-inline-flex align-items-center"><i
                                                class="isax isax-ranking me-1"></i>Trending</span>
                                        <button class="fav-icon border-0">
                                            <i class="isax isax-heart5"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="d-flex align-items-center mb-1">
                                        <span
                                            class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">4.7</span>
                                        <p class="fs-14">(360 Reviews)</p>
                                    </div>
                                    <h5 class="mb-1 text-truncate"><a href="{{url('hotel-details')}}">The Luxe Haven</a></h5>
                                    <p class="d-flex align-items-center mb-2"><i
                                            class="isax isax-location5 me-2"></i>Oxford Street, London</p>
                                    <div class="border-top pt-2 mb-2">
                                        <h6 class="d-flex align-items-center">Facillities :<i
                                                class="isax isax-home-wifi ms-2 me-2 text-primary"></i><i
                                                class="isax isax-scissor me-2 text-primary"></i><i
                                                class="isax isax-profile-2user me-2 text-primary"></i><i
                                                class="isax isax-wind-2 me-2 text-primary"></i><a href="#"
                                                class="fs-14 fw-normal text-default d-inline-block">+2</a></h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <h5 class="text-primary text-nowrap me-2">$600 <span
                                                class="fs-14 fw-normal text-default">/ Night</span></h5>
                                        <a href="#" class="d-flex align-items-center overflow-hidden">
                                            <span class="avatar avatar-md shrink-0 me-2">
                                                <img src="{{URL::asset('build/img/users/user-09.jpg')}}" class="rounded-circle"
                                                    alt="img">
                                            </span>
                                            <p class="fs-14">Andrews</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Hotel Grid -->

                        <!-- Hotel Grid -->
                        <div class="col-xl-3 col-md-6 d-flex">
                            <div class="trending-list-item">
                                <div class="place-img">
                                    <a href="{{url('hotel-details')}}">
                                        <img src="{{URL::asset('build/img/hotels/hotel-06.jpg')}}" class="img-fluid" alt="img">
                                    </a>
                                    <div class="fav-item">
                                        <span class="badge bg-info d-inline-flex align-items-center"><i
                                                class="isax isax-ranking me-1"></i>Trending</span>
                                        <button class="fav-icon border-0">
                                            <i class="isax isax-heart5"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="d-flex align-items-center mb-1">
                                        <span
                                            class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">4.5</span>
                                        <p class="fs-14">(500 Reviews)</p>
                                    </div>
                                    <h5 class="mb-1 text-truncate"><a href="{{url('hotel-details')}}">The Urban Retreat</a>
                                    </h5>
                                    <p class="d-flex align-items-center mb-2"><i
                                            class="isax isax-location5 me-2"></i>Princes Street, Edinburgh</p>
                                    <div class="border-top pt-2 mb-2">
                                        <h6 class="d-flex align-items-center">Facillities :<i
                                                class="isax isax-home-wifi ms-2 me-2 text-primary"></i><i
                                                class="isax isax-scissor me-2 text-primary"></i><i
                                                class="isax isax-profile-2user me-2 text-primary"></i><i
                                                class="isax isax-wind-2 me-2 text-primary"></i><a href="#"
                                                class="fs-14 fw-normal text-default d-inline-block">+2</a></h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <h5 class="text-primary text-nowrap me-2">$500 <span
                                                class="fs-14 fw-normal text-default">/ Night</span></h5>
                                        <a href="#" class="d-flex align-items-center overflow-hidden">
                                            <span class="avatar avatar-md shrink-0 me-2">
                                                <img src="{{URL::asset('build/img/users/user-10.jpg')}}" class="rounded-circle"
                                                    alt="img">
                                            </span>
                                            <p class="fs-14">Robert</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Hotel Grid -->

                        <!-- Hotel Grid -->
                        <div class="col-xl-3 col-md-6 d-flex">
                            <div class="trending-list-item">
                                <div class="place-img">
                                    <div class="img-slide">
                                        <div class="slide-images">
                                            <a href="{{url('hotel-details')}}">
                                                <img src="{{URL::asset('build/img/hotels/hotel-08.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item">
                                        <span class="badge bg-info d-inline-flex align-items-center"><i
                                                class="isax isax-ranking me-1"></i>Trending</span>
                                        <a href="#" class="fav-icon selected">
                                            <i class="isax isax-heart5"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="d-flex align-items-center mb-1">
                                        <span
                                            class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">4.3</span>
                                        <p class="fs-14">(380 Reviews)</p>
                                    </div>
                                    <h5 class="mb-1 text-truncate"><a href="{{url('hotel-details')}}">Hotel Evergreen </a>
                                    </h5>
                                    <p class="d-flex align-items-center mb-2"><i
                                            class="isax isax-location5 me-2"></i>King’s Road, Chelsea</p>
                                    <div class="border-top pt-2 mb-2">
                                        <h6 class="d-flex align-items-center">Facillities :<i
                                                class="isax isax-home-wifi ms-2 me-2 text-primary"></i><i
                                                class="isax isax-scissor me-2 text-primary"></i><i
                                                class="isax isax-profile-2user me-2 text-primary"></i><i
                                                class="isax isax-wind-2 me-2 text-primary"></i><a href="#"
                                                class="fs-14 fw-normal text-default d-inline-block">+2</a></h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <h5 class="text-primary text-nowrap me-2">$550 <span
                                                class="fs-14 fw-normal text-default">/ Night</span></h5>
                                        <a href="#" class="d-flex align-items-center overflow-hidden">
                                            <span class="avatar avatar-md shrink-0 me-2">
                                                <img src="{{URL::asset('build/img/users/user-12.jpg')}}" class="rounded-circle"
                                                    alt="img">
                                            </span>
                                            <p class="fs-14">Timothy</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Hotel Grid -->

                    </div>
                </div>
                <div class="tab-pane fade" id="tab-3">
                    <div class="row  row-gap-4 justify-content-center">

                        <!-- Car Grid -->
                        <div class="col-xl-3 col-md-6 col-md-6 d-flex">
                            <div class="trending-list-item">
                                <div class="place-img">
                                    <div class="img-slide">
                                        <div class="slide-images">
                                            <a href="{{url('car-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-06.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>

                                    </div>
                                    <div class="fav-item">
                                        <a href="#" class="fav-icon selected">
                                            <i class="isax isax-heart5"></i>
                                        </a>
                                        <span class="badge bg-info d-inline-flex align-items-center"><i
                                                class="isax isax-ranking me-1"></i>Trending</span>
                                    </div>

                                </div>
                                <div class="place-content">
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <div class="d-flex flex-wrap align-items-center">
                                            <span class="badge badge-secondary  fs-10 fw-medium me-1">Sedan</span>
                                        </div>
                                    </div>
                                    <h5 class="mb-1 text-truncate"><a href="{{url('car-details')}}">Toyota Camry SE 400</a>
                                    </h5>
                                    <p class="d-flex align-items-center mb-3"><i
                                            class="isax isax-location5 me-2"></i>Ciutat Vella, Barcelona</p>
                                    <div class="mb-3 p-2 border rounded">
                                        <div class="row">
                                            <div class="col border-end">
                                                <span class="fs-14 d-flex align-items-center text-dark"><i
                                                        class="isax isax-gas-station me-1"></i>Fuel</span>
                                                <p class="text-dark fs-14">Hybrid</p>
                                            </div>
                                            <div class="col border-end">
                                                <span class="fs-14 d-flex align-items-center text-dark"><i
                                                        class="isax isax-kanban me-1"></i>Gear</span>
                                                <p class="text-dark fs-14">Manual</p>
                                            </div>
                                            <div class="col">
                                                <span class="fs-14 d-flex align-items-center text-dark"><i
                                                        class="isax isax-routing-2 me-1"></i>Travelled</span>
                                                <p class="text-dark fs-14">14,000 KM</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <div class="d-flex flex-wrap align-items-center me-2">
                                            <h5 class="text-primary">$500 <span class="fs-14 text-gray-6 fw-normal">/
                                                    day</span></h5>

                                        </div>
                                        <div class="ms-2 d-flex align-items-center">
                                            <div class="d-flex align-items-center flex-wrap">
                                                <span
                                                    class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-1">5.0</span>
                                                <p class="fs-14">(400 Reviews)</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Car Grid -->

                        <!-- Car Grid -->
                        <div class="col-xl-3 col-md-6 d-flex">
                            <div class="trending-list-item">
                                <div class="place-img">
                                    <div class="img-slide">
                                        <div class="slide-images">
                                            <a href="{{url('car-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-07.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>

                                    </div>
                                    <div class="fav-item">
                                        <button class="fav-icon border-0">
                                            <i class="isax isax-heart5"></i>
                                        </button>
                                        <span class="badge bg-info d-inline-flex align-items-center"><i
                                                class="isax isax-ranking me-1"></i>Trending</span>
                                    </div>

                                </div>
                                <div class="place-content">
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <div class="d-flex flex-wrap align-items-center">
                                            <span class="badge badge-secondary  fs-10 fw-medium me-1">Sedan</span>
                                        </div>
                                    </div>
                                    <h5 class="mb-1 text-truncate"><a href="{{url('car-details')}}">Ford Mustang 4.0 AT</a>
                                    </h5>
                                    <p class="d-flex align-items-center mb-3"><i
                                            class="isax isax-location5 me-2"></i>Oxford Street, London</p>
                                    <div class="mb-3 p-2 border rounded">
                                        <div class="row">
                                            <div class="col border-end">
                                                <span class="fs-14 d-flex align-items-center text-dark"><i
                                                        class="isax isax-gas-station me-1"></i>Fuel</span>
                                                <p class="text-dark fs-14">Diesel</p>
                                            </div>
                                            <div class="col border-end">
                                                <span class="fs-14 d-flex align-items-center text-dark"><i
                                                        class="isax isax-kanban me-1"></i>Gear</span>
                                                <p class="text-dark fs-14">Manual</p>
                                            </div>
                                            <div class="col">
                                                <span class="fs-14 d-flex align-items-center text-dark"><i
                                                        class="isax isax-routing-2 me-1"></i>Travelled</span>
                                                <p class="text-dark fs-14">10,300 KM</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <div class="d-flex flex-wrap align-items-center me-2">
                                            <h5 class="text-primary">$600 <span class="fs-14 text-gray-6 fw-normal">/
                                                    day</span></h5>

                                        </div>
                                        <div class="ms-2 d-flex align-items-center">
                                            <div class="d-flex align-items-center flex-wrap">
                                                <span
                                                    class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-1">4.7</span>
                                                <p class="fs-14">(300 Reviews)</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Car Grid -->

                        <!-- Car Grid -->
                        <div class="col-xl-3 col-md-6 d-flex">
                            <div class="trending-list-item">
                                <div class="place-img">
                                    <div class="img-slide">
                                        <div class="slide-images">
                                            <a href="{{url('car-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-08.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>

                                    </div>
                                    <div class="fav-item">
                                        <button class="fav-icon border-0">
                                            <i class="isax isax-heart5"></i>
                                        </button>
                                        <span class="badge bg-info d-inline-flex align-items-center"><i
                                                class="isax isax-ranking me-1"></i>Trending</span>
                                    </div>

                                </div>
                                <div class="place-content">
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <div class="d-flex flex-wrap align-items-center">
                                            <span class="badge badge-secondary  fs-10 fw-medium me-1">Sedan</span>
                                        </div>
                                    </div>
                                    <h5 class="mb-1 text-truncate"><a href="{{url('car-details')}}">Ferrari 458 MM Special</a>
                                    </h5>
                                    <p class="d-flex align-items-center mb-3"><i
                                            class="isax isax-location5 me-2"></i>Princes Street, Edinburgh</p>
                                    <div class="mb-3 p-2 border rounded">
                                        <div class="row">
                                            <div class="col border-end">
                                                <span class="fs-14 d-flex align-items-center text-dark"><i
                                                        class="isax isax-gas-station me-1"></i>Fuel</span>
                                                <p class="text-dark fs-14">Hybrid</p>
                                            </div>
                                            <div class="col border-end">
                                                <span class="fs-14 d-flex align-items-center text-dark"><i
                                                        class="isax isax-kanban me-1"></i>Gear</span>
                                                <p class="text-dark fs-14">Auto</p>
                                            </div>
                                            <div class="col">
                                                <span class="fs-14 d-flex align-items-center text-dark"><i
                                                        class="isax isax-routing-2 me-1"></i>Travelled</span>
                                                <p class="text-dark fs-14">13,000 KM</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <div class="d-flex flex-wrap align-items-center me-2">
                                            <h5 class="text-primary">$300 <span class="fs-14 text-gray-6 fw-normal">/
                                                    day</span></h5>

                                        </div>
                                        <div class="ms-2 d-flex align-items-center">
                                            <div class="d-flex align-items-center flex-wrap">
                                                <span
                                                    class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-1">4.0</span>
                                                <p class="fs-14">(320 Reviews)</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Car Grid -->

                        <!-- Car Grid -->
                        <div class="col-xl-3 col-md-6 d-flex">
                            <div class="trending-list-item">
                                <div class="place-img">
                                    <div class="img-slide">
                                        <div class="slide-images">
                                            <a href="{{url('car-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-09.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>

                                    </div>
                                    <div class="fav-item">
                                        <button class="fav-icon border-0">
                                            <i class="isax isax-heart5"></i>
                                        </button>
                                        <span class="badge bg-info d-inline-flex align-items-center"><i
                                                class="isax isax-ranking me-1"></i>Trending</span>
                                    </div>

                                </div>
                                <div class="place-content">
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <div class="d-flex flex-wrap align-items-center">
                                            <span class="badge badge-secondary  fs-10 fw-medium me-1">Sedan</span>
                                        </div>
                                    </div>
                                    <h5 class="mb-1 text-truncate"><a href="{{url('car-details')}}">Mercedes-benz
                                            Convertible</a></h5>
                                    <p class="d-flex align-items-center mb-3"><i
                                            class="isax isax-location5 me-2"></i>Princes Street, Edinburgh</p>
                                    <div class="mb-3 p-2 border rounded">
                                        <div class="row">
                                            <div class="col border-end">
                                                <span class="fs-14 d-flex align-items-center text-dark"><i
                                                        class="isax isax-gas-station me-1"></i>Fuel</span>
                                                <p class="text-dark fs-14">Hybrid</p>
                                            </div>
                                            <div class="col border-end">
                                                <span class="fs-14 d-flex align-items-center text-dark"><i
                                                        class="isax isax-kanban me-1"></i>Gear</span>
                                                <p class="text-dark fs-14">Auto</p>
                                            </div>
                                            <div class="col">
                                                <span class="fs-14 d-flex align-items-center text-dark"><i
                                                        class="isax isax-routing-2 me-1"></i>Travelled</span>
                                                <p class="text-dark fs-14">10,000 KM</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <div class="d-flex flex-wrap align-items-center me-2">
                                            <h5 class="text-primary">$400 <span class="fs-14 text-gray-6 fw-normal">/
                                                    day</span></h5>

                                        </div>
                                        <div class="ms-2 d-flex align-items-center">
                                            <div class="d-flex align-items-center flex-wrap">
                                                <span
                                                    class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-1">4.0</span>
                                                <p class="fs-14">(380 Reviews)</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Car Grid -->

                    </div>
                </div>
                <div class="tab-pane fade" id="tab-4">
                    <div class="row justify-content-center">

                        <!-- Cruise Grid -->
                        <div class="col-xl-3 col-md-6 d-flex">
                            <div class="trending-list-item">
                                <div class="place-img">
                                    <div class="img-slide">
                                        <div class="slide-images">
                                            <a href="{{url('cruise-details')}}">
                                                <img src="{{URL::asset('build/img/cruise/cruise-05.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item">
                                        <a href="#" class="fav-icon selected">
                                            <i class="isax isax-heart5"></i>
                                        </a>
                                        <span class="badge bg-info d-inline-flex align-items-center"><i
                                                class="isax isax-ranking me-1"></i>Trending</span>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <a href="#" class="d-flex align-items-center overflow-hidden me-2">
                                            <span class="avatar avatar-md shrink-0 me-2">
                                                <img src="{{URL::asset('build/img/users/user-08.jpg')}}" class="rounded-circle"
                                                    alt="img">
                                            </span>
                                            <p class="fs-14 text-truncate">Beth Williams</p>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <span
                                                class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">4.9</span>
                                            <p class="fs-14 text-truncate">(400)</p>
                                        </div>
                                    </div>
                                    <h5 class="mb-1 text-truncate"><a href="{{url('cruise-details')}}">Super Aquamarine</a>
                                    </h5>
                                    <p class="d-flex align-items-center mb-3"><i
                                            class="isax isax-location5 me-2"></i>Ciutat Vella, Barcelona</p>
                                    <div class="curise-details d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <p class="mb-1"><i class="isax isax-calendar-2 text-gray-6 me-1"></i>Year :
                                                <span class="text-dark fw-medium">2021</span>
                                            </p>
                                            <p><i class="isax isax-user me-1"></i>Guests : <span
                                                    class="text-dark fw-medium">4</span></p>
                                        </div>
                                        <div>
                                            <p class="mb-1"><i class="isax isax-fatrows text-gray-6 me-1"></i>Width :
                                                <span class="text-dark fw-medium">88.47 m</span>
                                            </p>
                                            <p><i class="isax isax-flash-1 me-1"></i>Speed : <span
                                                    class="text-dark fw-medium">19 Knots</span></p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <h6 class="d-flex align-items-center"><i
                                                class="isax isax-home-wifi ms-2 me-2"></i><i
                                                class="isax isax-scissor me-2"></i><i
                                                class="isax isax-profile-2user me-2"></i><i
                                                class="isax isax-wind-2 me-2"></i><a href="#"
                                                class="fs-14 fw-normal text-default d-inline-block">+2</a></h6>
                                        <h5 class="text-primary text-nowrap me-2">$500 <span
                                                class="fs-14 fw-normal text-default">/ day</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Cruise Grid -->

                        <!-- Cruise Grid -->
                        <div class="col-xl-3 col-md-6 d-flex">
                            <div class="trending-list-item">
                                <div class="place-img">
                                    <a href="{{url('cruise-details')}}">
                                        <img src="{{URL::asset('build/img/cruise/cruise-12.jpg')}}" class="img-fluid" alt="img">
                                    </a>
                                    <div class="fav-item">
                                        <button class="fav-icon border-0">
                                            <i class="isax isax-heart5"></i>
                                        </button>
                                        <span class="badge bg-info d-inline-flex align-items-center"><i
                                                class="isax isax-ranking me-1"></i>Trending</span>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <a href="#" class="d-flex align-items-center overflow-hidden me-2">
                                            <span class="avatar avatar-md shrink-0 me-2">
                                                <img src="{{URL::asset('build/img/users/user-09.jpg')}}" class="rounded-circle"
                                                    alt="img">
                                            </span>
                                            <p class="fs-14 text-truncate">Tom Andrews</p>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <span
                                                class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">4.7</span>
                                            <p class="fs-14 text-truncate">(300)</p>
                                        </div>
                                    </div>
                                    <h5 class="mb-1 text-truncate"><a href="{{url('cruise-details')}}">Bonnie Yacht</a></h5>
                                    <p class="d-flex align-items-center mb-3"><i
                                            class="isax isax-location5 me-2"></i>Oxford Street, London</p>
                                    <div class="curise-details d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <p class="mb-1"><i class="isax isax-calendar-2 text-gray-6 me-1"></i>Year :
                                                <span class="text-dark fw-medium">2020</span>
                                            </p>
                                            <p><i class="isax isax-user me-1"></i>Guests : <span
                                                    class="text-dark fw-medium">3</span></p>
                                        </div>
                                        <div>
                                            <p class="mb-1"><i class="isax isax-fatrows text-gray-6 me-1"></i>Width :
                                                <span class="text-dark fw-medium">70.63 m</span>
                                            </p>
                                            <p><i class="isax isax-flash-1 me-1"></i>Speed : <span
                                                    class="text-dark fw-medium">17 Knots</span></p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <h6 class="d-flex align-items-center"><i
                                                class="isax isax-home-wifi ms-2 me-2"></i><i
                                                class="isax isax-scissor me-2"></i><i
                                                class="isax isax-profile-2user me-2"></i><i
                                                class="isax isax-wind-2 me-2"></i><a href="#"
                                                class="fs-14 fw-normal text-default d-inline-block">+2</a></h6>
                                        <h5 class="text-primary text-nowrap me-2">$600 <span
                                                class="fs-14 fw-normal text-default">/ day</span></h5>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Cruise Grid -->

                        <!-- Cruise Grid -->
                        <div class="col-xl-3 col-md-6 d-flex">
                            <div class="trending-list-item">
                                <div class="place-img">
                                    <a href="{{url('cruise-details')}}">
                                        <img src="{{URL::asset('build/img/cruise/cruise-09.jpg')}}" class="img-fluid" alt="img">
                                    </a>
                                    <div class="fav-item">
                                        <button class="fav-icon border-0">
                                            <i class="isax isax-heart5"></i>
                                        </button>
                                        <span class="badge bg-info d-inline-flex align-items-center"><i
                                                class="isax isax-ranking me-1"></i>Trending</span>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <a href="#" class="d-flex align-items-center overflow-hidden me-2">
                                            <span class="avatar avatar-md shrink-0 me-2">
                                                <img src="{{URL::asset('build/img/users/user-10.jpg')}}" class="rounded-circle"
                                                    alt="img">
                                            </span>
                                            <p class="fs-14 text-truncate ">Robert Cogs</p>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <span
                                                class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">4.5</span>
                                            <p class="fs-14 text-truncate">(320)</p>
                                        </div>
                                    </div>
                                    <h5 class="mb-1 text-truncate"><a href="{{url('cruise-details')}}">Coral Cruiser</a></h5>
                                    <p class="d-flex align-items-center mb-3"><i
                                            class="isax isax-location5 me-2"></i>Princes Street, Edinburgh</p>
                                    <div class="curise-details d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <p class="mb-1"><i class="isax isax-calendar-2 text-gray-6 me-1"></i>Year :
                                                <span class="text-dark fw-medium">2021</span>
                                            </p>
                                            <p><i class="isax isax-user me-1"></i>Guests : <span
                                                    class="text-dark fw-medium">4</span></p>
                                        </div>
                                        <div>
                                            <p class="mb-1"><i class="isax isax-fatrows text-gray-6 me-1"></i>Width :
                                                <span class="text-dark fw-medium">88.47 m</span>
                                            </p>
                                            <p><i class="isax isax-flash-1 me-1"></i>Speed : <span
                                                    class="text-dark fw-medium">19 Knots</span></p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <h6 class="d-flex align-items-center"><i
                                                class="isax isax-home-wifi ms-2 me-2"></i><i
                                                class="isax isax-scissor me-2"></i><i
                                                class="isax isax-profile-2user me-2"></i><i
                                                class="isax isax-wind-2 me-2"></i><a href="#"
                                                class="fs-14 fw-normal text-default d-inline-block">+2</a></h6>
                                        <h5 class="text-primary text-nowrap me-2">$500 <span
                                                class="fs-14 fw-normal text-default">/ day</span></h5>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Cruise Grid -->

                        <!-- Cruise Grid -->
                        <div class="col-xl-3 col-md-6 d-flex">
                            <div class="trending-list-item">
                                <div class="place-img">
                                    <a href="{{url('cruise-details')}}">
                                        <img src="{{URL::asset('build/img/cruise/cruise-08.jpg')}}" class="img-fluid" alt="img">
                                    </a>
                                    <div class="fav-item">
                                        <button class="fav-icon border-0">
                                            <i class="isax isax-heart5"></i>
                                        </button>
                                        <span class="badge bg-info d-inline-flex align-items-center"><i
                                                class="isax isax-ranking me-1"></i>Trending</span>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <a href="#" class="d-flex align-items-center overflow-hidden me-2">
                                            <span class="avatar avatar-md shrink-0 me-2">
                                                <img src="{{URL::asset('build/img/users/user-11.jpg')}}" class="rounded-circle"
                                                    alt="img">
                                            </span>
                                            <p class="fs-14 text-truncate ">Kenneth Pal</p>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <span
                                                class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">4.3</span>
                                            <p class="fs-14 text-truncate">(380)</p>
                                        </div>
                                    </div>
                                    <h5 class="mb-1 text-truncate"><a href="{{url('cruise-details')}}">Harbor Haven</a></h5>
                                    <p class="d-flex align-items-center mb-3"><i
                                            class="isax isax-location5 me-2"></i>Princes Street, Edinburgh</p>
                                    <div class="curise-details d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <p class="mb-1"><i class="isax isax-calendar-2 text-gray-6 me-1"></i>Year :
                                                <span class="text-dark fw-medium">2016</span>
                                            </p>
                                            <p><i class="isax isax-user me-1"></i>Guests : <span
                                                    class="text-dark fw-medium">6</span></p>
                                        </div>
                                        <div>
                                            <p class="mb-1"><i class="isax isax-fatrows text-gray-6 me-1"></i>Width :
                                                <span class="text-dark fw-medium">98.15 m</span>
                                            </p>
                                            <p><i class="isax isax-flash-1 me-1"></i>Speed : <span
                                                    class="text-dark fw-medium">14 Knots</span></p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <h6 class="d-flex align-items-center"><i
                                                class="isax isax-home-wifi ms-2 me-2"></i><i
                                                class="isax isax-scissor me-2"></i><i
                                                class="isax isax-profile-2user me-2"></i><i
                                                class="isax isax-wind-2 me-2"></i><a href="#"
                                                class="fs-14 fw-normal text-default d-inline-block">+2</a></h6>
                                        <h5 class="text-primary text-nowrap me-2">$300 <span
                                                class="fs-14 fw-normal text-default">/ day</span></h5>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Cruise Grid -->

                    </div>
                </div>
                <div class="tab-pane fade" id="tab-5">
                    <div class="row row-gap-4 justify-content-center">

                        <!-- Tours Grid -->
                        <div class="col-xl-3 col-md-6 d-flex">
                            <div class="trending-list-item">
                                <div class="place-img">
                                    <div class="img-slide">
                                        <div class="slide-images">
                                            <a href="{{url('tour-details')}}">
                                                <img src="{{URL::asset('build/img/tours/tours-06.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item">
                                        <a href="#" class="fav-icon selected">
                                            <i class="isax isax-heart5"></i>
                                        </a>
                                        <span class="badge bg-info d-inline-flex align-items-center"><i
                                                class="isax isax-ranking me-1"></i>Trending</span>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <div class="d-flex flex-wrap align-items-center">
                                            <span class="me-1"><i class="ti ti-receipt text-primary"></i></span>
                                            <p class="fs-14 text-gray-9">Ecotourism</p>
                                        </div>
                                        <span class="d-inline-block border vertical-splits">
                                            <span
                                                class="bglight text-light d-flex align-items-center justify-content-center"></span>
                                        </span>
                                        <div class="d-flex align-items-center flex-wrap">
                                            <span
                                                class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-1">5.0</span>
                                            <p class="fs-14">(105 Reviews)</p>
                                        </div>
                                    </div>
                                    <h5 class="mb-1 text-truncate"><a href="{{url('tour-details')}}">Rainbow Mountain
                                            Valley</a></h5>
                                    <p class="d-flex align-items-center mb-3"><i
                                            class="isax isax-location5 me-2"></i>Ciutat Vella, Barcelona</p>
                                    <div class="mb-3">
                                        <h6 class="d-flex align-items-center text-gray-6 fs-14 fw-normal">Starts From
                                            <span class="ms-1 fs-18 fw-semibold text-primary">$500</span><span
                                                class="ms-1 fs-18 fw-semibold text-gray-3 text-decoration-line-through">$789</span>
                                        </h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <div class="d-flex flex-wrap align-items-center me-2">
                                            <span class="me-1"><i
                                                    class="isax isax-calendar-tick text-gray-6"></i></span>
                                            <p class="fs-14 text-gray-9">4 Day,3 Night</p>
                                        </div>
                                        <span class="d-inline-block border vertical-splits">
                                            <span
                                                class="bglight text-light d-flex align-items-center justify-content-center"></span>
                                        </span>
                                        <div class="ms-2 d-flex align-items-center">
                                            <p class="fs-14 text-gray-9 mb-0 text-truncate d-flex align-items-center">
                                                <i class="isax isax-profile-2user me-1"></i>14 Guests
                                            </p>
                                            <a href="#" class="avatar avatar-sm ms-3">
                                                <img src="{{URL::asset('build/img/users/user-08.jpg')}}" class="rounded-circle"
                                                    alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Tours Grid -->

                        <!-- Tours Grid -->
                        <div class="col-xl-3 col-md-6 d-flex">
                            <div class="trending-list-item">
                                <div class="place-img">
                                    <div class="img-slide">
                                        <div class="slide-images">
                                            <a href="{{url('tour-details')}}">
                                                <img src="{{URL::asset('build/img/tours/tours-08.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item">
                                        <button class="fav-icon border-0">
                                            <i class="isax isax-heart5"></i>
                                        </button>
                                        <span class="badge bg-info d-inline-flex align-items-center"><i
                                                class="isax isax-ranking me-1"></i>Trending</span>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <div class="d-flex flex-wrap align-items-center">
                                            <span class="me-1"><i class="ti ti-receipt text-primary"></i></span>
                                            <p class="fs-14 text-gray-9 text-truncate">Adventure Tour</p>
                                        </div>
                                        <span class="d-inline-block border vertical-splits">
                                            <span
                                                class="bglight text-light d-flex align-items-center justify-content-center"></span>
                                        </span>
                                        <div class="d-flex align-items-center flex-wrap">
                                            <span
                                                class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-1">4.7</span>
                                            <p class="fs-14">(110 Reviews)</p>
                                        </div>
                                    </div>
                                    <h5 class="mb-1 text-truncate"><a href="{{url('tour-details')}}">Mystic Falls</a></h5>
                                    <p class="d-flex align-items-center mb-3"><i
                                            class="isax isax-location5 me-2"></i>Oxford Street, London</p>
                                    <div class="mb-3">
                                        <h6 class="d-flex align-items-center text-gray-6 fs-14 fw-normal">Starts From
                                            <span class="ms-1 fs-18 fw-semibold text-primary">$600</span><span
                                                class="ms-1 fs-18 fw-semibold text-gray-3 text-decoration-line-through">$700</span>
                                        </h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <div class="d-flex flex-wrap align-items-center me-2">
                                            <span class="me-1"><i
                                                    class="isax isax-calendar-tick text-gray-6"></i></span>
                                            <p class="fs-14 text-gray-9">3 Day, 2 Night</p>
                                        </div>
                                        <span class="d-inline-block border vertical-splits">
                                            <span
                                                class="bglight text-light d-flex align-items-center justify-content-center"></span>
                                        </span>
                                        <div class="ms-2 d-flex align-items-center">
                                            <p class="fs-14 text-gray-9 mb-0 text-truncate d-flex align-items-center">
                                                <i class="isax isax-profile-2user me-1"></i>12 Guests
                                            </p>
                                            <a href="#" class="avatar avatar-sm ms-3">
                                                <img src="{{URL::asset('build/img/users/user-09.jpg')}}" class="rounded-circle"
                                                    alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Tours Grid -->

                        <!-- Tours Grid -->
                        <div class="col-xl-3 col-md-6 d-flex">
                            <div class="trending-list-item">
                                <div class="place-img">
                                    <div class="img-slide">
                                        <div class="slide-images">
                                            <a href="{{url('tour-details')}}">
                                                <img src="{{URL::asset('build/img/tours/tours-09.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item">
                                        <button class="fav-icon border-0">
                                            <i class="isax isax-heart5"></i>
                                        </button>
                                        <span class="badge bg-info d-inline-flex align-items-center"><i
                                                class="isax isax-ranking me-1"></i>Trending</span>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <div class="d-flex flex-wrap align-items-center">
                                            <span class="me-1"><i class="ti ti-receipt text-primary"></i></span>
                                            <p class="fs-14 text-gray-9 text-truncate">Summer Trip</p>
                                        </div>
                                        <span class="d-inline-block border vertical-splits">
                                            <span
                                                class="bglight text-light d-flex align-items-center justify-content-center"></span>
                                        </span>
                                        <div class="d-flex align-items-center flex-wrap">
                                            <span
                                                class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-1">4.7</span>
                                            <p class="fs-14">(180 Reviews)</p>
                                        </div>
                                    </div>
                                    <h5 class="mb-1 text-truncate"><a href="{{url('tour-details')}}">Crystal Lake</a></h5>
                                    <p class="d-flex align-items-center mb-3"><i
                                            class="isax isax-location5 me-2"></i>Princes Street, Edinburgh</p>
                                    <div class="mb-3">
                                        <h6 class="d-flex align-items-center text-gray-6 fs-14 fw-normal">Starts From
                                            <span class="ms-1 fs-18 fw-semibold text-primary">$300</span><span
                                                class="ms-1 fs-18 fw-semibold text-gray-3 text-decoration-line-through">$500</span>
                                        </h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <div class="d-flex flex-wrap align-items-center me-2">
                                            <span class="me-1"><i
                                                    class="isax isax-calendar-tick text-gray-6"></i></span>
                                            <p class="fs-14 text-gray-9">5 Day, 4 Night</p>
                                        </div>
                                        <span class="d-inline-block border vertical-splits">
                                            <span
                                                class="bglight text-light d-flex align-items-center justify-content-center"></span>
                                        </span>
                                        <div class="ms-2 d-flex align-items-center">
                                            <p class="fs-14 text-gray-9 mb-0 text-truncate d-flex align-items-center">
                                                <i class="isax isax-profile-2user me-1"></i>16 Guests
                                            </p>
                                            <a href="#" class="avatar avatar-sm ms-3">
                                                <img src="{{URL::asset('build/img/users/user-10.jpg')}}" class="rounded-circle"
                                                    alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Tours Grid -->

                        <!-- Tours Grid -->
                        <div class="col-xl-3 col-md-6 d-flex">
                            <div class="trending-list-item">
                                <div class="place-img">
                                    <div class="img-slide">
                                        <div class="slide-images">
                                            <a href="{{url('tour-details')}}">
                                                <img src="{{URL::asset('build/img/tours/tours-07.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item">
                                        <button class="fav-icon border-0">
                                            <i class="isax isax-heart5"></i>
                                        </button>
                                        <span class="badge bg-info d-inline-flex align-items-center"><i
                                                class="isax isax-ranking me-1"></i>Trending</span>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <div class="d-flex flex-wrap align-items-center">
                                            <span class="me-1"><i class="ti ti-receipt text-primary"></i></span>
                                            <p class="fs-14 text-gray-9 text-truncate">Adventure Tour</p>
                                        </div>
                                        <span class="d-inline-block border vertical-splits">
                                            <span
                                                class="bglight text-light d-flex align-items-center justify-content-center"></span>
                                        </span>
                                        <div class="d-flex align-items-center flex-wrap">
                                            <span
                                                class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-1">4.9</span>
                                            <p class="fs-14">(300 Reviews)</p>
                                        </div>
                                    </div>
                                    <h5 class="mb-1 text-truncate"><a href="{{url('tour-details')}}">Majestic Peaks</a></h5>
                                    <p class="d-flex align-items-center mb-3"><i
                                            class="isax isax-location5 me-2"></i>Deansgate, Manchester</p>
                                    <div class="mb-3">
                                        <h6 class="d-flex align-items-center text-gray-6 fs-14 fw-normal">Starts From
                                            <span class="ms-1 fs-18 fw-semibold text-primary">$400</span><span
                                                class="ms-1 fs-18 fw-semibold text-gray-3 text-decoration-line-through">$480</span>
                                        </h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <div class="d-flex flex-wrap align-items-center me-2">
                                            <span class="me-1"><i
                                                    class="isax isax-calendar-tick text-gray-6"></i></span>
                                            <p class="fs-14 text-gray-9">3 Day, 2 Night</p>
                                        </div>
                                        <span class="d-inline-block border vertical-splits">
                                            <span
                                                class="bglight text-light d-flex align-items-center justify-content-center"></span>
                                        </span>
                                        <div class="ms-2 d-flex align-items-center">
                                            <p class="fs-14 text-gray-9 mb-0 text-truncate d-flex align-items-center">
                                                <i class="isax isax-profile-2user me-1"></i>10 Guests
                                            </p>
                                            <a href="#" class="avatar avatar-sm ms-3">
                                                <img src="{{URL::asset('build/img/users/user-11.jpg')}}" class="rounded-circle"
                                                    alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Tours Grid -->

                    </div>
                </div>

                <div class="tab-pane fade" id="tab-6">
                    <div class="row row-gap-4 justify-content-center">

                        <!-- Activity Grid -->
                        <div class="col-xl-3 col-md-6 d-flex">
                            <div class="trending-list-item">
                                <div class="place-img">
                                    <a href="{{url('activity-details')}}">
                                        <img src="{{URL::asset('build/img/activities/activity-01.jpg')}}" class="img-fluid" alt="img">
                                    </a>
                                    <div class="fav-item">
                                        <button class="fav-icon selected border-0">
                                            <i class="isax isax-heart5"></i>
                                        </button>
                                        <span class="badge bg-info d-inline-flex align-items-center"><i
                                                class="isax isax-ranking me-1"></i>Trending</span>
                                    </div>
                                </div>
                                <div class="place-content activity-content">
                                    <div class="d-flex align-items-center badge-right">
                                        <span class="rating fs-12 me-1">
                                            <i class="fas fa-star filled"></i>
                                        </span>
                                        <p class="fs-14 text-gray-2">
                                            <span class="fs-14 fw-medium text-gray-9">4.9</span> (672 reviews)
                                        </p>
                                    </div>
                                    <h5 class="mt-1 mb-1 text-truncate"><a href="{{url('activity-details')}}">Snorkeling Tour</a></h5>
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <p class="d-flex align-items-center fs-14 mb-0">
                                            <i class="isax isax-location5 me-1"></i> Phuket, Thailand
                                        </p>
                                        <p class="d-flex align-items-center fs-14 mb-0">
                                            <i class="isax isax-clock5 me-1"></i> 4 hrs
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">

                                        <h5 class="text-primary text-nowrap d-flex align-items-center gap-1"><span
                                                class="fs-14 fw-normal text-gray-6">Starts From</span> $400 <span
                                                class="text-gray-3 text-line">$480</span></h5>
                                        <a href="#" class="d-flex align-items-center overflow-hidden">
                                            <span class="avatar avatar-md shrink-0">
                                                <img src="{{URL::asset('build/img/users/user-08.jpg')}}" class="rounded-circle"
                                                    alt="img">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Activity Grid -->

                        <!-- Activity Grid -->
                        <div class="col-xl-3 col-md-6 d-flex">
                            <div class="trending-list-item">
                                <div class="place-img">
                                    <a href="{{url('activity-details')}}">
                                        <img src="{{URL::asset('build/img/activities/activity-02.jpg')}}" class="img-fluid" alt="img">
                                    </a>
                                    <div class="fav-item">
                                        <button class="fav-icon border-0">
                                            <i class="isax isax-heart5"></i>
                                        </button>
                                        <span class="badge bg-info d-inline-flex align-items-center"><i
                                                class="isax isax-ranking me-1"></i>Trending</span>
                                    </div>
                                </div>
                                <div class="place-content activity-content">
                                    <div class="d-flex align-items-center badge-right">
                                        <span class="rating fs-12 me-1">
                                            <i class="fas fa-star filled"></i>
                                        </span>
                                        <p class="fs-14 text-gray-2">
                                            <span class="fs-14 fw-medium text-gray-9">4.6</span> (450 reviews)
                                        </p>
                                    </div>
                                    <h5 class="mt-1 mb-1 text-truncate"><a href="{{url('activity-details')}}">Alpine Snowboarding</a></h5>
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <p class="d-flex align-items-center fs-14 mb-0">
                                            <i class="isax isax-location5 me-1"></i> Zermatt, Switzerland
                                        </p>
                                        <p class="d-flex align-items-center fs-14 mb-0">
                                            <i class="isax isax-clock5 me-1"></i> 3 hrs
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">

                                        <h5 class="text-primary text-nowrap d-flex align-items-center gap-1"><span
                                                class="fs-14 fw-normal text-gray-6">Starts From</span> $150 <span
                                                class="text-gray-3 text-line">$200</span></h5>
                                        <a href="#" class="d-flex align-items-center overflow-hidden">
                                            <span class="avatar avatar-md shrink-0me-1">
                                                <img src="{{URL::asset('build/img/users/user-09.jpg')}}" class="rounded-circle"
                                                    alt="img">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Activity Grid -->

                        <!-- Activity Grid -->
                        <div class="col-xl-3 col-md-6 d-flex">
                            <div class="trending-list-item">
                                <div class="place-img">
                                    <a href="{{url('activity-details')}}">
                                        <img src="{{URL::asset('build/img/activities/activity-03.jpg')}}" class="img-fluid" alt="img">
                                    </a>
                                    <div class="fav-item">
                                        <button class="fav-icon border-0">
                                            <i class="isax isax-heart5"></i>
                                        </button>
                                        <span class="badge bg-info d-inline-flex align-items-center"><i
                                                class="isax isax-ranking me-1"></i>Trending</span>
                                    </div>
                                </div>
                                <div class="place-content activity-content">
                                    <div class="d-flex align-items-center badge-right">
                                        <span class="rating fs-12 me-1">
                                            <i class="fas fa-star filled"></i>
                                        </span>
                                        <p class="fs-14 text-gray-2">
                                            <span class="fs-14 fw-medium text-gray-9">4.5</span> (320 reviews)
                                        </p>
                                    </div>
                                    <h5 class="mt-1 mb-1 text-truncate"><a href="{{url('activity-details')}}">White Water Rafting</a></h5>
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <p class="d-flex align-items-center fs-14 mb-0">
                                            <i class="isax isax-location5 me-1"></i> Rotorua, New Zealand
                                        </p>
                                        <p class="d-flex align-items-center fs-14 mb-0">
                                            <i class="isax isax-clock5 me-1"></i> 5 hrs
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">

                                        <h5 class="text-primary text-nowrap d-flex align-items-center gap-1"><span
                                                class="fs-14 fw-normal text-gray-6">Starts From</span> $350 <span
                                                class="text-gray-3 text-line">$400</span></h5>
                                        <a href="#" class="d-flex align-items-center overflow-hidden">
                                            <span class="avatar avatar-md shrink-0">
                                                <img src="{{URL::asset('build/img/users/user-10.jpg')}}" class="rounded-circle"
                                                    alt="img">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Activity Grid -->

                        <!-- Activity Grid -->
                        <div class="col-xl-3 col-md-6 d-flex">
                            <div class="trending-list-item">
                                <div class="place-img">
                                    <a href="{{url('activity-details')}}">
                                        <img src="{{URL::asset('build/img/activities/activity-04.jpg')}}" class="img-fluid" alt="img">
                                    </a>
                                    <div class="fav-item">
                                        <button class="fav-icon border-0">
                                            <i class="isax isax-heart5"></i>
                                        </button>
                                        <span class="badge bg-info d-inline-flex align-items-center"><i class="isax isax-ranking me-1"></i>Trending</span>
                                    </div>
                                </div>
                                <div class="place-content activity-content">
                                    <div class="d-flex align-items-center badge-right">
                                        <span class="rating fs-12 me-1">
                                            <i class="fas fa-star filled"></i>
                                        </span>
                                        <p class="fs-14 text-gray-2">
                                            <span class="fs-14 fw-medium text-gray-9">4.2</span> (280 reviews)
                                        </p>
                                    </div>
                                    <h5 class="mt-1 mb-1 text-truncate"><a href="{{url('activity-details')}}">Cliffside Paragliding</a></h5>
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <p class="d-flex align-items-center fs-14 mb-0">
                                            <i class="isax isax-location5 me-1"></i> Annecy, France
                                        </p>
                                        <p class="d-flex align-items-center fs-14 mb-0">
                                            <i class="isax isax-clock5 me-1"></i> 2 hrs
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">

                                        <h5 class="text-primary text-nowrap d-flex align-items-center gap-1"><span
                                                class="fs-14 fw-normal text-gray-6">Starts From</span> $300 <span
                                                class="text-gray-3 text-line">$350</span></h5>
                                        <a href="#" class="d-flex align-items-center overflow-hidden">
                                            <span class="avatar avatar-md shrink-0">
                                                <img src="{{URL::asset('build/img/users/user-11.jpg')}}" class="rounded-circle"
                                                    alt="img">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Activity Grid -->

                    </div>
                </div>
                <div class="tab-pane fade" id="tab-7">
                    <div class="row row-gap-4 justify-content-center">

                        <!-- Tours Grid -->
                        <div class="col-xl-3 col-md-6 d-flex">
                            <div class="trending-list-item">
                                <div class="place-img">
                                    <div class="slide-images">
                                        <a href="{{url('visa-details')}}">
                                            <img src="{{URL::asset('build/img/visa/visa-01.jpg')}}" class="img-fluid w-100" alt="img">
                                        </a>
                                    </div>
                                    <div class="fav-item">
                                        <button href="#" class="fav-icon p-2 border-0 selected">
                                            <i class="isax isax-heart5"></i>
                                        </button>
                                        <span class="badge bg-white text-dark d-inline-flex align-items-center">Business
                                            Visa</span>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <div class="d-flex flex-wrap align-items-center me-2">
                                            <span class="me-1"><i class="isax isax-clock text-gray-6"></i></span>
                                            <p class="fs-14 text-gray-9">5-7 Working Days</p>
                                        </div>
                                    </div>
                                    <h5 class="mb-2"><a href="{{url('visa-details')}}">Electronic Visa for Tourism and
                                            Recreation</a></h5>
                                    <div class="d-flex align-items-center gap-0 mb-3">
                                        <p class="d-flex align-items-center fs-14 mb-0 me-2">Mode : Electronic</p>
                                        <p class="fs-14 mb-0"><i
                                                class="ti ti-point-filled text-primary me-2"></i>Validity : 90 Days</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <div class="mb-0">
                                            <h6 class="d-flex align-items-center text-gray-6 fs-14 fw-normal">From <span
                                                    class="ms-1 fs-18 fw-semibold text-primary">$500</span><span
                                                    class="ms-1 fs-14 text-gray-3">/ Person</span></h6>
                                        </div>
                                        <div class="ms-2 d-flex align-items-center">
                                            <p class="d-flex align-items-center fs-14 mb-0"><i
                                                    class="isax isax-location5 me-1"></i>USA</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Tours Grid -->

                        <!-- Tours Grid -->
                        <div class="col-xl-3 col-md-6 d-flex">
                            <div class="trending-list-item">
                                <div class="place-img">
                                    <div class="slide-images">
                                        <a href="{{url('visa-details')}}">
                                            <img src="{{URL::asset('build/img/visa/visa-02.jpg')}}" class="img-fluid w-100" alt="img">
                                        </a>
                                    </div>
                                    <div class="fav-item">
                                        <button href="#" class="fav-icon p-2 border-0">
                                            <i class="isax isax-heart5"></i>
                                        </button>
                                        <span class="badge bg-white text-dark d-inline-flex align-items-center">Student
                                            Visa</span>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <div class="d-flex flex-wrap align-items-center me-2">
                                            <span class="me-1"><i class="isax isax-clock text-gray-6"></i></span>
                                            <p class="fs-14 text-gray-9">2-4 Weeks</p>
                                        </div>
                                    </div>
                                    <h5 class="mb-2"><a href="{{url('visa-details')}}">Long term for Academic with Health
                                            Insurance</a></h5>
                                    <div class="d-flex align-items-center gap-0 mb-3">
                                        <p class="d-flex align-items-center fs-14 mb-0 me-2">Mode : Consular Visa</p>
                                        <p class="fs-14 mb-0"><i
                                                class="ti ti-point-filled text-primary me-2"></i>Validity : 1 Year</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <div class="mb-0">
                                            <h6 class="d-flex align-items-center text-gray-6 fs-14 fw-normal">From <span
                                                    class="ms-1 fs-18 fw-semibold text-primary">$300</span><span
                                                    class="ms-1 fs-14 text-gray-3">/ Person</span></h6>
                                        </div>
                                        <div class="ms-2 d-flex align-items-center">
                                            <p class="d-flex align-items-center fs-14 mb-0"><i
                                                    class="isax isax-location5 me-1"></i>Egypt</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Tours Grid -->

                        <!-- Tours Grid -->
                        <div class="col-xl-3 col-md-6 d-flex">
                            <div class="trending-list-item">
                                <div class="place-img">
                                    <div class="slide-images">
                                        <a href="{{url('visa-details')}}">
                                            <img src="{{URL::asset('build/img/visa/visa-03.jpg')}}" class="img-fluid w-100" alt="img">
                                        </a>
                                    </div>
                                    <div class="fav-item">
                                        <button href="#" class="fav-icon p-2 border-0">
                                            <i class="isax isax-heart5"></i>
                                        </button>
                                        <span class="badge bg-white text-dark d-inline-flex align-items-center">Work
                                            Visa</span>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <div class="d-flex flex-wrap align-items-center me-2">
                                            <span class="me-1"><i class="isax isax-clock text-gray-6"></i></span>
                                            <p class="fs-14 text-gray-9">15-20 Working Days</p>
                                        </div>
                                    </div>
                                    <h5 class="mb-2"><a href="{{url('visa-details')}}">Work Visa for Employment
                                            Opportunities</a></h5>
                                    <div class="d-flex align-items-center gap-0 mb-3">
                                        <p class="d-flex align-items-center fs-14 mb-0 me-2">Mode : Paper</p>
                                        <p class="fs-14 mb-0"><i
                                                class="ti ti-point-filled text-primary me-2"></i>Validity : 2 Years</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <div class="mb-0">
                                            <h6 class="d-flex align-items-center text-gray-6 fs-14 fw-normal">From <span
                                                    class="ms-1 fs-18 fw-semibold text-primary">$800</span><span
                                                    class="ms-1 fs-14 text-gray-3">/ Person</span></h6>
                                        </div>
                                        <div class="ms-2 d-flex align-items-center">
                                            <p class="d-flex align-items-center fs-14 mb-0"><i
                                                    class="isax isax-location5 me-1"></i>Spain</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Tours Grid -->

                        <!-- Tours Grid -->
                        <div class="col-xl-3 col-md-6 d-flex">
                            <div class="trending-list-item">
                                <div class="place-img">
                                    <div class="slide-images">
                                        <a href="{{url('visa-details')}}">
                                            <img src="{{URL::asset('build/img/visa/visa-04.jpg')}}" class="img-fluid w-100" alt="img">
                                        </a>
                                    </div>
                                    <div class="fav-item">
                                        <button href="#" class="fav-icon p-2 border-0">
                                            <i class="isax isax-heart5"></i>
                                        </button>
                                        <span class="badge bg-white text-dark d-inline-flex align-items-center">Transit
                                            Visa</span>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <div class="d-flex flex-wrap align-items-center me-2">
                                            <span class="me-1"><i class="isax isax-clock text-gray-6"></i></span>
                                            <p class="fs-14 text-gray-9">3-5 Working Days</p>
                                        </div>
                                    </div>
                                    <h5 class="mb-2"><a href="{{url('visa-details')}}">Short term Visa for Travelers with
                                            Layovers</a></h5>
                                    <div class="d-flex align-items-center gap-0 mb-3">
                                        <p class="d-flex align-items-center fs-14 mb-0 me-2">Mode : Electronic</p>
                                        <p class="fs-14 mb-0"><i
                                                class="ti ti-point-filled text-primary me-2"></i>Validity : 72 Hours</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <div class="mb-0">
                                            <h6 class="d-flex align-items-center text-gray-6 fs-14 fw-normal">From <span
                                                    class="ms-1 fs-18 fw-semibold text-primary">$100</span><span
                                                    class="ms-1 fs-14 text-gray-3">/ Person</span></h6>
                                        </div>
                                        <div class="ms-2 d-flex align-items-center">
                                            <p class="d-flex align-items-center fs-14 mb-0"><i
                                                    class="isax isax-location5 me-1"></i>Qatar</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Tours Grid -->

                    </div>
                </div>

            </div>
        </div>

    </section>
    <!-- trending list -->

    <!-- why choose -->
    <section class="section why-choose-nine">
       <div class="container">
          <div class="section-head-nine text-center wow fadeInUp">
            <h2>Why <span>Choose</span> Us</h2>
            <span>Everything you need for the perfect journey</span>
          </div>
          <div class="row row-gap-4">
            <div class="col-lg-3 col-md-6 d-flex wow fadeInUp">
               <div class="why-choose-item bg-transparent-primary">
                  <div class="why-choose-icon" style="background-image: url(./build/img/bg/why-choose-bg-1.svg)">
                     <img src="{{URL::asset('./build/img/icons/why-choose-1.svg')}}" alt="img">
                  </div>
                  <div class="home-nine-title mb-2">
                    Global Travel Support
                  </div>
                  <p>24/7 customer support in multiple languages</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex wow fadeInUp">
               <div class="why-choose-item bg-purple-transparent">
                  <div class="why-choose-icon" style="background-image: url(./build/img/bg/why-choose-bg-2.svg)">
                     <img src="{{URL::asset('./build/img/icons/why-choose-4.svg')}}" alt="img">
                  </div>
                  <div class="home-nine-title mb-2">
                    Expert Local Guides
                  </div>
                  <p>Connect with certified local guides for experiences</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex wow fadeInUp">
               <div class="why-choose-item bg-transparent-cyan">
                  <div class="why-choose-icon" style="background-image: url(./build/img/bg/why-choose-bg-3.svg)">
                     <img src="{{URL::asset('./build/img/icons/why-choose-2.svg')}}" alt="img">
                  </div>
                  <div class="home-nine-title mb-2">
                    Visa Assistance
                  </div>
                  <p>Hassle free visa processing and travel document support</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex wow fadeInUp">
               <div class="why-choose-item bg-teal-transparent">
                  <div class="why-choose-icon" style="background-image: url(./build/img/bg/why-choose-bg-4.svg)">
                     <img src="{{URL::asset('./build/img/icons/why-choose-3.svg')}}" alt="img">
                  </div>
                  <div class="home-nine-title mb-2">
                    Luxury Cruises
                  </div>
                  <p>Sail the seas with cruise packages for every budget</p>
                </div>
            </div>
          </div>
       </div>
    </section>
    <!-- why choose -->

    <!-- adventure -->
    <section class="adventure-sec">
        <img src="{{URL::asset('./build/img/bg/adventure-bg.png')}}" alt="img" class="adventure-bg wow fadeInUp">
        <div class="horizontal-slide d-flex" data-direction="right" data-speed="slow">
            <div class="slide-list d-flex">
                <div class="adventure-item">
                    <h3>Adventures</h3>
                </div>
            </div>
        </div>
        <div class="animate-button" data-text="Play Video . Play Video .">
            <p class="button-text"></p>
            <a href="https://youtu.be/Mf_nGEPIsQ8?si=kO4nERbgPHGVDroj" class="button-circle" data-fancybox>
                <i class="isax isax-play"></i>
            </a>
        </div>
    </section>
    <!-- adventure -->

    <!-- tourism -->
    <section class="tourism-sec">
    <img src="{{URL::asset('./build/img/icons/cloud.svg')}}" alt="img" class="tourism-bg1">
    <img src="{{URL::asset('./build/img/icons/cloud-2.svg')}}" alt="img" class="tourism-bg2">
    <div class="container">
        <div class="section-head-nine text-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <h2 class="text-white">Advantages of Our  <span>Tourism</span> Platform</h2>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="tourism-item wow fadeInUp">
                    <div class="tourism-icon">
                        <img src="{{URL::asset('./build/img/icons/tourism-icon1.svg')}}" alt="img">
                    </div>
                    <div class="tourism-content">
                    <h3 class="home-nine-title">Powerful Smart Search</h3>
                    <p>Get instant, personalized travel results using intelligent filters, dynamic pricing.</p>
                    </div>
                </div>
                <div class="tourism-item wow fadeInUp">
                    <div class="tourism-icon">
                        <img src="{{URL::asset('./build/img/icons/tourism-icon2.svg')}}" alt="img">
                    </div>
                    <div class="tourism-content">
                    <h3 class="home-nine-title">Curated Experiences</h3>
                    <p>Handpicked destinations, activities, and guided tours designed by travel experts.</p>
                    </div>
                </div>
                <div class="tourism-item wow fadeInUp">
                    <div class="tourism-icon">
                        <img src="{{URL::asset('./build/img/icons/tourism-icon3.svg')}}" alt="img">
                    </div>
                    <div class="tourism-content">
                    <h3 class="home-nine-title">Best Price Guarantee</h3>
                    <p>Compare multiple providers instantly to secure the best travel deals.</p>
                    </div>
                </div>
                <div class="tourism-item wow fadeInUp">
                    <div class="tourism-icon">
                        <img src="{{URL::asset('./build/img/icons/tourism-icon4.svg')}}" alt="img">
                    </div>
                    <div class="tourism-content">
                    <h3 class="home-nine-title">Global Coverage</h3>
                    <p>Access travel across 150+ countries, flights, hotels, cruises, local experiences.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="tourism-img wow zoomIn">
                    <img src="{{URL::asset('./build/img/tours/tours-70.png')}}" alt="img">
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- tourism -->

    <!-- testimonials -->
    <section class="section testimonials-nine">
        <div class="counter-sec">
            <div class="container">
               <div class="row row-gap-4">
                    <div class="col-xl-3 col-md-6 wow fadeInUp">
                        <div class="testimonials-count">
                            <h3><span class="counter">50</span>+</h3>
                            <div class="fw-medium">Providers Registered</div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 wow fadeInUp">
                        <div class="testimonials-count">
                            <h3><span class="counter">7000</span>+</h3>
                            <div class="fw-medium">Booking Completed</div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 wow fadeInUp">
                        <div class="testimonials-count">
                            <h3><span class="counter">100</span>+</h3>
                            <div class="fw-medium">Clients Globally</div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 wow fadeInUp">
                        <div class="testimonials-count">
                            <h3><span class="counter">254</span>+</h3>
                            <div class="fw-medium">Providers Registered</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-head-nine px-2 text-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
           <h2>Hear From Our <span>Happy Clients</span></h2>
           <span>What people say about us worldwide</span>
        </div>
        <div class="testimonial-slider-nine wow fadeInUp">
            <div class="slider-item">
                <!-- Testimonial Item -->
                <div class="testimonial-item">
                    <div class="rating d-flex align-items-center mb-3">
                        <i class="fa-solid fa-star filled  text-primary me-1 fs-14"></i>
                        <i class="fa-solid fa-star filled  text-primary me-1 fs-14"></i>
                        <i class="fa-solid fa-star filled  text-primary me-1 fs-14"></i>
                        <i class="fa-solid fa-star filled  text-primary me-1 fs-14"></i>
                        <i class="fa-solid fa-star filled  text-primary me-1 fs-14"></i>
                        <span>5.0</span>
                    </div>
                    <p>"The most incredible travel experience of my life! Every detail was perfectly planned and the destinations were breathtaking."</p>
                    <div class="d-flex align-items-center justify-content-between gap-2">
                       <div class="d-flex align-items-center">
                            <a href="#" class="avatar avatar-lg  shrink-0">
                                <img src="{{URL::asset('build/img/users/user-lg-33.jpg')}}" class="rounded-circle" alt="img">
                            </a>
                            <div class="ms-2">
                                <div class="fs-18 fw-semibold text-gray-9 mb-0"><a href="#">Gregg Lewis</a></div>
                                <p class="fs-14">San Diego, CA</p>
                            </div>
                        </div>
                        <div class="quote-icon"><img src="{{URL::asset('./build/img/icons/quote-icon.svg')}}" alt="img"></div>
                    </div>
                </div>
                <!-- Testimonial Item End -->
            </div>
            <div class="slider-item">
                <!-- Testimonial Item -->
                <div class="testimonial-item">
                    <div class="rating d-flex align-items-center mb-3">
                        <i class="fa-solid fa-star filled  text-primary me-1 fs-14"></i>
                        <i class="fa-solid fa-star filled  text-primary me-1 fs-14"></i>
                        <i class="fa-solid fa-star filled  text-primary me-1 fs-14"></i>
                        <i class="fa-solid fa-star filled  text-primary me-1 fs-14"></i>
                        <i class="fa-solid fa-star filled  text-primary me-1 fs-14"></i>
                        <span>5.0</span>
                    </div>
                    <p>"A truly seamless experience from booking to return. The cultural tour was enriching and beautifully organized."</p>
                    <div class="d-flex align-items-center justify-content-between gap-2">
                       <div class="d-flex align-items-center">
                            <a href="#" class="avatar avatar-lg  shrink-0">
                                <img src="{{URL::asset('build/img/users/user-35.jpg')}}" class="rounded-circle" alt="img">
                            </a>
                            <div class="ms-2">
                                <div class="fs-18 fw-semibold text-gray-9 mb-0"><a href="#">Lauren Parker</a></div>
                                <p class="fs-14">Seattle, WA</p>
                            </div>
                        </div>
                        <div class="quote-icon"><img src="{{URL::asset('./build/img/icons/quote-icon.svg')}}" alt="img"></div>
                    </div>
                </div>
                <!-- Testimonial Item End -->
            </div>
            <div class="slider-item">
                <!-- Testimonial Item -->
                <div class="testimonial-item">
                    <div class="rating d-flex align-items-center mb-3">
                        <i class="fa-solid fa-star filled  text-primary me-1 fs-14"></i>
                        <i class="fa-solid fa-star filled  text-primary me-1 fs-14"></i>
                        <i class="fa-solid fa-star filled  text-primary me-1 fs-14"></i>
                        <i class="fa-solid fa-star filled  text-primary me-1 fs-14"></i>
                        <i class="fa-solid fa-star filled  text-primary me-1 fs-14"></i>
                        <span>5.0</span>
                    </div>
                    <p>Very gentle and reassuring during my wisdom tooth extraction. The procedure was quick, recovery was easy, and her staff was amazing.</p>
                    <div class="d-flex align-items-center justify-content-between gap-2">
                       <div class="d-flex align-items-center">
                            <a href="#" class="avatar avatar-lg  shrink-0">
                                <img src="{{URL::asset('build/img/users/user-09.jpg')}}" class="rounded-circle" alt="img">
                            </a>
                            <div class="ms-2">
                                <div class="fs-18 fw-semibold text-gray-9 mb-0"><a href="#">Michael Adams</a></div>
                                <p class="fs-14">Chicago, IL</p>
                            </div>
                        </div>
                        <div class="quote-icon"><img src="{{URL::asset('./build/img/icons/quote-icon.svg')}}" alt="img"></div>
                    </div>
                </div>
                <!-- Testimonial Item End -->
            </div>
            <div class="slider-item">
                <!-- Testimonial Item -->
                <div class="testimonial-item">
                    <div class="rating d-flex align-items-center mb-3">
                        <i class="fa-solid fa-star filled  text-primary me-1 fs-14"></i>
                        <i class="fa-solid fa-star filled  text-primary me-1 fs-14"></i>
                        <i class="fa-solid fa-star filled  text-primary me-1 fs-14"></i>
                        <i class="fa-solid fa-star filled  text-primary me-1 fs-14"></i>
                        <i class="fa-solid fa-star filled  text-primary me-1 fs-14"></i>
                        <span>5.0</span>
                    </div>
                    <p>"The most incredible travel experience of my life! Every detail was perfectly planned and the destinations were breathtaking."</p>
                    <div class="d-flex align-items-center justify-content-between gap-2">
                       <div class="d-flex align-items-center">
                            <a href="#" class="avatar avatar-lg  shrink-0">
                                <img src="{{URL::asset('build/img/users/user-38.jpg')}}" class="rounded-circle" alt="img">
                            </a>
                            <div class="ms-2">
                                <div class="fs-18 fw-semibold text-gray-9 mb-0"><a href="#">Gregg Lewis</a></div>
                                <p class="fs-14">San Diego, CA</p>
                            </div>
                        </div>
                        <div class="quote-icon"><img src="{{URL::asset('./build/img/icons/quote-icon.svg')}}" alt="img"></div>
                    </div>
                </div>
                <!-- Testimonial Item End -->
            </div>

        </div>
        <div class="d-flex align-items-center justify-content-center gap-3 wow fadeInUp">
            <button type="button" class="slick-arrow restaurant-prev"><i class="isax isax-arrow-left-2"></i></button>
            <button type="button" class="slick-arrow restaurant-next"><i class="isax isax-arrow-right-3"></i></button>
        </div>
    </section>
    <!-- testimonials -->



    <!-- blog -->
    <section class="section blog-sec-nine">
    <div class="container">
        <div class="section-head-nine text-center wow fadeInUp">
            <h2>Read Our Latest <span>Stories & Tips</span> Here</h2>
            <span>Resources that cater to travel enthusiasts, with a focus on adventure, gear reviews, and travel tips.</span>
        </div>
    </div>
    <div class="blog-nine-slider wow fadeInUp">
        <div class="blog-nine-item">
            <div class="d-md-flex">
                <div class="blog-nine-img">
                    <a href="#"><img src="{{URL::asset('./build/img/blog/blog-36.jpg')}}" alt="img"></a>
                </div>
                <div class="blog-content">
                    <button class="badge badge-light border-0">Adventure Awaits</button>
                    <div class="home-nine-title mb-2">
                        <a href="#">Unveiling Hidden Gems: Your Next Adventure?</a>
                    </div>
                    <p class="mb-4">Discover uncharted territories and create unforgettable memories...</p>
                    <span class="text-gray-9 d-flex align-items-center"><i class="isax isax-calendar me-1"></i>15 Aug 2026</span>
                </div>
            </div>
        </div>
        <div class="blog-nine-item">
            <div class="d-md-flex">
                <div class="blog-nine-img">
                    <a href="#"><img src="{{URL::asset('./build/img/blog/blog-37.jpg')}}" alt="img"></a>
                </div>
                <div class="blog-content">
                    <button class="badge badge-light border-0">Travel Tips</button>
                    <div class="home-nine-title mb-2">
                        <a href="#">Travel Light: Pack Smart, See More</a>
                    </div>
                    <p class="mb-4">Our guide helps you pack efficiently, so you can focus on your adventure...</p>
                    <span class="text-gray-9 d-flex align-items-center"><i class="isax isax-calendar me-1"></i>10 Sep 2026</span>
                </div>
            </div>
        </div>
        <div class="blog-nine-item">
            <div class="d-md-flex">
                <div class="blog-nine-img">
                    <a href="#"><img src="{{URL::asset('./build/img/blog/blog-38.jpg')}}" alt="img"></a>
                </div>
                <div class="blog-content">
                    <button class="badge badge-light border-0">Destinations</button>
                    <div class="home-nine-title mb-2">
                        <a href="#">Top 5 Hidden Beaches in the Caribbean</a>
                    </div>
                    <p class="mb-4">Escape the crowds and discover pristine shores with our curated list...</p>
                    <span class="text-gray-9 d-flex align-items-center"><i class="isax isax-calendar me-1"></i>01 Dec 2026</span>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center mt-4 wow fadeInUp px-3">
        <a href="{{url('blog-grid')}}" class="btn btn-primary">View All Articles <i class="isax isax-arrow-right-3 ms-2"></i></a>
    </div>
    </section>


<script>
// Debounce function to prevent too many API calls
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Load airports function with error handling
function loadAirports(search = '', target = 'from') {
    // Get the list element
    const listElement = document.querySelector(`.airport-list[data-target="${target}"]`);
    
    if (!listElement) {
        console.error(`Airport list not found for target: ${target}`);
        return;
    }
    
    // Show loading state
    listElement.innerHTML = '<li class="p-2 text-center text-muted">Loading airports...</li>';
    
    // Fetch airports from server
    fetch(`/get-airports?search=${encodeURIComponent(search)}`)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            let html = '';
            
            if (data.length === 0) {
                html = '<li class="p-2 text-center text-muted">No airports found</li>';
            } else {
                data.forEach(airport => {
                    html += `
                        <li class="airport-item p-2 border-bottom"
                            style="cursor:pointer; transition: all 0.3s;"
                            data-target="${target}"
                            data-iata="${airport.iata}"
                            data-city="${airport.city}"
                            data-airport="${airport.name}"
                            onmouseover="this.style.backgroundColor='#f8f9fa'"
                            onmouseout="this.style.backgroundColor='transparent'">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <strong>${escapeHtml(airport.city)}</strong> (${escapeHtml(airport.iata)})
                                    <br>
                                    <small class="text-muted">${escapeHtml(airport.name)}</small>
                                </div>
                                <i class="isax isax-airplane text-primary fs-5"></i>
                            </div>
                        </li>
                    `;
                });
            }
            
            listElement.innerHTML = html;
        })
        .catch(error => {
            console.error('Error loading airports:', error);
            listElement.innerHTML = '<li class="p-2 text-center text-danger">Error loading airports. Please try again.</li>';
        });
}

// Escape HTML to prevent XSS attacks
function escapeHtml(text) {
    if (!text) return '';
    const div = document.createElement('div');
    div.textContent = text;
    return div.innerHTML;
}

// Debounced version of loadAirports
const debouncedLoadAirports = debounce((search, target) => {
    loadAirports(search, target);
}, 300);

// Initialize airport search inputs
document.querySelectorAll('.airport-search').forEach(input => {
    // Remove existing event listener to prevent duplicates
    input.removeEventListener('keyup', input._listener);
    
    // Add new event listener with debounce
    const handler = function(e) {
        let search = this.value;
        let target = this.dataset.target;
        debouncedLoadAirports(search, target);
    };
    
    input.addEventListener('keyup', handler);
    input._listener = handler;
});

// Handle airport selection
document.addEventListener('click', function(e) {
    const airportItem = e.target.closest('.airport-item');
    
    if (airportItem) {
        e.preventDefault();
        
        let target = airportItem.dataset.target;
        let iata = airportItem.dataset.iata;
        let city = airportItem.dataset.city;
        let airport = airportItem.dataset.airport;
        
        console.log(`Selected: ${city} (${iata}) for ${target}`);
        
        // Set values in form fields
        const iataField = document.getElementById(target + '-iata');
        const cityDisplayField = document.getElementById(target + '-city-display');
        const airportDisplayField = document.getElementById(target + '-airport-display');
        
        if (iataField) iataField.value = iata;
        if (cityDisplayField) cityDisplayField.value = city;
        if (airportDisplayField) airportDisplayField.innerHTML = airport;
        
        // Close the dropdown
        const dropdown = airportItem.closest('.dropdown-menu');
        if (dropdown) {
            const dropdownToggle = dropdown.previousElementSibling;
            if (dropdownToggle && dropdownToggle.getAttribute('data-bs-toggle') === 'dropdown') {
                const bsDropdown = bootstrap.Dropdown.getInstance(dropdownToggle);
                if (bsDropdown) {
                    bsDropdown.hide();
                }
            }
        }
        
        // Optional: Trigger change event
        if (cityDisplayField) {
            const event = new Event('change', { bubbles: true });
            cityDisplayField.dispatchEvent(event);
        }
    }
});

// Handle dropdown toggle - load airports when dropdown opens
document.querySelectorAll('.booking-dropdown .dropdown-toggle, .change-drop .dropdown-toggle').forEach(toggle => {
    toggle.addEventListener('shown.bs.dropdown', function() {
        const target = this.querySelector('.airport-search')?.dataset.target;
        if (target) {
            loadAirports('', target);
        }
    });
});

// Initial load
loadAirports('', 'from');
loadAirports('', 'to');

// For multi trip fields (if exists)
if (document.querySelector('.multi-airport-list')) {
    loadAirports('', 'multi-from');
    loadAirports('', 'multi-to');
}

// Optional: Add swap functionality for From/To fields
function swapAirports() {
    const fromCity = document.getElementById('from-city-display');
    const toCity = document.getElementById('to-city-display');
    const fromIata = document.getElementById('from-iata');
    const toIata = document.getElementById('to-iata');
    const fromAirport = document.getElementById('from-airport-display');
    const toAirport = document.getElementById('to-airport-display');
    
    if (fromCity && toCity) {
        // Swap values
        const tempCity = fromCity.value;
        const tempIata = fromIata.value;
        const tempAirport = fromAirport.innerHTML;
        
        fromCity.value = toCity.value;
        fromIata.value = toIata.value;
        fromAirport.innerHTML = toAirport.innerHTML;
        
        toCity.value = tempCity;
        toIata.value = tempIata;
        toAirport.innerHTML = tempAirport;
    }
}

// Add swap button functionality (if exists)
const swapBtn = document.querySelector('.way-icon');
if (swapBtn) {
    swapBtn.addEventListener('click', function(e) {
        e.preventDefault();
        swapAirports();
    });
}

// Form validation before submit — only for flight-grid form (IATA based)
const flightGridForm = document.querySelector('form[action*="search-flights"]');
if (flightGridForm) {
    flightGridForm.addEventListener('submit', function(e) {
        const fromIata = document.getElementById('from-iata');
        const toIata   = document.getElementById('to-iata');

        if (!fromIata?.value || !toIata?.value) {
            e.preventDefault();
            alert('Please select both departure and destination airports from the list');
            return false;
        }

        if (fromIata.value === toIata.value) {
            e.preventDefault();
            alert('Departure and destination cannot be the same');
            return false;
        }
    });
}
</script>

   
<!-- blog -->

<!-- ========================
        End Page Content
    ========================= -->

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {

// ── Hero page: City autocomplete for From/To inputs ──────────────────────────
const heroAjaxRoutes = {
    direct:  '{{ route("flight.ajax.direct") }}',
    oneStop: '{{ route("flight.ajax.onestop") }}',
    twoStop: '{{ route("flight.ajax.twostop") }}'
};

// Simple city autocomplete using the airports API
function heroAutocomplete(inputId) {
    const input = document.getElementById(inputId);
    if (!input) return;

    // Create dropdown
    const dropdown = document.createElement('div');
    dropdown.style.cssText = [
        'position:absolute','top:calc(100% + 2px)','left:0','right:0',
        'z-index:99999','background:#fff','border:1px solid #dee2e6',
        'border-radius:6px','max-height:220px','overflow-y:auto',
        'box-shadow:0 6px 20px rgba(0,0,0,.15)','display:none'
    ].join(';');
    input.closest('.form-item').style.position = 'relative';
    input.closest('.form-item').appendChild(dropdown);

    let timer;

    input.addEventListener('input', function () {
        clearTimeout(timer);
        const val = this.value.trim();
        dropdown.innerHTML = '';

        if (val.length < 1) { dropdown.style.display = 'none'; return; }

        // Show loading
        dropdown.innerHTML = '<div style="padding:10px 14px;color:#999;font-size:13px;">Searching...</div>';
        dropdown.style.display = 'block';

        timer = setTimeout(() => {
            fetch(`/get-airports?search=${encodeURIComponent(val)}`)
                .then(r => r.json())
                .then(data => {
                    dropdown.innerHTML = '';
                    if (!data.length) {
                        dropdown.innerHTML = '<div style="padding:10px 14px;color:#999;font-size:13px;">No cities found</div>';
                        return;
                    }
                    data.slice(0, 10).forEach(airport => {
                        const item = document.createElement('div');
                        item.style.cssText = 'padding:10px 14px;cursor:pointer;border-bottom:1px solid #f5f5f5;font-size:14px;transition:background .15s;';
                        item.innerHTML = `
                            <div style="font-weight:600;color:#222;">${airport.city}</div>
                            <div style="font-size:12px;color:#888;">${airport.name} &bull; <span style="color:#007bff;">${airport.iata}</span></div>
                        `;
                        item.addEventListener('mouseenter', () => item.style.background = '#f0f4ff');
                        item.addEventListener('mouseleave', () => item.style.background = '#fff');
                        item.addEventListener('mousedown', (e) => {
                            e.preventDefault(); // prevent blur before click
                            input.value = airport.city;
                            dropdown.style.display = 'none';
                        });
                        dropdown.appendChild(item);
                    });
                    dropdown.style.display = 'block';
                })
                .catch(() => {
                    dropdown.innerHTML = '<div style="padding:10px 14px;color:#dc3545;font-size:13px;">Error loading suggestions</div>';
                });
        }, 200);
    });

    input.addEventListener('blur', () => {
        setTimeout(() => { dropdown.style.display = 'none'; }, 150);
    });

    input.addEventListener('focus', function () {
        if (this.value.trim().length >= 1 && dropdown.children.length > 0) {
            dropdown.style.display = 'block';
        }
    });

    // Keyboard navigation
    input.addEventListener('keydown', function (e) {
        const items = dropdown.querySelectorAll('div[style*="cursor:pointer"]');
        let active  = dropdown.querySelector('.hero-ac-active');
        let idx     = Array.from(items).indexOf(active);

        if (e.key === 'ArrowDown') {
            e.preventDefault();
            if (active) active.classList.remove('hero-ac-active'), active.style.background = '#fff';
            idx = (idx + 1) % items.length;
            items[idx].classList.add('hero-ac-active');
            items[idx].style.background = '#f0f4ff';
        } else if (e.key === 'ArrowUp') {
            e.preventDefault();
            if (active) active.classList.remove('hero-ac-active'), active.style.background = '#fff';
            idx = (idx - 1 + items.length) % items.length;
            items[idx].classList.add('hero-ac-active');
            items[idx].style.background = '#f0f4ff';
        } else if (e.key === 'Enter') {
            if (active) {
                e.preventDefault();
                const cityEl = active.querySelector('div');
                if (cityEl) { input.value = cityEl.textContent.trim(); dropdown.style.display = 'none'; }
            }
        } else if (e.key === 'Escape') {
            dropdown.style.display = 'none';
        }
    });
}

heroAutocomplete('hero-from-city');
heroAutocomplete('hero-to-city');

// ── Swap button ───────────────────────────────────────────────────────────────
const swapBtn = document.getElementById('hero-swap-btn');
if (swapBtn) {
    swapBtn.addEventListener('click', function () {
        const from = document.getElementById('hero-from-city');
        const to   = document.getElementById('hero-to-city');
        const tmp  = from.value;
        from.value = to.value;
        to.value   = tmp;
    });
}

// ── Round trip toggle ─────────────────────────────────────────────────────────
document.querySelectorAll('input[name="trip_type"]').forEach(radio => {
    radio.addEventListener('change', function () {
        const returnFields = document.querySelectorAll('.round-drip');
        returnFields.forEach(el => {
            el.style.display = this.value === 'roundtrip' ? '' : 'none';
        });
    });
});

// ── Card builders ─────────────────────────────────────────────────────────────
function heroDirectCard(r, i) {
    return `<div class="card mb-3 border-start border-success" style="border-left-width:3px!important">
        <div class="card-body py-3">
            <span class="badge bg-success bg-opacity-10 text-success mb-1">✓ Route ${i+1} — Direct</span>
            <div class="d-flex align-items-center gap-2 fs-16 fw-semibold text-dark mt-1 flex-wrap">
                <span>${r.source_airport}</span><small class="text-muted fw-normal">(${r.source_city})</small>
                <i class="isax isax-arrow-right text-primary"></i>
                <span>${r.destination_airport}</span><small class="text-muted fw-normal">(${r.dest_city})</small>
            </div>
            <p class="mb-0 mt-1 fs-12 text-muted">✈ ${r.airline_name ?? 'Unknown'} (${r.airline_code}) &bull; 0 Stops</p>
        </div>
    </div>`;
}

function heroOneStopCard(r, i) {
    return `<div class="card mb-3 border-start border-primary" style="border-left-width:3px!important">
        <div class="card-body py-3">
            <span class="badge bg-primary bg-opacity-10 text-primary mb-1">✓ Route ${i+1} — 1 Stop</span>
            <div class="d-flex align-items-center gap-2 fs-16 fw-semibold text-dark mt-1 flex-wrap">
                <span>${r.source_airport}</span><small class="text-muted fw-normal">(${r.source_city})</small>
                <i class="isax isax-arrow-right text-primary"></i>
                <span class="text-warning">${r.mid}</span><small class="text-muted fw-normal">(${r.mid_city})</small>
                <i class="isax isax-arrow-right text-primary"></i>
                <span>${r.destination_airport}</span><small class="text-muted fw-normal">(${r.dest_city})</small>
            </div>
            <p class="mb-0 mt-1 fs-12 text-muted">✈ ${r.airline_name1 ?? 'Unknown'} (${r.airline_code1}) &rarr; ${r.airline_name2 ?? 'Unknown'} (${r.airline_code2}) &bull; 1 Stop</p>
        </div>
    </div>`;
}

function heroTwoStopCard(r, i) {
    return `<div class="card mb-3 border-start border-warning" style="border-left-width:3px!important">
        <div class="card-body py-3">
            <span class="badge bg-warning bg-opacity-10 text-warning mb-1">✓ Route ${i+1} — 2 Stops</span>
            <div class="d-flex align-items-center gap-2 fs-16 fw-semibold text-dark mt-1 flex-wrap">
                <span>${r.source_airport}</span><small class="text-muted fw-normal">(${r.source_city})</small>
                <i class="isax isax-arrow-right text-primary"></i>
                <span class="text-warning">${r.mid1}</span><small class="text-muted fw-normal">(${r.mid1_city})</small>
                <i class="isax isax-arrow-right text-primary"></i>
                <span class="text-warning">${r.mid2}</span><small class="text-muted fw-normal">(${r.mid2_city})</small>
                <i class="isax isax-arrow-right text-primary"></i>
                <span>${r.destination_airport}</span><small class="text-muted fw-normal">(${r.dest_city})</small>
            </div>
            <p class="mb-0 mt-1 fs-12 text-muted">✈ ${r.airline_name1 ?? '?'} &rarr; ${r.airline_name2 ?? '?'} &rarr; ${r.airline_name3 ?? '?'} &bull; 2 Stops</p>
        </div>
    </div>`;
}

// ── Helpers ───────────────────────────────────────────────────────────────────
function hShow(id) { const el = document.getElementById(id); if(el) el.classList.remove('d-none'); }
// ── Form submit — redirect to flight-routes page ─────────────────────────────
const heroForm = document.querySelector('.hero-sec-nine form');
if (heroForm) {
    heroForm.addEventListener('submit', function (e) {
        e.preventDefault();

        const fromCity = document.getElementById('hero-from-city').value.trim();
        const toCity   = document.getElementById('hero-to-city').value.trim();

        if (!fromCity || !toCity) {
            alert('Please enter both departure and destination cities.');
            return;
        }

        const url = new URL('{{ route("flight.routes") }}');
        url.searchParams.set('from_city', fromCity);
        url.searchParams.set('to_city', toCity);
        window.location.href = url.toString();
    });
}

}); // DOMContentLoaded
</script>
@endpush


