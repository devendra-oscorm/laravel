@extends('admin.layout')
@section('admin_title', 'Configuration')

@section('content')
<div class="content">
    <div class="container">
        
        <!-- Tabs Navigation -->
        <ul class="nav nav-tabs mb-4" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="banners-tab" data-bs-toggle="tab" data-bs-target="#banners-content" type="button" role="tab">
                    <i class="isax isax-image5 me-2"></i>Banners & Content
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="fees-tab" data-bs-toggle="tab" data-bs-target="#fees-content" type="button" role="tab">
                    <i class="isax isax-card5 me-2"></i>Fees & Charges
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="policies-tab" data-bs-toggle="tab" data-bs-target="#policies-content" type="button" role="tab">
                    <i class="isax isax-document-text5 me-2"></i>Policies
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="routes-tab" data-bs-toggle="tab" data-bs-target="#routes-content" type="button" role="tab">
                    <i class="isax isax-location5 me-2"></i>Cities & Routes
                </button>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content">
            
            <!-- Banners Tab -->
            <div class="tab-pane fade show active" id="banners-content" role="tabpanel">
                <div class="card shadow-none">
                    <div class="card-header bg-white border-bottom d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">Homepage Banners & Promotional Content</h6>
                        <button class="btn btn-primary btn-sm">
                            <i class="isax isax-add-circle5 me-1"></i>Add Banner
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="border rounded p-3">
                                    <img src="https://via.placeholder.com/600x300" class="img-fluid rounded mb-3" alt="Banner">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="mb-1">Main Homepage Banner</h6>
                                            <p class="text-muted fs-13 mb-0">1920x600px</p>
                                        </div>
                                        <div class="d-flex gap-2">
                                            <button class="btn btn-sm btn-light">
                                                <i class="isax isax-edit-25"></i>
                                            </button>
                                            <button class="btn btn-sm btn-danger">
                                                <i class="isax isax-trash5"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="border rounded p-3">
                                    <img src="https://via.placeholder.com/600x300" class="img-fluid rounded mb-3" alt="Banner">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="mb-1">Promotional Banner</h6>
                                            <p class="text-muted fs-13 mb-0">1920x400px</p>
                                        </div>
                                        <div class="d-flex gap-2">
                                            <button class="btn btn-sm btn-light">
                                                <i class="isax isax-edit-25"></i>
                                            </button>
                                            <button class="btn btn-sm btn-danger">
                                                <i class="isax isax-trash5"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fees Tab -->
            <div class="tab-pane fade" id="fees-content" role="tabpanel">
                <div class="card shadow-none">
                    <div class="card-header bg-white border-bottom">
                        <h6 class="mb-0">Service Fees & Convenience Charges</h6>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Flight Booking Fee (%)</label>
                                    <input type="number" class="form-control" value="2.5" step="0.1">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Hotel Booking Fee (%)</label>
                                    <input type="number" class="form-control" value="3.0" step="0.1">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Convenience Charge (₹)</label>
                                    <input type="number" class="form-control" value="99">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Payment Gateway Charges (%)</label>
                                    <input type="number" class="form-control" value="2.0" step="0.1">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                <i class="isax isax-save-25 me-1"></i>Save Changes
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Policies Tab -->
            <div class="tab-pane fade" id="policies-content" role="tabpanel">
                <div class="card shadow-none">
                    <div class="card-header bg-white border-bottom">
                        <h6 class="mb-0">Baggage & Cancellation Policies</h6>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-4">
                                <label class="form-label fw-medium">Baggage Policy</label>
                                <textarea class="form-control" rows="5" placeholder="Enter baggage policy text...">Standard baggage allowance: 15kg check-in + 7kg cabin bag. Additional charges apply for excess baggage.</textarea>
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-medium">Cancellation Policy</label>
                                <textarea class="form-control" rows="5" placeholder="Enter cancellation policy text...">Free cancellation up to 24 hours before departure. 50% refund for cancellations between 24-48 hours. No refund for cancellations within 24 hours.</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                <i class="isax isax-save-25 me-1"></i>Save Policies
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Routes Tab -->
            <div class="tab-pane fade" id="routes-content" role="tabpanel">
                <div class="card shadow-none">
                    <div class="card-header bg-white border-bottom d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">Supported Cities & Featured Routes</h6>
                        <button class="btn btn-primary btn-sm">
                            <i class="isax isax-add-circle5 me-1"></i>Add Route
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-light">
                                    <tr>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>Featured</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Delhi</td>
                                        <td>Mumbai</td>
                                        <td><span class="badge badge-soft-success">Yes</span></td>
                                        <td><span class="badge badge-soft-success">Active</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-light me-1">
                                                <i class="isax isax-edit-25"></i>
                                            </button>
                                            <button class="btn btn-sm btn-danger">
                                                <i class="isax isax-trash5"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Bangalore</td>
                                        <td>Goa</td>
                                        <td><span class="badge badge-soft-success">Yes</span></td>
                                        <td><span class="badge badge-soft-success">Active</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-light me-1">
                                                <i class="isax isax-edit-25"></i>
                                            </button>
                                            <button class="btn btn-sm btn-danger">
                                                <i class="isax isax-trash5"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Chennai</td>
                                        <td>Kolkata</td>
                                        <td><span class="badge badge-soft-secondary">No</span></td>
                                        <td><span class="badge badge-soft-success">Active</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-light me-1">
                                                <i class="isax isax-edit-25"></i>
                                            </button>
                                            <button class="btn btn-sm btn-danger">
                                                <i class="isax isax-trash5"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
