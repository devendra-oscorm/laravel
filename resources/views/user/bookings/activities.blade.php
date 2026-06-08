<?php $page="customer-activities-booking";?>
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
                            <li class="breadcrumb-item active" aria-current="page">Activities</li>
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
                                <h6>Activities Bookings</h6>
                                <p class="fs-14 text-gray-6 fw-normal">No of Bookings : 302</p>
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
                                            Activities Type
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end p-3">
                                            <li>
                                                <a href="#" class="dropdown-item rounded-1">Desert Safari</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown-item rounded-1">City Sightseeing</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown-item rounded-1">Hot Air Balloon</a>
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
                                                <a href="#" class="dropdown-item rounded-1">Cancelled</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown-item rounded-1">Pending</a>
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
                                            <th>Activity</th>
                                            <th>Location</th>
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
                                                    data-bs-target="#confirmed">#AB-1245</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="{{url('activity-details')}}" class="avatar avatar-lg"><img
                                                            src="{{URL::asset('build/img/visa/visa-01.jpg')}}"
                                                            class="img-fluid rounded-circle" alt="img"></a>
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14"><a
                                                                href="{{url('activity-details')}}">Desert Safari...</a></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Dubai</td>
                                            <td>4 Days, 3 Nights</td>
                                            <td>$500</td>
                                            <td>15 May 2026</td>
                                            <td>
                                                <span
                                                    class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Confirmed</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#confirmed"><i
                                                            class="isax isax-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" class="link-primary fw-medium" data-bs-toggle="modal"
                                                    data-bs-target="#cancelled">#AB-3215</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="{{url('activity-details')}}" class="avatar avatar-lg"><img
                                                            src="{{URL::asset('build/img/visa/visa-02.jpg')}}"
                                                            class="img-fluid rounded-circle" alt="img"></a>
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14"><a
                                                                href="{{url('activity-details')}}">City Sightseeing...</a></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Maldives</td>
                                            <td>3 Days, 2 Nights</td>
                                            <td>$300</td>
                                            <td>10 May 2026</td>
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
                                                    data-bs-target="#pending">#AB-4581</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="{{url('activity-details')}}" class="avatar avatar-lg"><img
                                                            src="{{URL::asset('build/img/visa/visa-03.jpg')}}"
                                                            class="img-fluid rounded-circle" alt="img"></a>
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14"><a
                                                                href="{{url('activity-details')}}">Dhow Cruise...</a></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Singapore</td>
                                            <td>2 Days, 1 Night</td>
                                            <td>$320</td>
                                            <td>04 July 2026</td>
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
                                                    data-bs-target="#confirmed">#AB-6545</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="{{url('activity-details')}}" class="avatar avatar-lg"><img
                                                            src="{{URL::asset('build/img/visa/visa-04.jpg')}}"
                                                            class="img-fluid rounded-circle" alt="img"></a>
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14"><a
                                                                href="{{url('activity-details')}}">Hot Air Balloon...</a></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Bangkok</td>
                                            <td>5 Days, 4 Nights</td>
                                            <td>$400</td>
                                            <td>25 Aug 2026</td>
                                            <td>
                                                <span
                                                    class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Confirmed</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#confirmed"><i
                                                            class="isax isax-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" class="link-primary fw-medium" data-bs-toggle="modal"
                                                    data-bs-target="#cancelled">#AB-3256</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="{{url('activity-details')}}" class="avatar avatar-lg"><img
                                                            src="{{URL::asset('build/img/visa/visa-05.jpg')}}"
                                                            class="img-fluid rounded-circle" alt="img"></a>
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14"><a
                                                                href="{{url('activity-details')}}">Theme Park...</a></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Switzerland</td>
                                            <td>3 Days, 2 Nights</td>
                                            <td>$520</td>
                                            <td>17 Aug 2026</td>
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
                                                    data-bs-target="#cancelled">#AB-3654</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="{{url('activity-details')}}" class="avatar avatar-lg"><img
                                                            src="{{URL::asset('build/img/visa/visa-06.jpg')}}"
                                                            class="img-fluid rounded-circle" alt="img"></a>
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14"><a
                                                                href="{{url('activity-details')}}">Water Sports...</a></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Abu dhabi</td>
                                            <td>4 Days, 3 Nights</td>
                                            <td>$400</td>
                                            <td>02 Sep 2026</td>
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
                                                    data-bs-target="#confirmed">#AB-1458</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="{{url('activity-details')}}" class="avatar avatar-lg"><img
                                                            src="{{URL::asset('build/img/visa/visa-07.jpg')}}"
                                                            class="img-fluid rounded-circle" alt="img"></a>
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14"><a
                                                                href="{{url('activity-details')}}">Mountain & Trekking...</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Tokyo</td>
                                            <td>2 Days, 1 Night</td>
                                            <td>$280</td>
                                            <td>20 Oct 2026</td>
                                            <td>
                                                <span
                                                    class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Confirmed</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#confirmed"><i
                                                            class="isax isax-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" class="link-primary fw-medium" data-bs-toggle="modal"
                                                    data-bs-target="#confirmed">#AB-6589</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="{{url('activity-details')}}" class="avatar avatar-lg"><img
                                                            src="{{URL::asset('build/img/visa/visa-08.jpg')}}"
                                                            class="img-fluid rounded-circle" alt="img"></a>
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14"><a
                                                                href="{{url('activity-details')}}">Cultural Heritage...</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Spain</td>
                                            <td>3 Days, 2 Nights</td>
                                            <td>$350</td>
                                            <td>10 Nov 2026</td>
                                            <td>
                                                <span
                                                    class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Confirmed</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#confirmed"><i
                                                            class="isax isax-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" class="link-primary fw-medium" data-bs-toggle="modal"
                                                    data-bs-target="#confirmed">#AB-2315</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="{{url('activity-details')}}" class="avatar avatar-lg"><img
                                                            src="{{URL::asset('build/img/visa/visa-09.jpg')}}"
                                                            class="img-fluid rounded-circle" alt="img"></a>
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14"><a
                                                                href="{{url('activity-details')}}">Wildlife Safari...</a></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Netherlands</td>
                                            <td>4 Days, 3 Nights</td>
                                            <td>$510</td>
                                            <td>15 Dec 2026</td>
                                            <td>
                                                <span
                                                    class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i
                                                        class="fa-solid fa-circle fs-5 me-1"></i>Confirmed</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#confirmed"><i
                                                            class="isax isax-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" class="link-primary fw-medium" data-bs-toggle="modal"
                                                    data-bs-target="#pending">#AB-5414</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="{{url('activity-details')}}" class="avatar avatar-lg"><img
                                                            src="{{URL::asset('build/img/visa/visa-10.jpg')}}"
                                                            class="img-fluid rounded-circle" alt="img"></a>
                                                    <div class="ms-2">
                                                        <p class="text-dark mb-0 fw-medium fs-14"><a
                                                                href="{{url('activity-details')}}">Beach & Island...</a></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Thailand</td>
                                            <td>5 Days, 4 Nights</td>
                                            <td>$600</td>
                                            <td>22 Dec 2026</td>
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



