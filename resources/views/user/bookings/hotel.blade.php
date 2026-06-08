<?php $page="customer-hotel-booking";?>
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
                            <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="isax isax-grid-55"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">My Bookings</li>
                            <li class="breadcrumb-item active" aria-current="page">Hotels</li>
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
                <div class="col-xl-9 col-lg-9 theiaStickySidebar">

                    <!-- Booking Header -->
                    <div class="card booking-header">
                        <div
                            class="card-body header-content d-flex align-items-center justify-content-between flex-wrap ">
                            <div>
                                <h6>Hotels</h6>
                                <p class="fs-14 text-gray-6 fw-normal ">No of Booking : 40</p>
                            </div>

                            <div class="d-flex align-items-center flex-wrap">
                                <div class="input-icon-start  me-3 position-relative">
                                    <span class="icon-addon">
                                        <i class="isax isax-calendar-edit fs-14"></i>
                                    </span>
                                    <input type="text" class="form-control date-range bookingrange" placeholder="Select"
                                        value="Academic Year : 2024 / 2025">
                                </div>
                                <div class="dropdown ">
                                    <a href="#"
                                        class="dropdown-toggle btn border text-gray-6 rounded  fw-normal fs-14 d-inline-flex align-items-center"
                                        data-bs-toggle="dropdown">
                                        <i class="ti ti-file-export me-2 fs-14 text-gray-6"></i>Export
                                    </a>
                                    <ul class="dropdown-menu  dropdown-menu-end p-3">
                                        <li>
                                            <a href="#" class="dropdown-item rounded-1"><i
                                                    class="ti ti-file-type-pdf me-1"></i>Export as PDF</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown-item rounded-1"><i
                                                    class="ti ti-file-type-xls me-1"></i>Export as Excel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Booking Header -->

                    <!-- Hotel-Booking List -->
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
                                            Room Type
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end p-3">
                                            <li>
                                                <a href="#" class="dropdown-item rounded-1">Single Room</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown-item rounded-1">Double Room</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown-item rounded-1">Twin Room</a>
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

                            <!-- Hotel List -->
                            <div class="custom-datatable-filter table-responsive">
                                <table class="table datatable">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>ID</th>
                                            <th>Hotel</th>
                                            <th>Room & Guest</th>
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
                                                    data-bs-target="#upcoming">#HB-1245</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="{{url('hotel-details')}}" class="avatar avatar-lg"><img
                                                            src="{{URL::asset('build/img/hotels/hotel-01.jpg')}}"
                                                            class="img-fluid rounded-circle" alt="img"></a>
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14"><a
                                                                href="{{url('hotel-details')}}">Hotel Athenee</a></p>
                                                        <span class="fs-14 fw-normal text-gray-6">Barcelona</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h6 class="fs-14 mb-1">Suite Room</h6>
                                                <span class="fs-14 fw-normal text-gray-6">2 Adults, 1 Child</span>
                                            </td>
                                            <td>4 Days, 3 Nights</td>
                                            <td>$11,569</td>
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
                                                    data-bs-target="#upcoming">#HB-3215</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="{{url('hotel-details')}}" class="avatar avatar-lg"><img
                                                            src="{{URL::asset('build/img/hotels/hotel-18.jpg')}}"
                                                            class="img-fluid rounded-circle" alt="img"></a>
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14"><a
                                                                href="{{url('hotel-details')}}">The Luxe Haven</a></p>
                                                        <span class="fs-14 fw-normal text-gray-6">London</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h6 class="fs-14 mb-1">Queen Room</h6>
                                                <span class="fs-14 fw-normal text-gray-6">2 Adults, 2 Child</span>
                                            </td>
                                            <td>3 Days, 2 Nights</td>
                                            <td>$10,745</td>
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
                                                    data-bs-target="#upcoming">#HB-4581</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="{{url('hotel-details')}}" class="avatar avatar-lg"><img
                                                            src="{{URL::asset('build/img/hotels/hotel-19.jpg')}}"
                                                            class="img-fluid rounded-circle" alt="img"></a>
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14"><a
                                                                href="{{url('hotel-details')}}">The Urban Retreat</a></p>
                                                        <span class="fs-14 fw-normal text-gray-6">Edinburgh</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h6 class="fs-14 mb-1">Single Room</h6>
                                                <span class="fs-14 fw-normal text-gray-6">2 Adults, 1 Child</span>
                                            </td>
                                            <td>2 Days, 1 Night</td>
                                            <td>$8,160</td>
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
                                                    data-bs-target="#pending">#HB-6545</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="{{url('hotel-details')}}" class="avatar avatar-lg"><img
                                                            src="{{URL::asset('build/img/hotels/hotel-20.jpg')}}"
                                                            class="img-fluid rounded-circle" alt="img"></a>
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14"><a
                                                                href="{{url('hotel-details')}}">The Grand Horizon</a></p>
                                                        <span class="fs-14 fw-normal text-gray-6">Manchester</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h6 class="fs-14 mb-1">Balcony View</h6>
                                                <span class="fs-14 fw-normal text-gray-6">3 Adults, 2 Child</span>
                                            </td>
                                            <td>5 Days, 4 Nights</td>
                                            <td>$14,840</td>
                                            <td>17 Jun 2025</td>
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
                                                    data-bs-target="#cancelled">#HB-3256</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="{{url('hotel-details')}}" class="avatar avatar-lg"><img
                                                            src="{{URL::asset('build/img/hotels/hotel-21.jpg')}}"
                                                            class="img-fluid rounded-circle" alt="img"></a>
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14"><a
                                                                href="{{url('hotel-details')}}">Hotel Serene Valley</a></p>
                                                        <span class="fs-14 fw-normal text-gray-6">Chelsea</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h6 class="fs-14 mb-1">City View</h6>
                                                <span class="fs-14 fw-normal text-gray-6">2 Adults, 2 Child</span>
                                            </td>
                                            <td>3 Days, 2 Nights</td>
                                            <td>$10,450</td>
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
                                                    data-bs-target="#cancelled">#HB-3654</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="{{url('hotel-details')}}" class="avatar avatar-lg"><img
                                                            src="{{URL::asset('build/img/hotels/hotel-22.jpg')}}"
                                                            class="img-fluid rounded-circle" alt="img"></a>
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14"><a
                                                                href="{{url('hotel-details')}}">Hotel Evergreen</a></p>
                                                        <span class="fs-14 fw-normal text-gray-6">Las Vegas</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h6 class="fs-14 mb-1">Suite Room</h6>
                                                <span class="fs-14 fw-normal text-gray-6">2 Adults, 1 Child</span>
                                            </td>
                                            <td>4 Days, 3 Nights</td>
                                            <td>$12,600</td>
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
                                                    data-bs-target="#completed">#HB-1458</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="{{url('hotel-details')}}" class="avatar avatar-lg"><img
                                                            src="{{URL::asset('build/img/hotels/hotel-model-05.jpg')}}"
                                                            class="img-fluid rounded-circle" alt="img"></a>
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14"><a
                                                                href="{{url('hotel-details')}}">Stardust Hotel</a></p>
                                                        <span class="fs-14 fw-normal text-gray-6">Salford</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h6 class="fs-14 mb-1">Suite Room</h6>
                                                <span class="fs-14 fw-normal text-gray-6">2 Adults, 2 Child</span>
                                            </td>
                                            <td>2 Days, 1 Night</td>
                                            <td>$9,380</td>
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
                                                    data-bs-target="#completed">#HB-6589</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="{{url('hotel-details')}}" class="avatar avatar-lg"><img
                                                            src="{{URL::asset('build/img/hotels/hotel-23.jpg')}}"
                                                            class="img-fluid rounded-circle" alt="img"></a>
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14"><a
                                                                href="{{url('hotel-details')}}">Hotel Plaza</a></p>
                                                        <span class="fs-14 fw-normal text-gray-6">Newyork</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h6 class="fs-14 mb-1">Single Room</h6>
                                                <span class="fs-14 fw-normal text-gray-6">1 Adult, 1 Child</span>
                                            </td>
                                            <td>3 Days, 2 Nights</td>
                                            <td>$10,400</td>
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
                                                    data-bs-target="#completed">#HB-2315</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="{{url('hotel-details')}}" class="avatar avatar-lg"><img
                                                            src="{{URL::asset('build/img/hotels/hotel-13.jpg')}}"
                                                            class="img-fluid rounded-circle" alt="img"></a>
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14"><a
                                                                href="{{url('hotel-details')}}">Hotel Skyline Vista</a></p>
                                                        <span class="fs-14 fw-normal text-gray-6">Cambridge</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h6 class="fs-14 mb-1">Queen Room</h6>
                                                <span class="fs-14 fw-normal text-gray-6">2 Adults, 1 Child</span>
                                            </td>
                                            <td>4 Days, 3 Nights</td>
                                            <td>$12,810</td>
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
                                                    data-bs-target="#completed">#HB-5414</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="{{url('hotel-details')}}" class="avatar avatar-lg"><img
                                                            src="{{URL::asset('build/img/hotels/hotel-24.jpg')}}"
                                                            class="img-fluid rounded-circle" alt="img"></a>
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14"><a
                                                                href="{{url('hotel-details')}}">Hotel Aurora Bliss</a></p>
                                                        <span class="fs-14 fw-normal text-gray-6">Bristol</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h6 class="fs-14 mb-1">Suite Room</h6>
                                                <span class="fs-14 fw-normal text-gray-6">2 Adults, 1 Child</span>
                                            </td>
                                            <td>5 Days, 4 Nights</td>
                                            <td>$15,450</td>
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
                            <!-- /Hotel List -->

                        </div>
                    </div>
                    <!-- /Hotel-Booking List -->

                    <!-- Pagination -->
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
                    <!-- /Pagination -->
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



