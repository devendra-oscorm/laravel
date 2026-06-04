@extends('admin.layout')
@section('admin_title', 'Reconciliation')

@section('content')
<div class="content">
    <div class="container">

        <!-- Summary Cards -->
        <div class="row mb-3">
            <div class="col-6 col-md-2 mb-3">
                <div class="card shadow-none h-100">
                    <div class="card-body py-3">
                        <p class="text-muted fs-12 mb-1">Total</p>
                        <h5 class="mb-0">{{ $summary->total }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-2 mb-3">
                <div class="card shadow-none h-100 border-success">
                    <div class="card-body py-3">
                        <p class="text-muted fs-12 mb-1">Captured</p>
                        <h5 class="mb-0 text-success">{{ $summary->captured }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 mb-3">
                <div class="card shadow-none h-100 border-primary">
                    <div class="card-body py-3">
                        <p class="text-muted fs-12 mb-1">Captured Amount</p>
                        <h5 class="mb-0 text-primary">₹{{ number_format($summary->captured_amount, 0) }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-2 mb-3">
                <div class="card shadow-none h-100 border-info">
                    <div class="card-body py-3">
                        <p class="text-muted fs-12 mb-1">Reconciled</p>
                        <h5 class="mb-0 text-info">{{ $summary->reconciled }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 mb-3">
                <div class="card shadow-none h-100 border-warning">
                    <div class="card-body py-3">
                        <p class="text-muted fs-12 mb-1">Unreconciled</p>
                        <h5 class="mb-0 text-warning">{{ $summary->unreconciled }}</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
            <h6 class="mb-0"><i class="ti ti-report-analytics me-2 text-primary"></i>Razorpay Reconciliation Report</h6>
            <div class="d-flex gap-2">
                <a href="{{ route('admin.payments') }}" class="btn btn-light btn-sm">
                    <i class="ti ti-arrow-left me-1"></i>Back
                </a>
            </div>
        </div>

        <!-- Date Filter -->
        <div class="card shadow-none mb-3">
            <div class="card-body py-2">
                <form method="GET" class="d-flex gap-2 align-items-end flex-wrap">
                    <div>
                        <label class="form-label fs-12 mb-1">From Date</label>
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
                    <div>
                        <label class="form-label fs-12 mb-1">To Date</label>
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
                    <div class="d-flex gap-1">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="ti ti-filter me-1"></i>Apply
                        </button>
                        <a href="{{ route('admin.reconciliation') }}" class="btn btn-light btn-sm">Clear</a>
                    </div>
                </form>
            </div>
        </div>

        <div class="card shadow-none">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover table-sm mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Txn ID</th>
                                <th>Razorpay Payment ID</th>
                                <th>Customer</th>
                                <th>Amount</th>
                                <th>Gateway Fee</th>
                                <th>Net</th>
                                <th>Status</th>
                                <th>Reconciled</th>
                                <th>Date</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($transactions as $txn)
                            <tr class="{{ !$txn->is_reconciled && $txn->status === 'captured' ? 'table-warning' : '' }}">
                                <td class="fw-medium">#{{ $txn->id }}</td>
                                <td>
                                    <code class="fs-11">{{ $txn->gateway_payment_id ?? '—' }}</code>
                                </td>
                                <td>{{ $txn->customer_name ?? '—' }}</td>
                                <td class="fw-medium">₹{{ number_format($txn->amount, 2) }}</td>
                                <td class="text-muted">₹{{ number_format($txn->gateway_fee, 2) }}</td>
                                <td class="text-success fw-medium">₹{{ number_format($txn->net_amount, 2) }}</td>
                                <td>{!! $txn->statusBadge() !!}</td>
                                <td>
                                    @if($txn->is_reconciled)
                                    <span class="badge badge-soft-success">
                                        <i class="ti ti-check me-1"></i>Done
                                    </span>
                                    @else
                                    <span class="badge badge-soft-warning">Pending</span>
                                    @endif
                                </td>
                                <td class="text-muted fs-12">{{ $txn->created_at->format('d M Y') }}</td>
                                <td class="text-end">
                                    @if(!$txn->is_reconciled && $txn->status === 'captured')
                                    <form action="{{ route('admin.payments.reconcile', $txn) }}" method="POST" class="d-inline">
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-success" title="Mark Reconciled">
                                            <i class="ti ti-check"></i>
                                        </button>
                                    </form>
                                    @else
                                    <span class="text-muted fs-11">
                                        {{ $txn->reconciled_at?->format('d M Y') ?? '—' }}
                                    </span>
                                    @endif
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="10" class="text-center py-5 text-muted">
                                    <i class="ti ti-report fs-1 mb-2 d-block"></i>
                                    No Razorpay transactions found for this period.
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
</div>
@endsection
