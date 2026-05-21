<?php $page="bus-seat-selection";?>
@extends('layout.mainlayout')
@section('content')

    <!-- ========================
        Start Page Content
    ========================= -->

    <!-- Breadcrumb -->
    <div class="breadcrumb-bar breadcrumb-bg-07 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title mb-2">Select Your Seats</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{url('index')}}"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item">Bus</li>
                            <li class="breadcrumb-item active" aria-current="page">Select Your Seats</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- Page Wrapper -->
    <div class="content content-two">
        <div class="container">
            <a href="{{url('bus-list')}}" class="fs-14 fw-medium d-inline-flex align-items-center gap-1 mb-4"><i class="isax isax-arrow-left4 fw-semibold"></i>Back to Bus List</a>
            <!-- start row -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="seat-content">
                                <div>
                                    <h2 class="fs-20 mb-1">Seat Layout</h2>
                                    <p>Click on a seat to select/deselect</p>
                                </div>
                                <div class="seat-selected-count">
                                    <span id="seatCounter">0/4</span>
                                </div>
                            </div>

                            <div class="seat-selected">
                                <div class="seat-count">
                                    <div class="seat bg-white border border-light"></div>
                                    <p>Available</p>
                                </div>
                                <div class="seat-count">
                                    <div class="seat bg-primary border-primary"></div>
                                    <p>Selected</p>
                                </div>
                                <div class="seat-count">
                                    <div class="seat bg-light border border-light"></div>
                                    <p>Booked</p>
                                </div>
                                <div class="seat-count">
                                    <div class="seat bg-white border border-pink"></div>
                                    <p>Female</p>
                                </div>
                            </div>

                            <div class="seat-booking">
                                <div class="d-flex align-items-center justify-content-end mb-4 pb-4 border-bottom end-item">
                                    <div class="driver-seat">Driver</div>
                                </div>
                                <div class="seat-layout" id="seatLayout"></div>
                                <div class="d-flex align-items-center justify-content-center mt-4 pt-4 border-top end-item">
                                    <a href="{{url('bus-booking')}}" class="btn btn-danger exit-btn">Emergency Exit</a>
                                </div>
                            </div>

                        </div>
                    </div> <!-- end card -->
                </div>
                <!-- end col -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h5>Booking Summary</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-3 pb-3 border-bottom">
                                <label class="mb-2">Selected Seats</label>
                                <div class="d-flex align-items-center gap-2">
                                    <button class="tag-btn">B3</button>
                                    <button class="tag-btn">B4</button>
                                    <button class="tag-btn">E1</button>
                                    <button class="tag-btn">E2</button>
                                </div>
                            </div>
                            <div class="mb-3 pb-3 border-bottom">
                                <p class="d-flex align-items-center justify-content-between gap-2 mb-3"> Price per seat: <span class="fw-medium text-dark">$65</span> </p>
                                <p class="d-flex align-items-center justify-content-between gap-2 mb-0"> Number of seats: <span class="fw-medium text-dark">4</span> </p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between fw-semibold text-dark mb-4">
                                Total Amount:  <span class="fs-20 text-primary">$260</span>
                            </div>
                            <a href="{{url('bus-booking')}}" class="btn btn-primary d-flex justify-content-center"> Continue to Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div>
    </div>
    <!-- /Page Wrapper -->

    <!-- ========================
        End Page Content
    ========================= -->

@endsection



