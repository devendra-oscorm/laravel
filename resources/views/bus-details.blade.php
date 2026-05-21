<?php $page="bus-details";?>
@extends('layout.mainlayout')
@section('content')

    <!-- ========================
        Start Page Content
    ========================= -->

    <!-- Breadcrumb -->
    <div class="breadcrumb-bar breadcrumb-bg-07 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title mb-2">Bus Details</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{url('index')}}"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item">Buses</li>
                            <li class="breadcrumb-item active" aria-current="page">Bus Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- Page Wrapper -->
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-xl-8">

                    <!-- Slider -->
                    <div>
                        <div class="service-wrap slider-wrap-five mb-4">
                            <div class="d-flex align-items-center justify-content-between flex-wrap mb-3">
                                <div class="mb-2">
                                    <h4 class="mb-2 d-flex align-items-center flex-wrap">Red Bird Luxury
                                        <span class="badge badge-xs bg-success rounded-pill ms-2 border-0">
                                            <i class="isax isax-ticket-star5 me-1"></i>
                                            Verified
                                        </span>
                                        <span class="badge badge-xs bg-indigo rounded-pill ms-2">
                                            <i class="isax isax-star5 me-1"></i>
                                            Cheapest
                                        </span>
                                    </h4>
                                    <div class="d-flex align-items-center flex-wrap">
                                        <p class="fs-14 mb-0 me-3 pe-3 border-end d-flex align-items-center mb-2">
                                            <img src="{{URL::asset('build/img/bus/bus-logo-01.svg')}}" class="me-2" alt="Img"> Tata
                                        </p>
                                        <p class="fs-14 mb-0 me-3 pe-3 border-end mb-2">
                                            <span class="badge badge-md bg-orange rounded-pill ms-2">
                                                Seater
                                            </span>
                                        </p>
                                        <div class="d-flex align-items-center mb-2">
                                            <span
                                                class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>
                                            <p class="fs-14"><a href="#reviews">(400 Reviews)</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <a href="#"
                                        class="btn btn-outline-light btn-icon btn-sm d-flex align-items-center justify-content-center me-2"><i
                                            class="isax isax-share"></i></a>
                                    <a href="#" class="btn btn-outline-light btn-sm d-inline-flex align-items-center"><i
                                            class="isax isax-heart5 text-danger me-1"></i>Save</a>
                                </div>
                            </div>
                            <div class="service-wrap mb-4">
                                <div class="slider-wrap">
                                    <div class="owl-carousel service-carousel nav-center mb-4" id="large-img">
                                        <div class="service-img">
                                            <img src="{{URL::asset('build/img/bus/bus-large-01.jpg')}}" class="img-fluid"
                                                alt="Slider Img">
                                        </div>
                                        <div class="service-img">
                                            <img src="{{URL::asset('build/img/bus/bus-large-02.jpg')}}" class="img-fluid"
                                                alt="Slider Img">
                                        </div>
                                        <div class="service-img">
                                            <img src="{{URL::asset('build/img/bus/bus-large-03.jpg')}}" class="img-fluid"
                                                alt="Slider Img">
                                        </div>
                                        <div class="service-img">
                                            <img src="{{URL::asset('build/img/bus/bus-large-04.jpg')}}" class="img-fluid"
                                                alt="Slider Img">
                                        </div>
                                        <div class="service-img">
                                            <img src="{{URL::asset('build/img/bus/bus-large-05.jpg')}}" class="img-fluid"
                                                alt="Slider Img">
                                        </div>
                                        <div class="service-img">
                                            <img src="{{URL::asset('build/img/bus/bus-large-02.jpg')}}" class="img-fluid"
                                                alt="Slider Img">
                                        </div>
                                    </div>
                                    <a href="{{URL::asset('build/img/bus/bus-large-04.jpg')}}" data-fancybox="gallery"
                                        class="btn btn-white btn-xs view-btn"><i class="isax isax-image me-1"></i>See
                                        All</a>
                                </div>
                                <div class="owl-carousel slider-nav-thumbnails nav-center" id="small-img">
                                    <div><img src="{{URL::asset('build/img/bus/bus-thumb-01.jpg')}}" class="img-fluid" alt="Slider Img">
                                    </div>
                                    <div><img src="{{URL::asset('build/img/bus/bus-thumb-02.jpg')}}" class="img-fluid" alt="Slider Img">
                                    </div>
                                    <div><img src="{{URL::asset('build/img/bus/bus-thumb-03.jpg')}}" class="img-fluid" alt="Slider Img">
                                    </div>
                                    <div><img src="{{URL::asset('build/img/bus/bus-thumb-04.jpg')}}" class="img-fluid" alt="Slider Img">
                                    </div>
                                    <div><img src="{{URL::asset('build/img/bus/bus-thumb-05.jpg')}}" class="img-fluid" alt="Slider Img">
                                    </div>
                                    <div><img src="{{URL::asset('build/img/bus/bus-thumb-02.jpg')}}" class="img-fluid" alt="Slider Img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Slider -->

                    <div class="card shadow-none bg-light-200">
                        <div class="card-body pb-1">
                            <h5 class="d-flex align-items-center fs-18 mb-3">
                                <span class="avatar avatar-md rounded-circle bg-primary me-2"><i
                                        class="isax isax-bus"></i></span>
                                Bus Information
                            </h5>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="mb-3">
                                        <h6 class="mb-1">Launched On</h6>
                                        <p>25 May 2025 </p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="mb-3">
                                        <h6 class="mb-1">Transmission</h6>
                                        <p>Manual</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="mb-3">
                                        <h6 class="mb-1">Seats</h6>
                                        <p>200</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="mb-3">
                                        <h6 class="mb-1">Fuel</h6>
                                        <p>200 Liters</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="mb-3">
                                        <h6 class="mb-1">Weight</h6>
                                        <p>8 Tons</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="mb-3">
                                        <h6 class="mb-1">Height</h6>
                                        <p>3.5 Meters</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="mb-3">
                                        <h6 class="mb-1">Length</h6>
                                        <p>12 Meters</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="mb-3">
                                        <h6 class="mb-1">Speed</h6>
                                        <p>80.6 knots</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion custom-accordion accordion-shadow-none">
                        <div class="accordion-item border-0 mb-4">
                            <div class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordion_collapse_two" aria-expanded="true">
                                    Description
                                </button>
                            </div>
                            <div id="accordion_collapse_two" class="accordion-collapse collapse show">
                                <div class="accordion-body pt-0">
                                    <p class="mb-2">The Royal Travels Comfortline Coach is a luxury intercity bus
                                        designed for long-distance comfort. It features ergonomically designed seats,
                                        ample legroom, and personal air vents to ensure a relaxed journey. Each seat
                                        includes a USB charging port, reading light, and foldable tray for added
                                        convenience.

                                    </p>
                                    <div class="read-more">
                                        <div class="more-text">
                                            <p>The coach is equipped with high-speed Wi-Fi, onboard restrooms, and
                                                climate control systems for a pleasant ride throughout the journey.
                                                Passengers can enjoy entertainment screens, bottle holders, and storage
                                                compartments for luggage and personal items
                                            </p>
                                        </div>
                                        <a href="#"
                                            class="fs-14 fw-medium more-link text-decoration-underline mb-2">Show
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-0 border-0 pb-1">
                            <div class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordion_collapse_three" aria-expanded="true">
                                    Amenities
                                </button>
                            </div>
                            <div id="accordion_collapse_three" class="accordion-collapse collapse show">
                                <div class="accordion-body pt-0">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="mb-3">
                                                <h6 class="mb-2">Comfort & Seating</h6>
                                                <div class="d-flex align-items-center mb-2">
                                                    <i class="isax isax-verify text-primary me-2 fs-16"></i>
                                                    <p>Reclining semi sleeper seats</p>
                                                </div>
                                                <div class="d-flex align-items-center mb-2">
                                                    <i class="isax isax-verify text-primary me-2 fs-16"></i>
                                                    <p>Extra legroom and footrests</p>
                                                </div>
                                                <div class="d-flex align-items-center mb-2">
                                                    <i class="isax isax-verify text-primary me-2 fs-16"></i>
                                                    <p>Personal reading lights</p>
                                                </div>
                                                <div class="d-flex align-items-center mb-2">
                                                    <i class="isax isax-verify text-primary me-2 fs-16"></i>
                                                    <p>Clean blankets and pillows</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="mb-3">
                                                <h6 class="mb-2">Connectivity & Entertainment</h6>
                                                <div class="d-flex align-items-center mb-2">
                                                    <i class="isax isax-verify text-primary me-2 fs-16"></i>
                                                    <p>Free high-speed Wi-Fi</p>
                                                </div>
                                                <div class="d-flex align-items-center mb-2">
                                                    <i class="isax isax-verify text-primary me-2 fs-16"></i>
                                                    <p>USB charging ports at every seat</p>
                                                </div>
                                                <div class="d-flex align-items-center mb-2">
                                                    <i class="isax isax-verify text-primary me-2 fs-16"></i>
                                                    <p>Individual entertainment screens</p>
                                                </div>
                                                <div class="d-flex align-items-center mb-2">
                                                    <i class="isax isax-verify text-primary me-2 fs-16"></i>
                                                    <p>Bluetooth headphone support</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="mb-3">
                                                <h6 class="mb-2">Travel Assistance</h6>
                                                <div class="d-flex align-items-center mb-2">
                                                    <i class="isax isax-verify text-primary me-2 fs-16"></i>
                                                    <p>GPS tracking with live updates</p>
                                                </div>
                                                <div class="d-flex align-items-center mb-2">
                                                    <i class="isax isax-verify text-primary me-2 fs-16"></i>
                                                    <p>24/7 customer support</p>
                                                </div>
                                                <div class="d-flex align-items-center mb-2">
                                                    <i class="isax isax-verify text-primary me-2 fs-16"></i>
                                                    <p>Bottled water and light snacks</p>
                                                </div>
                                                <div class="d-flex align-items-center mb-2">
                                                    <i class="isax isax-verify text-primary me-2 fs-16"></i>
                                                    <p>Friendly and trained crew</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-4 border-0">
                            <div class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordion_collapse_four" aria-expanded="true">
                                    Gallery
                                </button>
                            </div>
                            <div id="accordion_collapse_four" class="accordion-collapse collapse show">
                                <div class="accordion-body pt-0">
                                    <div class="row row-cols-lg-6 row-cols-sm-4 row-cols-2 g-2">
                                        <div class="col">
                                            <a class="galley-wrap" data-fancybox="gallery"
                                                href="{{URL::asset('build/img/bus/bus-large-01.jpg')}}">
                                                <img src="{{URL::asset('build/img/bus/bus-thumb-01.jpg')}}" alt="img">
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="galley-wrap" data-fancybox="gallery"
                                                href="{{URL::asset('build/img/bus/bus-large-02.jpg')}}">
                                                <img src="{{URL::asset('build/img/bus/bus-thumb-02.jpg')}}" alt="img">
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="galley-wrap" data-fancybox="gallery"
                                                href="{{URL::asset('build/img/bus/bus-large-03.jpg')}}">
                                                <img src="{{URL::asset('build/img/bus/bus-thumb-03.jpg')}}" alt="img">
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="galley-wrap" data-fancybox="gallery"
                                                href="{{URL::asset('build/img/bus/bus-large-04.jpg')}}">
                                                <img src="{{URL::asset('build/img/bus/bus-thumb-04.jpg')}}" alt="img">
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="galley-wrap" data-fancybox="gallery"
                                                href="{{URL::asset('build/img/bus/bus-large-05.jpg')}}">
                                                <img src="{{URL::asset('build/img/bus/bus-thumb-05.jpg')}}" alt="img">
                                            </a>
                                        </div>
                                        <div class="col">
                                            <div
                                                class="galley-wrap more-gallery d-flex align-items-center justify-content-center">
                                                <a data-fancybox="gallery" href="{{URL::asset('build/img/bus/bus-large-01.jpg')}}"
                                                    class="btn btn-white btn-xs"><i
                                                        class="isax isax-image5 me-1"></i>See All</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-4 border-0">
                            <div class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordion_collapse_eight" aria-expanded="true">
                                    Frequently Asked Questions
                                </button>
                            </div>
                            <div id="accordion_collapse_eight" class="accordion-collapse collapse show">
                                <div class="accordion-body pt-0">
                                    <div class="accordion faq-accordion" id="accordionFaq">
                                        <div class="accordion-item show mb-2">
                                            <div class="accordion-header">
                                                <button class="accordion-button fw-medium" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq-collapseOne"
                                                    aria-expanded="false" aria-controls="faq-collapseOne">
                                                    How early should I arrive before departure?
                                                </button>
                                            </div>
                                            <div id="faq-collapseOne" class="accordion-collapse collapse show"
                                                data-bs-parent="#accordionFaq">
                                                <div class="accordion-body">
                                                    <p class="mb-0">
                                                        We recommend arriving at least 30 minutes before the scheduled
                                                        departure time to ensure a smooth and stress-free boarding
                                                        experience. Arriving early allows you to check in your luggage,
                                                        confirm your seat, and settle in comfortably before departure.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item mb-2">
                                            <div class="accordion-header">
                                                <button class="accordion-button fw-medium collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq-two"
                                                    aria-expanded="false" aria-controls="faq-two">
                                                    Can I choose my seat while booking?
                                                </button>
                                            </div>
                                            <div id="faq-two" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionFaq">
                                                <div class="accordion-body">
                                                    <p class="mb-0">
                                                        Some rides may assign seats automatically if you don’t
                                                        explicitly pick one. As one site says: “If you have not reserved
                                                        a seat, but have been assigned a seat on your ticket, please sit
                                                        in the indicated seat.”
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item mb-2">
                                            <div class="accordion-header">
                                                <button class="accordion-button fw-medium collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq-three"
                                                    aria-expanded="false" aria-controls="faq-three">
                                                    Is Wi-Fi available on the bus?
                                                </button>
                                            </div>
                                            <div id="faq-three" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionFaq">
                                                <div class="accordion-body">
                                                    <p class="mb-0">
                                                        It depends on the bus service you’re referring to — some
                                                        long-distance, tourist, or premium intercity buses do offer free
                                                        Wi-Fi, while many city or local buses usually don’t.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <div class="accordion-header">
                                                <button class="accordion-button fw-medium collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq-four"
                                                    aria-expanded="false" aria-controls="faq-four">
                                                    Are food or drinks provided during the trip?
                                                </button>
                                            </div>
                                            <div id="faq-four" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionFaq">
                                                <div class="accordion-body">
                                                    <p class="mb-0">
                                                        On many regular bus services, food or drinks are not provided as
                                                        part of the fare. For example, for IntrCity SmartBus services it
                                                        states: “Consumption of food and drinks is not allowed onboard …
                                                        passengers are encouraged to use rest-stops for meals and
                                                        refreshments.”
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-xl-0 mb-4 shadow-sm p-3 border-0" id="reviews">
                            <div class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordion_collapse_nine" aria-expanded="true">
                                    Reviews
                                </button>
                            </div>
                            <div id="accordion_collapse_nine" class="accordion-collapse collapse show">
                                <div class="accordion-body border-top mt-3 pt-3">
                                    <div>
                                        <div class="d-flex align-items-center justify-content-between flex-wrap mb-2">
                                            <h6 class="mb-3">Reviews (45)</h6>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#add_review"
                                                class="btn btn-primary btn-md mb-3"><i
                                                    class="isax isax-edit-2 me-1"></i>Write a Review</a>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 d-flex">
                                                <div class="rating-item bg-light-200 text-center flex-fill mb-3">
                                                    <h6 class="fw-medium mb-3">Customer Reviews & Ratings</h6>
                                                    <h5 class="display-6">4.9 / 5.0</h5>
                                                    <div
                                                        class="d-inline-flex align-items-center justify-content-center mb-3">
                                                        <i class="ti ti-star-filled text-primary me-1"></i>
                                                        <i class="ti ti-star-filled text-primary me-1"></i>
                                                        <i class="ti ti-star-filled text-primary me-1"></i>
                                                        <i class="ti ti-star-filled text-primary me-1"></i>
                                                        <i class="ti ti-star-filled text-primary"></i>
                                                    </div>
                                                    <p>Based On 2,459 Reviews</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6 d-flex">
                                                <div class="card rating-progress shadow-none flex-fill mb-3">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center mb-2">
                                                            <p class="me-2 text-nowrap mb-0">5 Star Ratings</p>
                                                            <div class="progress w-100" role="progressbar"
                                                                aria-valuenow="90" aria-valuemin="0"
                                                                aria-valuemax="100">
                                                                <div class="progress-bar bg-primary" style="width: 90%">
                                                                </div>
                                                            </div>
                                                            <p class="progress-count ms-2">247</p>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <p class="me-2 text-nowrap mb-0">4 Star Ratings</p>
                                                            <div class="progress mb-0 w-100" role="progressbar"
                                                                aria-valuenow="80" aria-valuemin="0"
                                                                aria-valuemax="100">
                                                                <div class="progress-bar bg-primary" style="width: 80%">
                                                                </div>
                                                            </div>
                                                            <p class="progress-count ms-2">145</p>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <p class="me-2 text-nowrap mb-0">3 Star Ratings</p>
                                                            <div class="progress mb-0 w-100" role="progressbar"
                                                                aria-valuenow="70" aria-valuemin="0"
                                                                aria-valuemax="100">
                                                                <div class="progress-bar bg-primary" style="width: 70%">
                                                                </div>
                                                            </div>
                                                            <p class="progress-count ms-2">600</p>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <p class="me-2 text-nowrap mb-0">2 Star Ratings</p>
                                                            <div class="progress mb-0 w-100" role="progressbar"
                                                                aria-valuenow="90" aria-valuemin="0"
                                                                aria-valuemax="100">
                                                                <div class="progress-bar bg-primary" style="width: 60%">
                                                                </div>
                                                            </div>
                                                            <p class="progress-count ms-2">560</p>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <p class="me-2 text-nowrap mb-0">1 Star Ratings</p>
                                                            <div class="progress mb-0 w-100" role="progressbar"
                                                                aria-valuenow="40" aria-valuemin="0"
                                                                aria-valuemax="100">
                                                                <div class="progress-bar bg-primary" style="width: 40%">
                                                                </div>
                                                            </div>
                                                            <p class="progress-count ms-2">400</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card review-item shadow-none mb-3">
                                            <div class="card-body p-3">
                                                <div class="review-info">
                                                    <div
                                                        class="d-flex align-items-center justify-content-between flex-wrap">
                                                        <div class="d-flex align-items-center mb-2">
                                                            <span class="avatar avatar-lg me-2 flex-shrink-0">
                                                                <img src="{{URL::asset('build/img/users/user-05.jpg')}}"
                                                                    class="rounded-circle" alt="img">
                                                            </span>
                                                            <div>
                                                                <h6 class="fs-16 fw-medium mb-1">Joseph Massey</h6>
                                                                <div
                                                                    class="d-flex align-items-center flex-wrap date-info">
                                                                    <p class="fs-14 mb-0">2 days ago</p>
                                                                    <p
                                                                        class="fs-14 d-inline-flex align-items-center mb-0">
                                                                        <span
                                                                            class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>Unforgettable
                                                                        Stay!
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="#"
                                                            class="btn btn-outline-light btn-md d-inline-flex align-items-center mb-2"><i
                                                                class="isax isax-repeat me-1"></i>Reply</a>
                                                    </div>
                                                    <p class="mb-2">It was a good location however the cocoon concept
                                                        was weird. No tables, chairs etc was difficult as everything
                                                        went on the floor.</p>
                                                    <div class="d-flex align-items-center">
                                                        <a class="avatar avatar-md me-2 mb-2" data-fancybox="gallery"
                                                            href="{{URL::asset('build/img/bus/bus-large-04.jpg')}}">
                                                            <img src="{{URL::asset('build/img/bus/bus-thumb-04.jpg')}}" class="br-10"
                                                                alt="img">
                                                        </a>
                                                        <a class="avatar avatar-md me-2 mb-2" data-fancybox="gallery"
                                                            href="{{URL::asset('build/img/bus/bus-large-02.jpg')}}">
                                                            <img src="{{URL::asset('build/img/bus/bus-thumb-02.jpg')}}" class="br-10"
                                                                alt="img">
                                                        </a>
                                                        <a class="avatar avatar-md me-0 mb-2" data-fancybox="gallery"
                                                            href="{{URL::asset('build/img/bus/bus-large-03.jpg')}}">
                                                            <img src="{{URL::asset('build/img/bus/bus-thumb-03.jpg')}}" class="br-10"
                                                                alt="img">
                                                        </a>
                                                    </div>
                                                    <div class="d-inline-flex align-items-center">
                                                        <a href="#"
                                                            class="d-inline-flex align-items-center fs-14 me-3"><i
                                                                class="isax isax-like-1 me-2"></i>21</a>
                                                        <a href="#" class="d-inline-flex align-items-center me-3"><i
                                                                class="isax isax-dislike me-2"></i>50</a>
                                                        <a href="#" class="d-inline-flex align-items-center me-3"><i
                                                                class="isax isax-heart5 text-danger me-2"></i>45</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card review-item shadow-none mb-3">
                                            <div class="card-body p-3">
                                                <div class="review-info">
                                                    <div
                                                        class="d-flex align-items-center justify-content-between flex-wrap">
                                                        <div class="d-flex align-items-center mb-2">
                                                            <span class="avatar avatar-lg me-2 flex-shrink-0">
                                                                <img src="{{URL::asset('build/img/users/user-21.jpg')}}"
                                                                    class="rounded-circle" alt="img">
                                                            </span>
                                                            <div>
                                                                <h6 class="fs-16 fw-medium mb-1">Jeffrey Jones</h6>
                                                                <div
                                                                    class="d-flex align-items-center flex-wrap date-info">
                                                                    <p class="fs-14 mb-0">2 days ago</p>
                                                                    <p
                                                                        class="fs-14 d-inline-flex align-items-center mb-0">
                                                                        <span
                                                                            class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">4.0</span>Excellent
                                                                        service!
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="#"
                                                            class="btn btn-outline-light btn-md d-inline-flex align-items-center mb-2"><i
                                                                class="isax isax-repeat me-1"></i>Reply</a>
                                                    </div>
                                                    <p class="mb-2">From the moment we arrived, the staff made us feel
                                                        welcome. The rooms were immaculate, and every detail was
                                                        thoughtfully arranged. It was the perfect blend of comfort and
                                                        luxury!</p>
                                                    <div class="d-inline-flex align-items-center">
                                                        <a href="#"
                                                            class="d-inline-flex align-items-center fs-14 me-3"><i
                                                                class="isax isax-like-1 me-2"></i>15</a>
                                                        <a href="#" class="d-inline-flex align-items-center me-3"><i
                                                                class="isax isax-dislike me-2"></i>30</a>
                                                        <a href="#" class="d-inline-flex align-items-center me-3"><i
                                                                class="isax isax-heart5 text-danger me-2"></i>52</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card review-item shadow-none mb-3">
                                            <div class="card-body p-3">
                                                <div class="review-info">
                                                    <div
                                                        class="d-flex align-items-center justify-content-between flex-wrap">
                                                        <div class="d-flex align-items-center mb-2">
                                                            <span class="avatar avatar-lg me-2 flex-shrink-0">
                                                                <img src="{{URL::asset('build/img/users/user-26.jpg')}}"
                                                                    class="rounded-circle" alt="img">
                                                            </span>
                                                            <div>
                                                                <h6 class="fs-16 fw-medium mb-1">Jessie Alves</h6>
                                                                <div
                                                                    class="d-flex align-items-center flex-wrap date-info">
                                                                    <p class="fs-14 mb-0">2 days ago</p>
                                                                    <p
                                                                        class="fs-14 d-inline-flex align-items-center mb-0">
                                                                        <span
                                                                            class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>Convenient
                                                                        Location!
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="#"
                                                            class="btn btn-outline-light btn-md d-inline-flex align-items-center mb-2"><i
                                                                class="isax isax-repeat me-1"></i>Reply</a>
                                                    </div>
                                                    <p class="mb-2">The location was perfect for exploring the city, and
                                                        the views from our room were breathtaking. It made our trip so
                                                        much more enjoyable to stay somewhere central and scenic</p>
                                                    <div class="d-inline-flex align-items-center">
                                                        <a href="#"
                                                            class="d-inline-flex align-items-center fs-14 me-3"><i
                                                                class="isax isax-like-1 me-2"></i>13</a>
                                                        <a href="#" class="d-inline-flex align-items-center me-3"><i
                                                                class="isax isax-dislike me-2"></i>38</a>
                                                        <a href="#" class="d-inline-flex align-items-center me-3"><i
                                                                class="isax isax-heart5 text-danger me-2"></i>75</a>
                                                    </div>
                                                </div>
                                                <div class="review-info reply mt-4 p-3">
                                                    <div
                                                        class="d-flex align-items-center justify-content-between flex-wrap">
                                                        <div class="d-flex align-items-center mb-2">
                                                            <span class="avatar avatar-lg me-2 flex-shrink-0">
                                                                <img src="{{URL::asset('build/img/users/user-25.jpg')}}"
                                                                    class="rounded-circle" alt="img">
                                                            </span>
                                                            <div>
                                                                <h6 class="fs-16 fw-medium mb-1">Adrian Hendriques</h6>
                                                                <div
                                                                    class="d-flex align-items-center flex-wrap date-info">
                                                                    <p class="fs-14 mb-0">2 days ago</p>
                                                                    <p
                                                                        class="fs-14 d-inline-flex align-items-center mb-0">
                                                                        <span
                                                                            class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">2.0</span>Excellent
                                                                        service!
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="#"
                                                            class="btn btn-outline-light btn-md d-inline-flex align-items-center me-2"><i
                                                                class="isax isax-repeat me-1"></i>Reply</a>
                                                    </div>
                                                    <p class="mb-2">Thank you so much for your kind words! We're
                                                        thrilled to hear that our location and views made your trip even
                                                        more enjoyable. We hope to welcome you back soon for another
                                                        scenic stay!</p>
                                                    <div class="d-inline-flex align-items-center">
                                                        <a href="#"
                                                            class="d-inline-flex align-items-center fs-14 me-3"><i
                                                                class="isax isax-like-1 me-2"></i>10</a>
                                                        <a href="#" class="d-inline-flex align-items-center me-3"><i
                                                                class="isax isax-dislike me-2"></i>21</a>
                                                        <a href="#" class="d-inline-flex align-items-center me-3"><i
                                                                class="isax isax-heart5 text-danger me-2"></i>46</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center mb-4 mb-xl-0">
                                            <a href="#"
                                                class="btn btn-primary btn-md d-inline-flex align-items-center justify-content-center mt-2">See
                                                all 4,078 reviews<i class="isax isax-arrow-right-3 ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 theiaStickySidebar">
                    <div class="card shadow-none">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4">
                                <span class="btn btn-outline-light flex-fill"><span class="me-2"><i
                                            class="isax isax-bus"></i></span>Newyork</span>
                                <a href="#" class="way-icon badge badge-primary rounded-pill mx-2">
                                    <i class="fa-solid fa-arrow-right-arrow-left"></i>
                                </a>
                                <span class="btn btn-outline-light flex-fill"><span class="me-2"><i
                                            class="isax isax-bus"></i></span>Las Vegas</span>
                            </div>
                            <div
                                class="d-flex align-items-center justify-content-between bg-light-200 rounded p-3 mb-3">
                                <p class="fs-13 fw-medium mb-0">Starts From</p>
                                <h5 class="text-primary">$500 <span class="fs-14 text-default fw-normal">/ Person</span>
                                </h5>
                            </div>
                            <h5 class="fs-18 mb-3">Check Availability</h5>
                            <div class="banner-form">
                                <form action="{{url('bus-seat-selection')}}" class="form-info border-0">
                                    <div class="form-info border-0">
                                        <div class="form-item dropdown border rounded p-3 mb-3 w-100">
                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                aria-expanded="false" role="menu">
                                                <label class="form-label fs-14 text-default mb-1">From</label>
                                                <input type="text" class="form-control" value="Newyork">
                                                <p class="fs-12 mb-0">USA</p>
                                            </div>
                                            <div class="dropdown-menu dropdown-md p-0">
                                                <div class="input-search p-3 border-bottom">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control"
                                                            placeholder="Search Location">
                                                        <span class="input-group-text px-2 border-start-0"><i
                                                                class="isax isax-search-normal"></i></span>
                                                    </div>
                                                </div>
                                                <ul>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="#">
                                                            <h6 class="fs-16 fw-medium">Newyork</h6>
                                                            <p>USA</p>
                                                        </a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="#">
                                                            <h6 class="fs-16 fw-medium">Boston</h6>
                                                            <p>Spain</p>
                                                        </a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="#">
                                                            <h6 class="fs-16 fw-medium">Northern Virginia</h6>
                                                            <p>USA</p>
                                                        </a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="#">
                                                            <h6 class="fs-16 fw-medium">Los Angeles</h6>
                                                            <p>USA</p>
                                                        </a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="#">
                                                            <h6 class="fs-16 fw-medium">Orlando</h6>
                                                            <p>USA</p>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="form-item dropdown border rounded p-3 mb-3 w-100">
                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                aria-expanded="false" role="menu">
                                                <label class="form-label fs-14 text-default mb-1">To</label>
                                                <h5>Las Vegas</h5>
                                                <p class="fs-12 mb-0">USA</p>
                                            </div>
                                            <div class="dropdown-menu dropdown-md p-0">
                                                <div class="input-search p-3 border-bottom">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control"
                                                            placeholder="Search Location">
                                                        <span class="input-group-text px-2 border-start-0"><i
                                                                class="isax isax-search-normal"></i></span>
                                                    </div>
                                                </div>
                                                <ul>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="#">
                                                            <h6 class="fs-16 fw-medium">Newyork</h6>
                                                            <p>USA</p>
                                                        </a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="#">
                                                            <h6 class="fs-16 fw-medium">Boston</h6>
                                                            <p>Spain</p>
                                                        </a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="#">
                                                            <h6 class="fs-16 fw-medium">Northern Virginia</h6>
                                                            <p>USA</p>
                                                        </a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="#">
                                                            <h6 class="fs-16 fw-medium">Los Angeles</h6>
                                                            <p>USA</p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">
                                                            <h6 class="fs-16 fw-medium">Orlando</h6>
                                                            <p>USA</p>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="form-item border rounded p-3 mb-3 w-100">
                                            <label class="form-label fs-14 text-default mb-1">Departure</label>
                                            <input type="text" class="form-control datetoday">
                                            <p class="fs-12 mb-0">Monday</p>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label fs-14 text-default mb-1">Type</label>
                                            <select class="select">
                                                <option>Seater</option>
                                                <option>Sleeper</option>
                                                <option>Semi Sleeper</option>
                                                <option>AC Sleeper</option>
                                            </select>
                                        </div>
                                        <div class="card shadow-none mb-3">
                                            <div class="card-body p-3 pb-0">
                                                <div class="border-bottom pb-2 mb-2">
                                                    <h6>Details</h6>
                                                </div>
                                                <div class="custom-increment">
                                                    <div class="mb-3 d-flex align-items-center justify-content-between">
                                                        <label class="form-label text-gray-9 mb-0">Adults</label>
                                                        <div class="custom-increment">
                                                            <div class="input-group">
                                                                <span class="input-group-btn float-start">
                                                                    <button type="button"
                                                                        class="quantity-left-minus btn btn-light btn-number"
                                                                        data-type="minus" data-field="">
                                                                        <span><i class="isax isax-minus"></i></span>
                                                                    </button>
                                                                </span>
                                                                <input type="text" name="quantity"
                                                                    class=" input-number bg-transparent" value="01">
                                                                <span class="input-group-btn float-end">
                                                                    <button type="button"
                                                                        class="quantity-right-plus btn btn-light btn-number"
                                                                        data-type="plus" data-field="">
                                                                        <span><i class="isax isax-add"></i></span>
                                                                    </button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 d-flex align-items-center justify-content-between">
                                                        <label class="form-label text-gray-9 mb-0">Infants <span
                                                                class="text-default fw-normal">( 0-12 Yrs
                                                                )</span></label>
                                                        <div class="custom-increment">
                                                            <div class="input-group">
                                                                <span class="input-group-btn float-start">
                                                                    <button type="button"
                                                                        class="quantity-left-minus btn btn-light btn-number"
                                                                        data-type="minus" data-field="">
                                                                        <span><i class="isax isax-minus"></i></span>
                                                                    </button>
                                                                </span>
                                                                <input type="text" name="quantity"
                                                                    class="input-number bg-transparent" value="01">
                                                                <span class="input-group-btn float-end">
                                                                    <button type="button"
                                                                        class="quantity-right-plus btn btn-light btn-number"
                                                                        data-type="plus" data-field="">
                                                                        <span><i class="isax isax-add"></i></span>
                                                                    </button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 d-flex align-items-center justify-content-between">
                                                        <label class="form-label text-gray-9 mb-0">Children <span
                                                                class="text-default fw-normal">( 2-12 Yrs
                                                                )</span></label>
                                                        <div class="custom-increment">
                                                            <div class="input-group">
                                                                <span class="input-group-btn float-start">
                                                                    <button type="button"
                                                                        class="quantity-left-minus btn btn-light btn-number"
                                                                        data-type="minus" data-field="">
                                                                        <span><i class="isax isax-minus"></i></span>
                                                                    </button>
                                                                </span>
                                                                <input type="text" name="quantity"
                                                                    class=" input-number bg-transparent" value="01">
                                                                <span class="input-group-btn float-end">
                                                                    <button type="button"
                                                                        class="quantity-right-plus btn btn-light btn-number"
                                                                        data-type="plus" data-field="">
                                                                        <span><i class="isax isax-add"></i></span>
                                                                    </button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit"
                                        class="btn btn-primary btn-lg search-btn ms-0 w-100 mb-3 fs-14">Select Your Seats
                                        </button>
                                    <div class="d-flex align-items-center justify-content-between mt-1">
                                        <h6 class="fs-14 fw-medium text-success">40 Seats Available on your Search</h6>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Map -->
                    <div class="card shadow-none" id="location">
                        <div class="d-flex">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6509170.989457427!2d-123.80081967108484!3d37.192957227641294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia%2C%20USA!5e0!3m2!1sen!2sin!4v1669181581381!5m2!1sen!2sin"
                                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                                class="contact-map"></iframe>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                                <p class="d-flex align-items-center mb-0"><i
                                        class="isax isax-location5 me-2"></i>15,Adri Street,Ciutat Vella,Barcelona</p>
                            </div>
                        </div>
                    </div>
                    <!-- /Map -->

                    <!-- Enquiry -->
                    <div class="card shadow-none">
                        <div class="card-body">
                            <form action="{{url('bus-details')}}">
                                <h5 class="mb-3 fs-18">Enquire Us</h5>
                                <div class="py-1">
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Phone</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                                <button type="submit"
                                    class="btn btn-primary w-100 btn-lg d-flex align-items-center justify-content-center">Submit
                                    Enquiry</button>
                            </form>
                        </div>
                    </div>
                    <!-- /Enquiry -->

                    <div class="card shadow-none">
                        <div class="card-body">
                            <h5 class="fs-18 mb-3">Why Book With Us</h5>
                            <div>
                                <p class="d-flex align-items-center mb-3">
                                    <span class="avatar avatar-md bg-light rounded-circle text-dark me-2">
                                        <i class="isax isax-medal-star"></i>
                                    </span>Expertise and Experience
                                </p>
                                <p class="d-flex align-items-center mb-3">
                                    <span class="avatar avatar-md bg-light rounded-circle text-dark me-2">
                                        <i class="isax isax-menu"></i>
                                    </span>Tailored Services
                                </p>
                                <p class="d-flex align-items-center mb-3">
                                    <span class="avatar avatar-md bg-light rounded-circle text-dark me-2">
                                        <i class="isax isax-message-minus"></i>
                                    </span>Comprehensive Planning
                                </p>
                                <p class="d-flex align-items-center mb-3">
                                    <span class="avatar avatar-md bg-light rounded-circle text-dark me-2">
                                        <i class="isax isax-user-add"></i>
                                    </span>Client Satisfaction
                                </p>
                                <p class="d-flex align-items-center">
                                    <span class="avatar avatar-md bg-light rounded-circle text-dark me-2">
                                        <i class="isax isax-grammerly"></i>
                                    </span>24/7 Support
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none mb-0">
                        <div class="card-body">
                            <h5 class="fs-18 mb-3">Provider Details</h5>
                            <div class="py-1">
                                <div class="bg-light-500 br-10 mb-3 d-flex align-items-center p-3">
                                    <a href="#" class="avatar avatar-lg flex-shrink-0">
                                        <img src="{{URL::asset('build/img/users/user-05.jpg')}}" alt="img" class="rounded-circle">
                                    </a>
                                    <div class="ms-2 overflow-hidden">
                                        <h6 class="fw-medium text-truncate"><a href="#">Adrian Hendriques</a></h6>
                                        <p class="fs-14">Member Since : 14 May 2024</p>
                                    </div>
                                </div>
                                <div class="border br-10 mb-3 p-3">
                                    <div class="d-flex align-items-center border-bottom pb-3 mb-3">
                                        <span class="avatar avatar-sm me-2 rounded-circle flex-shrink-0 bg-primary"><i
                                                class="isax isax-call-outgoing5"></i></span>
                                        <p>+1 12545 45548</p>
                                    </div>
                                    <div class="d-flex align-items-center border-bottom pb-3 mb-3">
                                        <span class="avatar avatar-sm me-2 rounded-circle flex-shrink-0 bg-primary"><i
                                                class="isax isax-message-search5"></i></span>
                                        <p>Info@example.com</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="avatar avatar-sm me-2 rounded-circle flex-shrink-0 bg-primary"><i
                                                class="isax isax-location-tick5"></i></span>
                                        <p>4635 Pheasant Ridge Road, USA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col-sm-6">
                                    <a href="#"
                                        class="btn btn-light d-flex align-items-center justify-content-center"><i
                                            class="isax isax-messages5 me-2"></i>Whatsapp Us</a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="{{url('chat')}}"
                                        class="btn btn-primary d-flex align-items-center justify-content-center"><i
                                            class="isax isax-message-notif5 me-2"></i>Chat Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->

    <!-- ========================
        End Page Content
    ========================= -->

@endsection



