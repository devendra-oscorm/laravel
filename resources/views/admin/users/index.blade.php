@extends('admin.layout')
@section('admin_title', 'Users')

@section('content')

<!-- Breadcrumb -->
<div class="breadcrumb-bar breadcrumb-bg-04 text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-12">
                <h2 class="breadcrumb-title mb-2">Users</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="isax isax-home5"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{ route('blogs.index') }}">Blog Dashboard</a></li>
                        <li class="breadcrumb-item active">Users</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container">
        <div class="row">

            <!-- Sidebar -->
            <div class="col-xl-3 col-lg-4 theiaStickySidebar">
                <div class="card user-sidebar agent-sidebar mb-4 mb-lg-0">
                    <div class="card-header user-sidebar-header text-center bg-gray-transparent">
                        <div class="agent-profile d-inline-flex">
                            <span class="avatar avatar-xl rounded-circle bg-primary d-flex align-items-center justify-content-center fs-24 text-white fw-bold">
                                {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
                            </span>
                        </div>
                        <h6 class="fs-16 mt-2">{{ auth()->user()->name ?? 'Admin' }}</h6>
                        <p class="fs-14 mb-2">{{ auth()->user()->email ?? '' }}</p>
                    </div>
                    <div class="card-body user-sidebar-body">
                        <ul>
                            <li><a href="{{ route('blogs.index') }}" class="d-flex align-items-center"><i class="isax isax-grid-55 me-2"></i>Dashboard</a></li>
                            <li><a href="{{ route('admin.analytics') }}" class="d-flex align-items-center"><i class="isax isax-chart-25 me-2"></i>Analytics</a></li>
                            <li><a href="{{ route('admin.users') }}" class="d-flex align-items-center active"><i class="isax isax-profile-2user5 me-2"></i>Users</a></li>
                            <li><a href="{{ route('admin.comments') }}" class="d-flex align-items-center"><i class="isax isax-message-text-15 me-2"></i>Comments</a></li>
                            <li><a href="{{ route('admin.settings') }}" class="d-flex align-items-center"><i class="isax isax-setting-25 me-2"></i>Settings</a></li>
                            <li class="logout-link">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="d-flex align-items-center pb-0 w-100 border-0 bg-transparent text-start" style="cursor:pointer;color:inherit;font-size:inherit;padding:10px 0;">
                                        <i class="isax isax-logout-15 me-2"></i>Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-xl-9 col-lg-8">

                <!-- Stat Cards -->
                <div class="row mb-2">
                    <div class="col-sm-4 d-flex">
                        <div class="card shadow-none flex-fill">
                            <div class="card-body text-center">
                                <span class="avatar avatar rounded-circle bg-primary mb-2">
                                    <i class="isax isax-profile-2user5 fs-24"></i>
                                </span>
                                <p class="mb-1">Total Users</p>
                                <h5 class="mb-0">{{ $users->total() }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 d-flex">
                        <div class="card shadow-none flex-fill">
                            <div class="card-body text-center">
                                <span class="avatar avatar rounded-circle bg-success mb-2">
                                    <i class="isax isax-tick-circle5 fs-24"></i>
                                </span>
                                <p class="mb-1">Verified</p>
                                <h5 class="mb-0">{{ \App\Models\User::whereNotNull('email_verified_at')->count() }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 d-flex">
                        <div class="card shadow-none flex-fill">
                            <div class="card-body text-center">
                                <span class="avatar avatar rounded-circle bg-warning mb-2">
                                    <i class="isax isax-clock5 fs-24"></i>
                                </span>
                                <p class="mb-1">Pending</p>
                                <h5 class="mb-0">{{ \App\Models\User::whereNull('email_verified_at')->count() }}</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Users Table -->
                <div class="card shadow-none">
                    <div class="card-body">

                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h6 class="mb-0">All Users</h6>
                            <div class="d-flex gap-2">
                                <a href="{{ route('admin.users') }}" class="btn btn-sm {{ !request('status') ? 'btn-primary' : 'bg-light-200 text-gray-9' }}">All</a>
                                <a href="{{ route('admin.users') }}?status=verified" class="btn btn-sm {{ request('status') === 'verified' ? 'btn-success' : 'bg-light-200 text-gray-9' }}">Verified</a>
                                <a href="{{ route('admin.users') }}?status=pending" class="btn btn-sm {{ request('status') === 'pending' ? 'btn-warning' : 'bg-light-200 text-gray-9' }}">Pending</a>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Author</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Joined</th>
                                        <th>Role</th>
                                        <th>Date</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($users as $user)
                                        <tr>
                                            <td class="fs-14 text-gray-6">{{ $user->id }}</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="avatar avatar-sm rounded-circle bg-primary d-flex align-items-center justify-content-center text-white fw-bold" style="font-size:13px;">
                                                        {{ strtoupper(substr($user->name ?? 'U', 0, 1)) }}
                                                    </span>
                                                    <div>
                                                        <div class="fs-14 fw-medium">{{ $user->name }}</div>
                                                        <div class="fs-12 text-gray-6">User ID: {{ $user->id }}</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="fs-14 text-gray-6">{{ $user->email }}</td>
                                            <td>
                                                @if($user->email_verified_at)
                                                    <span class="badge badge-soft-success badge-sm rounded-pill">
                                                        <i class="isax isax-tick-circle5 me-1"></i>Verified
                                                    </span>
                                                @else
                                                    <span class="badge badge-soft-warning badge-sm rounded-pill">
                                                        <i class="isax isax-warning-2 me-1"></i>Pending
                                                    </span>
                                                @endif
                                            </td>
                                            <td class="fs-14 text-gray-6">
                                                <i class="isax isax-calendar-2 me-1"></i>
                                                {{ $user->created_at->format('d M Y') }}
                                            </td>
                                            <td class="fs-14 text-gray-6">
                                               @if($user->role == 'admin')
                                               <span class = "badge badge-soft-danger rounded-pill">Admin</span>

                                               @elseif($user->role == 'user')
                                               <span class = "badge badge-soft-primary badge-sm rounded-pill">User</span>
                                              @else
                                                <span class = "badge badge-soft-secondary badge-sm rounded-pill">{{ ucfirst($user->role) }}</span>
                                                 @endif
         
                                            </td>
                                            <td class="fs-13 text-gray-6">
                                                <i class="isax isax-calendar-2 me-1"></i>
                                                {{ $user->updated_at->format('d M Y') }}
                                            </td>
                                           
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center py-5">
                                                <span class="avatar avatar-xl rounded-circle bg-light-200 d-inline-flex align-items-center justify-content-center mb-3">
                                                    <i class="isax isax-user-circle5 fs-28 text-gray-6"></i>
                                                </span>
                                                <p class="text-gray-6 mb-0">No users yet.</p>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <div class="mt-3">
                            {{ $users->links() }}
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection

