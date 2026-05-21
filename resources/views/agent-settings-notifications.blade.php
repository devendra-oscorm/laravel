<?php $page="agent-settings-notifications";?>
@extends('layout.mainlayout')
@section('content')

    <!-- ========================
        Start Page Content
    ========================= -->

    <!-- Breadcrumb -->
    <div class="breadcrumb-bar breadcrumb-bg-04 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title mb-2">Settings</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{url('index')}}"><i class="isax isax-grid-55"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Settings</li>
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

                <!-- Sidebar -->
                <div class="col-xl-3 col-lg-4 theiaStickySidebar">
                    <div class="card user-sidebar agent-sidebar mb-4 mb-lg-0">
                        <div class="card-header user-sidebar-header text-center bg-gray-transparent">
                            <div class="agent-profile d-inline-flex">
                                <img src="{{URL::asset('build/img/users/user-43.jpg')}}" alt="image" class="img-fluid rounded-circle">
                                <a href="{{url('agent-settings')}}"
                                    class="avatar avatar-sm rounded-circle btn btn-primary d-flex align-items-center justify-content-center p-0"><i
                                        class="isax isax-edit-2 fs-14"></i></a>
                            </div>
                            <h6 class="fs-16">Chris Foxy</h6>
                            <p class="fs-14 mb-2">Member Since 10 May 2025</p>
                            <div class="d-flex align-items-center justify-content-center notify-item">
                                <a href="{{url('agent-notifications')}}"
                                    class="rounded-circle btn btn-white d-flex align-items-center justify-content-center p-0 me-2 position-relative">
                                    <i class="isax isax-notification-bing5 fs-20"></i>
                                    <span class="position-absolute p-1 bg-secondary rounded-circle"></span>
                                </a>
                                <a href="{{url('agent-chat')}}"
                                    class="rounded-circle btn btn-white d-flex align-items-center justify-content-center p-0 position-relative">
                                    <i class="isax isax-message-square5 fs-20"></i>
                                    <span class="position-absolute p-1 bg-danger rounded-circle"></span>
                                </a>
                            </div>
                        </div>
                        <div class="card-body user-sidebar-body">
                            <ul>
                                <li>
                                    <a href="{{url('agent-dashboard')}}" class="d-flex align-items-center">
                                        <i class="isax isax-grid-55 me-2"></i>Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('agent-listings')}}" class="d-flex align-items-center">
                                        <i class="isax isax-menu-14 me-2"></i>Listings
                                    </a>
                                </li>
                                <li class="submenu">
                                    <a href="#" class="d-block"><i
                                            class="isax isax-calendar-tick5 me-2"></i><span>Bookings</span><span
                                            class="menu-arrow"></span></a>
                                    <ul>
                                        <li>
                                            <a href="{{url('agent-hotel-booking')}}"
                                                class="fs-14 d-inline-flex align-items-center">Hotels</a>
                                        </li>
                                        <li>
                                            <a href="{{url('agent-car-booking')}}"
                                                class="fs-14 d-inline-flex align-items-center">Cars</a>
                                        </li>
                                        <li>
                                            <a href="{{url('agent-cruise-booking')}}"
                                                class="fs-14 d-inline-flex align-items-center">Cruise</a>
                                        </li>
                                        <li>
                                            <a href="{{url('agent-tour-booking')}}"
                                                class="fs-14 d-inline-flex align-items-center">Tour</a>
                                        </li>
                                        <li>
                                            <a href="{{url('agent-flight-booking')}}"
                                                class="fs-14 d-inline-flex align-items-center">Flights</a>
                                        </li>
                                        <li>
                                            <a href="{{url('agent-bus-booking')}}"
                                                class="fs-14 d-inline-flex align-items-center">Bus</a>
                                        </li>
                                        <li>
                                            <a href="{{url('agent-tour-guide')}}"
                                                class="fs-14 d-inline-flex align-items-center">Guide</a>
                                        </li>
                                        <li>
                                            <a href="{{url('agent-visa-booking')}}"
                                                class="fs-14 d-inline-flex align-items-center">Visa</a>
                                        </li>
                                        <li>
                                            <a href="{{url('agent-activities-booking')}}"
                                                class="fs-14 d-inline-flex align-items-center">Activities</a>
                                        </li>
                                        <li>
                                            <a href="{{url('agent-cancellation-requests')}}"
                                                class="fs-14 d-inline-flex align-items-center">Cancellation Requests</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{url('agent-enquirers')}}" class="d-flex align-items-center">
                                        <i class="isax isax-magic-star5 me-2"></i>Enquiries
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('agent-earnings')}}" class="d-flex align-items-center">
                                        <i class="isax isax-wallet-add-15 me-2"></i>Earnings
                                    </a>
                                </li>
                                <li class="submenu">
                                    <a href="#" class="d-block"><i
                                            class="isax isax-wallet-add-15 me-2"></i><span>Payout</span><span
                                            class="menu-arrow"></span></a>
                                    <ul>
                                        <li>
                                            <a href="{{url('agent-pending-payouts')}}"
                                                class="fs-14 d-inline-flex align-items-center">Pending Payouts</a>
                                        </li>
                                        <li>
                                            <a href="{{url('agent-commission-summary')}}"
                                                class="fs-14 d-inline-flex align-items-center">Commission Summary</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{url('agent-review')}}" class="d-flex align-items-center">
                                        <i class="isax isax-magic-star5 me-2"></i>Reviews
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('agent-settings')}}" class="d-flex align-items-center  active">
                                        <i class="isax isax-setting-25"></i> Settings
                                    </a>
                                </li>
                                <li class="logout-link">
                                    <a href="{{url('index')}}" class="d-flex align-items-center pb-0">
                                        <i class="isax isax-logout-15"></i> Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Sidebar -->

                <!-- Profile Settings -->
                <div class="col-xl-9 col-lg-8">
                    <div class="card settings mb-0">
                        <div class="card-header">
                            <h6>Settings</h6>
                        </div>
                        <div class="card-body pb-3">
                            <div class="settings-link d-flex align-items-center flex-wrap">
                                <a href="{{url('agent-settings')}}"><i
                                        class="isax isax-user-octagon me-2"></i>Edit Profile</a>
                                <a href="{{url('agent-business-details')}}"><i
                                        class="isax isax-buildings-2 me-2"></i>Business Details</a>
                                <a href="{{url('agent-account-settings')}}"><i class="isax isax-wallet-money me-2"></i>Account
                                    Settings</a>
                                <a href="{{url('agent-security-settings')}}"><i
                                        class="isax isax-shield-tick me-2"></i>Security</a>
                                <a href="{{url('agent-plans-settings')}}"><i class="isax isax-star me-2"></i>Plans &
                                    Billing</a>
                                <a href="{{url('agent-settings-notifications')}}" class="active"><i
                                        class="isax isax-notification me-2"></i>Notifications</a>
                            </div>

                            <!-- Settings Content -->
                            <div class="row mb-3 row-gap-3">
                                <div class="col-md-6">
                                    <h6 class="fs-14 mb-1">Booking Status Alerts</h6>
                                    <p class="fs-14 fw-normal">Get notified when a booking is confirmed, modified, or cancelled.</p>
                                </div>
                                <div class="col-2">
                                    <h6 class="fs-14 mb-1">Push</h6>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="check1">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <h6 class="fs-14 mb-1">SMS</h6>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="check2" checked>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <h6 class="fs-14 mb-1">Email</h6>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="check3" checked>
                                    </div>
                                </div>

                            </div>
                            <div class="row mb-3 row-gap-3">
                                <div class="col-md-6">
                                    <h6 class="fs-14 mb-1">Commission Status Alerts</h6>
                                    <p class="fs-14 fw-normal">Instant updates when your commission is approved or marked as pending.</p>
                                </div>
                                <div class="col-2">
                                    <h6 class="fs-14 mb-1">Push</h6>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="check4">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <h6 class="fs-14 mb-1">SMS</h6>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="check5" checked>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <h6 class="fs-14 mb-1">Email</h6>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="check6" checked>
                                    </div>
                                </div>

                            </div>
                            <div class="row mb-3 row-gap-3">
                                <div class="col-md-6">
                                    <h6 class="fs-14 mb-1">New Review Notifications</h6>
                                    <p class="fs-14 fw-normal">Instant alerts when a customer submits a new review for your service.</p>
                                </div>
                                <div class="col-2">
                                    <h6 class="fs-14 mb-1">Push</h6>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="check7" checked>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <h6 class="fs-14 mb-1">SMS</h6>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="check8">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <h6 class="fs-14 mb-1">Email</h6>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="check9">
                                    </div>
                                </div>

                            </div>
                            <div class="row mb-3 row-gap-3">
                                <div class="col-md-6">
                                    <h6 class="fs-14 mb-1">Service Listing Updates</h6>
                                    <p class="fs-14 fw-normal">Get notified when your tour or activity listing is approved or rejected.</p>
                                </div>
                                <div class="col-2">
                                    <h6 class="fs-14 mb-1">Push</h6>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="check10" checked>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <h6 class="fs-14 mb-1">SMS</h6>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="check11">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <h6 class="fs-14 mb-1">Email</h6>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="check12" checked>
                                    </div>
                                </div>

                            </div>
                            <div class="row mb-3 row-gap-3">
                                <div class="col-md-6">
                                    <h6 class="fs-14 mb-1">System Announcements</h6>
                                    <p class="fs-14 fw-normal">Platform updates, feature releases, and important dashboard notices.</p>
                                </div>
                                <div class="col-2">
                                    <h6 class="fs-14 mb-1">Push</h6>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="check13" checked>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <h6 class="fs-14 mb-1">SMS</h6>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="check14">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <h6 class="fs-14 mb-1">Email</h6>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="check15" checked>
                                    </div>
                                </div>

                            </div>
                            <div class="d-flex align-items-center justify-content-end mt-3 pt-3 border-top">
                                <a href="#" class="btn btn-light me-2">Cancel</a>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                            <!-- /Settings Content-->

                        </div>
                    </div>
                </div>
                <!-- /Profile Settings -->
            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->

    <!-- ========================
        End Page Content
    ========================= -->

@endsection



