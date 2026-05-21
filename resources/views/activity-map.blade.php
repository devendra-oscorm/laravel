<?php $page="activity-map";?>
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
                    <h2 class="breadcrumb-title mb-2">Activity</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{url('index')}}"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item">Activity</li>
                            <li class="breadcrumb-item active" aria-current="page">Activity Lists</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- Page Wrapper -->
    <div class="content pb-0">
        <div class="map-content">
            <!-- Hotel Search -->
            <div class="card">
                <div class="card-body">
                    <div class="banner-form">
                        <form class="d-lg-flex">
                            <div class="d-flex form-info">
                                <div class="form-item dropdown">
                                    <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"
                                        role="menu">
                                        <label class="form-label fs-14 text-default mb-1">Location</label>
                                        <input type="text" class="form-control" value="Dubai">
                                        <p class="fs-12 mb-0">United Arab Emirates</p>
                                    </div>
                                    <div class="dropdown-menu dropdown-md p-0">
                                        <div class="input-search p-3 border-bottom">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search for City">
                                                <span class="input-group-text px-2 border-start-0"><i
                                                        class="isax isax-search-normal"></i></span>
                                            </div>
                                        </div>
                                        <ul>
                                            <li class="border-bottom">
                                                <a class="dropdown-item" href="#">
                                                    <h6 class="fs-16 fw-medium">USA</h6>
                                                    <p>2000 Properties</p>
                                                </a>
                                            </li>
                                            <li class="border-bottom">
                                                <a class="dropdown-item" href="#">
                                                    <h6 class="fs-16 fw-medium">Japan</h6>
                                                    <p>3000 Properties</p>
                                                </a>
                                            </li>
                                            <li class="border-bottom">
                                                <a class="dropdown-item" href="#">
                                                    <h6 class="fs-16 fw-medium">Singapore</h6>
                                                    <p>8000 Properties</p>
                                                </a>
                                            </li>
                                            <li class="border-bottom">
                                                <a class="dropdown-item" href="#">
                                                    <h6 class="fs-16 fw-medium">Russia</h6>
                                                    <p>8000 Properties</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <h6 class="fs-16 fw-medium">Germany</h6>
                                                    <p>2000 Properties</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="form-item dropdown">
                                    <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"
                                        role="menu">
                                        <label class="form-label fs-14 text-default mb-1">Select Activity</label>
                                        <input type="text" class="form-control" value="Ballon Ride">
                                        <p class="fs-12 mb-0">20 Offers Available</p>
                                    </div>
                                    <div class="dropdown-menu dropdown-md p-0">
                                        <ul>
                                            <li class="border-bottom">
                                                <a class="dropdown-item" href="#">
                                                    <h6 class="fs-16 fw-medium">$500 - $2000</h6>
                                                    <p>Upto 65% offers</p>
                                                </a>
                                            </li>
                                            <li class="border-bottom">
                                                <a class="dropdown-item" href="#">
                                                    <h6 class="fs-16 fw-medium">Upto 65% offers</h6>
                                                    <p>Upto 40% offers</p>
                                                </a>
                                            </li>
                                            <li class="border-bottom">
                                                <a class="dropdown-item" href="#">
                                                    <h6 class="fs-16 fw-medium">$5000 - $8000</h6>
                                                    <p>Upto 35% offers</p>
                                                </a>
                                            </li>
                                            <li class="border-bottom">
                                                <a class="dropdown-item" href="#">
                                                    <h6 class="fs-16 fw-medium">$9000 - $11000</h6>
                                                    <p>Upto 20% offers</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <h6 class="fs-16 fw-medium">$11000 - $15000</h6>
                                                    <p>Upto 10% offers</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="form-item">
                                    <label class="form-label fs-14 text-default mb-1">Check In</label>
                                    <input type="text" class="form-control datetimepicker" value="21-10-2025">
                                    <p class="fs-12 mb-0">Monday</p>
                                </div>
                                <div class="form-item">
                                    <label class="form-label fs-14 text-default mb-1">Check Out</label>
                                    <input type="text" class="form-control datetimepicker" value="21-10-2025">
                                    <p class="fs-12 mb-0">Monday</p>
                                </div>
                                <div class="form-item dropdown">
                                    <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"
                                        role="menu">
                                        <label class="form-label fs-14 text-default mb-1">Guests</label>
                                        <h5>4 <span class="fw-normal fs-14">Persons</span></h5>
                                        <p class="fs-12 mb-0">4 Adult, 2 Rooms</p>
                                    </div>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-xl">
                                        <h5 class="mb-3">Select Travelers & Class</h5>
                                        <div class="mb-3 border br-10 info-item pb-1">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3 d-flex align-items-center justify-content-between">
                                                        <label class="form-label text-gray-9 mb-2">Rooms</label>
                                                        <div class="custom-increment">
                                                            <div class="input-group">
                                                                <span class="input-group-btn float-start">
                                                                    <button type="button"
                                                                        class="quantity-left-minus btn btn-light btn-number"
                                                                        data-type="minus" data-field="">
                                                                        <span><i class="isax isax-minus"></i></span>
                                                                    </button>
                                                                </span>
                                                                <input type="text" name="quantity" class=" input-number"
                                                                    value="01">
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
                                                <div class="col-md-12">
                                                    <div class="mb-3 d-flex align-items-center justify-content-between">
                                                        <label class="form-label text-gray-9 mb-2">Adults</label>
                                                        <div class="custom-increment">
                                                            <div class="input-group">
                                                                <span class="input-group-btn float-start">
                                                                    <button type="button"
                                                                        class="quantity-left-minus btn btn-light btn-number"
                                                                        data-type="minus" data-field="">
                                                                        <span><i class="isax isax-minus"></i></span>
                                                                    </button>
                                                                </span>
                                                                <input type="text" name="quantity" class=" input-number"
                                                                    value="01">
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
                                                <div class="col-md-12">
                                                    <div class="mb-3 d-flex align-items-center justify-content-between">
                                                        <label class="form-label text-gray-9 mb-2">Children <span
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
                                                                <input type="text" name="quantity" class=" input-number"
                                                                    value="01">
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
                                                <div class="col-md-12">
                                                    <div class="mb-3 d-flex align-items-center justify-content-between">
                                                        <label class="form-label text-gray-9 mb-2">Infants <span
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
                                                                <input type="text" name="quantity" class=" input-number"
                                                                    value="01">
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
                                        <div class="mb-3 border br-10 info-item pb-1">
                                            <h6 class="fs-16 fw-medium mb-2">Travellers</h6>
                                            <div class="d-flex align-items-center flex-wrap">
                                                <div class="form-check me-3 mb-3">
                                                    <input class="form-check-input" type="radio" name="room" id="room1"
                                                        checked>
                                                    <label class="form-check-label" for="room1">
                                                        Single
                                                    </label>
                                                </div>
                                                <div class="form-check me-3 mb-3">
                                                    <input class="form-check-input" type="radio" name="room" id="room2">
                                                    <label class="form-check-label" for="room2">
                                                        Double
                                                    </label>
                                                </div>
                                                <div class="form-check me-3 mb-3">
                                                    <input class="form-check-input" type="radio" name="room" id="room3">
                                                    <label class="form-check-label" for="room3">
                                                        Delux
                                                    </label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="radio" name="room" id="room4">
                                                    <label class="form-check-label" for="room4">
                                                        Suite
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 border br-10 info-item pb-1">
                                            <h6 class="fs-16 fw-medium mb-2">Property Type</h6>
                                            <div class="d-flex align-items-center flex-wrap">
                                                <div class="form-check me-3 mb-3">
                                                    <input class="form-check-input" type="radio" name="property"
                                                        id="property1" checked>
                                                    <label class="form-check-label" for="property1">
                                                        Villa
                                                    </label>
                                                </div>
                                                <div class="form-check me-3 mb-3">
                                                    <input class="form-check-input" type="radio" name="property"
                                                        id="property2">
                                                    <label class="form-check-label" for="property2">
                                                        Condo
                                                    </label>
                                                </div>
                                                <div class="form-check me-3 mb-3">
                                                    <input class="form-check-input" type="radio" name="property"
                                                        id="property3">
                                                    <label class="form-check-label" for="property3">
                                                        Cabin
                                                    </label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="radio" name="property"
                                                        id="property4">
                                                    <label class="form-check-label" for="property4">
                                                        Apartments
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <a href="#" class="btn btn-light btn-sm me-2">Cancel</a>
                                            <button type="submit" class="btn btn-primary btn-sm">Apply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary search-btn rounded">Search</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /Hotel Search -->
            <!-- Hotel Types -->
            <div class="mb-2">
                <div class="mb-3">
                    <h5 class="mb-2">Choose type of activities you are interested</h5>
                </div>
                <div class="row">
                    <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="d-flex align-items-center hotel-type-item mb-3">
                            <a href="{{url('activity-grid')}}" class="avatar avatar-lg">
                                <img src="{{URL::asset('build/img/activities/activity-model-01.jpg')}}" class="rounded-circle" alt="img">
                            </a>
                            <div class="ms-2">
                                <h6 class="fs-16 fw-medium"><a href="{{url('activity-grid')}}">Adventure</a></h6>
                                <p class="fs-14">216 Activities</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="d-flex align-items-center hotel-type-item mb-3">
                            <a href="{{url('activity-grid')}}" class="avatar avatar-lg">
                                <img src="{{URL::asset('build/img/activities/activity-model-02.jpg')}}" class="rounded-circle" alt="img">
                            </a>
                            <div class="ms-2">
                                <h6 class="fs-16 fw-medium"><a href="{{url('activity-grid')}}">Water Sports</a></h6>
                                <p class="fs-14">569 Activities</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="d-flex align-items-center hotel-type-item mb-3">
                            <a href="{{url('activity-grid')}}" class="avatar avatar-lg">
                                <img src="{{URL::asset('build/img/activities/activity-model-03.jpg')}}" class="rounded-circle" alt="img">
                            </a>
                            <div class="ms-2">
                                <h6 class="fs-16 fw-medium"><a href="{{url('activity-grid')}}">Air Activities</a></h6>
                                <p class="fs-14">129 Activities</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="d-flex align-items-center hotel-type-item mb-3">
                            <a href="{{url('activity-grid')}}" class="avatar avatar-lg">
                                <img src="{{URL::asset('build/img/activities/activity-model-04.jpg')}}" class="rounded-circle" alt="img">
                            </a>
                            <div class="ms-2">
                                <h6 class="fs-16 fw-medium"><a href="{{url('activity-grid')}}">Desert & Safari</a></h6>
                                <p class="fs-14">60 Activities</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="d-flex align-items-center hotel-type-item mb-3">
                            <a href="{{url('activity-grid')}}" class="avatar avatar-lg">
                                <img src="{{URL::asset('build/img/activities/activity-model-05.jpg')}}" class="rounded-circle" alt="img">
                            </a>
                            <div class="ms-2">
                                <h6 class="fs-16 fw-medium"><a href="{{url('activity-grid')}}">Nature & Wildlife</a></h6>
                                <p class="fs-14">200 Activities</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="d-flex align-items-center hotel-type-item mb-3">
                            <a href="{{url('activity-grid')}}" class="avatar avatar-lg">
                                <img src="{{URL::asset('build/img/activities/activity-model-06.jpg')}}" class="rounded-circle" alt="img">
                            </a>
                            <div class="ms-2">
                                <h6 class="fs-16 fw-medium"><a href="{{url('activity-grid')}}">Sightseeing</a></h6>
                                <p class="fs-14">180 Activities</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Hotel Types -->
            <div class="d-flex align-items-center justify-content-between flex-wrap recommend-wrap mb-2">
                <div class="d-flex align-items-center flex-wrap">
                    <div class="dropdown mb-3">
                        <a href="#" class="dropdown-toggle btn btn-white btn-sm border rounded" data-bs-toggle="modal"
                            data-bs-target="#filter_modal">
                            <i class="isax isax-filter-add me-1"></i> Filters
                        </a>
                    </div>
                    <div class="dropdown mb-3">
                        <a href="#" class="dropdown-toggle btn btn-white btn-sm border rounded"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Pricing
                        </a>
                        <div class="dropdown-menu dropdown-sm">
                            <form action="{{url('activity-grid')}}">
                                <h6 class="fw-medium fs-16 mb-3">Pricing</h6>
                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                    <input class="form-check-input ms-0 mt-0" name="pricing1" type="checkbox"
                                        id="pricing1" checked>
                                    <label class="form-check-label ms-2" for="pricing1">
                                        $50 - $100
                                    </label>
                                </div>
                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                    <input class="form-check-input ms-0 mt-0" name="pricing2" type="checkbox"
                                        id="pricing2" checked>
                                    <label class="form-check-label ms-2" for="pricing2">
                                        $100 - $1000
                                    </label>
                                </div>
                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                    <input class="form-check-input ms-0 mt-0" name="pricing3" type="checkbox"
                                        id="pricing3" checked>
                                    <label class="form-check-label ms-2" for="pricing3">
                                        $1000 - $5000
                                    </label>
                                </div>
                                <div class="form-check d-flex align-items-center ps-0 mb-0">
                                    <input class="form-check-input ms-0 mt-0" name="pricing4" type="checkbox"
                                        id="pricing4" checked>
                                    <label class="form-check-label ms-2" for="pricing4">
                                        $10000 - $2000
                                    </label>
                                </div>
                                <div class="d-flex align-items-center justify-content-end border-top pt-3 mt-3">
                                    <a href="#" class="btn btn-light btn-sm me-2">Reset</a>
                                    <button type="submit" class="btn btn-primary btn-sm">Apply</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="dropdown mb-3">
                        <a href="#" class="dropdown-toggle btn btn-white btn-sm border rounded"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            User Ratings
                        </a>
                        <div class="dropdown-menu dropdown-sm">
                            <form action="{{url('hotel-grid')}}">
                                <h6 class="fw-medium fs-16 mb-3">Ratings</h6>
                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                    <input class="form-check-input ms-0 mt-0" name="review01" type="checkbox"
                                        id="review01">
                                    <label class="form-check-label ms-2" for="review01">
                                        <span class="rating d-flex align-items-center">
                                            <i class="fas fa-star filled text-primary me-1"></i>
                                            <i class="fas fa-star filled text-primary me-1"></i>
                                            <i class="fas fa-star filled text-primary me-1"></i>
                                            <i class="fas fa-star filled text-primary me-1"></i>
                                            <i class="fas fa-star filled text-primary"></i>
                                            <span class="ms-2">5 Star</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                    <input class="form-check-input ms-0 mt-0" name="review02" type="checkbox"
                                        id="review02">
                                    <label class="form-check-label ms-2" for="review02">
                                        <span class="rating d-flex align-items-center">
                                            <i class="fas fa-star filled text-primary me-1"></i>
                                            <i class="fas fa-star filled text-primary me-1"></i>
                                            <i class="fas fa-star filled text-primary me-1"></i>
                                            <i class="fas fa-star filled text-primary"></i>
                                            <span class="ms-2">4 Star</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                    <input class="form-check-input ms-0 mt-0" name="review03" type="checkbox"
                                        id="review03">
                                    <label class="form-check-label ms-2" for="review03">
                                        <span class="rating d-flex align-items-center">
                                            <i class="fas fa-star filled text-primary me-1"></i>
                                            <i class="fas fa-star filled text-primary me-1"></i>
                                            <i class="fas fa-star filled text-primary"></i>
                                            <span class="ms-2">3 Star</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                    <input class="form-check-input ms-0 mt-0" name="review04" type="checkbox"
                                        id="review04">
                                    <label class="form-check-label ms-2" for="review04">
                                        <span class="rating d-flex align-items-center">
                                            <i class="fas fa-star filled text-primary me-1"></i>
                                            <i class="fas fa-star filled text-primary"></i>
                                            <span class="ms-2">2 Star</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check d-flex align-items-center ps-0 mb-0">
                                    <input class="form-check-input ms-0 mt-0" name="review05" type="checkbox"
                                        id="review05">
                                    <label class="form-check-label ms-2" for="review05">
                                        <span class="rating d-flex align-items-center">
                                            <i class="fas fa-star filled text-primary"></i>
                                            <span class="ms-2">1 Star</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="d-flex align-items-center justify-content-end border-top pt-3 mt-3">
                                    <a href="#" class="btn btn-light btn-sm me-2">Reset</a>
                                    <button type="submit" class="btn btn-primary btn-sm">Apply</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="dropdown mb-3">
                        <a href="#" class="dropdown-toggle btn btn-white btn-sm border rounded"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Activity Type
                        </a>
                        <div class="dropdown-menu dropdown-sm">
                            <form action="{{url('hotel-grid')}}">
                                <h6 class="fw-medium fs-16 mb-3">Amenities</h6>
                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                    <input class="form-check-input ms-0 mt-0" name="amenities1" type="checkbox"
                                        id="amenities1" checked>
                                    <label class="form-check-label ms-2" for="amenities1">Adventure</label>
                                </div>
                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                    <input class="form-check-input ms-0 mt-0" name="amenities2" type="checkbox"
                                        id="amenities2">
                                    <label class="form-check-label ms-2" for="amenities2">Water Sports</label>
                                </div>
                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                    <input class="form-check-input ms-0 mt-0" name="amenities3" type="checkbox"
                                        id="amenities3">
                                    <label class="form-check-label ms-2" for="amenities3">Nature & Wildlife</label>
                                </div>
                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                    <input class="form-check-input ms-0 mt-0" name="amenities4" type="checkbox"
                                        id="amenities4">
                                    <label class="form-check-label ms-2" for="amenities4">Sightseeing</label>
                                </div>
                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                    <input class="form-check-input ms-0 mt-0" name="amenities5" type="checkbox"
                                        id="amenities5">
                                    <label class="form-check-label ms-2" for="amenities5">Cultural Tours</label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center flex-wrap">
                    <div class="input-icon mb-3 me-3">
                        <span class="input-icon-addon">
                            <i class="isax isax-search-normal"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="Search by Activity Name">
                    </div>
                    <div class="list-item d-flex align-items-center mb-3">
                        <a href="{{url('activity-grid')}}" class="list-icon me-2"><i class="isax isax-grid-1"></i></a>
                        <a href="{{url('activity-list')}}" class="list-icon me-2"><i class="isax isax-firstline"></i></a>
                        <a href="{{url('activity-map')}}" class="list-icon active me-2"><i class="isax isax-map-1"></i></a>
                    </div>
                    <div class="dropdown mb-3">
                        <a href="#" class="dropdown-toggle py-2" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="fw-medium text-gray-9">Sort By : </span>Recommended
                        </a>
                        <div class="dropdown-menu dropdown-sm">
                            <form action="{{url('activity-map')}}">
                                <h6 class="fw-medium fs-16 mb-3">Sort By</h6>
                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                    <input class="form-check-input ms-0 mt-0" name="recommend" type="checkbox"
                                        id="recommend1" checked>
                                    <label class="form-check-label ms-2" for="recommend1">Recommended</label>
                                </div>
                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                    <input class="form-check-input ms-0 mt-0" name="recommend" type="checkbox"
                                        id="recommend2">
                                    <label class="form-check-label ms-2" for="recommend2">Price: low to high</label>
                                </div>
                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                    <input class="form-check-input ms-0 mt-0" name="recommend" type="checkbox"
                                        id="recommend3">
                                    <label class="form-check-label ms-2" for="recommend3">Price: high to low</label>
                                </div>
                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                    <input class="form-check-input ms-0 mt-0" name="recommend" type="checkbox"
                                        id="recommend4">
                                    <label class="form-check-label ms-2" for="recommend4">Newest</label>
                                </div>
                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                    <input class="form-check-input ms-0 mt-0" name="recommend" type="checkbox"
                                        id="recommend5">
                                    <label class="form-check-label ms-2" for="recommend5">Ratings</label>
                                </div>
                                <div class="form-check d-flex align-items-center ps-0 mb-0">
                                    <input class="form-check-input ms-0 mt-0" name="recommend" type="checkbox"
                                        id="recommend6">
                                    <label class="form-check-label ms-2" for="recommend6">Reviews</label>
                                </div>
                                <div class="d-flex align-items-center justify-content-end border-top pt-3 mt-3">
                                    <a href="#" class="btn btn-light btn-sm me-2">Reset</a>
                                    <button type="submit" class="btn btn-primary btn-sm">Apply</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-8">
                <div class="map-lists-widget border-top">
                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                        <h6 class="mb-4">1920 Activities Found on Your Search</h6>
                    </div>
                    <div class="hotel-list">
                        <div class="row justify-content-center">

                            <div class="col-md-12">

                                <!-- Activity List -->
                                <div class="place-item mb-4">
                                    <div class="place-img activity-img">
                                        <a href="{{url('activity-details')}}">
                                            <img src="{{URL::asset('build/img/activities/activity-01.jpg')}}" class="img-fluid"
                                                alt="img">
                                        </a>
                                        <div class="fav-item">
                                            <span class="badge bg-info d-inline-flex align-items-center"><i
                                                    class="isax isax-ranking me-1"></i>Trending</span>
                                            <button class="fav-icon border-0 selected">
                                                <i class="isax isax-heart5"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="place-content pb-1">
                                        <div class="d-flex align-items-center justify-content-between flex-wrap mb-2">
                                            <div>
                                                <h5 class="mb-1 text-truncate"><a
                                                        href="{{url('activity-details')}}">Snorkeling Tour</a></h5>
                                                <p class="d-flex align-items-center mb-2"><i
                                                        class="isax isax-location5 me-1"></i>Phuket, Thailand</p>
                                            </div>
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="d-flex align-items-center text-nowrap">
                                                    <span
                                                        class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">4.9</span>
                                                    <p class="fs-14">(672 Reviews)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="line-ellipsis fs-14">Discover colorful coral reefs and exotic marine
                                            life in crystal-clear waters with a guided snorkeling experience.</p>
                                        <div
                                            class="d-flex align-items-center justify-content-between flex-wrap border-top pt-3">
                                            <p class="d-flex align-items-center mb-3"><i
                                                    class="isax isax-clock4 me-2"></i> 4 Hrs</p>

                                            <div class="d-flex align-items-center mb-2">
                                                <div class="d-flex align-items-center text-nowrap border-end pe-2 me-2">
                                                    <h5
                                                        class="text-primary text-nowrap d-flex align-items-center gap-1">
                                                        <span class="fs-14 fw-normal text-gray-6">Starts From</span>
                                                        $400 <span
                                                            class="text-gray-3 text-decoration-line-through">$480</span>
                                                    </h5>
                                                </div>
                                                <a href="#" class="d-flex align-items-center overflow-hidden">
                                                    <span class="avatar avatar-md flex-shrink-0">
                                                        <img src="{{URL::asset('build/img/users/user-01.jpg')}}" class="rounded-circle"
                                                            alt="img">
                                                    </span>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- /Activity List -->

                                <!-- Activity List -->
                                <div class="place-item mb-4">
                                    <div class="place-img activity-img">
                                        <a href="{{url('activity-details')}}">
                                            <img src="{{URL::asset('build/img/activities/activity-02.jpg')}}" class="img-fluid"
                                                alt="img">
                                        </a>
                                        <div class="fav-item">
                                            <span class="badge bg-info d-inline-flex align-items-center"><i
                                                    class="isax isax-ranking me-1"></i>Trending</span>
                                            <button class="fav-icon border-0 selected">
                                                <i class="isax isax-heart5"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="place-content pb-1">
                                        <div class="d-flex align-items-center justify-content-between flex-wrap mb-2">
                                            <div>
                                                <h5 class="mb-1 text-truncate"><a href="{{url('activity-details')}}">Alpine
                                                        Snowboarding</a></h5>
                                                <p class="d-flex align-items-center mb-2"><i
                                                        class="isax isax-location5 me-1"></i>Zermatt, Switzerland</p>
                                            </div>
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="d-flex align-items-center text-nowrap">
                                                    <span
                                                        class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">4.6</span>
                                                    <p class="fs-14">(450 Reviews)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="line-ellipsis fs-14">Ride through breathtaking alpine slopes and enjoy
                                            an adrenaline-filled snowboarding experience in pristine mountain terrain.
                                        </p>
                                        <div
                                            class="d-flex align-items-center justify-content-between flex-wrap border-top pt-3">
                                            <p class="d-flex align-items-center mb-3"><i
                                                    class="isax isax-clock4 me-2"></i> 4 Hrs</p>

                                            <div class="d-flex align-items-center mb-2">
                                                <div class="d-flex align-items-center text-nowrap border-end pe-2 me-2">
                                                    <h5
                                                        class="text-primary text-nowrap d-flex align-items-center gap-1">
                                                        <span class="fs-14 fw-normal text-gray-6">Starts From</span>
                                                        $150 <span
                                                            class="text-gray-3 text-decoration-line-through">$200</span>
                                                    </h5>
                                                </div>
                                                <a href="#" class="d-flex align-items-center overflow-hidden">
                                                    <span class="avatar avatar-md flex-shrink-0">
                                                        <img src="{{URL::asset('build/img/users/user-02.jpg')}}" class="rounded-circle"
                                                            alt="img">
                                                    </span>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- /Activity List -->

                                <!-- Activity List -->
                                <div class="place-item mb-4">
                                    <div class="place-img activity-img">
                                        <a href="{{url('activity-details')}}">
                                            <img src="{{URL::asset('build/img/activities/activity-03.jpg')}}" class="img-fluid"
                                                alt="img">
                                        </a>
                                        <div class="fav-item">
                                            <span class="badge bg-info d-inline-flex align-items-center"><i
                                                    class="isax isax-ranking me-1"></i>Trending</span>
                                            <button class="fav-icon border-0">
                                                <i class="isax isax-heart5"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="place-content pb-1">
                                        <div class="d-flex align-items-center justify-content-between flex-wrap mb-2">
                                            <div>
                                                <h5 class="mb-1 text-truncate"><a href="{{url('activity-details')}}">White
                                                        Water Rafting</a></h5>
                                                <p class="d-flex align-items-center mb-2"><i
                                                        class="isax isax-location5 me-1"></i>Rotorua, New Zealand</p>
                                            </div>
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="d-flex align-items-center text-nowrap">
                                                    <span
                                                        class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">4.6</span>
                                                    <p class="fs-14">(320 Reviews)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="line-ellipsis fs-14">Conquer exciting rapids and explore stunning
                                            natural surroundings during a safe and guided rafting experience.</p>
                                        <div
                                            class="d-flex align-items-center justify-content-between flex-wrap border-top pt-3">
                                            <p class="d-flex align-items-center mb-3"><i
                                                    class="isax isax-clock4 me-2"></i> 5 Hrs</p>

                                            <div class="d-flex align-items-center mb-2">
                                                <div class="d-flex align-items-center text-nowrap border-end pe-2 me-2">
                                                    <h5
                                                        class="text-primary text-nowrap d-flex align-items-center gap-1">
                                                        <span class="fs-14 fw-normal text-gray-6">Starts From</span>
                                                        $650 <span
                                                            class="text-gray-3 text-decoration-line-through">$700</span>
                                                    </h5>
                                                </div>
                                                <a href="#" class="d-flex align-items-center overflow-hidden">
                                                    <span class="avatar avatar-md flex-shrink-0">
                                                        <img src="{{URL::asset('build/img/users/user-03.jpg')}}" class="rounded-circle"
                                                            alt="img">
                                                    </span>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- /Activity List -->

                                <!-- Activity List -->
                                <div class="place-item mb-4">
                                    <div class="place-img activity-img">
                                        <a href="{{url('activity-details')}}">
                                            <img src="{{URL::asset('build/img/activities/activity-04.jpg')}}" class="img-fluid"
                                                alt="img">
                                        </a>
                                        <div class="fav-item">
                                            <span class="badge bg-info d-inline-flex align-items-center"><i
                                                    class="isax isax-ranking me-1"></i>Trending</span>
                                            <button class="fav-icon border-0">
                                                <i class="isax isax-heart5"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="place-content pb-1">
                                        <div class="d-flex align-items-center justify-content-between flex-wrap mb-2">
                                            <div>
                                                <h5 class="mb-1 text-truncate"><a href="{{url('activity-details')}}">Cliffside
                                                        Paragliding</a></h5>
                                                <p class="d-flex align-items-center mb-2"><i
                                                        class="isax isax-location5 me-1"></i>Dubai, UAE</p>
                                            </div>
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="d-flex align-items-center text-nowrap">
                                                    <span
                                                        class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">4.7</span>
                                                    <p class="fs-14">(730 Reviews)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="line-ellipsis fs-14">Discover colorful coral reefs and exotic marine
                                            life in crystal-clear waters with a guided snorkeling experience.</p>
                                        <div
                                            class="d-flex align-items-center justify-content-between flex-wrap border-top pt-3">
                                            <p class="d-flex align-items-center mb-3"><i
                                                    class="isax isax-clock4 me-2"></i> 3 Hrs</p>

                                            <div class="d-flex align-items-center mb-2">
                                                <div class="d-flex align-items-center text-nowrap border-end pe-2 me-2">
                                                    <h5
                                                        class="text-primary text-nowrap d-flex align-items-center gap-1">
                                                        <span class="fs-14 fw-normal text-gray-6">Starts From</span>
                                                        $650 <span
                                                            class="text-gray-3 text-decoration-line-through">$750</span>
                                                    </h5>
                                                </div>
                                                <a href="#" class="d-flex align-items-center overflow-hidden">
                                                    <span class="avatar avatar-md flex-shrink-0">
                                                        <img src="{{URL::asset('build/img/users/user-05.jpg')}}" class="rounded-circle"
                                                            alt="img">
                                                    </span>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- /Activity List -->

                                <!-- Activity List -->
                                <div class="place-item mb-4">
                                    <div class="place-img activity-img">
                                        <a href="{{url('activity-details')}}">
                                            <img src="{{URL::asset('build/img/activities/activity-05.jpg')}}" class="img-fluid"
                                                alt="img">
                                        </a>
                                        <div class="fav-item">
                                            <span class="badge bg-info d-inline-flex align-items-center"><i
                                                    class="isax isax-ranking me-1"></i>Trending</span>
                                            <button class="fav-icon border-0">
                                                <i class="isax isax-heart5"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="place-content pb-1">
                                        <div class="d-flex align-items-center justify-content-between flex-wrap mb-2">
                                            <div>
                                                <h5 class="mb-1 text-truncate"><a href="{{url('activity-details')}}">Dessert
                                                        Adventure</a></h5>
                                                <p class="d-flex align-items-center mb-2"><i
                                                        class="isax isax-location5 me-1"></i>Annecy, France</p>
                                            </div>
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="d-flex align-items-center text-nowrap">
                                                    <span
                                                        class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">4.2</span>
                                                    <p class="fs-14">(280 Reviews)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="line-ellipsis fs-14">Glide smoothly along stunning cliff edges and
                                            enjoy panoramic ocean and mountain views from above.</p>
                                        <div
                                            class="d-flex align-items-center justify-content-between flex-wrap border-top pt-3">
                                            <p class="d-flex align-items-center mb-3"><i
                                                    class="isax isax-clock4 me-2"></i> 3 Hrs</p>

                                            <div class="d-flex align-items-center mb-2">
                                                <div class="d-flex align-items-center text-nowrap border-end pe-2 me-2">
                                                    <h5
                                                        class="text-primary text-nowrap d-flex align-items-center gap-1">
                                                        <span class="fs-14 fw-normal text-gray-6">Starts From</span>
                                                        $370 <span
                                                            class="text-gray-3 text-decoration-line-through">$400</span>
                                                    </h5>
                                                </div>
                                                <a href="#" class="d-flex align-items-center overflow-hidden">
                                                    <span class="avatar avatar-md flex-shrink-0">
                                                        <img src="{{URL::asset('build/img/users/user-04.jpg')}}" class="rounded-circle"
                                                            alt="img">
                                                    </span>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- /Activity List -->
                            </div>

                        </div>

                    </div>
                    <div class="text-center">
                        <a href="#" class="btn btn-primary">Load More</a>
                    </div>
                </div>
            </div>
            <!-- Map -->
            <div class="col-xl-4 map-right grid-map">
                <div id="map" class="map-listing"></div>
            </div>
            <!-- /Map -->
        </div>
    </div>
    <!-- /Page Wrapper -->

    <!-- ========================
        End Page Content
    ========================= -->

@endsection



