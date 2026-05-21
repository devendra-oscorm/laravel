<?php $page="visa-tracking";?>
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
                    <h2 class="breadcrumb-title mb-2">Visa Tracking</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{url('index')}}"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item">Visa</li>
                            <li class="breadcrumb-item active" aria-current="page">Visa Tracking</li>
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

            <!-- row start -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="visa-tracking-card-one">
                        <div class="card-title">
                            <h2>Track Your Visa Application</h2>
                            <p>Enter your tracking number to view the current status of your visa application</p>
                        </div>
                        <div class="card-content">
                            <div class="border-bottom mb-4">
                                <div class="track-input">
                                    <input type="text" placeholder="Enter tracking number (e.g., VIS2024-US-123456)"
                                        class="form-control form-control-lg">
                                    <button class="btn btn-primary"><i
                                            class="isax isax-search-normal me-2"></i>Track</button>
                                </div>
                                <div class="card">
                                    <div class="card-body text-start">
                                        <p>Your tracking number was sent to your email after submitting your
                                            application. You can also find it in your application confirmation receipt.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="fs-16 fw-semibold text-dark">Try these sample tracking numbers:</div>
                                <div class="d-flex align-items-center justify-content-center gap-2 mt-3 flex-wrap">
                                    <a href="#" class="btn btn-outline-light rounded">VIS2024-US-123456</a>
                                    <a href="#" class="btn btn-outline-light rounded">VIS2024-US-123456</a>
                                    <a href="#" class="btn btn-outline-light rounded">VIS2024-US-123456</a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div
                                class="upcoming-title mb-4 d-flex align-items-center justify-content-between p-3 rounded mb-3">
                                <div class="d-flex align-items-center flex-wrap">
                                    <div>
                                        <div class="mb-1 fs-28 fw-bold">Application Status</div>
                                        <p class="me-2 mb-0">Tracking Number: <span
                                                class="text-primary">VIS2024-US-123456</span></p>
                                    </div>
                                </div>
                                <div>
                                    <span
                                        class="badge badge-purple rounded-pill d-inline-flex align-items-center fs-10"><i
                                            class="fa-solid fa-circle fs-5 me-1"></i>Under Review</span>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <p class="mb-0">Processing Progress</p>
                                    <p class="mb-0">3 of 5 steps completed</p>
                                </div>
                                <div class="progress w-100" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100" style="height: 8px">
                                    <div class="progress-bar bg-primary" style="width: 90%"></div>
                                </div>
                            </div>
                            <div class="row align-items-center justify-content-between gap-3 mb-4">
                                <div class="col-lg-3">
                                    <div class="fs-14 text-dark fw-medium">Name</div>
                                    <p>Chris Foxy</p>
                                </div>
                                <div class="col-lg-3">
                                    <div class="fs-14 text-dark fw-medium">Visa Type</div>
                                    <p>Tourist Visa</p>
                                </div>
                                <div class="col-lg-3">
                                    <div class="fs-14 text-dark fw-medium">Destination</div>
                                    <p>United States</p>
                                </div>
                                <div class="col-lg-3">
                                    <div class="fs-14 text-dark fw-medium">Submitted On</div>
                                    <p>25 May 2005</p>
                                </div>
                            </div>
                            <div class="card bg-info-transparent border-purple mb-0 expect-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <span class="me-3">
                                            <i class="isax isax-info-circle5 fs-24 text-purple"></i>
                                        </span>
                                        <div>
                                            <div class="fs-14 fw-medium text-dark">Expected Completion Date</div>
                                            <p class="text-dark">Thursday, January 25, 2024</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="visa-timeline-card">
                        <h2>Application Timeline</h2>
                        <p class="subtitle">Track the progress of your visa application</p>

                        <div class="timeline">

                            <!-- Item -->
                            <div class="timeline-item completed">
                                <div class="timeline-icon">
                                    <i class="isax isax-tick-circle"></i>
                                </div>
                                <div class="timeline-content">
                                    <h4>Application Submitted</h4>
                                    <p>Your application has been received and is in queue for processing</p>
                                </div>
                                <div class="timeline-date">25 May 2026, 02:15 PM</div>
                            </div>

                            <!-- Item -->
                            <div class="timeline-item completed">
                                <div class="timeline-icon">
                                    <i class="isax isax-tick-circle"></i>
                                </div>
                                <div class="timeline-content">
                                    <h4>Document Verification</h4>
                                    <p>All documents are being verified by our team</p>
                                </div>
                                <div class="timeline-date">26 May 2026, 04:25 PM</div>
                            </div>

                            <!-- Item -->
                            <div class="timeline-item completed">
                                <div class="timeline-icon">
                                    <i class="isax isax-tick-circle"></i>
                                </div>
                                <div class="timeline-content">
                                    <h4>Under Review</h4>
                                    <p>Application is currently being reviewed by the consulate</p>
                                </div>
                                <div class="timeline-date">29 May 2026, 06:15 PM</div>
                            </div>

                            <!-- Active -->
                            <div class="timeline-item">
                                <div class="timeline-icon  bg-primary">
                                    <i class="isax isax-clock"></i>
                                </div>
                                <div class="timeline-content">
                                    <h4>Pending Interview</h4>
                                    <p class="mb-0">Interview may be required - awaiting confirmation</p>
                                    <span class="status">Currently in progress</span>
                                </div>
                            </div>

                            <!-- Upcoming -->
                            <div class=" timeline-item1 upcoming">
                                <div class="timeline-icon">
                                    <i class="ti ti-point-filled text-body"></i>
                                </div>
                                <div class="timeline-content">
                                    <h4>Approved</h4>
                                    <p>Visa has been approved and is ready for collection</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row row-gap-3">
                        <div class="col-lg-6 d-flex">
                            <div class="card flex-fill mb-0">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <div class="fs-20 fw-semibold text-dark">
                                            Quick Actions
                                        </div>
                                        <p>Manage your application</p>
                                    </div>

                                    <div>
                                        <a href="#"
                                            class="btn btn-outline-light rounded fs-16 fw-normal w-100 text-start mb-3">
                                            <i class="ti ti-download"></i> Download Application Receipt</a>
                                        <a href="#"
                                            class="btn btn-outline-light rounded fs-16 fw-normal w-100 text-start mb-3">
                                            <i class="ti ti-download"></i> Download Documents</a>
                                        <a href="#"
                                            class="btn btn-outline-light rounded fs-16 fw-normal w-100 text-start mb-0">
                                            <i class="ti ti-mail"></i> Email Status Updates</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex">
                            <div class="card flex-fill mb-0">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <div class="fs-20 fw-semibold text-dark">
                                            Need Help?
                                        </div>
                                        <p>Our support team is here for you</p>
                                    </div>
                                    <div class="card bg-light mb-3">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <span class="me-3">
                                                    <i class="isax isax-call5 fs-24 text-primary"></i>
                                                </span>
                                                <div>
                                                    <p class="text-dark mb-0">Call Us</p>
                                                    <div class="fs-14 fw-medium text-dark">+1 (555) 123-4567</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card bg-light mb-0">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <span class="me-3">
                                                    <i class="ti ti-mail fs-24 text-primary"></i>
                                                </span>
                                                <div>
                                                    <p class="text-dark mb-0">Email Support</p>
                                                    <div class="fs-14 fw-medium text-dark">support@visaportal.com</div>
                                                </div>
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

        </div>
    </div>
    <!-- /Page Wrapper -->

    <!-- ========================
        End Page Content
    ========================= -->

@endsection



