<?php $page="guide-booking";?>
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
                    <h2 class="breadcrumb-title mb-2">Guide Booking</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{url('index')}}"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{url('guide-grid')}}">Our Guide</a></li>
                            <li class="breadcrumb-item"><a href="{{url('guide-details')}}">Guide Details</a></li>
                            <li class="breadcrumb-item">Guide Booking</li>
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
            <div class="row">
                <div class="col-lg-4">
                    <div class="card order-details guide-booking-card">
                        <div class="card-header">
                            <div class="d-flex align-items-center justify-content-between header-content">
                                <h5>Review Guide Details</h5>
                                <a href="{{url('guide-details')}}"
                                    class="rounded-circle p-2 btn btn-light d-flex align-items-center justify-content-center"><span
                                        class="fs-16 d-flex align-items-center justify-content-center"><i
                                            class="isax isax-edit-2"></i></span></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="pb-3 border-bottom">
                                <div class="mb-3 text-center">
                                    <img src="{{URL::asset('build/img/guide/guide-booking-img.jpg')}}" alt="Img" class="img-fluid">
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h6 class="mb-2">Rainbow Mountain Valley</h6>
                                        <p class="fs-14 ">Professional Travel Guide</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 pb-3 border-bottom">
                                <div class="fs-18 text-dark fw-semibold mb-3">About me</div>
                                <p>With over 8+ years of experience, I am a dedicated travel guide committed to
                                    delivering personalized and memorable journeys for travelers from around the world.
                                    I specialize in adventure tours, cultural exploration, and nature-based experiences,
                                    ensuring every trip is smooth, engaging, and well-organized.</p>
                            </div>
                            <div class="mt-3 pb-3 border-bottom">
                                <div class="fs-18 text-dark fw-semibold mb-3">Order Info</div>
                                <div class="d-flex align-items-center justify-content-between details-info">
                                    <div class=" text-dark fw-medium">Departure</div>
                                    <p class="fs-16">25 May 2025, 04:45 AM</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between details-info">
                                    <div class=" text-dark fw-medium">Return</div>
                                    <p class="fs-16">31 May 2025, 10:00 PM</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between details-info">
                                    <div class=" text-dark fw-medium">Adults</div>
                                    <p class="fs-16">20</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between details-info">
                                    <div class=" text-dark fw-medium">Children</div>
                                    <p class="fs-16">8</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between details-info">
                                    <div class=" text-dark fw-medium">No of Days</div>
                                    <p class="fs-16">4 Days, 3 Nights</p>
                                </div>
                            </div>
                            <div class="mt-3 border-bottom">
                                <div class="fs-18 text-dark fw-semibold mb-3">Payment Info</div>
                                <div class="coupoun-code mb-3">
                                    <input type="text" class="form-control" placeholder="Coupon Code">
                                    <a href="#" class="btn btn-sm btn-primary">Apply Coupon </a>
                                </div>
                                <div class="coupoun-list mb-3">
                                    <p class="d-flex align-items-center justify-content-between"><span
                                            class="text-success">Applied Successfully</span> <a href="#"
                                            class=" ms-2">Remove</a> </p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div class=" text-dark fw-medium">Sub Total</div>
                                    <p class="fs-16">$8565</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div class=" text-dark fw-medium">Tax <span class="text-gray-6"> (10%)</span></div>
                                    <p class="fs-16">$85</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div class=" text-dark fw-medium">Booking Fees</div>
                                    <p class="fs-16">$89</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div class=" text-dark fw-medium">Discount <span class="text-gray-6"> (10%)</span>
                                    </div>
                                    <p class="fs-16">-$20</p>
                                </div>
                            </div>
                            <div class="mt-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6>Amount to Pay</h6>
                                    <h6 class="text-primary">$8569</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 theiaStickySidebar">
                    <div class="card">
                        <div class="card-body">
                            <div class="wizard-container">

                                <!-- STEP 1 -->
                                <div class="step-content active" data-step="1">
                                    <h2>Guide Booking Details</h2>
                                    <!-- Stepper -->
                                    <div class="steps">
                                        <div class="step active" data-step="1"><span>1</span> Basic Information</div>
                                        <div class="step" data-step="2"><span>2</span> Payment Details</div>
                                        <a href="{{url('guide-booking-confirmation')}}" class="step"><span>3</span> Confirmation</a>
                                    </div>

                                    <div class="card checkout-card">
                                        <div class="card-header">
                                            <h5>Secure Checkout</h5>
                                        </div>
                                        <div class="card-body">
                                            <div>
                                                <div class="checkout-title">
                                                    <h6 class="mb-2">Contact Info</h6>
                                                </div>
                                                <div class="checkout-details pb-2 border-bottom mb-4">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">First Name</label>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Email Address</label>
                                                                <input type="email" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Country</label>
                                                                <select class="select">
                                                                    <option>Select</option>
                                                                    <option>Barcelona</option>
                                                                    <option>London</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Phone Number</label>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="checkout-title">
                                                    <h6 class="mb-2">Tour Information</h6>
                                                </div>
                                                <div class="checkout-details pb-2 border-bottom mb-4">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Tour Type</label>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Preferred Date</label>
                                                                <div class="input-icon-end position-relative">
                                                                    <input type="text"
                                                                        class="form-control datetimepicker"
                                                                        placeholder="dd/mm/yyyy" value="02-05-2024">
                                                                    <span class="input-icon-addon">
                                                                        <i class="isax isax-calendar"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Time slots</label>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">No of Travellers</label>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="checkout-title">
                                                    <h6 class="mb-2">Location Details</h6>
                                                </div>
                                                <div class="checkout-details">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Pickup Location</label>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Destination / Tour
                                                                    Area</label>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="mb-0">
                                                                <label class="form-label">Additional Info</label>
                                                                <textarea class="form-control" rows="4"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-end">
                                        <button class="btn btn-primary next-step d-inline-flex align-items-center gap-1">Proceed to Payment <i class="isax isax-arrow-right-3 ms-1"></i></button>
                                    </div>
                                </div>

                                <!-- STEP 2 -->
                                <div class="step-content" data-step="2">
                                    <h2>Secure Checkout</h2>

                                    <!-- Stepper -->
                                    <div class="steps">
                                        <div class="step" data-step="1"><span>1</span> Basic Information</div>
                                        <div class="step" data-step="2"><span>2</span> Payment Details</div>
                                        <a href="{{url('guide-booking-confirmation')}}" class="step"><span>3</span> Confirmation</a>
                                    </div>


                                    <div class="card payment-details">
                                        <div class="card-header">
                                            <h5>Payment Details</h5>
                                        </div>
                                        <div class="card-body">
                                            <div
                                                class="d-flex align-items-center justify-content-between flex-wrap mb-3">
                                                <div class="d-flex align-items-center flex-wrap payment-form">
                                                    <div class="form-check d-flex align-items-center me-3 mb-2">
                                                        <input class="form-check-input mt-0" type="radio" name="Radio"
                                                            id="credit-card" value="credit-card" checked>
                                                        <label class="form-check-label fs-14 ms-2" for="credit-card">
                                                            Credit / Debit Card
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center me-3 mb-2">
                                                        <input class="form-check-input mt-0" type="radio" name="Radio"
                                                            id="paypal" value="paypal">
                                                        <label class="form-check-label fs-14 ms-2" for="paypal">
                                                            Paypal
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center me-3 mb-2">
                                                        <input class="form-check-input mt-0" type="radio" name="Radio"
                                                            id="stripe" value="stripe">
                                                        <label class="form-check-label fs-14 ms-2" for="stripe">
                                                            Stripe
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Credit Card -->
                                            <div class="credit-card-details">
                                                <div class="mb-3">
                                                    <h6 class="fs-16">Payment With Credit Card</h6>
                                                </div>
                                                <div class="card-detials mb-3">
                                                    <div class="row g-3 align-items-center">
                                                        <div class="col-lg-4 d-flex">
                                                            <div class="card-content flex-fill">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between mb-2">
                                                                    <div>
                                                                        <img src="{{URL::asset('build/img/icons/visa.svg')}}" alt="image"
                                                                            class="img-fluid mb-2">
                                                                        <p class="fs-16 fw-medium text-gray-6">**** ****
                                                                            **** 2547</p>
                                                                    </div>
                                                                    <div class="card-edit-icon">
                                                                        <a href="#" class="rounded-circle"> <span
                                                                                class=" d-flex align-items-center justify-content-center fs-14"><i
                                                                                    class="isax isax-edit-2"></i></span></a>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <h6 class="fs-14 mb-1">Expiry</h6>
                                                                    <span class="fs-14 fw-normal text-gray-6">May
                                                                        2026</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 d-flex">
                                                            <div class="card-content flex-fill">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between mb-2">
                                                                    <div>
                                                                        <img src="{{URL::asset('build/img/icons/visa-2.svg')}}"
                                                                            alt="image" class="img-fluid mb-2">
                                                                        <p class="fs-16 fw-medium text-gray-6">**** ****
                                                                            **** 3256</p>
                                                                    </div>
                                                                    <div class="card-edit-icon">
                                                                        <a href="#" class="rounded-circle"> <span
                                                                                class=" d-flex align-items-center justify-content-center fs-14"><i
                                                                                    class="isax isax-edit-2"></i></span></a>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <h6 class="fs-14 mb-1">Expiry</h6>
                                                                    <span class="fs-14 fw-normal text-gray-6">May
                                                                        2026</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 d-flex">
                                                            <div
                                                                class="card-add flex-fill d-flex align-items-center justify-content-center">
                                                                <div
                                                                    class="add-option d-flex align-items-center justify-content-center">
                                                                    <a href="#" id="open-folder"
                                                                        class="rounded-circle d-flex align-items-center justify-content-center">
                                                                        <span
                                                                            class="d-flex align-items-center justify-content-center">
                                                                            <i class="isax isax-add"></i>
                                                                        </span>
                                                                    </a>
                                                                    <input type="file" id="folder-input"
                                                                        class="file-input">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-form">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Card Holder Name</label>
                                                                <div class="user-icon">
                                                                    <span class="input-icon fs-14"><i
                                                                            class="isax isax-user"></i></span>
                                                                    <input type="text" class="form-control ">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Card Number</label>
                                                                <div class="user-icon">
                                                                    <span class="input-icon fs-14"><i
                                                                            class="isax isax-card-tick"></i></span>
                                                                    <input type="text" class="form-control ">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Expire Date</label>
                                                                <div class="user-icon">
                                                                    <span class="input-icon fs-14"><i
                                                                            class="isax isax-calendar-2"></i></span>
                                                                    <input type="text" class="form-control ">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">CVV</label>
                                                                <div class="user-icon">
                                                                    <span class="input-icon fs-14"><i
                                                                            class="isax isax-check"></i></span>
                                                                    <input type="text" class="form-control ">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Credit Card -->

                                            <!-- Paypal -->
                                            <div class="paypal-details">
                                                <div class="mb-3">
                                                    <h6 class="fs-16">Payment With Paypal</h6>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Email Address</label>
                                                            <div class="user-icon">
                                                                <span class="input-icon fs-14"><i
                                                                        class="isax isax-sms"></i></span>
                                                                <input type="email" class="form-control ">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Password</label>
                                                            <div class="user-icon">
                                                                <span class="input-icon fs-14"><i
                                                                        class="isax isax-lock"></i></span>
                                                                <input type="password" class="form-control pass-input">
                                                                <span class="input-icon toggle-password fs-14"><i
                                                                        class="isax isax-eye-slash"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Paypal -->

                                            <!-- Stripe -->
                                            <div class="stripe-details">
                                                <div class="mb-3">
                                                    <h6 class="fs-16">Payment With Stripe</h6>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Email Address</label>
                                                            <div class="user-icon">
                                                                <span class="input-icon fs-14"><i
                                                                        class="isax isax-sms"></i></span>
                                                                <input type="email" class="form-control ">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Password</label>
                                                            <div class="user-icon">
                                                                <span class="input-icon fs-14"><i
                                                                        class="isax isax-lock"></i></span>
                                                                <input type="password" class="form-control pass-input">
                                                                <span class="input-icon toggle-password fs-14"><i
                                                                        class="isax isax-eye-slash"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Stripe -->
                                        </div>
                                    </div>

                                    <div class="actions d-flex align-items-center justify-content-between">
                                        <button class="btn btn-light prev-step d-flex align-items-center gap-1">
                                            <i class="isax isax-arrow-left-2"></i> Back to Information
                                        </button>
                                        <a href="{{url('guide-booking-confirmation')}}" class="btn btn-primary">Confirm & Pay $9569</a>
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



