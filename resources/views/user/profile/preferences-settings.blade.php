<?php $page="preferences-settings";?>
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
                    <h2 class="breadcrumb-title mb-2">Settings</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="isax isax-grid-55"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Preferences</li>
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

                <!-- Profile Settings -->
                <div class="col-xl-9 col-lg-8">
                    <div class="card settings mb-0">
                        <div class="card-header">
                            <h6>Settings</h6>
                        </div>
                        <div class="card-body">
                            <div class="settings-link d-flex align-items-center flex-wrap">
                                <a href="{{url('profile-settings')}}"><i class="isax isax-user-octagon me-2"></i>Profile
                                    Settings</a>
                                <a href="{{url('security-settings')}}"><i class="isax isax-shield-tick me-2"></i>Security</a>
                                <a href="{{url('notification-settings')}}"><i
                                        class="isax isax-notification me-2"></i>Notifications</a>
                                <a href="{{url('integration-settings')}}" class="pe-3"><i
                                        class="isax isax-hierarchy me-2"></i>Integrations</a>
                            </div>

                            <!-- Preferences Content -->
                            <div class="row gy-4 align-items-center">
                                <div class="col-lg-4">
                                    <div class="preference-content">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6 class="fs-14">Bookings</h6>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="check1" checked>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="preference-content">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6 class="fs-14">Reviews</h6>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="check2" checked>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="preference-content">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6 class="fs-14">Payments</h6>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="check3" checked>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="preference-content">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6 class="fs-14">Wishlist</h6>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="check4" checked>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="preference-content">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6 class="fs-14">Wallet</h6>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="check5" checked>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="preference-content">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6 class="fs-14">Messages</h6>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="check6" checked>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Preferences Content-->
                        </div>
                    </div>
                </div>
                <!-- /Profile Settings -->
            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->

    <!-- ========================
        End Page Content
    ========================= -->

@endsection



