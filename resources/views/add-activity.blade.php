<?php $page="add-activity";?>
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
                    <h2 class="breadcrumb-title mb-2">Add Activity</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{url('index')}}"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item">Activity</li>
                            <li class="breadcrumb-item active" aria-current="page">Add Activity</li>
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
                                <h5 class="mb-3">Add Activity</h5>
                                <ul class="add-tab-list">
                                    <li><a href="#activity-details" class="active">Activity Details</a></li>
                                    <li><a href="#location">Location</a></li>
                                    <li><a href="#timeslots">Timeslots</a></li>
                                    <li><a href="#dropoff">Itinerary</a></li>
                                    <li><a href="#extra">Extra Services</a></li>
                                    <li><a href="#faq">FAQ</a></li>
                                    <li><a href="#gallery">Gallery</a></li>
                                    <li><a href="#description">Description</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Sidebar -->

                <div class="col-lg-9">
                    <form action="{{url('bus-list')}}">
                        <div class="card shadow-none" id="activity-details">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="fs-18">Activity Details</h5>
                                <button type="button" class="btn btn-sm p-2 btn-light d-inline-flex align-items-center justify-content-center rounded-circle"><i class="isax isax-edit-2"></i></button>
                            </div>

                            <div class="card-body pb-1">
                                <div class="row">
                                    <!-- Activity Name -->
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Activity Name</label>
                                            <input type="text" class="form-control" name="activity_name">
                                        </div>
                                    </div>

                                    <!-- Category -->
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Category</label>
                                            <select class="select">
                                                <option value="">Select Category</option>
                                                <option value="adventure">Adventure</option>
                                                <option value="water_sports">Water Sports</option>
                                                <option value="desert_safari">Desert Safari</option>
                                                <option value="city_tour">City Tour</option>
                                                <option value="cruise">Cruise</option>
                                                <option value="theme_park">Theme Park</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Start Date -->
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Start Date</label>
                                            <div class="input-icon-end position-relative">
                                                <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                                <span class="input-icon-addon">
                                                    <i class="isax isax-calendar"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- End Date -->
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">End Date</label>
                                            <div class="input-icon-end position-relative">
                                                <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                                <span class="input-icon-addon">
                                                    <i class="isax isax-calendar"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Total People -->
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Total Number Of People Allotted</label>
                                            <input type="text" class="form-control" name="total_people">
                                        </div>
                                    </div>

                                    <!-- Pricing -->
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Pricing (USD)</label>
                                            <input type="text" class="form-control" name="price">
                                        </div>
                                    </div>

                                    <!-- Offer Price -->
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Offer Price (USD)</label>
                                            <input type="text" class="form-control" name="offer_price">
                                        </div>
                                    </div>

                                    <!-- Duration -->
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Duration</label>
                                            <div class="input-icon-end position-relative">
                                                <input type="text" class="form-control timepicker" placeholder="-- : -- : -- ">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-clock-hour-10 text-gray-7"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Difficulty -->
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Difficulty</label>
                                            <select class="select">
                                                <option value="">Select</option>
                                                <option value="hard">Hard</option>
                                                <option value="medium">Medium</option>
                                                <option value="easy">Easy</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Hotel Pickup -->
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Hotel Pickup</label>
                                            <select class="select">
                                                <option value="">Select</option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Equipments -->
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Equipments</label>
                                            <select class="select">
                                                <option value="">Select</option>
                                                <option value="helmet">Helmet</option>
                                                <option value="life_jacket">Life Jacket</option>
                                                <option value="goggles">Goggles</option>
                                                <option value="safety_kit">Safety Kit</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Guide -->
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Guide</label>
                                            <select class="select">
                                                <option value="">Select</option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Languages -->
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Languages</label>
                                            <select class="form-select" name="language">
                                                <option value="">Select</option>
                                                <option value="english">English</option>
                                                <option value="arabic">Arabic</option>
                                                <option value="russian">Russian</option>
                                                <option value="german">German</option>
                                                <option value="french">French</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="card shadow-none" id="location">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="fs-18">Location</h5>
                                <button type="button" class="btn btn-sm p-2 btn-light d-inline-flex align-items-center justify-content-center rounded-circle"><i class="isax isax-edit-2"></i></button>
                            </div>
                            <div class="card-body pb-1">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Address Line 1</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Address Line 2</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Country</label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>United States</option>
                                                <option>Canada</option>
                                                <option>United Kingdom</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">State</label>
                                            <select class="select">
                                                <option value="">Select State</option>
                                                <option value="california">California</option>
                                                <option value="texas">Texas</option>
                                                <option value="florida">Florida</option>
                                                <option value="new_york">New York</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">City</label>
                                            <select class="select">
                                                <option value="">Select City</option>
                                                <option value="los_angeles">Los Angeles</option>
                                                <option value="houston">Houston</option>
                                                <option value="miami">Miami</option>
                                                <option value="new_york_city">New York City</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Zip Code</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="card shadow-none" id="timeslots">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="fs-18">Timeslots</h5>
                                <button type="button" class="btn btn-sm p-2 btn-light d-inline-flex align-items-center justify-content-center rounded-circle"><i class="isax isax-edit-2"></i></button>
                            </div>
                            <div class="card-body">
                                <div class="timeslots">
                                    <div class="row">
                                        <div class="col-xl-4 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Timeslots Name</label>
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option>Morning</option>
                                                    <option>Evening</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">From</label>
                                                <div class="input-icon-end position-relative">
                                                    <input type="text" class="form-control timepicker"
                                                        placeholder="-- : -- : -- ">
                                                    <span class="input-icon-addon">
                                                        <i class="ti ti-clock-hour-10 text-gray-7"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">To</label>
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
                            <div>
                            <a href="#" class="btn btn-primary btn-sm add-timeslot"><i class="isax isax-add-circle me-1"></i>Add New</a>
                            </div>
                            </div>
                        </div>

                        <div class="card shadow-none" id="itenary">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="fs-18">Itenary</h5>
                                <button type="button" class="btn btn-sm p-2 btn-light d-inline-flex align-items-center justify-content-center rounded-circle"><i class="isax isax-edit-2"></i></button>
                            </div>
                            <div class="card-body">
                                <div class="card shadow-none mb-3">
                                    <div class="card-body px-3 py-2">
                                        <div
                                            class=" d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                                            <h6><a href="#">Day 1, Kickoff in Los Angeles</a></h6>
                                            <div class="d-flex align-items-center">
                                                <a href="#"
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
                                        data-bs-target="#add_iternary">
                                        <i class="isax isax-add-circle me-1"></i>Add New
                                    </a>
                                </div>
                            </div>
                        </div>

                         <div class="card shadow-none" id="extra">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="fs-18">Extra Services</h5>
                                <button type="button" class="btn btn-sm p-2 btn-light d-inline-flex align-items-center justify-content-center rounded-circle"><i class="isax isax-edit-2"></i></button>
                            </div>
                            <div class="card-body">
                                <div class="extra-service">
                                    <div class="row">
                                        <div class="col-xl-4 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Service Name</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Price Type</label>
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option>COD</option>
                                                    <option>Online</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Offer Price (USD)</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                                <div>
                                    <a href="#" class="btn btn-primary btn-sm add-extraservice"><i class="isax isax-add-circle me-1"></i>Add New</a>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow-none" id="basic_info">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="fs-18">Basic Info</h5>
                                <button type="button" class="btn btn-sm p-2 btn-light d-inline-flex align-items-center justify-content-center rounded-circle"><i class="isax isax-edit-2"></i></button>
                            </div>
                            <div class="card-body pb-1">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Bus Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Bus Number</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Bus Type</label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>Seater</option>
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
                                                    placeholder="dd/mm/yyyy">
                                                <span class="input-icon-addon">
                                                    <i class="isax isax-calendar"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow-none" id="faq">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="fs-18">Faq</h5>
                                <button type="button" class="btn btn-sm p-2 btn-light d-inline-flex align-items-center justify-content-center rounded-circle"><i class="isax isax-edit-2"></i></button>
                            </div>
                            <div class="card-body">
                                <div class="card shadow-none mb-3">
                                    <div class="card-body px-3 py-2">
                                        <div
                                            class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                                            <h6><a href="#">Is this activity suitable for beginners?</a></h6>
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
                                            <h6><a href="#">Do I need to know swimming to join?</a></h6>
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
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="fs-18">Gallery</h5>
                                <button type="button" class="btn btn-sm p-2 btn-light d-inline-flex align-items-center justify-content-center rounded-circle"><i class="isax isax-edit-2"></i></button>
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
                                        <img src="{{URL::asset('build/img/uploads/upload-06.jpg')}}" alt="Img">
                                        <span
                                            class="trash-icon d-flex align-items-center justify-content-center text-danger gallery-trash"><i
                                                class="isax isax-trash"></i></span>
                                    </a>
                                    <a href="#" class="gallery-upload-img me-2">
                                        <img src="{{URL::asset('build/img/uploads/upload-07.jpg')}}" alt="Img">
                                        <span
                                            class="trash-icon d-flex align-items-center justify-content-center text-danger gallery-trash"><i
                                                class="isax isax-trash"></i></span>
                                    </a>
                                    <a href="#" class="gallery-upload-img me-2">
                                        <img src="{{URL::asset('build/img/uploads/upload-08.jpg')}}" alt="Img">
                                        <span
                                            class="trash-icon d-flex align-items-center justify-content-center text-danger gallery-trash"><i
                                                class="isax isax-trash"></i></span>
                                    </a>
                                    <a href="#" class="gallery-upload-img me-2">
                                        <img src="{{URL::asset('build/img/uploads/upload-09.jpg')}}" alt="Img">
                                        <span
                                            class="trash-icon d-flex align-items-center justify-content-center text-danger gallery-trash"><i
                                                class="isax isax-trash"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                         <div class="card shadow-none" id="description">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="fs-18">Description</h5>
                                <button type="button" class="btn btn-sm p-2 btn-light d-inline-flex align-items-center justify-content-center rounded-circle"><i class="isax isax-edit-2"></i></button>
                            </div>
                            <div class="card-body text-editor">
                                <div class="snow-editor"></div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-center">
                            <button type="button" class="btn btn-light me-2">Reset</button>
                            <button type="submit" class="btn btn-primary">Add New Activity</button>
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



