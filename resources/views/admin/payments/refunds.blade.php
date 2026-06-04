@extends('admin.layout')
@section('admin_title', 'Refunds')

@section('content')
<div class="content">
    <div class="container">

        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show mb-3">
            <i class="ti ti-circle-check me-2"></i>{{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @endif

        <!-- Stat Cards -->
        <div class="row mb-3">
            <div class="col-6 col-md-3 col-xl mb-3">
                <div class="card shadow-none h-100 border-warning">
                    <div class="card-body py-3">
                        <p class="text-muted fs-12 mb-1">Pending</p>
                        <h5 class="mb-0 text-warning">{{ $stats['pending'] }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 col-xl mb-3">
                <div class="card shadow-none h-100 border-info">
                    <div class="card-body py-3">
                        <p class="text-muted fs-12 mb-1">Processing</p>
                        <h5 class="mb-0 text-info">{{ $stats['processing'] }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 col-xl mb-3">
                <div class="card shadow-none h-100 border-success">
                    <div class="card-body py-3">
                        <p class="text-muted fs-12 mb-1">Completed</p>
                        <h5 class="mb-0 text-success">{{ $stats['completed'] }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 col-xl mb-3">
                <div class="card shadow-none h-100 border-danger">
                    <div class="card-body py-3">
                        <p class="text-muted fs-12 mb-1">Failed</p>
                        <h5 class="mb-0 text-danger">{{ $stats['failed'] }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 col-xl mb-3">
                <div class="card shadow-none h-100 border-primary">
                    <div class="card-body py-3">
                        <p class="text-muted fs-12 mb-1">Total Refunded</p>
                        <h5 class="mb-0 text-primary">₹{{ number_format($stats['total_amt'], 0) }}</h5>
                    </div>
                </div>
            </div>
        </div>

        <!-- Breadcrumb nav -->
        <div class="d-flex gap-2 mb-3">
            <a href="{{ route('admin.payments') }}" class="btn btn-light btn-sm">
                <i class="ti ti-arrow-left me-1"></i>Back to Payments
            </a>
            <div class="d-flex gap-1 ms-auto">
                @foreach(['', 'pending', 'processing', 'completed', 'failed'] as $s)
                <a href="{{ route('admin.refunds') }}{{ $s ? '?status='.$s : '' }}"
                   class="btn btn-sm {{ request('status') === $s ? 'btn-primary' : 'btn-outline-secondary' }}">
                    {{ $s ? ucfirst($s) : 'All' }}
                </a>
                @endforeach
            </div>
        </div>

        <div class="card shadow-none">
            <div class="card-header bg-white border-bottom py-2">
                <h6 class="mb-0"><i class="ti ti-refresh me-2 text-info"></i>Refund Requests</h6>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover table-sm mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Transaction</th>
                                <th>Customer</th>
                                <th>Amount</th>
                                <th>Reason</th>
                                <th>Status</th>
                                <th>Initiated By</th>
                                <th>Date</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($refunds as $refund)
                            <tr>
                                <td class="text-muted">{{ $refund->id }}</td>
                                <td>
                                    <a href="{{ route('admin.payments.show', $refund->transaction_id) }}" class="text-primary">
                                        #{{ $refund->transaction_id }}
                                    </a>
                                </td>
                                <td>{{ $refund->transaction->customer_name ?? '—' }}</td>
                                <td class="fw-medium text-danger">₹{{ number_format($refund->amount, 2) }}</td>
                                <td class="text-muted fs-12">{{ $refund->reason ?? '—' }}</td>
                                <td>
                                    @php
                                        $badge = match($refund->status) {
                                            'pending'    => 'warning',
                                            'processing' => 'info',
                                            'completed'  => 'success',
                                            'failed'     => 'danger',
                                            default      => 'secondary'
                                        };
                                    @endphp
                                    <span class="badge badge-soft-{{ $badge }}">{{ ucfirst($refund->status) }}</span>
                                </td>
                                <td class="text-muted fs-12">{{ $refund->initiatedBy?->name ?? ucfirst($refund->initiated_by) }}</td>
                                <td class="text-muted fs-12">{{ $refund->created_at->format('d M Y') }}</td>
                                <td class="text-end">
                                    @if(in_array($refund->status, ['pending','processing']))
                                    <div class="d-flex gap-1 justify-content-end">
                                        <form action="{{ route('admin.refunds.status', $refund) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('PATCH')
                                            <input type="hidden" name="status" value="completed">
                                            <button type="submit" class="btn btn-sm btn-success" title="Mark Completed">
                                                <i class="ti ti-check"></i>
                                            </button>
                                        </form>
                                        <form action="{{ route('admin.refunds.status', $refund) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('PATCH')
                                            <input type="hidden" name="status" value="failed">
                                            <button type="submit" class="btn btn-sm btn-danger" title="Mark Failed">
                                                <i class="ti ti-x"></i>
                                            </button>
                                        </form>
                                    </div>
                                    @else
                                    <span class="text-muted fs-12">
                                        {{ $refund->processed_at?->format('d M Y') ?? '—' }}
                                    </span>
                                    @endif
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="9" class="text-center py-5">
                                    <div class="text-muted">
                                        <i class="ti ti-refresh fs-1 mb-2 d-block"></i>
                                        <p>No refunds found</p>
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            @if($refunds->hasPages())
            <div class="card-footer bg-white border-top py-2">
                {{ $refunds->links() }}
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
