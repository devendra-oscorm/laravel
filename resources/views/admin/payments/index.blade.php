@extends('admin.layout')
@section('admin_title', 'Payments')

@section('content')
<div class="content">
    <div class="container">

        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show mb-3">
            <i class="ti ti-circle-check me-2"></i>{{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @endif
        @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show mb-3">
            <i class="ti ti-alert-circle me-2"></i>{{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @endif

        <!-- Stat Cards -->
        <div class="row mb-3">
            <div class="col-6 col-xl-2 mb-3">
                <div class="card shadow-none h-100">
                    <div class="card-body py-3">
                        <p class="text-muted fs-12 mb-1">Total</p>
                        <h5 class="mb-0">{{ $stats['total'] }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-6 col-xl-2 mb-3">
                <div class="card shadow-none h-100 border-success">
                    <div class="card-body py-3">
                        <p class="text-muted fs-12 mb-1">Captured</p>
                        <h5 class="mb-0 text-success">{{ $stats['captured'] }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-6 col-xl-2 mb-3">
                <div class="card shadow-none h-100 border-warning">
                    <div class="card-body py-3">
                        <p class="text-muted fs-12 mb-1">Pending</p>
                        <h5 class="mb-0 text-warning">{{ $stats['pending'] }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-6 col-xl-2 mb-3">
                <div class="card shadow-none h-100 border-danger">
                    <div class="card-body py-3">
                        <p class="text-muted fs-12 mb-1">Failed</p>
                        <h5 class="mb-0 text-danger">{{ $stats['failed'] }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-6 col-xl-2 mb-3">
                <div class="card shadow-none h-100" style="border-color:#e55353">
                    <div class="card-body py-3">
                        <p class="text-muted fs-12 mb-1"><i class="ti ti-flag text-danger me-1"></i>Flagged</p>
                        <h5 class="mb-0 text-danger">{{ $stats['flagged'] }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-6 col-xl-2 mb-3">
                <div class="card shadow-none h-100 border-primary">
                    <div class="card-body py-3">
                        <p class="text-muted fs-12 mb-1">Revenue</p>
                        <h5 class="mb-0 text-primary">₹{{ number_format($stats['revenue'], 0) }}</h5>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabs -->
        <ul class="nav nav-tabs mb-3" role="tablist">
            <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab-transactions" type="button">
                    <i class="ti ti-receipt me-1"></i>All Transactions
                </button>
            </li>
            <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-flagged" type="button">
                    <i class="ti ti-flag me-1"></i>Suspicious
                    @if($stats['flagged'] > 0)
                    <span class="badge bg-danger ms-1">{{ $stats['flagged'] }}</span>
                    @endif
                </button>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.refunds') }}" class="nav-link">
                    <i class="ti ti-refresh me-1"></i>Refunds
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.reconciliation') }}" class="nav-link">
                    <i class="ti ti-report-analytics me-1"></i>Reconciliation
                </a>
            </li>
        </ul>

        <div class="tab-content">

            <!-- All Transactions Tab -->
            <div class="tab-pane fade show active" id="tab-transactions">
                <div class="card shadow-none">
                    <!-- Filters -->
                    <div class="card-header bg-white border-bottom py-2">
                        <form method="GET" action="{{ route('admin.payments') }}">
                            <div class="row g-2 align-items-end">
                                <div class="col-md-2 ">
                                    <div class="input-icon">
                                        <span class="input-icon-addon"><i class="ti ti-search"></i></span>
                                        <input type="text" name="search" class="form-control form-control-sm"
                                               placeholder="Payment ID, name, email…"
                                               value="{{ request('search') }}">
                                    </div>
                                </div>
                                <div class="col-6 col-md-2">
                                    <select name="status" class="form-select form-select-sm">
                                        <option value="">All Status</option>
                                        @foreach(['captured','pending','failed','refunded','partially_refunded','flagged'] as $s)
                                        <option value="{{ $s }}" {{ request('status') === $s ? 'selected' : '' }}>
                                            {{ ucfirst(str_replace('_',' ',$s)) }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-6 col-md-2">
                                    <select name="gateway" class="form-select form-select-sm">
                                        <option value="">All Gateways</option>
                                        <option value="razorpay" {{ request('gateway') === 'razorpay' ? 'selected' : '' }}>Razorpay</option>
                                        <option value="payu" {{ request('gateway') === 'payu' ? 'selected' : '' }}>PayU</option>
                                    </select>
                                </div>
                                <div class="col-6 col-md-2">
                                    <select name="booking_type" class="form-select form-select-sm">
                                        <option value="">All Types</option>
                                        @foreach(['flight','hotel','bus','tour'] as $t)
                                        <option value="{{ $t }}" {{ request('booking_type') === $t ? 'selected' : '' }}>{{ ucfirst($t) }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-6 col-md-2">
                                    <div class="input-icon-end position-relative">
                                        <input type="text" name="date_from"
                                               class="form-control form-control-sm datetimepicker"
                                               placeholder="dd-mm-yyyy"
                                               value="{{ request('date_from') ? \Carbon\Carbon::parse(request('date_from'))->format('d-m-Y') : '' }}"
                                               autocomplete="off">
                                        <span class="input-icon-addon" style="pointer-events:none;">
                                            <i class="isax isax-calendar fs-14"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-6 col-md-2">
                                    <div class="input-icon-end position-relative">
                                        <input type="text" name="date_to"
                                               class="form-control form-control-sm datetimepicker"
                                               placeholder="dd-mm-yyyy"
                                               value="{{ request('date_to') ? \Carbon\Carbon::parse(request('date_to'))->format('d-m-Y') : '' }}"
                                               autocomplete="off">
                                        <span class="input-icon-addon" style="pointer-events:none;">
                                            <i class="isax isax-calendar fs-14"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-1 d-flex gap-1">
                                    <button type="submit" class="btn btn-primary btn-sm flex-fill">
                                        <i class="ti ti-filter"></i>
                                    </button>
                                    <a href="{{ route('admin.payments') }}" class="btn btn-light btn-sm flex-fill">
                                        <i class="ti ti-x"></i>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover table-sm mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Txn ID</th>
                                        <th>Customer</th>
                                        <th>Booking</th>
                                        <th>Gateway</th>
                                        <th>Method</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th class="text-end">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($transactions as $txn)
                                    <tr class="{{ $txn->is_suspicious ? 'table-warning' : '' }}">
                                        <td>
                                            <a href="{{ route('admin.payments.show', $txn) }}" class="text-primary fw-medium">
                                                #{{ $txn->id }}
                                            </a>
                                            @if($txn->gateway_payment_id)
                                            <div class="text-muted fs-11">{{ Str::limit($txn->gateway_payment_id, 18) }}</div>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="fw-medium">{{ $txn->customer_name ?? ($txn->user?->name ?? '—') }}</div>
                                            <div class="text-muted fs-11">{{ $txn->customer_email ?? ($txn->user?->email ?? '') }}</div>
                                        </td>
                                        <td>
                                            @if($txn->booking_type)
                                            <span class="badge badge-soft-secondary">{{ ucfirst($txn->booking_type) }}</span>
                                            @endif
                                            @if($txn->booking_id)
                                            <div class="text-muted fs-11">#{{ $txn->booking_id }}</div>
                                            @endif
                                        </td>
                                        <td>
                                            <span class="badge badge-soft-{{ $txn->gateway === 'razorpay' ? 'primary' : 'info' }}">
                                                {{ ucfirst($txn->gateway) }}
                                            </span>
                                        </td>
                                        <td class="text-muted">{{ ucfirst($txn->payment_method ?? '—') }}</td>
                                        <td class="fw-medium">₹{{ number_format($txn->amount, 2) }}</td>
                                        <td>{!! $txn->statusBadge() !!}</td>
                                        <td class="text-muted fs-12">{{ $txn->created_at->format('d M Y, h:i A') }}</td>
                                        <td class="text-end">
                                            <div class="d-flex gap-1 justify-content-end">
                                                <a href="{{ route('admin.payments.show', $txn) }}"
                                                   class="btn btn-sm btn-light" title="View">
                                                    <i class="ti ti-eye"></i>
                                                </a>
                                                @if(in_array($txn->status, ['captured','partially_refunded']))
                                                <button type="button" class="btn btn-sm btn-outline-info"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#refundModal{{ $txn->id }}"
                                                        title="Initiate Refund">
                                                    <i class="ti ti-refresh"></i>
                                                </button>
                                                @endif
                                                <button type="button" class="btn btn-sm {{ $txn->is_suspicious ? 'btn-danger' : 'btn-outline-danger' }}"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#flagModal{{ $txn->id }}"
                                                        title="{{ $txn->is_suspicious ? 'Remove Flag' : 'Flag as Suspicious' }}">
                                                    <i class="ti ti-flag"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    {{-- Refund Modal --}}
                                    <div class="modal fade" id="refundModal{{ $txn->id }}" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header border-bottom py-2">
                                                    <h6 class="modal-title">Initiate Refund — #{{ $txn->id }}</h6>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <form action="{{ route('admin.payments.refund', $txn) }}" method="POST">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="mb-3 p-2 bg-light rounded d-flex justify-content-between">
                                                            <span class="text-muted fs-13">Paid Amount</span>
                                                            <span class="fw-semibold">₹{{ number_format($txn->amount, 2) }}</span>
                                                        </div>
                                                        @php $alreadyRefunded = $txn->totalRefunded(); @endphp
                                                        @if($alreadyRefunded > 0)
                                                        <div class="mb-3 p-2 bg-light rounded d-flex justify-content-between">
                                                            <span class="text-muted fs-13">Already Refunded</span>
                                                            <span class="text-warning fw-semibold">₹{{ number_format($alreadyRefunded, 2) }}</span>
                                                        </div>
                                                        @endif
                                                        <div class="mb-3">
                                                            <label class="form-label fs-13">Refund Amount (₹) <span class="text-danger">*</span></label>
                                                            <input type="number" name="amount" class="form-control form-control-sm"
                                                                   max="{{ $txn->amount - $alreadyRefunded }}"
                                                                   step="0.01" min="0.01" required
                                                                   value="{{ $txn->amount - $alreadyRefunded }}">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label fs-13">Reason <span class="text-danger">*</span></label>
                                                            <select name="reason" class="form-select form-select-sm" required>
                                                                <option value="">Select reason</option>
                                                                <option>Customer request</option>
                                                                <option>Booking cancelled</option>
                                                                <option>Duplicate payment</option>
                                                                <option>Service not provided</option>
                                                                <option>Technical error</option>
                                                                <option>Other</option>
                                                            </select>
                                                        </div>
                                                        <div>
                                                            <label class="form-label fs-13">Notes</label>
                                                            <textarea name="notes" class="form-control form-control-sm" rows="2" placeholder="Optional notes"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer border-top py-2">
                                                        <button type="button" class="btn btn-light btn-sm" data-bs-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-info btn-sm">
                                                            <i class="ti ti-refresh me-1"></i>Initiate Refund
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Flag Modal --}}
                                    <div class="modal fade" id="flagModal{{ $txn->id }}" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header border-bottom py-2">
                                                    <h6 class="modal-title">
                                                        {{ $txn->is_suspicious ? 'Remove Flag' : 'Flag as Suspicious' }} — #{{ $txn->id }}
                                                    </h6>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <form action="{{ route('admin.payments.flag', $txn) }}" method="POST">
                                                    @csrf
                                                    <div class="modal-body">
                                                        @if($txn->is_suspicious)
                                                        <div class="alert alert-warning mb-3">
                                                            <i class="ti ti-flag me-2"></i>
                                                            <strong>Currently Flagged:</strong> {{ $txn->suspicious_reason }}
                                                        </div>
                                                        <p class="text-muted fs-13">Click confirm to remove the suspicious flag.</p>
                                                        @else
                                                        <div class="mb-3">
                                                            <label class="form-label fs-13">Reason for flagging</label>
                                                            <textarea name="reason" class="form-control form-control-sm" rows="3"
                                                                      placeholder="Why is this transaction suspicious?"></textarea>
                                                        </div>
                                                        @endif
                                                    </div>
                                                    <div class="modal-footer border-top py-2">
                                                        <button type="button" class="btn btn-light btn-sm" data-bs-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-danger btn-sm">
                                                            <i class="ti ti-flag me-1"></i>{{ $txn->is_suspicious ? 'Remove Flag' : 'Flag Transaction' }}
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    @empty
                                    <tr>
                                        <td colspan="9" class="text-center py-5">
                                            <div class="text-muted">
                                                <i class="ti ti-receipt fs-1 mb-2 d-block"></i>
                                                <p>No transactions found</p>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @if($transactions->hasPages())
                    <div class="card-footer bg-white border-top py-2">
                        {{ $transactions->links() }}
                    </div>
                    @endif
                </div>
            </div>

            <!-- Suspicious Tab -->
            <div class="tab-pane fade" id="tab-flagged">
                <div class="card shadow-none">
                    <div class="card-header bg-white border-bottom py-2">
                        <h6 class="mb-0 text-danger"><i class="ti ti-flag me-2"></i>Suspicious / Flagged Transactions</h6>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover table-sm mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Txn ID</th>
                                        <th>Customer</th>
                                        <th>Amount</th>
                                        <th>Reason</th>
                                        <th>Gateway</th>
                                        <th>Flagged At</th>
                                        <th class="text-end">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $flagged = \App\Models\Transaction::where('is_suspicious', true)->latest()->get();
                                    @endphp
                                    @forelse($flagged as $txn)
                                    <tr class="table-warning">
                                        <td>
                                            <a href="{{ route('admin.payments.show', $txn) }}" class="text-primary fw-medium">#{{ $txn->id }}</a>
                                        </td>
                                        <td>{{ $txn->customer_name ?? $txn->user?->name ?? '—' }}</td>
                                        <td class="fw-medium">₹{{ number_format($txn->amount, 2) }}</td>
                                        <td><span class="text-danger fs-12">{{ $txn->suspicious_reason ?? 'Not specified' }}</span></td>
                                        <td><span class="badge badge-soft-primary">{{ ucfirst($txn->gateway) }}</span></td>
                                        <td class="text-muted fs-12">{{ $txn->updated_at->format('d M Y') }}</td>
                                        <td class="text-end">
                                            <div class="d-flex gap-1 justify-content-end">
                                                <a href="{{ route('admin.payments.show', $txn) }}" class="btn btn-sm btn-light">
                                                    <i class="ti ti-eye"></i>
                                                </a>
                                                <form action="{{ route('admin.payments.flag', $txn) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    <button type="submit" class="btn btn-sm btn-success" title="Remove Flag">
                                                        <i class="ti ti-flag-off"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="7" class="text-center py-4 text-muted">
                                            <i class="ti ti-shield-check fs-1 mb-2 d-block text-success"></i>
                                            No suspicious transactions found.
                                        </td>
                                    </tr>
                                    @endforelse
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
