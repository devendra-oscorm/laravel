@extends('admin.layout')
@section('admin_title', 'Dashboard')

@section('content')

@php
use Illuminate\Support\Facades\DB;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Blog;

// ── Stat cards ────────────────────────────────────────────────
$totalRevenue     = Transaction::where('status','captured')->sum('amount');
$pendingPayments  = Transaction::where('status','pending')->sum('amount');
$totalUsers       = User::count();
$totalTransactions = Transaction::count();

// ── Weekly chart data (last 7 days) ──────────────────────────
$weekly = Transaction::where('status','captured')
    ->where('created_at','>=', now()->subDays(6)->startOfDay())
    ->selectRaw('DATE(created_at) as date, SUM(amount) as total')
    ->groupBy('date')
    ->orderBy('date')
    ->pluck('total','date')
    ->toArray();

$weeklyLabels = [];
$weeklyData   = [];
for ($i = 6; $i >= 0; $i--) {
    $d = now()->subDays($i)->format('Y-m-d');
    $weeklyLabels[] = now()->subDays($i)->format('d M');
    $weeklyData[]   = round($weekly[$d] ?? 0, 2);
}

// ── Monthly chart data (last 6 months) ───────────────────────
$monthly = Transaction::where('status','captured')
    ->where('created_at','>=', now()->subMonths(5)->startOfMonth())
    ->selectRaw('DATE_FORMAT(created_at,"%Y-%m") as month, SUM(amount) as total')
    ->groupBy('month')
    ->orderBy('month')
    ->pluck('total','month')
    ->toArray();

$monthlyLabels = [];
$monthlyData   = [];
for ($i = 5; $i >= 0; $i--) {
    $m = now()->subMonths($i)->format('Y-m');
    $monthlyLabels[] = now()->subMonths($i)->format('M Y');
    $monthlyData[]   = round($monthly[$m] ?? 0, 2);
}

// ── Daily chart data (last 30 days) ──────────────────────────
$daily = Transaction::where('status','captured')
    ->where('created_at','>=', now()->subDays(29)->startOfDay())
    ->selectRaw('DATE(created_at) as date, SUM(amount) as total')
    ->groupBy('date')
    ->orderBy('date')
    ->pluck('total','date')
    ->toArray();

$dailyLabels = [];
$dailyData   = [];
for ($i = 29; $i >= 0; $i--) {
    $d = now()->subDays($i)->format('Y-m-d');
    $dailyLabels[] = now()->subDays($i)->format('d M');
    $dailyData[]   = round($daily[$d] ?? 0, 2);
}
@endphp

