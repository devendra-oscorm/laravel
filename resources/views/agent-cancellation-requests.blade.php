<?php $page="agent-cancellation-requests";?>
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
                    <h2 class="breadcrumb-title mb-2">Cancellation Requests</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{url('index')}}"><i class="isax isax-grid-55"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">My Bookings</li>
                            <li class="breadcrumb-item active" aria-current="page">Cancellation Requests</li>
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
                                    <a href="#" class="d-block active subdrop"><i
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
                                                class="fs-14 d-inline-flex align-items-center active">Cancellation
                                                Requests</a>
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
                                    <a href="{{url('agent-settings')}}" class="d-flex align-items-center">
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

                <!-- Hotel Booking -->
                <div class="col-xl-9 col-lg-8">

                    <!-- Booking Header -->
                    <div class="card booking-header">
                        <div
                            class="card-body header-content d-flex align-items-center justify-content-between flex-wrap ">
                            <div>
                                <h6>Cancellation Requests</h6>
                                <p class="fs-14 text-gray-6 fw-normal">No of Requests : 150</p>
                            </div>

                            <div class="d-flex align-items-center flex-wrap">
                                <div class="input-icon-start position-relative">
                                    <span class="icon-addon">
                                        <i class="isax isax-calendar-edit fs-14"></i>
                                    </span>
                                    <input type="text" class="form-control date-range bookingrange" placeholder="Select"
                                        value="Academic Year : 2024 / 2025">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Booking Header -->

                    <!-- Car-Booking List -->
                    <div class="card hotel-list">
                        <div class="card-body p-0">
                            <div class="list-header d-flex align-items-center justify-content-between flex-wrap">
                                <h6 class="">Booking List</h6>
                                <div class="d-flex align-items-center flex-wrap">
                                    <div class="input-icon-start  me-2 position-relative">
                                        <span class="icon-addon">
                                            <i class="isax isax-search-normal-1 fs-14"></i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                    <div class="dropdown me-3">
                                        <a href="#"
                                            class="dropdown-toggle text-gray-6 btn  rounded border d-inline-flex align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Booking Type
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end p-3">
                                            <li>
                                                <a href="#" class="dropdown-item rounded-1">Hotel</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown-item rounded-1">Car</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown-item rounded-1">Tour</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="d-flex align-items-center sort-by">
                                        <span class="fs-14 text-gray-9 fw-medium">Sort By :</span>
                                        <div class="dropdown">
                                            <a href="#"
                                                class="dropdown-toggle text-gray-6 btn  rounded d-inline-flex align-items-center"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Recommended
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                                <li>
                                                    <a href="#" class="dropdown-item rounded-1">Recently Added</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="dropdown-item rounded-1">Ascending</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="dropdown-item rounded-1">Desending</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="dropdown-item rounded-1">Last Month</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="dropdown-item rounded-1">Last 7 Days</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- Hotel List -->
                            <div class="custom-datatable-filter table-responsive">
                                <table class="table datatable">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>ID</th>
                                            <th>Booking ID</th>
                                            <th>Booked Type</th>
                                            <th>Booked By</th>
                                            <th>Service</th>
                                            <th>Booked on</th>
                                            <th>Booked on</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#cancellation-id"
                                                    class="link-primary fw-medium">#CN-1245</a></td>
                                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#booking-id"
                                                    class="link-primary fw-medium">#HB-1245</a></td>
                                            <td>Hotel</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14">Lynwood Dickens</p>
                                                        <span class="fs-14 fw-normal text-gray-6">Texas</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14">Hotel Athenee</p>
                                                        <span class="fs-14 fw-normal text-gray-6">Barcelona</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>15 May 2026</td>
                                            <td>18 May 2026</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="#"><i class="isax isax-tick-circle me-2"></i></a>
                                                    <a href="#"><i class="isax isax-close-circle"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#cancellation-id"
                                                    class="link-primary fw-medium">#CN-3215</a></td>
                                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#booking-id"
                                                    class="link-primary fw-medium">#CB-4581</a></td>
                                            <td>Car</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14">James Osborne</p>
                                                        <span class="fs-14 fw-normal text-gray-6">California</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14">Volkswagen Amarok</p>
                                                        <span class="fs-14 fw-normal text-gray-6">Sedan</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>10 May 2026</td>
                                            <td>11 May 2026</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="#"><i class="isax isax-tick-circle me-2"></i></a>
                                                    <a href="#"><i class="isax isax-close-circle"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#cancellation-id"
                                                    class="link-primary fw-medium">#CN-4581</a></td>
                                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#booking-id"
                                                    class="link-primary fw-medium">#TR-1458</a></td>
                                            <td>Tour</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14">Steve Grieve</p>
                                                        <span class="fs-14 fw-normal text-gray-6">Newyork</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14">Joy Jubilee Jamboree
                                                        </p>
                                                        <span class="fs-14 fw-normal text-gray-6">Innovation
                                                            Ignited</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>04 May 2026</td>
                                            <td>06 May 2026</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="#"><i class="isax isax-tick-circle me-2"></i></a>
                                                    <a href="#"><i class="isax isax-close-circle"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#cancellation-id"
                                                    class="link-primary fw-medium">#CN-6545</a></td>
                                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#booking-id"
                                                    class="link-primary fw-medium">#HB-3215</a></td>
                                            <td>Hotel</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-2 position-relative">
                                                        <p class="text-dark mb-0 fw-medium fs-14">Alene Downing</p>
                                                        <span class="fs-14 fw-normal text-gray-6">Florida</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14">The Urban Retreat</p>
                                                        <span class="fs-14 fw-normal text-gray-6">Edinburgh</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>25 Apr 2026</td>
                                            <td>30 Apr 2026</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="#"><i class="isax isax-tick-circle me-2"></i></a>
                                                    <a href="#"><i class="isax isax-close-circle"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#cancellation-id"
                                                    class="link-primary fw-medium">#CN-3256</a></td>
                                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#booking-id"
                                                    class="link-primary fw-medium">#CR-3256</a></td>
                                            <td>Cruise</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14">Carol Gardner</p>
                                                        <span class="fs-14 fw-normal text-gray-6">Georgia</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14">Super Aquamarine</p>
                                                        <span class="fs-14 fw-normal text-gray-6">Barcelona</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>17 Apr 2026</td>
                                            <td>20 Apr 2026</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="#"><i class="isax isax-tick-circle me-2"></i></a>
                                                    <a href="#"><i class="isax isax-close-circle"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#cancellation-id"
                                                    class="link-primary fw-medium">#CN-3654</a></td>
                                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#booking-id"
                                                    class="link-primary fw-medium">#FL-2315</a></td>
                                            <td>Flight</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14">Enrique Archer</p>
                                                        <span class="fs-14 fw-normal text-gray-6">Las Vegas</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14">Antonov An-32</p>
                                                        <span class="fs-14 fw-normal text-gray-6">Air India</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>02 Apr 2026</td>
                                            <td>05 Apr 2026</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="#"><i class="isax isax-tick-circle me-2"></i></a>
                                                    <a href="#"><i class="isax isax-close-circle"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#cancellation-id"
                                                    class="link-primary fw-medium">#CN-1458</a></td>
                                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#booking-id"
                                                    class="link-primary fw-medium">#CB-6545</a></td>
                                            <td>Car</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14">Weston Carrasco</p>
                                                        <span class="fs-14 fw-normal text-gray-6">Texas</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14">Ford Mustang 4.0 AT
                                                        </p>
                                                        <span class="fs-14 fw-normal text-gray-6">Coupe</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>20 Mar 2026</td>
                                            <td>21 Mar 2026</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="#"><i class="isax isax-tick-circle me-2"></i></a>
                                                    <a href="#"><i class="isax isax-close-circle"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#cancellation-id"
                                                    class="link-primary fw-medium">#CN-6589</a></td>
                                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#booking-id"
                                                    class="link-primary fw-medium">#CR-3654</a></td>
                                            <td>Cruise</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14">Bonnie Coleman</p>
                                                        <span class="fs-14 fw-normal text-gray-6">California</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14">Coral Cruiser</p>
                                                        <span class="fs-14 fw-normal text-gray-6">Edinburgh</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>10 Mar 2026</td>
                                            <td>12 Mar 2026</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="#"><i class="isax isax-tick-circle me-2"></i></a>
                                                    <a href="#"><i class="isax isax-close-circle"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#cancellation-id"
                                                    class="link-primary fw-medium">#CN-2315</a></td>
                                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#booking-id"
                                                    class="link-primary fw-medium">#TR-6589</a></td>
                                            <td>Tour</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14">Aurora Conklin</p>
                                                        <span class="fs-14 fw-normal text-gray-6">Georgia</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14">PlayPalooza Part</p>
                                                        <span class="fs-14 fw-normal text-gray-6">Ground tour</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>15 Feb 2026</td>
                                            <td>17 Feb 2026</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="#"><i class="isax isax-tick-circle me-2"></i></a>
                                                    <a href="#"><i class="isax isax-close-circle"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#cancellation-id"
                                                    class="link-primary fw-medium">#CN-5414</a></td>
                                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#booking-id"
                                                    class="link-primary fw-medium">#FL-5414</a></td>
                                            <td>Flight</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14">Robin Banks</p>
                                                        <span class="fs-14 fw-normal text-gray-6">Las Vegas</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14">Nimbus 345</p>
                                                        <span class="fs-14 fw-normal text-gray-6">Qatar Airways</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>22 Jan 2026</td>
                                            <td>23 Jan 2026</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="#"><i class="isax isax-tick-circle me-2"></i></a>
                                                    <a href="#"><i class="isax isax-close-circle"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /Hotel List -->

                        </div>
                    </div>
                    <!-- /Car-Booking List -->

                    <div class="table-paginate d-flex justify-content-between align-items-center flex-wrap row-gap-3">
                        <div class="value d-flex align-items-center">
                            <span>Show</span>
                            <select>
                                <option>5</option>
                                <option>10</option>
                                <option>20</option>
                            </select>
                            <span>entries</span>
                        </div>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="#"><span class="me-3"><i class="isax isax-arrow-left-2"></i></span></a>
                            <nav aria-label="Page navigation">
                                <ul class="paginations d-flex justify-content-center align-items-center">
                                    <li class="page-item me-2"><a
                                            class="page-link-1 active d-flex justify-content-center align-items-center "
                                            href="#">1</a></li>
                                    <li class="page-item me-2"><a
                                            class="page-link-1 d-flex justify-content-center align-items-center"
                                            href="#">2</a></li>
                                    <li class="page-item "><a
                                            class="page-link-1 d-flex justify-content-center align-items-center"
                                            href="#">3</a></li>
                                </ul>
                            </nav>
                            <a href="#"><span class="ms-3"><i class="isax isax-arrow-right-3"></i></span></a>
                        </div>
                    </div>
                </div>
                <!-- /Hotel Booking -->
            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->

    <!-- ========================
        End Page Content
    ========================= -->

@endsection



