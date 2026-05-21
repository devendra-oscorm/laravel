<?php $page="add-guide";?>
@extends('layout.mainlayout')
@section('content')

    <!-- ========================
        Start Page Content
    ========================= -->

    <!-- Breadcrumb -->
    <div class="breadcrumb-bar breadcrumb-bg-10 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title mb-2">Add Guide</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{url('index')}}"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{url('guide-grid')}}">Guide</a></li>
                            <li class="breadcrumb-item">Add Guide</li>
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
                <div class="col-lg-3 theiaStickySidebar">
                    <div class="card border-0 mb-4 mb-lg-0">
                        <div class="card-body">
                            <div>
                                <h5 class="mb-3">Add Guide</h5>
                                <ul class="add-tab-list">
                                    <li><a href="#basic_info" class="active">Basic Information</a></li>
                                    <li><a href="#location">Location</a></li>
                                    <li><a href="#pricing">Pricing</a></li>
                                    <li><a href="#availability">Availability</a></li>
                                    <li><a href="#language_skills">Language & Skills</a></li>
                                    <li><a href="#certifications">Certifications & Safety</a></li>
                                    <li><a href="#description">Description</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <form action="{{url('guide-grid')}}">
                        <div class="card shadow-none" id="basic_info">
                            <div class="card-header">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h5 class="fs-18">Guide Details</h5>
                                </div>
                            </div>
                            <div class="card-body pb-1">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="d-flex align-items-center mb-3">
                                            <img src="{{URL::asset('build/img/users/user-01.jpg')}}" alt="image"
                                                class="img-fluid avatar avatar-xxl br-10 flex-shrink-0 me-3">
                                            <div>
                                                <p class="fs-14 text-gray-6 fw-normal mb-2">Recommended dimensions are
                                                    typically 400 x 400 pixels.</p>
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2">
                                                        <label class="upload-btn" for="fileUpload">Upload</label>
                                                        <input type="file" id="fileUpload" style="display: none;">
                                                    </div>
                                                    <a href="#" class="btn btn-light btn-md">Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">First Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Gender</label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Phone</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Date of Birth</label>
                                            <div class="input-icon-end position-relative">
                                                <input type="text" class="form-control datetimepicker"
                                                    placeholder="dd/mm/yyyy" value="02-05-2024">
                                                <span class="input-icon-addon">
                                                    <i class="isax isax-calendar"></i>
                                                </span>
                                            </div>
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
                                            <label class="form-label">City</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">State</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Zip Code</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Operating Areas</label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>United States</option>
                                                <option>Canada</option>
                                                <option>United Kingdom</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow-none" id="pricing">
                            <div class="card-header">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h5 class="fs-18">Pricing</h5>
                                </div>
                            </div>
                            <div class="card-body pb-1">
                                <div class="row">
                                    <div class="col-xl-6 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Price (USD)</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Overtime Price (USD)</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow-none" id="availability">
                            <div class="card-header">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h5 class="fs-18">Availability</h5>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row align-items-center mb-3">
                                    <div class="col-lg-4">
                                        <div class="form-check form-switch mb-1">
                                            <input class="form-check-input me-2" type="checkbox" role="switch"
                                                id="check1">
                                            <label class="form-label mb-0" for="check1">Sunday</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div>
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
                                    <div class="col-lg-4">
                                        <div>
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
                                <div class="row align-items-center mb-3">
                                    <div class="col-lg-4">
                                        <div class="form-check form-switch mb-1">
                                            <input class="form-check-input me-2" type="checkbox" role="switch"
                                                id="check2">
                                            <label class="form-label mb-0" for="check2">Monday</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div>
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
                                    <div class="col-lg-4">
                                        <div>
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
                                <div class="row align-items-center mb-3">
                                    <div class="col-lg-4">
                                        <div class="form-check form-switch mb-1">
                                            <input class="form-check-input me-2" type="checkbox" role="switch"
                                                id="check3">
                                            <label class="form-label mb-0" for="check3">Tuesday</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div>
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
                                    <div class="col-lg-4">
                                        <div>
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
                                <div class="row align-items-center mb-3">
                                    <div class="col-lg-4">
                                        <div class="form-check form-switch mb-1">
                                            <input class="form-check-input me-2" type="checkbox" role="switch"
                                                id="check4">
                                            <label class="form-label mb-0" for="check4">Wednesday</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div>
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
                                    <div class="col-lg-4">
                                        <div>
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
                                <div class="row align-items-center mb-3">
                                    <div class="col-lg-4">
                                        <div class="form-check form-switch mb-1">
                                            <input class="form-check-input me-2" type="checkbox" role="switch"
                                                id="check5">
                                            <label class="form-label mb-0" for="check5">Thursday</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div>
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
                                    <div class="col-lg-4">
                                        <div>
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
                                <div class="row align-items-center mb-3">
                                    <div class="col-lg-4">
                                        <div class="form-check form-switch mb-1">
                                            <input class="form-check-input me-2" type="checkbox" role="switch"
                                                id="check6">
                                            <label class="form-label mb-0" for="check6">Friday</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div>
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
                                    <div class="col-lg-4">
                                        <div>
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
                                <div class="row align-items-center">
                                    <div class="col-lg-4">
                                        <div class="form-check form-switch mb-1">
                                            <input class="form-check-input me-2" type="checkbox" role="switch"
                                                id="check7">
                                            <label class="form-label mb-0" for="check7">Saturday</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div>
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
                                    <div class="col-lg-4">
                                        <div>
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
                        </div>
                        <div class="card shadow-none" id="language_skills">
                            <div class="card-header">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h5 class="fs-18">Language & Skills</h5>
                                </div>
                            </div>
                            <div class="card-body pb-1">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Languages Known</label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>English</option>
                                                <option>Arabic</option>
                                                <option>French</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Tour Types</label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>City Tour</option>
                                                <option>Adventure Tour</option>
                                                <option>Cultural Tour</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Activity Expertise</label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>Hiking</option>
                                                <option>Camping</option>
                                                <option>Photography</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow-none" id="certifications">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="fs-18">Certifications & Safety</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Certified Guide</label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">First Aid Trained</label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Certification Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="upload-certificate-wrapper mb-3">
                                        <div class="upload-certificate">
                                            <div
                                                class="file-upload drag-file w-100 d-flex align-items-center justify-content-center flex-column mb-2">
                                                <span class="upload-img d-block mb-2">
                                                    <i class="isax isax-document-upload fs-24"></i>
                                                </span>
                                                <h6 class="mb-1">Upload Gallery Images</h6>
                                                <p class="mb-0">Upload Feature Image First, Image size should below 5MB
                                                </p>
                                                <input type="file" accept="image/*,video/*">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary add-upload-certificate">
                                        <i class="isax isax-add-circle5 me-1"></i>Add New
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow-none" id="description">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="fs-18">Description</h5>
                            </div>
                            <div class="card-body text-editor">
                                <div class="snow-editor"></div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-center">
                            <button type="button" class="btn btn-light me-2">Reset</button>
                            <button type="submit" class="btn btn-primary">Add New Guide</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->

    <!-- ========================
        End Page Content
    ========================= -->

@endsection



