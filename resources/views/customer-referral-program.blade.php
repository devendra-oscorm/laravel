<?php $page="customer-referral-program";?>
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
                    <h2 class="breadcrumb-title mb-2">Offers & Rewards</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{url('index')}}"><i class="isax isax-grid-55"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">My Bookings</li>
                            <li class="breadcrumb-item active" aria-current="page">Referral Program</li>
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
                                    <a href="#" class="d-block">
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
                                            <a href="{{url('cruise-booking')}}"
                                                class="fs-14 d-inline-flex align-items-center">Cruise</a>
                                        </li>
                                        <li>
                                            <a href="{{url('customer-tour-booking')}}"
                                                class="fs-14 d-inline-flex align-items-center">Tour</a>
                                        </li>
                                        <li>
                                            <a href="{{url('customer-tour-guides')}}"
                                                class="fs-14 d-inline-flex align-items-center">Tour Guides</a>
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
                                    <a href="#" class="d-block active subdrop"><i
                                            class="isax isax-discount-shape5"></i><span>Offers &
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
                                                class="fs-14 d-inline-flex align-items-center active">Referral
                                                Program</a>
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
                                    <a href="{{url('profile-settings')}}" class="d-flex align-items-center">
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
                                <h6>Referral Program</h6>
                                <p class="fs-14 text-gray-6 fw-normal">No of Referral program : 302</p>
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
                                <h6 class="">Referral List</h6>
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
                                            Status
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end p-3">
                                            <li>
                                                <a href="#" class="dropdown-item rounded-1">Confirmed</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown-item rounded-1">Redeemed</a>
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
                                            <th>Referral ID</th>
                                            <th>Issued Date</th>
                                            <th>Referral User</th>
                                            <th>Reward Value</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#confirmed"
                                                    class="link-primary fw-medium">#REF-1021</a></td>
                                            <td>15 May 2026</td>
                                            <td>Jacob Jones</td>
                                            <td>$500</td>
                                            <td>
                                                <span
                                                    class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Confirmed</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"> <a href="#"
                                                        data-bs-toggle="modal" data-bs-target="#confirmed"><i
                                                            class="isax isax-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#confirmed"
                                                    class="link-primary fw-medium">#REF-1022</a></td>
                                            <td>10 Jun 2026</td>
                                            <td>Ronald Richards</td>
                                            <td>$300</td>
                                            <td>
                                                <span
                                                    class="badge badge-primary rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Rewarded</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"> <a href="#"
                                                        data-bs-toggle="modal" data-bs-target="#confirmed"><i
                                                            class="isax isax-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#pending"
                                                    class="link-primary fw-medium">#REF-1023</a></td>
                                            <td>04 July 2026</td>
                                            <td>Annette Black</td>
                                            <td>$320</td>
                                            <td>
                                                <span
                                                    class="badge badge-secondary rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Pending</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"> <a href="#"
                                                        data-bs-toggle="modal" data-bs-target="#pending"><i
                                                            class="isax isax-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#confirmed"
                                                    class="link-primary fw-medium">#REF-1023</a></td>
                                            <td>25 Aug 2026</td>
                                            <td>Devon Lane</td>
                                            <td>$400</td>
                                            <td>
                                                <span
                                                    class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Confirmed</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"> <a href="#"
                                                        data-bs-toggle="modal" data-bs-target="#confirmed"><i
                                                            class="isax isax-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#rewarded"
                                                    class="link-primary fw-medium">#REF-1024</a></td>
                                            <td>17 Aug 2026</td>
                                            <td>Devon Lane</td>
                                            <td>$520</td>
                                            <td>
                                                <span
                                                    class="badge badge-primary rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Rewarded</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"> <a href="#"
                                                        data-bs-toggle="modal" data-bs-target="#rewarded"><i
                                                            class="isax isax-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#rewarded"
                                                    class="link-primary fw-medium">#REF-1024</a></td>
                                            <td>02 Sep 2026</td>
                                            <td>Courtney Henry</td>
                                            <td>$400</td>
                                            <td>
                                                <span
                                                    class="badge badge-primary rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Rewarded</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"> <a href="#"
                                                        data-bs-toggle="modal" data-bs-target="#rewarded"><i
                                                            class="isax isax-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#confirmed"
                                                    class="link-primary fw-medium">#REF-1025</a></td>
                                            <td>20 Oct 2026</td>
                                            <td>Cody Fisher</td>
                                            <td>$280</td>
                                            <td>
                                                <span
                                                    class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Confirmed</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"> <a href="#"
                                                        data-bs-toggle="modal" data-bs-target="#confirmed"><i
                                                            class="isax isax-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#confirmed"
                                                    class="link-primary fw-medium">#REF-1025</a></td>
                                            <td>10 Nov 2026</td>
                                            <td>Dianne Russell</td>
                                            <td>$350</td>
                                            <td>
                                                <span
                                                    class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Confirmed</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"> <a href="#"
                                                        data-bs-toggle="modal" data-bs-target="#confirmed"><i
                                                            class="isax isax-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#confirmed"
                                                    class="link-primary fw-medium">#REF-1026</a></td>
                                            <td>15 Dec 2026</td>
                                            <td>Esther Howard</td>
                                            <td>$510</td>
                                            <td>
                                                <span
                                                    class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Confirmed</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"> <a href="#"
                                                        data-bs-toggle="modal" data-bs-target="#confirmed"><i
                                                            class="isax isax-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#pending"
                                                    class="link-primary fw-medium">#REF-1027</a></td>
                                            <td>22 Dec 2026</td>
                                            <td>Devon Lane</td>
                                            <td>$600</td>
                                            <td>
                                                <span
                                                    class="badge badge-secondary rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Pending</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"> <a href="#"
                                                        data-bs-toggle="modal" data-bs-target="#pending"><i
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



