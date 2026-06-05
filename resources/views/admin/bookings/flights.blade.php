@extends('admin.layout')
@section('admin_title', 'Flight Bookings')

@section('content')

 <div class="content">
     <div class="container">
    <div class="row">
            <div class=" col-12">
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
                                        <td><i class="isax isax-airplane5 text-primary me-1"></i>Flight</td>
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
                                        <td><i class="isax isax-airplane5 text-primary me-1"></i>Flight</td>
                                        <td>₹6,500</td>
                                        <td><span class="badge badge-soft-danger">Cancelled</span></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">#BK1238</td>
                                        <td>David Lee</td>
                                        <td><i class="isax isax-airplane5 text-primary me-1"></i>Flight</td>
                                        <td>₹10,750</td>
                                        <td><span class="badge badge-soft-success">Confirmed</span></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">#BK1239</td>
                                        <td>Lisa Brown</td>
                                        <td><i class="isax isax-airplane5 text-primary me-1"></i>Flight</td>
                                        <td>₹14,300</td>
                                        <td><span class="badge badge-soft-warning">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">#BK1240</td>
                                        <td>Tom Davis</td>
                                        <td><i class="isax isax-airplane5 text-primary me-1"></i>Flight</td>
                                        <td>₹9,200</td>
                                        <td><span class="badge badge-soft-success">Confirmed</span></td>
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

     </div>
     </div>
        </div>
@endsection
