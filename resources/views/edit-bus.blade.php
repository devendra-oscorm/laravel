<?php $page="edit-bus";?>
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
                    <h2 class="breadcrumb-title mb-2">Edit Bus</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{url('index')}}"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item">Bus</li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Bus</li>
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
            <!-- Add New Bus -->
            <div class="row">

                <!-- Sidebar -->
                <div class="col-lg-3 theiaStickySidebar">
                    <div class="card border-0 mb-4 mb-lg-0">
                        <div class="card-body">
                            <div>
                                <h5 class="mb-3">Edit Bus</h5>
                                <ul class="add-tab-list">
                                    <li><a href="#basic_info" class="active">Basic Info</a></li>
                                    <li><a href="#specifications">Specifications</a></li>
                                    <li><a href="#departure">Arrival & Departure</a></li>
                                    <li><a href="#dropoff">Pickup & Dropoff</a></li>
                                    <li><a href="#routes">Routes</a></li>
                                    <li><a href="#description">Description</a></li>
                                    <li><a href="#amenities">Amenities</a></li>
                                    <li><a href="#location">Location</a></li>
                                    <li><a href="#faq">FAQ</a></li>
                                    <li><a href="#gallery">Gallery</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Sidebar -->

                <div class="col-lg-9">
                    <form action="{{url('bus-list')}}">
                        <div class="card shadow-none" id="basic_info">
                            <div class="card-header">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="fs-18">Basic Info</h6>
                                </div>
                            </div>
                            <div class="card-body pb-1">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Bus Name</label>
                                            <input type="text" class="form-control" value="Volvo">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Bus Number</label>
                                            <input type="text" class="form-control" value="8765">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Bus Type</label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option selected>Seater</option>
                                                <option>Sleeper</option>
                                                <option>Semi Sleeper</option>
                                                <option>AC Sleeper</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Launched On</label>
                                            <div class="input-icon-end position-relative">
                                                <input type="text" class="form-control datetimepicker"
                                                    placeholder="02/11/2025">
                                                <span class="input-icon-addon">
                                                    <i class="isax isax-calendar"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow-none" id="specifications">
                            <div class="card-header">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="fs-18">Specifications</h6>
                                </div>
                            </div>
                            <div class="card-body pb-1">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Body Type</label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option selected>Seater</option>
                                                <option>Sleeper</option>
                                                <option>Semi Sleeper</option>
                                                <option>AC Sleeper</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Fuel Type</label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option selected>Petrol</option>
                                                <option>Diesal</option>
                                                <option>Electric</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Mileage (km/l)</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">AC Type</label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option selected>Central air conditioners</option>
                                                <option>Ductless mini-split systems</option>
                                                <option>Window units</option>
                                                <option>Portable units</option>
                                                <option>Floor-standing units</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Doors</label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>Plug Doors</option>
                                                <option>Swing-Out Doors</option>
                                                <option selected>Inward-Swinging Doors</option>
                                                <option>Sliding Doors</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Seating Capacity</label>
                                            <input type="text" class="form-control" value="45">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Passenger Capacity</label>
                                            <input type="text" class="form-control" value="45">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Length (ft)</label>
                                            <input type="text" class="form-control" value="40">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Width (ft)</label>
                                            <input type="text" class="form-control" value="8-9">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Height (ft)</label>
                                            <input type="text" class="form-control" value="10">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Max Speed (km/h)</label>
                                            <input type="text" class="form-control" value="190">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Engine Power (HP)</label>
                                            <input type="text" class="form-control" value="900">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Steering Type</label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>Manual Steering</option>
                                                <option>Power-Assisted Steering</option>
                                                <option selected>Four-Wheel Steering</option>
                                                <option>Articulated Steering</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Brakes</label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>Mechanical Brakes</option>
                                                <option>Hydraulic Brakes</option>
                                                <option selected>Air-Hydraulic Brakes</option>
                                                <option>Parking / Emergency Brakes</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Access</label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>Front-Entry Access</option>
                                                <option>Dual-Entry Access</option>
                                                <option>Multiple-Entry Access</option>
                                                <option selected>Step-Entry Access</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow-none" id="departure">
                            <div class="card-header">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h5 class="fs-18">Arrival & Departure</h5>
                                </div>
                            </div>
                            <div class="card-body pb-1">
                                <div class="row">
                                    <div class="col-xxl col-xl-6 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Arrival City</label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>Newyork</option>
                                                <option selected>Boston</option>
                                                <option>Northern Virginia</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xxl col-xl-6 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Arrival Time</label>
                                            <div class="input-icon-end position-relative">
                                                <input type="text" class="form-control timepicker"
                                                    placeholder="-- : -- : -- ">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-clock-hour-10 text-gray-7"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl col-xl-6 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Departure City</label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>Northern Virginia</option>
                                                <option selected>Los Angeles</option>
                                                <option>Newyork</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xxl col-xl-6 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Departure Time</label>
                                            <div class="input-icon-end position-relative">
                                                <input type="text" class="form-control timepicker"
                                                    placeholder="-- : -- : -- ">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-clock-hour-10 text-gray-7"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow-none" id="dropoff">
                            <div class="card-header">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h5 class="fs-18">Pickup & Dropoff</h5>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xxl col-xl-6 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Type of Location</label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>Newyork</option>
                                                <option selected>Boston</option>
                                                <option>Northern Virginia</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Location</label>
                                            <input type="text" class="form-control" value="Newyork">
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Time</label>
                                            <div class="input-icon-end position-relative">
                                                <input type="text" class="form-control timepicker"
                                                    placeholder="-- : -- : -- ">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-clock-hour-10 text-gray-7"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <a href="#" class="btn btn-primary btn-sm add-service"><i
                                            class="isax isax-add-circle me-1"></i>Add New</a>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow-none" id="routes">
                            <div class="card-header">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h5 class="fs-18">Routes</h5>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xxl col-xl-6 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">City</label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>Newyork</option>
                                                <option selected>Boston</option>
                                                <option>Northern Virginia</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Location</label>
                                            <input type="text" class="form-control" value="Newyork">
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Time</label>
                                            <div class="input-icon-end position-relative">
                                                <input type="text" class="form-control timepicker"
                                                    placeholder="-- : -- : -- ">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-clock-hour-10 text-gray-7"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <a href="#" class="btn btn-primary btn-sm add-service"><i
                                            class="isax isax-add-circle me-1"></i>Add New</a>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow-none" id="description">
                            <div class="card-header">
                                <h5 class="fs-18">Description</h5>
                            </div>
                            <div class="card-body text-editor">
                                <div class="snow-editor"></div>
                            </div>
                        </div>
                        <div class="card shadow-none" id="amenities">
                            <div class="card-header">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h5 class="fs-18">Bus Amenities</h5>
                                </div>
                            </div>
                            <div class="card-body pb-2">
                                <div class="row gy-2">
                                    <div class="col-lg-4 col-md-6">
                                        <h6 class="fs-16 mb-2">Comfort & Facilities</h6>
                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                            <input class="form-check-input ms-0 mt-0" type="checkbox" id="service-01">
                                            <label class="form-check-label ms-2" for="service-01">
                                                Wi-Fi
                                            </label>
                                        </div>
                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                            <input class="form-check-input ms-0 mt-0" type="checkbox" id="service-02">
                                            <label class="form-check-label ms-2" for="service-02">
                                                Charging Points
                                            </label>
                                        </div>
                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                            <input class="form-check-input ms-0 mt-0" type="checkbox" id="service-03">
                                            <label class="form-check-label ms-2" for="service-03">
                                                Reading Lights
                                            </label>
                                        </div>
                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                            <input class="form-check-input ms-0 mt-0" type="checkbox" id="service-04">
                                            <label class="form-check-label ms-2" for="service-04">
                                                Recliner Seats
                                            </label>
                                        </div>
                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                            <input class="form-check-input ms-0 mt-0" type="checkbox" id="service-05">
                                            <label class="form-check-label ms-2" for="service-05">
                                                Blankets & Pillows
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <h6 class="fs-16 mb-2">Entertainment</h6>
                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                            <input class="form-check-input ms-0 mt-0" type="checkbox" id="service-07">
                                            <label class="form-check-label ms-2" for="service-07">
                                                TV
                                            </label>
                                        </div>
                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                            <input class="form-check-input ms-0 mt-0" type="checkbox" id="service-08">
                                            <label class="form-check-label ms-2" for="service-08">
                                                Music System
                                            </label>
                                        </div>
                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                            <input class="form-check-input ms-0 mt-0" type="checkbox" id="service-09">
                                            <label class="form-check-label ms-2" for="service-09">
                                                Movie Screens
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <h6 class="fs-16 mb-2">Premium Options</h6>
                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                            <input class="form-check-input ms-0 mt-0" type="checkbox" id="service-013">
                                            <label class="form-check-label ms-2" for="service-013">
                                                Onboard Restroom
                                            </label>
                                        </div>
                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                            <input class="form-check-input ms-0 mt-0" type="checkbox" id="service-014">
                                            <label class="form-check-label ms-2" for="service-014">
                                                Personal TV
                                            </label>
                                        </div>
                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                            <input class="form-check-input ms-0 mt-0" type="checkbox" id="service-015"
                                                checked>
                                            <label class="form-check-label ms-2" for="service-015">
                                                Lounge Area
                                            </label>
                                        </div>
                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                            <input class="form-check-input ms-0 mt-0" type="checkbox" id="service-016">
                                            <label class="form-check-label ms-2" for="service-016">
                                                Sleeper Berths
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow-none" id="location">
                            <div class="card-header">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h5 class="fs-18">Location</h5>
                                </div>
                            </div>
                            <div class="card-body pb-1">
                                <div class="row">
                                    <div class="col-xl-3 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Country</label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>United States</option>
                                                <option selected>Canada</option>
                                                <option>United Kingdom</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">City</label>
                                            <input type="text" class="form-control" value="Oxford Street">
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">State</label>
                                            <input type="text" class="form-control" value="London">
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Zip Code</label>
                                            <input type="text" class="form-control" value="145">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Address</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Address 1</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow-none" id="faq">
                            <div class="card-header">
                                <h5 class="fs-18">FAQ</h5>
                            </div>
                            <div class="card-body">
                                <div class="card shadow-none mb-3">
                                    <div class="card-body px-3 py-2">
                                        <div
                                            class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                                            <h6><a href="#">Does offer free cancellation for a full refund?</a></h6>
                                            <div class="d-flex align-items-center">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_faq"
                                                    class="rounded-edit d-flex align-items-center justify-content-center me-2">
                                                    <i class="isax isax-edit-2"></i>
                                                </a>
                                                <a href="#"
                                                    class="trash-icon d-flex align-items-center justify-content-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete_modal">
                                                    <i class="isax isax-trash text-danger"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow-none mb-3">
                                    <div class="card-body px-3 py-2">
                                        <div
                                            class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                                            <h6><a href="#">Is there a pool?</a></h6>
                                            <div class="d-flex align-items-center">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_faq"
                                                    class="rounded-edit d-flex align-items-center justify-content-center me-2">
                                                    <i class="isax isax-edit-2"></i>
                                                </a>
                                                <a href="#"
                                                    class="trash-icon d-flex align-items-center justify-content-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete_modal">
                                                    <i class="isax isax-trash text-danger"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#add_faq">
                                        <i class="isax isax-add-circle me-1"></i>Add New
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow-none" id="gallery">
                            <div class="card-header">
                                <h5 class="fs-18">Gallery</h5>
                            </div>
                            <div class="card-body">
                                <div
                                    class="file-upload drag-file w-100 d-flex align-items-center justify-content-center flex-column mb-2">
                                    <span class="upload-img d-block mb-2"><i
                                            class="isax isax-document-upload fs-24"></i></span>
                                    <h6 class="mb-1">Upload Gallery Images</h6>
                                    <p class="mb-0">Upload Feature Image First, Image size should below 5MB</p>
                                    <input type="file" accept="video/image">
                                </div>
                                <div class="d-flex align-items-center">
                                    <a href="#" class="gallery-upload-img me-2">
                                        <img src="{{URL::asset('build/img/uploads/upload-01.jpg')}}" alt="Img">
                                        <span
                                            class="trash-icon d-flex align-items-center justify-content-center text-danger gallery-trash"><i
                                                class="isax isax-trash"></i></span>
                                    </a>
                                    <a href="#" class="gallery-upload-img me-2">
                                        <img src="{{URL::asset('build/img/uploads/upload-02.jpg')}}" alt="Img">
                                        <span
                                            class="trash-icon d-flex align-items-center justify-content-center text-danger gallery-trash"><i
                                                class="isax isax-trash"></i></span>
                                    </a>
                                    <a href="#" class="gallery-upload-img me-2">
                                        <img src="{{URL::asset('build/img/uploads/upload-03.jpg')}}" alt="Img">
                                        <span
                                            class="trash-icon d-flex align-items-center justify-content-center text-danger gallery-trash"><i
                                                class="isax isax-trash"></i></span>
                                    </a>
                                    <a href="#" class="gallery-upload-img me-2">
                                        <img src="{{URL::asset('build/img/uploads/upload-04.jpg')}}" alt="Img">
                                        <span
                                            class="trash-icon d-flex align-items-center justify-content-center text-danger gallery-trash"><i
                                                class="isax isax-trash"></i></span>
                                    </a>
                                    <a href="#" class="gallery-upload-img me-2">
                                        <img src="{{URL::asset('build/img/uploads/upload-05.jpg')}}" alt="Img">
                                        <span
                                            class="trash-icon d-flex align-items-center justify-content-center text-danger gallery-trash"><i
                                                class="isax isax-trash"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-center">
                            <button type="button" class="btn btn-light me-2">Reset</button>
                            <button type="submit" class="btn btn-primary">Add New Bus</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /Add New Bus -->
        </div>
    </div>
    <!-- /Page Wrapper -->

    <!-- ========================
        End Page Content
    ========================= -->

@endsection



