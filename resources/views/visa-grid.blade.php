<?php $page="visa-grid";?>
@extends('layout.mainlayout')
@section('content')

    <!-- ========================
        Start Page Content
    ========================= -->

    <!-- Breadcrumb -->
    <div class="breadcrumb-bar breadcrumb-bg-08 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title mb-2">Visa</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{url('index')}}"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item">Visa</li>
                            <li class="breadcrumb-item active" aria-current="page">Visa Grid</li>
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

            <!-- Tour Search -->
            <div class="card">
                <div class="card-body">
                    <div class="banner-form">
                        <form class="d-lg-flex">
                            <div class="d-flex  form-info">
                                <div class="form-item dropdown">
                                    <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"
                                        role="menu">
                                        <label class="form-label fs-14 text-default mb-1">Country</label>
                                        <input type="text" class="form-control" value="Select">
                                    </div>
                                    <div class="dropdown-menu dropdown-md p-0">
                                        <div class="input-search p-3 border-bottom">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search">
                                                <span class="input-group-text px-2 border-start-0"><i
                                                        class="isax isax-search-normal"></i></span>
                                            </div>
                                        </div>
                                        <ul>
                                            <li class="border-bottom">
                                                <a class="dropdown-item" href="#">
                                                    <h6 class="fs-16 fw-medium">USA</h6>
                                                </a>
                                            </li>
                                            <li class="border-bottom">
                                                <a class="dropdown-item" href="#">
                                                    <h6 class="fs-16 fw-medium">Japan</h6>
                                                </a>
                                            </li>
                                            <li class="border-bottom">
                                                <a class="dropdown-item" href="#">
                                                    <h6 class="fs-16 fw-medium">Singapore</h6>
                                                </a>
                                            </li>
                                            <li class="border-bottom">
                                                <a class="dropdown-item" href="#">
                                                    <h6 class="fs-16 fw-medium">Russia</h6>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <h6 class="fs-16 fw-medium">Germany</h6>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="form-item dropdown">
                                    <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"
                                        role="menu">
                                        <label class="form-label fs-14 text-default mb-1">Visa Type</label>
                                        <input type="text" class="form-control" value="Select">
                                    </div>
                                    <div class="dropdown-menu dropdown-md p-0">
                                        <div class="input-search p-3 border-bottom">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search">
                                                <span class="input-group-text px-2 border-start-0"><i
                                                        class="isax isax-search-normal"></i></span>
                                            </div>
                                        </div>
                                        <ul>
                                            <li class="border-bottom">
                                                <a class="dropdown-item" href="#">
                                                    <h6 class="fs-16 fw-medium">Tourist</h6>
                                                </a>
                                            </li>
                                            <li class="border-bottom">
                                                <a class="dropdown-item" href="#">
                                                    <h6 class="fs-16 fw-medium">Business</h6>
                                                </a>
                                            </li>
                                            <li class="border-bottom">
                                                <a class="dropdown-item" href="#">
                                                    <h6 class="fs-16 fw-medium">Student</h6>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <h6 class="fs-16 fw-medium">Work</h6>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="form-item dropdown">
                                    <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"
                                        role="menu">
                                        <label class="form-label fs-14 text-default mb-1">Citizenship</label>
                                        <input type="text" class="form-control" value="Select">
                                    </div>
                                    <div class="dropdown-menu dropdown-md p-0">
                                        <div class="input-search p-3 border-bottom">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search">
                                                <span class="input-group-text px-2 border-start-0"><i
                                                        class="isax isax-search-normal"></i></span>
                                            </div>
                                        </div>
                                        <ul>
                                            <li class="border-bottom">
                                                <a class="dropdown-item" href="#">
                                                    <h6 class="fs-16 fw-medium">USA</h6>
                                                </a>
                                            </li>
                                            <li class="border-bottom">
                                                <a class="dropdown-item" href="#">
                                                    <h6 class="fs-16 fw-medium">Japan</h6>
                                                </a>
                                            </li>
                                            <li class="border-bottom">
                                                <a class="dropdown-item" href="#">
                                                    <h6 class="fs-16 fw-medium">Singapore</h6>
                                                </a>
                                            </li>
                                            <li class="border-bottom">
                                                <a class="dropdown-item" href="#">
                                                    <h6 class="fs-16 fw-medium">Russia</h6>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <h6 class="fs-16 fw-medium">Germany</h6>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="form-item dropdown">
                                    <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"
                                        role="menu">
                                        <label class="form-label fs-14 text-default mb-1">Travelers</label>
                                        <input type="text" class="form-control" value="Select">
                                    </div>
                                    <div class="dropdown-menu dropdown-md p-0">
                                        <div class="input-search p-3 border-bottom">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search">
                                                <span class="input-group-text px-2 border-start-0"><i
                                                        class="isax isax-search-normal"></i></span>
                                            </div>
                                        </div>
                                        <ul>
                                            <li class="border-bottom">
                                                <a class="dropdown-item" href="#">
                                                    <h6 class="fs-16 fw-medium">1</h6>
                                                </a>
                                            </li>
                                            <li class="border-bottom">
                                                <a class="dropdown-item" href="#">
                                                    <h6 class="fs-16 fw-medium">2</h6>
                                                </a>
                                            </li>
                                            <li class="border-bottom">
                                                <a class="dropdown-item" href="#">
                                                    <h6 class="fs-16 fw-medium">3</h6>
                                                </a>
                                            </li>
                                            <li class="border-bottom">
                                                <a class="dropdown-item" href="#">
                                                    <h6 class="fs-16 fw-medium">4</h6>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <h6 class="fs-16 fw-medium">5</h6>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary search-btn rounded">Search</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /Tour Search -->

            <div class="row">

                <!-- Sidebar -->
                <div class="col-xl-3 col-lg-4 theiaStickySidebar">
                    <div class="card filter-sidebar mb-4 mb-lg-0">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5>Filters</h5>
                            <a href="#" class="fs-14 link-primary">Reset</a>
                        </div>
                        <div class="card-body p-0">
                            <form action="#">
                                <div class="p-3 border-bottom">
                                    <label class="form-label fs-16">Search</label>
                                    <div class="input-icon">
                                        <span class="input-icon-addon">
                                            <i class="isax isax-search-normal"></i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                </div>
                                <div class="accordion accordion-list">
                                    <div class="accordion-item border-bottom p-3">
                                        <div class="accordion-header">
                                            <div class="accordion-button p-0" data-bs-toggle="collapse"
                                                data-bs-target="#accordion-popular" aria-expanded="true"
                                                aria-controls="accordion-popular" role="button">
                                                <i class="isax isax-coin me-2 text-primary"></i>Price Per Person
                                            </div>
                                        </div>
                                        <div id="accordion-popular" class="accordion-collapse collapse show">
                                            <div class="accordion-body">
                                                <div class="filter-range">
                                                    <input type="text" id="range_03">
                                                </div>
                                                <div class="filter-range-amount">
                                                    <p class="fs-14">Range : <span class="text-gray-9 fw-medium">$200 -
                                                            $800</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-bottom p-3">
                                        <div class="accordion-header">
                                            <div class="accordion-button p-0" data-bs-toggle="collapse"
                                                data-bs-target="#accordion-hotel" aria-expanded="true"
                                                aria-controls="accordion-hotel" role="button">
                                                <i class="isax isax-airplane me-2 text-primary"></i>Country
                                            </div>
                                        </div>
                                        <div id="accordion-hotel" class="accordion-collapse collapse show">
                                            <div class="accordion-body">
                                                <div class="more-content">
                                                    <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                        <input class="form-check-input ms-0 mt-0" name="hotel1"
                                                            type="checkbox" id="hotel1" checked>
                                                        <label class="form-check-label ms-2" for="hotel1">
                                                            USA
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                        <input class="form-check-input ms-0 mt-0" name="hotel2"
                                                            type="checkbox" id="hotel2" checked>
                                                        <label class="form-check-label ms-2" for="hotel2">
                                                            Egypt
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                        <input class="form-check-input ms-0 mt-0" name="hotel3"
                                                            type="checkbox" id="hotel3" checked>
                                                        <label class="form-check-label ms-2" for="hotel3">
                                                            Australia
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                        <input class="form-check-input ms-0 mt-0" name="hotel4"
                                                            type="checkbox" id="hotel4" checked>
                                                        <label class="form-check-label ms-2" for="hotel4">
                                                            Spain
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                        <input class="form-check-input ms-0 mt-0" name="hotel5"
                                                            type="checkbox" id="hotel5">
                                                        <label class="form-check-label ms-2" for="hotel5">
                                                            Turkey
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                        <input class="form-check-input ms-0 mt-0" name="hotel6"
                                                            type="checkbox" id="hotel6" checked>
                                                        <label class="form-check-label ms-2" for="hotel6">
                                                            Qatar
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                        <input class="form-check-input ms-0 mt-0" name="hotel7"
                                                            type="checkbox" id="hotel7" checked>
                                                        <label class="form-check-label ms-2" for="hotel7">
                                                            India
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                        <input class="form-check-input ms-0 mt-0" name="hotel8"
                                                            type="checkbox" id="hotel8">
                                                        <label class="form-check-label ms-2" for="hotel8">
                                                            Canada
                                                        </label>
                                                    </div>
                                                </div>
                                                <a href="#" class="more-view text-primary fw-medium fs-14">See Less</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-bottom p-3">
                                        <div class="accordion-header">
                                            <div class="accordion-button p-0" data-bs-toggle="collapse"
                                                data-bs-target="#accordion-amenity" aria-expanded="true"
                                                aria-controls="accordion-amenity" role="button">
                                                <i class="isax isax-airplane me-2 text-primary"></i>Processing Time
                                            </div>
                                        </div>
                                        <div id="accordion-amenity" class="accordion-collapse collapse show">
                                            <div class="accordion-body">
                                                <div class="more-content">
                                                    <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                        <input class="form-check-input ms-0 mt-0" name="amenity1"
                                                            type="checkbox" id="amenity1">
                                                        <label class="form-check-label ms-2" for="amenity1">
                                                            5-10 Working Day
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                        <input class="form-check-input ms-0 mt-0" name="amenity2"
                                                            type="checkbox" id="amenity2">
                                                        <label class="form-check-label ms-2" for="amenity2">
                                                            7-10 Working Day
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                        <input class="form-check-input ms-0 mt-0" name="amenity3"
                                                            type="checkbox" id="amenity3">
                                                        <label class="form-check-label ms-2" for="amenity3">
                                                            10-15 Working Day
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                        <input class="form-check-input ms-0 mt-0" name="amenity4"
                                                            type="checkbox" id="amenity4" checked>
                                                        <label class="form-check-label ms-2" for="amenity4">
                                                            12-15 Working Day
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center ps-0 mb-0">
                                                        <input class="form-check-input ms-0 mt-0" name="amenity4"
                                                            type="checkbox" id="amenity4" checked>
                                                        <label class="form-check-label ms-2" for="amenity4">
                                                            13-15 Working Day
                                                        </label>
                                                    </div>
                                                </div>
                                                <a href="#" class="more-view text-primary fw-medium fs-14">See Less</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-bottom p-3">
                                        <div class="accordion-header">
                                            <div class="accordion-button p-0" data-bs-toggle="collapse"
                                                data-bs-target="#accordion-cusine" aria-expanded="true"
                                                aria-controls="accordion-cusine" role="button">
                                                <i class="isax isax-candle me-2 text-primary"></i>Visa Type
                                            </div>
                                        </div>
                                        <div id="accordion-cusine" class="accordion-collapse collapse show">
                                            <div class="accordion-body">
                                                <div>
                                                    <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                        <input class="form-check-input ms-0 mt-0" name="cusine1"
                                                            type="checkbox" id="cusine1">
                                                        <label class="form-check-label ms-2" for="cusine1">
                                                            Tourist
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                        <input class="form-check-input ms-0 mt-0" name="cusine2"
                                                            type="checkbox" id="cusine2">
                                                        <label class="form-check-label ms-2" for="cusine2">
                                                            Business
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                        <input class="form-check-input ms-0 mt-0" name="cusine3"
                                                            type="checkbox" id="cusine3">
                                                        <label class="form-check-label ms-2" for="cusine3">
                                                            Student
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center ps-0 mb-0">
                                                        <input class="form-check-input ms-0 mt-0" name="cusine4"
                                                            type="checkbox" id="cusine4" checked>
                                                        <label class="form-check-label ms-2" for="cusine4">
                                                            Work
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-bottom p-3">
                                        <div class="accordion-header">
                                            <div class="accordion-button p-0" data-bs-toggle="collapse"
                                                data-bs-target="#visa-mode" aria-expanded="true"
                                                aria-controls="visa-mode" role="button">
                                                <i class="isax isax-home-2 me-2 text-primary"></i>Visa Mode
                                            </div>
                                        </div>
                                        <div id="visa-mode" class="accordion-collapse collapse show">
                                            <div class="accordion-body">
                                                <div class="more-content">
                                                    <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                        <input class="form-check-input ms-0 mt-0" name="hotel1"
                                                            type="checkbox" id="hotel1" checked>
                                                        <label class="form-check-label ms-2" for="hotel1">
                                                            e-Visa
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                        <input class="form-check-input ms-0 mt-0" name="hotel2"
                                                            type="checkbox" id="hotel2" checked>
                                                        <label class="form-check-label ms-2" for="hotel2">
                                                            Visa on Arrival
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                        <input class="form-check-input ms-0 mt-0" name="hotel3"
                                                            type="checkbox" id="hotel3" checked>
                                                        <label class="form-check-label ms-2" for="hotel3">
                                                            Sticker Visa
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                        <input class="form-check-input ms-0 mt-0" name="hotel4"
                                                            type="checkbox" id="hotel4" checked>
                                                        <label class="form-check-label ms-2" for="hotel4">
                                                            Embassy Visa
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                        <input class="form-check-input ms-0 mt-0" name="hotel5"
                                                            type="checkbox" id="hotel5">
                                                        <label class="form-check-label ms-2" for="hotel5">
                                                            Consular Visa
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center ps-0 mb-0">
                                                        <input class="form-check-input ms-0 mt-0" name="hotel6"
                                                            type="checkbox" id="hotel6" checked>
                                                        <label class="form-check-label ms-2" for="hotel6">
                                                            Electronic Travel Authorization
                                                        </label>
                                                    </div>
                                                </div>
                                                <a href="#" class="more-view text-primary fw-medium fs-14">See Less</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-bottom p-3">
                                        <div class="accordion-header">
                                            <div class="accordion-button p-0" data-bs-toggle="collapse"
                                                data-bs-target="#accordion-meal" aria-expanded="true"
                                                aria-controls="accordion-meal" role="button">
                                                <i class="isax isax-reserve me-2 text-primary"></i>Validity
                                            </div>
                                        </div>
                                        <div id="accordion-meal" class="accordion-collapse collapse show">
                                            <div class="accordion-body pt-2">
                                                <div
                                                    class="form-checkbox form-check form-check-inline d-inline-flex align-items-center mt-2 me-2">
                                                    <input class="form-check-input ms-0 mt-0" name="meals1"
                                                        type="checkbox" id="meals1">
                                                    <label class="form-check-label ms-2" for="meals1">
                                                        50 Days
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-checkbox form-check form-check-inline d-inline-flex align-items-center mt-2 me-2">
                                                    <input class="form-check-input ms-0 mt-0" name="meals2"
                                                        type="checkbox" id="meals2">
                                                    <label class="form-check-label ms-2" for="meals2">
                                                        60 Days
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-checkbox form-check form-check-inline d-inline-flex align-items-center mt-2 me-2">
                                                    <input class="form-check-input ms-0 mt-0" name="meals3"
                                                        type="checkbox" id="meals3">
                                                    <label class="form-check-label ms-2" for="meals3">
                                                        15 Days
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-checkbox form-check form-check-inline d-inline-flex align-items-center mt-2 me-2">
                                                    <input class="form-check-input ms-0 mt-0" name="meals4"
                                                        type="checkbox" id="meals4" checked>
                                                    <label class="form-check-label ms-2" for="meals4">
                                                        40 Days
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-bottom p-3">
                                        <div class="accordion-header">
                                            <div class="accordion-button p-0" data-bs-toggle="collapse"
                                                data-bs-target="#accordion-brand" aria-expanded="true"
                                                aria-controls="accordion-brand" role="button">
                                                <i class="isax isax-discount-shape me-2 text-primary"></i>Reviews
                                            </div>
                                        </div>
                                        <div id="accordion-brand" class="accordion-collapse collapse show">
                                            <div class="accordion-body">
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" name="review1"
                                                        type="checkbox" id="review1">
                                                    <label class="form-check-label ms-2" for="review1">
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
                                                    <input class="form-check-input ms-0 mt-0" name="review2"
                                                        type="checkbox" id="review2">
                                                    <label class="form-check-label ms-2" for="review2">
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
                                                    <input class="form-check-input ms-0 mt-0" name="review3"
                                                        type="checkbox" id="review3">
                                                    <label class="form-check-label ms-2" for="review3">
                                                        <span class="rating d-flex align-items-center">
                                                            <i class="fas fa-star filled text-primary me-1"></i>
                                                            <i class="fas fa-star filled text-primary me-1"></i>
                                                            <i class="fas fa-star filled text-primary"></i>
                                                            <span class="ms-2">3 Star</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" name="review4"
                                                        type="checkbox" id="review4">
                                                    <label class="form-check-label ms-2" for="review4">
                                                        <span class="rating d-flex align-items-center">
                                                            <i class="fas fa-star filled text-primary me-1"></i>
                                                            <i class="fas fa-star filled text-primary"></i>
                                                            <span class="ms-2">2 Star</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex align-items-center ps-0 mb-0">
                                                    <input class="form-check-input ms-0 mt-0" name="review5"
                                                        type="checkbox" id="review5">
                                                    <label class="form-check-label ms-2" for="review5">
                                                        <span class="rating d-flex align-items-center">
                                                            <i class="fas fa-star filled text-primary"></i>
                                                            <span class="ms-2">1 Star</span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /Sidebar -->

                <div class="col-xl-9 col-lg-8 theiaStickySidebar">
                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                        <div class="d-flex align-items-center mb-3">
                            <h6 class="me-1">689 Visa</h6>
                            <p> Found on Your Search</p>
                        </div>
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="list-item d-flex align-items-center mb-3">
                                <a href="{{url('visa-grid')}}" class="list-icon active me-2"><i
                                        class="isax isax-grid-1"></i></a>
                                <a href="{{url('visa-list')}}" class="list-icon me-2"><i class="isax isax-firstline"></i></a>
                            </div>
                            <div class="dropdown mb-3">
                                <a href="#" class="dropdown-toggle py-2" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <span class="fw-medium text-gray-9">Sort By : </span>Recommended
                                </a>
                                <div class="dropdown-menu dropdown-sm">
                                    <form action="{{url('visa-grid')}}">
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
                    <div class="row justify-content-center">

                        <!-- Tours Grid -->
                        <div class="col-xxl-4 col-md-6 d-flex">
                            <div class="place-item mb-4 flex-fill">
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
                        <div class="col-xxl-4 col-md-6 d-flex">
                            <div class="place-item mb-4 flex-fill">
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
                        <div class="col-xxl-4 col-md-6 d-flex">
                            <div class="place-item mb-4 flex-fill">
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
                        <div class="col-xxl-4 col-md-6 d-flex">
                            <div class="place-item mb-4 flex-fill">
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
                        <div class="col-xxl-4 col-md-6 d-flex">
                            <div class="place-item mb-4 flex-fill">
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
                        <div class="col-xxl-4 col-md-6 d-flex">
                            <div class="place-item mb-4 flex-fill">
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
                        <div class="col-xxl-4 col-md-6 d-flex">
                            <div class="place-item mb-4 flex-fill">
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
                        <div class="col-xxl-4 col-md-6 d-flex">
                            <div class="place-item mb-4 flex-fill">
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

                        <!-- Tours Grid -->
                        <div class="col-xxl-4 col-md-6 d-flex">
                            <div class="place-item mb-4 flex-fill">
                                <div class="place-img">
                                    <div class="slide-images">
                                        <a href="{{url('visa-details')}}">
                                            <img src="{{URL::asset('build/img/visa/visa-09.jpg')}}" class="img-fluid w-100" alt="img">
                                        </a>
                                    </div>
                                    <div class="fav-item">
                                        <button href="#" class="fav-icon p-2 border-0">
                                            <i class="isax isax-heart5"></i>
                                        </button>
                                        <span class="badge bg-white text-dark d-inline-flex align-items-center">Skilled
                                            Worker Visa</span>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <div class="d-flex flex-wrap align-items-center me-2">
                                            <span class="me-1"><i class="isax isax-clock text-gray-6"></i></span>
                                            <p class="fs-14 text-gray-9">10-14 Working Days</p>
                                        </div>
                                    </div>
                                    <h5 class="mb-2"><a href="{{url('visa-details')}}">Skilled Workers with Comprehensive
                                            Insurance</a></h5>
                                    <div class="d-flex align-items-center gap-0 mb-3">
                                        <p class="d-flex align-items-center fs-14 mb-0 me-2">Mode : Embassy Visa</p>
                                        <p class="fs-14 mb-0"><i
                                                class="ti ti-point-filled text-primary me-2"></i>Validity : 3 Years</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <div class="mb-0">
                                            <h6 class="d-flex align-items-center text-gray-6 fs-14 fw-normal">From <span
                                                    class="ms-1 fs-18 fw-semibold text-primary">$1200</span><span
                                                    class="ms-1 fs-14 text-gray-3">/ Person</span></h6>
                                        </div>
                                        <div class="ms-2 d-flex align-items-center">
                                            <p class="d-flex align-items-center fs-14 mb-0"><i
                                                    class="isax isax-location5 me-1"></i>Australia</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Tours Grid -->

                        <!-- Tours Grid -->
                        <div class="col-xxl-4 col-md-6 d-flex">
                            <div class="place-item mb-4 flex-fill">
                                <div class="place-img">
                                    <div class="slide-images">
                                        <a href="{{url('visa-details')}}">
                                            <img src="{{URL::asset('build/img/visa/visa-10.jpg')}}" class="img-fluid w-100" alt="img">
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
                                            <p class="fs-14 text-gray-9">15-20 Working Days</p>
                                        </div>
                                    </div>
                                    <h5 class="mb-2"><a href="{{url('visa-details')}}">Work Visa for Employment
                                            Opportunities</a></h5>
                                    <div class="d-flex align-items-center gap-0 mb-3">
                                        <p class="d-flex align-items-center fs-14 mb-0 me-2">Mode : Electronic</p>
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
                                                    class="isax isax-location5 me-1"></i>Turkey</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Tours Grid -->

                        <!-- Tours Grid -->
                        <div class="col-xxl-4 col-md-6 d-flex">
                            <div class="place-item mb-4 flex-fill">
                                <div class="place-img">
                                    <div class="slide-images">
                                        <a href="{{url('visa-details')}}">
                                            <img src="{{URL::asset('build/img/visa/visa-11.jpg')}}" class="img-fluid w-100" alt="img">
                                        </a>
                                    </div>
                                    <div class="fav-item">
                                        <button href="#" class="fav-icon p-2 border-0">
                                            <i class="isax isax-heart5"></i>
                                        </button>
                                        <span class="badge bg-white text-dark d-inline-flex align-items-center">Tourist
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
                                                    class="ms-1 fs-18 fw-semibold text-primary">$700</span><span
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
                        <div class="col-xxl-4 col-md-6 d-flex">
                            <div class="place-item mb-4 flex-fill">
                                <div class="place-img">
                                    <div class="slide-images">
                                        <a href="{{url('visa-details')}}">
                                            <img src="{{URL::asset('build/img/visa/visa-12.jpg')}}" class="img-fluid w-100" alt="img">
                                        </a>
                                    </div>
                                    <div class="fav-item">
                                        <button href="#" class="fav-icon p-2 border-0">
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
                                            <p class="fs-14 text-gray-9">2-4 Weeks</p>
                                        </div>
                                    </div>
                                    <h5 class="mb-2"><a href="{{url('visa-details')}}">Long-term for Academic with Health
                                            Insurance</a></h5>
                                    <div class="d-flex align-items-center gap-0 mb-3">
                                        <p class="d-flex align-items-center fs-14 mb-0 me-2">Mode : Paper</p>
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
                                                    class="isax isax-location5 me-1"></i>USA</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Tours Grid -->

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



