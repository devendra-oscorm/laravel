@extends('admin.layout')
@section('admin_title', 'Settings')

@section('content')

<!-- Breadcrumb -->
<div class="breadcrumb-bar breadcrumb-bg-04 text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-12">
                <h2 class="breadcrumb-title mb-2">Settings</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="isax isax-home5"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{ route('blogs.index') }}">Blog Dashboard</a></li>
                        <li class="breadcrumb-item active">Settings</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container">
        <div class="row">

            <div class="col-xl-3 col-lg-4 theiaStickySidebar">
                <div class="card user-sidebar agent-sidebar mb-4 mb-lg-0">
                    <div class="card-header user-sidebar-header text-center bg-gray-transparent">
                        <div class="agent-profile d-inline-flex">
                            <span class="avatar avatar-xl rounded-circle bg-primary d-flex align-items-center justify-content-center fs-24 text-white fw-bold">
                                {{ strtoupper(substr($settings['admin_name'] ?? 'A', 0, 1)) }}
                            </span>
                        </div>
                        <h6 class="fs-16 mt-2">{{ $settings['admin_name'] }}</h6>
                        <p class="fs-14 mb-2">{{ $settings['admin_email'] }}</p>
                        <span class="badge badge-soft-success badge-md rounded-pill">
                            <i class="isax isax-verify5 me-1"></i>Admin
                        </span>
                    </div>
                    <div class="card-body user-sidebar-body">
                        <ul>
                            <li><a href="{{ route('blogs.index') }}" class="d-flex align-items-center"><i class="isax isax-grid-55 me-2"></i>Dashboard</a></li>
                            <li><a href="{{ route('blogs.create') }}" class="d-flex align-items-center"><i class="isax isax-add-circle5 me-2"></i>Add Blog</a></li>
                            <li><a href="{{ route('admin.analytics') }}" class="d-flex align-items-center"><i class="isax isax-chart-25 me-2"></i>Analytics</a></li>
                            <li><a href="{{ route('admin.users') }}" class="d-flex align-items-center"><i class="isax isax-profile-2user5 me-2"></i>Users</a></li>
                            <li><a href="{{ route('admin.comments') }}" class="d-flex align-items-center"><i class="isax isax-message-text-15 me-2"></i>Comments</a></li>
                            <li><a href="{{ route('admin.settings') }}" class="d-flex align-items-center active"><i class="isax isax-setting-25 me-2"></i>Settings</a></li>
                            <li class="logout-link">
                                <form method="POST" action="{{ route('auth.logout') }}">
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

            <div class="col-xl-9 col-lg-8">
                <div class="row">
                    <div class="col-xl-3 col-sm-6 d-flex">
                        <div class="card shadow-none flex-fill">
                            <div class="card-body text-center">
                                <span class="avatar avatar rounded-circle bg-success mb-2"><i class="isax isax-tick-circle5 fs-24"></i></span>
                                <p class="mb-1">Published</p>
                                <h5 class="mb-0">{{ $settings['published_blogs'] }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 d-flex">
                        <div class="card shadow-none flex-fill">
                            <div class="card-body text-center">
                                <span class="avatar avatar rounded-circle bg-warning mb-2"><i class="isax isax-edit-25 fs-24"></i></span>
                                <p class="mb-1">Drafts</p>
                                <h5 class="mb-0">{{ $settings['draft_blogs'] }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 d-flex">
                        <div class="card shadow-none flex-fill">
                            <div class="card-body text-center">
                                <span class="avatar avatar rounded-circle bg-orange mb-2"><i class="isax isax-message-text-15 fs-24"></i></span>
                                <p class="mb-1">Pending</p>
                                <h5 class="mb-0">{{ $settings['pending_comments'] }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 d-flex">
                        <div class="card shadow-none flex-fill">
                            <div class="card-body text-center">
                                <span class="avatar avatar rounded-circle bg-info mb-2"><i class="isax isax-profile-2user5 fs-24"></i></span>
                                <p class="mb-1">Users</p>
                                <h5 class="mb-0">{{ $settings['registered_users'] }}</h5>
                            </div>
                        </div>
                    </div>
                </div>

                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show rounded-3 mb-4">
                        <i class="isax isax-tick-circle5 me-2"></i>{{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show rounded-3 mb-4">
                        <i class="isax isax-close-circle5 me-2"></i>
                        <strong>Please fix the errors below:</strong>
                        <ul class="mb-0 mt-1 ps-3">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                <div class="card shadow-none">
                    <div class="card-header">
                        <h6 class="fs-18 mb-0"><i class="isax isax-setting-25 me-2 text-primary"></i>Admin Account</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.settings.update') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Name <span class="text-danger">*</span></label>
                                        <input type="text" name="name" class="form-control" value="{{ old('name', $settings['admin_name']) }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Email <span class="text-danger">*</span></label>
                                        <input type="email" name="email" class="form-control" value="{{ old('email', $settings['admin_email']) }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">New Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Leave blank to keep current password">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Confirm Password</label>
                                        <input type="password" name="password_confirmation" class="form-control" placeholder="Repeat new password">
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end gap-2">
                                <a href="{{ route('blogs.index') }}" class="btn btn-light">
                                    <i class="isax isax-arrow-left-2 me-1"></i>Back
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="isax isax-save-25 me-1"></i>Save Settings
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card shadow-none mt-4">
                    <div class="card-body">
                        <h6 class="mb-3">Admin Shortcuts</h6>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <a href="{{ route('blogs.create') }}" class="btn bg-light-200 text-gray-9 w-100 d-flex align-items-center justify-content-center">
                                    <i class="isax isax-add-circle5 me-2"></i>Add Blog
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{ route('admin.comments') }}?status=pending" class="btn bg-light-200 text-gray-9 w-100 d-flex align-items-center justify-content-center">
                                    <i class="isax isax-message-text-15 me-2"></i>Review Comments
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{ route('admin.analytics') }}" class="btn bg-light-200 text-gray-9 w-100 d-flex align-items-center justify-content-center">
                                    <i class="isax isax-chart-25 me-2"></i>View Analytics
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection

