<?php $page="agent-listings";?>
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
                    <h2 class="breadcrumb-title mb-2">Listings</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{url('index')}}"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Listings</li>
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
                                    <a href="{{url('agent-listings')}}" class="d-flex align-items-center active">
                                        <i class="isax isax-menu-14 me-2"></i>Listings
                                    </a>
                                </li>
                                <li class="submenu">
                                    <a href="#" class="d-block"><i
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

                <div class="col-xl-9 col-lg-8">
                    <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                        <div class="place-nav listing-nav">
                            <ul class="nav mb-2">
                                <li class="me-2">
                                    <a href="#" class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#Hotels-list">
                                        Hotels
                                    </a>
                                </li>
                                <li class="me-2">
                                    <a href="#" class="nav-link" data-bs-toggle="tab" data-bs-target="#Cars-list">
                                        Cars
                                    </a>
                                </li>
                                <li class="me-2">
                                    <a href="#" class="nav-link" data-bs-toggle="tab" data-bs-target="#Cruise-list">
                                        Cruise
                                    </a>
                                </li>
                                <li class="me-2">
                                    <a href="#" class="nav-link" data-bs-toggle="tab" data-bs-target="#Tour-list">
                                        Tour
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link" data-bs-toggle="tab" data-bs-target="#flight-list">
                                        Flights
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link" data-bs-toggle="tab" data-bs-target="#bus-list">
                                        Bus
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="dropdown mb-4">
                            <a href="#"
                                class="dropdown-toggle text-gray-6 btn  rounded border d-inline-flex align-items-center"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                All Listing
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                <li>
                                    <a href="#" class="dropdown-item rounded-1">Active</a>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-item rounded-1">Inactive</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content">

                        <!-- Hotels List -->
                        <div class="tab-pane fade active show" id="Hotels-list">
                            <div class="card border-0">
                                <div
                                    class="card-body d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                                    <div>
                                        <h5 class="mb-1">Listings</h5>
                                        <p>No of Listings : 200</p>
                                    </div>
                                    <div>
                                        <a href="{{url('add-hotel')}}"
                                            class="btn btn-primary d-inline-flex align-items-center me-0"><i
                                                class="isax isax-add me-1 fs-16"></i>Add Listing</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">

                                <!-- Hotel Grid -->
                                <div class="col-xl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="{{url('hotel-details')}}">
                                                <img src="{{URL::asset('build/img/hotels/hotel-01.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="{{url('edit-hotel')}}"
                                                    class="me-2 d-inline-flex align-items-center justify-content-center"><i
                                                        class="isax isax-edit"></i></a>
                                                <a href="#"
                                                    class="d-inline-flex align-items-center justify-content-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete-list"><i
                                                        class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="{{url('hotel-details')}}">Hotel Plaza
                                                    Athenee</a></h5>
                                            <p class="d-flex align-items-center mb-2"><i
                                                    class="isax isax-location5 me-2"></i>Ciutat Vella, Barcelona</p>
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <h5 class="text-primary text-nowrap me-2">$500 <span
                                                        class="fs-14 fw-normal text-default">/ Night</span></h5>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal"
                                                        class="d-flex align-items-center"><i
                                                            class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Hotel Grid -->

                                <!-- Hotel Grid -->
                                <div class="col-xl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="{{url('hotel-details')}}">
                                                <img src="{{URL::asset('build/img/hotels/hotel-05.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="{{url('edit-hotel')}}"
                                                    class="me-2 d-inline-flex align-items-center justify-content-center"><i
                                                        class="isax isax-edit"></i></a>
                                                <a href="#"
                                                    class="d-inline-flex align-items-center justify-content-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete-list"><i
                                                        class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="{{url('hotel-details')}}">The Luxe
                                                    Haven</a></h5>
                                            <p class="d-flex align-items-center mb-2"><i
                                                    class="isax isax-location5 me-2"></i>Oxford Street, London</p>
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <h5 class="text-primary text-nowrap me-2">$600 <span
                                                        class="fs-14 fw-normal text-default">/ Night</span></h5>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal"
                                                        class="d-flex align-items-center"><i
                                                            class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Hotel Grid -->

                                <!-- Hotel Grid -->
                                <div class="col-xl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="{{url('hotel-details')}}">
                                                <img src="{{URL::asset('build/img/hotels/hotel-06.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="{{url('edit-hotel')}}"
                                                    class="me-2 d-inline-flex align-items-center justify-content-center"><i
                                                        class="isax isax-edit"></i></a>
                                                <a href="#"
                                                    class="d-inline-flex align-items-center justify-content-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete-list"><i
                                                        class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="{{url('hotel-details')}}">The Urban
                                                    Retreat</a></h5>
                                            <p class="d-flex align-items-center mb-2"><i
                                                    class="isax isax-location5 me-2"></i>Princes Street, Edinburgh</p>
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <h5 class="text-primary text-nowrap me-2">$500 <span
                                                        class="fs-14 fw-normal text-default">/ Night</span></h5>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal"
                                                        class="d-flex align-items-center"><i
                                                            class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Hotel Grid -->

                                <!-- Hotel Grid -->
                                <div class="col-xl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="{{url('hotel-details')}}">
                                                <img src="{{URL::asset('build/img/hotels/hotel-07.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="{{url('edit-hotel')}}"
                                                    class="me-2 d-inline-flex align-items-center justify-content-center"><i
                                                        class="isax isax-edit"></i></a>
                                                <a href="#"
                                                    class="d-inline-flex align-items-center justify-content-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete-list"><i
                                                        class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="{{url('hotel-details')}}">The Grand
                                                    Horizon</a></h5>
                                            <p class="d-flex align-items-center mb-2"><i
                                                    class="isax isax-location5 me-2"></i>Deansgate, Manchester</p>
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <h5 class="text-primary text-nowrap me-2">$400 <span
                                                        class="fs-14 fw-normal text-default">/ Night</span></h5>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#" class="me-2 d-inline-flex"><i
                                                            class="isax isax-edit"></i></a>
                                                    <a href="#" class="me-2 d-inline-flex"><i
                                                            class="isax isax-trash"></i></a>
                                                    <a href="#inactive_list" data-bs-toggle="modal"
                                                        class="d-flex align-items-center"><i
                                                            class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Hotel Grid -->

                                <!-- Hotel Grid -->
                                <div class="col-xl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="{{url('hotel-details')}}">
                                                <img src="{{URL::asset('build/img/hotels/hotel-08.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="{{url('edit-hotel')}}"
                                                    class="me-2 d-inline-flex align-items-center justify-content-center"><i
                                                        class="isax isax-edit"></i></a>
                                                <a href="#"
                                                    class="d-inline-flex align-items-center justify-content-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete-list"><i
                                                        class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="{{url('hotel-details')}}">Hotel Evergreen
                                                </a></h5>
                                            <p class="d-flex align-items-center mb-2"><i
                                                    class="isax isax-location5 me-2"></i>King’s Road, Chelsea</p>
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <h5 class="text-primary text-nowrap me-2">$550 <span
                                                        class="fs-14 fw-normal text-default">/ Night</span></h5>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal"
                                                        class="d-flex align-items-center"><i
                                                            class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Hotel Grid -->

                                <!-- Hotel Grid -->
                                <div class="col-xl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="{{url('hotel-details')}}">
                                                <img src="{{URL::asset('build/img/hotels/hotel-09.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="{{url('edit-hotel')}}"
                                                    class="me-2 d-inline-flex align-items-center justify-content-center"><i
                                                        class="isax isax-edit"></i></a>
                                                <a href="#"
                                                    class="d-inline-flex align-items-center justify-content-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete-list"><i
                                                        class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="{{url('hotel-details')}}">Stardust
                                                    Hotel</a></h5>
                                            <p class="d-flex align-items-center mb-2"><i
                                                    class="isax isax-location5 me-2"></i>Bold Street, Liverpool</p>
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <h5 class="text-primary text-nowrap me-2">$450 <span
                                                        class="fs-14 fw-normal text-default">/ Night</span></h5>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal"
                                                        class="d-flex align-items-center"><i
                                                            class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Hotel Grid -->

                                <!-- Hotel Grid -->
                                <div class="col-xl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="{{url('hotel-details')}}">
                                                <img src="{{URL::asset('build/img/hotels/hotel-10.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="{{url('edit-hotel')}}"
                                                    class="me-2 d-inline-flex align-items-center justify-content-center"><i
                                                        class="isax isax-edit"></i></a>
                                                <a href="#"
                                                    class="d-inline-flex align-items-center justify-content-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete-list"><i
                                                        class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="{{url('hotel-details')}}">Hotel Serene
                                                    Valley</a></h5>
                                            <p class="d-flex align-items-center mb-2"><i
                                                    class="isax isax-location5 me-2"></i>Broad Street, Bristol</p>
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <h5 class="text-primary text-nowrap me-2">$350 <span
                                                        class="fs-14 fw-normal text-default">/ Night</span></h5>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal"
                                                        class="d-flex align-items-center"><i
                                                            class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Hotel Grid -->

                                <!-- Hotel Grid -->
                                <div class="col-xl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="{{url('hotel-details')}}">
                                                <img src="{{URL::asset('build/img/hotels/hotel-11.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="{{url('edit-hotel')}}"
                                                    class="me-2 d-inline-flex align-items-center justify-content-center"><i
                                                        class="isax isax-edit"></i></a>
                                                <a href="#"
                                                    class="d-inline-flex align-items-center justify-content-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete-list"><i
                                                        class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="{{url('hotel-details')}}">Hotel Skyline
                                                    Vista</a></h5>
                                            <p class="d-flex align-items-center mb-2"><i
                                                    class="isax isax-location5 me-2"></i>Chapel Street, Salford</p>
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <h5 class="text-primary text-nowrap me-2">$700 <span
                                                        class="fs-14 fw-normal text-default">/ Night</span></h5>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal"
                                                        class="d-flex align-items-center"><i
                                                            class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Hotel Grid -->

                                <!-- Hotel Grid -->
                                <div class="col-xl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="{{url('hotel-details')}}">
                                                <img src="{{URL::asset('build/img/hotels/hotel-12.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="{{url('edit-hotel')}}"
                                                    class="me-2 d-inline-flex align-items-center justify-content-center"><i
                                                        class="isax isax-edit"></i></a>
                                                <a href="#"
                                                    class="d-inline-flex align-items-center justify-content-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete-list"><i
                                                        class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="{{url('hotel-details')}}">Hotel Aurora
                                                    Bliss</a></h5>
                                            <p class="d-flex align-items-center mb-2"><i
                                                    class="isax isax-location5 me-2"></i>Castle Street, Cambridge</p>
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <h5 class="text-primary text-nowrap me-2">$650 <span
                                                        class="fs-14 fw-normal text-default">/ Night</span></h5>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal"
                                                        class="d-flex align-items-center"><i
                                                            class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Hotel Grid -->

                                <div class="col-md-12">
                                    <!-- Pagination -->
                                    <nav class="pagination-nav">
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true"><i
                                                            class="fa-solid fa-chevron-left"></i></span>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item active"><a class="page-link" href="#">4</a></li>
                                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true"><i
                                                            class="fa-solid fa-chevron-right"></i></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <!-- /Pagination -->
                                </div>

                            </div>
                        </div>
                        <!-- /Hotels List -->

                        <!-- Cars List -->
                        <div class="tab-pane fade" id="Cars-list">
                            <div class="card border-0">
                                <div
                                    class="card-body d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                                    <div>
                                        <h5 class="mb-1">Listings</h5>
                                        <p>No of Listings : 200</p>
                                    </div>
                                    <div>
                                        <a href="{{url('add-car')}}"
                                            class="btn btn-primary d-inline-flex align-items-center me-0"><i
                                                class="isax isax-add me-1 fs-16"></i>Add Listing</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">

                                <!-- Car Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="{{url('car-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-06.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="{{url('edit-car')}}"
                                                    class="me-2 d-inline-flex align-items-center justify-content-center"><i
                                                        class="isax isax-edit"></i></a>
                                                <a href="#"
                                                    class="d-inline-flex align-items-center justify-content-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete-list"><i
                                                        class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <div class="d-flex align-items-center justify-content-between mb-1">
                                                <div class="d-flex flex-wrap align-items-center">
                                                    <span
                                                        class="badge badge-secondary  fs-10 fw-medium me-1">Sedan</span>
                                                </div>
                                            </div>
                                            <h5 class="mb-1 text-truncate"><a href="{{url('car-details')}}">Toyota Camry SE
                                                    400</a></h5>
                                            <p class="d-flex align-items-center mb-3"><i
                                                    class="isax isax-location5 me-2"></i>Ciutat Vella, Barcelona</p>
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$500 <span
                                                            class="fs-14 text-gray-6 fw-normal">/ day</span></h5>

                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal"
                                                        class="d-flex align-items-center"><i
                                                            class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Car Grid -->

                                <!-- Car Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="{{url('car-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-07.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="{{url('edit-car')}}"
                                                    class="me-2 d-inline-flex align-items-center justify-content-center"><i
                                                        class="isax isax-edit"></i></a>
                                                <a href="#"
                                                    class="d-inline-flex align-items-center justify-content-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete-list"><i
                                                        class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <div class="d-flex align-items-center justify-content-between mb-1">
                                                <div class="d-flex flex-wrap align-items-center">
                                                    <span
                                                        class="badge badge-secondary  fs-10 fw-medium me-1">Sedan</span>
                                                </div>
                                            </div>
                                            <h5 class="mb-1 text-truncate"><a href="{{url('car-details')}}">Ford Mustang 4.0
                                                    AT</a></h5>
                                            <p class="d-flex align-items-center mb-3"><i
                                                    class="isax isax-location5 me-2"></i>Oxford Street, London</p>
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$600 <span
                                                            class="fs-14 text-gray-6 fw-normal">/ day</span></h5>

                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal"
                                                        class="d-flex align-items-center"><i
                                                            class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Car Grid -->

                                <!-- Car Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="{{url('car-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-08.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="{{url('edit-car')}}"
                                                    class="me-2 d-inline-flex align-items-center justify-content-center"><i
                                                        class="isax isax-edit"></i></a>
                                                <a href="#"
                                                    class="d-inline-flex align-items-center justify-content-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete-list"><i
                                                        class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <div class="d-flex align-items-center justify-content-between mb-1">
                                                <div class="d-flex flex-wrap align-items-center">
                                                    <span
                                                        class="badge badge-secondary  fs-10 fw-medium me-1">Sedan</span>
                                                </div>
                                            </div>
                                            <h5 class="mb-1 text-truncate"><a href="{{url('car-details')}}">Ferrari 458 MM
                                                    Special</a></h5>
                                            <p class="d-flex align-items-center mb-3"><i
                                                    class="isax isax-location5 me-2"></i>Princes Street, Edinburgh</p>
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$300 <span
                                                            class="fs-14 text-gray-6 fw-normal">/ day</span></h5>

                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal"
                                                        class="d-flex align-items-center"><i
                                                            class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Car Grid -->

                                <!-- Car Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="{{url('car-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-09.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="{{url('edit-car')}}"
                                                    class="me-2 d-inline-flex align-items-center justify-content-center"><i
                                                        class="isax isax-edit"></i></a>
                                                <a href="#"
                                                    class="d-inline-flex align-items-center justify-content-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete-list"><i
                                                        class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <div class="d-flex align-items-center justify-content-between mb-1">
                                                <div class="d-flex flex-wrap align-items-center">
                                                    <span
                                                        class="badge badge-secondary  fs-10 fw-medium me-1">Sedan</span>
                                                </div>
                                            </div>
                                            <h5 class="mb-1 text-truncate"><a href="{{url('car-details')}}">Mercedes-benz
                                                    Convertible</a></h5>
                                            <p class="d-flex align-items-center mb-3"><i
                                                    class="isax isax-location5 me-2"></i>Princes Street, Edinburgh</p>
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$400 <span
                                                            class="fs-14 text-gray-6 fw-normal">/ day</span></h5>

                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#active_list" data-bs-toggle="modal"
                                                        class="d-flex align-items-center text-danger"><i
                                                            class="isax isax-info-circle me-1"></i>Inactive</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Car Grid -->

                                <!-- Car Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="{{url('car-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-10.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="{{url('edit-car')}}"
                                                    class="me-2 d-inline-flex align-items-center justify-content-center"><i
                                                        class="isax isax-edit"></i></a>
                                                <a href="#"
                                                    class="d-inline-flex align-items-center justify-content-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete-list"><i
                                                        class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <div class="d-flex align-items-center justify-content-between mb-1">
                                                <div class="d-flex flex-wrap align-items-center">
                                                    <span
                                                        class="badge badge-secondary  fs-10 fw-medium me-1">Sedan</span>
                                                </div>
                                            </div>
                                            <h5 class="mb-1 text-truncate"><a href="{{url('car-details')}}">BMW 3.0 Gran
                                                    Turismo</a></h5>
                                            <p class="d-flex align-items-center mb-3"><i
                                                    class="isax isax-location5 me-2"></i>King’s Road, Chelsea</p>
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$550 <span
                                                            class="fs-14 text-gray-6 fw-normal">/ day</span></h5>

                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal"
                                                        class="d-flex align-items-center"><i
                                                            class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Car Grid -->

                                <!-- Car Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="{{url('car-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-11.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="{{url('edit-car')}}"
                                                    class="me-2 d-inline-flex align-items-center justify-content-center"><i
                                                        class="isax isax-edit"></i></a>
                                                <a href="#"
                                                    class="d-inline-flex align-items-center justify-content-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete-list"><i
                                                        class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <div class="d-flex align-items-center justify-content-between mb-1">
                                                <div class="d-flex flex-wrap align-items-center">
                                                    <span
                                                        class="badge badge-secondary  fs-10 fw-medium me-1">Sedan</span>
                                                </div>
                                            </div>
                                            <h5 class="mb-1 text-truncate"><a href="{{url('car-details')}}">Infiniti QX60 </a>
                                            </h5>
                                            <p class="d-flex align-items-center mb-3"><i
                                                    class="isax isax-location5 me-2"></i>Bold Street, Liverpool</p>
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$450 <span
                                                            class="fs-14 text-gray-6 fw-normal">/ day</span></h5>

                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal"
                                                        class="d-flex align-items-center"><i
                                                            class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Car Grid -->

                                <!-- Car Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="{{url('car-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-12.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="{{url('edit-car')}}"
                                                    class="me-2 d-inline-flex align-items-center justify-content-center"><i
                                                        class="isax isax-edit"></i></a>
                                                <a href="#"
                                                    class="d-inline-flex align-items-center justify-content-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete-list"><i
                                                        class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <div class="d-flex align-items-center justify-content-between mb-1">
                                                <div class="d-flex flex-wrap align-items-center">
                                                    <span
                                                        class="badge badge-secondary  fs-10 fw-medium me-1">Sedan</span>
                                                </div>
                                            </div>
                                            <h5 class="mb-1 text-truncate"><a href="{{url('car-details')}}">Toyota 86
                                                    Sports</a></h5>
                                            <p class="d-flex align-items-center mb-3"><i
                                                    class="isax isax-location5 me-2"></i>Broad Street, Bristol</p>
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$350 <span
                                                            class="fs-14 text-gray-6 fw-normal">/ day</span></h5>

                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal"
                                                        class="d-flex align-items-center"><i
                                                            class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Car Grid -->

                                <!-- Car Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="{{url('car-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-13.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="{{url('edit-car')}}"
                                                    class="me-2 d-inline-flex align-items-center justify-content-center"><i
                                                        class="isax isax-edit"></i></a>
                                                <a href="#"
                                                    class="d-inline-flex align-items-center justify-content-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete-list"><i
                                                        class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <div class="d-flex align-items-center justify-content-between mb-1">
                                                <div class="d-flex flex-wrap align-items-center">
                                                    <span
                                                        class="badge badge-secondary  fs-10 fw-medium me-1">Sedan</span>
                                                </div>
                                            </div>
                                            <h5 class="mb-1 text-truncate"><a href="{{url('car-details')}}">Jeep Wrangler</a>
                                            </h5>
                                            <p class="d-flex align-items-center mb-3"><i
                                                    class="isax isax-location5 me-2"></i>Chapel Street, Salford</p>
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$700 <span
                                                            class="fs-14 text-gray-6 fw-normal">/ day</span></h5>

                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#active_list" data-bs-toggle="modal"
                                                        class="d-flex align-items-center text-danger"><i
                                                            class="isax isax-info-circle me-1"></i>Inactive</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Car Grid -->

                                <!-- Car Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="{{url('car-details')}}">
                                                <img src="{{URL::asset('build/img/cars/car-14.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="{{url('edit-car')}}"
                                                    class="me-2 d-inline-flex align-items-center justify-content-center"><i
                                                        class="isax isax-edit"></i></a>
                                                <a href="#"
                                                    class="d-inline-flex align-items-center justify-content-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete-list"><i
                                                        class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <div class="d-flex align-items-center justify-content-between mb-1">
                                                <div class="d-flex flex-wrap align-items-center">
                                                    <span
                                                        class="badge badge-secondary  fs-10 fw-medium me-1">Sedan</span>
                                                </div>
                                            </div>
                                            <h5 class="mb-1 text-truncate"><a href="{{url('car-details')}}">Jaguar XK</a></h5>
                                            <p class="d-flex align-items-center mb-3"><i
                                                    class="isax isax-location5 me-2"></i>Castle Street, Cambridge</p>
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$650 <span
                                                            class="fs-14 text-gray-6 fw-normal">/ day</span></h5>

                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal"
                                                        class="d-flex align-items-center"><i
                                                            class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Car Grid -->

                                <div class="col-md-12">
                                    <!-- Pagination -->
                                    <nav class="pagination-nav">
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true"><i
                                                            class="fa-solid fa-chevron-left"></i></span>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item active"><a class="page-link" href="#">4</a></li>
                                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true"><i
                                                            class="fa-solid fa-chevron-right"></i></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <!-- /Pagination -->
                                </div>

                            </div>
                        </div>
                        <!-- /Cars List -->

                        <!-- Cruise List -->
                        <div class="tab-pane fade" id="Cruise-list">
                            <div class="card border-0">
                                <div
                                    class="card-body d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                                    <div>
                                        <h5 class="mb-1">Listings</h5>
                                        <p>No of Listings : 200</p>
                                    </div>
                                    <div>
                                        <a href="{{url('add-cruise')}}"
                                            class="btn btn-primary d-inline-flex align-items-center me-0"><i
                                                class="isax isax-add me-1 fs-16"></i>Add Listing</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">

                                <!-- Cruise Grid -->
                                <div class="col-xl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="{{url('cruise-details')}}">
                                                <img src="{{URL::asset('build/img/cruise/cruise-05.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="{{url('edit-cruise')}}"
                                                    class="me-2 d-inline-flex align-items-center justify-content-center"><i
                                                        class="isax isax-edit"></i></a>
                                                <a href="#"
                                                    class="d-inline-flex align-items-center justify-content-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete-list"><i
                                                        class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="{{url('cruise-details')}}">Super
                                                    Aquamarine</a></h5>
                                            <p class="d-flex align-items-center mb-3"><i
                                                    class="isax isax-location5 me-2"></i>Ciutat Vella, Barcelona</p>
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$700 <span
                                                            class="fs-14 text-gray-6 fw-normal">/ day</span></h5>

                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal"
                                                        class="d-flex align-items-center"><i
                                                            class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Cruise Grid -->

                                <!-- Cruise Grid -->
                                <div class="col-xl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="{{url('flight-details')}}">
                                                <img src="{{URL::asset('build/img/cruise/cruise-12.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="{{url('edit-cruise')}}"
                                                    class="me-2 d-inline-flex align-items-center justify-content-center"><i
                                                        class="isax isax-edit"></i></a>
                                                <a href="#"
                                                    class="d-inline-flex align-items-center justify-content-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete-list"><i
                                                        class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="{{url('cruise-details')}}">Bonnie
                                                    Yacht</a></h5>
                                            <p class="d-flex align-items-center mb-3"><i
                                                    class="isax isax-location5 me-2"></i>Oxford Street, London</p>
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$600 <span
                                                            class="fs-14 text-gray-6 fw-normal">/ day</span></h5>

                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#active_list" data-bs-toggle="modal"
                                                        class="d-flex align-items-center text-danger"><i
                                                            class="isax isax-info-circle me-1"></i>Inactive</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Cruise Grid -->

                                <!-- Cruise Grid -->
                                <div class="col-xl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="{{url('flight-details')}}">
                                                <img src="{{URL::asset('build/img/cruise/cruise-09.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="{{url('edit-cruise')}}"
                                                    class="me-2 d-inline-flex align-items-center justify-content-center"><i
                                                        class="isax isax-edit"></i></a>
                                                <a href="#"
                                                    class="d-inline-flex align-items-center justify-content-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete-list"><i
                                                        class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="{{url('cruise-details')}}">Coral
                                                    Cruiser</a></h5>
                                            <p class="d-flex align-items-center mb-3"><i
                                                    class="isax isax-location5 me-2"></i>Princes Street, Edinburgh</p>
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$300 <span
                                                            class="fs-14 text-gray-6 fw-normal">/ day</span></h5>

                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal"
                                                        class="d-flex align-items-center"><i
                                                            class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Cruise Grid -->

                                <!-- Cruise Grid -->
                                <div class="col-xl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="{{url('flight-details')}}">
                                                <img src="{{URL::asset('build/img/cruise/cruise-09.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="#"
                                                    class="me-2 d-inline-flex align-items-center justify-content-center"><i
                                                        class="isax isax-edit"></i></a>
                                                <a href="#"
                                                    class="d-inline-flex align-items-center justify-content-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete-list"><i
                                                        class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="{{url('cruise-details')}}">Harbor
                                                    Haven</a></h5>
                                            <p class="d-flex align-items-center mb-3"><i
                                                    class="isax isax-location5 me-2"></i>Princes Street, Edinburgh</p>
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$300 <span
                                                            class="fs-14 text-gray-6 fw-normal">/ day</span></h5>

                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal"
                                                        class="d-flex align-items-center"><i
                                                            class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Cruise Grid -->

                                <!-- Cruise Grid -->
                                <div class="col-xl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="{{url('cruise-details')}}">
                                                <img src="{{URL::asset('build/img/cruise/cruise-01.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="{{url('edit-cruise')}}"
                                                    class="me-2 d-inline-flex align-items-center justify-content-center"><i
                                                        class="isax isax-edit"></i></a>
                                                <a href="#"
                                                    class="d-inline-flex align-items-center justify-content-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete-list"><i
                                                        class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="{{url('cruise-details')}}">Albert
                                                    Yacht</a></h5>
                                            <p class="d-flex align-items-center mb-3"><i
                                                    class="isax isax-location5 me-2"></i>King’s Road, Chelsea</p>
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$550 <span
                                                            class="fs-14 text-gray-6 fw-normal">/ day</span></h5>

                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#active_list" data-bs-toggle="modal"
                                                        class="d-flex align-items-center text-danger"><i
                                                            class="isax isax-info-circle me-1"></i>Inactive</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Cruise Grid -->

                                <!-- Cruise Grid -->
                                <div class="col-xl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="{{url('flight-details')}}">
                                                <img src="{{URL::asset('build/img/cruise/cruise-11.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="{{url('edit-cruise')}}"
                                                    class="me-2 d-inline-flex align-items-center justify-content-center"><i
                                                        class="isax isax-edit"></i></a>
                                                <a href="#"
                                                    class="d-inline-flex align-items-center justify-content-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete-list"><i
                                                        class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="{{url('cruise-details')}}">Shelly
                                                    Yacht</a></h5>
                                            <p class="d-flex align-items-center mb-3"><i
                                                    class="isax isax-location5 me-2"></i>Bold Street, Liverpool</p>
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$450 <span
                                                            class="fs-14 text-gray-6 fw-normal">/ day</span></h5>

                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal"
                                                        class="d-flex align-items-center"><i
                                                            class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Cruise Grid -->

                                <!-- Cruise Grid -->
                                <div class="col-xl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="{{url('cruise-details')}}">
                                                <img src="{{URL::asset('build/img/cruise/cruise-07.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="{{url('edit-cruise')}}"
                                                    class="me-2 d-inline-flex align-items-center justify-content-center"><i
                                                        class="isax isax-edit"></i></a>
                                                <a href="#"
                                                    class="d-inline-flex align-items-center justify-content-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete-list"><i
                                                        class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="{{url('cruise-details')}}">Sunny
                                                    Sailor</a></h5>
                                            <p class="d-flex align-items-center mb-3"><i
                                                    class="isax isax-location5 me-2"></i>Broad Street, Bristol</p>
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$350 <span
                                                            class="fs-14 text-gray-6 fw-normal">/ day</span></h5>

                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal"
                                                        class="d-flex align-items-center"><i
                                                            class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Cruise Grid -->

                                <!-- Cruise Grid -->
                                <div class="col-xl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="{{url('cruise-details')}}">
                                                <img src="{{URL::asset('build/img/cruise/cruise-06.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="{{url('edit-cruise')}}"
                                                    class="me-2 d-inline-flex align-items-center justify-content-center"><i
                                                        class="isax isax-edit"></i></a>
                                                <a href="#"
                                                    class="d-inline-flex align-items-center justify-content-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete-list"><i
                                                        class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="{{url('cruise-details')}}">Ocean
                                                    Voyager</a></h5>
                                            <p class="d-flex align-items-center mb-3"><i
                                                    class="isax isax-location5 me-2"></i>Chapel Street, Salford</p>
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$700 <span
                                                            class="fs-14 text-gray-6 fw-normal">/ day</span></h5>

                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal"
                                                        class="d-flex align-items-center"><i
                                                            class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Cruise Grid -->

                                <!-- Cruise Grid -->
                                <div class="col-xl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="{{url('cruise-details')}}">
                                                <img src="{{URL::asset('build/img/cruise/cruise-08.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="{{url('edit-cruise')}}"
                                                    class="me-2 d-inline-flex align-items-center justify-content-center"><i
                                                        class="isax isax-edit"></i></a>
                                                <a href="#"
                                                    class="d-inline-flex align-items-center justify-content-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete-list"><i
                                                        class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="{{url('cruise-details')}}">Sailor’s
                                                    Delight</a></h5>
                                            <p class="d-flex align-items-center mb-3"><i
                                                    class="isax isax-location5 me-2"></i>Castle Street, Cambridge</p>
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$650 <span
                                                            class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal"
                                                        class="d-flex align-items-center"><i
                                                            class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Cruise Grid -->

                                <div class="col-md-12">
                                    <!-- Pagination -->
                                    <nav class="pagination-nav">
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true"><i
                                                            class="fa-solid fa-chevron-left"></i></span>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item active"><a class="page-link" href="#">4</a></li>
                                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true"><i
                                                            class="fa-solid fa-chevron-right"></i></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <!-- /Pagination -->
                                </div>

                            </div>
                        </div>
                        <!-- /Cruise List -->

                        <!-- Tour List -->
                        <div class="tab-pane fade" id="Tour-list">
                            <div class="card border-0">
                                <div
                                    class="card-body d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                                    <div>
                                        <h5 class="mb-1">Listings</h5>
                                        <p>No of Listings : 200</p>
                                    </div>
                                    <div>
                                        <a href="{{url('add-hotel')}}"
                                            class="btn btn-primary d-inline-flex align-items-center me-0"><i
                                                class="isax isax-add me-1 fs-16"></i>Add Listing</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">

                                <!-- Tours Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="{{url('tour-details')}}">
                                                <img src="{{URL::asset('build/img/tours/tours-07.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="{{url('edit-tour')}}"
                                                    class="me-2 d-inline-flex align-items-center justify-content-center"><i
                                                        class="isax isax-edit"></i></a>
                                                <a href="#"
                                                    class="d-inline-flex align-items-center justify-content-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete-list"><i
                                                        class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="{{url('tour-details')}}">Rainbow Mountain
                                                    Valley</a></h5>
                                            <p class="d-flex align-items-center mb-3"><i
                                                    class="isax isax-location5 me-2"></i>Ciutat Vella, Barcelona</p>
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$650 <span
                                                            class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal"
                                                        class="d-flex align-items-center"><i
                                                            class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Tours Grid -->

                                <!-- Tours Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="{{url('tour-details')}}">
                                                <img src="{{URL::asset('build/img/tours/tours-08.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="{{url('edit-tour')}}"
                                                    class="me-2 d-inline-flex align-items-center justify-content-center"><i
                                                        class="isax isax-edit"></i></a>
                                                <a href="#"
                                                    class="d-inline-flex align-items-center justify-content-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete-list"><i
                                                        class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="{{url('tour-details')}}">Mystic Falls</a>
                                            </h5>
                                            <p class="d-flex align-items-center mb-3"><i
                                                    class="isax isax-location5 me-2"></i>Oxford Street, London</p>
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$600 <span
                                                            class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal"
                                                        class="d-flex align-items-center"><i
                                                            class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Tours Grid -->

                                <!-- Tours Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="{{url('tour-details')}}">
                                                <img src="{{URL::asset('build/img/tours/tours-09.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="{{url('edit-tour')}}"
                                                    class="me-2 d-inline-flex align-items-center justify-content-center"><i
                                                        class="isax isax-edit"></i></a>
                                                <a href="#"
                                                    class="d-inline-flex align-items-center justify-content-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete-list"><i
                                                        class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="{{url('tour-details')}}">Crystal Lake</a>
                                            </h5>
                                            <p class="d-flex align-items-center mb-3"><i
                                                    class="isax isax-location5 me-2"></i>Princes Street, Edinburgh</p>
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$300 <span
                                                            class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal"
                                                        class="d-flex align-items-center"><i
                                                            class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Tours Grid -->

                                <!-- Tours Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="{{url('tour-details')}}">
                                                <img src="{{URL::asset('build/img/tours/tours-10.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="{{url('edit-tour')}}"
                                                    class="me-2 d-inline-flex align-items-center justify-content-center"><i
                                                        class="isax isax-edit"></i></a>
                                                <a href="#"
                                                    class="d-inline-flex align-items-center justify-content-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete-list"><i
                                                        class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="{{url('tour-details')}}">Majestic
                                                    Peaks</a></h5>
                                            <p class="d-flex align-items-center mb-3"><i
                                                    class="isax isax-location5 me-2"></i>Deansgate, Manchester</p>
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$400 <span
                                                            class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal"
                                                        class="d-flex align-items-center"><i
                                                            class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Tours Grid -->

                                <!-- Tours Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="{{url('tour-details')}}">
                                                <img src="{{URL::asset('build/img/tours/tours-11.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="{{url('edit-tour')}}"
                                                    class="me-2 d-inline-flex align-items-center justify-content-center"><i
                                                        class="isax isax-edit"></i></a>
                                                <a href="#"
                                                    class="d-inline-flex align-items-center justify-content-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete-list"><i
                                                        class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="{{url('tour-details')}}">Enchanted
                                                    Forest</a></h5>
                                            <p class="d-flex align-items-center mb-3"><i
                                                    class="isax isax-location5 me-2"></i>King’s Road, Chelsea</p>
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$500 <span
                                                            class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#active_list" data-bs-toggle="modal"
                                                        class="d-flex align-items-center text-danger"><i
                                                            class="isax isax-info-circle me-1"></i>Inactive</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Tours Grid -->

                                <!-- Tours Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="{{url('tour-details')}}">
                                                <img src="{{URL::asset('build/img/tours/tours-12.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="{{url('edit-tour')}}"
                                                    class="me-2 d-inline-flex align-items-center justify-content-center"><i
                                                        class="isax isax-edit"></i></a>
                                                <a href="#"
                                                    class="d-inline-flex align-items-center justify-content-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete-list"><i
                                                        class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="{{url('tour-details')}}">Serene Bay</a>
                                            </h5>
                                            <p class="d-flex align-items-center mb-3"><i
                                                    class="isax isax-location5 me-2"></i>Bold Street, Liverpool</p>
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$450 <span
                                                            class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal"
                                                        class="d-flex align-items-center"><i
                                                            class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Tours Grid -->

                                <!-- Tours Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="{{url('tour-details')}}">
                                                <img src="{{URL::asset('build/img/tours/tours-13.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="{{url('edit-tour')}}"
                                                    class="me-2 d-inline-flex align-items-center justify-content-center"><i
                                                        class="isax isax-edit"></i></a>
                                                <a href="#"
                                                    class="d-inline-flex align-items-center justify-content-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete-list"><i
                                                        class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="{{url('tour-details')}}">Ancient Ruins</a>
                                            </h5>
                                            <p class="d-flex align-items-center mb-3"><i
                                                    class="isax isax-location5 me-2"></i>Broad Street, Bristol</p>
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$350 <span
                                                            class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal"
                                                        class="d-flex align-items-center"><i
                                                            class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Tours Grid -->

                                <!-- Tours Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="{{url('tour-details')}}">
                                                <img src="{{URL::asset('build/img/tours/tours-14.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="{{url('edit-tour')}}"
                                                    class="me-2 d-inline-flex align-items-center justify-content-center"><i
                                                        class="isax isax-edit"></i></a>
                                                <a href="#"
                                                    class="d-inline-flex align-items-center justify-content-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete-list"><i
                                                        class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="{{url('tour-details')}}">Mystical
                                                    Caves</a></h5>
                                            <p class="d-flex align-items-center mb-3"><i
                                                    class="isax isax-location5 me-2"></i>Chapel Street, Salford</p>
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$700 <span
                                                            class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#active_list" data-bs-toggle="modal"
                                                        class="d-flex align-items-center text-danger"><i
                                                            class="isax isax-info-circle me-1"></i>Inactive</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Tours Grid -->

                                <!-- Tours Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="{{url('tour-details')}}">
                                                <img src="{{URL::asset('build/img/tours/tours-15.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="{{url('edit-tour')}}"
                                                    class="me-2 d-inline-flex align-items-center justify-content-center"><i
                                                        class="isax isax-edit"></i></a>
                                                <a href="#"
                                                    class="d-inline-flex align-items-center justify-content-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete-list"><i
                                                        class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="{{url('tour-details')}}">Frosted Peaks</a>
                                            </h5>
                                            <p class="d-flex align-items-center mb-3"><i
                                                    class="isax isax-location5 me-2"></i>Castle Street, Cambridge</p>
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$650 <span
                                                            class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal"
                                                        class="d-flex align-items-center"><i
                                                            class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Tours Grid -->

                                <div class="col-md-12">
                                    <!-- Pagination -->
                                    <nav class="pagination-nav">
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true"><i
                                                            class="fa-solid fa-chevron-left"></i></span>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item active"><a class="page-link" href="#">4</a></li>
                                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true"><i
                                                            class="fa-solid fa-chevron-right"></i></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <!-- /Pagination -->
                                </div>

                            </div>
                        </div>
                        <!-- /Tour List -->

                        <!-- Flight List -->
                        <div class="tab-pane fade" id="flight-list">
                            <div class="card border-0">
                                <div
                                    class="card-body d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                                    <div>
                                        <h5 class="mb-1">Listings</h5>
                                        <p>No of Listings : 200</p>
                                    </div>
                                    <div>
                                        <a href="{{url('add-flight')}}"
                                            class="btn btn-primary d-inline-flex align-items-center me-0"><i
                                                class="isax isax-add me-1 fs-16"></i>Add Listing</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">

                                <!-- Flight Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="{{url('flight-details')}}">
                                                <img src="{{URL::asset('build/img/flight/flight-09.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="{{url('edit-flight')}}"
                                                    class="me-2 d-inline-flex align-items-center justify-content-center"><i
                                                        class="isax isax-edit"></i></a>
                                                <a href="#"
                                                    class="d-inline-flex align-items-center justify-content-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete-list"><i
                                                        class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="text-truncate mb-1"><a href="{{url('flight-details')}}">Antonov
                                                    An-32</a></h5>
                                            <div class="d-flex align-items-center mb-2">
                                                <span class="avatar avatar-sm me-2">
                                                    <img src="{{URL::asset('build/img/icons/airindia.svg')}}" class="rounded-circle"
                                                        alt="icon">
                                                </span>
                                                <p class="fs-14 mb-0 me-2">Air India</p>
                                                <p class="fs-14 mb-0"><i
                                                        class="ti ti-point-filled text-primary me-2"></i>1-stop at Texas
                                                </p>
                                            </div>
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$500 <span
                                                            class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal"
                                                        class="d-flex align-items-center"><i
                                                            class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Flight Grid -->

                                <!-- Flight Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="{{url('flight-details')}}">
                                                <img src="{{URL::asset('build/img/flight/flight-08.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="{{url('edit-flight')}}"
                                                    class="me-2 d-inline-flex align-items-center justify-content-center"><i
                                                        class="isax isax-edit"></i></a>
                                                <a href="#"
                                                    class="d-inline-flex align-items-center justify-content-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete-list"><i
                                                        class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="text-truncate mb-1"><a href="{{url('flight-details')}}">SkyBound
                                                    102</a></h5>
                                            <div class="d-flex align-items-center mb-2">
                                                <span class="avatar avatar-sm me-2">
                                                    <img src="{{URL::asset('build/img/icons/airindia.svg')}}" class="rounded-circle"
                                                        alt="icon">
                                                </span>
                                                <p class="fs-14 mb-0 me-2">Indigo</p>
                                                <p class="fs-14 mb-0"><i
                                                        class="ti ti-point-filled text-primary me-2"></i>1-stop at Dubai
                                                </p>
                                            </div>
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$600 <span
                                                            class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal"
                                                        class="d-flex align-items-center"><i
                                                            class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Flight Grid -->

                                <!-- Flight Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="{{url('flight-details')}}">
                                                <img src="{{URL::asset('build/img/flight/flight-06.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="{{url('edit-flight')}}"
                                                    class="me-2 d-inline-flex align-items-center justify-content-center"><i
                                                        class="isax isax-edit"></i></a>
                                                <a href="#"
                                                    class="d-inline-flex align-items-center justify-content-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete-list"><i
                                                        class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="text-truncate mb-1"><a href="{{url('flight-details')}}">Nimbus 345</a>
                                            </h5>
                                            <div class="d-flex align-items-center mb-2">
                                                <span class="avatar avatar-sm me-2">
                                                    <img src="{{URL::asset('build/img/icons/airindia.svg')}}" class="rounded-circle"
                                                        alt="icon">
                                                </span>
                                                <p class="fs-14 mb-0 me-2">Indigo</p>
                                                <p class="fs-14 mb-0"><i
                                                        class="ti ti-point-filled text-primary me-2"></i>1-stop at Dubai
                                                </p>
                                            </div>
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$300 <span
                                                            class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#active_list" data-bs-toggle="modal"
                                                        class="d-flex align-items-center text-danger"><i
                                                            class="isax isax-info-circle me-1"></i>Inactive</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Flight Grid -->

                                <!-- Flight Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="{{url('flight-details')}}">
                                                <img src="{{URL::asset('build/img/flight/flight-01.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="{{url('edit-flight')}}"
                                                    class="me-2 d-inline-flex align-items-center justify-content-center"><i
                                                        class="isax isax-edit"></i></a>
                                                <a href="#"
                                                    class="d-inline-flex align-items-center justify-content-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete-list"><i
                                                        class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="text-truncate mb-1"><a href="{{url('flight-details')}}">AstraFlight
                                                    215</a></h5>
                                            <div class="d-flex align-items-center mb-2">
                                                <span class="avatar avatar-sm me-2">
                                                    <img src="{{URL::asset('build/img/icons/airindia.svg')}}" class="rounded-circle"
                                                        alt="icon">
                                                </span>
                                                <p class="fs-14 mb-0 me-2">Indigo</p>
                                                <p class="fs-14 mb-0"><i
                                                        class="ti ti-point-filled text-primary me-2"></i>1-stop at
                                                    Frankfurt</p>
                                            </div>
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$300 <span
                                                            class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal"
                                                        class="d-flex align-items-center"><i
                                                            class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Flight Grid -->

                                <!-- Flight Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="{{url('flight-details')}}">
                                                <img src="{{URL::asset('build/img/flight/flight-02.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="{{url('edit-flight')}}"
                                                    class="me-2 d-inline-flex align-items-center justify-content-center"><i
                                                        class="isax isax-edit"></i></a>
                                                <a href="#"
                                                    class="d-inline-flex align-items-center justify-content-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete-list"><i
                                                        class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="text-truncate mb-1"><a href="{{url('flight-details')}}">Cloudrider
                                                    789</a></h5>
                                            <div class="d-flex align-items-center mb-2">
                                                <span class="avatar avatar-sm me-2">
                                                    <img src="{{URL::asset('build/img/icons/airindia.svg')}}" class="rounded-circle"
                                                        alt="icon">
                                                </span>
                                                <p class="fs-14 mb-0 me-2">Air India</p>
                                                <p class="fs-14 mb-0"><i
                                                        class="ti ti-point-filled text-primary me-2"></i>1-stop at
                                                    Dallas</p>
                                            </div>
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$550 <span
                                                            class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal"
                                                        class="d-flex align-items-center"><i
                                                            class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Flight Grid -->

                                <!-- Flight Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="{{url('flight-details')}}">
                                                <img src="{{URL::asset('build/img/flight/flight-03.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="{{url('edit-flight')}}"
                                                    class="me-2 d-inline-flex align-items-center justify-content-center"><i
                                                        class="isax isax-edit"></i></a>
                                                <a href="#"
                                                    class="d-inline-flex align-items-center justify-content-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete-list"><i
                                                        class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="text-truncate mb-1"><a href="{{url('flight-details')}}">Aether Express
                                                    901</a></h5>
                                            <div class="d-flex align-items-center mb-2">
                                                <span class="avatar avatar-sm me-2">
                                                    <img src="{{URL::asset('build/img/icons/airindia.svg')}}" class="rounded-circle"
                                                        alt="icon">
                                                </span>
                                                <p class="fs-14 mb-0 me-2">Indigo</p>
                                                <p class="fs-14 mb-0"><i
                                                        class="ti ti-point-filled text-primary me-2"></i>1-stop at Seoul
                                                </p>
                                            </div>
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$450 <span
                                                            class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal"
                                                        class="d-flex align-items-center"><i
                                                            class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Flight Grid -->

                                <!-- Flight Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="{{url('flight-details')}}">
                                                <img src="{{URL::asset('build/img/flight/flight-07.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="{{url('edit-flight')}}"
                                                    class="me-2 d-inline-flex align-items-center justify-content-center"><i
                                                        class="isax isax-edit"></i></a>
                                                <a href="#"
                                                    class="d-inline-flex align-items-center justify-content-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete-list"><i
                                                        class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="text-truncate mb-1"><a href="{{url('flight-details')}}">Voyager 658</a>
                                            </h5>
                                            <div class="d-flex align-items-center mb-2">
                                                <span class="avatar avatar-sm me-2">
                                                    <img src="{{URL::asset('build/img/icons/airindia.svg')}}" class="rounded-circle"
                                                        alt="icon">
                                                </span>
                                                <p class="fs-14 mb-0 me-2">Air India</p>
                                                <p class="fs-14 mb-0"><i
                                                        class="ti ti-point-filled text-primary me-2"></i>1-stop at
                                                    Sydney</p>
                                            </div>
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$350 <span
                                                            class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal"
                                                        class="d-flex align-items-center"><i
                                                            class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Flight Grid -->

                                <!-- Flight Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="{{url('flight-details')}}">
                                                <img src="{{URL::asset('build/img/flight/flight-04.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="{{url('edit-flight')}}"
                                                    class="me-2 d-inline-flex align-items-center justify-content-center"><i
                                                        class="isax isax-edit"></i></a>
                                                <a href="#"
                                                    class="d-inline-flex align-items-center justify-content-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete-list"><i
                                                        class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="text-truncate mb-1"><a href="{{url('flight-details')}}">Silverwing
                                                    505</a></h5>
                                            <div class="d-flex align-items-center mb-2">
                                                <span class="avatar avatar-sm me-2">
                                                    <img src="{{URL::asset('build/img/icons/airindia.svg')}}" class="rounded-circle"
                                                        alt="icon">
                                                </span>
                                                <p class="fs-14 mb-0 me-2">Air India</p>
                                                <p class="fs-14 mb-0"><i
                                                        class="ti ti-point-filled text-primary me-2"></i>1-stop at
                                                    London</p>
                                            </div>
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$700 <span
                                                            class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal"
                                                        class="d-flex align-items-center"><i
                                                            class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Flight Grid -->

                                <!-- Flight Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="{{url('flight-details')}}">
                                                <img src="{{URL::asset('build/img/flight/flight-05.jpg')}}" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="{{url('edit-flight')}}"
                                                    class="me-2 d-inline-flex align-items-center justify-content-center"><i
                                                        class="isax isax-edit"></i></a>
                                                <a href="#"
                                                    class="d-inline-flex align-items-center justify-content-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete-list"><i
                                                        class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="text-truncate mb-1"><a href="{{url('flight-details')}}">Altair 333</a>
                                            </h5>
                                            <div class="d-flex align-items-center mb-2">
                                                <span class="avatar avatar-sm me-2">
                                                    <img src="{{URL::asset('build/img/icons/airindia.svg')}}" class="rounded-circle"
                                                        alt="icon">
                                                </span>
                                                <p class="fs-14 mb-0 me-2">Air India</p>
                                                <p class="fs-14 mb-0"><i
                                                        class="ti ti-point-filled text-primary me-2"></i>1-stop at Los
                                                    Angeles</p>
                                            </div>
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$650 <span
                                                            class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal"
                                                        class="d-flex align-items-center"><i
                                                            class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Flight Grid -->

                                <div class="col-md-12">
                                    <!-- Pagination -->
                                    <nav class="pagination-nav">
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true"><i
                                                            class="fa-solid fa-chevron-left"></i></span>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item active"><a class="page-link" href="#">4</a></li>
                                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true"><i
                                                            class="fa-solid fa-chevron-right"></i></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <!-- /Pagination -->
                                </div>
                            </div>
                        </div>
                        <!-- /Flight List -->

                        <!-- Bus list -->
                        <div class="tab-pane fade" id="bus-list">
                            <div class="card border-0">
                                <div
                                    class="card-body d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                                    <div>
                                        <h5 class="mb-1">Listings</h5>
                                        <p>No of Listings : 200</p>
                                    </div>
                                    <div>
                                        <a href="{{url('add-bus')}}"
                                            class="btn btn-primary d-inline-flex align-items-center me-0"><i
                                                class="isax isax-add me-1 fs-16"></i>Add Listing</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">

                                <div class="row">

                                    <!-- 1. Red Bird Luxury -->
                                    <div class="col-xxl-4 col-md-6 d-flex">
                                        <div class="place-item mb-4 flex-fill bus-grid">
                                            <div class="place-img">
                                                <a href="{{url('bus-details')}}">
                                                    <img src="{{URL::asset('build/img/bus/grid/bus-grid-img-1.jpg')}}" class="img-fluid"
                                                        alt="img">
                                                </a>
                                                <div class="fav-item">
                                                    <div class="d-flex align-items-center">
                                                        <a href="#" class="fav-icon me-2 selected">
                                                            <i class="isax isax-heart5"></i>
                                                        </a>
                                                        <span class="badge bg-indigo">Cheapest</span>
                                                    </div>
                                                    <span
                                                        class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium rounded">5.0</span>
                                                </div>
                                            </div>

                                            <div class="place-content">
                                                <h5 class="text-truncate mb-1"><a href="{{url('bus-details')}}">Red Bird
                                                        Luxury</a></h5>
                                                <div class="d-flex align-items-center mb-3">
                                                    <span class="avatar avatar-sm me-2">
                                                        <img src="{{URL::asset('build/img/bus/bus-logo-01.svg')}}" class="rounded-circle"
                                                            alt="icon">
                                                    </span>
                                                    <p class="fs-14 mb-0 me-2">Tata</p>
                                                    <p class="fs-14 mb-0">
                                                        <i class="ti ti-point-filled text-primary me-2"></i>Seater
                                                    </p>
                                                </div>

                                                <div class="date-info p-2 mb-3">
                                                    <div
                                                        class="bus-title d-flex align-items-center justify-content-between gap-2">
                                                        <div class="bus-title-item">
                                                            <h5 class="text-truncate mb-1 fs-14 fw-semibold">Chicago
                                                            </h5>
                                                            <p class="fs-14 text-default mt-1">09:30 AM</p>
                                                        </div>
                                                        <div class="dot-line"><span><small class="text-muted">10h
                                                                    40m</small></span></div>
                                                        <div class="bus-title-item">
                                                            <h5 class="text-truncate mb-1 fs-14 fw-semibold">Miami</h5>
                                                            <p class="fs-14 text-default mt-1">10:40 PM</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div
                                                    class="d-flex align-items-center justify-content-between border-top pt-3">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{URL::asset('build/img/users/user-08.jpg')}}"
                                                            class="avatar avatar-sm rounded-circle" alt="img">
                                                        <span class="badge bg-outline-success fs-10 fw-medium ms-2">20
                                                            Seats Left</span>
                                                    </div>
                                                    <h6 class="text-primary"><span class="fs-14 text-default">From
                                                        </span>$280</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 2. Elite Ride -->
                                    <div class="col-xxl-4 col-md-6 d-flex">
                                        <div class="place-item mb-4 flex-fill bus-grid">
                                            <div class="place-img">
                                                <a href="{{url('bus-details')}}">
                                                    <img src="{{URL::asset('build/img/bus/grid/bus-grid-img-2.jpg')}}" class="img-fluid"
                                                        alt="img">
                                                </a>
                                                <div class="fav-item">
                                                    <a href="#" class="fav-icon selected"><i
                                                            class="isax isax-heart5"></i></a>
                                                    <span
                                                        class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium rounded">4.9</span>
                                                </div>
                                            </div>
                                            <div class="place-content">
                                                <h5 class="text-truncate mb-1"><a href="{{url('bus-details')}}">Elite Ride</a>
                                                </h5>
                                                <div class="d-flex align-items-center mb-3">
                                                    <span class="avatar avatar-sm me-2"><img
                                                            src="{{URL::asset('build/img/bus/bus-logo-02.svg')}}"></span>
                                                    <p class="fs-14 mb-0 me-2">Ashok Leyland</p>
                                                    <p class="fs-14 mb-0"><i
                                                            class="ti ti-point-filled text-primary me-2"></i>AC Sleeper
                                                    </p>
                                                </div>
                                                <div class="date-info p-2 mb-3">
                                                    <div
                                                        class="bus-title d-flex justify-content-between align-items-center">
                                                        <div class="bus-title-item">
                                                            <h5 class="fs-14 mb-1">Toronto</h5>
                                                            <p class="fs-14 text-default">02:25 PM</p>
                                                        </div>
                                                        <div class="dot-line"><span><small class="text-muted">14h
                                                                    10m</small></span></div>
                                                        <div class="bus-title-item">
                                                            <h5 class="fs-14 mb-1">Bangkok</h5>
                                                            <p class="fs-14 text-default">04:15 PM</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex justify-content-between align-items-center border-top pt-3">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{URL::asset('build/img/users/user-09.jpg')}}"
                                                            class="avatar avatar-sm rounded-circle">
                                                        <span class="badge bg-outline-success fs-10 fw-medium ms-2">12
                                                            Seats Left</span>
                                                    </div>
                                                    <h6 class="text-primary"><span class="fs-14 text-default">From
                                                        </span>$300</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 3. Urban Glide -->
                                    <div class="col-xxl-4 col-md-6 d-flex">
                                        <div class="place-item mb-4 flex-fill bus-grid">
                                            <div class="place-img">
                                                <a href="{{url('bus-details')}}">
                                                    <img src="{{URL::asset('build/img/bus/grid/bus-grid-img-3.jpg')}}" class="img-fluid">
                                                </a>
                                                <div class="fav-item">
                                                    <div class="d-flex align-items-center">
                                                        <a href="#" class="fav-icon me-2">
                                                            <i class="isax isax-heart5"></i>
                                                        </a>
                                                        <span class="badge bg-indigo">Cheapest</span>
                                                    </div>
                                                    <span
                                                        class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium rounded">4.0</span>
                                                </div>
                                            </div>
                                            <div class="place-content">
                                                <h5 class="mb-1"><a href="{{url('bus-details')}}">Urban Glide</a></h5>
                                                <div class="d-flex mb-3">
                                                    <span class="avatar avatar-sm me-2"><img
                                                            src="{{URL::asset('build/img/bus/bus-logo-03.svg')}}"></span>
                                                    <p class="fs-14 me-2 mb-0">Volvo</p>
                                                    <p class="fs-14"><i
                                                            class="ti ti-point-filled text-primary me-2"></i>Sleeper</p>
                                                </div>

                                                <div class="date-info p-2 mb-3">
                                                    <div
                                                        class="bus-title d-flex justify-content-between align-items-center">
                                                        <div>
                                                            <h5 class="fs-14 mb-1">Dallas</h5>
                                                            <p class="fs-14 text-default">04:45 PM</p>
                                                        </div>
                                                        <div class="dot-line"><span><small class="text-muted">19h
                                                                    10m</small></span></div>
                                                        <div>
                                                            <h5 class="fs-14 mb-1">Atlanta</h5>
                                                            <p class="fs-14 text-default">08:15 AM</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div
                                                    class="d-flex justify-content-between align-items-center border-top pt-3">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{URL::asset('build/img/users/user-10.jpg')}}"
                                                            class="avatar avatar-sm rounded-circle">
                                                        <span class="badge bg-outline-success fs-10 fw-medium ms-2">11
                                                            Seats Left</span>
                                                    </div>
                                                    <h6 class="text-primary"><span class="fs-14 text-default">From
                                                        </span>$400</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 4. Route Max -->
                                    <div class="col-xxl-4 col-md-6 d-flex">
                                        <div class="place-item mb-4 flex-fill bus-grid">
                                            <div class="place-img">
                                                <a href="{{url('bus-details')}}">
                                                    <img src="{{URL::asset('build/img/bus/grid/bus-grid-img-4.jpg')}}" class="img-fluid">
                                                </a>
                                                <div class="fav-item">
                                                    <div class="d-flex align-items-center">
                                                        <a href="#" class="fav-icon me-2">
                                                            <i class="isax isax-heart5"></i>
                                                        </a>
                                                        <span class="badge bg-indigo">Cheapest</span>
                                                    </div>
                                                    <span
                                                        class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium rounded">5.0</span>
                                                </div>
                                            </div>
                                            <div class="place-content">
                                                <h5 class="mb-1"><a href="{{url('bus-details')}}">Route Max</a></h5>
                                                <div class="d-flex mb-3">
                                                    <span class="avatar avatar-sm me-2"><img
                                                            src="{{URL::asset('build/img/bus/bus-logo-01.svg')}}"></span>
                                                    <p class="fs-14 me-2 mb-0">Tata</p>
                                                    <p class="fs-14 mb-0"><i
                                                            class="ti ti-point-filled text-primary me-2"></i>Seater</p>
                                                </div>
                                                <div class="date-info p-2 mb-3">
                                                    <div
                                                        class="bus-title d-flex justify-content-between align-items-center">
                                                        <div>
                                                            <h5 class="fs-14 mb-1">New York</h5>
                                                            <p class="fs-14">07:00 AM</p>
                                                        </div>
                                                        <div class="dot-line"><span><small class="text-muted">11h
                                                                    10m</small></span></div>
                                                        <div>
                                                            <h5 class="fs-14 mb-1">Boston</h5>
                                                            <p class="fs-14">08:25 PM</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex justify-content-between align-items-center border-top pt-3">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{URL::asset('build/img/users/user-11.jpg')}}"
                                                            class="avatar avatar-sm rounded-circle">
                                                        <span class="badge bg-outline-success fs-10 fw-medium ms-2">20
                                                            Seats Left</span>
                                                    </div>
                                                    <h6 class="text-primary"><span>From </span>$280</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 5. Trail Star -->
                                    <div class="col-xxl-4 col-md-6 d-flex">
                                        <div class="place-item mb-4 flex-fill bus-grid">
                                            <div class="place-img">
                                                <a href="{{url('bus-details')}}">
                                                    <img src="{{URL::asset('build/img/bus/grid/bus-grid-img-5.jpg')}}" class="img-fluid">
                                                </a>
                                                <div class="fav-item">
                                                    <div class="d-flex align-items-center">
                                                        <a href="#" class="fav-icon me-2">
                                                            <i class="isax isax-heart5"></i>
                                                        </a>
                                                        <span class="badge bg-indigo">Cheapest</span>
                                                    </div>
                                                    <span
                                                        class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium rounded">4.0</span>
                                                </div>
                                            </div>
                                            <div class="place-content">
                                                <h5 class="mb-1"><a href="{{url('bus-details')}}">Trail Star</a></h5>
                                                <div class="d-flex mb-3">
                                                    <span class="avatar avatar-sm me-2"><img
                                                            src="{{URL::asset('build/img/bus/bus-logo-01.svg')}}"></span>
                                                    <p class="fs-14 me-2 mb-0">Tata</p>
                                                    <p class="fs-14 mb-0"><i
                                                            class="ti ti-point-filled text-primary me-2"></i>AC Sleeper
                                                    </p>
                                                </div>
                                                <div class="date-info p-2 mb-3">
                                                    <div
                                                        class="bus-title d-flex justify-content-between align-items-center">
                                                        <div>
                                                            <h5 class="mb-1 fs-14">Seattle</h5>
                                                            <p>06:00 PM</p>
                                                        </div>
                                                        <div class="dot-line"><span><small>13h 20m</small></span></div>
                                                        <div>
                                                            <h5 class="mb-1 fs-14">Denver</h5>
                                                            <p>07:20 AM</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex justify-content-between align-items-center pt-3 border-top">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{URL::asset('build/img/users/user-12.jpg')}}"
                                                            class="avatar avatar-sm rounded-circle">
                                                        <span class="badge bg-outline-success fs-10 fw-medium ms-2">14
                                                            Seats Left</span>
                                                    </div>
                                                    <h6 class="text-primary"><span>From </span>$510</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 6. Enviro Bus -->
                                    <div class="col-xxl-4 col-md-6 d-flex">
                                        <div class="place-item mb-4 flex-fill bus-grid">
                                            <div class="place-img">
                                                <a href="{{url('bus-details')}}">
                                                    <img src="{{URL::asset('build/img/bus/grid/bus-grid-img-6.jpg')}}" class="img-fluid">
                                                </a>
                                                <div class="fav-item">
                                                    <div class="d-flex align-items-center">
                                                        <a href="#" class="fav-icon me-2">
                                                            <i class="isax isax-heart5"></i>
                                                        </a>
                                                        <span class="badge bg-indigo">Cheapest</span>
                                                    </div>
                                                    <span
                                                        class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium rounded">5.0</span>
                                                </div>
                                            </div>
                                            <div class="place-content">
                                                <h5 class="mb-1"><a href="{{url('bus-details')}}">Enviro Bus</a></h5>
                                                <div class="d-flex mb-3">
                                                    <span class="avatar avatar-sm me-2"><img
                                                            src="{{URL::asset('build/img/bus/bus-logo-02.svg')}}"></span>
                                                    <p class="fs-14 me-2 mb-0">Ashok Leyland</p>
                                                    <p class="fs-14 mb-0"><i
                                                            class="ti ti-point-filled text-primary me-2"></i>Seater</p>
                                                </div>
                                                <div class="date-info p-2 mb-3">
                                                    <div
                                                        class="bus-title d-flex justify-content-between align-items-center">
                                                        <div>
                                                            <h5 class="mb-1 fs-14">Portland</h5>
                                                            <p>01:10 PM</p>
                                                        </div>
                                                        <div class="dot-line"><span><small>12h 45m</small></span></div>
                                                        <div>
                                                            <h5 class="mb-1 fs-14">Salt Lake</h5>
                                                            <p>12:35 PM</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex justify-content-between align-items-center pt-3 border-top">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{URL::asset('build/img/users/user-14.jpg')}}"
                                                            class="avatar avatar-sm rounded-circle">
                                                        <span class="badge bg-outline-success fs-10 fw-medium ms-2">15
                                                            Seats Left</span>
                                                    </div>
                                                    <h6 class="text-primary"><span>From </span>$190</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 7. City Mover -->
                                    <div class="col-xxl-4 col-md-6 d-flex">
                                        <div class="place-item mb-4 flex-fill bus-grid">
                                            <div class="place-img">
                                                <a href="{{url('bus-details')}}">
                                                    <img src="{{URL::asset('build/img/bus/grid/bus-grid-img-7.jpg')}}" class="img-fluid">
                                                </a>
                                                <div class="fav-item">
                                                    <div class="d-flex align-items-center">
                                                        <a href="#" class="fav-icon me-2">
                                                            <i class="isax isax-heart5"></i>
                                                        </a>
                                                        <span class="badge bg-indigo">Cheapest</span>
                                                    </div>
                                                    <span
                                                        class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium rounded">5.0</span>
                                                </div>
                                            </div>
                                            <div class="place-content">
                                                <h5 class="mb-1"><a href="{{url('bus-details')}}">City Mover</a></h5>
                                                <div class="d-flex mb-3">
                                                    <span class="avatar avatar-sm me-2"><img
                                                            src="{{URL::asset('build/img/bus/bus-logo-03.svg')}}"></span>
                                                    <p class="fs-14 me-2 mb-0">Tata</p>
                                                    <p class="fs-14 mb-0"><i
                                                            class="ti ti-point-filled text-primary me-2"></i>AC</p>
                                                </div>
                                                <div class="date-info p-2 mb-3">
                                                    <div
                                                        class="bus-title d-flex justify-content-between align-items-center">
                                                        <div>
                                                            <h5 class="mb-1 fs-14">Houston</h5>
                                                            <p>08:30 AM</p>
                                                        </div>
                                                        <div class="dot-line"><span><small>09h 55m</small></span></div>
                                                        <div>
                                                            <h5 class="mb-1 fs-14">Orleans</h5>
                                                            <p>06:25 PM</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex justify-content-between align-items-center border-top pt-3">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{URL::asset('build/img/users/user-15.jpg')}}"
                                                            class="avatar avatar-sm rounded-circle">
                                                        <span class="badge bg-outline-success fs-10 fw-medium ms-2">16
                                                            Seats Left</span>
                                                    </div>
                                                    <h6 class="text-primary">From $160</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 8. City Shuttle -->
                                    <div class="col-xxl-4 col-md-6 d-flex">
                                        <div class="place-item mb-4 flex-fill bus-grid">
                                            <div class="place-img">
                                                <a href="{{url('bus-details')}}">
                                                    <img src="{{URL::asset('build/img/bus/grid/bus-grid-img-8.jpg')}}" class="img-fluid">
                                                </a>
                                                <div class="fav-item">
                                                    <div class="d-flex align-items-center">
                                                        <a href="#" class="fav-icon me-2">
                                                            <i class="isax isax-heart5"></i>
                                                        </a>
                                                        <span class="badge bg-indigo">Cheapest</span>
                                                    </div>
                                                    <span
                                                        class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium rounded">4.0</span>
                                                </div>
                                            </div>
                                            <div class="place-content">
                                                <h5 class="mb-1"><a href="{{url('bus-details')}}">City Shuttle</a></h5>
                                                <div class="d-flex mb-3">
                                                    <span class="avatar avatar-sm me-2"><img
                                                            src="{{URL::asset('build/img/bus/bus-logo-01.svg')}}"></span>
                                                    <p class="fs-14 me-2 mb-0">Volvo</p>
                                                    <p class="fs-14 mb-0"><i
                                                            class="ti ti-point-filled text-primary me-2"></i>AC Sleeper
                                                    </p>
                                                </div>
                                                <div class="date-info p-2 mb-3">
                                                    <div
                                                        class="bus-title d-flex justify-content-between align-items-center">
                                                        <div>
                                                            <h5 class="mb-1 fs-14">Phoenix</h5>
                                                            <p>01:40 PM</p>
                                                        </div>
                                                        <div class="dot-line"><span><small>04h 15m</small></span></div>
                                                        <div>
                                                            <h5 class="mb-1 fs-14">Vegas</h5>
                                                            <p>08:55 PM</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex justify-content-between align-items-center border-top pt-3">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{URL::asset('build/img/users/user-19.jpg')}}"
                                                            class="avatar avatar-sm rounded-circle">
                                                        <span class="badge bg-outline-success fs-10 fw-medium ms-2">09
                                                            Seats Left</span>
                                                    </div>
                                                    <h6 class="text-primary">From $650</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 9. Volt Voyage -->
                                    <div class="col-xxl-4 col-md-6 d-flex">
                                        <div class="place-item mb-4 flex-fill bus-grid">
                                            <div class="place-img">
                                                <a href="{{url('bus-details')}}">
                                                    <img src="{{URL::asset('build/img/bus/grid/bus-grid-img-9.jpg')}}" class="img-fluid">
                                                </a>
                                                <div class="fav-item">
                                                    <div class="d-flex align-items-center">
                                                        <a href="#" class="fav-icon me-2">
                                                            <i class="isax isax-heart5"></i>
                                                        </a>
                                                        <span class="badge bg-indigo">Cheapest</span>
                                                    </div>
                                                    <span
                                                        class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium rounded">5.0</span>
                                                </div>
                                            </div>
                                            <div class="place-content">
                                                <h5 class="mb-1"><a href="{{url('bus-details')}}">Volt Voyage</a></h5>
                                                <div class="d-flex mb-3">
                                                    <span class="avatar avatar-sm me-2"><img
                                                            src="{{URL::asset('build/img/bus/bus-logo-02.svg')}}"></span>
                                                    <p class="fs-14 me-2 mb-0">Tata</p>
                                                    <p class="fs-14 mb-0"><i
                                                            class="ti ti-point-filled text-primary me-2"></i>Sleeper</p>
                                                </div>
                                                <div class="date-info p-2 mb-3">
                                                    <div
                                                        class="bus-title d-flex justify-content-between align-items-center">
                                                        <div>
                                                            <h5 class="mb-1 fs-14">Diego</h5>
                                                            <p>04:15 PM</p>
                                                        </div>
                                                        <div class="dot-line"><span><small>15h 30m</small></span></div>
                                                        <div>
                                                            <h5 class="mb-1 fs-14">Sacram</h5>
                                                            <p>05:45 AM</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex justify-content-between align-items-center border-top pt-3">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{URL::asset('build/img/users/user-20.jpg')}}"
                                                            class="avatar avatar-sm rounded-circle">
                                                        <span class="badge bg-outline-success fs-10 fw-medium ms-2">12
                                                            Seats Left</span>
                                                    </div>
                                                    <h6 class="text-primary">From $375</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>



                                <div class="col-md-12">
                                    <!-- Pagination -->
                                    <nav class="pagination-nav">
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true"><i
                                                            class="fa-solid fa-chevron-left"></i></span>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item active"><a class="page-link" href="#">4</a></li>
                                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true"><i
                                                            class="fa-solid fa-chevron-right"></i></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <!-- /Pagination -->
                                </div>

                            </div>
                        </div>

                        <!-- /Bus list -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->

    <!-- ========================
        End Page Content
    ========================= -->

@endsection



