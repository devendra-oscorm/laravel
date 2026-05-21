<?php $page="support-fixes";?>
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
                    <h2 class="breadcrumb-title mb-2">Support</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- Page Wrapper -->
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <h5 class="mb-3">Select2</h5>
                    <select class="select">
                        <option value="">This is a placeholder</option>
                        <option value="Choice 1">Choice 1</option>
                        <option value="Choice 2">Choice 2</option>
                        <option value="Choice 3">Choice 3</option>
                    </select>
                </div>
                <div class="col-lg-6">
                    <h5 class="mb-3">Input Group</h5>
                    <div class="input-group mb-4">
                        <div class="input-group-text">
                            <i class="ti ti-mail"></i>
                        </div>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                            aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group">
                        <input type="email" class="form-control" id="inputEmail1">
                        <div class="input-group-text">
                            <i class="ti ti-lock"></i>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="mt-5 mb-5">

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header border-bottom border-dashed d-flex align-items-center">
                            <h4 class="header-title">A Basic Wizard</h4>
                        </div>

                        <div class="card-body">
                            <form>
                                <div id="basicwizard">
                                    <ul class="nav nav-pills nav-justified form-wizard-header mb-3" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a href="#basictab1" data-bs-toggle="tab" data-toggle="tab"
                                                class="nav-link rounded-0 py-2" aria-selected="false" role="tab"
                                                tabindex="-1">
                                                <i class="bi bi-person-circle fs-18 align-middle me-1"></i>
                                                <span class="d-none d-sm-inline">Account</span>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a href="#basictab2" data-bs-toggle="tab" data-toggle="tab"
                                                class="nav-link rounded-0 py-2" aria-selected="false" role="tab"
                                                tabindex="-1">
                                                <i class="bi bi-emoji-smile fs-18 align-middle me-1"></i>
                                                <span class="d-none d-sm-inline">Profile</span>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a href="#basictab3" data-bs-toggle="tab" data-toggle="tab"
                                                class="nav-link rounded-0 py-2 active" aria-selected="true" role="tab">
                                                <i class="bi bi-check2-circle fs-18 align-middle me-1"></i>
                                                <span class="d-none d-sm-inline">Finish</span>
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="tab-content b-0 mb-0">
                                        <div class="tab-pane" id="basictab1" role="tabpanel">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="row mb-3">
                                                        <label class="col-md-3 col-form-label" for="userName">User
                                                            name</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" id="userName"
                                                                name="userName" value="johne">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-md-3 col-form-label" for="password">
                                                            Password</label>
                                                        <div class="col-md-9">
                                                            <input type="password" id="password" name="password"
                                                                class="form-control" value="123456789">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label class="col-md-3 col-form-label" for="confirm">Re
                                                            Password</label>
                                                        <div class="col-md-9">
                                                            <input type="password" id="confirm" name="confirm"
                                                                class="form-control" value="123456789">
                                                        </div>
                                                    </div>
                                                </div> <!-- end col -->
                                            </div> <!-- end row -->
                                        </div>

                                        <div class="tab-pane" id="basictab2" role="tabpanel">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="row mb-3">
                                                        <label class="col-md-3 col-form-label" for="name"> First
                                                            name</label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="name" name="name"
                                                                class="form-control" value="Francis">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-md-3 col-form-label" for="surname"> Last
                                                            name</label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="surname" name="surname"
                                                                class="form-control" value="Brinkman">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label class="col-md-3 col-form-label" for="email">Email</label>
                                                        <div class="col-md-9">
                                                            <input type="email" id="email" name="email"
                                                                class="form-control" value="cory1979@hotmail.com">
                                                        </div>
                                                    </div>
                                                </div> <!-- end col -->
                                            </div> <!-- end row -->
                                        </div>

                                        <div class="tab-pane active show" id="basictab3" role="tabpanel">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="text-center">
                                                        <h2 class="mt-0"><i class="bi bi-check2-all"></i></h2>
                                                        <h3 class="mt-0">Thank you !</h3>

                                                        <p class="w-75 mb-2 mx-auto">Quisque nec turpis at urna dictum
                                                            luctus. Suspendisse convallis dignissim eros at volutpat. In
                                                            egestas mattis dui. Aliquam
                                                            mattis dictum aliquet.</p>

                                                        <div class="mb-3">
                                                            <div class="form-check d-inline-block">
                                                                <input type="checkbox" class="form-check-input fs-15"
                                                                    id="customCheck1">
                                                                <label class="form-check-label" for="customCheck1">I
                                                                    agree with the Terms and Conditions</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end col -->
                                            </div> <!-- end row -->
                                        </div>

                                        <div class="d-flex wizard justify-content-between flex-wrap gap-2 mt-3">
                                            <div class="first">
                                                <a href="#" class="btn btn-primary">
                                                    First
                                                </a>
                                            </div>
                                            <div class="d-flex flex-wrap gap-2">
                                                <div class="previous">
                                                    <a href="#" class="btn btn-primary">
                                                        <i class="bx bx-left-arrow-alt me-2"></i>Back To Previous
                                                    </a>
                                                </div>
                                                <div class="next">
                                                    <a href="#" class="btn btn-primary mt-3 mt-md-0 disabled">
                                                        Next Step<i class="bx bx-right-arrow-alt ms-2"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="last">
                                                <a href="#" class="btn btn-primary mt-3 mt-md-0 disabled">
                                                    Finish
                                                </a>
                                            </div>
                                        </div>
                                    </div> <!-- tab-content -->

                                </div> <!-- end #basicwizard-->
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header border-bottom border-dashed d-flex align-items-center">
                            <h4 class="header-title">Wizard With Progress Bar</h4>
                        </div>

                        <div class="card-body">
                            <form>
                                <div id="progressbarwizard">

                                    <ul class="nav nav-pills nav-justified form-wizard-header mb-3" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a href="#account-2" data-bs-toggle="tab" data-toggle="tab"
                                                class="nav-link rounded-0 py-2 active" aria-selected="true" role="tab">
                                                <i class="bi bi-person-circle fs-18 align-middle me-1"></i>
                                                <span class="d-none d-sm-inline">Account</span>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a href="#profile-tab-2" data-bs-toggle="tab" data-toggle="tab"
                                                class="nav-link rounded-0 py-2" aria-selected="false" tabindex="-1"
                                                role="tab">
                                                <i class="bi bi-emoji-smile fs-18 align-middle me-1"></i>
                                                <span class="d-none d-sm-inline">Profile</span>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a href="#finish-2" data-bs-toggle="tab" data-toggle="tab"
                                                class="nav-link rounded-0 py-2" aria-selected="false" tabindex="-1"
                                                role="tab">
                                                <i class="bi bi-check2-circle fs-18 align-middle me-1"></i>
                                                <span class="d-none d-sm-inline">Finish</span>
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="tab-content b-0 mb-0">

                                        <div id="bar" class="progress mb-3" style="height: 7px;">
                                            <div class="bar progress-bar progress-bar-striped progress-bar-animated bg-success"
                                                style="width: 33.3333%;"></div>
                                        </div>

                                        <div class="tab-pane active show" id="account-2" role="tabpanel">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="row mb-3">
                                                        <label class="col-md-3 col-form-label" for="userName1">User
                                                            name</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" id="userName1"
                                                                name="userName1" value="johne">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-md-3 col-form-label" for="password1">
                                                            Password</label>
                                                        <div class="col-md-9">
                                                            <input type="password" id="password1" name="password1"
                                                                class="form-control" value="123456789">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label class="col-md-3 col-form-label" for="confirm1">Re
                                                            Password</label>
                                                        <div class="col-md-9">
                                                            <input type="password" id="confirm1" name="confirm1"
                                                                class="form-control" value="123456789">
                                                        </div>
                                                    </div>
                                                </div> <!-- end col -->
                                            </div> <!-- end row -->
                                        </div>

                                        <div class="tab-pane" id="profile-tab-2" role="tabpanel">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="row mb-3">
                                                        <label class="col-md-3 col-form-label" for="name1"> First
                                                            name</label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="name1" name="name1"
                                                                class="form-control" value="Francis">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-md-3 col-form-label" for="surname1"> Last
                                                            name</label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="surname1" name="surname1"
                                                                class="form-control" value="Brinkman">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label class="col-md-3 col-form-label"
                                                            for="email1">Email</label>
                                                        <div class="col-md-9">
                                                            <input type="email" id="email1" name="email1"
                                                                class="form-control" value="cory1979@hotmail.com">
                                                        </div>
                                                    </div>
                                                </div> <!-- end col -->
                                            </div> <!-- end row -->
                                        </div>

                                        <div class="tab-pane" id="finish-2" role="tabpanel">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="text-center">
                                                        <h2 class="mt-0"><i class="bi bi-check2-all"></i></h2>
                                                        <h3 class="mt-0">Thank you !</h3>

                                                        <p class="w-75 mb-2 mx-auto">Quisque nec turpis at urna dictum
                                                            luctus. Suspendisse convallis dignissim eros at volutpat. In
                                                            egestas mattis dui. Aliquam
                                                            mattis dictum aliquet.</p>

                                                        <div class="mb-3">
                                                            <div class="form-check d-inline-block">
                                                                <input type="checkbox" class="form-check-input fs-15"
                                                                    id="customCheck3">
                                                                <label class="form-check-label" for="customCheck3">I
                                                                    agree with the Terms and Conditions</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end col -->
                                            </div> <!-- end row -->
                                        </div>

                                        <div class="d-flex wizard justify-content-between flex-wrap gap-2 mt-3">
                                            <div class="first">
                                                <a href="#" class="btn btn-primary disabled">
                                                    First
                                                </a>
                                            </div>
                                            <div class="d-flex flex-wrap gap-2">
                                                <div class="previous">
                                                    <a href="#" class="btn btn-primary disabled">
                                                        <i class="bx bx-left-arrow-alt me-2"></i>Back To Previous
                                                    </a>
                                                </div>
                                                <div class="next">
                                                    <a href="#" class="btn btn-primary mt-3 mt-md-0">
                                                        Next Step<i class="bx bx-right-arrow-alt ms-2"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="last">
                                                <a href="#" class="btn btn-primary mt-3 mt-md-0">
                                                    Finish
                                                </a>
                                            </div>
                                        </div>

                                    </div> <!-- tab-content -->
                                </div> <!-- end #progressbarwizard-->
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="mt-5 mb-5">

            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Default Badges</h5>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <p class="text-xl mb-3">Use the <span class="text-secondary">badge</span> class to show a
                                default badge.</p>
                            <div class="d-flex flex-wrap gap-2">
                                <span class="badge bg-primary">Primary</span>
                                <span class="badge bg-secondary">Secondary</span>
                                <span class="badge bg-success">Success</span>
                                <span class="badge bg-danger">Danger</span>
                                <span class="badge bg-warning">Warning</span>
                                <span class="badge bg-info">Info</span>
                                <span class="badge bg-light text-dark">Light</span>
                                <span class="badge bg-dark text-white">Dark</span>
                            </div>
                        </div> <!-- end card body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->

                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Rounded Badges</h5>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <p>Use the <code>.rounded-pill</code> to create a soft badge more rounded.</p>
                            <div class="d-flex flex-wrap gap-2">
                                <span class="badge rounded-pill bg-primary">Primary</span>
                                <span class="badge rounded-pill bg-secondary">Secondary</span>
                                <span class="badge rounded-pill bg-success">Success</span>
                                <span class="badge rounded-pill bg-danger">Danger</span>
                                <span class="badge rounded-pill bg-warning">Warning</span>
                                <span class="badge rounded-pill bg-info">Info</span>
                                <span class="badge rounded-pill bg-light text-dark">Light</span>
                                <span class="badge rounded-pill bg-dark text-white">Dark</span>
                            </div>
                        </div> <!-- end card body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->

                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Soft Badges</h5>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <p class="text-xl mb-3">Use the <code>badge-soft-</code> class to create a softer badge.</p>
                            <div class="d-flex flex-wrap gap-2">
                                <span class="badge badge-soft-primary">Primary</span>
                                <span class="badge badge-soft-secondary">Secondary</span>
                                <span class="badge badge-soft-success">Success</span>
                                <span class="badge badge-soft-danger">Danger</span>
                                <span class="badge badge-soft-warning">Warning</span>
                                <span class="badge badge-soft-info">Info</span>
                                <span class="badge badge-soft-light">Light</span>
                                <span class="badge badge-soft-dark">Dark</span>
                            </div>
                        </div> <!-- end card body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->

                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Soft Rounded Badges</h5>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <p class="text-xl mb-3">Use the <code>rounded-pill  badge-soft-</code> to create a soft
                                badge more rounded</p>
                            <div class="d-flex flex-wrap gap-2">
                                <span class="badge rounded-pill badge-soft-primary">Primary</span>
                                <span class="badge rounded-pill badge-soft-secondary">Secondary</span>
                                <span class="badge rounded-pill badge-soft-success">Success</span>
                                <span class="badge rounded-pill badge-soft-danger">Danger</span>
                                <span class="badge rounded-pill badge-soft-warning">Warning</span>
                                <span class="badge rounded-pill badge-soft-info">Info</span>
                                <span class="badge rounded-pill badge-soft-light text-dark">Light</span>
                                <span class="badge rounded-pill badge-soft-dark">Dark</span>
                            </div>
                        </div> <!-- end card body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->

                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Soft Border Badges</h5>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <p class="text-xl mb-3">Use the <code>badge-border</code> and <code>badge-soft-</code> with
                                below mentioned modifier classes to make badges with border & soft backgorund.</p>
                            <div class="d-flex flex-wrap gap-2">
                                <span class="badge badge-soft-primary border border-primary">Primary</span>
                                <span class="badge badge-soft-secondary border border-secondary">Secondary</span>
                                <span class="badge badge-soft-success border border-success">Success</span>
                                <span class="badge badge-soft-danger border border-danger">Danger</span>
                                <span class="badge badge-soft-warning border border-warning">Warning</span>
                                <span class="badge badge-soft-info border border-info">Info</span>
                                <span class="badge badge-soft-light border border-light text-dark">Light</span>
                                <span class="badge badge-soft-dark border border-dark">Dark</span>
                            </div>
                        </div> <!-- end card body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->

                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Soft Border Rounded Badges</h5>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <p class="text-xl mb-3">Use the <code>badge-border</code> and <code>badge-soft-</code> with
                                below mentioned modifier classes to make badges with border & soft backgorund.</p>
                            <div class="d-flex flex-wrap gap-2">
                                <span class="badge rounded-pill badge-soft-primary border border-primary">Primary</span>
                                <span
                                    class="badge rounded-pill badge-soft-secondary border border-secondary">Secondary</span>
                                <span class="badge rounded-pill badge-soft-success border border-success">Success</span>
                                <span class="badge rounded-pill badge-soft-danger border border-danger">Danger</span>
                                <span class="badge rounded-pill badge-soft-warning border border-warning">Warning</span>
                                <span class="badge rounded-pill badge-soft-info border border-info">Info</span>
                                <span
                                    class="badge rounded-pill badge-soft-light border border-light text-dark">Light</span>
                                <span class="badge rounded-pill badge-soft-dark border border-dark">Dark</span>
                            </div>
                        </div> <!-- end card body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->


                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Badge Usage</h5>
                        </div><!-- end card header -->
                        <div class="card-body d-flex flex-wrap gap-4">
                            <button type="button" class="btn btn-primary btn-md position-relative">
                                Inbox
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">
                                    99+
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </button>
                            <button type="button" class="btn btn-primary btn-md position-relative">
                                Profile
                                <span
                                    class="position-absolute top-0 start-100 translate-middle p-1 bg-warning border border-light rounded-circle">
                                    <span class="visually-hidden">New alerts</span>
                                </span>
                            </button>
                            <button type="button" class="btn btn-primary btn-md btn-icon position-relative">
                                <i class="ti ti-chevron-left"></i>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle p-1 bg-warning border border-light rounded-circle">
                                    <span class="visually-hidden">New alerts</span>
                                </span>
                            </button>
                            <button type="button"
                                class="btn btn-light rounded-circle btn-md btn-icon position-relative">
                                <i class="ti ti-bell-filled  text-dark"></i>
                            </button>
                            <button type="button"
                                class="btn btn-light rounded-circle btn-md btn-icon position-relative">
                                <i class="ti ti-baseline-density-medium text-dark"></i>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle p-1 bg-warning border border-light rounded-circle">
                                    <span class="visually-hidden">New alerts</span>
                                </span>
                            </button>
                        </div> <!-- end card body -->
                    </div> <!-- end card -->

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Buttons With Badges </h5>
                        </div><!-- end card header -->
                        <div class="card-body d-flex flex-wrap gap-2">
                            <button type="button" class="btn btn-primary my-1 me-2">
                                Notifications <span class="badge ms-2 bg-secondary">3</span>
                            </button>
                            <button type="button" class="btn btn-secondary my-1 me-2">
                                Notifications <span class="badge ms-2 bg-white text-dark">24</span>
                            </button>
                            <button type="button" class="btn btn-success my-1 me-2">
                                Notifications <span class="badge ms-2 bg-danger">15</span>
                            </button>
                            <button type="button" class="btn btn-danger my-1 me-2">
                                Notifications <span class="badge ms-2 bg-white text-dark">24</span>
                            </button>
                            <button type="button" class="btn btn-warning my-1 me-2">
                                Notifications <span class="badge ms-2 bg-secondary">3</span>
                            </button>
                            <button type="button" class="btn btn-info my-1 me-2">
                                Notifications <span class="badge ms-2 bg-danger">15</span>
                            </button>
                        </div> <!-- end card body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->

                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Headings</h5>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <h1 class="mb-3">Example heading <span class="badge bg-primary">New</span></h1>
                            <h2 class="mb-3">Example heading <span class="badge bg-secondary">New</span></h2>
                            <h3 class="mb-3">Example heading <span class="badge bg-success">New</span></h3>
                            <h4 class="mb-3">Example heading <span class="badge bg-info">New</span></h4>
                            <h5 class="mb-3">Example heading <span class="badge bg-warning">New</span></h5>
                            <h6 class="mb-0">Example heading <span class="badge bg-danger">New</span></h6>
                        </div> <!-- end card body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->

            </div>

        </div>
    </div>
    <!-- /Page Wrapper -->

    <!-- ========================
        End Page Content
    ========================= -->

@endsection



