@extends('admin.layout')
@section('admin_title', 'Analytics')

@section('content')

@php
    $maxActivity = max(1, $months->max(fn($month) => max($month['blogs'], $month['comments'])));
@endphp

<!-- Breadcrumb -->
<div class="breadcrumb-bar breadcrumb-bg-04 text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-12">
                <h2 class="breadcrumb-title mb-2">Analytics</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="isax isax-home5"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{ route('blogs.index') }}">Blog Dashboard</a></li>
                        <li class="breadcrumb-item active">Analytics</li>
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
                                {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
                            </span>
                        </div>
                        <h6 class="fs-16 mt-2">{{ auth()->user()->name ?? 'Admin' }}</h6>
                        <p class="fs-14 mb-2">{{ auth()->user()->email ?? '' }}</p>
                        <span class="badge badge-soft-success badge-md rounded-pill">
                            <i class="isax isax-verify5 me-1"></i>Admin
                        </span>
                    </div>
                    <div class="card-body user-sidebar-body">
                        <ul>
                            <li><a href="{{ route('blogs.index') }}" class="d-flex align-items-center"><i class="isax isax-grid-55 me-2"></i>Dashboard</a></li>
                            <li><a href="{{ route('blogs.create') }}" class="d-flex align-items-center"><i class="isax isax-add-circle5 me-2"></i>Add Blog</a></li>
                            <li><a href="{{ route('admin.analytics') }}" class="d-flex align-items-center active"><i class="isax isax-chart-25 me-2"></i>Analytics</a></li>
                            <li><a href="{{ route('admin.users') }}" class="d-flex align-items-center"><i class="isax isax-profile-2user5 me-2"></i>Users</a></li>
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

            <div class="col-xl-9 col-lg-8">
                <div class="row">
                    <div class="col-xl-3 col-sm-6 d-flex">
                        <div class="card shadow-none flex-fill">
                            <div class="card-body text-center">
                                <span class="avatar avatar rounded-circle bg-primary mb-2"><i class="isax isax-document-text5 fs-24"></i></span>
                                <p class="mb-1">Blogs</p>
                                <h5 class="mb-0">{{ $stats['total_blogs'] }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 d-flex">
                        <div class="card shadow-none flex-fill">
                            <div class="card-body text-center">
                                <span class="avatar avatar rounded-circle bg-success mb-2"><i class="isax isax-tick-circle5 fs-24"></i></span>
                                <p class="mb-1">Published</p>
                                <h5 class="mb-0">{{ $stats['published_blogs'] }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 d-flex">
                        <div class="card shadow-none flex-fill">
                            <div class="card-body text-center">
                                <span class="avatar avatar rounded-circle bg-warning mb-2"><i class="isax isax-message-text-15 fs-24"></i></span>
                                <p class="mb-1">Pending Comments</p>
                                <h5 class="mb-0">{{ $stats['pending_comments'] }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 d-flex">
                        <div class="card shadow-none flex-fill">
                            <div class="card-body text-center">
                                <span class="avatar avatar rounded-circle bg-info mb-2"><i class="isax isax-profile-2user5 fs-24"></i></span>
                                <p class="mb-1">Users</p>
                                <h5 class="mb-0">{{ $stats['total_users'] }}</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow-none mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h6 class="mb-0">Monthly Activity</h6>
                            <div class="d-flex align-items-center gap-3 fs-13 text-gray-6">
                                <span><i class="ti ti-point-filled text-primary"></i>Blogs</span>
                                <span><i class="ti ti-point-filled text-success"></i>Comments</span>
                            </div>
                        </div>
                        <div class="row align-items-end g-3" style="min-height:220px;">
                            @foreach($months as $month)
                                @php
                                    $blogBarHeight = max(8, round(($month['blogs'] / $maxActivity) * 160));
                                    $commentBarHeight = max(8, round(($month['comments'] / $maxActivity) * 160));
                                @endphp
                                <div class="col text-center">
                                    <div class="d-flex align-items-end justify-content-center gap-2" style="height:170px;">
                                        <div class="bg-primary rounded-top" title="Blogs: {{ $month['blogs'] }}" style="width:18px;height:{{ $blogBarHeight }}px;"></div>
                                        <div class="bg-success rounded-top" title="Comments: {{ $month['comments'] }}" style="width:18px;height:{{ $commentBarHeight }}px;"></div>
                                    </div>
                                    <p class="fs-13 text-gray-6 mb-0 mt-2">{{ $month['label'] }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-7 d-flex">
                        <div class="card shadow-none flex-fill">
                            <div class="card-body">
                                <h6 class="mb-3">Recent Blogs</h6>
                                @forelse($recentBlogs as $blog)
                                    <div class="d-flex align-items-center justify-content-between border-bottom pb-3 mb-3">
                                        <div>
                                            <h6 class="fs-14 mb-1">{{ Str::limit($blog->title, 52) }}</h6>
                                            <p class="fs-13 text-gray-6 mb-0">{{ $blog->created_at->format('d M Y') }}</p>
                                        </div>
                                        <span class="badge badge-soft-{{ $blog->status === 'publish' ? 'success' : 'warning' }} badge-sm rounded-pill">
                                            {{ ucfirst($blog->status) }}
                                        </span>
                                    </div>
                                @empty
                                    <p class="text-gray-6 fs-14 mb-0">No blogs yet.</p>
                                @endforelse
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 d-flex">
                        <div class="card shadow-none flex-fill">
                            <div class="card-body">
                                <h6 class="mb-3">Top Categories</h6>
                                @forelse($topCategories as $category)
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <span class="fs-14 text-gray-9">{{ $category->category }}</span>
                                        <span class="badge badge-soft-primary badge-sm rounded-pill">{{ $category->total }}</span>
                                    </div>
                                @empty
                                    <p class="text-gray-6 fs-14 mb-0">No categories yet.</p>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow-none">
                    <div class="card-body">
                        <h6 class="mb-3">Latest Comments</h6>
                        @forelse($recentComments as $comment)
                            <div class="d-flex align-items-start justify-content-between border-bottom pb-3 mb-3">
                                <div>
                                    <h6 class="fs-14 mb-1">{{ $comment->name }}</h6>
                                    <p class="fs-13 text-gray-6 mb-1">{{ Str::limit($comment->message, 90) }}</p>
                                    <p class="fs-12 text-gray-6 mb-0">{{ optional($comment->blog)->title ?? 'Deleted blog' }}</p>
                                </div>
                                <span class="badge badge-soft-{{ $comment->status === 'approved' ? 'success' : ($comment->status === 'rejected' ? 'danger' : 'warning') }} badge-sm rounded-pill">
                                    {{ ucfirst($comment->status) }}
                                </span>
                            </div>
                        @empty
                            <p class="text-gray-6 fs-14 mb-0">No comments yet.</p>
                        @endforelse
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection

