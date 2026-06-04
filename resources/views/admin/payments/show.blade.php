@extends('admin.layout')
@section('admin_title', 'Transaction #' . $transaction->id)

@section('content')
<div class="content">
    <div class="container">

        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show mb-3">
            <i class="ti ti-circle-check me-2"></i>{{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @endif

        <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
            <div>
                <a href="{{ route('admin.payments') }}" class="btn btn-light btn-sm me-2">
                    <i class="ti ti-arrow-left me-1"></i>Back
                </a>
                <span class="fw-semibold fs-16">Transaction #{{ $transaction->id }}</span>
            </div>
            <div class="d-flex gap-2">
                {!! $transaction->statusBadge() !!}
                @if($transaction->is_suspicious)
                <span class="badge badge-soft-danger"><i class="ti ti-flag me-1"></i>Suspicious</span>
                @endif
            </div>
        </div>

        <div class="row g-3">

            <!-- Left: Transaction Info -->
            <div class="col-lg-8">

                <!-- Core Details -->
                <div class="card shadow-none mb-3">
                    <div class="card-header bg-white border-bottom py-2 d-flex align-items-center gap-2">
                        <span class="avatar avatar-sm rounded bg-primary-transparent">
                            <i class="ti ti-receipt text-primary"></i>
                        </span>
                        <h6 class="mb-0">Transaction Details</h6>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <table class="table table-sm table-borderless mb-0">
                                    <tr>
                                        <td class="text-muted fs-13 py-1">Gateway</td>
                                        <td class="fw-medium fs-13 py-1">
                                            <span class="badge badge-soft-primary">{{ ucfirst($transaction->gateway) }}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted fs-13 py-1">Order ID</td>
                                        <td class="fs-13 py-1"><code>{{ $transaction->gateway_order_id ?? '—' }}</code></td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted fs-13 py-1">Payment ID</td>
                                        <td class="fs-13 py-1"><code>{{ $transaction->gateway_payment_id ?? '—' }}</code></td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted fs-13 py-1">Method</td>
                                        <td class="fs-13 py-1">{{ ucfirst($transaction->payment_method ?? '—') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted fs-13 py-1">Booking Type</td>
                                        <td class="fs-13 py-1">{{ ucfirst($transaction->booking_type ?? '—') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted fs-13 py-1">Booking Ref</td>
                                        <td class="fs-13 py-1">{{ $transaction->booking_id ?? '—' }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <table class="table table-sm table-borderless mb-0">
                                    <tr>
                                        <td class="text-muted fs-13 py-1">Amount</td>
                                        <td class="fw-semibold fs-13 py-1 text-primary">
                                            {{ $transaction->currency }} {{ number_format($transaction->amount, 2) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted fs-13 py-1">Gateway Fee</td>
                                        <td class="fs-13 py-1 text-danger">— {{ number_format($transaction->gateway_fee, 2) }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted fs-13 py-1">Tax</td>
                                        <td class="fs-13 py-1">{{ number_format($transaction->tax_amount, 2) }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted fs-13 py-1">Net Amount</td>
                                        <td class="fw-semibold fs-13 py-1 text-success">{{ number_format($transaction->net_amount, 2) }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted fs-13 py-1">Created At</td>
                                        <td class="fs-13 py-1">{{ $transaction->created_at->format('d M Y, h:i A') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted fs-13 py-1">Reconciled</td>
                                        <td class="fs-13 py-1">
                                            @if($transaction->is_reconciled)
                                            <span class="badge badge-soft-success">Yes — {{ $transaction->reconciled_at?->format('d M Y') }}</span>
                                            @else
                                            <span class="badge badge-soft-warning">No</span>
                                            @endif
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Refund History -->
                <div class="card shadow-none mb-3">
                    <div class="card-header bg-white border-bottom py-2 d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center gap-2">
                            <span class="avatar avatar-sm rounded bg-info-transparent">
                                <i class="ti ti-refresh text-info"></i>
                            </span>
                            <h6 class="mb-0">Refund History</h6>
                        </div>
                        @if(in_array($transaction->status, ['captured','partially_refunded']))
                        <button class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#refundModal">
                            <i class="ti ti-plus me-1"></i>New Refund
                        </button>
                        @endif
                    </div>
                    <div class="card-body p-0">
                        @if($transaction->refunds->count())
                        <div class="table-responsive">
                            <table class="table table-sm mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Amount</th>
                                        <th>Reason</th>
                                        <th>Status</th>
                                        <th>By</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($transaction->refunds as $refund)
                                    <tr>
                                        <td>{{ $refund->id }}</td>
                                        <td class="fw-medium text-danger">₹{{ number_format($refund->amount, 2) }}</td>
                                        <td class="text-muted fs-12">{{ $refund->reason ?? '—' }}</td>
                                        <td>
                                            <span class="badge badge-soft-{{ match($refund->status) { 'completed'=>'success','pending'=>'warning','processing'=>'info',default=>'danger' } }}">
                                                {{ ucfirst($refund->status) }}
                                            </span>
                                        </td>
                                        <td class="text-muted fs-12">{{ $refund->initiatedBy?->name ?? ucfirst($refund->initiated_by) }}</td>
                                        <td class="text-muted fs-12">{{ $refund->created_at->format('d M Y') }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @else
                        <div class="text-center py-4 text-muted">
                            <i class="ti ti-refresh fs-1 mb-2 d-block"></i>
                            No refunds initiated yet.
                        </div>
                        @endif
                    </div>
                </div>

                <!-- Gateway Raw Response -->
                @if($transaction->gateway_response)
                <div class="card shadow-none">
                    <div class="card-header bg-white border-bottom py-2 d-flex align-items-center gap-2">
                        <span class="avatar avatar-sm rounded bg-secondary-transparent">
                            <i class="ti ti-code text-secondary"></i>
                        </span>
                        <h6 class="mb-0">Raw Gateway Response</h6>
                    </div>
                    <div class="card-body">
                        <pre class="bg-light p-3 rounded fs-12 mb-0" style="max-height:200px;overflow:auto;">{{ json_encode($transaction->gateway_response, JSON_PRETTY_PRINT) }}</pre>
                    </div>
                </div>
                @endif

            </div>

            <!-- Right: Customer Info & Actions -->
            <div class="col-lg-4">
                <div class="card shadow-none mb-3">
                    <div class="card-header bg-white border-bottom py-2 d-flex align-items-center gap-2">
                        <span class="avatar avatar-sm rounded bg-success-transparent">
                            <i class="ti ti-user text-success"></i>
                        </span>
                        <h6 class="mb-0">Customer</h6>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <span class="avatar avatar-lg rounded-circle bg-primary d-flex align-items-center justify-content-center text-white fw-bold fs-18">
                                {{ strtoupper(substr($transaction->customer_name ?? 'U', 0, 1)) }}
                            </span>
                            <div>
                                <div class="fw-semibold">{{ $transaction->customer_name ?? $transaction->user?->name ?? 'Unknown' }}</div>
                                <div class="text-muted fs-13">{{ $transaction->customer_email ?? $transaction->user?->email ?? '—' }}</div>
                                <div class="text-muted fs-13">{{ $transaction->customer_phone ?? '—' }}</div>
                            </div>
                        </div>
                        @if($transaction->user)
                        <a href="{{ route('admin.users') }}?search={{ $transaction->user->email }}" class="btn btn-light btn-sm w-100">
                            <i class="ti ti-external-link me-1"></i>View User Profile
                        </a>
                        @endif
                    </div>
                </div>

                <!-- Actions -->
                <div class="card shadow-none mb-3">
                    <div class="card-header bg-white border-bottom py-2">
                        <h6 class="mb-0">Quick Actions</h6>
                    </div>
                    <div class="card-body d-flex flex-column gap-2">
                        @if(!$transaction->is_reconciled && $transaction->status === 'captured')
                        <form action="{{ route('admin.payments.reconcile', $transaction) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-outline-success btn-sm w-100">
                                <i class="ti ti-check me-1"></i>Mark as Reconciled
                            </button>
                        </form>
                        @endif

                        <button type="button" class="btn btn-outline-danger btn-sm w-100"
                                data-bs-toggle="modal" data-bs-target="#flagModal">
                            <i class="ti ti-flag me-1"></i>
                            {{ $transaction->is_suspicious ? 'Remove Suspicious Flag' : 'Flag as Suspicious' }}
                        </button>
                    </div>
                </div>

                @if($transaction->notes)
                <div class="card shadow-none">
                    <div class="card-body">
                        <p class="text-muted fs-13 mb-1">Notes</p>
                        <p class="fs-13 mb-0">{{ $transaction->notes }}</p>
                    </div>
                </div>
                @endif
            </div>
        </div>

    </div>
</div>

<!-- Refund Modal -->
<div class="modal fade" id="refundModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-bottom py-2">
                <h6 class="modal-title">Initiate Refund — #{{ $transaction->id }}</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('admin.payments.refund', $transaction) }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3 p-2 bg-light rounded d-flex justify-content-between">
                        <span class="text-muted fs-13">Paid</span>
                        <span class="fw-semibold">₹{{ number_format($transaction->amount, 2) }}</span>
                    </div>
                    @php $alreadyRefunded = $transaction->totalRefunded(); @endphp
                    @if($alreadyRefunded > 0)
                    <div class="mb-3 p-2 bg-light rounded d-flex justify-content-between">
                        <span class="text-muted fs-13">Already Refunded</span>
                        <span class="text-warning fw-semibold">₹{{ number_format($alreadyRefunded, 2) }}</span>
                    </div>
                    @endif
                    <div class="mb-3">
                        <label class="form-label fs-13">Amount (₹) <span class="text-danger">*</span></label>
                        <input type="number" name="amount" class="form-control form-control-sm"
                               max="{{ $transaction->amount - $alreadyRefunded }}"
                               value="{{ $transaction->amount - $alreadyRefunded }}"
                               step="0.01" min="0.01" required>
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
                        <textarea name="notes" class="form-control form-control-sm" rows="2"></textarea>
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

<!-- Flag Modal -->
<div class="modal fade" id="flagModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-bottom py-2">
                <h6 class="modal-title">{{ $transaction->is_suspicious ? 'Remove Flag' : 'Flag as Suspicious' }}</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('admin.payments.flag', $transaction) }}" method="POST">
                @csrf
                <div class="modal-body">
                    @if(!$transaction->is_suspicious)
                    <label class="form-label fs-13">Reason</label>
                    <textarea name="reason" class="form-control form-control-sm" rows="3"
                              placeholder="Why is this transaction suspicious?"></textarea>
                    @else
                    <p class="text-muted fs-13">This will remove the suspicious flag from this transaction.</p>
                    @endif
                </div>
                <div class="modal-footer border-top py-2">
                    <button type="button" class="btn btn-light btn-sm" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger btn-sm">
                        <i class="ti ti-flag me-1"></i>{{ $transaction->is_suspicious ? 'Remove Flag' : 'Flag' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
