<?php $page="recently-viewed";?>
@extends('layout.mainlayout')
@section('content')

    <!-- ========================
        Start Page Content
    ========================= -->

    <!-- Breadcrumb -->
    <div class="breadcrumb-bar breadcrumb-bg-01 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title mb-2">Recently Viewed</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{url('index')}}"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item">Pages</li>
                            <li class="breadcrumb-item active" aria-current="page">Recently Viewed</li>
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

            <ul class="nav recent-tabs">
                <li>
                    <a href="#" class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab-1">
                        Tours
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                        Flights
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                        Hotels
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                        Cars
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-5">
                        Cruise
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

            <!-- Tab Content -->
            <div class="tab-content wow fadeInUp">

                <!-- Tours Tab -->
                <div class="tab-pane fade active show" id="tab-1">
                    <div class="row row-gap-4 justify-content-center">

                        <!-- Tours Grid -->
                        <div class="col-xxl-3 col-xl-4 col-md-6 d-flex">
                            <div class="place-item mb-0 flex-fill">
                                <div class="place-img">
                                    <div class="img-slide">
                                        <div class="slide-images">
                                            <a href="{{url('tour-details')}}">
                                                <img src="{{URL::asset('build/img/tours/tours-07.jpg')}}" class="img-fluid" alt="img">
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
                        <div class="col-xxl-3 col-xl-4 col-md-6 d-flex">
                            <div class="place-item mb-0 flex-fill">
                                <div class="place-img">
                                    <div class="img-slide">
                                        <div class="slide-images">
                                            <a href="{{url('tour-details')}}">
                                                <img src="{{URL::asset('build/img/tours/tours-08.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item">
                                        <a href="#" class="fav-icon">
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
                        <div class="col-xxl-3 col-xl-4 col-md-6 d-flex">
                            <div class="place-item mb-0 flex-fill">
                                <div class="place-img">
                                    <div class="img-slide">
                                        <div class="slide-images">
                                            <a href="{{url('tour-details')}}">
                                                <img src="{{URL::asset('build/img/tours/tours-09.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item">
                                        <a href="#" class="fav-icon">
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
                        <div class="col-xxl-3 col-xl-4 col-md-6 d-flex">
                            <div class="place-item mb-0 flex-fill">
                                <div class="place-img">
                                    <div class="img-slide">
                                        <div class="slide-images">
                                            <a href="{{url('tour-details')}}">
                                                <img src="{{URL::asset('build/img/tours/tours-10.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item">
                                        <a href="#" class="fav-icon">
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

                        <!-- Tours Grid -->
                        <div class="col-xxl-3 col-xl-4 col-md-6 d-flex">
                            <div class="place-item mb-0 flex-fill">
                                <div class="place-img">
                                    <div class="img-slide">
                                        <div class="slide-images">
                                            <a href="{{url('tour-details')}}">
                                                <img src="{{URL::asset('build/img/tours/tours-11.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item">
                                        <a href="#" class="fav-icon">
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
                                            <p class="fs-14 text-gray-9 text-truncate">Group Tours</p>
                                        </div>
                                        <span class="d-inline-block border vertical-splits">
                                            <span
                                                class="bglight text-light d-flex align-items-center justify-content-center"></span>
                                        </span>
                                        <div class="d-flex align-items-center flex-wrap">
                                            <span
                                                class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-1">4.3</span>
                                            <p class="fs-14">(250 Reviews)</p>
                                        </div>
                                    </div>
                                    <h5 class="mb-1 text-truncate"><a href="{{url('tour-details')}}">Enchanted Forest</a></h5>
                                    <p class="d-flex align-items-center mb-3"><i
                                            class="isax isax-location5 me-2"></i>King’s Road, Chelsea</p>
                                    <div class="mb-3">
                                        <h6 class="d-flex align-items-center text-gray-6 fs-14 fw-normal">Starts From
                                            <span class="ms-1 fs-18 fw-semibold text-primary">$550</span><span
                                                class="ms-1 fs-18 fw-semibold text-gray-3 text-decoration-line-through">$600</span>
                                        </h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <div class="d-flex flex-wrap align-items-center me-2">
                                            <span class="me-1"><i
                                                    class="isax isax-calendar-tick text-gray-6"></i></span>
                                            <p class="fs-14 text-gray-9">2 Day, 1 Night</p>
                                        </div>
                                        <span class="d-inline-block border vertical-splits">
                                            <span
                                                class="bglight text-light d-flex align-items-center justify-content-center"></span>
                                        </span>
                                        <div class="ms-2 d-flex align-items-center">
                                            <p class="fs-14 text-gray-9 mb-0 text-truncate d-flex align-items-center">
                                                <i class="isax isax-profile-2user me-1"></i>17 Guests
                                            </p>
                                            <a href="#" class="avatar avatar-sm ms-3">
                                                <img src="{{URL::asset('build/img/users/user-12.jpg')}}" class="rounded-circle"
                                                    alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Tours Grid -->

                        <!-- Tours Grid -->
                        <div class="col-xxl-3 col-xl-4 col-md-6 d-flex">
                            <div class="place-item mb-0 flex-fill">
                                <div class="place-img">
                                    <div class="img-slide">
                                        <div class="slide-images">
                                            <a href="{{url('tour-details')}}">
                                                <img src="{{URL::asset('build/img/tours/tours-12.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item">
                                        <a href="#" class="fav-icon">
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
                                            <p class="fs-14 text-gray-9 text-truncate">Beach Tours</p>
                                        </div>
                                        <span class="d-inline-block border vertical-splits">
                                            <span
                                                class="bglight text-light d-flex align-items-center justify-content-center"></span>
                                        </span>
                                        <div class="d-flex align-items-center flex-wrap">
                                            <span
                                                class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-1">4.1</span>
                                            <p class="fs-14">(280 Reviews)</p>
                                        </div>
                                    </div>
                                    <h5 class="mb-1 text-truncate"><a href="{{url('tour-details')}}">Serene Bay</a></h5>
                                    <p class="d-flex align-items-center mb-3"><i
                                            class="isax isax-location5 me-2"></i>Bold Street, Liverpool</p>
                                    <div class="mb-3">
                                        <h6 class="d-flex align-items-center text-gray-6 fs-14 fw-normal">Starts From
                                            <span class="ms-1 fs-18 fw-semibold text-primary">$450</span><span
                                                class="ms-1 fs-18 fw-semibold text-gray-3 text-decoration-line-through">$520</span>
                                        </h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <div class="d-flex flex-wrap align-items-center me-2">
                                            <span class="me-1"><i
                                                    class="isax isax-calendar-tick text-gray-6"></i></span>
                                            <p class="fs-14 text-gray-9">3 D2 Night</p>
                                        </div>
                                        <span class="d-inline-block border vertical-splits">
                                            <span
                                                class="bglight text-light d-flex align-items-center justify-content-center"></span>
                                        </span>
                                        <div class="ms-2 d-flex align-items-center">
                                            <p class="fs-14 text-gray-9 mb-0 text-truncate d-flex align-items-center">
                                                <i class="isax isax-profile-2user me-1"></i>08 Guests
                                            </p>
                                            <a href="#" class="avatar avatar-sm ms-3">
                                                <img src="{{URL::asset('build/img/users/user-13.jpg')}}" class="rounded-circle"
                                                    alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Tours Grid -->

                        <!-- Tours Grid -->
                        <div class="col-xxl-3 col-xl-4 col-md-6 d-flex">
                            <div class="place-item mb-0 flex-fill">
                                <div class="place-img">
                                    <div class="img-slide">
                                        <div class="slide-images">
                                            <a href="{{url('tour-details')}}">
                                                <img src="{{URL::asset('build/img/tours/tours-13.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item">
                                        <a href="#" class="fav-icon">
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
                                            <p class="fs-14 text-gray-9 text-truncate">Historical Tours</p>
                                        </div>
                                        <span class="d-inline-block border vertical-splits">
                                            <span
                                                class="bglight text-light d-flex align-items-center justify-content-center"></span>
                                        </span>
                                        <div class="d-flex align-items-center flex-wrap">
                                            <span
                                                class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-1">4.6</span>
                                            <p class="fs-14">(400 Reviews)</p>
                                        </div>
                                    </div>
                                    <h5 class="mb-1 text-truncate"><a href="{{url('tour-details')}}">Ancient Ruins</a></h5>
                                    <p class="d-flex align-items-center mb-3"><i
                                            class="isax isax-location5 me-2"></i>Broad Street, Bristol</p>
                                    <div class="mb-3">
                                        <h6 class="d-flex align-items-center text-gray-6 fs-14 fw-normal">Starts From
                                            <span class="ms-1 fs-18 fw-semibold text-primary">$350</span><span
                                                class="ms-1 fs-18 fw-semibold text-gray-3 text-decoration-line-through">$400</span>
                                        </h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <div class="d-flex flex-wrap align-items-center me-2">
                                            <span class="me-1"><i
                                                    class="isax isax-calendar-tick text-gray-6"></i></span>
                                            <p class="fs-14 text-gray-9">2 Day, 1 Night</p>
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
                                                <img src="{{URL::asset('build/img/users/user-14.jpg')}}" class="rounded-circle"
                                                    alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Tours Grid -->

                        <!-- Tours Grid -->
                        <div class="col-xxl-3 col-xl-4 col-md-6 d-flex">
                            <div class="place-item mb-0 flex-fill">
                                <div class="place-img">
                                    <div class="img-slide">
                                        <div class="slide-images">
                                            <a href="{{url('tour-details')}}">
                                                <img src="{{URL::asset('build/img/tours/tours-14.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item">
                                        <a href="#" class="fav-icon">
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
                                            <p class="fs-14 text-gray-9 text-truncate">Adventure Tour</p>
                                        </div>
                                        <span class="d-inline-block border vertical-splits">
                                            <span
                                                class="bglight text-light d-flex align-items-center justify-content-center"></span>
                                        </span>
                                        <div class="d-flex align-items-center flex-wrap">
                                            <span
                                                class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-1">4.2</span>
                                            <p class="fs-14">(350 Reviews)</p>
                                        </div>
                                    </div>
                                    <h5 class="mb-1 text-truncate"><a href="{{url('tour-details')}}">Mystical Caves</a></h5>
                                    <p class="d-flex align-items-center mb-3"><i
                                            class="isax isax-location5 me-2"></i>Chapel Street, Salford</p>
                                    <div class="mb-3">
                                        <h6 class="d-flex align-items-center text-gray-6 fs-14 fw-normal">Starts From
                                            <span class="ms-1 fs-18 fw-semibold text-primary">$700</span><span
                                                class="ms-1 fs-18 fw-semibold text-gray-3 text-decoration-line-through">$800</span>
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
                                                <i class="isax isax-profile-2user me-1"></i>14 Guests
                                            </p>
                                            <a href="#" class="avatar avatar-sm ms-3">
                                                <img src="{{URL::asset('build/img/users/user-15.jpg')}}" class="rounded-circle"
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

                <!-- Flights Tab -->
                <div class="tab-pane fade" id="tab-2">
                    <div class="row row-gap-4 justify-content-center">

                        <!-- Flight Grid -->
                        <div class="col-xxl-3 col-xl-4 col-md-6 d-flex">
                            <div class="place-item mb-0 flex-fill">
                                <div class="place-img">
                                    <div class="img-slide ">
                                        <div class="slide-images">
                                            <a href="{{url('flight-details')}}">
                                                <img src="{{URL::asset('build/img/flight/flight-09.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item">
                                        <div class="d-flex align-items-center">
                                            <a href="#" class="fav-icon me-2 selected">
                                                <i class="isax isax-heart5"></i>
                                            </a>
                                            <span class="badge bg-indigo">Cheapest</span>
                                        </div>
                                        <span
                                            class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium rounded">5.0</span>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="flight-loc d-flex align-items-center justify-content-between mb-2">
                                        <span class="loc-name d-inline-flex align-items-center"><i
                                                class="isax isax-airplane rotate-45 me-2"></i>Newyork</span>
                                        <a href="#" class="arrow-icon flex-shrink-0"><i
                                                class="isax isax-arrow-2"></i></a>
                                        <span class="loc-name d-inline-flex align-items-center"><i
                                                class="isax isax-airplane rotate-135 me-2"></i>Sydney</span>
                                    </div>
                                    <h5 class="text-truncate mb-1"><a href="{{url('flight-details')}}">Antonov An-32</a></h5>
                                    <div class="d-flex align-items-center mb-2">
                                        <span class="avatar avatar-sm me-2">
                                            <img src="{{URL::asset('build/img/icons/airindia.svg')}}" class="rounded-circle" alt="icon">
                                        </span>
                                        <p class="fs-14 mb-0 me-2">Air India</p>
                                        <p class="fs-14 mb-0"><i class="ti ti-point-filled text-primary me-2"></i>1-stop
                                            at Texas</p>
                                    </div>
                                    <div class="date-info p-2 mb-3">
                                        <p class="d-flex align-items-center"><i
                                                class="isax isax-calendar-2 me-2"></i>Aug 01, 2024 - Aug 03, 2024</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <h6 class="text-primary"><span class="fs-14 fw-normal text-default">From
                                            </span>$500</h6>
                                        <div class="d-flex align-items-center">
                                            <span class="badge bg-outline-success fs-10 fw-medium me-2">20 Seats
                                                Left</span>
                                            <a href="#" class="avatar avatar-sm">
                                                <img src="{{URL::asset('build/img/users/user-08.jpg')}}" class="rounded-circle"
                                                    alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Flight Grid -->

                        <!-- Flight Grid -->
                        <div class="col-xxl-3 col-xl-4 col-md-6 d-flex">
                            <div class="place-item mb-0 flex-fill">
                                <div class="place-img">
                                    <a href="{{url('flight-details')}}">
                                        <img src="{{URL::asset('build/img/flight/flight-08.jpg')}}" class="img-fluid" alt="img">
                                    </a>
                                    <div class="fav-item">
                                        <div class="d-flex align-items-center">
                                            <a href="#" class="fav-icon me-2">
                                                <i class="isax isax-heart5"></i>
                                            </a>
                                            <span class="badge bg-indigo">Cheapest</span>
                                        </div>
                                        <span
                                        class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium rounded">4.3</span>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="flight-loc d-flex align-items-center justify-content-between mb-2">
                                        <span class="loc-name d-inline-flex align-items-center"><i
                                                class="isax isax-airplane rotate-45 me-2"></i>London</span>
                                        <a href="#" class="arrow-icon flex-shrink-0"><i
                                                class="isax isax-arrow-2"></i></a>
                                        <span class="loc-name d-inline-flex align-items-center"><i
                                                class="isax isax-airplane rotate-135 me-2"></i>London</span>
                                    </div>
                                    <h5 class="text-truncate mb-1"><a href="{{url('flight-details')}}">SkyBound 102</a></h5>
                                    <div class="d-flex align-items-center mb-2">
                                        <span class="avatar avatar-sm me-2">
                                            <img src="{{URL::asset('build/img/icons/airindia.svg')}}" class="rounded-circle" alt="icon">
                                        </span>
                                        <p class="fs-14 mb-0 me-2">Indigo</p>
                                        <p class="fs-14 mb-0"><i class="ti ti-point-filled text-primary me-2"></i>1-stop
                                            at Dubai</p>
                                    </div>
                                    <div class="date-info p-2 mb-3">
                                        <p class="d-flex align-items-center"><i
                                                class="isax isax-calendar-2 me-2"></i>Aug 13, 2024 - Aug 15, 2024</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <h6 class="text-primary"><span class="fs-14 fw-normal text-default">From
                                            </span>$600</h6>
                                        <div class="d-flex align-items-center">
                                            <span class="badge bg-outline-success fs-10 fw-medium me-2">18 Seats
                                                Left</span>
                                            <a href="#" class="avatar avatar-sm">
                                                <img src="{{URL::asset('build/img/users/user-09.jpg')}}" class="rounded-circle"
                                                    alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Flight Grid -->

                        <!-- Flight Grid -->
                        <div class="col-xxl-3 col-xl-4 col-md-6 d-flex">
                            <div class="place-item mb-0 flex-fill">
                                <div class="place-img">
                                    <a href="{{url('flight-details')}}">
                                        <img src="{{URL::asset('build/img/flight/flight-06.jpg')}}" class="img-fluid" alt="img">
                                    </a>
                                    <div class="fav-item">
                                        <div class="d-flex align-items-center">
                                            <a href="#" class="fav-icon me-2">
                                                <i class="isax isax-heart5"></i>
                                            </a>
                                            <span class="badge bg-indigo">Cheapest</span>
                                        </div>
                                        <span
                                            class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium rounded">4.8</span>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="flight-loc d-flex align-items-center justify-content-between mb-2">
                                        <span class="loc-name d-inline-flex align-items-center"><i
                                                class="isax isax-airplane rotate-45 me-2"></i>Paris</span>
                                        <a href="#" class="arrow-icon flex-shrink-0"><i
                                                class="isax isax-arrow-2"></i></a>
                                        <span class="loc-name d-inline-flex align-items-center"><i
                                                class="isax isax-airplane rotate-135 me-2"></i>Cape Town</span>
                                    </div>
                                    <h5 class="text-truncate mb-1"><a href="{{url('flight-details')}}">Nimbus 345</a></h5>
                                    <div class="d-flex align-items-center mb-2">
                                        <span class="avatar avatar-sm me-2">
                                            <img src="{{URL::asset('build/img/icons/airindia.svg')}}" class="rounded-circle" alt="icon">
                                        </span>
                                        <p class="fs-14 mb-0 me-2">Indigo</p>
                                        <p class="fs-14 mb-0"><i class="ti ti-point-filled text-primary me-2"></i>1-stop
                                            at Dubai</p>
                                    </div>
                                    <div class="date-info p-2 mb-3">
                                        <p class="d-flex align-items-center"><i
                                                class="isax isax-calendar-2 me-2"></i>Aug 26, 2024 - Aug 27, 2024</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <h6 class="text-primary"><span class="fs-14 fw-normal text-default">From
                                            </span>$300</h6>
                                        <div class="d-flex align-items-center">
                                            <span class="badge bg-outline-success fs-10 fw-medium me-2">27 Seats
                                                Left</span>
                                            <a href="#" class="avatar avatar-sm">
                                                <img src="{{URL::asset('build/img/users/user-10.jpg')}}" class="rounded-circle"
                                                    alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Flight Grid -->

                        <!-- Flight Grid -->
                        <div class="col-xxl-3 col-xl-4 col-md-6 d-flex">
                            <div class="place-item mb-0 flex-fill">
                                <div class="place-img">
                                    <a href="{{url('flight-details')}}">
                                        <img src="{{URL::asset('build/img/flight/flight-01.jpg')}}" class="img-fluid" alt="img">
                                    </a>
                                    <div class="fav-item">
                                        <div class="d-flex align-items-center">
                                            <a href="#" class="fav-icon me-2">
                                                <i class="isax isax-heart5"></i>
                                            </a>
                                            <span class="badge bg-indigo">Cheapest</span>
                                        </div>
                                        <span
                                            class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium rounded">4.3</span>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="flight-loc d-flex align-items-center justify-content-between mb-2">
                                        <span class="loc-name d-inline-flex align-items-center"><i
                                                class="isax isax-airplane rotate-45 me-2"></i>Toronto</span>
                                        <a href="#" class="arrow-icon flex-shrink-0"><i
                                                class="isax isax-arrow-2"></i></a>
                                        <span class="loc-name d-inline-flex align-items-center"><i
                                                class="isax isax-airplane rotate-135 me-2"></i>Bangkok</span>
                                    </div>
                                    <h5 class="text-truncate mb-1"><a href="{{url('flight-details')}}">AstraFlight 215</a>
                                    </h5>
                                    <div class="d-flex align-items-center mb-2">
                                        <span class="avatar avatar-sm me-2">
                                            <img src="{{URL::asset('build/img/icons/airindia.svg')}}" class="rounded-circle" alt="icon">
                                        </span>
                                        <p class="fs-14 mb-0 me-2">Indigo</p>
                                        <p class="fs-14 mb-0"><i class="ti ti-point-filled text-primary me-2"></i>1-stop
                                            at Frankfurt</p>
                                    </div>
                                    <div class="date-info p-2 mb-3">
                                        <p class="d-flex align-items-center"><i
                                                class="isax isax-calendar-2 me-2"></i>Sep 04, 2024 - Sep 07, 2024</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <h6 class="text-primary"><span class="fs-14 fw-normal text-default">From
                                            </span>$300</h6>
                                        <div class="d-flex align-items-center">
                                            <span class="badge bg-outline-success fs-10 fw-medium me-2">27 Seats
                                                Left</span>
                                            <a href="#" class="avatar avatar-sm">
                                                <img src="{{URL::asset('build/img/users/user-11.jpg')}}" class="rounded-circle"
                                                    alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Flight Grid -->

                        <!-- Flight Grid -->
                        <div class="col-xxl-3 col-xl-4 col-md-6 d-flex">
                            <div class="place-item mb-0 flex-fill">
                                <div class="place-img">
                                    <div class="img-slide ">
                                        <div class="slide-images">
                                            <a href="{{url('flight-details')}}">
                                                <img src="{{URL::asset('build/img/flight/flight-02.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item">
                                        <div class="d-flex align-items-center">
                                            <a href="#" class="fav-icon me-2">
                                                <i class="isax isax-heart5"></i>
                                            </a>
                                            <span class="badge bg-indigo">Cheapest</span>
                                        </div>
                                        <span
                                            class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium rounded">4.7</span>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="flight-loc d-flex align-items-center justify-content-between mb-2">
                                        <span class="loc-name d-inline-flex align-items-center"><i
                                                class="isax isax-airplane rotate-45 me-2"></i>Chicago</span>
                                        <a href="#" class="arrow-icon flex-shrink-0"><i
                                                class="isax isax-arrow-2"></i></a>
                                        <span class="loc-name d-inline-flex align-items-center"><i
                                                class="isax isax-airplane rotate-135 me-2"></i>Melbourne</span>
                                    </div>
                                    <h5 class="text-truncate mb-1"><a href="{{url('flight-details')}}">Cloudrider 789</a></h5>
                                    <div class="d-flex align-items-center mb-2">
                                        <span class="avatar avatar-sm me-2">
                                            <img src="{{URL::asset('build/img/icons/airindia.svg')}}" class="rounded-circle" alt="icon">
                                        </span>
                                        <p class="fs-14 mb-0 me-2">Air India</p>
                                        <p class="fs-14 mb-0"><i class="ti ti-point-filled text-primary me-2"></i>1-stop
                                            at Dallas</p>
                                    </div>
                                    <div class="date-info p-2 mb-3">
                                        <p class="d-flex align-items-center"><i
                                                class="isax isax-calendar-2 me-2"></i>Sep 11, 2024 - Sep 13, 2024</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <h6 class="text-primary"><span class="fs-14 fw-normal text-default">From
                                            </span>$550</h6>
                                        <div class="d-flex align-items-center">
                                            <span class="badge bg-outline-success fs-10 fw-medium me-2">14 Seats
                                                Left</span>
                                            <a href="#" class="avatar avatar-sm">
                                                <img src="{{URL::asset('build/img/users/user-12.jpg')}}" class="rounded-circle"
                                                    alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Flight Grid -->

                        <!-- Flight Grid -->
                        <div class="col-xxl-3 col-xl-4 col-md-6 d-flex">
                            <div class="place-item mb-0 flex-fill">
                                <div class="place-img">
                                    <a href="{{url('flight-details')}}">
                                        <img src="{{URL::asset('build/img/flight/flight-03.jpg')}}" class="img-fluid" alt="img">
                                    </a>
                                    <div class="fav-item">
                                        <div class="d-flex align-items-center">
                                            <a href="#" class="fav-icon me-2">
                                                <i class="isax isax-heart5"></i>
                                            </a>
                                            <span class="badge bg-indigo">Cheapest</span>
                                        </div>
                                        <span
                                            class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium rounded">4.5</span>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="flight-loc d-flex align-items-center justify-content-between mb-2">
                                        <span class="loc-name d-inline-flex align-items-center"><i
                                                class="isax isax-airplane rotate-45 me-2"></i>Miami</span>
                                        <a href="#" class="arrow-icon flex-shrink-0"><i
                                                class="isax isax-arrow-2"></i></a>
                                        <span class="loc-name d-inline-flex align-items-center"><i
                                                class="isax isax-airplane rotate-135 me-2"></i>Tokyo</span>
                                    </div>
                                    <h5 class="text-truncate mb-1"><a href="{{url('flight-details')}}">Aether Express 901</a>
                                    </h5>
                                    <div class="d-flex align-items-center mb-2">
                                        <span class="avatar avatar-sm me-2">
                                            <img src="{{URL::asset('build/img/icons/airindia.svg')}}" class="rounded-circle" alt="icon">
                                        </span>
                                        <p class="fs-14 mb-0 me-2">Indigo</p>
                                        <p class="fs-14 mb-0"><i class="ti ti-point-filled text-primary me-2"></i>1-stop
                                            at Seoul</p>
                                    </div>
                                    <div class="date-info p-2 mb-3">
                                        <p class="d-flex align-items-center"><i
                                                class="isax isax-calendar-2 me-2"></i>Sep 22, 2024 - Sep 24, 2024</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <h6 class="text-primary"><span class="fs-14 fw-normal text-default">From
                                            </span>$450</h6>
                                        <div class="d-flex align-items-center">
                                            <span class="badge bg-outline-success fs-10 fw-medium me-2">12 Seats
                                                Left</span>
                                            <a href="#" class="avatar avatar-sm">
                                                <img src="{{URL::asset('build/img/users/user-13.jpg')}}" class="rounded-circle"
                                                    alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Flight Grid -->

                        <!-- Flight Grid -->
                        <div class="col-xxl-3 col-xl-4 col-md-6 d-flex">
                            <div class="place-item mb-0 flex-fill">
                                <div class="place-img">
                                    <div class="img-slide ">
                                        <div class="slide-images">
                                            <a href="{{url('flight-details')}}">
                                                <img src="{{URL::asset('build/img/flight/flight-07.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item">
                                        <div class="d-flex align-items-center">
                                            <a href="#" class="fav-icon me-2">
                                                <i class="isax isax-heart5"></i>
                                            </a>
                                            <span class="badge bg-indigo">Cheapest</span>
                                        </div>
                                        <span
                                            class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium rounded">4.6</span>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="flight-loc d-flex align-items-center justify-content-between mb-2">
                                        <span class="loc-name d-inline-flex align-items-center"><i
                                                class="isax isax-airplane rotate-45 me-2"></i>Frankfurt</span>
                                        <a href="#" class="arrow-icon flex-shrink-0"><i
                                                class="isax isax-arrow-2"></i></a>
                                        <span class="loc-name d-inline-flex align-items-center"><i
                                                class="isax isax-airplane rotate-135 me-2"></i>Auckland</span>
                                    </div>
                                    <h5 class="text-truncate mb-1"><a href="{{url('flight-details')}}">Voyager 658</a></h5>
                                    <div class="d-flex align-items-center mb-2">
                                        <span class="avatar avatar-sm me-2">
                                            <img src="{{URL::asset('build/img/icons/airindia.svg')}}" class="rounded-circle" alt="icon">
                                        </span>
                                        <p class="fs-14 mb-0 me-2">Air India</p>
                                        <p class="fs-14 mb-0"><i class="ti ti-point-filled text-primary me-2"></i>1-stop
                                            at Sydney</p>
                                    </div>
                                    <div class="date-info p-2 mb-3">
                                        <p class="d-flex align-items-center"><i
                                                class="isax isax-calendar-2 me-2"></i>Oct 04, 2024 - Oct 07, 2024</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <h6 class="text-primary"><span class="fs-14 fw-normal text-default">From
                                            </span>$350</h6>
                                        <div class="d-flex align-items-center">
                                            <span class="badge bg-outline-success fs-10 fw-medium me-2">21 Seats
                                                Left</span>
                                            <a href="#" class="avatar avatar-sm">
                                                <img src="{{URL::asset('build/img/users/user-14.jpg')}}" class="rounded-circle"
                                                    alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Flight Grid -->

                        <!-- Flight Grid -->
                        <div class="col-xxl-3 col-xl-4 col-md-6 d-flex">
                            <div class="place-item mb-0 flex-fill">
                                <div class="place-img">
                                    <div class="img-slide ">
                                        <div class="slide-images">
                                            <a href="{{url('flight-details')}}">
                                                <img src="{{URL::asset('build/img/flight/flight-04.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item">
                                        <div class="d-flex align-items-center">
                                            <a href="#" class="fav-icon me-2">
                                                <i class="isax isax-heart5"></i>
                                            </a>
                                            <span class="badge bg-indigo">Cheapest</span>
                                        </div>
                                        <span
                                            class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium rounded">4.9</span>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="flight-loc d-flex align-items-center justify-content-between mb-2">
                                        <span class="loc-name d-inline-flex align-items-center"><i
                                                class="isax isax-airplane rotate-45 me-2"></i>Boston</span>
                                        <a href="#" class="arrow-icon flex-shrink-0"><i
                                                class="isax isax-arrow-2"></i></a>
                                        <span class="loc-name d-inline-flex align-items-center"><i
                                                class="isax isax-airplane rotate-135 me-2"></i>Singapore</span>
                                    </div>
                                    <h5 class="text-truncate mb-1"><a href="{{url('flight-details')}}">Silverwing 505</a></h5>
                                    <div class="d-flex align-items-center mb-2">
                                        <span class="avatar avatar-sm me-2">
                                            <img src="{{URL::asset('build/img/icons/airindia.svg')}}" class="rounded-circle" alt="icon">
                                        </span>
                                        <p class="fs-14 mb-0 me-2">Air India</p>
                                        <p class="fs-14 mb-0"><i class="ti ti-point-filled text-primary me-2"></i>1-stop
                                            at London</p>
                                    </div>
                                    <div class="date-info p-2 mb-3">
                                        <p class="d-flex align-items-center"><i
                                                class="isax isax-calendar-2 me-2"></i>Oct 17, 2024 - Oct 19, 2024</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <h6 class="text-primary"><span class="fs-14 fw-normal text-default">From
                                            </span>$700</h6>
                                        <div class="d-flex align-items-center">
                                            <span class="badge bg-outline-success fs-10 fw-medium me-2">18 Seats
                                                Left</span>
                                            <a href="#" class="avatar avatar-sm">
                                                <img src="{{URL::asset('build/img/users/user-15.jpg')}}" class="rounded-circle"
                                                    alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Flight Grid -->

                    </div>
                </div>

                <!-- Hotels Tab -->
                <div class="tab-pane fade" id="tab-3">
                    <div class="row  row-gap-4 justify-content-center">

                        <!-- Hotel Grid -->
                        <div class="col-xl-3 col-md-6 d-flex">
                            <div class="place-item mb-0 flex-fill">
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
                                            <span class="avatar avatar-md flex-shrink-0 me-2">
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
                            <div class="place-item mb-0 flex-fill">
                                <div class="place-img">
                                    <a href="{{url('hotel-details')}}">
                                        <img src="{{URL::asset('build/img/hotels/hotel-05.jpg')}}" class="img-fluid" alt="img">
                                    </a>
                                    <div class="fav-item">
                                        <span class="badge bg-info d-inline-flex align-items-center"><i
                                                class="isax isax-ranking me-1"></i>Trending</span>
                                        <a href="#" class="fav-icon">
                                            <i class="isax isax-heart5"></i>
                                        </a>
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
                                            <span class="avatar avatar-md flex-shrink-0 me-2">
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
                            <div class="place-item mb-0 flex-fill">
                                <div class="place-img">
                                    <a href="{{url('hotel-details')}}">
                                        <img src="{{URL::asset('build/img/hotels/hotel-06.jpg')}}" class="img-fluid" alt="img">
                                    </a>
                                    <div class="fav-item">
                                        <span class="badge bg-info d-inline-flex align-items-center"><i
                                                class="isax isax-ranking me-1"></i>Trending</span>
                                        <a href="#" class="fav-icon">
                                            <i class="isax isax-heart5"></i>
                                        </a>
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
                                            <span class="avatar avatar-md flex-shrink-0 me-2">
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
                            <div class="place-item mb-0 flex-fill">
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
                                            <span class="avatar avatar-md flex-shrink-0 me-2">
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

                        <!-- Hotel Grid -->
                        <div class="col-xl-3 col-md-6 d-flex">
                            <div class="place-item mb-0 flex-fill">
                                <div class="place-img">
                                    <a href="{{url('hotel-details')}}">
                                        <img src="{{URL::asset('build/img/hotels/hotel-09.jpg')}}" class="img-fluid" alt="img">
                                    </a>
                                    <div class="fav-item">
                                        <span class="badge bg-info d-inline-flex align-items-center"><i
                                                class="isax isax-ranking me-1"></i>Trending</span>
                                        <a href="#" class="fav-icon">
                                            <i class="isax isax-heart5"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="d-flex align-items-center mb-1">
                                        <span
                                            class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">4.1</span>
                                        <p class="fs-14">(270 Reviews)</p>
                                    </div>
                                    <h5 class="mb-1 text-truncate"><a href="{{url('hotel-details')}}">Stardust Hotel</a></h5>
                                    <p class="d-flex align-items-center mb-2"><i
                                            class="isax isax-location5 me-2"></i>Bold Street, Liverpool</p>
                                    <div class="border-top pt-2 mb-2">
                                        <h6 class="d-flex align-items-center">Facillities :<i
                                                class="isax isax-home-wifi ms-2 me-2 text-primary"></i><i
                                                class="isax isax-scissor me-2 text-primary"></i><i
                                                class="isax isax-profile-2user me-2 text-primary"></i><i
                                                class="isax isax-wind-2 me-2 text-primary"></i><a href="#"
                                                class="fs-14 fw-normal text-default d-inline-block">+2</a></h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <h5 class="text-primary text-nowrap me-2">$450 <span
                                                class="fs-14 fw-normal text-default">/ Night</span></h5>
                                        <a href="#" class="d-flex align-items-center overflow-hidden">
                                            <span class="avatar avatar-md flex-shrink-0 me-2">
                                                <img src="{{URL::asset('build/img/users/user-14.jpg')}}" class="rounded-circle"
                                                    alt="img">
                                            </span>
                                            <p class="fs-14">Mark Arrin</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Hotel Grid -->

                        <!-- Hotel Grid -->
                        <div class="col-xl-3 col-md-6 d-flex">
                            <div class="place-item mb-0 flex-fill">
                                <div class="place-img">
                                    <div class="img-slide">
                                        <div class="slide-images">
                                            <a href="{{url('hotel-details')}}">
                                                <img src="{{URL::asset('build/img/hotels/hotel-10.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item">
                                        <span class="badge bg-info d-inline-flex align-items-center"><i
                                                class="isax isax-ranking me-1"></i>Trending</span>
                                        <a href="#" class="fav-icon">
                                            <i class="isax isax-heart5"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="d-flex align-items-center mb-1">
                                        <span
                                            class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">4.6</span>
                                        <p class="fs-14">(650 Reviews)</p>
                                    </div>
                                    <h5 class="mb-1 text-truncate"><a href="{{url('hotel-details')}}">Hotel Serene Valley</a>
                                    </h5>
                                    <p class="d-flex align-items-center mb-2"><i
                                            class="isax isax-location5 me-2"></i>Broad Street, Bristol</p>
                                    <div class="border-top pt-2 mb-2">
                                        <h6 class="d-flex align-items-center">Facillities :<i
                                                class="isax isax-home-wifi ms-2 me-2 text-primary"></i><i
                                                class="isax isax-scissor me-2 text-primary"></i><i
                                                class="isax isax-profile-2user me-2 text-primary"></i><i
                                                class="isax isax-wind-2 me-2 text-primary"></i><a href="#"
                                                class="fs-14 fw-normal text-default d-inline-block">+2</a></h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <h5 class="text-primary text-nowrap me-2">$350 <span
                                                class="fs-14 fw-normal text-default">/ Night</span></h5>
                                        <a href="#" class="d-flex align-items-center overflow-hidden">
                                            <span class="avatar avatar-md flex-shrink-0 me-2">
                                                <img src="{{URL::asset('build/img/users/user-15.jpg')}}" class="rounded-circle"
                                                    alt="img">
                                            </span>
                                            <p class="fs-14">Brent Hole</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Hotel Grid -->

                        <!-- Hotel Grid -->
                        <div class="col-xl-3 col-md-6 d-flex">
                            <div class="place-item mb-0 flex-fill">
                                <div class="place-img">
                                    <div class="img-slide">
                                        <div class="slide-images">
                                            <a href="{{url('hotel-details')}}">
                                                <img src="{{URL::asset('build/img/hotels/hotel-11.jpg')}}" class="img-fluid" alt="img">
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
                                            class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">4.2</span>
                                        <p class="fs-14">(550 Reviews)</p>
                                    </div>
                                    <h5 class="mb-1 text-truncate"><a href="{{url('hotel-details')}}">Hotel Skyline Vista</a>
                                    </h5>
                                    <p class="d-flex align-items-center mb-2"><i
                                            class="isax isax-location5 me-2"></i>Chapel Street, Salford</p>
                                    <div class="border-top pt-2 mb-2">
                                        <h6 class="d-flex align-items-center">Facillities :<i
                                                class="isax isax-home-wifi ms-2 me-2 text-primary"></i><i
                                                class="isax isax-scissor me-2 text-primary"></i><i
                                                class="isax isax-profile-2user me-2 text-primary"></i><i
                                                class="isax isax-wind-2 me-2 text-primary"></i><a href="#"
                                                class="fs-14 fw-normal text-default d-inline-block">+2</a></h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <h5 class="text-primary text-nowrap me-2">$700 <span
                                                class="fs-14 fw-normal text-default">/ Night</span></h5>
                                        <a href="#" class="d-flex align-items-center overflow-hidden">
                                            <span class="avatar avatar-md flex-shrink-0 me-2">
                                                <img src="{{URL::asset('build/img/users/user-16.jpg')}}" class="rounded-circle"
                                                    alt="img">
                                            </span>
                                            <p class="fs-14 text-truncate">John James</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Hotel Grid -->

                        <!-- Hotel Grid -->
                        <div class="col-xl-3 col-md-6 d-flex">
                            <div class="place-item mb-0 flex-fill">
                                <div class="place-img">
                                    <div class="img-slide">
                                        <div class="slide-images">
                                            <a href="{{url('hotel-details')}}">
                                                <img src="{{URL::asset('build/img/hotels/hotel-12.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item">
                                        <span class="badge bg-info d-inline-flex align-items-center"><i
                                                class="isax isax-ranking me-1"></i>Trending</span>
                                        <a href="#" class="fav-icon">
                                            <i class="isax isax-heart5"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="d-flex align-items-center mb-1">
                                        <span
                                            class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">4.8</span>
                                        <p class="fs-14">(700 Reviews)</p>
                                    </div>
                                    <h5 class="mb-1 text-truncate"><a href="{{url('hotel-details')}}">Hotel Aurora Bliss</a>
                                    </h5>
                                    <p class="d-flex align-items-center mb-2"><i
                                            class="isax isax-location5 me-2"></i>Castle Street, Cambridge</p>
                                    <div class="border-top pt-2 mb-2">
                                        <h6 class="d-flex align-items-center">Facillities :<i
                                                class="isax isax-home-wifi ms-2 me-2 text-primary"></i><i
                                                class="isax isax-scissor me-2 text-primary"></i><i
                                                class="isax isax-profile-2user me-2 text-primary"></i><i
                                                class="isax isax-wind-2 me-2 text-primary"></i><a href="#"
                                                class="fs-14 fw-normal text-default d-inline-block">+2</a></h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <h5 class="text-primary text-nowrap me-2">$650 <span
                                                class="fs-14 fw-normal text-default">/ Night</span></h5>
                                        <a href="#" class="d-flex align-items-center overflow-hidden">
                                            <span class="avatar avatar-md flex-shrink-0 me-2">
                                                <img src="{{URL::asset('build/img/users/user-01.jpg')}}" class="rounded-circle"
                                                    alt="img">
                                            </span>
                                            <p class="fs-14">Ronald</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Hotel Grid -->

                    </div>
                </div>

                <!-- Cars Tab -->
                <div class="tab-pane fade" id="tab-4">
                    <div class="row  row-gap-4 justify-content-center">

                        <!-- Car Grid -->
                        <div class="col-xxl-3 col-xl-4 col-md-6 d-flex">
                            <div class="place-item mb-0 flex-fill">
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
                                    <a href="#" class="avatar avatar-md ms-3 car-avatar-image">
                                        <img src="{{URL::asset('build/img/users/user-08.jpg')}}" class="rounded-circle" alt="img">
                                    </a>
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
                        <div class="col-xxl-3 col-xl-4 col-md-6 d-flex">
                            <div class="place-item mb-0 flex-fill">
                                <div class="place-img">
                                    <div class="img-slide">
                                        <div class="slide-images">
                                            <a href="{{url('car-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-07.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>

                                    </div>
                                    <div class="fav-item">
                                        <a href="#" class="fav-icon">
                                            <i class="isax isax-heart5"></i>
                                        </a>
                                        <span class="badge bg-info d-inline-flex align-items-center"><i
                                                class="isax isax-ranking me-1"></i>Trending</span>
                                    </div>

                                </div>
                                <div class="place-content">
                                    <a href="#" class="avatar avatar-md ms-3 car-avatar-image">
                                        <img src="{{URL::asset('build/img/users/user-09.jpg')}}" class="rounded-circle" alt="img">
                                    </a>
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
                        <div class="col-xxl-3 col-xl-4 col-md-6 d-flex">
                            <div class="place-item mb-0 flex-fill">
                                <div class="place-img">
                                    <div class="img-slide">
                                        <div class="slide-images">
                                            <a href="{{url('car-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-08.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>

                                    </div>
                                    <div class="fav-item">
                                        <a href="#" class="fav-icon">
                                            <i class="isax isax-heart5"></i>
                                        </a>
                                        <span class="badge bg-info d-inline-flex align-items-center"><i
                                                class="isax isax-ranking me-1"></i>Trending</span>
                                    </div>

                                </div>
                                <div class="place-content">
                                    <a href="#" class="avatar avatar-md ms-3 car-avatar-image">
                                        <img src="{{URL::asset('build/img/users/user-10.jpg')}}" class="rounded-circle" alt="img">
                                    </a>
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
                        <div class="col-xxl-3 col-xl-4 col-md-6 d-flex">
                            <div class="place-item mb-0 flex-fill">
                                <div class="place-img">
                                    <div class="img-slide">
                                        <div class="slide-images">
                                            <a href="{{url('car-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-09.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>

                                    </div>
                                    <div class="fav-item">
                                        <a href="#" class="fav-icon">
                                            <i class="isax isax-heart5"></i>
                                        </a>
                                        <span class="badge bg-info d-inline-flex align-items-center"><i
                                                class="isax isax-ranking me-1"></i>Trending</span>
                                    </div>

                                </div>
                                <div class="place-content">
                                    <a href="#" class="avatar avatar-md ms-3 car-avatar-image">
                                        <img src="{{URL::asset('build/img/users/user-11.jpg')}}" class="rounded-circle" alt="img">
                                    </a>
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

                        <!-- Car Grid -->
                        <div class="col-xxl-3 col-xl-4 col-md-6 d-flex">
                            <div class="place-item mb-0 flex-fill">
                                <div class="place-img">
                                    <div class="img-slide">
                                        <div class="slide-images">
                                            <a href="{{url('car-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-10.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>

                                    </div>
                                    <div class="fav-item">
                                        <a href="#" class="fav-icon">
                                            <i class="isax isax-heart5"></i>
                                        </a>
                                        <span class="badge bg-info d-inline-flex align-items-center"><i
                                                class="isax isax-ranking me-1"></i>Trending</span>
                                    </div>

                                </div>
                                <div class="place-content">
                                    <a href="#" class="avatar avatar-md ms-3 car-avatar-image">
                                        <img src="{{URL::asset('build/img/users/user-12.jpg')}}" class="rounded-circle" alt="img">
                                    </a>
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <div class="d-flex flex-wrap align-items-center">
                                            <span class="badge badge-secondary  fs-10 fw-medium me-1">Sedan</span>
                                        </div>
                                    </div>
                                    <h5 class="mb-1 text-truncate"><a href="{{url('car-details')}}">BMW 3.0 Gran Turismo</a>
                                    </h5>
                                    <p class="d-flex align-items-center mb-3"><i
                                            class="isax isax-location5 me-2"></i>King’s Road, Chelsea</p>
                                    <div class="mb-3 p-2 border rounded">
                                        <div class="row">
                                            <div class="col border-end">
                                                <span class="fs-14 d-flex align-items-center text-dark"><i
                                                        class="isax isax-gas-station me-1"></i>Fuel</span>
                                                <p class="text-dark fs-14">Petrol</p>
                                            </div>
                                            <div class="col border-end">
                                                <span class="fs-14 d-flex align-items-center text-dark"><i
                                                        class="isax isax-kanban me-1"></i>Gear</span>
                                                <p class="text-dark fs-14">Manual</p>
                                            </div>
                                            <div class="col">
                                                <span class="fs-14 d-flex align-items-center text-dark"><i
                                                        class="isax isax-routing-2 me-1"></i>Travelled</span>
                                                <p class="text-dark fs-14">12,800 KM</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <div class="d-flex flex-wrap align-items-center me-2">
                                            <h5 class="text-primary">$550 <span class="fs-14 text-gray-6 fw-normal">/
                                                    day</span></h5>

                                        </div>
                                        <div class="ms-2 d-flex align-items-center">
                                            <div class="d-flex align-items-center flex-wrap">
                                                <span
                                                    class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-1">4.3</span>
                                                <p class="fs-14">(300 Reviews)</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Car Grid -->

                        <!-- Car Grid -->
                        <div class="col-xxl-3 col-xl-4 col-md-6 d-flex">
                            <div class="place-item mb-0 flex-fill">
                                <div class="place-img">
                                    <div class="img-slide">
                                        <div class="slide-images">
                                            <a href="{{url('car-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-11.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>

                                    </div>
                                    <div class="fav-item">
                                        <a href="#" class="fav-icon">
                                            <i class="isax isax-heart5"></i>
                                        </a>
                                        <span class="badge bg-info d-inline-flex align-items-center"><i
                                                class="isax isax-ranking me-1"></i>Trending</span>
                                    </div>

                                </div>
                                <div class="place-content">
                                    <a href="#" class="avatar avatar-md ms-3 car-avatar-image">
                                        <img src="{{URL::asset('build/img/users/user-13.jpg')}}" class="rounded-circle" alt="img">
                                    </a>
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <div class="d-flex flex-wrap align-items-center">
                                            <span class="badge badge-secondary  fs-10 fw-medium me-1">Sedan</span>
                                        </div>
                                    </div>
                                    <h5 class="mb-1 text-truncate"><a href="{{url('car-details')}}">Infiniti QX60 </a></h5>
                                    <p class="d-flex align-items-center mb-3"><i
                                            class="isax isax-location5 me-2"></i>Bold Street, Liverpool</p>
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
                                                <p class="text-dark fs-14">Auto</p>
                                            </div>
                                            <div class="col">
                                                <span class="fs-14 d-flex align-items-center text-dark"><i
                                                        class="isax isax-routing-2 me-1"></i>Travelled</span>
                                                <p class="text-dark fs-14">13,500 KM</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <div class="d-flex flex-wrap align-items-center me-2">
                                            <h5 class="text-primary">$450 <span class="fs-14 text-gray-6 fw-normal">/
                                                    day</span></h5>

                                        </div>
                                        <div class="ms-2 d-flex align-items-center">
                                            <div class="d-flex align-items-center flex-wrap">
                                                <span
                                                    class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-1">4.1</span>
                                                <p class="fs-14">(450 Reviews)</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Car Grid -->

                        <!-- Car Grid -->
                        <div class="col-xxl-3 col-xl-4 col-md-6 d-flex">
                            <div class="place-item mb-0 flex-fill">
                                <div class="place-img">
                                    <div class="img-slide">
                                        <div class="slide-images">
                                            <a href="{{url('car-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-12.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>

                                    </div>
                                    <div class="fav-item">
                                        <a href="#" class="fav-icon">
                                            <i class="isax isax-heart5"></i>
                                        </a>
                                        <span class="badge bg-info d-inline-flex align-items-center"><i
                                                class="isax isax-ranking me-1"></i>Trending</span>
                                    </div>

                                </div>
                                <div class="place-content">
                                    <a href="#" class="avatar avatar-md ms-3 car-avatar-image">
                                        <img src="{{URL::asset('build/img/users/user-14.jpg')}}" class="rounded-circle" alt="img">
                                    </a>
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <div class="d-flex flex-wrap align-items-center">
                                            <span class="badge badge-secondary  fs-10 fw-medium me-1">Sedan</span>
                                        </div>
                                    </div>
                                    <h5 class="mb-1 text-truncate"><a href="{{url('car-details')}}">Toyota 86 Sports</a></h5>
                                    <p class="d-flex align-items-center mb-3"><i
                                            class="isax isax-location5 me-2"></i>Broad Street, Bristol</p>
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
                                                <p class="text-dark fs-14">15,000 KM</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <div class="d-flex flex-wrap align-items-center me-2">
                                            <h5 class="text-primary">$350 <span class="fs-14 text-gray-6 fw-normal">/
                                                    day</span></h5>

                                        </div>
                                        <div class="ms-2 d-flex align-items-center">
                                            <div class="d-flex align-items-center flex-wrap">
                                                <span
                                                    class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-1">4.6</span>
                                                <p class="fs-14">(520 Reviews)</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Car Grid -->

                        <!-- Car Grid -->
                        <div class="col-xxl-3 col-xl-4 col-md-6 d-flex">
                            <div class="place-item mb-0 flex-fill">
                                <div class="place-img">
                                    <div class="img-slide">
                                        <div class="slide-images">
                                            <a href="{{url('car-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-13.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>

                                    </div>
                                    <div class="fav-item">
                                        <a href="#" class="fav-icon">
                                            <i class="isax isax-heart5"></i>
                                        </a>
                                        <span class="badge bg-info d-inline-flex align-items-center"><i
                                                class="isax isax-ranking me-1"></i>Trending</span>
                                    </div>

                                </div>
                                <div class="place-content">
                                    <a href="#" class="avatar avatar-md ms-3 car-avatar-image">
                                        <img src="{{URL::asset('build/img/users/user-15.jpg')}}" class="rounded-circle" alt="img">
                                    </a>
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <div class="d-flex flex-wrap align-items-center">
                                            <span class="badge badge-secondary  fs-10 fw-medium me-1">Sedan</span>
                                        </div>
                                    </div>
                                    <h5 class="mb-1 text-truncate"><a href="{{url('car-details')}}">Jeep Wrangler</a></h5>
                                    <p class="d-flex align-items-center mb-3"><i
                                            class="isax isax-location5 me-2"></i>Chapel Street, Salford</p>
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
                                            <h5 class="text-primary">$700 <span class="fs-14 text-gray-6 fw-normal">/
                                                    day</span></h5>

                                        </div>
                                        <div class="ms-2 d-flex align-items-center">
                                            <div class="d-flex align-items-center flex-wrap">
                                                <span
                                                    class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-1">4.2</span>
                                                <p class="fs-14">(360 Reviews)</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Car Grid -->

                        <!-- Car Grid -->
                        <div class="col-xxl-3 col-xl-4 col-md-6 d-flex">
                            <div class="place-item mb-0 flex-fill">
                                <div class="place-img">
                                    <div class="img-slide">
                                        <div class="slide-images">
                                            <a href="{{url('car-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-14.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item">
                                        <a href="#" class="fav-icon">
                                            <i class="isax isax-heart5"></i>
                                        </a>
                                        <span class="badge bg-info d-inline-flex align-items-center"><i
                                                class="isax isax-ranking me-1"></i>Trending</span>
                                    </div>

                                </div>
                                <div class="place-content">
                                    <a href="#" class="avatar avatar-md ms-3 car-avatar-image">
                                        <img src="{{URL::asset('build/img/users/user-16.jpg')}}" class="rounded-circle" alt="img">
                                    </a>
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <div class="d-flex flex-wrap align-items-center">
                                            <span class="badge badge-secondary  fs-10 fw-medium me-1">Sedan</span>
                                        </div>
                                    </div>
                                    <h5 class="mb-1 text-truncate"><a href="{{url('car-details')}}">Jaguar XK</a></h5>
                                    <p class="d-flex align-items-center mb-3"><i
                                            class="isax isax-location5 me-2"></i>Castle Street, Cambridge</p>
                                    <div class="mb-3 p-2 border rounded">
                                        <div class="row">
                                            <div class="col border-end">
                                                <span class="fs-14 d-flex align-items-center text-dark"><i
                                                        class="isax isax-gas-station me-1"></i>Fuel</span>
                                                <p class="text-dark fs-14">Petrol</p>
                                            </div>
                                            <div class="col border-end">
                                                <span class="fs-14 d-flex align-items-center text-dark"><i
                                                        class="isax isax-kanban me-1"></i>Gear</span>
                                                <p class="text-dark fs-14">Auto</p>
                                            </div>
                                            <div class="col">
                                                <span class="fs-14 d-flex align-items-center text-dark"><i
                                                        class="isax isax-routing-2 me-1"></i>Travelled</span>
                                                <p class="text-dark fs-14">13,800 KM</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <div class="d-flex flex-wrap align-items-center me-2">
                                            <h5 class="text-primary">$650 <span class="fs-14 text-gray-6 fw-normal">/
                                                    day</span></h5>

                                        </div>
                                        <div class="ms-2 d-flex align-items-center">
                                            <div class="d-flex align-items-center flex-wrap">
                                                <span
                                                    class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-1">4.8</span>
                                                <p class="fs-14">(500 Reviews)</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Car Grid -->

                    </div>
                </div>

                <!-- Cruise Tab -->
                <div class="tab-pane fade" id="tab-5">
                    <div class="row justify-content-center">

                        <!-- Cruise Grid -->
                        <div class="col-xl-3 col-md-6 d-flex">
                            <div class="place-item mb-0 flex-fill">
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
                                            <span class="avatar avatar-md flex-shrink-0 me-2">
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
                            <div class="place-item mb-0 flex-fill">
                                <div class="place-img">
                                    <a href="{{url('cruise-details')}}">
                                        <img src="{{URL::asset('build/img/cruise/cruise-12.jpg')}}" class="img-fluid" alt="img">
                                    </a>
                                    <div class="fav-item">
                                        <a href="#" class="fav-icon">
                                            <i class="isax isax-heart5"></i>
                                        </a>
                                        <span class="badge bg-info d-inline-flex align-items-center"><i
                                                class="isax isax-ranking me-1"></i>Trending</span>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <a href="#" class="d-flex align-items-center overflow-hidden me-2">
                                            <span class="avatar avatar-md flex-shrink-0 me-2">
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
                            <div class="place-item mb-0 flex-fill">
                                <div class="place-img">
                                    <a href="{{url('cruise-details')}}">
                                        <img src="{{URL::asset('build/img/cruise/cruise-09.jpg')}}" class="img-fluid" alt="img">
                                    </a>
                                    <div class="fav-item">
                                        <a href="#" class="fav-icon">
                                            <i class="isax isax-heart5"></i>
                                        </a>
                                        <span class="badge bg-info d-inline-flex align-items-center"><i
                                                class="isax isax-ranking me-1"></i>Trending</span>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <a href="#" class="d-flex align-items-center overflow-hidden me-2">
                                            <span class="avatar avatar-md flex-shrink-0 me-2">
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
                            <div class="place-item mb-0 flex-fill">
                                <div class="place-img">
                                    <a href="{{url('cruise-details')}}">
                                        <img src="{{URL::asset('build/img/cruise/cruise-09.jpg')}}" class="img-fluid" alt="img">
                                    </a>
                                    <div class="fav-item">
                                        <a href="#" class="fav-icon">
                                            <i class="isax isax-heart5"></i>
                                        </a>
                                        <span class="badge bg-info d-inline-flex align-items-center"><i
                                                class="isax isax-ranking me-1"></i>Trending</span>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <a href="#" class="d-flex align-items-center overflow-hidden me-2">
                                            <span class="avatar avatar-md flex-shrink-0 me-2">
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

                        <!-- Cruise Grid -->
                        <div class="col-xl-3 col-md-6 d-flex">
                            <div class="place-item mb-0 flex-fill">
                                <div class="place-img">
                                    <div class="img-slide">
                                        <div class="slide-images">
                                            <a href="{{url('cruise-details')}}">
                                                <img src="{{URL::asset('build/img/cruise/cruise-01.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item">
                                        <a href="#" class="fav-icon">
                                            <i class="isax isax-heart5"></i>
                                        </a>
                                        <span class="badge bg-info d-inline-flex align-items-center"><i
                                                class="isax isax-ranking me-1"></i>Trending</span>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <a href="#" class="d-flex align-items-center overflow-hidden me-2">
                                            <span class="avatar avatar-md flex-shrink-0 me-2">
                                                <img src="{{URL::asset('build/img/users/user-12.jpg')}}" class="rounded-circle"
                                                    alt="img">
                                            </span>
                                            <p class="fs-14 text-truncate ">Timothy</p>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <span
                                                class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">4.1</span>
                                            <p class="fs-14 text-truncate">(300)</p>
                                        </div>
                                    </div>
                                    <h5 class="mb-1 text-truncate"><a href="{{url('cruise-details')}}">Albert Yacht</a></h5>
                                    <p class="d-flex align-items-center mb-3"><i
                                            class="isax isax-location5 me-2"></i>King’s Road, Chelsea</p>
                                    <div class="curise-details d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <p class="mb-1"><i class="isax isax-calendar-2 text-gray-6 me-1"></i>Year :
                                                <span class="text-dark fw-medium">2018</span>
                                            </p>
                                            <p><i class="isax isax-user me-1"></i>Guests : <span
                                                    class="text-dark fw-medium">3</span></p>
                                        </div>
                                        <div>
                                            <p class="mb-1"><i class="isax isax-fatrows text-gray-6 me-1"></i>Width :
                                                <span class="text-dark fw-medium">90.25 m</span>
                                            </p>
                                            <p><i class="isax isax-flash-1 me-1"></i>Speed : <span
                                                    class="text-dark fw-medium">25 Knots</span></p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <h6 class="d-flex align-items-center"><i
                                                class="isax isax-home-wifi ms-2 me-2"></i><i
                                                class="isax isax-scissor me-2"></i><i
                                                class="isax isax-profile-2user me-2"></i><i
                                                class="isax isax-wind-2 me-2"></i><a href="#"
                                                class="fs-14 fw-normal text-default d-inline-block">+2</a></h6>
                                        <h5 class="text-primary text-nowrap me-2">$550 <span
                                                class="fs-14 fw-normal text-default">/ day</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Cruise Grid -->

                        <!-- Cruise Grid -->
                        <div class="col-xl-3 col-md-6 d-flex">
                            <div class="place-item mb-0 flex-fill">
                                <div class="place-img">
                                    <a href="{{url('cruise-details')}}">
                                        <img src="{{URL::asset('build/img/cruise/cruise-11.jpg')}}" class="img-fluid" alt="img">
                                    </a>
                                    <div class="fav-item">
                                        <a href="#" class="fav-icon">
                                            <i class="isax isax-heart5"></i>
                                        </a>
                                        <span class="badge bg-info d-inline-flex align-items-center"><i
                                                class="isax isax-ranking me-1"></i>Trending</span>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <a href="#" class="d-flex align-items-center overflow-hidden me-2">
                                            <span class="avatar avatar-md flex-shrink-0 me-2">
                                                <img src="{{URL::asset('build/img/users/user-13.jpg')}}" class="rounded-circle"
                                                    alt="img">
                                            </span>
                                            <p class="fs-14 text-truncate ">Mark Arriton</p>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <span
                                                class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">4.4</span>
                                            <p class="fs-14 text-truncate">(450)</p>
                                        </div>
                                    </div>
                                    <h5 class="mb-1 text-truncate"><a href="{{url('cruise-details')}}">Shelly Yacht</a></h5>
                                    <p class="d-flex align-items-center mb-3"><i
                                            class="isax isax-location5 me-2"></i>Bold Street, Liverpool</p>
                                    <div class="curise-details d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <p class="mb-1"><i class="isax isax-calendar-2 text-gray-6 me-1"></i>Year :
                                                <span class="text-dark fw-medium">2023</span>
                                            </p>
                                            <p><i class="isax isax-user me-1"></i>Guests : <span
                                                    class="text-dark fw-medium">2</span></p>
                                        </div>
                                        <div>
                                            <p class="mb-1"><i class="isax isax-fatrows text-gray-6 me-1"></i>Width :
                                                <span class="text-dark fw-medium">72.83 m</span>
                                            </p>
                                            <p><i class="isax isax-flash-1 me-1"></i>Speed : <span
                                                    class="text-dark fw-medium">23 Knots</span></p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <h6 class="d-flex align-items-center"><i
                                                class="isax isax-home-wifi ms-2 me-2"></i><i
                                                class="isax isax-scissor me-2"></i><i
                                                class="isax isax-profile-2user me-2"></i><i
                                                class="isax isax-wind-2 me-2"></i><a href="#"
                                                class="fs-14 fw-normal text-default d-inline-block">+2</a></h6>
                                        <h5 class="text-primary text-nowrap me-2">$450 <span
                                                class="fs-14 fw-normal text-default">/ day</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Cruise Grid -->

                        <!-- Cruise Grid -->
                        <div class="col-xl-3 col-md-6 d-flex">
                            <div class="place-item mb-0 flex-fill">
                                <div class="place-img">
                                    <div class="img-slide">
                                        <div class="slide-images">
                                            <a href="{{url('cruise-details')}}">
                                                <img src="{{URL::asset('build/img/cruise/cruise-07.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item">
                                        <a href="#" class="fav-icon">
                                            <i class="isax isax-heart5"></i>
                                        </a>
                                        <span class="badge bg-info d-inline-flex align-items-center"><i
                                                class="isax isax-ranking me-1"></i>Trending</span>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <a href="#" class="d-flex align-items-center overflow-hidden me-2">
                                            <span class="avatar avatar-md flex-shrink-0 me-2">
                                                <img src="{{URL::asset('build/img/users/user-14.jpg')}}" class="rounded-circle"
                                                    alt="img">
                                            </span>
                                            <p class="fs-14 text-truncate ">Beth Will</p>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <span
                                                class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">4.6</span>
                                            <p class="fs-14 text-truncate">(520)</p>
                                        </div>
                                    </div>
                                    <h5 class="mb-1 text-truncate"><a href="{{url('cruise-details')}}">Sunny Sailor</a></h5>
                                    <p class="d-flex align-items-center mb-3"><i
                                            class="isax isax-location5 me-2"></i>Broad Street, Bristol</p>
                                    <div class="curise-details d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <p class="mb-1"><i class="isax isax-calendar-2 text-gray-6 me-1"></i>Year :
                                                <span class="text-dark fw-medium">2008</span>
                                            </p>
                                            <p><i class="isax isax-user me-1"></i>Guests : <span
                                                    class="text-dark fw-medium">4</span></p>
                                        </div>
                                        <div>
                                            <p class="mb-1"><i class="isax isax-fatrows text-gray-6 me-1"></i>Width :
                                                <span class="text-dark fw-medium">64.37 m</span>
                                            </p>
                                            <p><i class="isax isax-flash-1 me-1"></i>Speed : <span
                                                    class="text-dark fw-medium">18 Knots</span></p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <h6 class="d-flex align-items-center"><i
                                                class="isax isax-home-wifi ms-2 me-2"></i><i
                                                class="isax isax-scissor me-2"></i><i
                                                class="isax isax-profile-2user me-2"></i><i
                                                class="isax isax-wind-2 me-2"></i><a href="#"
                                                class="fs-14 fw-normal text-default d-inline-block">+2</a></h6>
                                        <h5 class="text-primary text-nowrap me-2">$350 <span
                                                class="fs-14 fw-normal text-default">/ day</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Cruise Grid -->

                        <!-- Cruise Grid -->
                        <div class="col-xl-3 col-md-6 d-flex">
                            <div class="place-item mb-0 flex-fill">
                                <div class="place-img">
                                    <div class="img-slide">
                                        <div class="slide-images">
                                            <a href="{{url('cruise-details')}}">
                                                <img src="{{URL::asset('build/img/cruise/cruise-06.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item">
                                        <a href="#" class="fav-icon">
                                            <i class="isax isax-heart5"></i>
                                        </a>
                                        <span class="badge bg-info d-inline-flex align-items-center"><i
                                                class="isax isax-ranking me-1"></i>Trending</span>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <a href="#" class="d-flex align-items-center overflow-hidden me-2">
                                            <span class="avatar avatar-md flex-shrink-0 me-2">
                                                <img src="{{URL::asset('build/img/users/user-15.jpg')}}" class="rounded-circle"
                                                    alt="img">
                                            </span>
                                            <p class="fs-14 text-truncate ">John James</p>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <span
                                                class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">4.8</span>
                                            <p class="fs-14 text-truncate">(360)</p>
                                        </div>
                                    </div>
                                    <h5 class="mb-1 text-truncate"><a href="{{url('cruise-details')}}">Ocean Voyager</a></h5>
                                    <p class="d-flex align-items-center mb-3"><i
                                            class="isax isax-location5 me-2"></i>Chapel Street, Salford</p>
                                    <div class="curise-details d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <p class="mb-1"><i class="isax isax-calendar-2 text-gray-6 me-1"></i>Year :
                                                <span class="text-dark fw-medium">2022</span>
                                            </p>
                                            <p><i class="isax isax-user me-1"></i>Guests : <span
                                                    class="text-dark fw-medium">7</span></p>
                                        </div>
                                        <div>
                                            <p class="mb-1"><i class="isax isax-fatrows text-gray-6 me-1"></i>Width :
                                                <span class="text-dark fw-medium">98.56 m</span>
                                            </p>
                                            <p><i class="isax isax-flash-1 me-1"></i>Speed : <span
                                                    class="text-dark fw-medium">15 Knots</span></p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <h6 class="d-flex align-items-center"><i
                                                class="isax isax-home-wifi ms-2 me-2"></i><i
                                                class="isax isax-scissor me-2"></i><i
                                                class="isax isax-profile-2user me-2"></i><i
                                                class="isax isax-wind-2 me-2"></i><a href="#"
                                                class="fs-14 fw-normal text-default d-inline-block">+2</a></h6>
                                        <h5 class="text-primary text-nowrap me-2">$700 <span
                                                class="fs-14 fw-normal text-default">/ day</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Cruise Grid -->

                    </div>
                </div>

                <!-- Activity Tab -->
                <div class="tab-pane fade" id="tab-6">
                    <div class="row row-gap-4 justify-content-center">

                        <!-- Activity Grid -->
                        <div class="col-xl-3 col-md-6 d-flex">
                            <div class="place-item mb-0 flex-fill">
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
                                    <div class="d-flex align-items-center badge-right position-absolute">
                                        <span class="rating fs-12 me-1">
                                            <i class="fas fa-star filled"></i>
                                        </span>
                                        <p class="fs-14 text-gray-2">
                                            <span class="fs-14 fw-medium text-gray-9">4.9</span> (672 reviews)
                                        </p>
                                    </div>
                                    <h5 class="mt-3 mb-1 text-truncate"><a href="{{url('activity-details')}}">Snorkeling
                                            Tour</a></h5>
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
                                            <span class="avatar avatar-md flex-shrink-0">
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
                            <div class="place-item mb-0 flex-fill">
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
                                    <div class="d-flex align-items-center badge-right position-absolute">
                                        <span class="rating fs-12 me-1">
                                            <i class="fas fa-star filled"></i>
                                        </span>
                                        <p class="fs-14 text-gray-2">
                                            <span class="fs-14 fw-medium text-gray-9">4.6</span> (450 reviews)
                                        </p>
                                    </div>
                                    <h5 class="mt-3 mb-1 text-truncate"><a href="{{url('activity-details')}}">Alpine
                                            Snowboarding</a></h5>
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
                                            <span class="avatar avatar-md flex-shrink-0me-1">
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
                            <div class="place-item mb-0 flex-fill">
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
                                    <div class="d-flex align-items-center badge-right position-absolute">
                                        <span class="rating fs-12 me-1">
                                            <i class="fas fa-star filled"></i>
                                        </span>
                                        <p class="fs-14 text-gray-2">
                                            <span class="fs-14 fw-medium text-gray-9">4.5</span> (320 reviews)
                                        </p>
                                    </div>
                                    <h5 class="mt-3 mb-1 text-truncate"><a href="{{url('activity-details')}}">White Water
                                            Rafting</a></h5>
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
                                            <span class="avatar avatar-md flex-shrink-0">
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
                            <div class="place-item mb-0 flex-fill">
                                <div class="place-img">
                                    <a href="{{url('activity-details')}}">
                                        <img src="{{URL::asset('build/img/activities/activity-04.jpg')}}" class="img-fluid" alt="img">
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
                                    <div class="d-flex align-items-center badge-right position-absolute">
                                        <span class="rating fs-12 me-1">
                                            <i class="fas fa-star filled"></i>
                                        </span>
                                        <p class="fs-14 text-gray-2">
                                            <span class="fs-14 fw-medium text-gray-9">4.2</span> (280 reviews)
                                        </p>
                                    </div>
                                    <h5 class="mt-3 mb-1 text-truncate"><a href="{{url('activity-details')}}">Cliffside
                                            Paragliding</a></h5>
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
                                            <span class="avatar avatar-md flex-shrink-0">
                                                <img src="{{URL::asset('build/img/users/user-11.jpg')}}" class="rounded-circle"
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
                            <div class="place-item mb-0 flex-fill">
                                <div class="place-img">
                                    <a href="{{url('activity-details')}}">
                                        <img src="{{URL::asset('build/img/activities/activity-05.jpg')}}" class="img-fluid" alt="img">
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
                                    <div class="d-flex align-items-center badge-right position-absolute">
                                        <span class="rating fs-12 me-1">
                                            <i class="fas fa-star filled"></i>
                                        </span>
                                        <p class="fs-14 text-gray-2">
                                            <span class="fs-14 fw-medium text-gray-9">4.0</span> (510 reviews)
                                        </p>
                                    </div>
                                    <h5 class="mt-3 mb-1 text-truncate"><a href="{{url('activity-details')}}">River Cruise</a>
                                    </h5>
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <p class="d-flex align-items-center fs-14 mb-0">
                                            <i class="isax isax-location5 me-1"></i> Paris, France
                                        </p>
                                        <p class="d-flex align-items-center fs-14 mb-0">
                                            <i class="isax isax-clock5 me-1"></i> 3 hrs
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">

                                        <h5 class="text-primary text-nowrap d-flex align-items-center gap-1"><span
                                                class="fs-14 fw-normal text-gray-6">Starts From</span> $280 <span
                                                class="text-gray-3 text-line">$300</span></h5>
                                        <a href="#" class="d-flex align-items-center overflow-hidden">
                                            <span class="avatar avatar-md flex-shrink-0">
                                                <img src="{{URL::asset('build/img/users/user-12.jpg')}}" class="rounded-circle"
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
                            <div class="place-item mb-0 flex-fill">
                                <div class="place-img">
                                    <a href="{{url('activity-details')}}">
                                        <img src="{{URL::asset('build/img/activities/activity-06.jpg')}}" class="img-fluid" alt="img">
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
                                    <div class="d-flex align-items-center badge-right position-absolute">
                                        <span class="rating fs-12 me-1">
                                            <i class="fas fa-star filled"></i>
                                        </span>
                                        <p class="fs-14 text-gray-2">
                                            <span class="fs-14 fw-medium text-gray-9">4.7</span> (730 reviews)
                                        </p>
                                    </div>
                                    <h5 class="mt-3 mb-1 text-truncate"><a href="{{url('activity-details')}}">Dessert
                                            Adventure</a></h5>
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <p class="d-flex align-items-center fs-14 mb-0">
                                            <i class="isax isax-location5 me-1"></i> Dubai, UAE
                                        </p>
                                        <p class="d-flex align-items-center fs-14 mb-0">
                                            <i class="isax isax-clock5 me-1"></i> 5 hrs
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">

                                        <h5 class="text-primary text-nowrap d-flex align-items-center gap-1"><span
                                                class="fs-14 fw-normal text-gray-6">Starts From</span> $200 <span
                                                class="text-gray-3 text-line">$220</span></h5>
                                        <a href="#" class="d-flex align-items-center overflow-hidden">
                                            <span class="avatar avatar-md flex-shrink-0">
                                                <img src="{{URL::asset('build/img/users/user-13.jpg')}}" class="rounded-circle"
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
                            <div class="place-item mb-0 flex-fill">
                                <div class="place-img">
                                    <a href="{{url('activity-details')}}">
                                        <img src="{{URL::asset('build/img/activities/activity-07.jpg')}}" class="img-fluid" alt="img">
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
                                    <div class="d-flex align-items-center badge-right position-absolute">
                                        <span class="rating fs-12 me-1">
                                            <i class="fas fa-star filled"></i>
                                        </span>
                                        <p class="fs-14 text-gray-2">
                                            <span class="fs-14 fw-medium text-gray-9">4.1</span> (280 reviews)
                                        </p>
                                    </div>
                                    <h5 class="mt-3 mb-1 text-truncate"><a href="{{url('activity-details')}}">Coastal
                                            Kayaking</a></h5>
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <p class="d-flex align-items-center fs-14 mb-0">
                                            <i class="isax isax-location5 me-1"></i> Sydney, Australia
                                        </p>
                                        <p class="d-flex align-items-center fs-14 mb-0">
                                            <i class="isax isax-clock5 me-1"></i> 4 hrs
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">

                                        <h5 class="text-primary text-nowrap d-flex align-items-center gap-1"><span
                                                class="fs-14 fw-normal text-gray-6">Starts From</span> $150 <span
                                                class="text-gray-3 text-line">$160</span></h5>
                                        <a href="#" class="d-flex align-items-center overflow-hidden">
                                            <span class="avatar avatar-md flex-shrink-0">
                                                <img src="{{URL::asset('build/img/users/user-14.jpg')}}" class="rounded-circle"
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
                            <div class="place-item mb-0 flex-fill">
                                <div class="place-img">
                                    <a href="{{url('activity-details')}}">
                                        <img src="{{URL::asset('build/img/activities/activity-08.jpg')}}" class="img-fluid" alt="img">
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
                                    <div class="d-flex align-items-center badge-right position-absolute">
                                        <span class="rating fs-12 me-1">
                                            <i class="fas fa-star filled"></i>
                                        </span>
                                        <p class="fs-14 text-gray-2">
                                            <span class="fs-14 fw-medium text-gray-9">4.8</span> (140 reviews)
                                        </p>
                                    </div>
                                    <h5 class="mt-3 mb-1 text-truncate"><a href="{{url('activity-details')}}">Historic
                                            Landmarks Tour</a></h5>
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <p class="d-flex align-items-center fs-14 mb-0">
                                            <i class="isax isax-location5 me-1"></i> Rome, Italy
                                        </p>
                                        <p class="d-flex align-items-center fs-14 mb-0">
                                            <i class="isax isax-clock5 me-1"></i> 2 hrs
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">

                                        <h5 class="text-primary text-nowrap d-flex align-items-center gap-1"><span
                                                class="fs-14 fw-normal text-gray-6">Starts From</span> $120 <span
                                                class="text-gray-3 text-line">$150</span></h5>
                                        <a href="#" class="d-flex align-items-center overflow-hidden">
                                            <span class="avatar avatar-md flex-shrink-0">
                                                <img src="{{URL::asset('build/img/users/user-16.jpg')}}" class="rounded-circle"
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

                <!-- Visa Tab -->
                <div class="tab-pane fade" id="tab-7">
                    <div class="row row-gap-4 justify-content-center">

                        <!-- Tours Grid -->
                        <div class="col-xxl-3 col-xl-4 col-md-6 d-flex">
                            <div class="place-item mb-0 flex-fill">
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
                        <div class="col-xxl-3 col-xl-4 col-md-6 d-flex">
                            <div class="place-item mb-0 flex-fill">
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
                        <div class="col-xxl-3 col-xl-4 col-md-6 d-flex">
                            <div class="place-item mb-0 flex-fill">
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
                        <div class="col-xxl-3 col-xl-4 col-md-6 d-flex">
                            <div class="place-item mb-0 flex-fill">
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

                        <!-- Tours Grid -->
                        <div class="col-xxl-3 col-xl-4 col-md-6 d-flex">
                            <div class="place-item mb-0 flex-fill">
                                <div class="place-img">
                                    <div class="slide-images">
                                        <a href="{{url('visa-details')}}">
                                            <img src="{{URL::asset('build/img/visa/visa-05.jpg')}}" class="img-fluid w-100" alt="img">
                                        </a>
                                    </div>
                                    <div class="fav-item">
                                        <button href="#" class="fav-icon p-2 border-0 selected">
                                            <i class="isax isax-heart5"></i>
                                        </button>
                                        <span class="badge bg-white text-dark d-inline-flex align-items-center">Family
                                            Reunion Visa</span>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <div class="d-flex flex-wrap align-items-center me-2">
                                            <span class="me-1"><i class="isax isax-clock text-gray-6"></i></span>
                                            <p class="fs-14 text-gray-9">8-12 Working Days</p>
                                        </div>
                                    </div>
                                    <h5 class="mb-2"><a href="{{url('visa-details')}}">Family Members to Join Relatives</a>
                                    </h5>
                                    <div class="d-flex align-items-center gap-0 mb-3">
                                        <p class="d-flex align-items-center fs-14 mb-0 me-2">Mode : Paper</p>
                                        <p class="fs-14 mb-0"><i
                                                class="ti ti-point-filled text-primary me-2"></i>Validity : 1 Year</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <div class="mb-0">
                                            <h6 class="d-flex align-items-center text-gray-6 fs-14 fw-normal">From <span
                                                    class="ms-1 fs-18 fw-semibold text-primary">$600</span><span
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
                        <div class="col-xxl-3 col-xl-4 col-md-6 d-flex">
                            <div class="place-item mb-0 flex-fill">
                                <div class="place-img">
                                    <div class="slide-images">
                                        <a href="{{url('visa-details')}}">
                                            <img src="{{URL::asset('build/img/visa/visa-06.jpg')}}" class="img-fluid w-100" alt="img">
                                        </a>
                                    </div>
                                    <div class="fav-item">
                                        <button href="#" class="fav-icon p-2 border-0">
                                            <i class="isax isax-heart5"></i>
                                        </button>
                                        <span class="badge bg-white text-dark d-inline-flex align-items-center">Cultural
                                            Exchange Visa</span>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <div class="d-flex flex-wrap align-items-center me-2">
                                            <span class="me-1"><i class="isax isax-clock text-gray-6"></i></span>
                                            <p class="fs-14 text-gray-9">10-15 Working Days</p>
                                        </div>
                                    </div>
                                    <h5 class="mb-2"><a href="{{url('visa-details')}}">Cultural Programs and Exchanges</a>
                                    </h5>
                                    <div class="d-flex align-items-center gap-0 mb-3">
                                        <p class="d-flex align-items-center fs-14 mb-0 me-2">Mode : Electronic</p>
                                        <p class="fs-14 mb-0"><i
                                                class="ti ti-point-filled text-primary me-2"></i>Validity : 6 Months</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <div class="mb-0">
                                            <h6 class="d-flex align-items-center text-gray-6 fs-14 fw-normal">From <span
                                                    class="ms-1 fs-18 fw-semibold text-primary">$400</span><span
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
                        <div class="col-xxl-3 col-xl-4 col-md-6 d-flex">
                            <div class="place-item mb-0 flex-fill">
                                <div class="place-img">
                                    <div class="slide-images">
                                        <a href="{{url('visa-details')}}">
                                            <img src="{{URL::asset('build/img/visa/visa-07.jpg')}}" class="img-fluid w-100" alt="img">
                                        </a>
                                    </div>
                                    <div class="fav-item">
                                        <button href="#" class="fav-icon p-2 border-0">
                                            <i class="isax isax-heart5"></i>
                                        </button>
                                        <span class="badge bg-white text-dark d-inline-flex align-items-center">Research
                                            Visa</span>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <div class="d-flex flex-wrap align-items-center me-2">
                                            <span class="me-1"><i class="isax isax-clock text-gray-6"></i></span>
                                            <p class="fs-14 text-gray-9">4-6 Weeks</p>
                                        </div>
                                    </div>
                                    <h5 class="mb-2"><a href="{{url('visa-details')}}">Grown up E-visa with Cooling and
                                            Assurance.</a></h5>
                                    <div class="d-flex align-items-center gap-0 mb-3">
                                        <p class="d-flex align-items-center fs-14 mb-0 me-2">Mode : e-Visa</p>
                                        <p class="fs-14 mb-0"><i
                                                class="ti ti-point-filled text-primary me-2"></i>Validity : 1 Year</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <div class="mb-0">
                                            <h6 class="d-flex align-items-center text-gray-6 fs-14 fw-normal">From <span
                                                    class="ms-1 fs-18 fw-semibold text-primary">$900</span><span
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

                        <!-- Tours Grid -->
                        <div class="col-xxl-3 col-xl-4 col-md-6 d-flex">
                            <div class="place-item mb-0 flex-fill">
                                <div class="place-img">
                                    <div class="slide-images">
                                        <a href="{{url('visa-details')}}">
                                            <img src="{{URL::asset('build/img/visa/visa-08.jpg')}}" class="img-fluid w-100" alt="img">
                                        </a>
                                    </div>
                                    <div class="fav-item">
                                        <button href="#" class="fav-icon p-2 border-0">
                                            <i class="isax isax-heart5"></i>
                                        </button>
                                        <span
                                            class="badge bg-white text-dark d-inline-flex align-items-center">Volunteer
                                            Visa</span>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <div class="d-flex flex-wrap align-items-center me-2">
                                            <span class="me-1"><i class="isax isax-clock text-gray-6"></i></span>
                                            <p class="fs-14 text-gray-9">6-8 Working Days</p>
                                        </div>
                                    </div>
                                    <h5 class="mb-2"><a href="{{url('visa-details')}}">Voluntary Work with Medical Coverage
                                            Included</a></h5>
                                    <div class="d-flex align-items-center gap-0 mb-3">
                                        <p class="d-flex align-items-center fs-14 mb-0 me-2">Mode : Sticker Visa</p>
                                        <p class="fs-14 mb-0"><i
                                                class="ti ti-point-filled text-primary me-2"></i>Validity : 6 Months</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <div class="mb-0">
                                            <h6 class="d-flex align-items-center text-gray-6 fs-14 fw-normal">From <span
                                                    class="ms-1 fs-18 fw-semibold text-primary">$350</span><span
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



