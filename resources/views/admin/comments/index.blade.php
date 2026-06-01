@extends('admin.layout')

@section('content')

<!-- Breadcrumb -->
<div class="breadcrumb-bar breadcrumb-bg-04 text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-12">
                <h2 class="breadcrumb-title mb-2">Comments</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="isax isax-home5"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{ route('blogs.index') }}">Blog Dashboard</a></li>
                        <li class="breadcrumb-item active">Comments</li>
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
                            <li><a href="{{ route('blogs.create') }}" class="d-flex align-items-center"><i class="isax isax-add-circle5 me-2"></i>Add Blog</a></li>
                            <li><a href="{{ route('admin.analytics') }}" class="d-flex align-items-center"><i class="isax isax-chart-25 me-2"></i>Analytics</a></li>
                            <li><a href="{{ route('admin.users') }}" class="d-flex align-items-center"><i class="isax isax-profile-2user5 me-2"></i>Users</a></li>
                            <li><a href="{{ route('admin.comments') }}" class="d-flex align-items-center active"><i class="isax isax-message-text-15 me-2"></i>Comments</a></li>
                            <li><a href="{{ route('admin.settings') }}" class="d-flex align-items-center"><i class="isax isax-setting-25 me-2"></i>Settings</a></li>
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

            <!-- Main Content -->
            <div class="col-xl-9 col-lg-8">

                <!-- Stat Cards -->
                <div class="row mb-2">
                    <div class="col-sm-4 d-flex">
                        <div class="card shadow-none flex-fill">
                            <div class="card-body text-center">
                                <span class="avatar avatar rounded-circle bg-primary mb-2">
                                    <i class="isax isax-message-text-15 fs-24"></i>
                                </span>
                                <p class="mb-1">Total</p>
                                <h5 class="mb-0">{{ $comments->total() }}</h5>
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
                                <h5 class="mb-0">{{ \App\Models\BlogComment::where('status','pending')->count() }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 d-flex">
                        <div class="card shadow-none flex-fill">
                            <div class="card-body text-center">
                                <span class="avatar avatar rounded-circle bg-success mb-2">
                                    <i class="isax isax-tick-circle5 fs-24"></i>
                                </span>
                                <p class="mb-1">Approved</p>
                                <h5 class="mb-0">{{ \App\Models\BlogComment::where('status','approved')->count() }}</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Comments Table -->
                <div class="card shadow-none">
                    <div class="card-body">

                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h6 class="mb-0">All Comments</h6>
                            <!-- Filter tabs -->
                            <div class="d-flex gap-2">
                                <a href="{{ route('admin.comments') }}"
                                   class="btn btn-sm {{ !request('status') ? 'btn-primary' : 'bg-light-200 text-gray-9' }}">
                                    All
                                </a>
                                <a href="{{ route('admin.comments') }}?status=pending"
                                   class="btn btn-sm {{ request('status') === 'pending' ? 'btn-warning' : 'bg-light-200 text-gray-9' }}">
                                    Pending
                                </a>
                                <a href="{{ route('admin.comments') }}?status=approved"
                                   class="btn btn-sm {{ request('status') === 'approved' ? 'btn-success' : 'bg-light-200 text-gray-9' }}">
                                    Approved
                                </a>
                                <a href="{{ route('admin.comments') }}?status=rejected"
                                   class="btn btn-sm {{ request('status') === 'rejected' ? 'btn-danger' : 'bg-light-200 text-gray-9' }}">
                                    Rejected
                                </a>
                            </div>
                        </div>

                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show rounded-3 mb-3">
                                <i class="isax isax-tick-circle5 me-2"></i>{{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif

                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Author</th>
                                        <th>Comment</th>
                                        <th>Blog</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($comments as $comment)
                                        <tr>
                                            <td class="fs-14 text-gray-6">{{ $comment->id }}</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="avatar avatar-sm rounded-circle bg-primary d-flex align-items-center justify-content-center text-white fw-bold" style="font-size:13px;">
                                                        {{ strtoupper(substr($comment->name, 0, 1)) }}
                                                    </span>
                                                    <div>
                                                        <div class="fs-14 fw-medium">{{ $comment->name }}</div>
                                                        <div class="fs-12 text-gray-6">{{ $comment->email }}</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="max-width:260px;">
                                                <p class="fs-14 text-gray-6 mb-0" style="white-space:normal;">
                                                    {{ \Illuminate\Support\Str::limit($comment->message, 100) }}
                                                </p>
                                            </td>
                                            <td>
                                                @if($comment->blog)
                                                    <a href="{{ route('blog.details', $comment->blog_id) }}"
                                                       class="fs-13 link-primary text-decoration-underline"
                                                       target="_blank">
                                                        {{ \Illuminate\Support\Str::limit($comment->blog->title, 35) }}
                                                    </a>
                                                @else
                                                    <span class="text-gray-6 fs-13">—</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($comment->status === 'approved')
                                                    <span class="badge badge-soft-success badge-sm rounded-pill">
                                                        <i class="isax isax-tick-circle5 me-1"></i>Approved
                                                    </span>
                                                @elseif($comment->status === 'rejected')
                                                    <span class="badge badge-soft-danger badge-sm rounded-pill">
                                                        <i class="isax isax-close-circle5 me-1"></i>Rejected
                                                    </span>
                                                @else
                                                    <span class="badge badge-soft-warning badge-sm rounded-pill">
                                                        <i class="isax isax-clock5 me-1"></i>Pending
                                                    </span>
                                                @endif
                                            </td>
                                            <td class="fs-13 text-gray-6">
                                                <i class="isax isax-calendar-2 me-1"></i>
                                                {{ $comment->created_at->format('d M Y') }}
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1 flex-wrap">
                                                    @if($comment->status !== 'approved')
                                                        <form action="{{ route('comments.approve', $comment->id) }}" method="POST">
                                                            @csrf @method('PATCH')
                                                            <button type="submit"
                                                                    class="btn btn-sm bg-success-transparent text-success d-inline-flex align-items-center gap-1"
                                                                    title="Approve">
                                                                <i class="isax isax-tick-circle5 fs-14"></i>
                                                            </button>
                                                        </form>
                                                    @endif
                                                    @if($comment->status !== 'rejected')
                                                        <form action="{{ route('comments.reject', $comment->id) }}" method="POST">
                                                            @csrf @method('PATCH')
                                                            <button type="submit"
                                                                    class="btn btn-sm bg-warning-transparent text-warning d-inline-flex align-items-center gap-1"
                                                                    title="Reject">
                                                                <i class="isax isax-close-circle5 fs-14"></i>
                                                            </button>
                                                        </form>
                                                    @endif
                                                    <form action="{{ route('comments.destroy', $comment->id) }}"
                                                          method="POST"
                                                          onsubmit="return confirm('Delete this comment?')">
                                                        @csrf @method('DELETE')
                                                        <button type="submit"
                                                                class="btn btn-sm bg-danger-transparent text-danger d-inline-flex align-items-center gap-1"
                                                                title="Delete">
                                                            <i class="isax isax-trash5 fs-14"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center py-5">
                                                <span class="avatar avatar-xl rounded-circle bg-light-200 d-inline-flex align-items-center justify-content-center mb-3">
                                                    <i class="isax isax-message-text-15 fs-28 text-gray-6"></i>
                                                </span>
                                                <p class="text-gray-6 mb-0">No comments yet.</p>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <div class="mt-3">
                            {{ $comments->links() }}
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
