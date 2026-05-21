<?php $page="customer-tour-guides";?>
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
                    <h2 class="breadcrumb-title mb-2">My Bookings</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{url('index')}}"><i class="isax isax-grid-55"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">My Bookings</li>
                            <li class="breadcrumb-item active" aria-current="page">Tour Guides</li>
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
                    <div class="card user-sidebar mb-4 mb-lg-0">
                        <div class="card-header user-sidebar-header">
                            <div class="profile-content rounded-pill">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class=" d-flex align-items-center justify-content-center">
                                        <img src="{{URL::asset('build/img/users/user-01.jpg')}}" alt="image"
                                            class="img-fluid avatar avatar-lg rounded-circle me-1">
                                        <div>
                                            <h6 class="fs-16">Jeffrey Wilson</h6>
                                            <span class="fs-14 text-gray-6">Since 10 May 2025</span>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-center justify-content-center">
                                            <a href="{{url('profile-settings')}}"
                                                class="p-1 rounded-circle btn btn-light d-flex align-items-center justify-content-center"><i
                                                    class="isax isax-edit-2 fs-14"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body user-sidebar-body">
                            <ul>
                                <li>
                                    <span class="fs-14 text-gray-3 fw-medium mb-2">Main</span>
                                </li>
                                <li>
                                    <a href="{{url('dashboard')}}" class="d-flex align-items-center">
                                        <i class="isax isax-grid-55"></i> Dashboard
                                    </a>
                                </li>
                                <li class="submenu">
                                    <a href="#" class="d-block active subdrop">
                                        <i class="isax isax-calendar-tick5"></i><span>My Bookings</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{url('customer-flight-booking')}}"
                                                class="fs-14 d-inline-flex align-items-center">Flights</a>
                                        </li>
                                        <li>
                                            <a href="{{url('customer-hotel-booking')}}"
                                                class="fs-14 d-inline-flex align-items-center ">Hotels</a>
                                        </li>
                                        <li>
                                            <a href="{{url('customer-car-booking')}}"
                                                class="fs-14 d-inline-flex align-items-center ">Cars</a>
                                        </li>
                                        <li>
                                            <a href="{{url('customer-cruise-booking')}}"
                                                class="fs-14 d-inline-flex align-items-center ">Cruise</a>
                                        </li>
                                        <li>
                                            <a href="{{url('customer-tour-booking')}}"
                                                class="fs-14 d-inline-flex align-items-center">Tour</a>
                                        </li>
                                        <li>
                                            <a href="{{url('customer-tour-guides')}}"
                                                class="fs-14 d-inline-flex align-items-center active">Tour Guides</a>
                                        </li>
                                        <li>
                                            <a href="{{url('customer-bus-booking')}}"
                                                class="fs-14 d-inline-flex align-items-center">Bus</a>
                                        </li>
                                        <li>
                                            <a href="{{url('customer-visa-booking')}}"
                                                class="fs-14 d-inline-flex align-items-center">Visa</a>
                                        </li>
                                        <li>
                                            <a href="{{url('customer-activities-booking')}}"
                                                class="fs-14 d-inline-flex align-items-center">Activities</a>
                                        </li>

                                    </ul>
                                </li>
                                <li>
                                    <a href="{{url('review')}}" class="d-flex align-items-center">
                                        <i class="isax isax-magic-star5"></i> My Reviews
                                    </a>
                                </li>
                                <li>
                                    <div class="message-content">
                                        <a href="{{url('chat')}}" class="d-flex align-items-center">
                                            <i class="isax isax-message-square5"></i> Messages
                                        </a>
                                        <span class="msg-count rounded-circle">02</span>
                                    </div>
                                </li>
                                <li class="mb-2">
                                    <a href="{{url('wishlist')}}" class="d-flex align-items-center">
                                        <i class="isax isax-heart5"></i> Wishlist
                                    </a>
                                </li>
                                <li class="submenu">
                                    <a href="#" class="d-block"><i class="isax isax-discount-shape5"></i><span>Offers &
                                            Rewards</span><span class="menu-arrow"></span></a>
                                    <ul>
                                        <li>
                                            <a href="{{url('customer-coupons')}}"
                                                class="fs-14 d-inline-flex align-items-center">Coupons</a>
                                        </li>
                                        <li>
                                            <a href="{{url('customer-loyalty-points')}}"
                                                class="fs-14 d-inline-flex align-items-center">Loyalty Points</a>
                                        </li>
                                        <li>
                                            <a href="{{url('customer-reward-history')}}"
                                                class="fs-14 d-inline-flex align-items-center">Rewards History</a>
                                        </li>
                                        <li>
                                            <a href="{{url('customer-referral-program')}}"
                                                class="fs-14 d-inline-flex align-items-center">Referral Program</a>
                                        </li>
                                        <li>
                                            <a href="{{url('customer-gift-cards')}}"
                                                class="fs-14 d-inline-flex align-items-center">Gift Cards</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <span class="fs-14 text-gray-3 fw-medium mb-2">Finance</span>
                                </li>
                                <li>
                                    <a href="{{url('wallet')}}" class="d-flex align-items-center">
                                        <i class="isax isax-wallet-add-15"></i> Wallet
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="{{url('payment')}}" class="d-flex align-items-center">
                                        <i class="isax isax-money-recive5"></i> Payments
                                    </a>
                                </li>
                                <li>
                                    <span class="fs-14 text-gray-3 fw-medium mb-2">Account</span>
                                </li>
                                <li>
                                    <a href="{{url('my-profile')}}" class="d-flex align-items-center">
                                        <i class="isax isax-profile-tick5"></i> My Profile
                                    </a>
                                </li>
                                <li>
                                    <div class="message-content">
                                        <a href="{{url('notification')}}" class="d-flex align-items-center">
                                            <i class="isax isax-notification-bing5"></i> Notifications
                                        </a>
                                        <span class="msg-count bg-purple rounded-circle">05</span>
                                    </div>
                                </li>
                                <li>
                                    <a href="{{url('wishlist')}}" class="d-flex align-items-center">
                                        <i class="isax isax-setting-25"></i> Settings
                                    </a>
                                </li>
                                <li>
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
                                <h6>Guide Bookings</h6>
                                <p class="fs-14 text-gray-6 fw-normal">No of Bookings : 154</p>
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
                                            Tour Type
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end p-3">
                                            <li>
                                                <a href="#" class="dropdown-item rounded-1">Adventure Tourism</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown-item rounded-1">Escorted Tour</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown-item rounded-1">Ground Tour</a>
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
                                                <a href="#" class="dropdown-item rounded-1">Pending</a>
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
                                            <th>Guide & Tour</th>
                                            <th>Days</th>
                                            <th>Pricing</th>
                                            <th>Booked on</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="#" class="link-primary fw-medium" data-bs-toggle="modal"
                                                    data-bs-target="#processing">#GU-1245</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="{{url('guide-details')}}" class="avatar avatar-lg"><img
                                                            src="{{URL::asset('build/img/users/user-11.jpg')}}"
                                                            class="img-fluid rounded-circle" alt="img"></a>
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14"><a
                                                                href="{{url('guide-details')}}">Micheal John</a></p>
                                                        <span class="fs-14 fw-normal text-gray-6">Joy Jubilee
                                                            Jamboree</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                4 Days, 3 Nights
                                            </td>
                                            <td>$500</td>
                                            <td>15 May 2026</td>
                                            <td>
                                                <span
                                                    class="badge badge-info rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Processing</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#processing"><i
                                                            class="isax isax-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" class="link-primary fw-medium" data-bs-toggle="modal"
                                                    data-bs-target="#upcoming">#GU-3215</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="{{url('guide-details')}}" class="avatar avatar-lg"><img
                                                            src="{{URL::asset('build/img/users/user-28.jpg')}}"
                                                            class="img-fluid rounded-circle" alt="img"></a>
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14"><a
                                                                href="{{url('guide-details')}}">Daiyanna leo</a></p>
                                                        <span class="fs-14 fw-normal text-gray-6">LaughFest
                                                            Carnival</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                3 Days, 2 Nights
                                            </td>
                                            <td>$300</td>
                                            <td>10 May 2026</td>
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
                                                    data-bs-target="#pending">#GU-4581</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="{{url('guide-details')}}" class="avatar avatar-lg"><img
                                                            src="{{URL::asset('build/img/users/user-12.jpg')}}"
                                                            class="img-fluid rounded-circle" alt="img"></a>
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14"><a
                                                                href="{{url('guide-details')}}">David Josebeb</a></p>
                                                        <span class="fs-14 fw-normal text-gray-6">PlayPalooza
                                                            Part</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                2 Days, 1 Night
                                            </td>
                                            <td>$320</td>
                                            <td>04 May 2026</td>
                                            <td>
                                                <span
                                                    class="badge badge-secondary rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Pending</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#pending"><i
                                                            class="isax isax-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" class="link-primary fw-medium" data-bs-toggle="modal"
                                                    data-bs-target="#completed">#GU-6545</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="{{url('guide-details')}}" class="avatar avatar-lg"><img
                                                            src="{{URL::asset('build/img/users/user-29.jpg')}}"
                                                            class="img-fluid rounded-circle" alt="img"></a>
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14"><a
                                                                href="{{url('guide-details')}}">Rachel hosey</a></p>
                                                        <span class="fs-14 fw-normal text-gray-6">Romantic Places
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                5 Days, 4 Nights
                                            </td>
                                            <td>$400</td>
                                            <td>25 Apr 2026</td>
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
                                                    data-bs-target="#upcoming">#GB-3256</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="{{url('guide-details')}}" class="avatar avatar-lg"><img
                                                            src="{{URL::asset('build/img/users/user-13.jpg')}}"
                                                            class="img-fluid rounded-circle" alt="img"></a>
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14"><a
                                                                href="{{url('guide-details')}}">Adam Hook</a></p>
                                                        <span class="fs-14 fw-normal text-gray-6">Whimsy Wonderland
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                3 Days, 2 Nights
                                            </td>
                                            <td>$520</td>
                                            <td>17 Apr 2026</td>
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
                                                    data-bs-target="#cancelled">#GB-3654</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="{{url('guide-details')}}" class="avatar avatar-lg"><img
                                                            src="{{URL::asset('build/img/users/user-30.jpg')}}"
                                                            class="img-fluid rounded-circle" alt="img"></a>
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14"><a
                                                                href="{{url('guide-details')}}">Dianne Russell</a></p>
                                                        <span class="fs-14 fw-normal text-gray-6">Giggles & Games
                                                            Gala</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                4 Days, 3 Nights
                                            </td>
                                            <td>$400</td>
                                            <td>02 Apr 2026</td>
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
                                                    data-bs-target="#completed">#GB-1458</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="{{url('guide-details')}}" class="avatar avatar-lg"><img
                                                            src="{{URL::asset('build/img/users/user-14.jpg')}}"
                                                            class="img-fluid rounded-circle" alt="img"></a>
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14"><a
                                                                href="{{url('guide-details')}}">Albert Flores</a></p>
                                                        <span class="fs-14 fw-normal text-gray-6">Fitness Frenzy</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                2 Days, 1 Night
                                            </td>
                                            <td>$280</td>
                                            <td>20 Mar 2026</td>
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
                                                    data-bs-target="#completed">#GB-6589</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="{{url('guide-details')}}" class="avatar avatar-lg"><img
                                                            src="{{URL::asset('build/img/users/user-35.jpg')}}"
                                                            class="img-fluid rounded-circle" alt="img"></a>
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14"><a
                                                                href="{{url('guide-details')}}">Eleanor Pena</a></p>
                                                        <span class="fs-14 fw-normal text-gray-6">Foodie Fiesta</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                3 Days, 2 Nights
                                            </td>
                                            <td>$350</td>
                                            <td>10 Mar 2026</td>
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
                                                    data-bs-target="#completed">#GB-2315</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="{{url('guide-details')}}" class="avatar avatar-lg"><img
                                                            src="{{URL::asset('build/img/users/user-15.jpg')}}"
                                                            class="img-fluid rounded-circle" alt="img"></a>
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14"><a
                                                                href="{{url('guide-details')}}">Bessie Cooper</a></p>
                                                        <span class="fs-14 fw-normal text-gray-6">Dare DevCon</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                4 Days, 3 Nights
                                            </td>
                                            <td>$510</td>
                                            <td>15 Feb 2026</td>
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
                                                    data-bs-target="#pending">#GB-5414</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="{{url('guide-details')}}" class="avatar avatar-lg"><img
                                                            src="{{URL::asset('build/img/users/user-16.jpg')}}"
                                                            class="img-fluid rounded-circle" alt="img"></a>
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14"><a
                                                                href="{{url('guide-details')}}">Kristin Watson</a></p>
                                                        <span class="fs-14 fw-normal text-gray-6">Innovation
                                                            Ignited</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                5 Days, 4 Nights
                                            </td>
                                            <td>$600</td>
                                            <td>22 Jan 2026</td>
                                            <td>
                                                <span
                                                    class="badge badge-secondary rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Pending</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#pending"><i
                                                            class="isax isax-eye"></i></a>
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



