<?php $page="refund";?>
@extends('layout.mainlayout')
@section('content')

    <!-- ========================
        Start Page Content
    ========================= -->

    <!-- Breadcrumb -->
    <div class="breadcrumb-bar breadcrumb-bg-01 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title mb-2">Refunds</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Refunds</li>
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

                <!-- Refunds Content -->
                <div class="col-xl-9 col-lg-8">
                    <div class="card hotel-list">
                        <div class="card-body p-0">
                            <div class="list-header d-flex align-items-center justify-content-between flex-wrap">
                                <h6>Refund History</h6>
                                <div class="d-flex align-items-center flex-wrap">
                                    <div class="input-icon-start me-2 position-relative">
                                        <span class="icon-addon">
                                            <i class="isax isax-search-normal-1 fs-14"></i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                    <div class="dropdown me-3">
                                        <a href="#"
                                            class="dropdown-toggle text-gray-6 btn rounded border d-inline-flex align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Category
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end p-3">
                                            <li><a href="#" class="dropdown-item rounded-1">Hotel</a></li>
                                            <li><a href="#" class="dropdown-item rounded-1">Flight</a></li>
                                            <li><a href="#" class="dropdown-item rounded-1">Car</a></li>
                                            <li><a href="#" class="dropdown-item rounded-1">Cruise</a></li>
                                            <li><a href="#" class="dropdown-item rounded-1">Tour</a></li>
                                            <li><a href="#" class="dropdown-item rounded-1">Bus</a></li>
                                            <li><a href="#" class="dropdown-item rounded-1">Visa</a></li>
                                            <li><a href="#" class="dropdown-item rounded-1">Activity</a></li>
                                        </ul>
                                    </div>
                                    <div class="dropdown me-3">
                                        <a href="#"
                                            class="dropdown-toggle text-gray-6 btn rounded border d-inline-flex align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Status
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end p-3">
                                            <li><a href="#" class="dropdown-item rounded-1">Completed</a></li>
                                            <li><a href="#" class="dropdown-item rounded-1">Pending</a></li>
                                            <li><a href="#" class="dropdown-item rounded-1">Failed</a></li>
                                        </ul>
                                    </div>
                                    <div class="input-icon-end position-relative">
                                        <span class="input-icon-addon">
                                            <i class="isax isax-calendar-edit"></i>
                                        </span>
                                        <input type="text" class="form-control date-range bookingrange"
                                            placeholder="dd/mm/yyyy - dd/mm/yyyy">
                                    </div>
                                </div>
                            </div>
                            <div class="custom-datatable-filter table-responsive">
                                <table class="table datatable">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Refund ID</th>
                                            <th>Item / Description</th>
                                            <th>Category</th>
                                            <th>Refund Method</th>
                                            <th>Requested Date</th>
                                            <th>Refund Amount</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="{{url('invoices')}}" class="link-primary fw-medium">#RF-8924</a></td>
                                            <td class="text-gray-9 fw-medium">Hotel Atheena Plaza</td>
                                            <td>Hotel</td>
                                            <td>Card (Ending 4242)</td>
                                            <td>16 May 2025, 11:20 AM</td>
                                            <td>$11,569</td>
                                            <td>
                                                <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10">
                                                    <i class="fa-solid fa-circle fs-5 me-1"></i>Completed
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{url('invoices')}}" class="link-primary fw-medium">#RF-3829</a></td>
                                            <td class="text-gray-9 fw-medium">Antonov An-32 (Ticket #FL-902)</td>
                                            <td>Flight</td>
                                            <td>Paypal</td>
                                            <td>22 May 2025, 03:45 PM</td>
                                            <td>$12,543</td>
                                            <td>
                                                <span class="badge badge-secondary rounded-pill d-inline-flex align-items-center fs-10">
                                                    <i class="fa-solid fa-circle fs-5 me-1"></i>Pending
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{url('invoices')}}" class="link-primary fw-medium">#RF-2938</a></td>
                                            <td class="text-gray-9 fw-medium">Ford Mustang Premium Car Rental</td>
                                            <td>Car</td>
                                            <td>Card (Ending 5512)</td>
                                            <td>14 Jun 2025, 09:15 AM</td>
                                            <td>$10,528</td>
                                            <td>
                                                <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10">
                                                    <i class="fa-solid fa-circle fs-5 me-1"></i>Completed
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{url('invoices')}}" class="link-primary fw-medium">#RF-9482</a></td>
                                            <td class="text-gray-9 fw-medium">The Queen of Ocean Cruise Suite</td>
                                            <td>Cruise</td>
                                            <td>Stripe</td>
                                            <td>29 May 2025, 04:10 PM</td>
                                            <td>$14,697</td>
                                            <td>
                                                <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10">
                                                    <i class="fa-solid fa-circle fs-5 me-1"></i>Completed
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{url('invoices')}}" class="link-primary fw-medium">#RF-4839</a></td>
                                            <td class="text-gray-9 fw-medium">Rainbow Valley Tour Package</td>
                                            <td>Tour</td>
                                            <td>Stripe</td>
                                            <td>20 Jun 2025, 01:25 PM</td>
                                            <td>$12,297</td>
                                            <td>
                                                <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10">
                                                    <i class="fa-solid fa-circle fs-5 me-1"></i>Completed
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{url('invoices')}}" class="link-primary fw-medium">#RF-5729</a></td>
                                            <td class="text-gray-9 fw-medium">City Tour Express Bus Line</td>
                                            <td>Bus</td>
                                            <td>Wallet</td>
                                            <td>21 Jun 2025, 10:50 AM</td>
                                            <td>$350</td>
                                            <td>
                                                <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10">
                                                    <i class="fa-solid fa-circle fs-5 me-1"></i>Completed
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{url('invoices')}}" class="link-primary fw-medium">#RF-2819</a></td>
                                            <td class="text-gray-9 fw-medium">Schengen Tourist Visa Application</td>
                                            <td>Visa</td>
                                            <td>Card (Ending 9901)</td>
                                            <td>23 Jun 2025, 12:00 PM</td>
                                            <td>$1,200</td>
                                            <td>
                                                <span class="badge badge-danger rounded-pill d-inline-flex align-items-center fs-10">
                                                    <i class="fa-solid fa-circle fs-5 me-1"></i>Failed
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{url('invoices')}}" class="link-primary fw-medium">#RF-7483</a></td>
                                            <td class="text-gray-9 fw-medium">Skydiving Activity Booking</td>
                                            <td>Activity</td>
                                            <td>Stripe</td>
                                            <td>26 Jun 2025, 02:40 PM</td>
                                            <td>$2,450</td>
                                            <td>
                                                <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10">
                                                    <i class="fa-solid fa-circle fs-5 me-1"></i>Completed
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="table-paginate d-flex justify-content-between align-items-center flex-wrap row-gap-3">
                        <div class="value d-flex align-items-center">
                            <span>Show</span>
                            <select class="">
                                <option selected>5</option>
                                <option>10</option>
                                <option>20</option>
                            </select>
                            <span>of 8 Results</span>
                        </div>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="#"><span class="me-3"><i class="isax isax-arrow-left-2"></i></span></a>
                            <nav aria-label="Page navigation">
                                <ul class="paginations d-flex justify-content-center align-items-center">
                                    <li class="page-item me-2"><a
                                            class="page-link-1 active d-flex justify-content-center align-items-center"
                                            href="#">1</a></li>
                                    <li class="page-item"><a
                                            class="page-link-1 d-flex justify-content-center align-items-center"
                                            href="#">2</a></li>
                                </ul>
                            </nav>
                            <a href="#"><span class="ms-3"><i class="isax isax-arrow-right-3"></i></span></a>
                        </div>
                    </div>
                </div>
                <!-- /Refunds Content -->

            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->

    <!-- ========================
        End Page Content
    ========================= -->

@endsection
