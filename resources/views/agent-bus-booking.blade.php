<?php $page="agent-bus-booking";?>
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
                    <h2 class="breadcrumb-title mb-2">Bus Bookings</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{url('index')}}"><i class="isax isax-grid-55"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Bus Bookings</li>
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
                                                class="fs-14 d-inline-flex align-items-center active">Bus</a>
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

                <!-- Car Booking -->
                <div class="col-xl-9 col-lg-8 theiaStickySidebar">

                    <!-- Booking Header -->
                    <div class="card booking-header border-0">
                        <div
                            class="card-body header-content d-flex align-items-center justify-content-between flex-wrap ">
                            <div>
                                <h6 class="mb-1">Bus Bookings</h6>
                                <p class="fs-14 text-gray-6 fw-normal ">No of Booking : 40</p>
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
                                            Bus Type
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end p-3">
                                            <li>
                                                <a href="#" class="dropdown-item rounded-1"> Tata</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown-item rounded-1">Volvo</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown-item rounded-1">Ashok Leyland</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dropdown me-3">
                                        <a href="#"
                                            class="dropdown-toggle text-gray-6 btn  rounded border d-inline-flex align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Status
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end p-3">
                                            <li>
                                                <a href="#" class="dropdown-item rounded-1">Upcoming</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown-item rounded-1">Cancelled</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown-item rounded-1">Completed</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="d-flex align-items-center sort-by">
                                        <span class="fs-14 text-gray-9 fw-medium">Sort By :</span>
                                        <div class="dropdown">
                                            <a href="#"
                                                class="dropdown-toggle text-gray-6 btn rounded d-inline-flex align-items-center"
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

                            <!-- Car List -->
                            <div class="custom-datatable-filter table-responsive">
                                <table class="table datatable">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>ID</th>
                                            <th>Bus & Brands</th>
                                            <th>Booked By</th>
                                            <th>Travellers</th>
                                            <th>Days</th>
                                            <th>Price</th>
                                            <th>Booked on</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="#" class="link-primary fw-medium" data-bs-toggle="modal"
                                                    data-bs-target="#upcoming">#BB-1245</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <p class="text-dark mb-0 fw-medium fs-14"><a
                                                                href="{{url('bus-details')}}">Red Bird Luxury</a></p>
                                                        <span class="fs-14 fw-normal text-gray-6">Tata</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h6 class="fs-14 mb-1">Lynwood Dickens</h6>
                                                <span class="fs-14 fw-normal text-gray-6">Barcelona</span>
                                            </td>
                                            <td>2 Adults, 1 Child</td>
                                            <td>4 Days</td>
                                            <td>$1,569</td>
                                            <td>15 May 2025</td>
                                            <td>
                                                <span
                                                    class="badge badge-info rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Upcoming</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#upcoming"><i
                                                            class="isax isax-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" class="link-primary fw-medium" data-bs-toggle="modal"
                                                    data-bs-target="#upcoming">#BB-3215</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <p class="text-dark mb-0 fw-medium fs-14"><a
                                                                href="{{url('bus-details')}}">Elite Ride</a></p>
                                                        <span class="fs-14 fw-normal text-gray-6">Volvo</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h6 class="fs-14 mb-1">James Osborne</h6>
                                                <span class="fs-14 fw-normal text-gray-6">California</span>
                                            </td>
                                            <td>
                                                2 Adults, 2 Child
                                            </td>
                                            <td>3 Days</td>
                                            <td>$1,745</td>
                                            <td>20 May 2025</td>
                                            <td>
                                                <span
                                                    class="badge badge-info rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Upcoming</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#upcoming"><i
                                                            class="isax isax-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" class="link-primary fw-medium" data-bs-toggle="modal"
                                                    data-bs-target="#upcoming">#BB-4581</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <p class="text-dark mb-0 fw-medium fs-14"><a
                                                                href="{{url('bus-details')}}">Urban Glide</a></p>
                                                        <span class="fs-14 fw-normal text-gray-6">Ashok Leyland</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h6 class="fs-14 mb-1">Steve Grieve</h6>
                                                <span class="fs-14 fw-normal text-gray-6">Newyork</span>
                                            </td>
                                            <td>
                                                2 Adults, 1 Child
                                            </td>
                                            <td>2 Days</td>
                                            <td>$2,160</td>
                                            <td>04 Jun 2025</td>
                                            <td>
                                                <span
                                                    class="badge badge-info rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Upcoming</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#upcoming"><i
                                                            class="isax isax-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" class="link-primary fw-medium" data-bs-toggle="modal"
                                                    data-bs-target="#completed">#BB-6545</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <p class="text-dark mb-0 fw-medium fs-14"><a
                                                                href="{{url('bus-details')}}">Route Max</a></p>
                                                        <span class="fs-14 fw-normal text-gray-6">Ashok Leyland</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h6 class="fs-14 mb-1">Alene Downing</h6>
                                                <span class="fs-14 fw-normal text-gray-6">Florida</span>
                                            </td>
                                            <td>
                                                1 Adult, 1 Child
                                            </td>
                                            <td>2 Days</td>
                                            <td>$1,840</td>
                                            <td>17 Jun 2025</td>
                                            <td>
                                                <span
                                                    class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#completed"><i
                                                            class="isax isax-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" class="link-primary fw-medium" data-bs-toggle="modal"
                                                    data-bs-target="#cancelled">#BB-3256</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <p class="text-dark mb-0 fw-medium fs-14"><a
                                                                href="{{url('bus-details')}}">Trail Star</a></p>
                                                        <span class="fs-14 fw-normal text-gray-6">Volvo</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h6 class="fs-14 mb-1">Carol Gardner</h6>
                                                <span class="fs-14 fw-normal text-gray-6">Georgia</span>
                                            </td>
                                            <td>
                                                2 Adults, 1 Child
                                            </td>
                                            <td>3 Days</td>
                                            <td>$1,450</td>
                                            <td>25 Jun 2025</td>
                                            <td>
                                                <span
                                                    class="badge badge-info rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Upcoming</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#upcoming"><i
                                                            class="isax isax-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" class="link-primary fw-medium" data-bs-toggle="modal"
                                                    data-bs-target="#cancelled">#BB-3654</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <p class="text-dark mb-0 fw-medium fs-14"><a
                                                                href="{{url('bus-details')}}">Enviro Bus</a></p>
                                                        <span class="fs-14 fw-normal text-gray-6">Volvo</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h6 class="fs-14 mb-1">Enrique Archer</h6>
                                                <span class="fs-14 fw-normal text-gray-6">Las Vegas</span>
                                            </td>
                                            <td>
                                                3 Adults, 2 Child
                                            </td>
                                            <td>4 Days</td>
                                            <td>$1,600</td>
                                            <td>02 Jul 2025</td>
                                            <td>
                                                <span
                                                    class="badge badge-danger rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Cancelled</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#cancelled"><i
                                                            class="isax isax-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" class="link-primary fw-medium" data-bs-toggle="modal"
                                                    data-bs-target="#completed">#BB-1458</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <p class="text-dark mb-0 fw-medium fs-14"><a
                                                                href="{{url('bus-details')}}">City Mover</a></p>
                                                        <span class="fs-14 fw-normal text-gray-6">Tata</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h6 class="fs-14 mb-1">Weston Carrasco</h6>
                                                <span class="fs-14 fw-normal text-gray-6">Texas</span>
                                            </td>
                                            <td>
                                                2 Adults, 2 Child
                                            </td>
                                            <td>5 Days</td>
                                            <td>$2,380</td>
                                            <td>12 Jul 2025</td>
                                            <td>
                                                <span
                                                    class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#completed"><i
                                                            class="isax isax-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" class="link-primary fw-medium" data-bs-toggle="modal"
                                                    data-bs-target="#completed">#BB-6589</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <p class="text-dark mb-0 fw-medium fs-14"><a
                                                                href="{{url('bus-details')}}">City Shuttle</a></p>
                                                        <span class="fs-14 fw-normal text-gray-6">Volvo</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h6 class="fs-14 mb-1">Bonnie Coleman</h6>
                                                <span class="fs-14 fw-normal text-gray-6">California</span>
                                            </td>
                                            <td>
                                                2 Adults, 1 Child
                                            </td>
                                            <td>3 Days</td>
                                            <td>$1,400</td>
                                            <td>26 Jul 2025</td>
                                            <td>
                                                <span
                                                    class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#completed"><i
                                                            class="isax isax-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" class="link-primary fw-medium" data-bs-toggle="modal"
                                                    data-bs-target="#completed">#BB-2315</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <p class="text-dark mb-0 fw-medium fs-14"><a
                                                                href="{{url('bus-details')}}">Volt Voyage</a></p>
                                                        <span class="fs-14 fw-normal text-gray-6">Tata</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h6 class="fs-14 mb-1">Aurora Conklin</h6>
                                                <span class="fs-14 fw-normal text-gray-6">Georgia</span>
                                            </td>
                                            <td>
                                                2 Adults, 2 Child
                                            </td>
                                            <td>2 Days</td>
                                            <td>$1,810</td>
                                            <td>10 Aug 2025</td>
                                            <td>
                                                <span
                                                    class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#completed"><i
                                                            class="isax isax-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" class="link-primary fw-medium" data-bs-toggle="modal"
                                                    data-bs-target="#completed">#BB-5414</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <p class="text-dark mb-0 fw-medium fs-14"><a
                                                                href="{{url('bus-details')}}">Journey Jet</a></p>
                                                        <span class="fs-14 fw-normal text-gray-6">Ashok Leyland</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h6 class="fs-14 mb-1">Robin Banks</h6>
                                                <span class="fs-14 fw-normal text-gray-6">Las Vegas</span>
                                            </td>
                                            <td>
                                                3 Adults, 1 Child
                                            </td>
                                            <td>2 Days</td>
                                            <td>$1,450</td>
                                            <td>22 Aug 2025</td>
                                            <td>
                                                <span
                                                    class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#completed"><i
                                                            class="isax isax-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /Car List -->
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
                <!-- /Car Booking -->
            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->

    <!-- ========================
        End Page Content
    ========================= -->

@endsection



