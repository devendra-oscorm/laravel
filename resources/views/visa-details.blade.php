<?php $page="visa-details";?>
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
                            <li class="breadcrumb-item active" aria-current="page">Visa Details</li>
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
                <div class="col-xl-8">

                    <!-- Slider -->
                    <div>
                        <div class="d-flex align-items-center justify-content-between flex-wrap mb-3">
                            <div class="mb-2">
                                <h4 class="mb-2 d-flex align-items-center flex-wrap">
                                    Academic Year Abroad with Comprehensive Healthcare
                                </h4>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <a href="#"
                                    class="btn btn-outline-light btn-icon btn-sm d-flex align-items-center justify-content-center me-2"><i
                                        class="isax isax-share"></i></a>
                                <a href="#" class="btn btn-outline-light btn-sm d-inline-flex align-items-center"><i
                                        class="isax isax-heart5 text-danger me-1"></i>Save</a>
                            </div>
                        </div>
                        <div class="service-wrap mb-4">
                            <div>
                                <img src="{{URL::asset('build/img/visa/visa-details.jpg')}}" alt="visa-details" class="img-fluid w-100">
                            </div>
                        </div>
                    </div>
                    <!-- /Slider -->

                    <div class="card shadow-none bg-light-200">
                        <div class="card-body pb-1">
                            <h5 class="d-flex align-items-center fs-18 mb-3">
                                <span class="avatar avatar-md rounded-circle bg-primary me-2"><i
                                        class="isax isax-airplane5"></i></span>
                                Bus Information
                            </h5>
                            <div class="row">
                                <div class="col-xl col-lg-4 col-md-4 col-sm-6">
                                    <div class="mb-3">
                                        <h6 class="mb-1">Country</h6>
                                        <p>Egypt</p>
                                    </div>
                                </div>
                                <div class="col-xl col-lg-4 col-md-4 col-sm-6">
                                    <div class="mb-3">
                                        <h6 class="mb-1">Catgeory</h6>
                                        <p>Student Visa</p>
                                    </div>
                                </div>
                                <div class="col-xl col-lg-4 col-md-4 col-sm-6">
                                    <div class="mb-3">
                                        <h6 class="mb-1">Validity</h6>
                                        <p>1 Year</p>
                                    </div>
                                </div>
                                <div class="col-xl col-lg-4 col-md-4 col-sm-6">
                                    <div class="mb-3">
                                        <h6 class="mb-1">Processing Time</h6>
                                        <p>7-10 Working Day</p>
                                    </div>
                                </div>
                                <div class="col-xl col-lg-4 col-md-4 col-sm-6">
                                    <div class="mb-3">
                                        <h6 class="mb-1">Visa Mode</h6>
                                        <p>Consular Visa</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion custom-accordion accordion-shadow">

                        <div class="accordion-item border-0 mb-4">
                            <div class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordion_collapse_one" aria-expanded="true">
                                    <i class="isax isax-note-1 me-2"></i>Documents Requirement
                                </button>
                            </div>
                            <div id="accordion_collapse_one" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <div>
                                        <p><i class="isax isax-flash-15 text-primary me-2 fs-16"></i>Prior Visas (if
                                            applicable)</p>
                                        <p><i class="isax isax-flash-15 text-primary me-2 fs-16"></i>Passport (6+ months
                                            validity).</p>
                                        <p><i class="isax isax-flash-15 text-primary me-2 fs-16"></i>Passport & visa
                                            copies (if any).</p>
                                        <p><i class="isax isax-flash-15 text-primary me-2 fs-16"></i>Sufficient Funds
                                            (statements, payslips)</p>
                                        <p><i class="isax isax-flash-15 text-primary me-2 fs-16"></i>Travel Insurance
                                            (Schengen, etc.)</p>
                                        <p><i class="isax isax-flash-15 text-primary me-2 fs-16"></i>Medical,
                                            repatriation & COVID coverage.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 mb-4">
                            <div class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordion_collapse_two" aria-expanded="true">
                                    <i class="isax isax-note me-2"></i>Description
                                </button>
                            </div>
                            <div id="accordion_collapse_two" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <p class="mb-2">
                                        Embarking on May 15, 2025, the "Scholars Voyage" offers long-term academic stays
                                        with comprehensive health insurance. Destinations include university hubs like
                                        Oxford, Heidelberg, Kyoto, and Melbourne. Each package ensures access to
                                        healthcare, cultural immersion, and academic resources for a transformative
                                        experience.
                                    </p>
                                    <a href="#" class="fs-14 fw-medium text-decoration-underline mb-2">Show More</a>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-4 border-0">
                            <div class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordion_collapse_three" aria-expanded="true">
                                    <i class="isax isax-archive-book me-2"></i>Additional Requirement
                                </button>
                            </div>
                            <div id="accordion_collapse_three" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <div>
                                        <p><i class="isax isax-minus-cirlce5 text-primary me-2 fs-16"></i>Visa copies
                                            (Schengen, US, UK, etc.)</p>
                                        <p><i class="isax isax-minus-cirlce5 text-primary me-2 fs-16"></i>International
                                            travel history (passport stamps).</p>
                                        <p><i class="isax isax-minus-cirlce5 text-primary me-2 fs-16"></i>Travel purpose
                                            explanation letter</p>
                                        <p><i class="isax isax-minus-cirlce5 text-primary me-2 fs-16"></i>Sponsor's Bank
                                            & ID.</p>
                                        <p><i class="isax isax-minus-cirlce5 text-primary me-2 fs-16"></i>Police
                                            Clearance (some countries).</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-4 border-0" id="location">
                            <div class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordion_collapse_eight" aria-expanded="true">
                                    <i class="isax isax-message-question me-2"></i>Frequently Asked Questions
                                </button>
                            </div>
                            <div id="accordion_collapse_eight" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <div class="accordion faq-accordion" id="accordionFaq">
                                        <div class="accordion-item show mb-2">
                                            <div class="accordion-header">
                                                <button class="accordion-button fw-medium" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq-collapseOne"
                                                    aria-expanded="false" aria-controls="faq-collapseOne">
                                                    What is the age requirement for a student visa?
                                                </button>
                                            </div>
                                            <div id="faq-collapseOne" class="accordion-collapse collapse show"
                                                data-bs-parent="#accordionFaq">
                                                <div class="accordion-body">
                                                    <p class="mb-0">
                                                        Our student visa services cater to a wide array of academic
                                                        pursuits, from language courses to university degrees. Explore
                                                        our website or reach out to our consultants to identify the
                                                        ideal visa solution tailored to your educational objectives.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item mb-2">
                                            <div class="accordion-header">
                                                <button class="accordion-button fw-medium collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq-two"
                                                    aria-expanded="false" aria-controls="faq-two">
                                                    What documents are needed to apply for a student visa?
                                                </button>
                                            </div>
                                            <div id="faq-two" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionFaq">
                                                <div class="accordion-body">
                                                    <p class="mb-0">
                                                        We offer a diverse fleet of vehicles to suit every need,
                                                        including compact cars, sedans, SUVs and luxury vehicles. You
                                                        can browse our selection online or contact us for assistance in
                                                        choosing the right vehicle for you
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item mb-2">
                                            <div class="accordion-header">
                                                <button class="accordion-button fw-medium collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq-three"
                                                    aria-expanded="false" aria-controls="faq-three">
                                                    What types of student visas are available?
                                                </button>
                                            </div>
                                            <div id="faq-three" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionFaq">
                                                <div class="accordion-body">
                                                    <p class="mb-0">
                                                        We offer a diverse fleet of vehicles to suit every need,
                                                        including compact cars, sedans, SUVs and luxury vehicles. You
                                                        can browse our selection online or contact us for assistance in
                                                        choosing the right vehicle for you
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <div class="accordion-header">
                                                <button class="accordion-button fw-medium collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq-four"
                                                    aria-expanded="false" aria-controls="faq-four">
                                                    Can I apply for a student visa with a debit card?
                                                </button>
                                            </div>
                                            <div id="faq-four" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionFaq">
                                                <div class="accordion-body">
                                                    <p class="mb-0">
                                                        We offer a diverse fleet of vehicles to suit every need,
                                                        including compact cars, sedans, SUVs and luxury vehicles. You
                                                        can browse our selection online or contact us for assistance in
                                                        choosing the right vehicle for you
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-4 border-0">
                            <div class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordion_collapse_ten" aria-expanded="true">
                                    <i class="isax isax-level me-2"></i>Conditional Requirement
                                </button>
                            </div>
                            <div id="accordion_collapse_ten" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <div>
                                        <p><i class="isax isax-add-circle5 text-primary me-2 fs-16"></i>Child's Birth
                                            Certificate.</p>
                                        <p><i class="isax isax-add-circle5 text-primary me-2 fs-16"></i>Non-traveling
                                            parent's consent (if applicable)</p>
                                        <p><i class="isax isax-add-circle5 text-primary me-2 fs-16"></i>Guardianship
                                            Proof (if needed).</p>
                                        <p><i class="isax isax-add-circle5 text-primary me-2 fs-16"></i>Family ties
                                            proof for return.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="fs-18 text-dark fw-semibold"><i class="isax isax-star me-2"></i> Reviews
                                </div>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#add_review"
                                    class="btn btn-primary btn-md mb-3"><i class="isax isax-edit-2 me-1"></i>Write a
                                    Review</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 d-flex">
                                    <div class="rating-item bg-light-200 text-center flex-fill mb-3">
                                        <h6 class="fw-medium mb-3">Customer Reviews & Ratings</h6>
                                        <h5 class="display-6">4.9 / 5.0</h5>
                                        <div class="d-inline-flex align-items-center justify-content-center mb-3">
                                            <i class="ti ti-star-filled text-primary me-1"></i>
                                            <i class="ti ti-star-filled text-primary me-1"></i>
                                            <i class="ti ti-star-filled text-primary me-1"></i>
                                            <i class="ti ti-star-filled text-primary me-1"></i>
                                            <i class="ti ti-star-filled text-primary"></i>
                                        </div>
                                        <p>Based On 2,459 Reviews</p>
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex">
                                    <div class="card rating-progress shadow-none flex-fill mb-3">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-2">
                                                <p class="me-2 text-nowrap mb-0">5 Star Ratings</p>
                                                <div class="progress w-100" role="progressbar" aria-valuenow="90"
                                                    aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar bg-primary" style="width: 90%"></div>
                                                </div>
                                                <p class="progress-count ms-2">247</p>
                                            </div>
                                            <div class="d-flex align-items-center mb-2">
                                                <p class="me-2 text-nowrap mb-0">4 Star Ratings</p>
                                                <div class="progress mb-0 w-100" role="progressbar" aria-valuenow="80"
                                                    aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar bg-primary" style="width: 80%"></div>
                                                </div>
                                                <p class="progress-count ms-2">145</p>
                                            </div>
                                            <div class="d-flex align-items-center mb-2">
                                                <p class="me-2 text-nowrap mb-0">3 Star Ratings</p>
                                                <div class="progress mb-0 w-100" role="progressbar" aria-valuenow="70"
                                                    aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar bg-primary" style="width: 70%"></div>
                                                </div>
                                                <p class="progress-count ms-2">600</p>
                                            </div>
                                            <div class="d-flex align-items-center mb-2">
                                                <p class="me-2 text-nowrap mb-0">2 Star Ratings</p>
                                                <div class="progress mb-0 w-100" role="progressbar" aria-valuenow="90"
                                                    aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar bg-primary" style="width: 60%"></div>
                                                </div>
                                                <p class="progress-count ms-2">560</p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <p class="me-2 text-nowrap mb-0">1 Star Ratings</p>
                                                <div class="progress mb-0 w-100" role="progressbar" aria-valuenow="40"
                                                    aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar bg-primary" style="width: 40%"></div>
                                                </div>
                                                <p class="progress-count ms-2">400</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card review-item shadow-none mb-3">
                                <div class="card-body p-3">
                                    <div class="review-info">
                                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                                            <div class="d-flex align-items-center mb-2">
                                                <span class="avatar avatar-lg me-2 flex-shrink-0">
                                                    <img src="{{URL::asset('build/img/users/user-05.jpg')}}" class="rounded-circle"
                                                        alt="img">
                                                </span>
                                                <div>
                                                    <h6 class="fs-16 fw-medium mb-1">Adrian Hendriques</h6>
                                                    <div class="d-flex align-items-center flex-wrap date-info">
                                                        <p class="fs-14 mb-0">2 days ago</p>
                                                        <p class="fs-14 d-inline-flex align-items-center mb-0">Excellent
                                                            service!</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <span
                                                class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>
                                        </div>
                                        <p class="mb-2">The visa application process was smooth, but the interview
                                            scheduling was a bit delayed. Overall, a satisfactory experience.</p>
                                        <div class="d-flex align-items-center">
                                            <a class="avatar avatar-md me-2 mb-2" data-fancybox="gallery"
                                                href="{{URL::asset('build/img/visa/gallery-img-large-01.jpg')}}">
                                                <img src="{{URL::asset('build/img/cruise/cruise-thumb-02.jpg')}}" alt="img">
                                            </a>
                                            <a class="avatar avatar-md me-2 mb-2" data-fancybox="gallery"
                                                href="{{URL::asset('build/img/visa/gallery-img-large-02.jpg')}}">
                                                <img src="{{URL::asset('build/img/cruise/cruise-thumb-03.jpg')}}" alt="img">
                                            </a>
                                            <a class="avatar avatar-md me-0 mb-2" data-fancybox="gallery"
                                                href="{{URL::asset('build/img/visa/gallery-img-large-03.jpg')}}">
                                                <img src="{{URL::asset('build/img/cruise/cruise-thumb-01.jpg')}}" alt="img">
                                            </a>
                                        </div>
                                        <div class="d-inline-flex align-items-center">
                                            <a href="#" class="d-inline-flex align-items-center fs-14 me-3"><i
                                                    class="isax isax-like-1 me-2"></i>21</a>
                                            <a href="#" class="d-inline-flex align-items-center me-3"><i
                                                    class="isax isax-dislike me-2"></i>50</a>
                                            <a href="#" class="d-inline-flex align-items-center me-3"><i
                                                    class="isax isax-heart5 text-danger me-2"></i>45</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card review-item shadow-none mb-3">
                                <div class="card-body p-3">
                                    <div class="review-info">
                                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                                            <div class="d-flex align-items-center mb-2">
                                                <span class="avatar avatar-lg me-2 flex-shrink-0">
                                                    <img src="{{URL::asset('build/img/users/user-21.jpg')}}" class="rounded-circle"
                                                        alt="img">
                                                </span>
                                                <div>
                                                    <h6 class="fs-16 fw-medium mb-1">Adrian Hendriques</h6>
                                                    <div class="d-flex align-items-center flex-wrap date-info">
                                                        <p class="fs-14 mb-0">2 days ago</p>
                                                        <p class="fs-14 d-inline-flex align-items-center mb-0"><span
                                                                class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">4.0</span>Excellent
                                                            service!</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#"
                                                class="btn btn-outline-light btn-md d-inline-flex align-items-center mb-2"><i
                                                    class="isax isax-repeat me-1"></i>Reply</a>
                                        </div>
                                        <p class="mb-2">I found the visa guidance invaluable, though the online form
                                            could be more user-friendly. Excellent support throughout!</p>
                                        <div class="d-inline-flex align-items-center">
                                            <a href="#" class="d-inline-flex align-items-center fs-14 me-3"><i
                                                    class="isax isax-like-1 me-2"></i>15</a>
                                            <a href="#" class="d-inline-flex align-items-center me-3"><i
                                                    class="isax isax-dislike me-2"></i>30</a>
                                            <a href="#" class="d-inline-flex align-items-center me-3"><i
                                                    class="isax isax-heart5 text-danger me-2"></i>52</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card review-item shadow-none mb-3">
                                <div class="card-body p-3">
                                    <div class="review-info">
                                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                                            <div class="d-flex align-items-center mb-2">
                                                <span class="avatar avatar-lg me-2 flex-shrink-0">
                                                    <img src="{{URL::asset('build/img/users/user-26.jpg')}}" class="rounded-circle"
                                                        alt="img">
                                                </span>
                                                <div>
                                                    <h6 class="fs-16 fw-medium mb-1">Jessie Alves</h6>
                                                    <div class="d-flex align-items-center flex-wrap date-info">
                                                        <p class="fs-14 mb-0">2 days ago</p>
                                                        <p class="fs-14 d-inline-flex align-items-center mb-0"><span
                                                                class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>Convenient
                                                            Location!</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#"
                                                class="btn btn-outline-light btn-md d-inline-flex align-items-center mb-2"><i
                                                    class="isax isax-repeat me-1"></i>Reply</a>
                                        </div>
                                        <p class="mb-2">The visa service was efficient, but I wish there were more
                                            options for expedited processing. Still, I'd recommend it.</p>
                                        <div class="d-inline-flex align-items-center">
                                            <a href="#" class="d-inline-flex align-items-center fs-14 me-3"><i
                                                    class="isax isax-like-1 me-2"></i>13</a>
                                            <a href="#" class="d-inline-flex align-items-center me-3"><i
                                                    class="isax isax-dislike me-2"></i>38</a>
                                            <a href="#" class="d-inline-flex align-items-center me-3"><i
                                                    class="isax isax-heart5 text-danger me-2"></i>75</a>
                                        </div>
                                    </div>
                                    <div class="review-info reply mt-4 p-3">
                                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                                            <div class="d-flex align-items-center mb-2">
                                                <span class="avatar avatar-lg me-2 flex-shrink-0">
                                                    <img src="{{URL::asset('build/img/users/user-25.jpg')}}" class="rounded-circle"
                                                        alt="img">
                                                </span>
                                                <div>
                                                    <h6 class="fs-16 fw-medium mb-1">Adrian Hendriques</h6>
                                                    <div class="d-flex align-items-center flex-wrap date-info">
                                                        <p class="fs-14 mb-0">2 days ago</p>
                                                        <p class="fs-14 d-inline-flex align-items-center mb-0"><span
                                                                class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">2.0</span>Excellent
                                                            service!</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#"
                                                class="btn btn-outline-light btn-md d-inline-flex align-items-center me-2"><i
                                                    class="isax isax-repeat me-1"></i>Reply</a>
                                        </div>
                                        <p class="mb-2">I appreciated the detailed visa checklist provided, but the
                                            communication could be more prompt. Good value for the price.</p>
                                        <div class="d-inline-flex align-items-center">
                                            <a href="#" class="d-inline-flex align-items-center fs-14 me-3"><i
                                                    class="isax isax-like-1 me-2"></i>10</a>
                                            <a href="#" class="d-inline-flex align-items-center me-3"><i
                                                    class="isax isax-dislike me-2"></i>21</a>
                                            <a href="#" class="d-inline-flex align-items-center me-3"><i
                                                    class="isax isax-heart5 text-danger me-2"></i>46</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mb-4 mb-xl-0">
                                <a href="#"
                                    class="btn btn-primary btn-md d-inline-flex align-items-center justify-content-center mt-2">See
                                    all 4,078 reviews<i class="isax isax-arrow-right-3 ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 theiaStickySidebar">
                    <div class="card shadow-none">
                        <div class="card-body">
                            <h5 class="fs-18 mb-3">Check Availability</h5>
                            <div class="banner-form">
                                <form action="#" class="form-info border-0">
                                    <div class="form-info border-0">
                                        <div class="form-item dropdown border rounded p-3 mb-3 w-100">
                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                aria-expanded="false" role="menu">
                                                <label class="form-label fs-14 text-default mb-1">Country</label>
                                                <input type="text" class="form-control" value="Newyork">
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
                                                            <h6 class="fs-16 fw-medium">Newyork</h6>
                                                        </a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="#">
                                                            <h6 class="fs-16 fw-medium">Boston</h6>
                                                        </a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="#">
                                                            <h6 class="fs-16 fw-medium">Northern Virginia</h6>
                                                        </a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="#">
                                                            <h6 class="fs-16 fw-medium">Los Angeles</h6>
                                                        </a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="#">
                                                            <h6 class="fs-16 fw-medium">Orlando</h6>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="form-item dropdown border rounded p-3 mb-3 w-100">
                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                aria-expanded="false" role="menu">
                                                <label class="form-label fs-14 text-default mb-1">Visa Type</label>
                                                <h5>Tourist</h5>
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
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="#">
                                                            <h6 class="fs-16 fw-medium">Work</h6>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="form-item dropdown border rounded p-3 mb-3 w-100">
                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                aria-expanded="false" role="menu">
                                                <label class="form-label fs-14 text-default mb-1">Citizenship </label>
                                                <h5>Australia</h5>
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
                                                            <h6 class="fs-16 fw-medium">America</h6>
                                                        </a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="#">
                                                            <h6 class="fs-16 fw-medium">Australia</h6>
                                                        </a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="#">
                                                            <h6 class="fs-16 fw-medium">Canada</h6>
                                                        </a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="#">
                                                            <h6 class="fs-16 fw-medium">UK</h6>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">
                                                            <h6 class="fs-16 fw-medium">China</h6>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label fs-14 text-default mb-1">Processing Time</label>
                                            <select class="select">
                                                <option>5-10 Working Day</option>
                                                <option>7-10 Working Day</option>
                                                <option>10-15 Working Day</option>
                                                <option>15-20 Working Day</option>
                                            </select>
                                        </div>
                                        <div class="card shadow-none mb-3">
                                            <div class="card-body p-3 pb-0">
                                                <div class="border-bottom pb-2 mb-2">
                                                    <h6>Details</h6>
                                                </div>
                                                <div class="custom-increment">
                                                    <div class="mb-3 d-flex align-items-center justify-content-between">
                                                        <label class="form-label text-gray-9 mb-0">Adults</label>
                                                        <div class="custom-increment">
                                                            <div class="input-group">
                                                                <span class="input-group-btn float-start">
                                                                    <button type="button"
                                                                        class="quantity-left-minus btn btn-light btn-number"
                                                                        data-type="minus" data-field="">
                                                                        <span><i class="isax isax-minus"></i></span>
                                                                    </button>
                                                                </span>
                                                                <input type="text" name="quantity"
                                                                    class=" input-number bg-transparent" value="01">
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
                                                    <div class="mb-3 d-flex align-items-center justify-content-between">
                                                        <label class="form-label text-gray-9 mb-0">Infants <span
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
                                                                <input type="text" name="quantity"
                                                                    class="input-number bg-transparent" value="01">
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
                                                    <div class="mb-3 d-flex align-items-center justify-content-between">
                                                        <label class="form-label text-gray-9 mb-0">Children <span
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
                                                                <input type="text" name="quantity"
                                                                    class=" input-number bg-transparent" value="01">
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
                                    </div>
                                    <div
                                        class="d-flex align-items-center justify-content-between bg-success-transparent p-2 rounded-pill mb-4">
                                        <h6 class="fs-14 fw-medium text-success mb-0 d-inline-flex align-items-center">
                                            <i class="isax isax-tick-circle5 me-1 fs-24"></i>40 Seats Available on your
                                            Search
                                        </h6>
                                    </div>
                                    <button type="button" data-bs-target="#apply_visa" data-bs-toggle="modal"
                                        class="btn btn-primary btn-lg search-btn ms-0 w-100 fs-14">Book Now</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Card -->
                    <div class="card shadow-none border-0 bg-purple-transparent">
                        <div class="card-body">
                            <div class="fs-18 text-dark fw-semibold"><i
                                    class="isax isax-document-text-14 me-1"></i>Important Note</div>
                            <div class="mt-3">
                                <p><i class="isax isax-information5 me-1 text-purple"></i>False info = visa denial.</p>
                                <p><i class="isax isax-information5 me-1 text-purple"></i>Requirements vary:
                                    nationality, travel, purpose.</p>
                                <p><i class="isax isax-information5 me-1 text-purple"></i>Extra documents not always
                                    needed.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /Card -->

                    <!-- Enquiry -->
                    <div class="card shadow-none">
                        <div class="card-body">
                            <form action="{{url('bus-details')}}">
                                <h5 class="mb-3 fs-18">Enquire Us</h5>
                                <div class="py-1">
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Phone</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                                <button type="submit"
                                    class="btn btn-primary w-100 btn-lg d-flex align-items-center justify-content-center">Submit
                                    Enquiry</button>
                            </form>
                        </div>
                    </div>
                    <!-- /Enquiry -->

                    <div class="card shadow-none mb-4">
                        <div class="card-body">
                            <h5 class="fs-18 mb-3">Provider Details</h5>
                            <div class="py-1">
                                <div class="bg-light-500 br-10 mb-3 d-flex align-items-center p-3">
                                    <a href="#" class="avatar avatar-lg flex-shrink-0">
                                        <img src="{{URL::asset('build/img/users/user-05.jpg')}}" alt="img" class="rounded-circle">
                                    </a>
                                    <div class="ms-2 overflow-hidden">
                                        <h6 class="fw-medium text-truncate"><a href="#">Adrian Hendriques</a></h6>
                                        <p class="fs-14">Member Since : 14 May 2024</p>
                                    </div>
                                </div>
                                <div class="border br-10 mb-3 p-3">
                                    <div class="d-flex align-items-center border-bottom pb-3 mb-3">
                                        <span class="avatar avatar-sm me-2 rounded-circle flex-shrink-0 bg-primary"><i
                                                class="isax isax-call-outgoing5"></i></span>
                                        <p>+1 12545 45548</p>
                                    </div>
                                    <div class="d-flex align-items-center border-bottom pb-3 mb-3">
                                        <span class="avatar avatar-sm me-2 rounded-circle flex-shrink-0 bg-primary"><i
                                                class="isax isax-message-search5"></i></span>
                                        <p>Info@example.com</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="avatar avatar-sm me-2 rounded-circle flex-shrink-0 bg-primary"><i
                                                class="isax isax-location-tick5"></i></span>
                                        <p>4635 Pheasant Ridge Road, USA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col-sm-6">
                                    <a href="#"
                                        class="btn btn-light d-flex align-items-center justify-content-center"><i
                                            class="isax isax-messages5 me-2"></i>Whatsapp Us</a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="{{url('chat')}}"
                                        class="btn btn-primary d-flex align-items-center justify-content-center"><i
                                            class="isax isax-message-notif5 me-2"></i>Chat Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow-none border-0 bg-danger-transparent">
                        <div class="card-body">
                            <div class="fs-18 text-dark fw-semibold">Common Reasons for Rejection</div>
                            <div class="mt-3">
                                <p class="text-dark"><i class="isax isax-information5 me-1 text-danger"></i>False info =
                                    visa denial.</p>
                                <p class="text-dark"><i class="isax isax-information5 me-1 text-danger"></i>Requirements
                                    vary: nationality, travel, purpose.</p>
                                <p class="text-dark"><i class="isax isax-information5 me-1 text-danger"></i>Extra
                                    documents not always needed.</p>
                            </div>
                        </div>
                    </div>

                    <div class="visa-details-card pb-0 text-center">
                        <img src="{{URL::asset('build/img/visa/visa-details-card-bg-01.png')}}" alt="img"
                            class="img-fluid w-100 position-absolute top-0 end-0 z-0">
                        <img src="{{URL::asset('build/img/visa/visa-details-card-bg-02.png')}}" alt="img"
                            class="img-fluid w-100 position-absolute bottom-0 start-0 z-0">
                        <div class="title">
                            Need Visa <br> Assistance?
                        </div>
                        <div class="d-flex align-items-center justify-content-center gap-3 mb-3">
                            <p class="mb-0"><i class="isax isax-tick-square5 me-1"></i>Expert Guidance</p>
                            <p class="mb-0"><i class="isax isax-tick-square5 me-1"></i>Fast Processing</p>
                        </div>
                        <div class="text-center">
                            <img src="{{URL::asset('build/img/visa/visa-details-card-img.png')}}" alt="img"
                                class="img-fluid position-relative z-1">
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



