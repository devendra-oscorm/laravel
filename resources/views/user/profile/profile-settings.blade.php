<?php $page="profile-settings";?>
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
                            <li class="breadcrumb-item active" aria-current="page">Profile Settings</li>
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
                        <div class="card-body pb-3">
                            <div class="settings-link d-flex align-items-center flex-wrap">
                                <a href="{{url('profile-settings')}}" class="active ps-3"><i
                                        class="isax isax-user-octagon me-2"></i>Profile Settings</a>
                                <a href="{{url('security-settings')}}"><i class="isax isax-shield-tick me-2"></i>Security</a>
                                <a href="{{url('notification-settings')}}"><i
                                        class="isax isax-notification me-2"></i>Notifications</a>
                                <a href="{{url('integration-settings')}}" class="pe-3"><i
                                        class="isax isax-hierarchy me-2"></i>Integrations</a>
                            </div>

                            <!-- Settings Content -->
                            <div class="settings-content mb-3">
                                <h6 class="fs-16 mb-3">Basic Information</h6>
                                <div class="row gy-2">
                                    <div class="col-lg-12">
                                        <div class="d-flex align-items-center">
                                            <img src="{{URL::asset('build/img/users/user-01.jpg')}}" alt="image"
                                                class="img-fluid avatar avatar-xxl br-10 flex-shrink-0 me-3">
                                            <div>
                                                <p class="fs-14 text-gray-6 fw-normal mb-2">Recommended dimensions are
                                                    typically 400 x 400 pixels.</p>
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2">
                                                        <label class="upload-btn" for="fileUpload">Upload</label>
                                                        <input type="file" id="fileUpload" style="display: none;">
                                                    </div>
                                                    <a href="#" class="btn btn-light btn-md">Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <label class="form-label">First Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <label class="form-label">Last Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <label class="form-label">Phone</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="settings-content">
                                <h6 class="fs-16 mb-3">Address Information</h6>
                                <div class="row gy-2">
                                    <div class="col-lg-12">
                                        <div>
                                            <label class="form-label">Address</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <label class="form-label">Country</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <label class="form-label">State</label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>California</option>
                                                <option>Texas</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <label class="form-label">City</label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>New York</option>
                                                <option>Tokyo </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <label class="form-label">Postal Code</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Settings Content-->

                        </div>
                        <div class="card-footer">
                            <div class="d-flex align-items-center justify-content-end">
                                <a href="#" class="btn btn-light me-2">Cancel</a>
                                <a href="#" class="btn btn-primary">Save</a>
                            </div>
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



