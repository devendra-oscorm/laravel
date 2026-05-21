<?php $page="visa-booking-details";?>
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
                    <h2 class="breadcrumb-title mb-2">Visa Booking Details</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{url('index')}}"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item">Visa</li>
                            <li class="breadcrumb-item active" aria-current="page">Visa Booking Details</li>
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

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="upcoming-content">
                                <div
                                    class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded">
                                    <div class="d-flex align-items-center flex-wrap">
                                        <div class="me-2">
                                            <img src="{{URL::asset('build/img/users/user-11.jpg')}}" alt="image"
                                                class="avatar avartar-md avatar-rounded">
                                        </div>
                                        <div>
                                            <h6 class="mb-1">Long term for Academic with Health Insurance</h6>
                                            <div class="title-list d-flex align-items-center">
                                                <p class="text-primary me-2 mb-0 fs-14">#VS-1254 <i
                                                        class="ti ti-point-filled ms-2"></i></p>
                                                <p
                                                    class="d-flex align-items-center fs-14 pe-2 me-2  border-light fw-normal">
                                                    <i class="isax isax-location5 me-1"></i>Egypt
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <span
                                            class="badge badge-purple rounded-pill d-inline-flex align-items-center fs-10"><i
                                                class="fa-solid fa-circle fs-5 me-1"></i>Applied</span>
                                    </div>
                                </div>
                                <div class="upcoming-details pb-4 border-bottom mb-4">
                                    <h6 class="mb-2">Visa Details</h6>
                                    <div class="row gy-3">
                                        <div class="col-lg-3">
                                            <h6 class="fs-14">Country</h6>
                                            <p class="text-gray-6 fs-16 ">Egypt</p>
                                        </div>
                                        <div class="col-lg-3">
                                            <h6 class="fs-14">Catgeory</h6>
                                            <p class="text-gray-6 fs-16 ">Student Visa</p>
                                        </div>
                                        <div class="col-lg-3">
                                            <h6 class="fs-14">Validity</h6>
                                            <p class="text-gray-6 fs-16 ">1 Year</p>
                                        </div>
                                        <div class="col-lg-3">
                                            <h6 class="fs-14">No of Persons</h6>
                                            <p class="text-gray-6 fs-16 ">04</p>
                                        </div>
                                        <div class="col-lg-3">
                                            <h6 class="fs-14">Processing Time</h6>
                                            <p class="text-gray-6 fs-16 ">7-10 Working Day</p>
                                        </div>
                                        <div class="col-lg-3">
                                            <h6 class="fs-14">Visa Mode</h6>
                                            <p class="text-gray-6 fs-16 ">Consular Visa</p>
                                        </div>
                                        <div class="col-lg-3">
                                            <h6 class="fs-14">Applied On</h6>
                                            <p class="text-gray-6 fs-16 ">20 May 2026</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="upcoming-details">
                                    <h6 class="mb-2">Personal Details</h6>
                                    <div class="row gy-3">
                                        <div class="col-lg-4">
                                            <h6 class="fs-14">Name</h6>
                                            <p class="text-gray-6 fs-16 ">Chris Foxy</p>
                                        </div>
                                        <div class="col-lg-4">
                                            <h6 class="fs-14">Email</h6>
                                            <p class="text-gray-6 fs-16 ">chrfo2356@example.com</p>
                                        </div>
                                        <div class="col-lg-4">
                                            <h6 class="fs-14">Date of Birth</h6>
                                            <p class="text-gray-6 fs-16 ">25 May 2005</p>
                                        </div>
                                        <div class="col-lg-4">
                                            <h6 class="fs-14">Phone</h6>
                                            <p class="text-gray-6 fs-16 ">+1 12656 26654</p>
                                        </div>
                                        <div class="col-lg-4">
                                            <h6 class="fs-14">Document</h6>
                                            <div class="d-flex">
                                                <p class="text-gray-6 fs-16 me-2">Passport.pdf</p>
                                                <a href="#"
                                                    class="fw-medium text-primary text-decoration-underline">Download</a>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="mb-2">Short Description</h6>
                                    <p>Apply for a visa to study abroad for an academic year with comprehensive
                                        healthcare coverage.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <a href="#" class="btn btn-primary">Cancel</a>
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



