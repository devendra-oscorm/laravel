<?php $page="activity-details";?>
@extends('layout.mainlayout')
@section('content')

    <!-- ========================
        Start Page Content
    ========================= -->

    <!-- Breadcrumb -->
    <div class="breadcrumb-bar breadcrumb-bg-09 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title mb-2">Activity Details</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{url('index')}}"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item">Activity</li>
                            <li class="breadcrumb-item active" aria-current="page">Activity Details</li>
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
                    <div class="activity-wrap mb-4">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="activitys-img">
                                    <a class="galley-wrap" data-fancybox="gallery" href="{{URL::asset('build/img/activities/activity-12.jpg')}}">
                                        <img src="{{URL::asset('build/img/activities/activity-12.jpg')}}" alt="img">
                                    </a>
                                </div>
                                <div class="activitys-img  mb-0">
                                    <a class="galley-wrap" data-fancybox="gallery" href="{{URL::asset('build/img/activities/activity-13.jpg')}}">
                                        <img src="{{URL::asset('build/img/activities/activity-13.jpg')}}" alt="img">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex">
                                <div class="activitys-img-center flex-fill">
                                    <div class="position-relative h-100">
                                        <a href="#" class="h-100 d-block">
                                            <img src="{{URL::asset('build/img/activities/activity-14.jpg')}}" class="rounded" alt="Img">
                                        </a>
                                        <a href="https://www.youtube.com/watch?v=4fMuE_t5YL4" data-fancybox="" class="avatar play-video rounded-circle circle-middle">
                                            <span><i class="isax isax-play5 text-dark fs-16"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="activitys-img">
                                    <a class="galley-wrap" data-fancybox="gallery" href="{{URL::asset('build/img/activities/activity-15.jpg')}}">
                                        <img src="{{URL::asset('build/img/activities/activity-15.jpg')}}" alt="img">
                                    </a>
                                </div>
                                <div class="activitys-img mb-0">
                                    <a class="galley-wrap" data-fancybox="gallery" href="{{URL::asset('build/img/activities/activity-16.jpg')}}">
                                        <img src="{{URL::asset('build/img/activities/activity-16.jpg')}}" alt="img">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="service-wrap slider-wrap-five ">
                        <div class="d-flex align-items-center mb-2">
                            <div class="me-2 pe-2 border-end d-flex align-items-center">
                                <span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>
                                <p class="fs-14"><a href="#reviews">(400 Reviews)</a></p>
                            </div>
                            <span class="badge badge-xs bg-info rounded-pill ms-1"><i class="isax isax-ranking me-1"></i>Trending</span>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <div class="mb-2">
                                <h4 class="mb-1 d-flex align-items-center flex-wrap mb-2">Tropical Reef Snorkeling Adventure</h4>
                                <div class="d-flex align-items-center flex-wrap">
                                    <p class="fs-14 mb-2 me-2 pe-2 border-end"><i class="isax isax-receipt text-primary me-2"></i>Water Sports</p>
                                    <p class="fs-14 mb-2"><i class="isax isax-location5 me-2"></i>Phuket, Thailand
                                        <a href="#location" class="link-primary text-decoration-underline fw-medium ms-2">View Location</a>
                                    </p>

                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <a href="#" class="btn btn-outline-light btn-icon btn-sm d-flex align-items-center justify-content-center me-2"><i
                                        class="isax isax-share"></i></a>
                                <a href="#" class="btn btn-outline-light btn-sm d-inline-flex align-items-center"><i
                                        class="isax isax-heart5 text-danger me-1"></i>Save</a>
                            </div>
                        </div>
                    </div>

                    <div class="accordion custom-accordion ">
                        <div class="accordion-item mb-4">
                            <div class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accordion_collapse_two" aria-expanded="true">
                                    Description
                                </button>
                            </div>
                            <div id="accordion_collapse_two" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <p class="mb-2">Discover colorful coral reefs and exotic marine life in crystal clear tropical waters with a professionally guided snorkeling experience designed for comfort, safety, and fun. Glide over vibrant coral gardens, spot
                                        tropical fish and other fascinating marine species, and enjoy shallow reef areas that are ideal for first time snorkelers.
                                    </p>
                                    <div class="read-more">
                                        <div class="more-text">
                                            <p>Each concert will showcase her unique blend of pop and ethereal soundscapes, bringing her music to life in a way you've never seen before.</p>
                                        </div>
                                        <a href="#" class="fs-14 fw-medium more-link text-decoration-underline mb-2">Show More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item  mb-4">
                            <div class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accordion_collapse_one" aria-expanded="true">
                                    Activity Details
                                </button>
                            </div>
                            <div id="accordion_collapse_one" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <div class="row gy-3">
                                        <div class="col-md-6 col-lg-3">
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-md bg-primary-transparent rounded-circle me-2">
                                                    <i class="isax isax-timer fs-16"></i>
                                                </span>
                                                <div>
                                                    <h6 class="mb-1">Duration</h6>
                                                    <span>04 hours</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-md bg-primary-transparent rounded-circle me-2">
                                                    <i class="isax isax-speedometer fs-16"></i>
                                                </span>
                                                <div>
                                                    <h6 class="mb-1">Difficulty</h6>
                                                    <span>Beginner Friendly</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-md bg-primary-transparent rounded-circle me-2">
                                                    <i class="isax isax-profile-2user fs-16"></i>
                                                </span>
                                                <div>
                                                    <h6 class="mb-1">Group Size</h6>
                                                    <span>Upto 12 Members</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-md bg-primary-transparent rounded-circle me-2">
                                                    <i class="isax isax-user-tag fs-16"></i>
                                                </span>
                                                <div>
                                                    <h6 class="mb-1">Age Limit</h6>
                                                    <span>Above 6 years</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-md bg-primary-transparent rounded-circle me-2">
                                                    <i class="isax isax-user-octagon fs-16"></i>
                                                </span>
                                                <div>
                                                    <h6 class="mb-1">Guide</h6>
                                                    <span>Included</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-md bg-primary-transparent rounded-circle me-2">
                                                    <i class="isax isax-ranking fs-16"></i>
                                                </span>
                                                <div>
                                                    <h6 class="mb-1">Equipments</h6>
                                                    <span>Provided</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-md bg-primary-transparent rounded-circle me-2">
                                                    <i class="isax isax-car fs-16"></i>
                                                </span>
                                                <div>
                                                    <h6 class="mb-1">Hotel Pickup</h6>
                                                    <span>Available</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-md bg-primary-transparent rounded-circle me-2">
                                                    <i class="isax isax-ranking fs-16"></i>
                                                </span>
                                                <div>
                                                    <h6 class="mb-1">Languages</h6>
                                                    <span>English, Spanish</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-4">
                            <div class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accordion_collapse_ten" aria-expanded="true">
                                    Itinerary
                                </button>
                            </div>
                            <div id="accordion_collapse_ten" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <div class="stage-flow">
                                        <div class="d-flex align-items-center flows-step">
                                            <span class="flow-step">01</span>
                                            <div class="flow-content">
                                                <div class="d-flex align-items-center justify-content-between flex-wrap mb-1">
                                                    <div class="mb-1">
                                                        <h6 class="fw-medium mb-1">Arrival & Check-in <span
                                                                class="badge badge-info-100 me-1 d-inline-flex align-items-center ms-2"><i
                                                                    class="isax isax-clock me-1"></i>10 mins</span></h6>
                                                        <p>Complimentary pickup from your Key West hotel. Arrive at the marina, check in, and meet your guide and fellow snorkelers.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center flows-step">
                                            <span class="flow-step">02</span>
                                            <div class="flow-content">
                                                <div class="d-flex align-items-center justify-content-between flex-wrap mb-1">
                                                    <div class="mb-1">
                                                        <h6 class="fw-medium mb-1">Safety Briefing & Equipment
                                                            Fitting<span
                                                                class="badge badge-info-100 me-1 d-inline-flex align-items-center ms-2"><i
                                                                    class="isax isax-clock me-1"></i>20 mins</span></h6>
                                                        <p>Receive comprehensive safety instructions and learn basic snorkeling techniques. Get fitted with high quality snorkeling gear including mask, snorkel, fins, and flotation vest.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center flows-step">
                                            <span class="flow-step">04</span>
                                            <div class="flow-content">
                                                <div class="d-flex align-items-center justify-content-between flex-wrap mb-1">
                                                    <div class="mb-1">
                                                        <h6 class="fw-medium mb-1">First Snorkeling Session<span
                                                                class="badge badge-info-100 me-1 d-inline-flex align-items-center ms-2"><i
                                                                    class="isax isax-clock me-1"></i>120 mins</span>
                                                        </h6>
                                                        <p>Explore the vibrant coral reef for 120 minutes. Swim alongside colorful tropical fish, spot sea turtles, and discover the underwater beauty of Key West's protected marine sanctuary.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center flows-step">
                                            <span class="flow-step">05</span>
                                            <div class="flow-content">
                                                <div class="d-flex align-items-center justify-content-between flex-wrap mb-1">
                                                    <div class="mb-1">
                                                        <h6 class="fw-medium mb-1">Relax & Refresh Break<span
                                                                class="badge badge-info-100 me-1 d-inline-flex align-items-center ms-2"><i
                                                                    class="isax isax-clock me-1"></i>20 mins</span></h6>
                                                        <p>Return to the boat for refreshments including water, soft drinks, and light snacks. Short ride to the second snorkeling location.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center flows-step">
                                            <span class="flow-step">06</span>
                                            <div class="flow-content">
                                                <div class="d-flex align-items-center justify-content-between flex-wrap mb-1">
                                                    <div class="mb-1">
                                                        <h6 class="fw-medium mb-1">Return & Hotel Drop-off<span
                                                                class="badge badge-info-100 me-1 d-inline-flex align-items-center ms-2"><i
                                                                    class="isax isax-clock me-1"></i>20 mins</span></h6>
                                                        <p>Cruise back to the marina while sharing your experience. Receive your digital underwater photos and transport back to your hotel.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-4">
                            <div class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accordion_collapse_four" aria-expanded="true">
                                    Gallery
                                </button>
                            </div>
                            <div id="accordion_collapse_four" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <div class="activity-slider owl-carousel">
                                        <div class="col">
                                            <a class="galley-wrap" data-fancybox="gallery" href="{{URL::asset('build/img/activities/activity-01.jpg')}}">
                                                <img src="{{URL::asset('build/img/activities/activity-01.jpg')}}" alt="img">
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="galley-wrap" data-fancybox="gallery" href="{{URL::asset('build/img/activities/activity-02.jpg')}}">
                                                <img src="{{URL::asset('build/img/activities/activity-02.jpg')}}" alt="img">
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="galley-wrap" data-fancybox="gallery" href="{{URL::asset('build/img/activities/activity-03.jpg')}}">
                                                <img src="{{URL::asset('build/img/activities/activity-03.jpg')}}" alt="img">
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="galley-wrap" data-fancybox="gallery" href="{{URL::asset('build/img/activities/activity-04.jpg')}}">
                                                <img src="{{URL::asset('build/img/activities/activity-04.jpg')}}" alt="img">
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="galley-wrap" data-fancybox="gallery" href="{{URL::asset('build/img/activities/activity-05.jpg')}}">
                                                <img src="{{URL::asset('build/img/activities/activity-05.jpg')}}" alt="img">
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="galley-wrap" data-fancybox="gallery" href="{{URL::asset('build/img/activities/activity-06.jpg')}}">
                                                <img src="{{URL::asset('build/img/activities/activity-06.jpg')}}" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-4">
                            <div class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accordion_collapse_five" aria-expanded="true">
                                    Video
                                </button>
                            </div>
                            <div id="accordion_collapse_five" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <div class="position-relative">
                                        <a href="#">
                                            <img src="{{URL::asset('build/img/activities/activity-11.jpg')}}" class="rounded" alt="Img">
                                        </a>
                                        <a href="https://www.youtube.com/watch?v=4fMuE_t5YL4" data-fancybox="" class="avatar play-video rounded-circle circle-middle">
                                            <span><i class="isax isax-play5 text-dark fs-16"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-4">
                            <div class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accordion_collapse_eight" aria-expanded="true">
                                    Frequently Asked Questions
                                </button>
                            </div>
                            <div id="accordion_collapse_eight" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <div class="accordion faq-accordion" id="accordionFaq">
                                        <div class="accordion-item show mb-2">
                                            <div class="accordion-header">
                                                <button class="accordion-button fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapseOne" aria-expanded="false" aria-controls="faq-collapseOne">
                                                    Is this activity suitable for beginners?
                                                </button>
                                            </div>
                                            <div id="faq-collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionFaq">
                                                <div class="accordion-body">
                                                    <p class="mb-0">
                                                        Yes. This snorkeling tour is beginner-friendly and includes a safety briefing and guide support throughout the experience.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item mb-2">
                                            <div class="accordion-header">
                                                <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-two" aria-expanded="false" aria-controls="faq-two">
                                                    Do I need to know swimming to join?
                                                </button>
                                            </div>
                                            <div id="faq-two" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
                                                <div class="accordion-body">
                                                    <p class="mb-0">
                                                        We offer a diverse fleet of vehicles to suit every need, including compact cars, sedans, SUVs and luxury vehicles. You can browse our selection online or contact us for assistance in choosing the right vehicle for you
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item mb-2">
                                            <div class="accordion-header">
                                                <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-three" aria-expanded="false" aria-controls="faq-three">
                                                    How long is the snorkeling time in total?
                                                </button>
                                            </div>
                                            <div id="faq-three" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
                                                <div class="accordion-body">
                                                    <p class="mb-0">
                                                        We offer a diverse fleet of vehicles to suit every need, including compact cars, sedans, SUVs and luxury vehicles. You can browse our selection online or contact us for assistance in choosing the right vehicle for you
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-4" id="location">
                            <div class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accordion_collapse_seven" aria-expanded="true">
                                    Location
                                </button>
                            </div>
                            <div id="accordion_collapse_seven" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <!-- Map -->
                                    <div>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6509170.989457427!2d-123.80081967108484!3d37.192957227641294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia%2C%20USA!5e0!3m2!1sen!2sin!4v1669181581381!5m2!1sen!2sin"
                                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="tour-detail-map w-100"></iframe>
                                    </div>
                                    <!-- /Map -->
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-4 mb-xl-0" id="reviews">
                            <div class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accordion_collapse_nine" aria-expanded="true">
                                    Reviews
                                </button>
                            </div>
                            <div id="accordion_collapse_nine" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <div>
                                        <div class="d-flex align-items-center justify-content-between flex-wrap mb-2">
                                            <h6 class="mb-3">Reviews (45)</h6>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#add_review" class="btn btn-primary btn-md mb-3"><i
                                                    class="isax isax-edit-2 me-1"></i>Write a Review</a>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 d-flex">
                                                <div class="card rating-progress shadow-none flex-fill mb-3">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center mb-2">
                                                            <p class="me-2 text-nowrap mb-0">5 Star Ratings</p>
                                                            <div class="progress w-100" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                                                <div class="progress-bar bg-primary" style="width: 90%">
                                                                </div>
                                                            </div>
                                                            <p class="progress-count ms-2">247</p>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <p class="me-2 text-nowrap mb-0">4 Star Ratings</p>
                                                            <div class="progress mb-0 w-100" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                                                <div class="progress-bar bg-primary" style="width: 80%">
                                                                </div>
                                                            </div>
                                                            <p class="progress-count ms-2">145</p>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <p class="me-2 text-nowrap mb-0">3 Star Ratings</p>
                                                            <div class="progress mb-0 w-100" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                                                <div class="progress-bar bg-primary" style="width: 70%">
                                                                </div>
                                                            </div>
                                                            <p class="progress-count ms-2">600</p>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <p class="me-2 text-nowrap mb-0">2 Star Ratings</p>
                                                            <div class="progress mb-0 w-100" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                                                <div class="progress-bar bg-primary" style="width: 60%">
                                                                </div>
                                                            </div>
                                                            <p class="progress-count ms-2">560</p>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <p class="me-2 text-nowrap mb-0">1 Star Ratings</p>
                                                            <div class="progress mb-0 w-100" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                                                <div class="progress-bar bg-primary" style="width: 40%">
                                                                </div>
                                                            </div>
                                                            <p class="progress-count ms-2">400</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 d-flex">
                                                <div class="rating-item bg-light-200 text-center flex-fill mb-3">
                                                    <h6 class="fw-medium mb-3">Customer Reviews & Ratings</h6>
                                                    <h5 class="display-6">4.9 / 5.0</h5>
                                                    <div class="d-inline-flex align-items-center justify-content-center mb-3">
                                                        <i class="ti ti-star-filled text-primary me-1"></i>
                                                        <i class="ti ti-star-filled text-primary me-1"></i>
                                                        <i class="ti ti-star-filled text-primary me-1"></i>
                                                        <i class="ti ti-star-filled text-primary me-1"></i>
                                                        <i class="ti ti-star-filled text-primary"></i>
                                                    </div>
                                                    <p>Based On 2,459 Reviews</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card review-item shadow-none mb-3">
                                            <div class="card-body p-3">
                                                <div class="review-info">
                                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                        <div class="d-flex align-items-center mb-2">
                                                            <span class="avatar avatar-lg me-2 flex-shrink-0">
                                                                <img src="{{URL::asset('build/img/users/user-05.jpg')}}"
                                                                    class="rounded-circle" alt="img">
                                                            </span>
                                                            <div>
                                                                <h6 class="fs-16 fw-medium mb-1">Joseph Massey</h6>
                                                                <div class="d-flex align-items-center flex-wrap date-info">
                                                                    <p class="fs-14 mb-0">2 days ago</p>
                                                                    <p class="fs-14 d-inline-flex align-items-center mb-0">
                                                                        <span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>Unforgettable Stay!
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="#" class="btn btn-outline-light btn-md d-inline-flex align-items-center mb-2"><i
                                                                class="isax isax-repeat me-1"></i>Reply</a>
                                                    </div>
                                                    <p class="mb-2">The snorkeling tour was well organized and the reef was absolutely beautiful. The guide was very friendly and made beginners feel comfortable throughout the session.</p>
                                                    <div class="d-flex align-items-center">
                                                        <a class="avatar avatar-md me-2 mb-2" data-fancybox="gallery" href="{{URL::asset('build/img/activities/activity-01.jpg')}}">
                                                            <img src="{{URL::asset('build/img/activities/activity-01.jpg')}}" alt="img">
                                                        </a>
                                                        <a class="avatar avatar-md me-2 mb-2" data-fancybox="gallery" href="{{URL::asset('build/img/activities/activity-02.jpg')}}">
                                                            <img src="{{URL::asset('build/img/activities/activity-02.jpg')}}" alt="img">
                                                        </a>
                                                        <a class="avatar avatar-md me-0 mb-2" data-fancybox="gallery" href="{{URL::asset('build/img/activities/activity-03.jpg')}}">
                                                            <img src="{{URL::asset('build/img/activities/activity-03.jpg')}}" alt="img">
                                                        </a>
                                                    </div>
                                                    <div class="d-inline-flex align-items-center">
                                                        <a href="#" class="d-inline-flex align-items-center fs-14 me-3"><i
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
                                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                        <div class="d-flex align-items-center mb-2">
                                                            <span class="avatar avatar-lg me-2 flex-shrink-0">
                                                                <img src="{{URL::asset('build/img/users/user-21.jpg')}}"
                                                                    class="rounded-circle" alt="img">
                                                            </span>
                                                            <div>
                                                                <h6 class="fs-16 fw-medium mb-1">Jeffrey Jones</h6>
                                                                <div class="d-flex align-items-center flex-wrap date-info">
                                                                    <p class="fs-14 mb-0">2 days ago</p>
                                                                    <p class="fs-14 d-inline-flex align-items-center mb-0">
                                                                        <span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">4.0</span>Excellent service!
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="#" class="btn btn-outline-light btn-md d-inline-flex align-items-center mb-2"><i
                                                                class="isax isax-repeat me-1"></i>Reply</a>
                                                    </div>
                                                    <p class="mb-2">As a first time snorkeler, I felt very safe and well guided. The equipment and briefing were excellent. Would definitely try again.</p>
                                                    <div class="d-inline-flex align-items-center">
                                                        <a href="#" class="d-inline-flex align-items-center fs-14 me-3"><i
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
                                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                        <div class="d-flex align-items-center mb-2">
                                                            <span class="avatar avatar-lg me-2 flex-shrink-0">
                                                                <img src="{{URL::asset('build/img/users/user-26.jpg')}}"
                                                                    class="rounded-circle" alt="img">
                                                            </span>
                                                            <div>
                                                                <h6 class="fs-16 fw-medium mb-1">Jessie Alves</h6>
                                                                <div class="d-flex align-items-center flex-wrap date-info">
                                                                    <p class="fs-14 mb-0">2 days ago</p>
                                                                    <p class="fs-14 d-inline-flex align-items-center mb-0">
                                                                        <span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>Convenient Location!
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="#" class="btn btn-outline-light btn-md d-inline-flex align-items-center mb-2"><i
                                                                class="isax isax-repeat me-1"></i>Reply</a>
                                                    </div>
                                                    <p class="mb-2">The location was perfect for exploring the city, and the views from our room were breathtaking. It made our trip so much more enjoyable to stay somewhere central and scenic</p>
                                                    <div class="d-inline-flex align-items-center">
                                                        <a href="#" class="d-inline-flex align-items-center fs-14 me-3"><i
                                                                class="isax isax-like-1 me-2"></i>13</a>
                                                        <a href="#" class="d-inline-flex align-items-center me-3"><i
                                                                class="isax isax-dislike me-2"></i>38</a>
                                                        <a href="#" class="d-inline-flex align-items-center me-3"><i
                                                                class="isax isax-heart5 text-danger me-2"></i>75</a>
                                                    </div>
                                                </div>
                                                <div class="review-info reply mt-4 p-3">
                                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                        <div class="d-flex align-items-center mb-2">
                                                            <span class="avatar avatar-lg me-2 flex-shrink-0">
                                                                <img src="{{URL::asset('build/img/users/user-25.jpg')}}"
                                                                    class="rounded-circle" alt="img">
                                                            </span>
                                                            <div>
                                                                <h6 class="fs-16 fw-medium mb-1">Adrian Hendriques</h6>
                                                                <div class="d-flex align-items-center flex-wrap date-info">
                                                                    <p class="fs-14 mb-0">2 days ago</p>
                                                                    <p class="fs-14 d-inline-flex align-items-center mb-0">
                                                                        <span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">2.0</span>Excellent service!
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="#" class="btn btn-outline-light btn-md d-inline-flex align-items-center me-2"><i
                                                                class="isax isax-repeat me-1"></i>Reply</a>
                                                    </div>
                                                    <p class="mb-2">Thank you so much for your kind words! We're thrilled to hear that our location and views made your trip even more enjoyable. We hope to welcome you back soon for another scenic stay!</p>
                                                    <div class="d-inline-flex align-items-center">
                                                        <a href="#" class="d-inline-flex align-items-center fs-14 me-3"><i
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
                                            <a href="#" class="btn btn-primary btn-md d-inline-flex align-items-center justify-content-center mt-2">See
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
                            <div class=" pb-3 mb-3 border-bottom">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="mb-2">Starts From</p>
                                        <h4 class="text-primary">$400 <span class="fs-14 text-default fw-normal">/
                                                Night</span></h4>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Select your Date</label>
                                        <div class="input-icon-end position-relative">
                                            <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy" value="02-05-2024">
                                            <span class="input-icon-addon">
                                                <i class="isax isax-calendar"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 timeslot-details">
                                <span class="mb-2 fw-medium d-block">Choose Your Timeslot</span>
                                <ul>
                                    <li>
                                        <div class="timeslot">
                                            <input type="radio" id="timeslot1" name="timeslot" checked>
                                            <label for="timeslot1"><i class="isax isax-clock me-1"></i>08:00 AM - 12:00 PM
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="timeslot">
                                            <input type="radio" id="timeslot2" name="timeslot">
                                            <label for="timeslot2"><i class="isax isax-clock me-1"></i>10:00 AM - 02:00 PM
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="timeslot">
                                            <input type="radio" id="timeslot3" name="timeslot">
                                            <label for="timeslot3"><i class="isax isax-clock me-1"></i>12:00 PM - 04:00 PM
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="timeslot">
                                            <input type="radio" id="timeslot4" name="timeslot">
                                            <label for="timeslot4"><i class="isax isax-clock me-1"></i>02:00 PM - 06:00 PM
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="mb-3 pb-3 border-bottom">
                                <div class="card shadow-none mb-0">
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
                                                        <input type="text" name="quantity" class=" input-number bg-transparent" value="01">
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
                                                <label class="form-label text-gray-9 mb-0">Children <span class="text-default fw-normal">( 2-12 Yrs )</span></label>
                                                <div class="custom-increment">
                                                    <div class="input-group">
                                                        <span class="input-group-btn float-start">
                                                            <button type="button"
                                                                class="quantity-left-minus btn btn-light btn-number"
                                                                data-type="minus" data-field="">
                                                                <span><i class="isax isax-minus"></i></span>
                                                        </button>
                                                        </span>
                                                        <input type="text" name="quantity" class=" input-number bg-transparent" value="01">
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
                            <div class="card shadow-none mb-0">
                                <div class="card-body p-3 pb-0">
                                    <div class="border-bottom pb-2 mb-3">
                                        <h6>Extra Services</h6>
                                    </div>
                                    <div class="form-check d-flex align-items-center ps-0 mb-3">
                                        <input class="form-check-input ms-0 mt-0" name="guest1" type="checkbox" id="guest1" checked>
                                        <label class="form-check-label ms-2 w-100" for="guest1">
                                            <div class="d-flex align-items-center justify-content-between">
                                                Hotel Pickup & Drop
                                                <span class="fw-semibold">$20</span>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="form-check d-flex align-items-center ps-0 mb-3">
                                        <input class="form-check-input ms-0 mt-0" name="guest2" type="checkbox" id="guest2">
                                        <label class="form-check-label ms-2 w-100" for="guest2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                Photo Package
                                                <span class="fw-semibold">$10</span>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="form-check d-flex align-items-center ps-0 mb-3">
                                        <input class="form-check-input ms-0 mt-0" name="guest3" type="checkbox" id="guest3">
                                        <label class="form-check-label ms-2 w-100" for="guest3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                Professional Video Clip (30 sec)
                                                <span class="fw-semibold">$40</span>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="form-check d-flex align-items-center ps-0 mb-3">
                                        <input class="form-check-input ms-0 mt-0" name="guest4" type="checkbox" id="guest4">
                                        <label class="form-check-label ms-2 w-100" for="guest4">
                                            <div class="d-flex align-items-center justify-content-between">
                                                Refreshment Pack
                                                <span class="fw-semibold">$30</span>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <a href="{{url('activity-booking')}}" class="btn btn-primary rounded-pill w-100 mt-3">Book Now</a>
                        </div>
                    </div>

                    <div class="card shadow-none">
                        <div class="card-body">
                            <h5 class="fs-18 mb-3">Why Book With Us</h5>
                            <div>
                                <p class="d-flex align-items-center mb-3"><i class="isax isax-medal-star text-primary me-2"></i>Expertise and Experience</p>
                                <p class="d-flex align-items-center mb-3"><i class="isax isax-menu text-primary me-2"></i>Tailored Services</p>
                                <p class="d-flex align-items-center mb-3"><i class="isax isax-message-minus text-primary me-2"></i>Comprehensive Planning</p>
                                <p class="d-flex align-items-center mb-3"><i class="isax isax-user-add text-primary me-2"></i>Client Satisfaction</p>
                                <p class="d-flex align-items-center"><i class="isax isax-grammerly text-primary me-2"></i>24/7 Support</p>
                            </div>
                        </div>
                    </div>

                    <!-- Enquiry -->
                    <div class="card shadow-none">
                        <div class="card-body">
                            <form action="{{url('cruise-details')}}">
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
                                        <label class="form-label">Message</label>
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary w-100 btn-lg d-flex align-items-center justify-content-center">Submit Enquiry
                                </button>
                            </form>
                        </div>
                    </div>
                    <!-- /Enquiry -->

                    <div class="card shadow-none mb-0">
                        <div class="card-body">
                            <h5 class="fs-18 mb-3">Provider Details</h5>
                            <div class="py-1">
                                <div class="bg-light-500 br-10 mb-3 d-flex align-items-center p-3">
                                    <a href="#" class="avatar avatar-lg flex-shrink-0">
                                        <img src="{{URL::asset('build/img/users/user-05.jpg')}}" alt="img" class="rounded-circle">
                                    </a>
                                    <div class="ms-2 overflow-hidden">
                                        <h6 class="fw-medium text-truncate mb-1"><a href="#">Adrian Hendriques</a></h6>
                                        <p class="fs-14">Member Since : 14 May 2024</p>
                                    </div>
                                </div>
                                <div class="border br-10 mb-3 p-3">
                                    <div class="d-flex align-items-center border-bottom pb-3 mb-3">
                                        <span class="avatar avatar-sm me-2 rounded-circle flex-shrink-0 bg-primary"><i
                                                class="isax isax-call-outgoing5"></i></span>
                                        <p>Call Us : +1 12545 45548</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="avatar avatar-sm me-2 rounded-circle flex-shrink-0 bg-primary"><i
                                                class="isax isax-message-search5"></i></span>
                                        <p>Email : Info@example.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col-sm-6">
                                    <a href="#" class="btn btn-light d-flex align-items-center justify-content-center"><i
                                            class="isax isax-messages5 me-2"></i>Whatsapp Us</a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="{{url('chat')}}" class="btn btn-primary d-flex align-items-center justify-content-center"><i
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



