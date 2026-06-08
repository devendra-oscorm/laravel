<?php $page="customer-loyalty-points";?>
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
                            <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="isax isax-grid-55"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">My Bookings</li>
                            <li class="breadcrumb-item active" aria-current="page">Loyalty Points</li>
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
                    @include('layout.partials.user-sidebar')
                </div>
                <!-- /Sidebar -->

                <!-- Hotel Booking -->
                <div class="col-xl-9 col-lg-8">

                    <!-- Booking Header -->
                    <div class="card booking-header">
                        <div
                            class="card-body header-content d-flex align-items-center justify-content-between flex-wrap ">
                            <div>
                                <h6>Loyalty Points</h6>
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
                                <h6 class="">Loyalty Points List</h6>
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
                                            Summary Type
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end p-3">
                                            <li>
                                                <a href="#" class="dropdown-item rounded-1">Dubai Tour Booking</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown-item rounded-1">Activity Booking</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown-item rounded-1">Visa Service</a>
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
                                            <th>ID</th>
                                            <th>Summary</th>
                                            <th>Issued Date</th>
                                            <th>Earned</th>
                                            <th>Redeemed</th>
                                            <th>Expiry Date</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#confirmed"
                                                    class="link-primary fw-medium">#LP-1245</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14">Dubai Tour Booking</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>15 May 2026</td>
                                            <td>+$500</td>
                                            <td>-</td>
                                            <td>15 May 2027</td>
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
                                                    class="link-primary fw-medium">#LP-3215</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14">Activity Booking</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>10 Jun 2026</td>
                                            <td>+$300</td>
                                            <td>-</td>
                                            <td>10 Jun 2027</td>
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
                                                    class="link-primary fw-medium">#LP-4581</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14">Visa Service</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>04 July 2026</td>
                                            <td>+$320</td>
                                            <td>-</td>
                                            <td>04 July 2027</td>
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
                                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#redeemed"
                                                    class="link-primary fw-medium">#LP-6545</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14">Redeemed at Checkout
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>25 Aug 2026</td>
                                            <td>-</td>
                                            <td>-$500</td>
                                            <td>25 Aug 2027</td>
                                            <td>
                                                <span
                                                    class="badge badge-primary rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Redeemed</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"> <a href="#"
                                                        data-bs-toggle="modal" data-bs-target="#redeemed"><i
                                                            class="isax isax-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#confirmed"
                                                    class="link-primary fw-medium">#LP-3256</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14">Referral Bonus</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>17 Aug 2026</td>
                                            <td>+$520</td>
                                            <td>-</td>
                                            <td>17 Aug 2027</td>
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
                                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#redeemed"
                                                    class="link-primary fw-medium">#LP-3654</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14">Paris Tour Booking</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>02 Sep 2026</td>
                                            <td>-</td>
                                            <td>-$400</td>
                                            <td>02 Sep 2027</td>
                                            <td>
                                                <span
                                                    class="badge badge-primary rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Redeemed</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"> <a href="#"
                                                        data-bs-toggle="modal" data-bs-target="#redeemed"><i
                                                            class="isax isax-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#redeemed"
                                                    class="link-primary fw-medium">#LP-1458</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14">Activity Booking</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>20 Oct 2026</td>
                                            <td>-</td>
                                            <td>-$280</td>
                                            <td>20 Oct 2027</td>
                                            <td>
                                                <span
                                                    class="badge badge-primary rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Redeemed</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"> <a href="#"
                                                        data-bs-toggle="modal" data-bs-target="#redeemed"><i
                                                            class="isax isax-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#confirmed"
                                                    class="link-primary fw-medium">#LP-6589</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14">Bus Booking</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>10 Nov 2026</td>
                                            <td>+$350</td>
                                            <td>-</td>
                                            <td>10 Nov 2027</td>
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
                                                    class="link-primary fw-medium">#LP-2315</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14">Visa Service</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>15 Dec 2026</td>
                                            <td>+$510</td>
                                            <td>-</td>
                                            <td>15 Dec 2027</td>
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
                                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#redeemed"
                                                    class="link-primary fw-medium">#LP-5414</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14">USA Tour Booking</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>22 Dec 2026</td>
                                            <td>-</td>
                                            <td>-$600</td>
                                            <td>22 Dec 2027</td>
                                            <td>
                                                <span
                                                    class="badge badge-primary rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Redeemed</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"> <a href="#"
                                                        data-bs-toggle="modal" data-bs-target="#redeemed"><i
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



