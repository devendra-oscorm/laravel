<?php $page="customer-coupons";?>
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
                            <li class="breadcrumb-item active" aria-current="page">Offers & Rewards</li>
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
                                <h6 class="">Coupons List</h6>
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
                                            Coupon Type
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end p-3">
                                            <li>
                                                <a href="#" class="dropdown-item rounded-1">Flat discount</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown-item rounded-1">Special offer</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown-item rounded-1">Welcome offer</a>
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
                                                <a href="#" class="dropdown-item rounded-1">Available</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown-item rounded-1">Expired</a>
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
                                            <th>Coupon Code</th>
                                            <th>Category</th>
                                            <th>Validity</th>
                                            <th>Discount on</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#coupon-avaliable"
                                                    class="link-primary fw-medium">DREAM500</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14">Flat discount on...
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Tour Package</td>
                                            <td>40 Days</td>
                                            <td>$500</td>
                                            <td>
                                                <span
                                                    class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Available</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"> <a href="#"
                                                        data-bs-toggle="modal" data-bs-target="#coupon-avaliable"><i
                                                            class="isax isax-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#coupon-avaliable"
                                                    class="link-primary fw-medium">ACT10</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14">Special offer on...
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Activities</td>
                                            <td>42 Days</td>
                                            <td>$300</td>
                                            <td>
                                                <span
                                                    class="badge badge-primary rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Expired</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"> <a href="#"
                                                        data-bs-toggle="modal" data-bs-target="#coupon-expired"><i
                                                            class="isax isax-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#coupon-avaliable"
                                                    class="link-primary fw-medium">VISA300</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14">Discount on visa...
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Visa</td>
                                            <td>38 Days</td>
                                            <td>$320</td>
                                            <td>
                                                <span
                                                    class="badge badge-secondary text-white rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Redeemed</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"> <a href="#"
                                                        data-bs-toggle="modal" data-bs-target="#coupon-redeemed"><i
                                                            class="isax isax-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#coupon-avaliable"
                                                    class="link-primary fw-medium">SUMMER800</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14">New user welcome offer
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Tour Package</td>
                                            <td>36 Days</td>
                                            <td>$400</td>
                                            <td>
                                                <span
                                                    class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Available</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"> <a href="#"
                                                        data-bs-toggle="modal" data-bs-target="#coupon-avaliable"><i
                                                            class="isax isax-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#coupon-avaliable"
                                                    class="link-primary fw-medium">LOYALTY200</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14">Offer on private
                                                            tour...</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Visa</td>
                                            <td>34 Days</td>
                                            <td>$520</td>
                                            <td>
                                                <span
                                                    class="badge badge-primary rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Expired</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"> <a href="#"
                                                        data-bs-toggle="modal" data-bs-target="#coupon-expired"><i
                                                            class="isax isax-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#coupon-avaliable"
                                                    class="link-primary fw-medium">ACTFLAT400</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14">Flat discount on...
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Flights</td>
                                            <td>32 Days</td>
                                            <td>$400</td>
                                            <td>
                                                <span
                                                    class="badge badge-primary rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Expired</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"> <a href="#"
                                                        data-bs-toggle="modal" data-bs-target="#coupon-expired"><i
                                                            class="isax isax-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#coupon-avaliable"
                                                    class="link-primary fw-medium">VISA10</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14">Percentage discount
                                                            on...</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Car</td>
                                            <td>30 Days</td>
                                            <td>$280</td>
                                            <td>
                                                <span
                                                    class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Available</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"> <a href="#"
                                                        data-bs-toggle="modal" data-bs-target="#coupon-avaliable"><i
                                                            class="isax isax-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#coupon-avaliable"
                                                    class="link-primary fw-medium">FESTIVE25</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14">Festival season...</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Visa</td>
                                            <td>28 Days</td>
                                            <td>$350</td>
                                            <td>
                                                <span
                                                    class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Available</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"> <a href="#"
                                                        data-bs-toggle="modal" data-bs-target="#coupon-avaliable"><i
                                                            class="isax isax-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#coupon-avaliable"
                                                    class="link-primary fw-medium">LOYALTY200</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14">Reward coupon for...
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Tour Package</td>
                                            <td>26 Days</td>
                                            <td>$510</td>
                                            <td>
                                                <span
                                                    class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Available</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"> <a href="#"
                                                        data-bs-toggle="modal" data-bs-target="#coupon-avaliable"><i
                                                            class="isax isax-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#coupon-avaliable"
                                                    class="link-primary fw-medium">SUMMER800</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14">New user welcome offer
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Activities</td>
                                            <td>24 Days</td>
                                            <td>$600</td>
                                            <td>
                                                <span
                                                    class="badge badge-secondary text-white rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Redeemed</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"> <a href="#"
                                                        data-bs-toggle="modal" data-bs-target="#coupon-redeemed"><i
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



