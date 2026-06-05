@extends('admin.layout')
@section('admin_title', 'Dashboard')

@section('content')
<div class="content">
    <div class="container">

        <!-- Welcome Card -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card shadow-none border-0" style="background: danger;">
                    <div class="card-body p-4 text-dark">
                        <h4 class="text-dark mb-2 d-flex align-items-center">
                            Welcome back, {{ auth()->user()->name }}
                            <i class="fas fa-user-shield ms-2 text-primary me-2"></i>
                        </h4>

                        <p class="mb-0 opacity-75">
                            Here's what's happening with your platform today.
                        </p>
                       </div>

                </div>
            </div>
        </div>

        <!-- Real-time Overview Stats -->
        <div class="row mb-4">
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card shadow-none">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <p class="text-muted mb-1">Total Bookings</p>
                                <h3 class="mb-0">1,245</h3>
                            </div>
                            <span class="avatar avatar-md rounded-circle bg-primary-transparent">
                                <i class="isax isax-ticket5 fs-20 text-primary"></i>
                            </span>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="badge badge-soft-success me-2">
                                <i class="isax isax-arrow-up-2 me-1"></i>12.5%
                            </span>
                            <span class="text-muted fs-13">vs last month</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card shadow-none">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <p class="text-muted mb-1">Revenue</p>
                                <h3 class="mb-0">₹8.4L</h3>
                            </div>
                            <span class="avatar avatar-md rounded-circle bg-success-transparent">
                                <i class="isax isax-wallet-35 fs-20 text-success"></i>
                            </span>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="badge badge-soft-success me-2">
                                <i class="isax isax-arrow-up-2 me-1"></i>23.1%
                            </span>
                            <span class="text-muted fs-13">vs last month</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card shadow-none">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <p class="text-muted mb-1">Active Users</p>
                                <h3 class="mb-0">2,847</h3>
                            </div>
                            <span class="avatar avatar-md rounded-circle bg-info-transparent">
                                <i class="isax isax-profile-2user5 fs-20 text-info"></i>
                            </span>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="badge badge-soft-success me-2">
                                <i class="isax isax-arrow-up-2 me-1"></i>8.3%
                            </span>
                            <span class="text-muted fs-13">vs last month</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card shadow-none">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <p class="text-muted mb-1">Pending Payments</p>
                                <h3 class="mb-0">₹1.2L</h3>
                            </div>
                            <span class="avatar avatar-md rounded-circle bg-warning-transparent">
                                <i class="isax isax-card5 fs-20 text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="badge badge-soft-danger me-2">
                                <i class="isax isax-arrow-down-2 me-1"></i>4.2%
                            </span>
                            <span class="text-muted fs-13">vs last month</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Revenue Chart & Top Routes -->
        <div class="row mb-4">
            <div class="col-lg-8 mb-3">
                <div class="card shadow-none">
                    <div class="card-header bg-white border-bottom d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">Revenue Overview</h6>
                        <div class="btn-group btn-group-sm" role="group">
                            <button type="button" class="btn btn-outline-secondary">Daily</button>
                            <button type="button" class="btn btn-primary">Weekly</button>
                            <button type="button" class="btn btn-outline-secondary">Monthly</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="text-center py-5">
                            <i class="isax isax-chart-25 fs-1 text-primary mb-3"></i>
                            <p class="text-muted">Revenue chart will be displayed here</p>
                            <small class="text-muted">Integration with Chart.js or ApexCharts needed</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-3">
                <div class="card shadow-none">
                    <div class="card-header bg-white border-bottom">
                        <h6 class="mb-0">Top Routes</h6>
                    </div>
                    <div class="card-body p-0">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <i class="isax isax-airplane5 me-2 text-primary"></i>
                                    <span class="fw-medium">Delhi → Mumbai</span>
                                </div>
                                <span class="badge bg-primary-transparent text-primary">342</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <i class="isax isax-airplane5 me-2 text-primary"></i>
                                    <span class="fw-medium">Bangalore → Goa</span>
                                </div>
                                <span class="badge bg-primary-transparent text-primary">287</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <i class="isax isax-airplane5 me-2 text-primary"></i>
                                    <span class="fw-medium">Chennai → Kolkata</span>
                                </div>
                                <span class="badge bg-primary-transparent text-primary">215</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <i class="isax isax-airplane5 me-2 text-primary"></i>
                                    <span class="fw-medium">Hyderabad → Dubai</span>
                                </div>
                                <span class="badge bg-primary-transparent text-primary">198</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <i class="isax isax-airplane5 me-2 text-primary"></i>
                                    <span class="fw-medium">Pune → Delhi</span>
                                </div>
                                <span class="badge bg-primary-transparent text-primary">176</span>
                            </li>
                              <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <i class="isax isax-airplane5 me-2 text-primary"></i>
                                    <span class="fw-medium">Lucknow → Delhi</span>
                                </div>
                                <span class="badge bg-primary-transparent text-primary">116</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Activity & Quick Actions -->
        <div class="row">
            <div class="col-lg-6 mb-3">
                <div class="card shadow-none">
                    <div class="card-header bg-white border-bottom">
                        <h6 class="mb-0">Recent Bookings</h6>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Booking ID</th>
                                        <th>User</th>
                                        <th>Type</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="fw-medium">#BK1234</td>
                                        <td>John Doe</td>
                                        <td><i class="isax isax-airplane5 text-primary me-1"></i>Flight</td>
                                        <td>₹12,450</td>
                                        <td><span class="badge badge-soft-success">Confirmed</span></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">#BK1235</td>
                                        <td>Jane Smith</td>
                                        <td><i class="isax isax-building-35 text-info me-1"></i>Hotel</td>
                                        <td>₹8,900</td>
                                        <td><span class="badge badge-soft-warning">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">#BK1236</td>
                                        <td>Mike Wilson</td>
                                        <td><i class="isax isax-airplane5 text-primary me-1"></i>Flight</td>
                                        <td>₹15,200</td>
                                        <td><span class="badge badge-soft-success">Confirmed</span></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">#BK1237</td>
                                        <td>Sarah Johnson</td>
                                        <td><i class="isax isax-building-35 text-info me-1"></i>Hotel</td>
                                        <td>₹6,500</td>
                                        <td><span class="badge badge-soft-danger">Cancelled</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer bg-white text-center border-top">
                        <a href="{{ route('admin.bookings.flights') }}" class="text-primary fw-medium">
                            View All Bookings <i class="isax isax-arrow-right-3 ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-3">
                <div class="card shadow-none">
                    <div class="card-header bg-white border-bottom">
                        <h6 class="mb-0">Quick Actions</h6>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-6">
                                <a href="{{ route('admin.promo-codes') }}" class="btn btn-light w-100 d-flex flex-column align-items-center p-3">
                                    <i class="isax isax-ticket-25 fs-1 text-primary mb-2"></i>
                                    <span class="fw-medium">Create Promo Code</span>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="{{ route('admin.banners') }}" class="btn btn-light w-100 d-flex flex-column align-items-center p-3">
                                    <i class="isax isax-image5 fs-1 text-success mb-2"></i>
                                    <span class="fw-medium">Manage Banners</span>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="{{ route('blogs.create') }}" class="btn btn-light w-100 d-flex flex-column align-items-center p-3">
                                    <i class="isax isax-document-text5 fs-1 text-info mb-2"></i>
                                    <span class="fw-medium">Write Blog Post</span>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="{{ route('admin.configuration') }}" class="btn btn-light w-100 d-flex flex-column align-items-center p-3">
                                    <i class="isax isax-setting-45 fs-1 text-warning mb-2"></i>
                                    <span class="fw-medium">Configuration</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow-none mt-3">
                    <div class="card-header bg-white border-bottom">
                        <h6 class="mb-0">System Stats</h6>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <div class="d-flex justify-content-between mb-1">
                                <span class="text-muted fs-14">Booking Conversion</span>
                                <span class="fw-medium">68%</span>
                            </div>
                            <div class="progress" style="height: 6px;">
                                <div class="progress-bar bg-success" style="width: 68%"></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between mb-1">
                                <span class="text-muted fs-14">Payment Success Rate</span>
                                <span class="fw-medium">92%</span>
                            </div>
                            <div class="progress" style="height: 6px;">
                                <div class="progress-bar bg-primary" style="width: 92%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex justify-content-between mb-1">
                                <span class="text-muted fs-14">User Satisfaction</span>
                                <span class="fw-medium">85%</span>
                            </div>
                            <div class="progress" style="height: 6px;">
                                <div class="progress-bar bg-info" style="width: 85%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection