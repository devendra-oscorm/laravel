<?php $page="destination-details";?>
@extends('layout.mainlayout')
@section('content')

    <!-- ========================
        Start Page Content
    ========================= -->

    <!-- Breadcrumb -->
    <div class="breadcrumb-bar breadcrumb-bg-04 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title mb-2">Destination Details</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{url('index')}}"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item">Destinations</li>
                            <li class="breadcrumb-item active" aria-current="page">Destination Details</li>
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

                    <div class="row row-gap-4 mb-4">
                        <div class="col-5 d-flex">
                            <div class="destination-details-img">
                                <img src="{{URL::asset('build/img/destination/destination-details-img-01.jpg')}}" alt="img"
                                    class="img-fluid w-100 h-100">
                            </div>
                        </div>
                        <div class="col-7 d-flex">
                            <div>
                                <div class="destination-details-img mb-4">
                                    <img src="{{URL::asset('build/img/destination/destination-details-img-02.jpg')}}" alt="img"
                                        class="img-fluid w-100">
                                </div>
                                <div class="destination-details-img">
                                    <img src="{{URL::asset('build/img/destination/destination-details-img-03.jpg')}}" alt="img"
                                        class="img-fluid w-100">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <div class="mb-2">
                            <h4 class="mb-1 d-flex align-items-center flex-wrap mb-2">Rainbow Mountain Valley</h4>
                            <div class="d-flex align-items-center flex-wrap">
                                <div class="d-flex align-items-center me-3 pe-3 border-end">
                                    <span
                                        class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>
                                    <p class="fs-14"><a href="#reviews">(400 Reviews)</a></p>
                                </div>
                                <span class="badge badge-xs bg-info rounded-pill"><i
                                        class="isax isax-ranking me-1"></i>Trending</span>
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

                    <div class="accordion custom-accordion">
                        <div class="accordion-item mb-4" id="field_one">
                            <div class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordion_collapse_two" aria-expanded="true">
                                    Description
                                </button>
                            </div>
                            <div id="accordion_collapse_two" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <p class="mb-2">Paris is a world famous travel destination known for its romantic
                                        atmosphere, iconic landmarks, rich history, art museums, fashion streets, and
                                        vibrant café culture.
                                    </p>
                                    <div class="read-more">
                                        <div class="more-text">
                                            <p>Each concert will showcase her unique blend of pop and ethereal
                                                soundscapes, bringing her music to life in a way you've never seen
                                                before.
                                            </p>
                                        </div>
                                        <a href="#"
                                            class="fs-14 fw-medium more-link text-decoration-underline mb-2">Show
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-4" id="field_two">
                            <div class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordion_collapse_three" aria-expanded="true">
                                    Basic Information
                                </button>
                            </div>
                            <div id="accordion_collapse_three" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <div class="row gy-3">
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="d-flex align-items-center">
                                                <span
                                                    class="avatar avatar-md bg-primary-transparent rounded-circle me-2">
                                                    <i class="isax isax-timer fs-16"></i>
                                                </span>
                                                <div>
                                                    <div class="fs-14 fw-medium text-dark mb-1">Best Time</div>
                                                    <span>Apr – Jun, Sep – Oct</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="d-flex align-items-cente">
                                                <span
                                                    class="avatar avatar-md bg-primary-transparent rounded-circle me-2">
                                                    <i class="isax isax-dollar-circle fs-16"></i>
                                                </span>
                                                <div>
                                                    <div class="fs-14 fw-medium text-dark mb-1">Currency</div>
                                                    <span>EUR</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="d-flex align-items-center">
                                                <span
                                                    class="avatar avatar-md bg-primary-transparent rounded-circle me-2">
                                                    <i class="isax isax-language-circle fs-16"></i>
                                                </span>
                                                <div>
                                                    <h6 class="mb-1">Language</h6>
                                                    <span>French, English</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="d-flex align-items-center">
                                                <span
                                                    class="avatar avatar-md bg-primary-transparent rounded-circle me-2">
                                                    <i class="isax isax-card-pos fs-16"></i>
                                                </span>
                                                <div>
                                                    <div class="fs-14 fw-medium text-dark mb-1">Visa Requirements</div>
                                                    <span>Schengen</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="d-flex align-items-center">
                                                <span
                                                    class="avatar avatar-md bg-primary-transparent rounded-circle me-2">
                                                    <i class="isax isax-map fs-16"></i>
                                                </span>
                                                <div>
                                                    <div class="fs-14 fw-medium text-dark mb-1">Area</div>
                                                    <span>105.4 km²</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="d-flex align-items-center">
                                                <span
                                                    class="avatar avatar-md bg-primary-transparent rounded-circle me-2">
                                                    <i class="isax isax-clock fs-16"></i>
                                                </span>
                                                <div>
                                                    <div class="fs-14 fw-medium text-dark mb-1">Time Zone</div>
                                                    <span>CET (UTC +1)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-4" id="field_six">
                            <div class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordion_collapse_six" aria-expanded="true">
                                    Highlights
                                </button>
                            </div>
                            <div id="accordion_collapse_six" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <span class="avatar avatar-md bg-primary-transparent rounded-circle me-2">
                                            <i class="isax isax-verify fs-16"></i>
                                        </span>
                                        <p>Eiffel Tower and Seine River cruise experience</p>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <span class="avatar avatar-md bg-primary-transparent rounded-circle me-2">
                                            <i class="isax isax-verify fs-16"></i>
                                        </span>
                                        <p>World-class museums including the Louvre</p>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <span class="avatar avatar-md bg-primary-transparent rounded-circle me-2">
                                            <i class="isax isax-verify fs-16"></i>
                                        </span>
                                        <p>Charming streets, cafés, and shopping districts</p>
                                    </div>
                                    <div class="d-flex align-items-center mb-0">
                                        <span class="avatar avatar-md bg-primary-transparent rounded-circle me-2">
                                            <i class="isax isax-verify fs-16"></i>
                                        </span>
                                        <p>Beautiful city views and photography spots</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-4" id="field_eleven">
                            <div class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordion_collapse_eleven" aria-expanded="true">
                                    Things To Do
                                </button>
                            </div>
                            <div id="accordion_collapse_eleven" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <div class="row gy-3">
                                        <div class="col-lg-6">
                                            <div class="fs-16 text-dark fw-medium mb-3">
                                                Sightseeing
                                            </div>
                                            <div>
                                                <p><i class="isax isax-verify fs-16 me-2 text-primary mb-2"></i>Guided
                                                    city tours and museum visits</p>
                                                <p><i class="isax isax-verify fs-16 me-2 text-primary mb-2"></i>Evening
                                                    city lights and sightseeing tour</p>
                                                <p><i class="isax isax-verify fs-16 me-2 text-primary mb-2"></i>Walk
                                                    through historic neighborhoods like Le Marais</p>
                                                <p><i class="isax isax-verify fs-16 me-2 text-primary"></i>Join bike or
                                                    walking tours across the city</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="fs-16 text-dark fw-medium mb-3">
                                                Food & Local Experiences
                                            </div>
                                            <div>
                                                <p><i class="isax isax-verify fs-16 me-2 text-primary mb-2"></i>Local
                                                    food tasting and café hopping</p>
                                                <p><i class="isax isax-verify fs-16 me-2 text-primary mb-2"></i>Try
                                                    French pastry and dessert workshops</p>
                                                <p><i
                                                        class="isax isax-verify fs-16 me-2 text-primary mb-2"></i>Experience
                                                    local wine and cheese tasting sessions</p>
                                                <p><i class="isax isax-verify fs-16 me-2 text-primary"></i>Regional
                                                    cuisine discovery sessions</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="fs-16 text-dark fw-medium mb-3">
                                                Culture & Entertainment
                                            </div>
                                            <div>
                                                <p><i class="isax isax-verify fs-16 me-2 text-primary mb-2"></i>Explore
                                                    art galleries and cultural exhibitions</p>
                                                <p><i class="isax isax-verify fs-16 me-2 text-primary mb-2"></i>Enjoy
                                                    live music and small theater shows</p>
                                                <p><i
                                                        class="isax isax-verify fs-16 me-2 text-primary mb-2"></i>Classical
                                                    concerts and opera performances</p>
                                                <p><i class="isax isax-verify fs-16 me-2 text-primary"></i>Cultural
                                                    storytelling and heritage shows</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="fs-16 text-dark fw-medium mb-3">
                                                Shopping & Local Life
                                            </div>
                                            <div>
                                                <p><i class="isax isax-verify fs-16 me-2 text-primary mb-2"></i>Visit
                                                    street markets and local shopping areas</p>
                                                <p><i class="isax isax-verify fs-16 me-2 text-primary mb-2"></i>Boutique
                                                    shopping in designer streets</p>
                                                <p><i class="isax isax-verify fs-16 me-2 text-primary mb-2"></i>Vintage
                                                    and flea market shopping tours</p>
                                                <p><i class="isax isax-verify fs-16 me-2 text-primary"></i>Local artisan
                                                    and handicraft stores</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-4" id="field_two">
                            <div class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordion_collapse_twelve" aria-expanded="true">
                                    Services
                                </button>
                            </div>
                            <div id="accordion_collapse_twelve" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <div class="row gy-3">
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="d-flex align-items-center">
                                                <span
                                                    class="avatar avatar-md bg-primary-transparent rounded-circle me-2">
                                                    <i class="isax isax-timer fs-16"></i>
                                                </span>
                                                <div>
                                                    <div class="fs-14 fw-medium text-dark mb-1">Tours</div>
                                                    <span>20</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="d-flex align-items-cente">
                                                <span
                                                    class="avatar avatar-md bg-primary-transparent rounded-circle me-2">
                                                    <i class="isax isax-dollar-circle fs-16"></i>
                                                </span>
                                                <div>
                                                    <div class="fs-14 fw-medium text-dark mb-1">Hotels</div>
                                                    <span>569</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="d-flex align-items-center">
                                                <span
                                                    class="avatar avatar-md bg-primary-transparent rounded-circle me-2">
                                                    <i class="isax isax-language-circle fs-16"></i>
                                                </span>
                                                <div>
                                                    <h6 class="mb-1">Cars</h6>
                                                    <span>1420</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="d-flex align-items-center">
                                                <span
                                                    class="avatar avatar-md bg-primary-transparent rounded-circle me-2">
                                                    <i class="isax isax-card-pos fs-16"></i>
                                                </span>
                                                <div>
                                                    <div class="fs-14 fw-medium text-dark mb-1">Bus</div>
                                                    <span>510</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="d-flex align-items-center">
                                                <span
                                                    class="avatar avatar-md bg-primary-transparent rounded-circle me-2">
                                                    <i class="isax isax-map fs-16"></i>
                                                </span>
                                                <div>
                                                    <div class="fs-14 fw-medium text-dark mb-1">Flights</div>
                                                    <span>15</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="d-flex align-items-center">
                                                <span
                                                    class="avatar avatar-md bg-primary-transparent rounded-circle me-2">
                                                    <i class="isax isax-clock fs-16"></i>
                                                </span>
                                                <div>
                                                    <div class="fs-14 fw-medium text-dark mb-1">Cruise</div>
                                                    <span>10</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="d-flex align-items-center">
                                                <span
                                                    class="avatar avatar-md bg-primary-transparent rounded-circle me-2">
                                                    <i class="isax isax-clock fs-16"></i>
                                                </span>
                                                <div>
                                                    <div class="fs-14 fw-medium text-dark mb-1">Activities</div>
                                                    <span>320</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="d-flex align-items-center">
                                                <span
                                                    class="avatar avatar-md bg-primary-transparent rounded-circle me-2">
                                                    <i class="isax isax-clock fs-16"></i>
                                                </span>
                                                <div>
                                                    <div class="fs-14 fw-medium text-dark mb-1">Guides</div>
                                                    <span>400</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-4" id="field_four">
                            <div class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordion_collapse_four" aria-expanded="true">
                                    Gallery
                                </button>
                            </div>
                            <div id="accordion_collapse_four" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <div class="tour-gallery-slider owl-carousel">
                                        <a class="galley-wrap" data-fancybox="gallery"
                                            href="{{URL::asset('build/img/destination/destination-img-large-01.jpg')}}">
                                            <img src="{{URL::asset('build/img/destination/destination-img-01.jpg')}}" class="h-auto"
                                                alt="img">
                                        </a>
                                        <a class="galley-wrap" data-fancybox="gallery"
                                            href="{{URL::asset('build/img/destination/destination-img-large-02.jpg')}}">
                                            <img src="{{URL::asset('build/img/destination/destination-img-02.jpg')}}" class="h-auto"
                                                alt="img">
                                        </a>
                                        <a class="galley-wrap" data-fancybox="gallery"
                                            href="{{URL::asset('build/img/destination/destination-img-large-03.jpg')}}">
                                            <img src="{{URL::asset('build/img/destination/destination-img-03.jpg')}}" class="h-auto"
                                                alt="img">
                                        </a>
                                        <a class="galley-wrap" data-fancybox="gallery"
                                            href="{{URL::asset('build/img/destination/destination-img-large-04.jpg')}}">
                                            <img src="{{URL::asset('build/img/destination/destination-img-04.jpg')}}" class="h-auto"
                                                alt="img">
                                        </a>
                                        <a class="galley-wrap" data-fancybox="gallery"
                                            href="{{URL::asset('build/img/destination/destination-img-large-05.jpg')}}">
                                            <img src="{{URL::asset('build/img/destination/destination-img-05.jpg')}}" class="h-auto"
                                                alt="img">
                                        </a>
                                        <a class="galley-wrap" data-fancybox="gallery"
                                            href="{{URL::asset('build/img/destination/destination-img-large-03.jpg')}}">
                                            <img src="{{URL::asset('build/img/destination/destination-img-03.jpg')}}" class="h-auto"
                                                alt="img">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-4" id="field_five">
                            <div class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordion_collapse_five" aria-expanded="true">
                                    Video
                                </button>
                            </div>
                            <div id="accordion_collapse_five" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <div class="position-relative">
                                        <a href="#">
                                            <img src="{{URL::asset('build/img/destination/destination-large-01.jpg')}}" class="rounded"
                                                alt="Img">
                                        </a>
                                        <a href="https://www.youtube.com/watch?v=4fMuE_t5YL4" data-fancybox=""
                                            class="avatar avatar-lg rounded-circle bg-white circle-middle">
                                            <i class="isax isax-play-circle5 fs-24"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-4" id="field_eight">
                            <div class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordion_collapse_eight" aria-expanded="true">
                                    Frequently Asked Questions
                                </button>
                            </div>
                            <div id="accordion_collapse_eight" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <div class="accordion faq-accordion" id="accordionFaq">
                                        <div class="accordion-item show mb-2">
                                            <div class="accordion-header">
                                                <button class="accordion-button fw-medium" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq-collapseOne"
                                                    aria-expanded="false" aria-controls="faq-collapseOne">
                                                    Is this destination family friendly?
                                                </button>
                                            </div>
                                            <div id="faq-collapseOne" class="accordion-collapse collapse show"
                                                data-bs-parent="#accordionFaq">
                                                <div class="accordion-body">
                                                    <p class="mb-0">
                                                        Yes, Paris offers family attractions, parks, museums, and theme
                                                        parks suitable for all age groups.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item mb-2">
                                            <div class="accordion-header">
                                                <button class="accordion-button fw-medium collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq-two"
                                                    aria-expanded="false" aria-controls="faq-two">
                                                    Is it suitable for solo travelers?
                                                </button>
                                            </div>
                                            <div id="faq-two" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionFaq">
                                                <div class="accordion-body">
                                                    <p class="mb-0">
                                                        We offer a diverse fleet of vehicles to suit every need,
                                                        including compact cars, sedans, SUVs and luxury vehicles. You
                                                        can browse our selection online or contact us for assistance in
                                                        choosing the right vehicle for you
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item mb-2">
                                            <div class="accordion-header">
                                                <button class="accordion-button fw-medium collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq-three"
                                                    aria-expanded="false" aria-controls="faq-three">
                                                    How many days are ideal to explore this destination?
                                                </button>
                                            </div>
                                            <div id="faq-three" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionFaq">
                                                <div class="accordion-body">
                                                    <p class="mb-0">
                                                        We offer a diverse fleet of vehicles to suit every need,
                                                        including compact cars, sedans, SUVs and luxury vehicles. You
                                                        can browse our selection online or contact us for assistance in
                                                        choosing the right vehicle for you
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-4" id="field_seven">
                            <div class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordion_collapse_seven" aria-expanded="true">
                                    Location
                                </button>
                            </div>
                            <div id="accordion_collapse_seven" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <!-- Map -->
                                    <div>
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6509170.989457427!2d-123.80081967108484!3d37.192957227641294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia%2C%20USA!5e0!3m2!1sen!2sin!4v1669181581381!5m2!1sen!2sin"
                                            allowfullscreen="" loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade"
                                            class="tour-detail-map w-100"></iframe>
                                    </div>
                                    <!-- /Map -->
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-4" id="field_nine">
                            <div class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordion_collapse_nine" aria-expanded="true">
                                    Reviews
                                </button>
                            </div>
                            <div id="accordion_collapse_nine" class="accordion-collapse collapse show">
                                <div class="accordion-body">
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
                                                    <p class="mb-2">The city was beautiful and full of culture. The
                                                        landmarks, food spots, and local streets made our trip truly
                                                        memorable.</p>
                                                    <div class="d-flex align-items-center">
                                                        <a class="avatar avatar-md me-2 mb-2" data-fancybox="gallery"
                                                            href="{{URL::asset('build/img/destination/review-img-large-01.jpg')}}">
                                                            <img src="{{URL::asset('build/img/cars/gallery-car-01.jpg')}}" class="h-auto"
                                                                alt="img">
                                                        </a>
                                                        <a class="avatar avatar-md me-2 mb-2" data-fancybox="gallery"
                                                            href="{{URL::asset('build/img/destination/review-img-large-02.jpg')}}">
                                                            <img src="{{URL::asset('build/img/cars/gallery-car-02.jpg')}}" class="h-auto"
                                                                alt="img">
                                                        </a>
                                                        <a class="avatar avatar-md me-0 mb-2" data-fancybox="gallery"
                                                            href="{{URL::asset('build/img/destination/review-img-large-03.jpg')}}">
                                                            <img src="{{URL::asset('build/img/cars/gallery-car-03.jpg')}}" class="h-auto"
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
                                                    <p class="mb-2">Walking through the historic neighborhoods and
                                                        visiting local cafés gave us a real feel of the city. Highly
                                                        recommended.</p>
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
                                                    <p class="mb-2">Thank you for sharing your experience. We’re glad
                                                        you enjoyed exploring the city and its culture. We look forward
                                                        to welcoming you again soon.</p>
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
                            <h5 class="fs-18 mb-3">Why Book With Us</h5>
                            <div>
                                <p class="d-flex align-items-center mb-3">
                                    <span class="text-primary me-2">
                                        <i class="isax isax-medal-star"></i>
                                    </span>Expertise and Experience
                                </p>
                                <p class="d-flex align-items-center mb-3">
                                    <span class="text-primary me-2">
                                        <i class="isax isax-menu"></i>
                                    </span>Tailored Services
                                </p>
                                <p class="d-flex align-items-center mb-3">
                                    <span class="text-primary me-2">
                                        <i class="isax isax-message-minus"></i>
                                    </span>Comprehensive Planning
                                </p>
                                <p class="d-flex align-items-center mb-3">
                                    <span class="text-primary me-2">
                                        <i class="isax isax-user-add"></i>
                                    </span>Client Satisfaction
                                </p>
                                <p class="d-flex align-items-center">
                                    <span class="text-primary me-2">
                                        <i class="isax isax-grammerly"></i>
                                    </span>24/7 Support
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-none">
                        <div class="card-body">
                            <h5 class="fs-18 mb-3">Enquire Us</h5>
                            <div class="banner-form">
                                <form action="#">
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Phone</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Message</label>
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                    <button type="submit"
                                        class="btn btn-primary btn-lg search-btn ms-0 w-100 fs-14">Submit
                                        Enquiry</button>
                                </form>
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
                                    <div class="d-flex align-items-center border-bottom pb-3 mb-0">
                                        <span class="avatar avatar-sm me-2 rounded-circle flex-shrink-0 bg-primary"><i
                                                class="isax isax-message-search5"></i></span>
                                        <p>Info@example.com</p>
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



