<?php $page="visa-requirements";?>
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
                    <h2 class="breadcrumb-title mb-2">Visa Requirements</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{url('index')}}"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item">Visa</li>
                            <li class="breadcrumb-item active" aria-current="page">Visa Requirements</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- Page Wrapper -->
    <div class="content">

        <section class="fast-visa-section section-padding">
            <div class="container">
                <!-- row start -->
                <div class="row align-items-center row-gap-5">
                    <div class="col-lg-6">
                        <div class="visa-section-header text-start">
                            <span>Fast & Reliable Visa Processing</span>
                            <h2>Your Journey Starts Here</h2>
                            <p>Get your visa approved quickly with our comprehensive guide and streamlined application
                                process. We make travel dreams a reality.</p>
                        </div>
                        <div class="mb-4">
                            <p class="mb-3"><i class="isax isax-information5 text-purple me-2"></i>Processing time as
                                fast as 3-5 business days</p>
                            <p class="mb-3"><i class="isax isax-information5 text-purple me-2"></i>95% approval rate for
                                complete applications</p>
                            <p><i class="isax isax-information5 text-purple me-2"></i>24/7 customer support throughout
                                the process</p>
                        </div>
                        <div class="d-flex align-items-center mt-4">
                            <a href="{{url('visa-grid')}}" class="btn btn-light me-2">Start Application</a>
                            <a href="#" class="btn btn-primary">Check Requirments</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="visa-requirement-img">
                            <img src="{{URL::asset('build/img/visa/visa-requirements.jpg')}}" alt="visa-requirement">
                        </div>
                    </div>
                </div>
                <!-- row end -->
            </div>
        </section>

        <section class="general-visa-section section-padding">
            <div class="container">
                <div class="visa-section-header">
                    <span>General Visa Requirements</span>
                    <h2>Ensure you have all the necessary documents before starting your application.</h2>
                </div>

                <!-- row start -->
                <div class="row row-gap-4">
                    <div class="col-lg-4 d-flex">
                        <div class="general-visa-card-one flex-fill">
                            <img src="{{URL::asset('build/img/visa/visa-requirement-card-one-bg.png')}}"
                                alt="visa-requirement-card-one-bg" class="img-fluid card-bg">
                            <div class="card-title">
                                Valid Passport
                            </div>
                            <p>Passport must be valid for at least 6 months beyond your intended stay</p>
                            <p class="mb-3"><i class="ti ti-bolt-filled me-2"></i>Original passport with at least 2
                                blank pages</p>
                            <p class="mb-3"><i class="ti ti-bolt-filled me-2"></i>Copy of passport bio data page</p>
                            <p class="mb-0"><i class="ti ti-bolt-filled me-2"></i>Previous passports if applicable</p>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex">
                        <div class="general-visa-card-one flex-fill">
                            <img src="{{URL::asset('build/img/visa/visa-requirement-card-one-bg.png')}}"
                                alt="visa-requirement-card-one-bg" class="img-fluid card-bg">
                            <div class="card-title">
                                Photographs
                            </div>
                            <p>Recent passport-sized photographs meeting specific requirements</p>
                            <p class="mb-3"><i class="ti ti-bolt-filled me-2"></i>2 color photographs (35mm x 45mm)</p>
                            <p class="mb-3"><i class="ti ti-bolt-filled me-2"></i>White background, taken within last 6
                                months</p>
                            <p class="mb-0"><i class="ti ti-bolt-filled me-2"></i>Clear face visibility, no glasses</p>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex">
                        <div class="general-visa-card-one flex-fill">
                            <img src="{{URL::asset('build/img/visa/visa-requirement-card-one-bg.png')}}"
                                alt="visa-requirement-card-one-bg" class="img-fluid card-bg">
                            <div class="card-title">
                                Application Form
                            </div>
                            <p>Completed and signed visa application form our Portal</p>
                            <p class="mb-3"><i class="ti ti-bolt-filled me-2"></i>Online application form filled
                                accurately</p>
                            <p class="mb-3"><i class="ti ti-bolt-filled me-2"></i>Printed and signed by applicant</p>
                            <p class="mb-0"><i class="ti ti-bolt-filled me-2"></i>All sections completed in English</p>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex">
                        <div class="general-visa-card-one flex-fill">
                            <img src="{{URL::asset('build/img/visa/visa-requirement-card-one-bg.png')}}"
                                alt="visa-requirement-card-one-bg" class="img-fluid card-bg">
                            <div class="card-title">
                                Travel Documents
                            </div>
                            <p>Proof of travel plans and accommodation with the travellers</p>
                            <p class="mb-3"><i class="ti ti-bolt-filled me-2"></i>Flight reservation or itinerary</p>
                            <p class="mb-3"><i class="ti ti-bolt-filled me-2"></i>Hotel bookings or invitation letter
                            </p>
                            <p class="mb-0"><i class="ti ti-bolt-filled me-2"></i>Travel insurance (recommended)</p>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex">
                        <div class="general-visa-card-one flex-fill">
                            <img src="{{URL::asset('build/img/visa/visa-requirement-card-one-bg.png')}}"
                                alt="visa-requirement-card-one-bg" class="img-fluid card-bg">
                            <div class="card-title">
                                Financial Proof
                            </div>
                            <p>Evidence of sufficient funds for the trip with the extra amount</p>
                            <p class="mb-3"><i class="ti ti-bolt-filled me-2"></i>Bank statements (last 3-6 months)</p>
                            <p class="mb-3"><i class="ti ti-bolt-filled me-2"></i>Employment letter or business proof
                            </p>
                            <p class="mb-0"><i class="ti ti-bolt-filled me-2"></i>Income tax returns (if self-employed)
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex">
                        <div class="general-visa-card-one flex-fill">
                            <img src="{{URL::asset('build/img/visa/visa-requirement-card-one-bg.png')}}"
                                alt="visa-requirement-card-one-bg" class="img-fluid card-bg">
                            <div class="card-title">
                                Supporting Documents
                            </div>
                            <p>Additional documents based on visa type and categories</p>
                            <p class="mb-3"><i class="ti ti-bolt-filled me-2"></i>Purpose-specific documents</p>
                            <p class="mb-3"><i class="ti ti-bolt-filled me-2"></i>Proof of ties to home country</p>
                            <p class="mb-0"><i class="ti ti-bolt-filled me-2"></i>Police clearance certificate (if
                                required)</p>
                        </div>
                    </div>
                </div>
                <!-- row end -->

            </div>
        </section>

        <section class="service-work-section section-padding">
            <div class="container">
                <div class="row row-gap-4">
                    <div class="col-lg-3 d-flex">
                        <div class="card bg-t flex-fill bg-transparent border-0 shadow-none mb-0">
                            <div class="card-body">
                                <h2>Here’s a simple breakdown of how our services work</h2>
                                <a href="#" class="btn btn-light">Start Application</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 d-flex">
                        <div class="card mb-0 flex-fill">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <span
                                        class="bg-secondary text-white p-3 rounded-circle d-inline-flex align-items-center justify-content-center">
                                        <i class="isax isax-buildings-2 fs-32"></i>
                                    </span>

                                    <span
                                        class="p-2 bg-light rounded d-inline-flex align-items-center justify-content-center fw-medium">01</span>
                                </div>
                                <div>
                                    <div class="fs-20 fw-semibold text-dark mb-2">Upload your documents</div>
                                    <p>Select the appropriate visa category based on your travel purpose and review the
                                        specific requirements.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 d-flex">
                        <div class="card mb-0 flex-fill">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <span
                                        class="bg-teal text-white p-3 rounded-circle d-inline-flex align-items-center justify-content-center">
                                        <i class="isax isax-calendar-edit5 fs-32"></i>
                                    </span>

                                    <span
                                        class="p-2 bg-light rounded d-inline-flex align-items-center justify-content-center fw-medium">02</span>
                                </div>
                                <div>
                                    <div class="fs-20 fw-semibold text-dark mb-2">Submit Application</div>
                                    <p>Fill out the online application form and upload all required documents. Our
                                        system validates submission.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 d-flex">
                        <div class="card mb-0 flex-fill">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <span
                                        class="bg-indigo text-white p-3 rounded-circle d-inline-flex align-items-center justify-content-center">
                                        <i class="isax isax-direct-send5 fs-32"></i>
                                    </span>

                                    <span
                                        class="p-2 bg-light rounded d-inline-flex align-items-center justify-content-center fw-medium">03</span>
                                </div>
                                <div>
                                    <div class="fs-20 fw-semibold text-dark mb-2">Get Approval</div>
                                    <p>Track your application status online. Once approved, receive your visa
                                        electronically or via courier service.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="counter-section section-padding pb-0">
            <div class="container">
                <div class="row justify-content-center row-gap-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="counter-card">
                            <img src="{{URL::asset('build/img/visa/visa-requirement-counter-bg-01.png')}}" alt="img" class="counter-bg1">
                            <img src="{{URL::asset('build/img/visa/visa-requirement-counter-bg-02.png')}}" alt="img" class="counter-bg2">

                            <div class="counter-content">
                                3-5 Days
                            </div>
                            <p class="fw-medium">Average Processing Time</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="counter-card">
                            <img src="{{URL::asset('build/img/visa/visa-requirement-counter-bg-01.png')}}" alt="img" class="counter-bg1">
                            <img src="{{URL::asset('build/img/visa/visa-requirement-counter-bg-02.png')}}" alt="img" class="counter-bg2">

                            <div class="counter-content">
                                95%
                            </div>
                            <p class="fw-medium">Success Rate</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="counter-card">
                            <img src="{{URL::asset('build/img/visa/visa-requirement-counter-bg-01.png')}}" alt="img" class="counter-bg1">
                            <img src="{{URL::asset('build/img/visa/visa-requirement-counter-bg-02.png')}}" alt="img" class="counter-bg2">

                            <div class="counter-content">
                                24/7
                            </div>
                            <p class="fw-medium">Customer Support</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="visa-faq-section section-padding pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="visa-section-header">
                            <span>Frequently Asked Questions</span>
                            <h2>Find answers to common questions</h2>
                        </div>
                        <div class="accordion " id="accordionFaq">
                            <div class="accordion-item show  mb-3 pb-3 wow fadeInUp" data-wow-delay="0.2s">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-collapseOne" aria-expanded="false"
                                        aria-controls="faq-collapseOne">
                                        What types of tours do you offer?
                                    </button>
                                </h2>
                                <div id="faq-collapseOne" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionFaq">
                                    <div class="accordion-body">
                                        <p class="mb-0">We offer a wide range of tours, including cultural, adventure,
                                            luxury, and customized itineraries. Popular destinations include Europe,
                                            Africa (e.g., Morocco),</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item  mb-3 wow fadeInUp" data-wow-delay="0.4s">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-collapsetwo" aria-expanded="false"
                                        aria-controls="faq-collapsetwo">
                                        Are the tours customizable?
                                    </button>
                                </h2>
                                <div id="faq-collapsetwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFaq">
                                    <div class="accordion-body">
                                        <p>We offer a wide range of tours, including cultural, adventure, luxury, and
                                            customized itineraries.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay="0.6s">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-collapsthree" aria-expanded="false"
                                        aria-controls="faq-collapsthree">
                                        What safety measures do you follow?
                                    </button>
                                </h2>
                                <div id="faq-collapsthree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFaq">
                                    <div class="accordion-body">
                                        <p>We offer a wide range of tours, including cultural, adventure, luxury, and
                                            customized itineraries.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay="0.8s">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-collapsefour" aria-expanded="false"
                                        aria-controls="faq-collapsefour">
                                        How far in advance should I book?
                                    </button>
                                </h2>
                                <div id="faq-collapsefour" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFaq">
                                    <div class="accordion-body">
                                        <p>We offer a wide range of tours, including cultural, adventure, luxury, and
                                            customized itineraries.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-0 wow fadeInUp" data-wow-delay="1.0s">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-collapsesix" aria-expanded="false"
                                        aria-controls="faq-collapsesix">
                                        What is your cancellation policy?
                                    </button>
                                </h2>
                                <div id="faq-collapsesix" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFaq">
                                    <div class="accordion-body">
                                        <p>We offer a wide range of tours, including cultural, adventure, luxury, and
                                            customized itineraries.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- /Page Wrapper -->

    <!-- ========================
        End Page Content
    ========================= -->

@endsection