<div class="content">
    <div class="container">

        <!-- Welcome -->
        <div class="row mb-3">
            <div class="col-12">
                <div class="card shadow-none border-0" style="background: primary">
                    <div class="card-body p-4 text-white">
                        <h5 class="text-dark mb-1">Welcome back, {{ auth()->user()->name }}! <i class="fas fa-user-shield text-primary"></i></h5>
                        <p class="text-dark mb-0 opacity-75 fs-13">Here's what's happening with your platform today.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stat Cards -->
        <div class="row mb-3">
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card shadow-none">
                    <div class="card-body py-3">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-muted fs-13 mb-1">Total Revenue</p>
                                <h4 class="mb-1 text-primary">₹{{ number_format($totalRevenue, 0) }}</h4>
                                <span class="badge badge-soft-success fs-11"><i class="ti ti-trending-up me-1"></i>Captured</span>
                            </div>
                            <div class="avatar avatar-md rounded bg-primary-transparent">
                                <i class="ti ti-wallet fs-20 text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card shadow-none">
                    <div class="card-body py-3">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-muted fs-13 mb-1">Total Transactions</p>
                                <h4 class="mb-1">{{ number_format($totalTransactions) }}</h4>
                                <a href="{{ route('admin.payments') }}" class="badge badge-soft-info fs-11">View all</a>
                            </div>
                            <div class="avatar avatar-md rounded bg-info-transparent">
                                <i class="ti ti-receipt fs-20 text-info"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card shadow-none">
                    <div class="card-body py-3">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-muted fs-13 mb-1">Registered Users</p>
                                <h4 class="mb-1">{{ number_format($totalUsers) }}</h4>
                                <a href="{{ route('admin.users') }}" class="badge badge-soft-success fs-11">Manage</a>
                            </div>
                            <div class="avatar avatar-md rounded bg-success-transparent">
                                <i class="ti ti-users fs-20 text-success"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card shadow-none">
                    <div class="card-body py-3">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-muted fs-13 mb-1">Pending Payments</p>
                                <h4 class="mb-1 text-warning">₹{{ number_format($pendingPayments, 0) }}</h4>
                                <a href="{{ route('admin.payments') }}?status=pending" class="badge badge-soft-warning fs-11">Review</a>
                            </div>
                            <div class="avatar avatar-md rounded bg-warning-transparent">
                                <i class="ti ti-clock fs-20 text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Revenue Chart & Top Routes -->
        <div class="row mb-3">
            <div class="col-lg-8 mb-3">
                <div class="card shadow-none">
                    <div class="card-header bg-white border-bottom py-2 d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="mb-0">Revenue Overview</h6>
                            <p class="text-muted fs-12 mb-0">Captured transactions over time</p>
                        </div>
                        <div class="btn-group btn-group-sm" id="chartPeriodGroup">
                            <button type="button" class="btn btn-outline-secondary chart-period-btn" data-revenue-period="daily">Daily</button>
                            <button type="button" class="btn btn-primary chart-period-btn" data-revenue-period="weekly">Weekly</button>
                            <button type="button" class="btn btn-outline-secondary chart-period-btn" data-revenue-period="monthly">Monthly</button>
                        </div>
                    </div>
                    <div class="card-body pb-1">
                        <div id="revenueChart" style="min-height:280px;"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-3">
                <div class="card shadow-none h-100">
                    <div class="card-header bg-white border-bottom py-2">
                        <h6 class="mb-0">Payment Status Breakdown</h6>
                    </div>
                    <div class="card-body pb-1">
                        <div id="statusDonutChart" style="min-height:220px;"></div>
                        @php
                            $statusData = Transaction::selectRaw('status, COUNT(*) as count')
                                ->groupBy('status')->pluck('count','status')->toArray();
                        @endphp
                        <div class="row g-2 mt-1">
                            @foreach(['captured'=>['success','Captured'],'pending'=>['warning','Pending'],'failed'=>['danger','Failed'],'refunded'=>['info','Refunded']] as $s=>[$color,$label])
                            <div class="col-6">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="badge badge-soft-{{ $color }} fs-11">{{ $statusData[$s] ?? 0 }}</span>
                                    <span class="text-muted fs-12">{{ $label }}</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Transactions & Quick Actions -->
        <div class="row">
            <div class="col-lg-7 mb-3">
                <div class="card shadow-none">
                    <div class="card-header bg-white border-bottom py-2 d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">Recent Transactions</h6>
                        <a href="{{ route('admin.payments') }}" class="btn btn-light btn-sm">View All</a>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover table-sm mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>Customer</th>
                                        <th>Amount</th>
                                        <th>Gateway</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $recentTxns = Transaction::with('user')->latest()->take(6)->get();
                                    @endphp
                                    @forelse($recentTxns as $txn)
                                    <tr>
                                        <td class="text-muted">#{{ $txn->id }}</td>
                                        <td>{{ $txn->customer_name ?? $txn->user?->name ?? '—' }}</td>
                                        <td class="fw-medium">₹{{ number_format($txn->amount,0) }}</td>
                                        <td><span class="badge badge-soft-secondary fs-11">{{ ucfirst($txn->gateway) }}</span></td>
                                        <td>{!! $txn->statusBadge() !!}</td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="5" class="text-center py-4 text-muted">No transactions yet</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 mb-3">
                <div class="card shadow-none mb-3">
                    <div class="card-header bg-white border-bottom py-2">
                        <h6 class="mb-0">Quick Actions</h6>
                    </div>
                    <div class="card-body">
                        <div class="row g-2">
                            <div class="col-6">
                                <a href="{{ route('admin.promo-codes') }}" class="btn btn-light w-100 d-flex flex-column align-items-center py-3">
                                    <i class="ti ti-ticket fs-24 text-primary mb-1"></i>
                                    <span class="fs-12 fw-medium">Promo Codes</span>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="{{ route('blogs.create') }}" class="btn btn-light w-100 d-flex flex-column align-items-center py-3">
                                    <i class="ti ti-pencil fs-24 text-info mb-1"></i>
                                    <span class="fs-12 fw-medium">Write Blog</span>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="{{ route('admin.configuration') }}" class="btn btn-light w-100 d-flex flex-column align-items-center py-3">
                                    <i class="ti ti-settings fs-24 text-warning mb-1"></i>
                                    <span class="fs-12 fw-medium">Configuration</span>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="{{ route('admin.payments') }}?suspicious=1" class="btn btn-light w-100 d-flex flex-column align-items-center py-3">
                                    <i class="ti ti-flag fs-24 text-danger mb-1"></i>
                                    <span class="fs-12 fw-medium">Flagged Txns</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow-none">
                    <div class="card-header bg-white border-bottom py-2">
                        <h6 class="mb-0">System Health</h6>
                    </div>
                    <div class="card-body">
                        @php
                            $captured = Transaction::where('status','captured')->count();
                            $total    = max($totalTransactions, 1);
                            $successRate = round(($captured / $total) * 100);
                            $blogsCount  = Blog::where('status','publish')->count();
                            $pendingComments = \App\Models\BlogComment::where('status','pending')->count();
                        @endphp
                        <div class="mb-3">
                            <div class="d-flex justify-content-between mb-1">
                                <span class="text-muted fs-13">Payment Success Rate</span>
                                <span class="fw-medium">{{ $successRate }}%</span>
                            </div>
                            <div class="progress" style="height:5px;">
                                <div class="progress-bar bg-success" style="width:{{ $successRate }}%"></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between mb-1">
                                <span class="text-muted fs-13">Published Blogs</span>
                                <span class="fw-medium">{{ $blogsCount }}</span>
                            </div>
                            <div class="progress" style="height:5px;">
                                <div class="progress-bar bg-info" style="width:{{ min($blogsCount * 5, 100) }}%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex justify-content-between mb-1">
                                <span class="text-muted fs-13">Pending Comments</span>
                                <span class="fw-medium {{ $pendingComments > 0 ? 'text-warning' : '' }}">{{ $pendingComments }}</span>
                            </div>
                            <div class="progress" style="height:5px;">
                                <div class="progress-bar bg-warning" style="width:{{ min($pendingComments * 10, 100) }}%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection

