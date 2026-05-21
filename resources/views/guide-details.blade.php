<?php $page="guide-details";?>
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
                    <h2 class="breadcrumb-title mb-2">Guide Details</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{url('index')}}"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{url('guide-grid')}}">Our Guide</a></li>
                            <li class="breadcrumb-item">Guide Details</li>
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

            <div class="guide-details-card-one">
                <div class="guide-details-card-one-inner">
                    <div class="d-flex align-items-center guide-details-card-one-inner-content">
                        <div class="guide-img">
                            <img src="{{URL::asset('build/img/guide/guide-details-img-01.jpg')}}" alt="Img" class="img-fluid">
                        </div>
                        <div class="w-100">
                            <div class="guide-info">
                                <h2 class="guide-name">Mr. Aaron Williams</h2>
                                <div class="d-flex align-items-center">
                                    <ul>
                                        <li
                                            class="fs-14 text-gray-6 pe-2 me-2 border-end border-light d-flex align-items-center">
                                            <i class="isax isax-signpost5 me-2"></i>Professional Travel Guide
                                        </li>
                                        <li
                                            class="fs-14 text-gray-6 pe-2 me-2 border-end border-light d-flex align-items-center">
                                            <i class="isax isax-location5 me-2"></i>USA, California
                                        </li>
                                        <li
                                            class="fs-14 text-gray-6 pe-2 me-2 border-end border-light d-flex align-items-center">
                                            <i class="isax isax-personalcard me-2"></i>8 Years Of Experience
                                        </li>
                                        <li><span class="badge badge-warning text-dark me-2">5.9</span>(2459 Reviews)
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3 w-100">
                                <div class="d-flex align-items-center flex-wrap row-gap-3">
                                    <span
                                        class="badge badge-soft-info badge-md rounded-pill text-info me-2">English</span>
                                    <span
                                        class="badge badge-soft-info badge-md rounded-pill text-info me-2">Spanish</span>
                                    <span
                                        class="badge badge-soft-info badge-md rounded-pill text-info me-2">French</span>
                                    <span
                                        class="badge badge-soft-info badge-md rounded-pill text-info me-2">Catalan</span>
                                    <span
                                        class="badge badge-soft-info badge-md rounded-pill text-info me-0">Hindi</span>
                                </div>
                                <a href="{{url('guide-booking')}}" class="btn btn-primary">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- row start -->
            <div class="row">
                <div class="col-lg-8 d-flex">
                    <div class="card flex-fill">
                        <div class="card-body">
                            <div class="fs-18 fw-semibold text-dark mb-3">About Me</div>
                            <p>I am a licensed and experienced travel guide with a deep passion for showcasing
                                destinations in an engaging, informative, and memorable way. Over the years, I have
                                guided travelers from different countries, cultures, and age groups, helping them
                                explore cities, landscapes, and cultural landmarks with confidence and comfort.</p>
                            <p>My tours are carefully designed to balance local history, cultural stories, and modern
                                experiences. Whether it is a city sightseeing tour, an adventure activity, a cultural
                                exploration, or a relaxed family trip, I focus on delivering well-organized itineraries
                                that match each traveler’s interests and pace.</p>
                            <p>Safety, professionalism, and customer satisfaction are at the core of my guiding
                                approach. I ensure clear communication, timely planning, and a friendly atmosphere
                                throughout the journey. I also assist travelers with practical guidance such as local
                                customs, travel tips, and must-see attractions to make every trip smooth and
                                stress-free.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex">
                    <div class="card flex-fill">
                        <div class="card-body">
                            <div class="fs-18 fw-semibold text-dark mb-4">Key Information</div>
                            <div>
                                <div class="d-flex align-items-center mb-4">
                                    <span
                                        class="p-2 bg-primary-transparent d-inline-flex align-items-center justify-content-center rounded me-2"><i
                                            class="isax isax-brifecase-tick fs-24"></i></span>
                                    <div>
                                        <p class="mb-0">Experience</p>
                                        <p class="fw-medium text-dark">8+ Years</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-4">
                                    <span
                                        class="p-2 bg-primary-transparent d-inline-flex align-items-center justify-content-center rounded me-2"><i
                                            class="isax isax-teacher fs-24"></i></span>
                                    <div>
                                        <p class="mb-0">Certifications</p>
                                        <p class="fw-medium text-dark">Licensed Tour Guide #ES-2016-0847</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-4">
                                    <span
                                        class="p-2 bg-primary-transparent d-inline-flex align-items-center justify-content-center rounded me-2"><i
                                            class="isax isax-location fs-24"></i></span>
                                    <div>
                                        <p class="mb-0">Base Location</p>
                                        <p class="fw-medium text-dark">USA</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-0">
                                    <span
                                        class="p-2 bg-primary-transparent d-inline-flex align-items-center justify-content-center rounded me-2"><i
                                            class="isax isax-tick-circle fs-24"></i></span>
                                    <div>
                                        <p class="mb-0">Availability</p>
                                        <p class="fw-medium text-dark">Available</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row end -->

            <!-- row start -->
            <div class="row">
                <div class="col-xxl-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="fs-18 fw-semibold text-dark mb-4">My Experties</div>
                            <div class="row row-gap-4">
                                <div class="col-md-6 col-lg-4">
                                    <div class="expertise-img">
                                        <img src="{{URL::asset('build/img/guide/expertise-01.jpg')}}" alt="img">
                                        <div class="expertise-img-content">
                                            City Sightseeing Tours
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="expertise-img">
                                        <img src="{{URL::asset('build/img/guide/expertise-02.jpg')}}" alt="img">
                                        <div class="expertise-img-content">
                                            Adventure Activities
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="expertise-img">
                                        <img src="{{URL::asset('build/img/guide/expertise-03.jpg')}}" alt="img">
                                        <div class="expertise-img-content">
                                            Family & Group Tours
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="expertise-img">
                                        <img src="{{URL::asset('build/img/guide/expertise-04.jpg')}}" alt="img">
                                        <div class="expertise-img-content">
                                            Travel Assistance
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="expertise-img">
                                        <img src="{{URL::asset('build/img/guide/expertise-05.jpg')}}" alt="img">
                                        <div class="expertise-img-content">
                                            Outdoor Activities
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="expertise-img">
                                        <img src="{{URL::asset('build/img/guide/expertise-06.jpg')}}" alt="img">
                                        <div class="expertise-img-content">
                                            Business Travel Assistance
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 d-flex">
                    <div class="card flex-fill">
                        <div class="card-body">
                            <div class="fs-18 fw-semibold text-dark mb-4">Availability Schedule</div>
                            <div>
                                <div class="card border-0 bg-light-300">
                                    <div class="card-body p-3">
                                        <div
                                            class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                                            <p class="fw-medium mb-0">Monday</p>
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="badge bg-success fs-10">9:00 AM - 2:00 PM</span>
                                                <span class="badge bg-success fs-10">3:00 PM - 10:00 PM</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0 bg-light-300">
                                    <div class="card-body p-3">
                                        <div
                                            class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                                            <p class="fw-medium mb-0">Tuesday</p>
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="badge bg-success fs-10">9:00 AM - 2:00 PM</span>
                                                <span class="badge bg-success fs-10">3:00 PM - 10:00 PM</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0 bg-light-300">
                                    <div class="card-body p-3">
                                        <div
                                            class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                                            <p class="fw-medium mb-0">Wednesday</p>
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="badge bg-success fs-10">3:00 PM - 10:00 PM</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0 bg-light-300">
                                    <div class="card-body p-3">
                                        <div
                                            class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                                            <p class="fw-medium mb-0">Thursday</p>
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="badge bg-success fs-10">9:00 AM - 2:00 PM</span>
                                                <span class="badge bg-success fs-10">3:00 PM - 10:00 PM</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0 bg-light-300">
                                    <div class="card-body p-3">
                                        <div
                                            class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                                            <p class="fw-medium mb-0">Friday</p>
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="badge bg-success fs-10">9:00 AM - 2:00 PM</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0 bg-light-300">
                                    <div class="card-body p-3">
                                        <div
                                            class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                                            <p class="fw-medium mb-0">Saturday</p>
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="badge bg-success fs-10">9:00 AM - 2:00 PM</span>
                                                <span class="badge bg-success fs-10">3:00 PM - 10:00 PM</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0 bg-light-300">
                                    <div class="card-body p-3">
                                        <div
                                            class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                                            <p class="fw-medium mb-0">Sunday</p>
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="badge bg-light fs-10 text-white">Unavailable</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row end -->

            <div class="card mb-3">
                <div class="card-body">
                    <div>
                        <div class="d-flex align-items-center justify-content-between flex-wrap mb-3 border-bottom">
                            <h6 class="mb-3">Customer Reviews</h6>
                        </div>
                        <div class="row">
                            <div class="col-md-6 d-flex">
                                <div class="card rating-progress shadow-none flex-fill mb-3">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-2">
                                            <p class="me-2 text-nowrap mb-0">5 Star Ratings</p>
                                            <div class="progress w-100" role="progressbar" aria-valuenow="90"
                                                aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-primary" style="width: 90%"></div>
                                            </div>
                                            <p class="progress-count ms-2">247</p>
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                            <p class="me-2 text-nowrap mb-0">4 Star Ratings</p>
                                            <div class="progress mb-0 w-100" role="progressbar" aria-valuenow="80"
                                                aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-primary" style="width: 80%"></div>
                                            </div>
                                            <p class="progress-count ms-2">145</p>
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                            <p class="me-2 text-nowrap mb-0">3 Star Ratings</p>
                                            <div class="progress mb-0 w-100" role="progressbar" aria-valuenow="70"
                                                aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-primary" style="width: 70%"></div>
                                            </div>
                                            <p class="progress-count ms-2">600</p>
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                            <p class="me-2 text-nowrap mb-0">2 Star Ratings</p>
                                            <div class="progress mb-0 w-100" role="progressbar" aria-valuenow="90"
                                                aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-primary" style="width: 60%"></div>
                                            </div>
                                            <p class="progress-count ms-2">560</p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <p class="me-2 text-nowrap mb-0">1 Star Ratings</p>
                                            <div class="progress mb-0 w-100" role="progressbar" aria-valuenow="40"
                                                aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-primary" style="width: 40%"></div>
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
                                                <img src="{{URL::asset('build/img/users/user-05.jpg')}}" class="rounded-circle"
                                                    alt="img">
                                            </span>
                                            <div>
                                                <h6 class="fs-16 fw-medium mb-1">Daniel Carter</h6>
                                                <div class="d-flex align-items-center flex-wrap date-info">
                                                    <p class="fs-14 mb-0">2 days ago</p>
                                                    <p class="fs-14 d-inline-flex align-items-center mb-0"><span
                                                            class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>Unforgettable
                                                        Stay!</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#"
                                            class="btn btn-outline-light btn-md d-inline-flex align-items-center mb-2"><i
                                                class="isax isax-repeat me-1"></i>Reply</a>
                                    </div>
                                    <p class="mb-2">The adventure desert ride was thrilling and perfectly organized. The
                                        guide was professional, friendly, and made sure everything felt safe and
                                        enjoyable throughout the ride. A truly memorable experience and highly
                                        recommended!</p>
                                    <div class="d-flex align-items-center">
                                        <a class="avatar avatar-md me-2 mb-2" data-fancybox="gallery"
                                            href="{{URL::asset('build/img/guide/gallery-img-large-01.jpg')}}">
                                            <img src="{{URL::asset('build/img/cruise/cruise-thumb-02.jpg')}}" alt="img">
                                        </a>
                                        <a class="avatar avatar-md me-2 mb-2" data-fancybox="gallery"
                                            href="{{URL::asset('build/img/guide/gallery-img-large-02.jpg')}}">
                                            <img src="{{URL::asset('build/img/cruise/cruise-thumb-03.jpg')}}" alt="img">
                                        </a>
                                        <a class="avatar avatar-md me-0 mb-2" data-fancybox="gallery"
                                            href="{{URL::asset('build/img/guide/gallery-img-large-03.jpg')}}">
                                            <img src="{{URL::asset('build/img/cruise/cruise-thumb-01.jpg')}}" alt="img">
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
                                                <img src="{{URL::asset('build/img/users/user-26.jpg')}}" class="rounded-circle"
                                                    alt="img">
                                            </span>
                                            <div>
                                                <h6 class="fs-16 fw-medium mb-1">Sophia Nguyen</h6>
                                                <div class="d-flex align-items-center flex-wrap date-info">
                                                    <p class="fs-14 mb-0">2 days ago</p>
                                                    <p class="fs-14 d-inline-flex align-items-center mb-0"><span
                                                            class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>Convenient
                                                        Location!</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#"
                                            class="btn btn-outline-light btn-md d-inline-flex align-items-center mb-2"><i
                                                class="isax isax-repeat me-1"></i>Reply</a>
                                    </div>
                                    <p class="mb-2">The guide was extremely knowledgeable, friendly, and made the entire
                                        desert adventure smooth, safe, and enjoyable.</p>
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
                                                <img src="{{URL::asset('build/img/users/user-25.jpg')}}" class="rounded-circle"
                                                    alt="img">
                                            </span>
                                            <div>
                                                <h6 class="fs-16 fw-medium mb-1">Aaron Williams</h6>
                                                <div class="d-flex align-items-center flex-wrap date-info">
                                                    <p class="fs-14 mb-0">2 days ago</p>
                                                    <p class="fs-14 d-inline-flex align-items-center mb-0"><span
                                                            class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">2.0</span>Excellent
                                                        service!</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#"
                                            class="btn btn-outline-light btn-md d-inline-flex align-items-center me-2"><i
                                                class="isax isax-repeat me-1"></i>Reply</a>
                                    </div>
                                    <p class="mb-2">Thank you for choosing our snorkeling adventure. We’re glad you felt
                                        safe and comfortable during your first snorkeling experience. We would love to
                                        host you again in the future.</p>
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
                            <a href="#"
                                class="btn btn-primary btn-md d-inline-flex align-items-center justify-content-center mt-2">See
                                all 4,078 reviews<i class="isax isax-arrow-right-3 ms-1"></i></a>
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



