<?php $page="payment";?>
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
                    <h2 class="breadcrumb-title mb-2">Payments</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Payments</li>
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

                <!-- Payments -->
                <div class="col-xl-9 col-lg-8">
                    <div class="card hotel-list">
                        <div class="card-body p-0">
                            <div class="list-header d-flex align-items-center justify-content-between flex-wrap">
                                <h6>Payments</h6>
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
                                                <a href="#" class="dropdown-item rounded-1">Completed</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown-item rounded-1">Pending</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown-item rounded-1">Cancelled</a>
                                            </li>
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
                                            <th>ID</th>
                                            <th>Payment</th>
                                            <th>Service</th>
                                            <th>Payment Type</th>
                                            <th>Date</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="{{url('invoices')}}" class="link-primary fw-medium">#PA-1245</a></td>
                                            <td class="text-gray-9 fw-medium">Hotel Atheena Plaza</td>
                                            <td>Hotel</td>
                                            <td>Card</td>
                                            <td>15 May 2025, 10:00 AM</td>
                                            <td>$11,569</td>
                                            <td>
                                                <span
                                                    class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{url('invoices')}}" class="link-primary fw-medium">#PA-3215</a></td>
                                            <td class="text-gray-9 fw-medium">Antonov-12</td>
                                            <td>Flight</td>
                                            <td>Paypal</td>
                                            <td>20 May 2025, 10:00 AM</td>
                                            <td>$12,543</td>
                                            <td>
                                                <span
                                                    class="badge badge-secondary rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Pending</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{url('invoices')}}" class="link-primary fw-medium">#PA-4581</a></td>
                                            <td class="text-gray-9 fw-medium">The Queen of Ocean</td>
                                            <td>Cruise</td>
                                            <td>Stripe</td>
                                            <td>27 May 2025, 10:00 AM</td>
                                            <td>$14,697</td>
                                            <td>
                                                <span
                                                    class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{url('invoices')}}" class="link-primary fw-medium">#PA-6545</a></td>
                                            <td class="text-gray-9 fw-medium">Ford Mustang</td>
                                            <td>Car</td>
                                            <td>Card</td>
                                            <td>12 Jun 2025, 10:00 AM</td>
                                            <td>$10,528</td>
                                            <td>
                                                <span
                                                    class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{url('invoices')}}" class="link-primary fw-medium">#PA-5769</a></td>
                                            <td class="text-gray-9 fw-medium">PlayPalooza Part</td>
                                            <td>Tour</td>
                                            <td>Stripe</td>
                                            <td>18 Jun 2025, 10:00 AM</td>
                                            <td>$12,297</td>
                                            <td>
                                                <span
                                                    class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{url('invoices')}}" class="link-primary fw-medium">#PA-4742</a></td>
                                            <td class="text-gray-9 fw-medium">The Urban Retreat</td>
                                            <td>Hotel</td>
                                            <td>Card</td>
                                            <td>22 Jun 2025, 10:00 AM</td>
                                            <td>$18,349</td>
                                            <td>
                                                <span
                                                    class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{url('invoices')}}" class="link-primary fw-medium">#PA-9364</a></td>
                                            <td class="text-gray-9 fw-medium">Foodie Fiesta</td>
                                            <td>Tour</td>
                                            <td>Stripe</td>
                                            <td>16 Jul 2025, 10:00 AM</td>
                                            <td>$17,875</td>
                                            <td>
                                                <span
                                                    class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{url('invoices')}}" class="link-primary fw-medium">#PA-6184</a></td>
                                            <td class="text-gray-9 fw-medium">Nimbus 345</td>
                                            <td>Flight</td>
                                            <td>Paypal</td>
                                            <td>25 Jul 2025, 10:00 AM</td>
                                            <td>$15,175</td>
                                            <td>
                                                <span
                                                    class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{url('invoices')}}" class="link-primary fw-medium">#PA-8207</a></td>
                                            <td class="text-gray-9 fw-medium">The Grand Horizon</td>
                                            <td>Hotel</td>
                                            <td>Card</td>
                                            <td>14 Jul 2025, 10:00 AM</td>
                                            <td>$12,766</td>
                                            <td>
                                                <span
                                                    class="badge badge-danger rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Cancelled</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{url('invoices')}}" class="link-primary fw-medium">#PA-3854</a></td>
                                            <td class="text-gray-9 fw-medium"> Mercedes-benz </td>
                                            <td>Car</td>
                                            <td>Paypal</td>
                                            <td>28 Aug 2025, 10:00 AM</td>
                                            <td>$13,496</td>
                                            <td>
                                                <span
                                                    class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
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
                                <option>5</option>
                                <option selected>10</option>
                                <option>20</option>
                            </select>
                            <span>of 40 Results</span>
                        </div>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="#"><span class="me-3"><i class="isax isax-arrow-left-2"></i></span></a>
                            <nav aria-label="Page navigation">
                                <ul class="paginations d-flex justify-content-center align-items-center">
                                    <li class="page-item me-2"><a
                                            class="page-link-1 d-flex justify-content-center align-items-center "
                                            href="#">1</a></li>
                                    <li class="page-item me-2"><a
                                            class="page-link-1 d-flex justify-content-center align-items-center"
                                            href="#">2</a></li>
                                    <li class="page-item me-2"><a
                                            class="page-link-1 d-flex justify-content-center align-items-center"
                                            href="#">3</a></li>
                                    <li class="page-item me-2"><a
                                            class="page-link-1 active d-flex justify-content-center align-items-center "
                                            href="#">4</a></li>
                                    <li class="page-item"><a
                                            class="page-link-1 d-flex justify-content-center align-items-center "
                                            href="#">5</a></li>
                                </ul>
                            </nav>
                            <a href="#"><span class="ms-3"><i class="isax isax-arrow-right-3"></i></span></a>
                        </div>
                    </div>
                </div>
                <!-- /Payments -->

            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->

    <!-- ========================
        End Page Content
    ========================= -->

@endsection



