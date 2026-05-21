<?php $page="pricing-plan-2";?>
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
                    <h2 class="breadcrumb-title mb-2">Pricing Plan</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{url('index')}}"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item">Pages</li>
                            <li class="breadcrumb-item active" aria-current="page">Pricing Plan</li>
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
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="header-section text-center mb-4">
                        <h2 class="mb-2">Choose Your Perfect Travel Package</h2>
                        <p>Choose flexible one-time, monthly, or annual travel plans for uninterrupted access to exclusive deals on flights, hotels, and tours</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="place-nav pricing-plan-tab">
                    <div class="nav justify-content-center">
                        <div class="tab-btn d-flex align-items-center">
                            <div>
                                <a href="#" class="nav-link active" data-bs-toggle="tab" data-bs-target="#pricing-list-01">
									Monthly
								</a>
                            </div>
                            <div>
                                <a href="#" class="nav-link" data-bs-toggle="tab" data-bs-target="#pricing-list-02">
									Yearly
								</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content">

                    <!-- Pricing Plan List -->
                    <div class="tab-pane fade active show" id="pricing-list-01">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive  pt-3">
                                    <table class="table pricing-table">

                                        <!-- Plans Header -->
                                        <thead>
                                            <tr>
                                                <th class="text-start"></th>
                                                <th>
                                                    <div class="pricing-plan">
                                                        <div class="pricing-head">
                                                            <div class="pricing-contet">
                                                                <h6 class="fw-bold">Basic Plan</h6>
                                                                <p>For casual travelers who just need simple bookings.</p>
                                                                <h4 class="fw-bold">$99 <span class="text-muted">/ monthly</span></h4>
                                                            </div>

                                                            <a href="#" class="btn btn-dark mt-2 w-100">Choose Plan <i class="isax isax-arrow-right-3 ms-1"></i></a>
                                                        </div>
                                                    </div>
                                                </th>
                                                <th class="position-relative">
                                                    <div class="pricing-plan">
                                                        <div class="pricing-head">
                                                            <div class="pricing-contet">
                                                                <h6 class="fw-bold">Premium Plan</h6>
                                                                <p>For casual travelers who just need simple bookings.</p>
                                                                <h4 class="fw-bold">$199 <span class="text-muted">/ monthly</span></h4>
                                                            </div>

                                                            <a href="#" class="btn btn-dark mt-2 w-100">Choose Plan <i class="isax isax-arrow-right-3 ms-1"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="recommeded-set">
                                                        <span>Recommended</span>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="pricing-plan">
                                                        <div class="pricing-head">
                                                            <div class="pricing-contet">
                                                                <h6 class="fw-bold">Business Plan</h6>
                                                                <p>Tailored for business travelers with high demands.</p>
                                                                <h4 class="fw-bold">$299 <span class="text-muted">/ monthly</span></h4>
                                                            </div>
                                                            <a href="#" class="btn btn-dark mt-2 w-100">Choose Plan <i class="isax isax-arrow-right-3 ms-1"></i></a>
                                                        </div>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            <!-- Overview Section -->
                                            <tr class="table-secondary">
                                                <td colspan="4" class="text-start fw-bold">Overview</td>
                                            </tr>

                                            <tr>
                                                <td class="text-start">Build for industry</td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                            </tr>

                                            <tr>
                                                <td class="text-start">Stakeholders</td>
                                                <td><span class="pricing-cross"><i class="isax isax-close-circle5 text-danger"></i></span></td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                            </tr>

                                            <tr>
                                                <td class="text-start">Pricing option</td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                            </tr>

                                            <tr>
                                                <td class="text-start">Project module</td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                            </tr>

                                            <tr>
                                                <td class="text-start">Mobile App Ready</td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                            </tr>

                                            <tr>
                                                <td class="text-start">Unlimited users</td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                            </tr>

                                            <!-- Experience & Support -->
                                            <tr class="table-secondary">
                                                <td colspan="4" class="text-start bg-white pt-3 fw-bold">Experience & Support</td>
                                            </tr>

                                            <tr>
                                                <td class="text-start">Professional tool path</td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                            </tr>

                                            <tr>
                                                <td class="text-start">Integration Support</td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                            </tr>

                                            <tr>
                                                <td class="text-start">Customization</td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                            </tr>

                                            <tr>
                                                <td class="text-start">24/7 Support</td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                            </tr>

                                            <tr>
                                                <td class="text-start">Free updates</td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /Pricing Plan List -->

                    <!-- Pricing Plan List -->
                    <div class="tab-pane fade " id="pricing-list-02">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive  pt-3">
                                    <table class="table pricing-table">

                                        <!-- Plans Header -->
                                        <thead>
                                            <tr>
                                                <th class="text-start"></th>
                                                <th>
                                                    <div class="pricing-plan">
                                                        <div class="pricing-head">
                                                            <div class="pricing-contet">
                                                                <h6 class="fw-bold">Basic Plan</h6>
                                                                <p>For casual travelers who just need simple bookings.</p>
                                                                <h4 class="fw-bold">$499 <span class="text-muted">/ yearly</span></h4>
                                                            </div>

                                                            <a href="#" class="btn btn-dark mt-2 w-100">Choose Plan <i class="isax isax-arrow-right-3 ms-1"></i></a>
                                                        </div>
                                                    </div>
                                                </th>
                                                <th class="position-relative">
                                                    <div class="pricing-plan">
                                                        <div class="pricing-head">
                                                            <div class="pricing-contet">
                                                                <h6 class="fw-bold">Premium Plan</h6>
                                                                <p>For casual travelers who just need simple bookings.</p>
                                                                <h4 class="fw-bold">$799 <span class="text-muted">/ yearly</span></h4>
                                                            </div>

                                                            <a href="#" class="btn btn-dark mt-2 w-100">Choose Plan <i class="isax isax-arrow-right-3 ms-1"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="recommeded-set">
                                                        <span>Recommended</span>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="pricing-plan">
                                                        <div class="pricing-head">
                                                            <div class="pricing-contet">
                                                                <h6 class="fw-bold">Business Plan</h6>
                                                                <p>Tailored for business travelers with high demands.</p>
                                                                <h4 class="fw-bold">$999 <span class="text-muted">/ yearly</span></h4>
                                                            </div>
                                                            <a href="#" class="btn btn-dark mt-2 w-100">Choose Plan <i class="isax isax-arrow-right-3 ms-1"></i></a>
                                                        </div>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            <!-- Overview Section -->
                                            <tr class="table-secondary">
                                                <td colspan="4" class="text-start fw-bold">Overview</td>
                                            </tr>

                                            <tr>
                                                <td class="text-start">Build for industry</td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                            </tr>

                                            <tr>
                                                <td class="text-start">Stakeholders</td>
                                                <td><span class="pricing-cross"><i class="isax isax-close-circle5 text-danger"></i></span></td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                            </tr>

                                            <tr>
                                                <td class="text-start">Pricing option</td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                            </tr>

                                            <tr>
                                                <td class="text-start">Project module</td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                            </tr>

                                            <tr>
                                                <td class="text-start">Mobile App Ready</td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                            </tr>

                                            <tr>
                                                <td class="text-start">Unlimited users</td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                            </tr>

                                            <!-- Experience & Support -->
                                            <tr class="table-secondary">
                                                <td colspan="4" class="text-start bg-white pt-3 fw-bold">Experience & Support</td>
                                            </tr>

                                            <tr>
                                                <td class="text-start">Professional tool path</td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                            </tr>

                                            <tr>
                                                <td class="text-start">Integration Support</td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                            </tr>

                                            <tr>
                                                <td class="text-start">Customization</td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                            </tr>

                                            <tr>
                                                <td class="text-start">24/7 Support</td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                            </tr>

                                            <tr>
                                                <td class="text-start">Free updates</td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                                <td><span class="pricing-check"><i class="isax isax-tick-circle5 text-success"></i></span></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Pricing Plan List -->

                </div>
            </div>

        </div>
    </div>
    <!-- /Page Wrapper -->

    <!-- ========================
        End Page Content
    ========================= -->

@endsection