@push('scripts')
{{-- ApexCharts CDN --}}
<script src="https://cdn.jsdelivr.net/npm/apexcharts@3.46.0/dist/apexcharts.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {

    // ── Chart Data from PHP ───────────────────────────────────
    const chartData = {
        daily:   { labels: @json($dailyLabels),   revenue: @json($dailyData)   },
        weekly:  { labels: @json($weeklyLabels),  revenue: @json($weeklyData)  },
        monthly: { labels: @json($monthlyLabels), revenue: @json($monthlyData) },
    };

    const statusData = @json($statusData ?? []);

    // ── Revenue Area Chart ────────────────────────────────────
    const revenueEl = document.getElementById('revenueChart');
    if (!revenueEl) return;

    const revenueOptions = {
        chart: {
            type: 'area',
            height: 280,
            toolbar: { show: false },
            zoom: { enabled: false },
            fontFamily: 'inherit',
        },
        series: [{ name: 'Revenue (₹)', data: chartData.weekly.revenue }],
        xaxis: {
            categories: chartData.weekly.labels,
            labels: { style: { colors: '#667085', fontSize: '12px' } },
            axisBorder: { show: false },
            axisTicks: { show: false },
        },
        yaxis: {
            labels: {
                formatter: val => '₹' + (val >= 100000 ? (val/100000).toFixed(1)+'L' : val >= 1000 ? (val/1000).toFixed(0)+'K' : val),
                style: { colors: '#667085', fontSize: '12px' },
            },
        },
        colors: ['#0d6efd'],
        fill: {
            type: 'gradient',
            gradient: { shadeIntensity: 1, opacityFrom: 0.35, opacityTo: 0.02, stops: [0, 100] },
        },
        stroke: { curve: 'smooth', width: 2 },
        dataLabels: { enabled: false },
        grid: { borderColor: '#f0f0f0', strokeDashArray: 4, xaxis: { lines: { show: false } } },
        tooltip: { y: { formatter: val => '₹ ' + Number(val).toLocaleString('en-IN') } },
        markers: { size: 4, colors: ['#0d6efd'], strokeColors: '#fff', strokeWidth: 2 },
    };

    const revenueChart = new ApexCharts(revenueEl, revenueOptions);
    revenueChart.render();

    // ── Period Switch Buttons ─────────────────────────────────
    document.querySelectorAll('[data-revenue-period]').forEach(btn => {
        btn.addEventListener('click', function () {
            document.querySelectorAll('[data-revenue-period]').forEach(b => {
                b.classList.remove('btn-primary');
                b.classList.add('btn-outline-secondary');
            });
            this.classList.remove('btn-outline-secondary');
            this.classList.add('btn-primary');

            const period = this.dataset.revenuePeriod;
            revenueChart.updateOptions({ xaxis: { categories: chartData[period].labels } });
            revenueChart.updateSeries([{ name: 'Revenue (₹)', data: chartData[period].revenue }]);
        });
    });

    // ── Status Donut Chart ────────────────────────────────────
    const donutEl = document.getElementById('statusDonutChart');
    if (!donutEl) return;

    const statuses   = ['captured','pending','failed','refunded','partially_refunded','flagged'];
    const donutLabels = ['Captured','Pending','Failed','Refunded','Part. Refunded','Flagged'];
    const donutColors = ['#198754','#ffc107','#dc3545','#0dcaf0','#6c757d','#fd7e14'];
    const seriesData  = statuses.map(s => Number(statusData[s] || 0));

    const donutChart = new ApexCharts(donutEl, {
        chart: { type: 'donut', height: 220, fontFamily: 'inherit', toolbar: { show: false } },
        series: seriesData,
        labels: donutLabels,
        colors: donutColors,
        legend: { show: false },
        dataLabels: { enabled: false },
        plotOptions: {
            pie: {
                donut: {
                    size: '70%',
                    labels: {
                        show: true,
                        total: {
                            show: true,
                            label: 'Total',
                            color: '#667085',
                            formatter: w => w.globals.seriesTotals.reduce((a,b) => a+b, 0),
                        },
                    },
                },
            },
        },
        tooltip: { y: { formatter: val => val + ' transactions' } },
    });
    donutChart.render();

});
</script>
@endpush
