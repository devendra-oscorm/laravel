<?php $page="bus-list";?>
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
                    <h2 class="breadcrumb-title mb-2">Bus</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{url('index')}}"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item">Bus</li>
                            <li class="breadcrumb-item active" aria-current="page">Bus Lists</li>
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

            <!-- Bus Search -->
            <div class="card">
                <div class="card-body">
                    <div class="banner-form">
                        <form action="#">
                            <div class="d-flex align-items-center justify-content-between flex-wrap mb-2">
                                <div class="d-flex align-items-center">
                                    <div class="form-check d-flex align-items-center me-3 mb-2">
                                        <input class="form-check-input mt-0" type="radio" name="Radio" id="oneway"
                                            value="oneway" checked>
                                        <label class="form-check-label fs-14 ms-2" for="oneway">
                                            Oneway
                                        </label>
                                    </div>
                                    <div class="form-check d-flex align-items-center me-3 mb-2">
                                        <input class="form-check-input mt-0" type="radio" name="Radio" id="roundtrip"
                                            value="roundtrip">
                                        <label class="form-check-label fs-14 ms-2" for="roundtrip">
                                            Round Trip
                                        </label>
                                    </div>
                                </div>
                                <h6 class="fw-medium fs-16 mb-2">Low cost Buses in One simple search</h6>
                            </div>
                            <div class="normal-trip">
                                <div class="d-lg-flex">
                                    <div class="d-flex  form-info">
                                        <div class="form-item dropdown">
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
                                        <div class="form-item dropdown ps-2 ps-sm-3">
                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                aria-expanded="false" role="menu">
                                                <label class="form-label fs-14 text-default mb-1">To</label>
                                                <h5>Las Vegas</h5>
                                                <p class="fs-12 mb-0">USA</p>
                                                <span
                                                    class="way-icon badge badge-primary rounded-pill translate-middle">
                                                    <i class="fa-solid fa-arrow-right-arrow-left"></i>
                                                </span>
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
                                        <div class="form-item">
                                            <label class="form-label fs-14 text-default mb-1">Departure</label>
                                            <input type="text" class="form-control datetimepicker" value="21-10-2024">
                                            <p class="fs-12 mb-0">Monday</p>
                                        </div>
                                        <div class="form-item round-drip">
                                            <label class="form-label fs-14 text-default mb-1">Return</label>
                                            <input type="text" class="form-control datetimepicker" value="23-10-2024">
                                            <p class="fs-12 mb-0">Wednesday</p>
                                        </div>
                                        <div class="form-item dropdown">
                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                aria-expanded="false" role="menu">
                                                <label class="form-label fs-14 text-default mb-1">Travellers</label>
                                                <h5>4 <span class="fw-normal fs-14">Persons</span></h5>
                                                <p class="fs-12 mb-0">2 Adult, 2 children</p>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-xl">
                                                <h5 class="mb-3">Select Travelers & Class</h5>
                                                <div class="mb-3 border br-10 info-item pb-1">
                                                    <h6 class="fs-16 fw-medium mb-2">Travellers</h6>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label class="form-label text-gray-9 mb-2">Adults <span
                                                                        class="text-default fw-normal">( 12+ Yrs
                                                                        )</span></label>
                                                                <div class="custom-increment">
                                                                    <div class="input-group">
                                                                        <span class="input-group-btn float-start">
                                                                            <button type="button"
                                                                                class="quantity-left-minus btn btn-light btn-number"
                                                                                data-type="minus" data-field="">
                                                                                <span><i
                                                                                        class="isax isax-minus"></i></span>
                                                                            </button>
                                                                        </span>
                                                                        <input type="text" name="quantity"
                                                                            class=" input-number" value="01">
                                                                        <span class="input-group-btn float-end">
                                                                            <button type="button"
                                                                                class="quantity-right-plus btn btn-light btn-number"
                                                                                data-type="plus" data-field="">
                                                                                <span><i
                                                                                        class="isax isax-add"></i></span>
                                                                            </button>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label class="form-label text-gray-9 mb-2">Childrens
                                                                    <span class="text-default fw-normal">( 2-12 Yrs
                                                                        )</span></label>
                                                                <div class="custom-increment">
                                                                    <div class="input-group">
                                                                        <span class="input-group-btn float-start">
                                                                            <button type="button"
                                                                                class="quantity-left-minus btn btn-light btn-number"
                                                                                data-type="minus" data-field="">
                                                                                <span><i
                                                                                        class="isax isax-minus"></i></span>
                                                                            </button>
                                                                        </span>
                                                                        <input type="text" name="quantity"
                                                                            class=" input-number" value="01">
                                                                        <span class="input-group-btn float-end">
                                                                            <button type="button"
                                                                                class="quantity-right-plus btn btn-light btn-number"
                                                                                data-type="plus" data-field="">
                                                                                <span><i
                                                                                        class="isax isax-add"></i></span>
                                                                            </button>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label class="form-label text-gray-9 mb-2">Infants<span
                                                                        class="text-default fw-normal">( 0-12 Yrs
                                                                        )</span></label>
                                                                <div class="custom-increment">
                                                                    <div class="input-group">
                                                                        <span class="input-group-btn float-start">
                                                                            <button type="button"
                                                                                class="quantity-left-minus btn btn-light btn-number"
                                                                                data-type="minus" data-field="">
                                                                                <span><i
                                                                                        class="isax isax-minus"></i></span>
                                                                            </button>
                                                                        </span>
                                                                        <input type="text" name="quantity"
                                                                            class=" input-number" value="01">
                                                                        <span class="input-group-btn float-end">
                                                                            <button type="button"
                                                                                class="quantity-right-plus btn btn-light btn-number"
                                                                                data-type="plus" data-field="">
                                                                                <span><i
                                                                                        class="isax isax-add"></i></span>
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
                                                            <input class="form-check-input" type="radio" value="Economy"
                                                                name="cabin-class" id="economy" checked>
                                                            <label class="form-check-label" for="economy">
                                                                Seater
                                                            </label>
                                                        </div>
                                                        <div class="form-check me-3 mb-3">
                                                            <input class="form-check-input" type="radio" value="Economy"
                                                                name="cabin-class" id="premium-economy">
                                                            <label class="form-check-label" for="premium-economy">
                                                                Sleeper
                                                            </label>
                                                        </div>
                                                        <div class="form-check me-3 mb-3">
                                                            <input class="form-check-input" type="radio"
                                                                value="Business" name="cabin-class" id="business">
                                                            <label class="form-check-label" for="business">
                                                                AC Sleeper
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
                                </div>
                            </div>
                            <div class="multi-trip">
                                <div class="d-lg-flex">
                                    <div class="d-flex  form-info">
                                        <div class="form-item dropdown">
                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                aria-expanded="false" role="menu">
                                                <label class="form-label fs-14 text-default mb-1">From</label>
                                                <input type="text" class="form-control" value="Newyork">
                                                <p class="fs-12 mb-0">Ken International Airport</p>
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
                                                            <p>Ken International Airport</p>
                                                        </a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="#">
                                                            <h6 class="fs-16 fw-medium">Boston</h6>
                                                            <p>Boston Logan International Airport</p>
                                                        </a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="#">
                                                            <h6 class="fs-16 fw-medium">Northern Virginia</h6>
                                                            <p>Dulles International Airport</p>
                                                        </a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="#">
                                                            <h6 class="fs-16 fw-medium">Los Angeles</h6>
                                                            <p>Los Angeles International Airport</p>
                                                        </a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="#">
                                                            <h6 class="fs-16 fw-medium">Orlando</h6>
                                                            <p>Orlando International Airport</p>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="form-item dropdown ps-2 ps-sm-3">
                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                aria-expanded="false" role="menu">
                                                <label class="form-label fs-14 text-default mb-1">To</label>
                                                <h5>Las Vegas</h5>
                                                <p class="fs-12 mb-0">Martini International Airport</p>
                                                <span
                                                    class="way-icon badge badge-primary rounded-pill translate-middle">
                                                    <i class="fa-solid fa-arrow-right-arrow-left"></i>
                                                </span>
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
                                                            <p>Ken International Airport</p>
                                                        </a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="#">
                                                            <h6 class="fs-16 fw-medium">Boston</h6>
                                                            <p>Boston Logan International Airport</p>
                                                        </a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="#">
                                                            <h6 class="fs-16 fw-medium">Northern Virginia</h6>
                                                            <p>Dulles International Airport</p>
                                                        </a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="#">
                                                            <h6 class="fs-16 fw-medium">Los Angeles</h6>
                                                            <p>Los Angeles International Airport</p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">
                                                            <h6 class="fs-16 fw-medium">Orlando</h6>
                                                            <p>Orlando International Airport</p>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="form-item">
                                            <label class="form-label fs-14 text-default mb-1">Departure</label>
                                            <input type="text" class="form-control datetimepicker" value="21-10-2024">
                                            <p class="fs-12 mb-0">Monday</p>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary search-btn rounded">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /Bus Search -->

            <div class="row">

                <div class="col-xl-12 col-lg-12">
                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                        <h6 class="mb-3">1920 Buses Found on Your Search</h6>
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="dropdown mb-3">
                                <a href="#" class="dropdown-toggle py-2" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <span class="fw-medium text-gray-9">Sort By : </span>Recommended
                                </a>
                                <div class="dropdown-menu dropdown-sm">
                                    <form action="{{url('bus-list')}}">
                                        <h6 class="fw-medium fs-16 mb-3">Sort By</h6>
                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                            <input class="form-check-input ms-0 mt-0" name="recommend" type="checkbox"
                                                id="recommend1" checked>
                                            <label class="form-check-label ms-2" for="recommend1">Recommended</label>
                                        </div>
                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                            <input class="form-check-input ms-0 mt-0" name="recommend" type="checkbox"
                                                id="recommend2">
                                            <label class="form-check-label ms-2" for="recommend2">Price: low to
                                                high</label>
                                        </div>
                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                            <input class="form-check-input ms-0 mt-0" name="recommend" type="checkbox"
                                                id="recommend3">
                                            <label class="form-check-label ms-2" for="recommend3">Price: high to
                                                low</label>
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
                    <div class="bg-info br-10 p-3 pb-2 mb-4">
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <p class="fs-14 fw-medium mb-2 d-inline-flex align-items-center"><i
                                    class="isax isax-info-circle me-2"></i>Save an average of 15% on thousands of Buses
                                when you're signed in</p>
                            <a href="{{url('login')}}" class="btn btn-white btn-sm mb-2">Sign In</a>
                        </div>
                    </div>
                    <div class="bus-list">
                        <div class="row justify-content-center">
                            <div class="col-md-12">

                                <!-- Bus List -->
                                <div class="place-item p-4 mb-4">
                                    <div class="place-img">
                                        <a href="{{url('bus-details')}}">
                                            <img src="{{URL::asset('build/img/bus/bus-img-01.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="fav-item">
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="fav-icon me-2 selected">
                                                    <i class="isax isax-heart5"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <div class="bus-content">
                                            <div class="bus-title-item">
                                                <h5 class="text-truncate mb-1"><a href="{{url('bus-details')}}">Red Bird
                                                        Luxury</a></h5>
                                                <div class="d-flex">
                                                    <span class="avatar avatar-sm me-2">
                                                        <img src="{{URL::asset('build/img/bus/bus-logo-01.svg')}}" class="rounded-circle"
                                                            alt="icon">
                                                    </span>
                                                    <p class="fs-14 mb-0 me-2"> Tata</p>
                                                </div>
                                            </div>
                                            <div class="bus-title">
                                                <div class="bus-title-item">
                                                    <h5 class="text-truncate mb-1">
                                                        <a href="#">Chicago</a>
                                                    </h5>
                                                    <p>09:30 AM</p>
                                                </div>
                                                <div class="dot-line">
                                                    <span>
                                                        <small class="text-muted">13h 10m</small>
                                                    </span>
                                                </div>
                                                <div class="bus-title-item">
                                                    <h5 class="text-truncate mb-1">
                                                        <a href="#">Miami</a>
                                                    </h5>
                                                    <p>10:40 PM</p>
                                                </div>
                                            </div>
                                            <div class="bus-title-item">
                                                <h6 class="d-flex align-items-center text-gray-6 fs-14 fw-normal">
                                                    From
                                                    <span class="ms-1 fs-18 fw-semibold text-primary">$280</span>
                                            </div>
                                        </div>
                                        <div class="bus-footer">
                                            <div class="d-flex align-items-center justify-content-between me-2">
                                                <div class="me-2">
                                                    <span class="badge bg-light rounded-pill">Seater</span>
                                                </div>
                                                <div class="bus-footer-dot">
                                                    <span></span>
                                                </div>
                                                <div>
                                                    <span><i class="isax isax-home-wifi text-gray-6 me-1"></i></span>
                                                    <span><i
                                                            class="isax isax-location-tick text-gray-6 me-1"></i></span>
                                                    <span><i class="isax isax-hierarchy text-gray-6"></i></span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <button class="btn btn-primary btn-md search-btn me-1" type="button"
                                                    data-bs-toggle="offcanvas" data-bs-target="#routes_details"
                                                    aria-controls="routes_details">
                                                    Routes
                                                </button>
                                                <button class="btn btn-dark btn-md search-btn" type="button"
                                                    data-bs-toggle="offcanvas" data-bs-target="#bus_details"
                                                    aria-controls="bus_details">
                                                    Book Now
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Bus List -->

                                <!-- Bus List -->
                                <div class="place-item p-4 mb-4">
                                    <div class="place-img">
                                        <a href="{{url('bus-details')}}">
                                            <img src="{{URL::asset('build/img/bus/bus-img-02.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="fav-item">
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="fav-icon me-2">
                                                    <i class="isax isax-heart5"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <div class="bus-content">
                                            <div class="bus-title-item">
                                                <h5 class="text-truncate mb-1"><a href="{{url('bus-details')}}">Elite Ride</a>
                                                </h5>
                                                <div class="d-flex">
                                                    <span class="avatar avatar-sm me-2">
                                                        <img src="{{URL::asset('build/img/bus/bus-logo-02.svg')}}" class="rounded-circle"
                                                            alt="icon">
                                                    </span>
                                                    <p class="fs-14 mb-0 me-2">Ashok Leyland</p>
                                                </div>
                                            </div>
                                            <div class="bus-title">
                                                <div class="bus-title-item">
                                                    <h5 class="text-truncate mb-1">
                                                        <a href="{{url('bus-details')}}">Toronto</a>
                                                    </h5>
                                                    <p>08:25 PM</p>
                                                </div>
                                                <div class="dot-line">
                                                    <span>
                                                        <small class="text-muted">16h 25m</small>
                                                    </span>
                                                </div>
                                                <div class="bus-title-item">
                                                    <h5 class="text-truncate mb-1">
                                                        <a href="{{url('bus-details')}}">Bangkok</a>
                                                    </h5>
                                                    <p>04:45 AM</p>
                                                </div>
                                            </div>
                                            <div class="">
                                                <h6 class="d-flex align-items-center text-gray-6 fs-14 fw-normal">
                                                    From
                                                    <span class="ms-1 fs-18 fw-semibold text-primary">$300</span>
                                            </div>
                                        </div>
                                        <div class="bus-footer">
                                            <div class="d-flex align-items-center justify-content-between me-2">
                                                <div class="me-2">
                                                    <span class="badge bg-light rounded-pill">Semi Sleeper</span>
                                                </div>
                                                <div class="bus-footer-dot">
                                                    <span></span>
                                                </div>
                                                <div>
                                                    <span><i class="isax isax-home-wifi text-gray-6 me-1"></i></span>
                                                    <span><i
                                                            class="isax isax-location-tick text-gray-6 me-1"></i></span>
                                                    <span><i class="isax isax-hierarchy text-gray-6"></i></span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <button class="btn btn-primary btn-md search-btn me-1" type="button"
                                                    data-bs-toggle="offcanvas" data-bs-target="#routes_details"
                                                    aria-controls="routes_details">
                                                    Routes
                                                </button>
                                                <button class="btn btn-dark btn-md search-btn" type="button"
                                                    data-bs-toggle="offcanvas" data-bs-target="#bus_details"
                                                    aria-controls="bus_details">
                                                    Book Now
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Bus List -->

                                <!-- Bus List -->
                                <div class="place-item p-4 mb-4">
                                    <div class="place-img">
                                        <a href="{{url('bus-details')}}">
                                            <img src="{{URL::asset('build/img/bus/bus-img-03.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="fav-item">
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="fav-icon me-2 selected">
                                                    <i class="isax isax-heart5"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <div class="bus-content">
                                            <div class="bus-title-item">
                                                <h5 class="text-truncate mb-1"><a href="{{url('bus-details')}}">Urban
                                                        Glide</a></h5>
                                                <div class="d-flex">
                                                    <span class="avatar avatar-sm me-2">
                                                        <img src="{{URL::asset('build/img/bus/bus-logo-03.svg')}}" class="rounded-circle"
                                                            alt="icon">
                                                    </span>
                                                    <p class="fs-14 mb-0 me-2">Volvo</p>
                                                </div>
                                            </div>
                                            <div class="bus-title">
                                                <div class="bus-title-item">
                                                    <h5 class="text-truncate mb-1">
                                                        <a href="{{url('bus-details')}}">Dallas</a>
                                                    </h5>
                                                    <p>06:45 AM</p>
                                                </div>
                                                <div class="dot-line">
                                                    <span>
                                                        <small class="text-muted">11h 40m</small>
                                                    </span>
                                                </div>
                                                <div class="bus-title-item">
                                                    <h5 class="text-truncate mb-1">
                                                        <a href="{{url('bus-details')}}">Atlanta</a>
                                                    </h5>
                                                    <p>06:25 PM</p>
                                                </div>
                                            </div>
                                            <div class="">
                                                <h6 class="d-flex align-items-center text-gray-6 fs-14 fw-normal">
                                                    From
                                                    <span class="ms-1 fs-18 fw-semibold text-primary">$220</span>
                                            </div>
                                        </div>
                                        <div class="bus-footer">
                                            <div class="d-flex align-items-center justify-content-between me-2">
                                                <div class="me-2">
                                                    <span class="badge bg-light rounded-pill">Sleeper</span>
                                                </div>
                                                <div class="bus-footer-dot">
                                                    <span></span>
                                                </div>
                                                <div>
                                                    <span><i class="isax isax-home-wifi text-gray-6 me-1"></i></span>
                                                    <span><i
                                                            class="isax isax-location-tick text-gray-6 me-1"></i></span>
                                                    <span><i class="isax isax-hierarchy text-gray-6"></i></span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <button class="btn btn-primary btn-md search-btn me-1" type="button"
                                                    data-bs-toggle="offcanvas" data-bs-target="#routes_details"
                                                    aria-controls="routes_details">
                                                    Routes
                                                </button>
                                                <button class="btn btn-dark btn-md search-btn" type="button"
                                                    data-bs-toggle="offcanvas" data-bs-target="#bus_details"
                                                    aria-controls="bus_details">
                                                    Book Now
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Bus List -->

                                <!-- Bus List -->
                                <div class="place-item p-4 mb-4">
                                    <div class="place-img">
                                        <a href="{{url('bus-details')}}">
                                            <img src="{{URL::asset('build/img/bus/bus-img-04.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="fav-item">
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="fav-icon me-2 selected">
                                                    <i class="isax isax-heart5"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <div class="bus-content">
                                            <div class="bus-title-item">
                                                <h5 class="text-truncate mb-1"><a href="{{url('bus-details')}}">Route Max</a>
                                                </h5>
                                                <div class="d-flex">
                                                    <span class="avatar avatar-sm me-2">
                                                        <img src="{{URL::asset('build/img/bus/bus-logo-01.svg')}}" class="rounded-circle"
                                                            alt="icon">
                                                    </span>
                                                    <p class="fs-14 mb-0 me-2">Tata</p>
                                                </div>
                                            </div>
                                            <div class="bus-title">
                                                <div class="bus-title-item">
                                                    <h5 class="text-truncate mb-1">
                                                        <a href="{{url('bus-details')}}">New York</a>
                                                    </h5>
                                                    <p>07:00 AM</p>
                                                </div>
                                                <div class="dot-line">
                                                    <span>
                                                        <small class="text-muted">10h 25m</small>
                                                    </span>
                                                </div>
                                                <div class="bus-title-item">
                                                    <h5 class="text-truncate mb-1">
                                                        <a href="{{url('bus-details')}}">Boston</a>
                                                    </h5>
                                                    <p>05:25 PM</p>
                                                </div>
                                            </div>
                                            <div class="bus-title-item">
                                                <h6 class="d-flex align-items-center text-gray-6 fs-14 fw-normal">
                                                    From
                                                    <span class="ms-1 fs-18 fw-semibold text-primary">$180</span>
                                            </div>
                                        </div>
                                        <div class="bus-footer">
                                            <div class="d-flex align-items-center justify-content-between me-2">
                                                <div class="me-2">
                                                    <span class="badge bg-light rounded-pill">Seater</span>
                                                </div>
                                                <div class="bus-footer-dot">
                                                    <span></span>
                                                </div>
                                                <div>
                                                    <span><i class="isax isax-home-wifi text-gray-6 me-1"></i></span>
                                                    <span><i
                                                            class="isax isax-location-tick text-gray-6 me-1"></i></span>
                                                    <span><i class="isax isax-hierarchy text-gray-6"></i></span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <button class="btn btn-primary btn-md search-btn me-1" type="button"
                                                    data-bs-toggle="offcanvas" data-bs-target="#routes_details"
                                                    aria-controls="routes_details">
                                                    Routes
                                                </button>
                                                <button class="btn btn-dark btn-md search-btn" type="button"
                                                    data-bs-toggle="offcanvas" data-bs-target="#bus_details"
                                                    aria-controls="bus_details">
                                                    Book Now
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Bus List -->

                                <!-- Bus List -->
                                <div class="place-item p-4 mb-4">
                                    <div class="place-img">
                                        <a href="{{url('bus-details')}}">
                                            <img src="{{URL::asset('build/img/bus/bus-img-05.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="fav-item">
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="fav-icon me-2">
                                                    <i class="isax isax-heart5"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <div class="bus-content">
                                            <div class="bus-title-item">
                                                <h5 class="text-truncate mb-1"><a href="{{url('bus-details')}}">Trail Star</a>
                                                </h5>
                                                <div class="d-flex">
                                                    <span class="avatar avatar-sm me-2">
                                                        <img src="{{URL::asset('build/img/bus/bus-logo-03.svg')}}" class="rounded-circle"
                                                            alt="icon">
                                                    </span>
                                                    <p class="fs-14 mb-0 me-2">Volvo</p>
                                                </div>
                                            </div>
                                            <div class="bus-title">
                                                <div class="bus-title-item">
                                                    <h5 class="text-truncate mb-1">
                                                        <a href="{{url('bus-details')}}">Seattle</a>
                                                    </h5>
                                                    <p>06:10 PM</p>
                                                </div>
                                                <div class="dot-line">
                                                    <span>
                                                        <small class="text-muted">15h 30m</small>
                                                    </span>
                                                </div>
                                                <div class="bus-title-item">
                                                    <h5 class="text-truncate mb-1">
                                                        <a href="{{url('bus-details')}}">Denver</a>
                                                    </h5>
                                                    <p>09:40 AM</p>
                                                </div>
                                            </div>
                                            <div class="bus-title-item">
                                                <h6 class="d-flex align-items-center text-gray-6 fs-14 fw-normal">
                                                    From
                                                    <span class="ms-1 fs-18 fw-semibold text-primary">$310</span>
                                            </div>
                                        </div>
                                        <div class="bus-footer">
                                            <div class="d-flex align-items-center justify-content-between me-2">
                                                <div class="me-2">
                                                    <span class="badge bg-light rounded-pill">Seater</span>
                                                </div>
                                                <div class="bus-footer-dot">
                                                    <span></span>
                                                </div>
                                                <div>
                                                    <span><i class="isax isax-home-wifi text-gray-6 me-1"></i></span>
                                                    <span><i
                                                            class="isax isax-location-tick text-gray-6 me-1"></i></span>
                                                    <span><i class="isax isax-hierarchy text-gray-6"></i></span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <button class="btn btn-primary btn-md search-btn me-1" type="button"
                                                    data-bs-toggle="offcanvas" data-bs-target="#routes_details"
                                                    aria-controls="routes_details">
                                                    Routes
                                                </button>
                                                <button class="btn btn-dark btn-md search-btn" type="button"
                                                    data-bs-toggle="offcanvas" data-bs-target="#bus_details"
                                                    aria-controls="bus_details">
                                                    Book Now
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Bus List -->

                                <!-- Bus List -->
                                <div class="place-item p-4 mb-4">
                                    <div class="place-img">
                                        <a href="{{url('bus-details')}}">
                                            <img src="{{URL::asset('build/img/bus/bus-img-06.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="fav-item">
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="fav-icon me-2">
                                                    <i class="isax isax-heart5"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <div class="bus-content">
                                            <div class="bus-title-item">
                                                <h5 class="text-truncate mb-1"><a href="{{url('bus-details')}}">Enviro Bus</a>
                                                </h5>
                                                <div class="d-flex">
                                                    <span class="avatar avatar-sm me-2">
                                                        <img src="{{URL::asset('build/img/bus/bus-logo-02.svg')}}" class="rounded-circle"
                                                            alt="icon">
                                                    </span>
                                                    <p class="fs-14 mb-0 me-2">Ashok Leyland</p>
                                                </div>
                                            </div>
                                            <div class="bus-title">
                                                <div class="bus-title-item">
                                                    <h5 class="text-truncate mb-1">
                                                        <a href="{{url('bus-details')}}">Portland</a>
                                                    </h5>
                                                    <p>06:20 AM</p>
                                                </div>
                                                <div class="dot-line">
                                                    <span>
                                                        <small class="text-muted">12h 45m</small>
                                                    </span>
                                                </div>
                                                <div class="bus-title-item">
                                                    <h5 class="text-truncate mb-1">
                                                        <a href="{{url('bus-details')}}">Salt Lake City</a>
                                                    </h5>
                                                    <p>07:05 PM</p>
                                                </div>
                                            </div>
                                            <div class="bus-title-item">
                                                <h6 class="d-flex align-items-center text-gray-6 fs-14 fw-normal">
                                                    From
                                                    <span class="ms-1 fs-18 fw-semibold text-primary">$290</span>
                                            </div>
                                        </div>
                                        <div class="bus-footer">
                                            <div class="d-flex align-items-center justify-content-between me-2">
                                                <div class="me-2">
                                                    <span class="badge bg-light rounded-pill">Seater</span>
                                                </div>
                                                <div class="bus-footer-dot">
                                                    <span></span>
                                                </div>
                                                <div>
                                                    <span><i class="isax isax-home-wifi text-gray-6 me-1"></i></span>
                                                    <span><i
                                                            class="isax isax-location-tick text-gray-6 me-1"></i></span>
                                                    <span><i class="isax isax-hierarchy text-gray-6"></i></span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <button class="btn btn-primary btn-md search-btn me-1" type="button"
                                                    data-bs-toggle="offcanvas" data-bs-target="#routes_details"
                                                    aria-controls="routes_details">
                                                    Routes
                                                </button>
                                                <button class="btn btn-dark btn-md search-btn" type="button"
                                                    data-bs-toggle="offcanvas" data-bs-target="#bus_details"
                                                    aria-controls="bus_details">
                                                    Book Now
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Bus List -->

                                <!-- Bus List -->
                                <div class="place-item p-4 mb-4">
                                    <div class="place-img">
                                        <a href="{{url('bus-details')}}">
                                            <img src="{{URL::asset('build/img/bus/bus-img-07.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="fav-item">
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="fav-icon me-2 selected">
                                                    <i class="isax isax-heart5"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <div class="bus-content">
                                            <div class="bus-title-item">
                                                <h5 class="text-truncate mb-1"><a href="{{url('bus-details')}}">City Mover</a>
                                                </h5>
                                                <div class="d-flex">
                                                    <span class="avatar avatar-sm me-2">
                                                        <img src="{{URL::asset('build/img/bus/bus-logo-01.svg')}}" class="rounded-circle"
                                                            alt="icon">
                                                    </span>
                                                    <p class="fs-14 mb-0 me-2">Tata</p>
                                                </div>
                                            </div>
                                            <div class="bus-title">
                                                <div class="bus-title-item">
                                                    <h5 class="text-truncate mb-1">
                                                        <a href="{{url('bus-details')}}">Houston</a>
                                                    </h5>
                                                    <p>08:30 AM</p>
                                                </div>
                                                <div class="dot-line">
                                                    <span>
                                                        <small class="text-muted">08h 55m</small>
                                                    </span>
                                                </div>
                                                <div class="bus-title-item">
                                                    <h5 class="text-truncate mb-1">
                                                        <a href="{{url('bus-details')}}">New Orleans</a>
                                                    </h5>
                                                    <p>05:25 PM</p>
                                                </div>
                                            </div>
                                            <div class="bus-title-item">
                                                <h6 class="d-flex align-items-center text-gray-6 fs-14 fw-normal">
                                                    From
                                                    <span class="ms-1 fs-18 fw-semibold text-primary">$160</span>
                                            </div>
                                        </div>
                                        <div class="bus-footer">
                                            <div class="d-flex align-items-center justify-content-between me-2">
                                                <div class="me-2">
                                                    <span class="badge bg-light rounded-pill">Seater</span>
                                                </div>
                                                <div class="bus-footer-dot">
                                                    <span></span>
                                                </div>
                                                <div>
                                                    <span><i class="isax isax-home-wifi text-gray-6 me-1"></i></span>
                                                    <span><i
                                                            class="isax isax-location-tick text-gray-6 me-1"></i></span>
                                                    <span><i class="isax isax-hierarchy text-gray-6"></i></span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <button class="btn btn-primary btn-md search-btn me-1" type="button"
                                                    data-bs-toggle="offcanvas" data-bs-target="#routes_details"
                                                    aria-controls="routes_details">
                                                    Routes
                                                </button>
                                                <button class="btn btn-dark btn-md search-btn" type="button"
                                                    data-bs-toggle="offcanvas" data-bs-target="#bus_details"
                                                    aria-controls="bus_details">
                                                    Book Now
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Bus List -->

                                <!-- Bus List -->
                                <div class="place-item p-4 mb-4">
                                    <div class="place-img">
                                        <a href="{{url('bus-details')}}">
                                            <img src="{{URL::asset('build/img/bus/bus-img-08.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="fav-item">
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="fav-icon me-2">
                                                    <i class="isax isax-heart5"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <div class="bus-content">
                                            <div class="bus-title-item">
                                                <h5 class="text-truncate mb-1"><a href="{{url('bus-details')}}">City
                                                        Shuttle</a></h5>
                                                <div class="d-flex">
                                                    <span class="avatar avatar-sm me-2">
                                                        <img src="{{URL::asset('build/img/bus/bus-logo-03.svg')}}" class="rounded-circle"
                                                            alt="icon">
                                                    </span>
                                                    <p class="fs-14 mb-0 me-2">Volvo</p>
                                                </div>
                                            </div>
                                            <div class="bus-title">
                                                <div class="bus-title-item">
                                                    <h5 class="text-truncate mb-1">
                                                        <a href="{{url('bus-details')}}">Phoenix</a>
                                                    </h5>
                                                    <p>06:45 PM</p>
                                                </div>
                                                <div class="dot-line">
                                                    <span>
                                                        <small class="text-muted">7h 15m</small>
                                                    </span>
                                                </div>
                                                <div class="bus-title-item">
                                                    <h5 class="text-truncate mb-1">
                                                        <a href="{{url('bus-details')}}">Las Vegas</a>
                                                    </h5>
                                                    <p>02:00 AM</p>
                                                </div>
                                            </div>
                                            <div class="bus-title-item">
                                                <h6 class="d-flex align-items-center text-gray-6 fs-14 fw-normal">
                                                    From
                                                    <span class="ms-1 fs-18 fw-semibold text-primary">$150</span>
                                            </div>
                                        </div>
                                        <div class="bus-footer">
                                            <div class="d-flex align-items-center justify-content-between me-2">
                                                <div class="me-2">
                                                    <span class="badge bg-light rounded-pill">AC Sleeper</span>
                                                </div>
                                                <div class="bus-footer-dot">
                                                    <span></span>
                                                </div>
                                                <div>
                                                    <span><i class="isax isax-home-wifi text-gray-6 me-1"></i></span>
                                                    <span><i
                                                            class="isax isax-location-tick text-gray-6 me-1"></i></span>
                                                    <span><i class="isax isax-hierarchy text-gray-6"></i></span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <button class="btn btn-primary btn-md search-btn me-1" type="button"
                                                    data-bs-toggle="offcanvas" data-bs-target="#routes_details"
                                                    aria-controls="routes_details">
                                                    Routes
                                                </button>
                                                <button class="btn btn-dark btn-md search-btn" type="button"
                                                    data-bs-toggle="offcanvas" data-bs-target="#bus_details"
                                                    aria-controls="bus_details">
                                                    Book Now
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Bus List -->

                                <!-- Bus List -->
                                <div class="place-item p-4 mb-4">
                                    <div class="place-img">
                                        <a href="{{url('bus-details')}}">
                                            <img src="{{URL::asset('build/img/bus/bus-img-09.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="fav-item">
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="fav-icon me-2">
                                                    <i class="isax isax-heart5"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <div class="bus-content">
                                            <div class="bus-title-item">
                                                <h5 class="text-truncate mb-1"><a href="{{url('bus-details')}}">Volt
                                                        Voyage</a></h5>
                                                <div class="d-flex">
                                                    <span class="avatar avatar-sm me-2">
                                                        <img src="{{URL::asset('build/img/bus/bus-logo-01.svg')}}" class="rounded-circle"
                                                            alt="icon">
                                                    </span>
                                                    <p class="fs-14 mb-0 me-2"> Tata</p>
                                                </div>
                                            </div>
                                            <div class="bus-title">
                                                <div class="bus-title-item">
                                                    <h5 class="text-truncate mb-1">
                                                        <a href="{{url('bus-details')}}">San Diego</a>
                                                    </h5>
                                                    <p>09:15 PM</p>
                                                </div>
                                                <div class="dot-line">
                                                    <span>
                                                        <small class="text-muted">13h 25m</small>
                                                    </span>
                                                </div>
                                                <div class="bus-title-item">
                                                    <h5 class="text-truncate mb-1">
                                                        <a href="{{url('bus-details')}}">Sacramento</a>
                                                    </h5>
                                                    <p>10:40 AM</p>
                                                </div>
                                            </div>
                                            <div class="bus-title-item">
                                                <h6 class="d-flex align-items-center text-gray-6 fs-14 fw-normal">
                                                    From
                                                    <span class="ms-1 fs-18 fw-semibold text-primary">$275</span>
                                            </div>
                                        </div>
                                        <div class="bus-footer">
                                            <div class="d-flex align-items-center justify-content-between me-2">
                                                <div class="me-2">
                                                    <span class="badge bg-light rounded-pill">Seater</span>
                                                </div>
                                                <div class="bus-footer-dot">
                                                    <span></span>
                                                </div>
                                                <div>
                                                    <span><i class="isax isax-home-wifi text-gray-6 me-1"></i></span>
                                                    <span><i
                                                            class="isax isax-location-tick text-gray-6 me-1"></i></span>
                                                    <span><i class="isax isax-hierarchy text-gray-6"></i></span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <button class="btn btn-primary btn-md search-btn me-1" type="button"
                                                    data-bs-toggle="offcanvas" data-bs-target="#routes_details"
                                                    aria-controls="routes_details">
                                                    Routes
                                                </button>
                                                <button class="btn btn-dark btn-md search-btn" type="button"
                                                    data-bs-toggle="offcanvas" data-bs-target="#bus_details"
                                                    aria-controls="bus_details">
                                                    Book Now
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Bus List -->

                                <!-- Bus List -->
                                <div class="place-item p-4 mb-4">
                                    <div class="place-img">
                                        <a href="{{url('bus-details')}}">
                                            <img src="{{URL::asset('build/img/bus/bus-img-10.jpg')}}" class="img-fluid" alt="img">
                                        </a>
                                        <div class="fav-item">
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="fav-icon me-2 selected">
                                                    <i class="isax isax-heart5"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="place-content">
                                        <div class="bus-content">
                                            <div class="bus-title-item">
                                                <h5 class="text-truncate mb-1"><a href="{{url('bus-details')}}">Journey
                                                        Jet</a></h5>
                                                <div class="d-flex">
                                                    <span class="avatar avatar-sm me-2">
                                                        <img src="{{URL::asset('build/img/bus/bus-logo-02.svg')}}" class="rounded-circle"
                                                            alt="icon">
                                                    </span>
                                                    <p class="fs-14 mb-0 me-2">Ashok Leyland</p>
                                                </div>
                                            </div>
                                            <div class="bus-title">
                                                <div class="bus-title-item">
                                                    <h5 class="text-truncate mb-1">
                                                        <a href="{{url('bus-details')}}">Orlando</a>
                                                    </h5>
                                                    <p>08:00 AM</p>
                                                </div>
                                                <div class="dot-line">
                                                    <span>
                                                        <small class="text-muted">16h 05m</small>
                                                    </span>
                                                </div>
                                                <div class="bus-title-item">
                                                    <h5 class="text-truncate mb-1">
                                                        <a href="{{url('bus-details')}}">Washington</a>
                                                    </h5>
                                                    <p>12:05 PM</p>
                                                </div>
                                            </div>
                                            <div class="bus-title-item">
                                                <h6 class="d-flex align-items-center text-gray-6 fs-14 fw-normal">
                                                    From
                                                    <span class="ms-1 fs-18 fw-semibold text-primary">$340</span>
                                            </div>
                                        </div>
                                        <div class="bus-footer">
                                            <div class="d-flex align-items-center justify-content-between me-2">
                                                <div class="me-2">
                                                    <span class="badge bg-light rounded-pill">Sleeper</span>
                                                </div>
                                                <div class="bus-footer-dot">
                                                    <span></span>
                                                </div>
                                                <div>
                                                    <span><i class="isax isax-home-wifi text-gray-6 me-1"></i></span>
                                                    <span><i
                                                            class="isax isax-location-tick text-gray-6 me-1"></i></span>
                                                    <span><i class="isax isax-hierarchy text-gray-6"></i></span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <button class="btn btn-primary btn-md search-btn me-1" type="button"
                                                    data-bs-toggle="offcanvas" data-bs-target="#routes_details"
                                                    aria-controls="routes_details">
                                                    Routes
                                                </button>
                                                <button class="btn btn-dark btn-md search-btn" type="button"
                                                    data-bs-toggle="offcanvas" data-bs-target="#bus_details"
                                                    aria-controls="bus_details">
                                                    Book Now
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Bus List -->

                            </div>
                        </div>

                    </div>

                    <!-- Pagination -->
                    <nav class="pagination-nav">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true"><i class="fa-solid fa-chevron-left"></i></span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item active"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true"><i class="fa-solid fa-chevron-right"></i></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- /Pagination -->

                </div>

            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->

    <!-- ========================
        End Page Content
    ========================= -->

@endsection



