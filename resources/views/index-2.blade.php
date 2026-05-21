<?php $page="index-2";?>
@extends('layout.mainlayout')
@section('content')

    <!-- ========================
        Start Page Content
    ========================= -->

    <!-- Hero Section -->
    <section class="hero-sec-nine">
        <div class="container">
            <div class="hero-content wow fadeInUp">
                <h1 class="banner-title">Discover <span>World</span> Your Way</h1>
                <span class="banner-title-text">Flights, Hotels, Cars, Tours, Cruises & Visa Services – All in One
                    Platform</span>
                <div class="row align-items-center">
                    <div class="col-md-12 mx-auto">
                        <div class="banner-form card mb-0 wow fadeInUp" data-wow-delay="1.5">
                            <div class="card-header">
                                <ul class="nav">
                                    <li>
                                        <a href="#" class="nav-link " data-bs-toggle="tab" data-bs-target="#flight">
                                            <i class="isax isax-airplane5 me-2"></i>Flights
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link" data-bs-toggle="tab" data-bs-target="#Hotels">
                                            <i class="isax isax-buildings5 me-2"></i>Hotels
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link" data-bs-toggle="tab" data-bs-target="#Cars">
                                            <i class="isax isax-car5 me-2"></i>Cars
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link active" data-bs-toggle="tab"
                                            data-bs-target="#Cruise">
                                            <i class="isax isax-ship5 me-2"></i>Cruise
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link" data-bs-toggle="tab" data-bs-target="#Tour">
                                            <i class="isax isax-camera5 me-2"></i>Tour
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link" data-bs-toggle="tab" data-bs-target="#Bus">
                                            <i class="isax isax-bus5 me-2"></i>Bus
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link" data-bs-toggle="tab" data-bs-target="#Activity">
                                            <i class="isax isax-calendar5 me-2"></i>Activity
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link" data-bs-toggle="tab" data-bs-target="#Visa">
                                            <i class="isax isax-document5 me-2"></i>Visa
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link" data-bs-toggle="tab" data-bs-target="#Guide">
                                            <i class="isax isax-user-octagon me-2"></i>Guide
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div>
                                    <div class="tab-content">
                                        <div class="tab-pane fade" id="flight">
                                            <form action="{{url('flight-grid')}}">
                                                <div
                                                    class="d-flex align-items-center justify-content-between flex-wrap mb-2">
                                                    <div class="d-flex align-items-center">
                                                        <div class="form-check d-flex align-items-center me-3 mb-2">
                                                            <input class="form-check-input mt-0" type="radio"
                                                                name="Radio" id="oneway" value="oneway" checked>
                                                            <label class="form-check-label fs-14 ms-2" for="oneway">
                                                                Oneway
                                                            </label>
                                                        </div>
                                                        <div class="form-check d-flex align-items-center me-3 mb-2">
                                                            <input class="form-check-input mt-0" type="radio"
                                                                name="Radio" id="roundtrip" value="roundtrip">
                                                            <label class="form-check-label fs-14 ms-2" for="roundtrip">
                                                                Round Trip
                                                            </label>
                                                        </div>
                                                        <div class="form-check d-flex align-items-center me-3 mb-2">
                                                            <input class="form-check-input mt-0" type="radio"
                                                                name="Radio" id="multiway" value="multiway">
                                                            <label class="form-check-label fs-14 ms-2" for="multiway">
                                                                Multi Trip
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <span class="fw-medium fs-16 mb-2 text-white">Millions of cheap
                                                        flights. One simple search</span>
                                                </div>
                                                <div class="normal-trip">
                                                    <div class="d-lg-flex">
                                                        <div class="d-flex  form-info">
                                                            <div class="form-item change-drop booking-dropdown dropdown">
                                                                <div data-bs-toggle="dropdown"
                                                                    data-bs-auto-close="outside" aria-expanded="false"
                                                                    role="menu">
                                                                    <label
                                                                        class="form-label fs-14 text-default mb-1">From</label>
                                                                    <input type="text" class="form-control value-input"
                                                                        value="Newyork">
                                                                    <p class="fs-12 mb-0">Ken International Airport</p>
                                                                </div>
                                                                <div class="dropdown-menu dropdown-md p-0">
                                                                    <div class="input-search p-3 border-bottom">
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Search Location">
                                                                            <span
                                                                                class="input-group-text px-2 border-start-0"><i
                                                                                    class="isax isax-search-normal"></i></span>
                                                                        </div>
                                                                    </div>
                                                                    <ul>
                                                                        <li class="border-bottom">
                                                                            <a class="dropdown-item" href="#">
                                                                                <span
                                                                                    class="fs-16 fw-medium text-dark dropdown-name">Newyork</span>
                                                                                <p>Ken International Airport</p>
                                                                            </a>
                                                                        </li>
                                                                        <li class="border-bottom">
                                                                            <a class="dropdown-item" href="#">
                                                                                <span
                                                                                    class="fs-16 fw-medium text-dark dropdown-name">Boston</span>
                                                                                <p>Boston Logan International Airport
                                                                                </p>
                                                                            </a>
                                                                        </li>
                                                                        <li class="border-bottom">
                                                                            <a class="dropdown-item" href="#">
                                                                                <span
                                                                                    class="fs-16 fw-medium text-dark dropdown-name">NorthernVirginia</span>
                                                                                <p>Dulles International Airport</p>
                                                                            </a>
                                                                        </li>
                                                                        <li class="border-bottom">
                                                                            <a class="dropdown-item" href="#">
                                                                                <span
                                                                                    class="fs-16 fw-medium text-dark dropdown-name">LosAngeles</span>
                                                                                <p>Los Angeles International Airport</p>
                                                                            </a>
                                                                        </li>
                                                                        <li class="border-bottom">
                                                                            <a class="dropdown-item" href="#">
                                                                                <span
                                                                                    class="fs-16 fw-medium text-dark dropdown-name">Orlando</span>
                                                                                <p>Orlando International Airport</p>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="form-item change-drop booking-dropdown dropdown ps-2 ps-sm-3">
                                                                <div data-bs-toggle="dropdown"
                                                                    data-bs-auto-close="outside" aria-expanded="false"
                                                                    role="menu">
                                                                    <label
                                                                        class="form-label fs-14 text-default mb-1">To</label>
                                                                    <input type="text" class="form-control value-input"
                                                                        value="Las Vegas">
                                                                    <p class="fs-12 mb-0">Martini International Airport
                                                                    </p>
                                                                    <span
                                                                        class="way-icon badge badge-primary rounded-pill translate-middle">
                                                                        <i
                                                                            class="fa-solid fa-arrow-right-arrow-left"></i>
                                                                    </span>
                                                                </div>
                                                                <div class="dropdown-menu dropdown-md p-0">
                                                                    <div class="input-search p-3 border-bottom">
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Search Location">
                                                                            <span
                                                                                class="input-group-text px-2 border-start-0"><i
                                                                                    class="isax isax-search-normal"></i></span>
                                                                        </div>
                                                                    </div>
                                                                    <ul>
                                                                        <li class="border-bottom">
                                                                            <a class="dropdown-item" href="#">
                                                                                <span
                                                                                    class="fs-16 fw-medium text-dark dropdown-name">Newyork</span>
                                                                                <p>Ken International Airport</p>
                                                                            </a>
                                                                        </li>
                                                                        <li class="border-bottom">
                                                                            <a class="dropdown-item" href="#">
                                                                                <span
                                                                                    class="fs-16 fw-medium text-dark dropdown-name">Boston</span>
                                                                                <p>Boston Logan International Airport
                                                                                </p>
                                                                            </a>
                                                                        </li>
                                                                        <li class="border-bottom">
                                                                            <a class="dropdown-item" href="#">
                                                                                <span
                                                                                    class="fs-16 fw-medium text-dark dropdown-name">NorthernVirginia</span>
                                                                                <p>Dulles International Airport</p>
                                                                            </a>
                                                                        </li>
                                                                        <li class="border-bottom">
                                                                            <a class="dropdown-item" href="#">
                                                                                <span
                                                                                    class="fs-16 fw-medium text-dark dropdown-name">LosAngeles</span>
                                                                                <p>Los Angeles International Airport</p>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item" href="#">
                                                                                <span
                                                                                    class="fs-16 fw-medium text-dark dropdown-name">Orlando</span>
                                                                                <p>Orlando International Airport</p>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="form-item">
                                                                <label
                                                                    class="form-label fs-14 text-default mb-1">Departure</label>
                                                                <input type="text" class="form-control datetimepicker"
                                                                    value="21-10-2024">
                                                                <p class="fs-12 mb-0">Monday</p>
                                                            </div>
                                                            <div class="form-item round-drip">
                                                                <label
                                                                    class="form-label fs-14 text-default mb-1">Return</label>
                                                                <input type="text" class="form-control datetimepicker"
                                                                    value="23-10-2024">
                                                                <p class="fs-12 mb-0">Wednesday</p>
                                                            </div>
                                                            <div class="form-item dropdown">
                                                                <div data-bs-toggle="dropdown"
                                                                    data-bs-auto-close="outside" aria-expanded="false"
                                                                    role="menu">
                                                                    <label
                                                                        class="form-label fs-14 text-default mb-1">Travellers
                                                                        and cabin class</label>
                                                                    <div class="home-eight-title text-dark member-count">4 <span
                                                                            class="fw-normal fs-14">Persons</span></div>
                                                                    <p class="fs-12 mb-0"><span class="adult">1</span> Adult, <span class="class-name">Economy</span></p>
                                                                </div>
                                                                <div
                                                                    class="dropdown-menu dropdown-menu-end dropdown-xl">
                                                                    <div class="mb-3 home-eight-title text-dark">Select Travelers & Class</div>
                                                                    <div class="mb-3 border br-10 info-item pb-1">
                                                                        <div class="fs-16 fw-medium mb-2 text-dark">
                                                                            Travellers</div>
                                                                        <div class="dropdown-menu dropdown-menu-end dropdown-xl">
                                                                            <div class="mb-3 home-eight-title text-dark">Select Travelers & Class</div>
                                                                            <div class="mb-3 border br-10 info-item pb-1">
                                                                                <div class="fs-16 fw-medium mb-2 text-dark">
                                                                                    Travellers</div>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <div class="mb-3">
                                                                                            <label
                                                                                                class="form-label text-gray-9 mb-2">Adults
                                                                                                <span
                                                                                                    class="text-default fw-normal">(
                                                                                                    12+ Yrs )</span></label>
                                                                                            <div class="custom-increment">
                                                                                                <div class="input-group">
                                                                                                    <span
                                                                                                        class="input-group-btn float-start">
                                                                                                        <button type="button"
                                                                                                            class="quantity-left-minus btn btn-light btn-number"
                                                                                                            data-type="minus"
                                                                                                            data-field="">
                                                                                                            <span><i
                                                                                                                    class="isax isax-minus"></i></span>
                                                                                                        </button>
                                                                                                    </span>
                                                                                                    <input type="text"
                                                                                                        name="quantity"
                                                                                                        class=" input-number"
                                                                                                        value="1" data-type="adult">
                                                                                                    <span
                                                                                                        class="input-group-btn float-end">
                                                                                                        <button type="button"
                                                                                                            class="quantity-right-plus btn btn-light btn-number"
                                                                                                            data-type="plus"
                                                                                                            data-field="">
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
                                                                                            <label
                                                                                                class="form-label text-gray-9 mb-2">Childrens
                                                                                                <span
                                                                                                    class="text-default fw-normal">(
                                                                                                    2-12 Yrs )</span></label>
                                                                                            <div class="custom-increment">
                                                                                                <div class="input-group">
                                                                                                    <span
                                                                                                        class="input-group-btn float-start">
                                                                                                        <button type="button"
                                                                                                            class="quantity-left-minus btn btn-light btn-number"
                                                                                                            data-type="minus"
                                                                                                            data-field="">
                                                                                                            <span><i
                                                                                                                    class="isax isax-minus"></i></span>
                                                                                                        </button>
                                                                                                    </span>
                                                                                                    <input type="text"
                                                                                                        name="quantity"
                                                                                                        class=" input-number"
                                                                                                        value="1" data-type="children">
                                                                                                    <span
                                                                                                        class="input-group-btn float-end">
                                                                                                        <button type="button"
                                                                                                            class="quantity-right-plus btn btn-light btn-number"
                                                                                                            data-type="plus"
                                                                                                            data-field="">
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
                                                                                            <label
                                                                                                class="form-label text-gray-9 mb-2">Infants<span
                                                                                                    class="text-default fw-normal">(
                                                                                                    0-12 Yrs )</span></label>
                                                                                            <div class="custom-increment">
                                                                                                <div class="input-group">
                                                                                                    <span
                                                                                                        class="input-group-btn float-start">
                                                                                                        <button type="button"
                                                                                                            class="quantity-left-minus btn btn-light btn-number"
                                                                                                            data-type="minus"
                                                                                                            data-field="">
                                                                                                            <span><i
                                                                                                                    class="isax isax-minus"></i></span>
                                                                                                        </button>
                                                                                                    </span>
                                                                                                    <input type="text"
                                                                                                        name="quantity"
                                                                                                        class=" input-number"
                                                                                                        value="1"  data-type="infant">
                                                                                                    <span
                                                                                                        class="input-group-btn float-end">
                                                                                                        <button type="button"
                                                                                                            class="quantity-right-plus btn btn-light btn-number"
                                                                                                            data-type="plus"
                                                                                                            data-field="">
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
                                                                                <span
                                                                                    class="fs-16 fw-medium mb-2 text-dark">Travellers</span>
                                                                                <div
                                                                                    class="d-flex align-items-center flex-wrap">
                                                                                    <div class="form-check me-3 mb-3">
                                                                                        <input class="form-check-input"
                                                                                            type="radio" value="Economy"
                                                                                            name="cabin-class" id="economy"
                                                                                            checked>
                                                                                        <label class="form-check-label"
                                                                                            for="economy">
                                                                                            Economy
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="form-check me-3 mb-3">
                                                                                        <input class="form-check-input"
                                                                                            type="radio" value="Economy"
                                                                                            name="cabin-class"
                                                                                            id="premium-economy">
                                                                                        <label class="form-check-label"
                                                                                            for="premium-economy">
                                                                                            Premium Economy
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="form-check me-3 mb-3">
                                                                                        <input class="form-check-input"
                                                                                            type="radio" value="Business"
                                                                                            name="cabin-class" id="business2">
                                                                                        <label class="form-check-label"
                                                                                            for="business2">
                                                                                            Business
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="form-check mb-3">
                                                                                        <input class="form-check-input"
                                                                                            type="radio" value="First Class"
                                                                                            name="cabin-class" id="first-class">
                                                                                        <label class="form-check-label"
                                                                                            for="first-class">
                                                                                            First Class
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="d-flex justify-content-end">
                                                                                <a href="#"
                                                                                    class="btn btn-light btn-sm me-2">Cancel</a>
                                                                                <button type="button"
                                                                                    class="btn btn-primary btn-sm apply-btn">Apply</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3 border br-10 info-item pb-1">
                                                                        <span
                                                                            class="fs-16 fw-medium mb-2 text-dark">Travellers</span>
                                                                        <div
                                                                            class="d-flex align-items-center flex-wrap">
                                                                            <div class="form-check me-3 mb-3">
                                                                                <input class="form-check-input"
                                                                                    type="radio" value="Economy"
                                                                                    name="cabin-class" id="economy"
                                                                                    checked>
                                                                                <label class="form-check-label"
                                                                                    for="economy">
                                                                                    Economy
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check me-3 mb-3">
                                                                                <input class="form-check-input"
                                                                                    type="radio" value="Economy"
                                                                                    name="cabin-class"
                                                                                    id="premium-economy">
                                                                                <label class="form-check-label"
                                                                                    for="premium-economy">
                                                                                    Premium Economy
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check me-3 mb-3">
                                                                                <input class="form-check-input"
                                                                                    type="radio" value="Business"
                                                                                    name="cabin-class" id="business2">
                                                                                <label class="form-check-label"
                                                                                    for="business2">
                                                                                    Business
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check mb-3">
                                                                                <input class="form-check-input"
                                                                                    type="radio" value="First Class"
                                                                                    name="cabin-class" id="first-class">
                                                                                <label class="form-check-label"
                                                                                    for="first-class">
                                                                                    First Class
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex justify-content-end">
                                                                        <a href="#"
                                                                            class="btn btn-light btn-sm me-2">Cancel</a>
                                                                        <button type="submit"
                                                                            class="btn btn-primary btn-sm">Apply</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="submit"
                                                            class="btn btn-primary search-btn rounded">Search</button>
                                                    </div>
                                                </div>
                                                <div class="multi-trip">
                                                    <div class="d-lg-flex">
                                                        <div class="d-flex  form-info">
                                                            <div class="form-item change-drop booking-dropdown dropdown">
                                                                <div data-bs-toggle="dropdown"
                                                                    data-bs-auto-close="outside" aria-expanded="false"
                                                                    role="menu">
                                                                    <label
                                                                        class="form-label fs-14 text-default mb-1">From</label>
                                                                    <input type="text" class="form-control value-input"
                                                                        value="Newyork">
                                                                    <p class="fs-12 mb-0">Ken International Airport</p>
                                                                </div>
                                                                <div class="dropdown-menu dropdown-md p-0">
                                                                    <div class="input-search p-3 border-bottom">
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Search Location">
                                                                            <span
                                                                                class="input-group-text px-2 border-start-0"><i
                                                                                    class="isax isax-search-normal"></i></span>
                                                                        </div>
                                                                    </div>
                                                                    <ul>
                                                                        <li class="border-bottom">
                                                                            <a class="dropdown-item" href="#">
                                                                                <div class="fs-16 fw-medium text-dark dropdown-name">Newyork</div>
                                                                                <p>Ken International Airport</p>
                                                                            </a>
                                                                        </li>
                                                                        <li class="border-bottom">
                                                                            <a class="dropdown-item" href="#">
                                                                                <div class="fs-16 fw-medium text-dark dropdown-name">Boston</div>
                                                                                <p>Boston Logan International Airport
                                                                                </p>
                                                                            </a>
                                                                        </li>
                                                                        <li class="border-bottom">
                                                                            <a class="dropdown-item" href="#">
                                                                                <div class="fs-16 fw-medium text-dark dropdown-name">Northern Virginia</div>
                                                                                <p>Dulles International Airport</p>
                                                                            </a>
                                                                        </li>
                                                                        <li class="border-bottom">
                                                                            <a class="dropdown-item" href="#">
                                                                                <div class="fs-16 fw-medium text-dark dropdown-name">Los Angeles</div>
                                                                                <p>Los Angeles International Airport</p>
                                                                            </a>
                                                                        </li>
                                                                        <li class="border-bottom">
                                                                            <a class="dropdown-item" href="#">
                                                                                <div class="fs-16 fw-medium text-dark dropdown-name">Orlando</div>
                                                                                <p>Orlando International Airport</p>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="form-item change-drop booking-dropdown dropdown ps-2 ps-sm-3">
                                                                <div data-bs-toggle="dropdown"
                                                                    data-bs-auto-close="outside" aria-expanded="false"
                                                                    role="menu">
                                                                    <label
                                                                        class="form-label fs-14 text-default mb-1">To</label>
                                                                    <input type="text" class="form-control value-input"
                                                                        value="Las Vegas">
                                                                    <p class="fs-12 mb-0">Martini International Airport
                                                                    </p>
                                                                    <span
                                                                        class="way-icon badge badge-primary rounded-pill translate-middle">
                                                                        <i
                                                                            class="fa-solid fa-arrow-right-arrow-left"></i>
                                                                    </span>
                                                                </div>
                                                                <div class="dropdown-menu dropdown-md p-0">
                                                                    <div class="input-search p-3 border-bottom">
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Search Location">
                                                                            <span
                                                                                class="input-group-text px-2 border-start-0"><i
                                                                                    class="isax isax-search-normal"></i></span>
                                                                        </div>
                                                                    </div>
                                                                    <ul>
                                                                        <li class="border-bottom">
                                                                            <a class="dropdown-item" href="#">
                                                                                <div class="fs-16 fw-medium text-dark dropdown-name">Newyork</div>
                                                                                <p>Ken International Airport</p>
                                                                            </a>
                                                                        </li>
                                                                        <li class="border-bottom">
                                                                            <a class="dropdown-item" href="#">
                                                                                <div class="fs-16 fw-medium text-dark dropdown-name">Boston</div>
                                                                                <p>Boston Logan International Airport
                                                                                </p>
                                                                            </a>
                                                                        </li>
                                                                        <li class="border-bottom">
                                                                            <a class="dropdown-item" href="#">
                                                                                <div class="fs-16 fw-medium text-dark dropdown-name">Northern Virginia</div>
                                                                                <p>Dulles International Airport</p>
                                                                            </a>
                                                                        </li>
                                                                        <li class="border-bottom">
                                                                            <a class="dropdown-item" href="#">
                                                                                <div class="fs-16 fw-medium text-dark dropdown-name">Los Angeles</div>
                                                                                <p>Los Angeles International Airport</p>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item" href="#">
                                                                                <div class="fs-16 fw-medium text-dark dropdown-name">Orlando</div>
                                                                                <p>Orlando International Airport</p>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="form-item">
                                                                <label
                                                                    class="form-label fs-14 text-default mb-1">Departure</label>
                                                                <input type="text" class="form-control datetimepicker"
                                                                    value="21-10-2024">
                                                                <p class="fs-12 mb-0">Monday</p>
                                                            </div>
                                                        </div>
                                                        <button type="submit"
                                                            class="btn btn-primary search-btn rounded">Search</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="Hotels">
                                            <form action="{{url('hotel-grid')}}">
                                                <div class="fw-medium fs-16 mb-2 text-dark">Book Hotel - Villas,
                                                    Apartments & more.</div>
                                                <div class="d-lg-flex">
                                                    <div class="d-flex  form-info">
                                                        <div class="form-item booking-dropdown dropdown">
                                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                                aria-expanded="false" role="menu">
                                                                <label class="form-label fs-14 text-default mb-1">City,
                                                                    Property name or Location</label>
                                                                <input type="text" class="form-control value-input" value="Newyork">
                                                                <p class="fs-12 mb-0 subname-result">USA</p>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-custom dropdown-md p-0">
                                                                <div class="input-search p-3 border-bottom">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Search for City, Property name or Location">
                                                                        <span
                                                                            class="input-group-text px-2 border-start-0"><i
                                                                                class="isax isax-search-normal"></i></span>
                                                                    </div>
                                                                </div>
                                                                <ul>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark dropdown-name">USA
                                                                            </div>
                                                                            <p class="dropdown-sub-name">2000 Properties</p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark dropdown-name">Japan
                                                                            </div>
                                                                            <p class="dropdown-sub-name">3000 Properties</p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark dropdown-name">Singapore</div>
                                                                            <p class="dropdown-sub-name">8000 Properties</p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark dropdown-name">Russia</div>
                                                                            <p class="dropdown-sub-name">8000 Properties</p>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark dropdown-name">Germany</div>
                                                                            <p class="dropdown-sub-name">2000 Properties</p>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="form-item">
                                                            <label class="form-label fs-14 text-default mb-1">Check
                                                                In</label>
                                                            <input type="text" class="form-control check-in"
                                                                value="21-10-2026">
                                                            <p class="fs-12 mb-0">Monday</p>
                                                        </div>
                                                        <div class="form-item">
                                                            <label class="form-label fs-14 text-default mb-1">Check
                                                                Out</label>
                                                            <input type="text" class="form-control check-out"
                                                                value="21-10-2026">
                                                            <p class="fs-12 mb-0">Monday</p>
                                                        </div>
                                                        <div class="form-item dropdown">
                                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                                aria-expanded="false" role="menu">
                                                                <label
                                                                    class="form-label fs-14 text-default mb-1">Guests</label>
                                                                <div class="home-eight-title text-dark member-count">4 <span
                                                                        class="fw-normal fs-14">Persons</span></div>
                                                                <p class="fs-12 mb-0"><span class="adult">4</span> Adult, <span class="room">2</span> Rooms</p>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-end dropdown-xl">
                                                                <div class="mb-3 home-eight-title text-dark">Select
                                                                    Travelers & Class</div>
                                                                <div class="mb-3 border br-10 info-item pb-1">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div
                                                                                class="mb-3 d-flex align-items-center justify-content-between">
                                                                                <label
                                                                                    class="form-label text-gray-9 mb-2">Rooms</label>
                                                                                <div class="custom-increment">
                                                                                    <div class="input-group">
                                                                                        <span
                                                                                            class="input-group-btn float-start">
                                                                                            <button type="button"
                                                                                                class="quantity-left-minus btn btn-light btn-number"
                                                                                                data-type="minus"
                                                                                                data-field="">
                                                                                                <span><i
                                                                                                        class="isax isax-minus"></i></span>
                                                                                            </button>
                                                                                        </span>
                                                                                        <input type="text"
                                                                                            name="quantity"
                                                                                            class=" input-number"
                                                                                            value="1" data-type="room">
                                                                                        <span
                                                                                            class="input-group-btn float-end">
                                                                                            <button type="button"
                                                                                                class="quantity-right-plus btn btn-light btn-number"
                                                                                                data-type="plus"
                                                                                                data-field="">
                                                                                                <span><i
                                                                                                        class="isax isax-add"></i></span>
                                                                                            </button>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div
                                                                                class="mb-3 d-flex align-items-center justify-content-between">
                                                                                <label
                                                                                    class="form-label text-gray-9 mb-2">Adults</label>
                                                                                <div class="custom-increment">
                                                                                    <div class="input-group">
                                                                                        <span
                                                                                            class="input-group-btn float-start">
                                                                                            <button type="button"
                                                                                                class="quantity-left-minus btn btn-light btn-number"
                                                                                                data-type="minus"
                                                                                                data-field="">
                                                                                                <span><i
                                                                                                        class="isax isax-minus"></i></span>
                                                                                            </button>
                                                                                        </span>
                                                                                        <input type="text"
                                                                                            name="quantity"
                                                                                            class=" input-number"
                                                                                            value="1" data-type="adult">
                                                                                        <span
                                                                                            class="input-group-btn float-end">
                                                                                            <button type="button"
                                                                                                class="quantity-right-plus btn btn-light btn-number"
                                                                                                data-type="plus"
                                                                                                data-field="">
                                                                                                <span><i
                                                                                                        class="isax isax-add"></i></span>
                                                                                            </button>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div
                                                                                class="mb-3 d-flex align-items-center justify-content-between">
                                                                                <label
                                                                                    class="form-label text-gray-9 mb-2">Children
                                                                                    <span
                                                                                        class="text-default fw-normal">(
                                                                                        2-12 Yrs )</span></label>
                                                                                <div class="custom-increment">
                                                                                    <div class="input-group">
                                                                                        <span
                                                                                            class="input-group-btn float-start">
                                                                                            <button type="button"
                                                                                                class="quantity-left-minus btn btn-light btn-number"
                                                                                                data-type="minus"
                                                                                                data-field="">
                                                                                                <span><i
                                                                                                        class="isax isax-minus"></i></span>
                                                                                            </button>
                                                                                        </span>
                                                                                        <input type="text"
                                                                                            name="quantity"
                                                                                            class=" input-number"
                                                                                            value="1" data-type="children">
                                                                                        <span
                                                                                            class="input-group-btn float-end">
                                                                                            <button type="button"
                                                                                                class="quantity-right-plus btn btn-light btn-number"
                                                                                                data-type="plus"
                                                                                                data-field="">
                                                                                                <span><i class="isax isax-add"></i></span>
                                                                                            </button>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div
                                                                                class="mb-3 d-flex align-items-center justify-content-between">
                                                                                <label
                                                                                    class="form-label text-gray-9 mb-2">Infants
                                                                                    <span
                                                                                        class="text-default fw-normal">(
                                                                                        0-12 Yrs )</span></label>
                                                                                <div class="custom-increment">
                                                                                    <div class="input-group">
                                                                                        <span
                                                                                            class="input-group-btn float-start">
                                                                                            <button type="button"
                                                                                                class="quantity-left-minus btn btn-light btn-number"
                                                                                                data-type="minus"
                                                                                                data-field="">
                                                                                                <span><i
                                                                                                        class="isax isax-minus"></i></span>
                                                                                            </button>
                                                                                        </span>
                                                                                        <input type="text"
                                                                                            name="quantity"
                                                                                            class=" input-number"
                                                                                            value="1" data-type="infant">
                                                                                        <span
                                                                                            class="input-group-btn float-end">
                                                                                            <button type="button"
                                                                                                class="quantity-right-plus btn btn-light btn-number"
                                                                                                data-type="plus"
                                                                                                data-field="">
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
                                                                    <div class="fs-16 fw-medium mb-2 text-dark">
                                                                        Travellers</div>
                                                                    <div class="d-flex align-items-center flex-wrap">
                                                                        <div class="form-check me-3 mb-3">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="room" id="room01" checked>
                                                                            <label class="form-check-label"
                                                                                for="room01">
                                                                                Single
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check me-3 mb-3">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="room" id="room02">
                                                                            <label class="form-check-label"
                                                                                for="room02">
                                                                                Double
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check me-3 mb-3">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="room" id="room03">
                                                                            <label class="form-check-label"
                                                                                for="room03">
                                                                                Delux
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check mb-3">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="room" id="room04">
                                                                            <label class="form-check-label"
                                                                                for="room04">
                                                                                Suite
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 border br-10 info-item pb-1">
                                                                    <div class="fs-16 fw-medium mb-2 text-dark">Property
                                                                        Type</div>
                                                                    <div class="d-flex align-items-center flex-wrap">
                                                                        <div class="form-check me-3 mb-3">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="property" id="property01" checked>
                                                                            <label class="form-check-label"
                                                                                for="property01">
                                                                                Villa
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check me-3 mb-3">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="property" id="property02">
                                                                            <label class="form-check-label"
                                                                                for="property02">
                                                                                Condo
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check me-3 mb-3">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="property" id="property03">
                                                                            <label class="form-check-label"
                                                                                for="property03">
                                                                                Cabin
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check mb-3">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="property" id="property04">
                                                                            <label class="form-check-label"
                                                                                for="property04">
                                                                                Apartments
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex justify-content-end">
                                                                    <a href="#"
                                                                        class="btn btn-light btn-sm me-2">Cancel</a>
                                                                    <button type="button"
                                                                        class="btn btn-primary btn-sm apply-btn">Apply</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-item booking-dropdown dropdown">
                                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                                aria-expanded="false" role="menu">
                                                                <label class="form-label fs-14 text-default mb-1">Price
                                                                    per Night</label>
                                                                <input type="text" class="form-control value-input"
                                                                    value="$1000 - $15000">
                                                                <p class="fs-12 mb-0">20 Offers Available</p>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-md p-0">
                                                                <ul>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark dropdown-name">$500 - $2000</div>
                                                                            <p>Upto 65% offers</p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark dropdown-name">Upto 65% offers</div>
                                                                            <p>Upto 40% offers</p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark dropdown-name">$5000 - $8000</div>
                                                                            <p>Upto 35% offers</p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark dropdown-name">$9000 - $11000</div>
                                                                            <p>Upto 20% offers</p>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark dropdown-name">$11000 - $15000</div>
                                                                            <p>Upto 10% offers</p>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit"
                                                        class="btn btn-primary search-btn rounded">Search</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="Cars">
                                            <form action="{{url('car-grid')}}">
                                                <div
                                                    class="d-flex align-items-center justify-content-between flex-wrap mb-2">
                                                    <div class="d-flex align-items-center flex-wrap">
                                                        <div class="form-check d-flex align-items-center me-3 mb-2">
                                                            <input class="form-check-input mt-0" type="radio"
                                                                name="drop" id="same-drop" value="same-drop" checked>
                                                            <label class="form-check-label fs-14 ms-2" for="same-drop">
                                                                Same drop-off
                                                            </label>
                                                        </div>
                                                        <div class="form-check d-flex align-items-center me-3 mb-2">
                                                            <input class="form-check-input mt-0" type="radio"
                                                                name="drop" id="different-drop" value="different-drop">
                                                            <label class="form-check-label fs-14 ms-2"
                                                                for="different-drop">
                                                                Different Drop off
                                                            </label>
                                                        </div>
                                                        <div class="form-check d-flex align-items-center me-3 mb-2">
                                                            <input class="form-check-input mt-0" type="radio"
                                                                name="drop" id="airport" value="airport">
                                                            <label class="form-check-label fs-14 ms-2" for="airport">
                                                                Airport
                                                            </label>
                                                        </div>
                                                        <div class="form-check d-flex align-items-center me-3 mb-2">
                                                            <input class="form-check-input mt-0" type="radio"
                                                                name="drop" id="hourly-drop" value="hourly-drop">
                                                            <label class="form-check-label fs-14 ms-2"
                                                                for="hourly-drop">
                                                                Hourly Package
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="fw-medium fs-16 mb-2 text-white">Book Car for rental
                                                    </div>
                                                </div>
                                                <div class="d-lg-flex">
                                                    <div class="d-flex  form-info">
                                                        <div class="form-item change-drop booking-dropdown dropdown from-location">
                                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                                aria-expanded="false" role="menu">
                                                                <label
                                                                    class="form-label fs-14 text-default mb-1">From</label>
                                                                <input type="text" class="form-control value-input" value="Newyork">
                                                                <p class="fs-12 mb-0">USA</p>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-md p-0">
                                                                <div class="input-search p-3 border-bottom">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Search for Cars">
                                                                        <span
                                                                            class="input-group-text px-2 border-start-0"><i
                                                                                class="isax isax-search-normal"></i></span>
                                                                    </div>
                                                                </div>
                                                                <ul>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark dropdown-name">USA
                                                                            </div>
                                                                            <p>2000 Cars</p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark dropdown-name">Japan
                                                                            </div>
                                                                            <p>3000 Cars</p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark dropdown-name">Singapore</div>
                                                                            <p>8000 Cars</p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark dropdown-name">Russia</div>
                                                                            <p>8000 Cars</p>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark dropdown-name">Germany</div>
                                                                            <p>6000 Cars</p>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="form-item change-drop dropdown pickup-airport">
                                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                                aria-expanded="false" role="menu">
                                                                <label
                                                                    class="form-label fs-14 text-default mb-1">From</label>
                                                                <input type="text" class="form-control value-input" value="Newyork">
                                                                <p class="fs-12 mb-0">Ken International Airport</p>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-md p-0">
                                                                <div class="input-search p-3 border-bottom">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control value-input"
                                                                            placeholder="Search for Airport">
                                                                        <span
                                                                            class="input-group-text px-2 border-start-0"><i
                                                                                class="isax isax-search-normal"></i></span>
                                                                    </div>
                                                                </div>
                                                                <ul>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark">Hartsfield-Jackson Atlanta International
                                                                            </div>
                                                                            <p>USA</p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark">Dallas/Fort Worth International</div>
                                                                            <p>USA</p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark">London Heathrow</div>
                                                                            <p>UK</p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark">SeoulIncheon</div>
                                                                            <p>South Korea</p>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark">Singapore Changi International</div>
                                                                            <p>Singapore</p>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="form-item change-drop booking-dropdown dropdown to-location ps-2 ps-sm-3">
                                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                                aria-expanded="false" role="menu">
                                                                <label
                                                                    class="form-label fs-14 text-default mb-1">To</label>
                                                                <input type="text" class="form-control value-input" value="Newyork">
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
                                                                            placeholder="Search for Cars">
                                                                        <span
                                                                            class="input-group-text px-2 border-start-0"><i
                                                                                class="isax isax-search-normal"></i></span>
                                                                    </div>
                                                                </div>
                                                                <ul>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark dropdown-name">USA</div>
                                                                            <p>2000 Cars</p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark dropdown-name">Japan</div>
                                                                            <p>3000 Cars</p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark dropdown-name">Singapore</div>
                                                                            <p>8000 Cars</p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark dropdown-name">Russia</div>
                                                                            <p>8000 Cars</p>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark dropdown-name">Germany</div>
                                                                            <p>6000 Cars</p>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="form-item">
                                                            <label
                                                                class="form-label fs-14 text-default mb-1">Departure</label>
                                                            <input type="text" class="form-control datetimepicker"
                                                                value="21-10-2024">
                                                            <p class="fs-12 mb-0">Monday</p>
                                                        </div>
                                                        <div class="form-item return-drop">
                                                            <label
                                                                class="form-label fs-14 text-default mb-1">Return</label>
                                                            <input type="text" class="form-control datetimepicker"
                                                                value="23-10-2024">
                                                            <p class="fs-12 mb-0">Wednesday</p>
                                                        </div>
                                                        <div class="form-item">
                                                            <label class="form-label fs-14 text-default mb-1">Pickup
                                                                Time</label>
                                                            <input type="text" class="form-control timepicker"
                                                                value="11:45 PM">
                                                        </div>
                                                        <div class="form-item dropoff-time">
                                                            <label class="form-label fs-14 text-default mb-1">Dropoff
                                                                Time</label>
                                                            <input type="text" class="form-control timepicker"
                                                                value="11:45 PM">
                                                        </div>
                                                        <div class="form-item hourly-time">
                                                            <label
                                                                class="form-label fs-14 text-default mb-1">Hours</label>
                                                            <div class="home-eight-title text-dark">02 Hrs 10 Kms</div>
                                                        </div>
                                                    </div>
                                                    <button type="submit"
                                                        class="btn btn-primary search-btn rounded">Search</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade active show" id="Cruise">
                                            <form action="{{url('cruise-grid')}}">
                                                <div
                                                    class="d-flex align-items-center justify-content-between flex-wrap mb-2">
                                                    <div class="fw-medium fs-16 mb-2 text-dark">Search For Cruise</div>
                                                </div>
                                                <div class="d-lg-flex">
                                                    <div class="d-flex  form-info">
                                                        <div class="form-item booking-dropdown dropdown">
                                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                                aria-expanded="false" role="menu">
                                                                <label
                                                                    class="form-label fs-14 text-default mb-1">Destination</label>
                                                                <input type="text" class="form-control value-input" value="Newyork">
                                                                <p class="fs-12 mb-0">USA</p>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-md p-0">
                                                                <div class="input-search p-3 border-bottom">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Search Location">
                                                                        <span
                                                                            class="input-group-text px-2 border-start-0"><i
                                                                                class="isax isax-search-normal"></i></span>
                                                                    </div>
                                                                </div>
                                                                <ul>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark dropdown-name">Newyork</div>
                                                                            <p>Ken International Airport</p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark dropdown-name">Boston</div>
                                                                            <p>Boston Logan International Airport</p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark dropdown-name">Northern Virginia</div>
                                                                            <p>Dulles International Airport</p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark dropdown-name">Los Angeles</div>
                                                                            <p>Los Angeles International Airport</p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark dropdown-name">Orlando</div>
                                                                            <p>Orlando International Airport</p>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="form-item">
                                                            <label class="form-label fs-14 text-default mb-1">Start
                                                                Date</label>
                                                            <input type="text" class="form-control check-in"
                                                                value="21-10-2026">
                                                            <p class="fs-12 mb-0">Monday</p>
                                                        </div>
                                                        <div class="form-item">
                                                            <label class="form-label fs-14 text-default mb-1">End
                                                                Date</label>
                                                            <input type="text" class="form-control check-out"
                                                                value="21-10-2026">
                                                            <p class="fs-12 mb-0">Monday</p>
                                                        </div>
                                                        <!-- Add a hidden input or just use one of the inputs to trigger the daterangepicker -->
                                                        <input type="text" class="date-range d-none">
                                                        <div class="form-item dropdown">
                                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                                aria-expanded="false" role="menu">
                                                                <label
                                                                    class="form-label fs-14 text-default mb-1">Travellers
                                                                    & Cabin </label>
                                                                <div class="home-eight-title text-dark member-count">4 <span
                                                                        class="fw-normal fs-14">Persons</span></div>
                                                                <p class="fs-12 mb-0"><span class="adult">4</span> Adult</p>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-end dropdown-xl">
                                                                <div class="mb-3 home-eight-title text-dark">Select
                                                                    Travelers & Class</div>
                                                                <div class="mb-3 border br-10 info-item pb-1">
                                                                    <div class="fs-16 fw-medium mb-2 text-dark">
                                                                        Travellers</div>
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <div class="mb-3">
                                                                                <label
                                                                                    class="form-label text-gray-9 mb-2">Adults
                                                                                    <span
                                                                                        class="text-default fw-normal">(
                                                                                        12+ Yrs )</span></label>
                                                                                <div class="custom-increment">
                                                                                    <div class="input-group">
                                                                                        <span
                                                                                            class="input-group-btn float-start">
                                                                                            <button type="button"
                                                                                                class="quantity-left-minus btn btn-light btn-number"
                                                                                                data-type="minus"
                                                                                                data-field="">
                                                                                                <span><i
                                                                                                        class="isax isax-minus"></i></span>
                                                                                            </button>
                                                                                        </span>
                                                                                        <input type="text"
                                                                                            name="quantity"
                                                                                            class=" input-number"
                                                                                            value="1" data-type="adult">
                                                                                        <span
                                                                                            class="input-group-btn float-end">
                                                                                            <button type="button"
                                                                                                class="quantity-right-plus btn btn-light btn-number"
                                                                                                data-type="plus"
                                                                                                data-field="">
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
                                                                                <label
                                                                                    class="form-label text-gray-9 mb-2">Childrens
                                                                                    <span
                                                                                        class="text-default fw-normal">(
                                                                                        2-12 Yrs )</span></label>
                                                                                <div class="custom-increment">
                                                                                    <div class="input-group">
                                                                                        <span
                                                                                            class="input-group-btn float-start">
                                                                                            <button type="button"
                                                                                                class="quantity-left-minus btn btn-light btn-number"
                                                                                                data-type="minus"
                                                                                                data-field="">
                                                                                                <span><i
                                                                                                        class="isax isax-minus"></i></span>
                                                                                            </button>
                                                                                        </span>
                                                                                        <input type="text"
                                                                                            name="quantity"
                                                                                            class=" input-number"
                                                                                            value="1" data-type="children">
                                                                                        <span
                                                                                            class="input-group-btn float-end">
                                                                                            <button type="button"
                                                                                                class="quantity-right-plus btn btn-light btn-number"
                                                                                                data-type="plus"
                                                                                                data-field="">
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
                                                                                <label
                                                                                    class="form-label text-gray-9 mb-2">Infants
                                                                                    <span
                                                                                        class="text-default fw-normal">(
                                                                                        0-12 Yrs )</span></label>
                                                                                <div class="custom-increment">
                                                                                    <div class="input-group">
                                                                                        <span
                                                                                            class="input-group-btn float-start">
                                                                                            <button type="button"
                                                                                                class="quantity-left-minus btn btn-light btn-number"
                                                                                                data-type="minus"
                                                                                                data-field="">
                                                                                                <span><i
                                                                                                        class="isax isax-minus"></i></span>
                                                                                            </button>
                                                                                        </span>
                                                                                        <input type="text"
                                                                                            name="quantity"
                                                                                            class=" input-number"
                                                                                            value="1" data-type="infant">
                                                                                        <span
                                                                                            class="input-group-btn float-end">
                                                                                            <button type="button"
                                                                                                class="quantity-right-plus btn btn-light btn-number"
                                                                                                data-type="plus"
                                                                                                data-field="">
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
                                                                    <div class="fs-16 fw-medium mb-2 text-dark">Select
                                                                        Cabin</div>
                                                                    <div class="d-flex align-items-center flex-wrap">
                                                                        <div class="form-check me-3 mb-3">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="cabin" id="cabin1" checked>
                                                                            <label class="form-check-label"
                                                                                for="cabin1">
                                                                                Solo cabins
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check me-3 mb-3">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="cabin" id="cabin2">
                                                                            <label class="form-check-label"
                                                                                for="cabin2">
                                                                                Balcony
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check me-3 mb-3">
                                                                            <input class="form-check-input" type="radio"
                                                                                value="Business" name="cabin"
                                                                                id="cabin3">
                                                                            <label class="form-check-label"
                                                                                for="cabin3">
                                                                                Oceanview
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check mb-3">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="cabin" id="cabin4">
                                                                            <label class="form-check-label"
                                                                                for="cabin4">
                                                                                Balcony rooms
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex justify-content-end">
                                                                    <a href="#"
                                                                        class="btn btn-light btn-sm me-2">Cancel</a>
                                                                    <button type="button"
                                                                        class="btn btn-primary btn-sm apply-btn">Apply</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit"
                                                        class="btn btn-primary search-btn rounded">Search</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="Tour">
                                            <form action="{{url('tour-grid')}}">
                                                <div
                                                    class="d-flex align-items-center justify-content-between flex-wrap mb-2">
                                                    <div class="fw-medium fs-16 mb-2 text-dark">Search holiday packages
                                                        & trips</div>
                                                </div>
                                                <div class="d-lg-flex">
                                                    <div class="d-flex  form-info">
                                                        <div class="form-item booking-dropdown dropdown">
                                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                                aria-expanded="false" role="menu">
                                                                <label class="form-label fs-14 text-default mb-1">Where
                                                                    would like to go?</label>
                                                                <input type="text" class="form-control value-input" value="Newyork">
                                                                <p class="fs-12 mb-0">USA</p>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-md p-0">
                                                                <div class="input-search p-3 border-bottom">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Search for City, Property name or Location">
                                                                        <span
                                                                            class="input-group-text px-2 border-start-0"><i
                                                                                class="isax isax-search-normal"></i></span>
                                                                    </div>
                                                                </div>
                                                                <ul>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark dropdown-name">USA</div>
                                                                            <p>200 Places</p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark dropdown-name">Japan</div>
                                                                            <p>300 Places</p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark dropdown-name">Singapore</div>
                                                                            <p>80 Places</p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark dropdown-name">Russia</div>
                                                                            <p>500 Places</p>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark dropdown-name">Germany</div>
                                                                            <p>150 Places</p>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="form-item">
                                                            <label
                                                                class="form-label fs-14 text-default mb-1">Dates</label>
                                                            <input type="text" class="form-control check-in"
                                                                value="21-10-2026">
                                                            <p class="fs-12 mb-0">Monday</p>
                                                        </div>
                                                        <div class="form-item">
                                                            <label class="form-label fs-14 text-default mb-1">Check
                                                                Out</label>
                                                            <input type="text" class="form-control check-out"
                                                                value="21-10-2026">
                                                            <p class="fs-12 mb-0">Wednesday</p>
                                                        </div>
                                                        <div class="form-item dropdown">
                                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                                aria-expanded="false" role="menu">
                                                                <label
                                                                    class="form-label fs-14 text-default mb-1">Travellers</label>
                                                                <div class="home-eight-title text-dark member-count">4 <span
                                                                        class="fw-normal fs-14">Persons</span></div>
                                                                <p class="fs-12 mb-0 adult">2 Adult</p>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-end dropdown-xl">
                                                                <div class="mb-3 home-eight-title text-dark">Select
                                                                    Travelers</div>
                                                                <div class="mb-3 border br-10 info-item pb-1">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div
                                                                                class="mb-3 d-flex align-items-center justify-content-between">
                                                                                <label
                                                                                    class="form-label text-gray-9 mb-2">Adult</label>
                                                                                <div class="custom-increment">
                                                                                    <div class="input-group">
                                                                                        <span
                                                                                            class="input-group-btn float-start">
                                                                                            <button type="button"
                                                                                                class="quantity-left-minus btn btn-light btn-number"
                                                                                                data-type="minus"
                                                                                                data-field="">
                                                                                                <span><i
                                                                                                        class="isax isax-minus"></i></span>
                                                                                            </button>
                                                                                        </span>
                                                                                        <input type="text"
                                                                                            name="quantity"
                                                                                            class=" input-number"
                                                                                            value="1" data-type="adult">
                                                                                        <span
                                                                                            class="input-group-btn float-end">
                                                                                            <button type="button"
                                                                                                class="quantity-right-plus btn btn-light btn-number"
                                                                                                data-type="plus"
                                                                                                data-field="">
                                                                                                <span><i
                                                                                                        class="isax isax-add"></i></span>
                                                                                            </button>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="mb-3 d-flex align-items-center justify-content-between">
                                                                                <label
                                                                                    class="form-label text-gray-9 mb-2">Childrens
                                                                                    <span
                                                                                        class="text-default fw-normal">(
                                                                                        12+ Yrs )</span></label>
                                                                                <div class="custom-increment">
                                                                                    <div class="input-group">
                                                                                        <span
                                                                                            class="input-group-btn float-start">
                                                                                            <button type="button"
                                                                                                class="quantity-left-minus btn btn-light btn-number"
                                                                                                data-type="minus"
                                                                                                data-field="">
                                                                                                <span><i
                                                                                                        class="isax isax-minus"></i></span>
                                                                                            </button>
                                                                                        </span>
                                                                                        <input type="text"
                                                                                            name="quantity"
                                                                                            class=" input-number"
                                                                                            value="1" data-type="children">
                                                                                        <span
                                                                                            class="input-group-btn float-end">
                                                                                            <button type="button"
                                                                                                class="quantity-right-plus btn btn-light btn-number"
                                                                                                data-type="plus"
                                                                                                data-field="">
                                                                                                <span><i
                                                                                                        class="isax isax-add"></i></span>
                                                                                            </button>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="mb-3 d-flex align-items-center justify-content-between">
                                                                                <label
                                                                                    class="form-label text-gray-9 mb-2">Infants
                                                                                    <span
                                                                                        class="text-default fw-normal">(
                                                                                        12+ Yrs )</span></label>
                                                                                <div class="custom-increment">
                                                                                    <div class="input-group">
                                                                                        <span
                                                                                            class="input-group-btn float-start">
                                                                                            <button type="button"
                                                                                                class="quantity-left-minus btn btn-light btn-number"
                                                                                                data-type="minus"
                                                                                                data-field="">
                                                                                                <span><i
                                                                                                        class="isax isax-minus"></i></span>
                                                                                            </button>
                                                                                        </span>
                                                                                        <input type="text"
                                                                                            name="quantity"
                                                                                            class=" input-number"
                                                                                            value="1" data-type="infant">
                                                                                        <span
                                                                                            class="input-group-btn float-end">
                                                                                            <button type="button"
                                                                                                class="quantity-right-plus btn btn-light btn-number"
                                                                                                data-type="plus"
                                                                                                data-field="">
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
                                                                <div class="d-flex justify-content-end">
                                                                    <a href="#"
                                                                        class="btn btn-light btn-sm me-2">Cancel</a>
                                                                    <button type="button"
                                                                        class="btn btn-primary btn-sm apply-btn">Apply</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit"
                                                        class="btn btn-primary search-btn rounded">Search</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="Bus">
                                            <form action="#">
                                                <div
                                                    class="d-flex align-items-center justify-content-between flex-wrap mb-2">
                                                    <div class="d-flex align-items-center">
                                                        <div class="form-check d-flex align-items-center me-3 mb-2">
                                                            <input class="form-check-input mt-0" type="radio"
                                                                name="tripType" id="oneways" value="oneway" checked>
                                                            <label class="form-check-label fs-14 ms-2"
                                                                for="oneways">Oneway</label>
                                                        </div>

                                                        <div class="form-check d-flex align-items-center me-3 mb-2">
                                                            <input class="form-check-input mt-0" type="radio"
                                                                name="tripType" id="roundedtrip" value="roundtrip">
                                                            <label class="form-check-label fs-14 ms-2"
                                                                for="roundedtrip">Round Trip</label>
                                                        </div>
                                                    </div>
                                                    <div class="fw-medium fs-16 mb-2 text-dark">Low cost Buses in One
                                                        simple search</div>
                                                </div>
                                                <div class="normal-trip">
                                                    <div class="d-lg-flex">
                                                        <div class="d-flex  form-info">
                                                            <div class="form-item change-drop booking-dropdown dropdown">
                                                                <div data-bs-toggle="dropdown"
                                                                    data-bs-auto-close="outside" aria-expanded="false"
                                                                    role="menu">
                                                                    <label
                                                                        class="form-label fs-14 text-default mb-1">From</label>
                                                                    <input type="text" class="form-control value-input"
                                                                        value="Newyork">
                                                                    <p class="fs-12 mb-0">USA</p>
                                                                </div>
                                                                <div class="dropdown-menu dropdown-md p-0">
                                                                    <div class="input-search p-3 border-bottom">
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Search Location">
                                                                            <span
                                                                                class="input-group-text px-2 border-start-0"><i
                                                                                    class="isax isax-search-normal"></i></span>
                                                                        </div>
                                                                    </div>
                                                                    <ul>
                                                                        <li class="border-bottom">
                                                                            <a class="dropdown-item" href="#">
                                                                                <div class="fs-16 fw-medium text-dark dropdown-name">Newyork</div>
                                                                                <p>USA</p>
                                                                            </a>
                                                                        </li>
                                                                        <li class="border-bottom">
                                                                            <a class="dropdown-item" href="#">
                                                                                <div class="fs-16 fw-medium text-dark dropdown-name">Boston</div>
                                                                                <p>Spain</p>
                                                                            </a>
                                                                        </li>
                                                                        <li class="border-bottom">
                                                                            <a class="dropdown-item" href="#">
                                                                                <div class="fs-16 fw-medium text-dark dropdown-name">Northern Virginia</div>
                                                                                <p>USA</p>
                                                                            </a>
                                                                        </li>
                                                                        <li class="border-bottom">
                                                                            <a class="dropdown-item" href="#">
                                                                                <div class="fs-16 fw-medium text-dark dropdown-name">Los Angeles</div>
                                                                                <p>USA</p>
                                                                            </a>
                                                                        </li>
                                                                        <li class="border-bottom">
                                                                            <a class="dropdown-item" href="#">
                                                                                <div class="fs-16 fw-medium text-dark dropdown-name">Orlando</div>
                                                                                <p>USA</p>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="form-item change-drop booking-dropdown dropdown ps-2 ps-sm-3">
                                                                <div data-bs-toggle="dropdown"
                                                                    data-bs-auto-close="outside" aria-expanded="false"
                                                                    role="menu">
                                                                    <label
                                                                        class="form-label fs-14 text-default mb-1">To</label>
                                                                    <input type="text" class="form-control value-input"
                                                                        value="Las Vegas">
                                                                    <p class="fs-12 mb-0">USA</p>
                                                                    <span
                                                                        class="way-icon badge badge-primary rounded-pill translate-middle">
                                                                        <i
                                                                            class="fa-solid fa-arrow-right-arrow-left"></i>
                                                                    </span>
                                                                </div>
                                                                <div class="dropdown-menu dropdown-md p-0">
                                                                    <div class="input-search p-3 border-bottom">
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Search Location">
                                                                            <span
                                                                                class="input-group-text px-2 border-start-0"><i
                                                                                    class="isax isax-search-normal"></i></span>
                                                                        </div>
                                                                    </div>
                                                                    <ul>
                                                                        <li class="border-bottom">
                                                                            <a class="dropdown-item" href="#">
                                                                                <div class="fs-16 fw-medium text-dark dropdown-name">Newyork</div>
                                                                                <p>USA</p>
                                                                            </a>
                                                                        </li>
                                                                        <li class="border-bottom">
                                                                            <a class="dropdown-item" href="#">
                                                                                <div class="fs-16 fw-medium text-dark dropdown-name">Boston</div>
                                                                                <p>Spain</p>
                                                                            </a>
                                                                        </li>
                                                                        <li class="border-bottom">
                                                                            <a class="dropdown-item" href="#">
                                                                                <div class="fs-16 fw-medium text-dark dropdown-name">Northern Virginia</div>
                                                                                <p>USA</p>
                                                                            </a>
                                                                        </li>
                                                                        <li class="border-bottom">
                                                                            <a class="dropdown-item" href="#">
                                                                                <div class="fs-16 fw-medium text-dark dropdown-name">Los Angeles</div>
                                                                                <p>USA</p>
                                                                            </a>
                                                                        </li>
                                                                        <li class="border-bottom">
                                                                            <a class="dropdown-item" href="#">
                                                                                <div class="fs-16 fw-medium text-dark dropdown-name">Orlando</div>
                                                                                <p>USA</p>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="form-item">
                                                                <label
                                                                    class="form-label fs-14 text-default mb-1">Departure</label>
                                                                <input type="text" class="form-control datetimepicker"
                                                                    value="21-10-2024">
                                                                <p class="fs-12 mb-0">Monday</p>
                                                            </div>
                                                            <div class="form-item round-drip">
                                                                <label
                                                                    class="form-label fs-14 text-default mb-1">Return</label>
                                                                <input type="text" class="form-control datetimepicker"
                                                                    value="23-10-2024">
                                                                <p class="fs-12 mb-0">Wednesday</p>
                                                            </div>
                                                            <div class="form-item dropdown">
                                                                <div data-bs-toggle="dropdown"
                                                                    data-bs-auto-close="outside" aria-expanded="false"
                                                                    role="menu">
                                                                    <label
                                                                        class="form-label fs-14 text-default mb-1">Travellers</label>
                                                                    <div class="home-eight-title text-dark member-count">4 <span
                                                                            class="fw-normal fs-14">Persons</span></div>
                                                                    <p class="fs-12 mb-0"><span class="adult">2</span> Adult, <span class="children">2</span> children</p>
                                                                </div>
                                                                <div
                                                                    class="dropdown-menu dropdown-menu-end dropdown-xl">
                                                                    <div class="mb-3 home-eight-title text-dark">Select
                                                                        Travelers & Class</div>
                                                                    <div class="mb-3 border br-10 info-item pb-1">
                                                                        <div class="fs-16 fw-medium mb-2 text-dark">
                                                                            Travellers</div>
                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <div class="mb-3">
                                                                                    <label
                                                                                        class="form-label text-gray-9 mb-2">Adults
                                                                                        <span
                                                                                            class="text-default fw-normal">(
                                                                                            12+ Yrs )</span></label>
                                                                                    <div class="custom-increment">
                                                                                        <div class="input-group">
                                                                                            <span
                                                                                                class="input-group-btn float-start">
                                                                                                <button type="button"
                                                                                                    class="quantity-left-minus btn btn-light btn-number"
                                                                                                    data-type="minus"
                                                                                                    data-field="">
                                                                                                    <span><i
                                                                                                            class="isax isax-minus"></i></span>
                                                                                                </button>
                                                                                            </span>
                                                                                            <input type="text"
                                                                                                name="quantity"
                                                                                                class=" input-number"
                                                                                                value="1" data-type="adult">
                                                                                            <span
                                                                                                class="input-group-btn float-end">
                                                                                                <button type="button"
                                                                                                    class="quantity-right-plus btn btn-light btn-number"
                                                                                                    data-type="plus"
                                                                                                    data-field="">
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
                                                                                    <label
                                                                                        class="form-label text-gray-9 mb-2">Childrens
                                                                                        <span
                                                                                            class="text-default fw-normal">(
                                                                                            2-12 Yrs )</span></label>
                                                                                    <div class="custom-increment">
                                                                                        <div class="input-group">
                                                                                            <span
                                                                                                class="input-group-btn float-start">
                                                                                                <button type="button"
                                                                                                    class="quantity-left-minus btn btn-light btn-number"
                                                                                                    data-type="minus"
                                                                                                    data-field="">
                                                                                                    <span><i
                                                                                                            class="isax isax-minus"></i></span>
                                                                                                </button>
                                                                                            </span>
                                                                                            <input type="text"
                                                                                                name="quantity"
                                                                                                class=" input-number"
                                                                                                value="1" data-type="children">
                                                                                            <span
                                                                                                class="input-group-btn float-end">
                                                                                                <button type="button"
                                                                                                    class="quantity-right-plus btn btn-light btn-number"
                                                                                                    data-type="plus"
                                                                                                    data-field="">
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
                                                                                    <label
                                                                                        class="form-label text-gray-9 mb-2">Infants<span
                                                                                            class="text-default fw-normal">(
                                                                                            0-12 Yrs )</span></label>
                                                                                    <div class="custom-increment">
                                                                                        <div class="input-group">
                                                                                            <span
                                                                                                class="input-group-btn float-start">
                                                                                                <button type="button"
                                                                                                    class="quantity-left-minus btn btn-light btn-number"
                                                                                                    data-type="minus"
                                                                                                    data-field="">
                                                                                                    <span><i
                                                                                                            class="isax isax-minus"></i></span>
                                                                                                </button>
                                                                                            </span>
                                                                                            <input type="text"
                                                                                                name="quantity"
                                                                                                class=" input-number"
                                                                                                value="1" data-type="infant">
                                                                                            <span
                                                                                                class="input-group-btn float-end">
                                                                                                <button type="button"
                                                                                                    class="quantity-right-plus btn btn-light btn-number"
                                                                                                    data-type="plus"
                                                                                                    data-field="">
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
                                                                        <div class="fs-16 fw-medium mb-2 text-dark">
                                                                            Travellers</div>
                                                                        <div
                                                                            class="d-flex align-items-center flex-wrap">
                                                                            <div class="form-check me-3 mb-3">
                                                                                <input class="form-check-input"
                                                                                    type="radio" value="Economy"
                                                                                    name="cabin-class" id="economys"
                                                                                    checked>
                                                                                <label class="form-check-label"
                                                                                    for="economys">
                                                                                    Seater
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check me-3 mb-3">
                                                                                <input class="form-check-input"
                                                                                    type="radio" value="Economy"
                                                                                    name="cabin-class"
                                                                                    id="premium-economys">
                                                                                <label class="form-check-label"
                                                                                    for="premium-economys">
                                                                                    Sleeper
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check me-3 mb-3">
                                                                                <input class="form-check-input"
                                                                                    type="radio" value="Business"
                                                                                    name="cabin-class" id="business">
                                                                                <label class="form-check-label"
                                                                                    for="business">
                                                                                    AC Sleeper
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex justify-content-end">
                                                                        <a href="#"
                                                                            class="btn btn-light btn-sm me-2">Cancel</a>
                                                                        <button type="button"
                                                                            class="btn btn-primary btn-sm apply-btn">Apply</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="submit"
                                                            class="btn btn-primary search-btn rounded">Search</button>
                                                    </div>
                                                </div>
                                                <div class="multi-trip">
                                                    <div class="d-lg-flex">
                                                        <div class="d-flex  form-info">
                                                            <div class="form-item change-drop booking-dropdown dropdown">
                                                                <div data-bs-toggle="dropdown"
                                                                    data-bs-auto-close="outside" aria-expanded="false"
                                                                    role="menu">
                                                                    <label
                                                                        class="form-label fs-14 text-default mb-1">From</label>
                                                                    <input type="text" class="form-control value-input"
                                                                        value="Newyork">
                                                                    <p class="fs-12 mb-0">Ken International Airport</p>
                                                                </div>
                                                                <div class="dropdown-menu dropdown-md p-0">
                                                                    <div class="input-search p-3 border-bottom">
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Search Location">
                                                                            <span
                                                                                class="input-group-text px-2 border-start-0"><i
                                                                                    class="isax isax-search-normal"></i></span>
                                                                        </div>
                                                                    </div>
                                                                    <ul>
                                                                        <li class="border-bottom">
                                                                            <a class="dropdown-item" href="#">
                                                                                <div class="fs-16 fw-medium text-dark dropdown-name">Newyork</div>
                                                                                <p>Ken International Airport</p>
                                                                            </a>
                                                                        </li>
                                                                        <li class="border-bottom">
                                                                            <a class="dropdown-item" href="#">
                                                                                <div class="fs-16 fw-medium text-dark dropdown-name">Boston</div>
                                                                                <p>Boston Logan International Airport
                                                                                </p>
                                                                            </a>
                                                                        </li>
                                                                        <li class="border-bottom">
                                                                            <a class="dropdown-item" href="#">
                                                                                <div class="fs-16 fw-medium text-dark dropdown-name">Northern Virginia</div>
                                                                                <p>Dulles International Airport</p>
                                                                            </a>
                                                                        </li>
                                                                        <li class="border-bottom">
                                                                            <a class="dropdown-item" href="#">
                                                                                <div class="fs-16 fw-medium text-dark dropdown-name">Los Angeles</div>
                                                                                <p>Los Angeles International Airport</p>
                                                                            </a>
                                                                        </li>
                                                                        <li class="border-bottom">
                                                                            <a class="dropdown-item" href="#">
                                                                                <div class="fs-16 fw-medium text-dark dropdown-name">Orlando</div>
                                                                                <p>Orlando International Airport</p>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="form-item change-drop booking-dropdown dropdown ps-2 ps-sm-3">
                                                                <div data-bs-toggle="dropdown"
                                                                    data-bs-auto-close="outside" aria-expanded="false"
                                                                    role="menu">
                                                                    <label
                                                                        class="form-label fs-14 text-default mb-1">To</label>
                                                                    <div class="home-eight-title text-dark value-input">Las Vegas
                                                                    </div>
                                                                    <p class="fs-12 mb-0">Martini International Airport
                                                                    </p>
                                                                    <span
                                                                        class="way-icon badge badge-primary rounded-pill translate-middle">
                                                                        <i
                                                                            class="fa-solid fa-arrow-right-arrow-left"></i>
                                                                    </span>
                                                                </div>
                                                                <div class="dropdown-menu dropdown-md p-0">
                                                                    <div class="input-search p-3 border-bottom">
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Search Location">
                                                                            <span
                                                                                class="input-group-text px-2 border-start-0"><i
                                                                                    class="isax isax-search-normal"></i></span>
                                                                        </div>
                                                                    </div>
                                                                    <ul>
                                                                        <li class="border-bottom">
                                                                            <a class="dropdown-item" href="#">
                                                                                <div class="fs-16 fw-medium text-dark dropdown-name">Newyork</div>
                                                                                <p>Ken International Airport</p>
                                                                            </a>
                                                                        </li>
                                                                        <li class="border-bottom">
                                                                            <a class="dropdown-item" href="#">
                                                                                <div class="fs-16 fw-medium text-dark dropdown-name">Boston</div>
                                                                                <p>Boston Logan International Airport
                                                                                </p>
                                                                            </a>
                                                                        </li>
                                                                        <li class="border-bottom">
                                                                            <a class="dropdown-item" href="#">
                                                                                <div class="fs-16 fw-medium text-dark dropdown-name">Northern Virginia</div>
                                                                                <p>Dulles International Airport</p>
                                                                            </a>
                                                                        </li>
                                                                        <li class="border-bottom">
                                                                            <a class="dropdown-item" href="#">
                                                                                <div class="fs-16 fw-medium text-dark dropdown-name">Los Angeles</div>
                                                                                <p>Los Angeles International Airport</p>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item" href="#">
                                                                                <div class="fs-16 fw-medium text-dark dropdown-name">Orlando</div>
                                                                                <p>Orlando International Airport</p>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="form-item">
                                                                <label
                                                                    class="form-label fs-14 text-default mb-1">Departure</label>
                                                                <input type="text" class="form-control datetimepicker"
                                                                    value="21-10-2024">
                                                                <p class="fs-12 mb-0">Monday</p>
                                                            </div>
                                                        </div>
                                                        <button type="submit"
                                                            class="btn btn-primary search-btn rounded">Search</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="Activity">
                                            <form action="#">
                                                <div class="fw-medium fs-16 mb-2 text-center text-dark">Book Adventure
                                                    Activity.</div>
                                                <div class="d-lg-flex">
                                                    <div class="d-flex  form-info">
                                                        <div class="form-item booking-dropdown dropdown">
                                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                                aria-expanded="false" role="menu">
                                                                <label
                                                                    class="form-label fs-14 text-default mb-1">Location</label>
                                                                <input type="text" class="form-control value-input" value="Dubai">
                                                                <p class="fs-12 mb-0">United Arab Emirates</p>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-md p-0">
                                                                <div class="input-search p-3 border-bottom">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Search for City, Property name or Location">
                                                                        <span
                                                                            class="input-group-text px-2 border-start-0"><i
                                                                                class="isax isax-search-normal"></i></span>
                                                                    </div>
                                                                </div>
                                                                <ul>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark dropdown-name">USA</div>
                                                                            <p>2000 Properties</p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark dropdown-name">Japan</div>
                                                                            <p>3000 Properties</p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark dropdown-name">Singapore</div>
                                                                            <p>8000 Properties</p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark dropdown-name">Russia</div>
                                                                            <p>8000 Properties</p>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark dropdown-name">Germany</div>
                                                                            <p>2000 Properties</p>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="form-item booking-dropdown dropdown">
                                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                                aria-expanded="false" role="menu">
                                                                <label class="form-label fs-14 text-default mb-1">Select
                                                                    Activity</label>
                                                                <input type="text" class="form-control value-input"
                                                                    value="Ballon Ride">
                                                                <p class="fs-12 mb-0">20 Offers Available</p>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-md p-0">
                                                                <div class="input-search p-3 border-bottom">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Search Activity">
                                                                        <span
                                                                            class="input-group-text px-2 border-start-0"><i
                                                                                class="isax isax-search-normal"></i></span>
                                                                    </div>
                                                                </div>
                                                                <ul>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark dropdown-name">ScubaDiving</div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark dropdown-name">HotAir Ballon</div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark dropdown-name">Family Park Adventure</div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark dropdown-name">Mountain Climbing</div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark dropdown-name">SkyDive</div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="form-item">
                                                            <label class="form-label fs-14 text-default mb-1">Check
                                                                In</label>
                                                            <input type="text" class="form-control check-in"
                                                                value="21-10-2026">
                                                            <p class="fs-12 mb-0">Monday</p>
                                                        </div>
                                                        <div class="form-item">
                                                            <label class="form-label fs-14 text-default mb-1">Check
                                                                Out</label>
                                                            <input type="text" class="form-control check-out"
                                                                value="21-10-2026">
                                                            <p class="fs-12 mb-0">Monday</p>
                                                        </div>
                                                        <div class="form-item dropdown">
                                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                                aria-expanded="false" role="menu">
                                                                <label
                                                                    class="form-label fs-14 text-default mb-1">Guests</label>
                                                                <div class="home-eight-title text-dark member-count">4 <span
                                                                        class="fw-normal fs-14">Persons</span></div>
                                                                <p class="fs-12 mb-0"><span class="adult">4</span> Adult, <span class="room">2</span> Rooms</p>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-end dropdown-xl">
                                                                <div class="mb-3 home-eight-title text-dark">Select
                                                                    Travelers & Class</div>
                                                                <div class="mb-3 border br-10 info-item pb-1">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div
                                                                                class="mb-3 d-flex align-items-center justify-content-between">
                                                                                <label
                                                                                    class="form-label text-gray-9 mb-2">Rooms</label>
                                                                                <div class="custom-increment">
                                                                                    <div class="input-group">
                                                                                        <span
                                                                                            class="input-group-btn float-start">
                                                                                            <button type="button"
                                                                                                class="quantity-left-minus btn btn-light btn-number"
                                                                                                data-type="minus"
                                                                                                data-field="">
                                                                                                <span><i
                                                                                                        class="isax isax-minus"></i></span>
                                                                                            </button>
                                                                                        </span>
                                                                                        <input type="text"
                                                                                            name="quantity"
                                                                                            class=" input-number"
                                                                                            value="0" data-type="room">
                                                                                        <span
                                                                                            class="input-group-btn float-end">
                                                                                            <button type="button"
                                                                                                class="quantity-right-plus btn btn-light btn-number"
                                                                                                data-type="plus"
                                                                                                data-field="">
                                                                                                <span><i
                                                                                                        class="isax isax-add"></i></span>
                                                                                            </button>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div
                                                                                class="mb-3 d-flex align-items-center justify-content-between">
                                                                                <label
                                                                                    class="form-label text-gray-9 mb-2">Adults</label>
                                                                                <div class="custom-increment">
                                                                                    <div class="input-group">
                                                                                        <span
                                                                                            class="input-group-btn float-start">
                                                                                            <button type="button"
                                                                                                class="quantity-left-minus btn btn-light btn-number"
                                                                                                data-type="minus"
                                                                                                data-field="">
                                                                                                <span><i
                                                                                                        class="isax isax-minus"></i></span>
                                                                                            </button>
                                                                                        </span>
                                                                                        <input type="text"
                                                                                            name="quantity"
                                                                                            class=" input-number"
                                                                                            value="1" data-type="adult">
                                                                                        <span
                                                                                            class="input-group-btn float-end">
                                                                                            <button type="button"
                                                                                                class="quantity-right-plus btn btn-light btn-number"
                                                                                                data-type="plus"
                                                                                                data-field="">
                                                                                                <span><i
                                                                                                        class="isax isax-add"></i></span>
                                                                                            </button>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div
                                                                                class="mb-3 d-flex align-items-center justify-content-between">
                                                                                <label
                                                                                    class="form-label text-gray-9 mb-2">Children
                                                                                    <span
                                                                                        class="text-default fw-normal">(
                                                                                        2-12 Yrs )</span></label>
                                                                                <div class="custom-increment">
                                                                                    <div class="input-group">
                                                                                        <span
                                                                                            class="input-group-btn float-start">
                                                                                            <button type="button"
                                                                                                class="quantity-left-minus btn btn-light btn-number"
                                                                                                data-type="minus"
                                                                                                data-field="">
                                                                                                <span><i
                                                                                                        class="isax isax-minus"></i></span>
                                                                                            </button>
                                                                                        </span>
                                                                                        <input type="text"
                                                                                            name="quantity"
                                                                                            class=" input-number"
                                                                                            value="1" data-type="children">
                                                                                        <span
                                                                                            class="input-group-btn float-end">
                                                                                            <button type="button"
                                                                                                class="quantity-right-plus btn btn-light btn-number"
                                                                                                data-type="plus"
                                                                                                data-field="">
                                                                                                <span><i
                                                                                                        class="isax isax-add"></i></span>
                                                                                            </button>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div
                                                                                class="mb-3 d-flex align-items-center justify-content-between">
                                                                                <label
                                                                                    class="form-label text-gray-9 mb-2">Infants
                                                                                    <span
                                                                                        class="text-default fw-normal">(
                                                                                        0-12 Yrs )</span></label>
                                                                                <div class="custom-increment">
                                                                                    <div class="input-group">
                                                                                        <span
                                                                                            class="input-group-btn float-start">
                                                                                            <button type="button"
                                                                                                class="quantity-left-minus btn btn-light btn-number"
                                                                                                data-type="minus"
                                                                                                data-field="">
                                                                                                <span><i
                                                                                                        class="isax isax-minus"></i></span>
                                                                                            </button>
                                                                                        </span>
                                                                                        <input type="text"
                                                                                            name="quantity"
                                                                                            class=" input-number"
                                                                                            value="1" data-type="infant">
                                                                                        <span
                                                                                            class="input-group-btn float-end">
                                                                                            <button type="button"
                                                                                                class="quantity-right-plus btn btn-light btn-number"
                                                                                                data-type="plus"
                                                                                                data-field="">
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
                                                                    <div class="fs-16 fw-medium mb-2 text-dark">
                                                                        Travellers</div>
                                                                    <div class="d-flex align-items-center flex-wrap">
                                                                        <div class="form-check me-3 mb-3">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="room" id="room5" checked>
                                                                            <label class="form-check-label" for="room5">
                                                                                Single
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check me-3 mb-3">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="room" id="room6">
                                                                            <label class="form-check-label" for="room6">
                                                                                Double
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check me-3 mb-3">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="room" id="room7">
                                                                            <label class="form-check-label" for="room7">
                                                                                Delux
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check mb-3">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="room" id="room8">
                                                                            <label class="form-check-label" for="room8">
                                                                                Suite
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 border br-10 info-item pb-1">
                                                                    <div class="fs-16 fw-medium mb-2 text-dark">Property
                                                                        Type</div>
                                                                    <div class="d-flex align-items-center flex-wrap">
                                                                        <div class="form-check me-3 mb-3">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="property" id="property5" checked>
                                                                            <label class="form-check-label"
                                                                                for="property5">
                                                                                Villa
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check me-3 mb-3">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="property" id="property6">
                                                                            <label class="form-check-label"
                                                                                for="property6">
                                                                                Condo
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check me-3 mb-3">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="property" id="property7">
                                                                            <label class="form-check-label"
                                                                                for="property7">
                                                                                Cabin
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check mb-3">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="property" id="property8">
                                                                            <label class="form-check-label"
                                                                                for="property8">
                                                                                Apartments
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex justify-content-end">
                                                                    <a href="#"
                                                                        class="btn btn-light btn-sm me-2">Cancel</a>
                                                                    <button type="button"
                                                                        class="btn btn-primary btn-sm apply-btn">Apply</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit"
                                                        class="btn btn-primary search-btn rounded">Search</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="Visa">
                                            <form action="#">
                                                <div class="fw-medium fs-16 mb-2 text-center text-dark">Check
                                                    Eligibility</div>
                                                <div class="d-lg-flex">
                                                    <div class="d-flex  form-info">
                                                        <div class="form-item booking-dropdown dropdown">
                                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                                aria-expanded="false" role="menu">
                                                                <label
                                                                    class="form-label fs-14 text-default mb-1">Country</label>
                                                                <input type="text" class="form-control value-input" value="Select">
                                                            </div>
                                                            <div class="dropdown-menu dropdown-md p-0">
                                                                <div class="input-search p-3 border-bottom">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Search for City, Property name or Location">
                                                                        <span
                                                                            class="input-group-text px-2 border-start-0"><i
                                                                                class="isax isax-search-normal"></i></span>
                                                                    </div>
                                                                </div>
                                                                <ul>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark dropdown-name">USA</div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark dropdown-name">Japan</div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark dropdown-name">Singapore</div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark dropdown-name">Russia</div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark dropdown-name">Germany</div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="form-item booking-dropdown dropdown">
                                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                                aria-expanded="false" role="menu">
                                                                <label class="form-label fs-14 text-default mb-1">Visa
                                                                    Type</label>
                                                                <input type="text" class="form-control value-input" value="Select">
                                                            </div>
                                                            <div class="dropdown-menu dropdown-md p-0">
                                                                <div class="input-search p-3 border-bottom">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Search Visa Type">
                                                                        <span
                                                                            class="input-group-text px-2 border-start-0"><i
                                                                                class="isax isax-search-normal"></i></span>
                                                                    </div>
                                                                </div>
                                                                <ul>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark  dropdown-name">Tourist Visa </div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark  dropdown-name">Business Visa</div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark  dropdown-name">Student Visa</div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark  dropdown-name">Transit Visa</div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark  dropdown-name">GroupTravel Visa</div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="form-item booking-dropdown dropdown">
                                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                                aria-expanded="false" role="menu">
                                                                <label
                                                                    class="form-label fs-14 text-default mb-1">Citizenship</label>
                                                                <input type="text" class="form-control value-input" value="Select">
                                                            </div>
                                                            <div class="dropdown-menu dropdown-md p-0">
                                                                <div class="input-search p-3 border-bottom">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Search">
                                                                        <span
                                                                            class="input-group-text px-2 border-start-0"><i
                                                                                class="isax isax-search-normal"></i></span>
                                                                    </div>
                                                                </div>
                                                                <ul>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark  dropdown-name">USA</div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark  dropdown-name">Japan</div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark  dropdown-name">Singapore</div>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark  dropdown-name">Russia</div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark  dropdown-name">Germany</div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="form-item dropdown">
                                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                                aria-expanded="false" role="menu">
                                                                <label
                                                                    class="form-label fs-14 text-default mb-1">Travelers</label>
                                                                <div class="home-eight-title text-dark member-count">4 <span
                                                                        class="fw-normal fs-14">Persons</span></div>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-end dropdown-xl">
                                                                <div class="mb-3 home-eight-title text-dark">Select
                                                                    Travelers & Class</div>
                                                                <div class="mb-3 border br-10 info-item pb-1">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div
                                                                                class="mb-3 d-flex align-items-center justify-content-between">
                                                                                <label
                                                                                    class="form-label text-gray-9 mb-2">Rooms</label>
                                                                                <div class="custom-increment">
                                                                                    <div class="input-group">
                                                                                        <span
                                                                                            class="input-group-btn float-start">
                                                                                            <button type="button"
                                                                                                class="quantity-left-minus btn btn-light btn-number"
                                                                                                data-type="minus"
                                                                                                data-field="">
                                                                                                <span><i
                                                                                                        class="isax isax-minus"></i></span>
                                                                                            </button>
                                                                                        </span>
                                                                                        <input type="text"
                                                                                            name="quantity"
                                                                                            class=" input-number"
                                                                                            value="1" data-type="room">
                                                                                        <span
                                                                                            class="input-group-btn float-end">
                                                                                            <button type="button"
                                                                                                class="quantity-right-plus btn btn-light btn-number"
                                                                                                data-type="plus"
                                                                                                data-field="">
                                                                                                <span><i
                                                                                                        class="isax isax-add"></i></span>
                                                                                            </button>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div
                                                                                class="mb-3 d-flex align-items-center justify-content-between">
                                                                                <label
                                                                                    class="form-label text-gray-9 mb-2">Adults</label>
                                                                                <div class="custom-increment">
                                                                                    <div class="input-group">
                                                                                        <span
                                                                                            class="input-group-btn float-start">
                                                                                            <button type="button"
                                                                                                class="quantity-left-minus btn btn-light btn-number"
                                                                                                data-type="minus"
                                                                                                data-field="">
                                                                                                <span><i
                                                                                                        class="isax isax-minus"></i></span>
                                                                                            </button>
                                                                                        </span>
                                                                                        <input type="text"
                                                                                            name="quantity"
                                                                                            class=" input-number"
                                                                                            value="1" data-type="adult">
                                                                                        <span
                                                                                            class="input-group-btn float-end">
                                                                                            <button type="button"
                                                                                                class="quantity-right-plus btn btn-light btn-number"
                                                                                                data-type="plus"
                                                                                                data-field="">
                                                                                                <span><i
                                                                                                        class="isax isax-add"></i></span>
                                                                                            </button>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div
                                                                                class="mb-3 d-flex align-items-center justify-content-between">
                                                                                <label
                                                                                    class="form-label text-gray-9 mb-2">Children
                                                                                    <span
                                                                                        class="text-default fw-normal">(
                                                                                        2-12 Yrs )</span></label>
                                                                                <div class="custom-increment">
                                                                                    <div class="input-group">
                                                                                        <span
                                                                                            class="input-group-btn float-start">
                                                                                            <button type="button"
                                                                                                class="quantity-left-minus btn btn-light btn-number"
                                                                                                data-type="minus"
                                                                                                data-field="">
                                                                                                <span><i
                                                                                                        class="isax isax-minus"></i></span>
                                                                                            </button>
                                                                                        </span>
                                                                                        <input type="text"
                                                                                            name="quantity"
                                                                                            class=" input-number"
                                                                                            value="1" data-type="children">
                                                                                        <span
                                                                                            class="input-group-btn float-end">
                                                                                            <button type="button"
                                                                                                class="quantity-right-plus btn btn-light btn-number"
                                                                                                data-type="plus"
                                                                                                data-field="">
                                                                                                <span><i
                                                                                                        class="isax isax-add"></i></span>
                                                                                            </button>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div
                                                                                class="mb-3 d-flex align-items-center justify-content-between">
                                                                                <label
                                                                                    class="form-label text-gray-9 mb-2">Infants
                                                                                    <span
                                                                                        class="text-default fw-normal">(
                                                                                        0-12 Yrs )</span></label>
                                                                                <div class="custom-increment">
                                                                                    <div class="input-group">
                                                                                        <span
                                                                                            class="input-group-btn float-start">
                                                                                            <button type="button"
                                                                                                class="quantity-left-minus btn btn-light btn-number"
                                                                                                data-type="minus"
                                                                                                data-field="">
                                                                                                <span><i
                                                                                                        class="isax isax-minus"></i></span>
                                                                                            </button>
                                                                                        </span>
                                                                                        <input type="text"
                                                                                            name="quantity"
                                                                                            class=" input-number"
                                                                                            value="1" data-type="infant">
                                                                                        <span
                                                                                            class="input-group-btn float-end">
                                                                                            <button type="button"
                                                                                                class="quantity-right-plus btn btn-light btn-number"
                                                                                                data-type="plus"
                                                                                                data-field="">
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
                                                                    <div class="fs-16 fw-medium mb-2 text-dark">
                                                                        Travellers</div>
                                                                    <div class="d-flex align-items-center flex-wrap">
                                                                        <div class="form-check me-3 mb-3">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="room" id="room9" checked>
                                                                            <label class="form-check-label" for="room9">
                                                                                Single
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check me-3 mb-3">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="room" id="room10">
                                                                            <label class="form-check-label"
                                                                                for="room10">
                                                                                Double
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check me-3 mb-3">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="room" id="room11">
                                                                            <label class="form-check-label"
                                                                                for="room11">
                                                                                Delux
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check mb-3">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="room" id="room12">
                                                                            <label class="form-check-label"
                                                                                for="room12">
                                                                                Suite
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 border br-10 info-item pb-1">
                                                                    <div class="fs-16 fw-medium mb-2 text-dark">Property
                                                                        Type</div>
                                                                    <div class="d-flex align-items-center flex-wrap">
                                                                        <div class="form-check me-3 mb-3">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="property" id="property9" checked>
                                                                            <label class="form-check-label"
                                                                                for="property9">
                                                                                Villa
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check me-3 mb-3">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="property" id="property10">
                                                                            <label class="form-check-label"
                                                                                for="property10">
                                                                                Condo
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check me-3 mb-3">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="property" id="property11">
                                                                            <label class="form-check-label"
                                                                                for="property11">
                                                                                Cabin
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check mb-3">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="property" id="property12">
                                                                            <label class="form-check-label"
                                                                                for="property12">
                                                                                Apartments
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex justify-content-end">
                                                                    <a href="#"
                                                                        class="btn btn-light btn-sm me-2">Cancel</a>
                                                                    <button type="button"
                                                                        class="btn btn-primary btn-sm apply-btn">Apply</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit"
                                                        class="btn btn-primary search-btn rounded">Search</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="Guide">
                                            <form action="#">
                                                <div class="d-lg-flex">
                                                    <div class="d-flex  form-info">
                                                        <div class="form-item booking-dropdown dropdown">
                                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                                aria-expanded="false" role="menu">
                                                                <label
                                                                    class="form-label fs-14 text-default mb-1">Destination</label>
                                                                <input type="text" class="form-control value-input" value="Newyork">
                                                                <p class="fs-12 mb-0">USA</p>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-md p-0">
                                                                <div class="input-search p-3 border-bottom">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Search for City, Property name or Location">
                                                                        <span
                                                                            class="input-group-text px-2 border-start-0"><i
                                                                                class="isax isax-search-normal"></i></span>
                                                                    </div>
                                                                </div>
                                                                <ul>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark dropdown-name">USA</div>
                                                                            <p>2000 Properties</p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark dropdown-name">Japan</div>
                                                                            <p>3000 Properties</p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark dropdown-name">Singapore</div>
                                                                            <p>8000 Properties</p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark dropdown-name">Russia</div>
                                                                            <p>8000 Properties</p>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="fs-16 fw-medium text-dark dropdown-name">Germany</div>
                                                                            <p>2000 Properties</p>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="form-item">
                                                            <label class="form-label fs-14 text-default mb-1">Start
                                                                Date</label>
                                                            <input type="text" class="form-control check-in"
                                                                value="21-10-2026">
                                                            <p class="fs-12 mb-0">Monday</p>
                                                        </div>
                                                        <div class="form-item">
                                                            <label class="form-label fs-14 text-default mb-1">End
                                                                Date</label>
                                                            <input type="text" class="form-control check-out"
                                                                value="21-10-2026">
                                                            <p class="fs-12 mb-0">Monday</p>
                                                        </div>
                                                        <div class="form-item dropdown">
                                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                                aria-expanded="false" role="menu">
                                                                <label
                                                                    class="form-label fs-14 text-default mb-1">Guests</label>
                                                                <div class="home-eight-title text-dark member-count">4 <span
                                                                        class="fw-normal fs-14">Persons</span></div>
                                                                <p class="fs-12 mb-0"><span class="adult">3</span> Adult</p>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-end dropdown-xl">
                                                                <div class="mb-3 home-eight-title text-dark">Select
                                                                    Travelers & Class</div>
                                                                <div class="mb-3 border br-10 info-item pb-1">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div
                                                                                class="mb-3 d-flex align-items-center justify-content-between">
                                                                                <label
                                                                                    class="form-label text-gray-9 mb-2">Rooms</label>
                                                                                <div class="custom-increment">
                                                                                    <div class="input-group">
                                                                                        <span
                                                                                            class="input-group-btn float-start">
                                                                                            <button type="button"
                                                                                                class="quantity-left-minus btn btn-light btn-number"
                                                                                                data-type="minus"
                                                                                                data-field="">
                                                                                                <span><i
                                                                                                        class="isax isax-minus"></i></span>
                                                                                            </button>
                                                                                        </span>
                                                                                        <input type="text"
                                                                                            name="quantity"
                                                                                            class=" input-number"
                                                                                            value="1">
                                                                                        <span
                                                                                            class="input-group-btn float-end">
                                                                                            <button type="button"
                                                                                                class="quantity-right-plus btn btn-light btn-number"
                                                                                                data-type="plus"
                                                                                                data-field="">
                                                                                                <span><i
                                                                                                        class="isax isax-add"></i></span>
                                                                                            </button>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div
                                                                                class="mb-3 d-flex align-items-center justify-content-between">
                                                                                <label
                                                                                    class="form-label text-gray-9 mb-2">Adults</label>
                                                                                <div class="custom-increment">
                                                                                    <div class="input-group">
                                                                                        <span
                                                                                            class="input-group-btn float-start">
                                                                                            <button type="button"
                                                                                                class="quantity-left-minus btn btn-light btn-number"
                                                                                                data-type="minus"
                                                                                                data-field="">
                                                                                                <span><i
                                                                                                        class="isax isax-minus"></i></span>
                                                                                            </button>
                                                                                        </span>
                                                                                        <input type="text"
                                                                                            name="quantity"
                                                                                            class=" input-number"
                                                                                            value="1" data-type="adult">
                                                                                        <span
                                                                                            class="input-group-btn float-end">
                                                                                            <button type="button"
                                                                                                class="quantity-right-plus btn btn-light btn-number"
                                                                                                data-type="plus"
                                                                                                data-field="">
                                                                                                <span><i
                                                                                                        class="isax isax-add"></i></span>
                                                                                            </button>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div
                                                                                class="mb-3 d-flex align-items-center justify-content-between">
                                                                                <label
                                                                                    class="form-label text-gray-9 mb-2">Children
                                                                                    <span
                                                                                        class="text-default fw-normal">(
                                                                                        2-12 Yrs )</span></label>
                                                                                <div class="custom-increment">
                                                                                    <div class="input-group">
                                                                                        <span
                                                                                            class="input-group-btn float-start">
                                                                                            <button type="button"
                                                                                                class="quantity-left-minus btn btn-light btn-number"
                                                                                                data-type="minus"
                                                                                                data-field="">
                                                                                                <span><i
                                                                                                        class="isax isax-minus"></i></span>
                                                                                            </button>
                                                                                        </span>
                                                                                        <input type="text"
                                                                                            name="quantity"
                                                                                            class=" input-number"
                                                                                            value="1" data-type="children">
                                                                                        <span
                                                                                            class="input-group-btn float-end">
                                                                                            <button type="button"
                                                                                                class="quantity-right-plus btn btn-light btn-number"
                                                                                                data-type="plus"
                                                                                                data-field="">
                                                                                                <span><i
                                                                                                        class="isax isax-add"></i></span>
                                                                                            </button>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div
                                                                                class="mb-3 d-flex align-items-center justify-content-between">
                                                                                <label
                                                                                    class="form-label text-gray-9 mb-2">Infants
                                                                                    <span
                                                                                        class="text-default fw-normal">(
                                                                                        0-12 Yrs )</span></label>
                                                                                <div class="custom-increment">
                                                                                    <div class="input-group">
                                                                                        <span
                                                                                            class="input-group-btn float-start">
                                                                                            <button type="button"
                                                                                                class="quantity-left-minus btn btn-light btn-number"
                                                                                                data-type="minus"
                                                                                                data-field="">
                                                                                                <span><i
                                                                                                        class="isax isax-minus"></i></span>
                                                                                            </button>
                                                                                        </span>
                                                                                        <input type="text"
                                                                                            name="quantity"
                                                                                            class=" input-number"
                                                                                            value="1" data-type="infant">
                                                                                        <span
                                                                                            class="input-group-btn float-end">
                                                                                            <button type="button"
                                                                                                class="quantity-right-plus btn btn-light btn-number"
                                                                                                data-type="plus"
                                                                                                data-field="">
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
                                                                    <div class="fs-16 fw-medium mb-2 text-dark">
                                                                        Travellers</div>
                                                                    <div class="d-flex align-items-center flex-wrap">
                                                                        <div class="form-check me-3 mb-3">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="room" id="room1" checked>
                                                                            <label class="form-check-label" for="room1">
                                                                                Single
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check me-3 mb-3">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="room" id="room2">
                                                                            <label class="form-check-label" for="room2">
                                                                                Double
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check me-3 mb-3">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="room" id="room3">
                                                                            <label class="form-check-label" for="room3">
                                                                                Delux
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check mb-3">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="room" id="room4">
                                                                            <label class="form-check-label" for="room4">
                                                                                Suite
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 border br-10 info-item pb-1">
                                                                    <div class="fs-16 fw-medium mb-2 text-dark">Property
                                                                        Type</div>
                                                                    <div class="d-flex align-items-center flex-wrap">
                                                                        <div class="form-check me-3 mb-3">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="property" id="property1" checked>
                                                                            <label class="form-check-label"
                                                                                for="property1">
                                                                                Villa
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check me-3 mb-3">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="property" id="property2">
                                                                            <label class="form-check-label"
                                                                                for="property2">
                                                                                Condo
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check me-3 mb-3">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="property" id="property3">
                                                                            <label class="form-check-label"
                                                                                for="property3">
                                                                                Cabin
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check mb-3">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="property" id="property4">
                                                                            <label class="form-check-label"
                                                                                for="property4">
                                                                                Apartments
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex justify-content-end">
                                                                    <a href="#"
                                                                        class="btn btn-light btn-sm me-2">Cancel</a>
                                                                    <button type="button"
                                                                        class="btn btn-primary btn-sm apply-btn">Apply</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit"
                                                        class="btn btn-primary search-btn rounded">Search</button>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Hero Section -->

    <!-- destinations sec -->
    <section class="section destinations-sec-nine">
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
                        <div class="col-xxl-3 col-lg-4 col-md-6">
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
                        <div class="col-xxl-3 col-lg-4 col-md-6">
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
                        <div class="col-xxl-3 col-lg-4 col-md-6">
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
                        <div class="col-xxl-3 col-lg-4 col-md-6">
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

                    </div>
                </div>
                <div class="tab-pane fade" id="tab-3">
                    <div class="row  row-gap-4 justify-content-center">

                        <!-- Car Grid -->
                        <div class="col-xxl-3 col-xl-4 col-md-6 d-flex">
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
                        <div class="col-xxl-3 col-xl-4 col-md-6 d-flex">
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
                        <div class="col-xxl-3 col-xl-4 col-md-6 d-flex">
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
                        <div class="col-xxl-3 col-xl-4 col-md-6 d-flex">
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

                    </div>
                </div>
                <div class="tab-pane fade" id="tab-5">
                    <div class="row row-gap-4 justify-content-center">

                        <!-- Tours Grid -->
                        <div class="col-xxl-3 col-xl-4 col-md-6 d-flex">
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
                        <div class="col-xxl-3 col-xl-4 col-md-6 d-flex">
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
                        <div class="col-xxl-3 col-xl-4 col-md-6 d-flex">
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
                        <div class="col-xxl-3 col-xl-4 col-md-6 d-flex">
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

                    </div>
                </div>
                <div class="tab-pane fade" id="tab-7">
                    <div class="row row-gap-4 justify-content-center">

                        <!-- Tours Grid -->
                        <div class="col-xxl-3 col-xl-4 col-md-6 d-flex">
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
                        <div class="col-xxl-3 col-xl-4 col-md-6 d-flex">
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
                        <div class="col-xxl-3 col-xl-4 col-md-6 d-flex">
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
                        <div class="col-xxl-3 col-xl-4 col-md-6 d-flex">
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
                            <a href="#" class="avatar avatar-lg  flex-shrink-0">
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
                            <a href="#" class="avatar avatar-lg  flex-shrink-0">
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
                            <a href="#" class="avatar avatar-lg  flex-shrink-0">
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
                            <a href="#" class="avatar avatar-lg  flex-shrink-0">
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
    <!-- blog -->

    <!-- ========================
        End Page Content
    ========================= -->

@endsection



