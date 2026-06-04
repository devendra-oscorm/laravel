@extends('admin.layout')
@section('admin_title', 'Blog Management')

@section('content')

@php 
    use Illuminate\Support\Str;
    $comments = \App\Models\BlogComment::with('blog')->orderBy('created_at', 'desc')->paginate(15);
    $pendingCount = \App\Models\BlogComment::where('status', 'pending')->count();
    $approvedCount = \App\Models\BlogComment::where('status', 'approved')->count();
    $rejectedCount = \App\Models\BlogComment::where('status', 'rejected')->count();
@endphp

<div class="content">
    <div class="container">
        
        <!-- Tabs Navigation -->
        <ul class="nav nav-tabs mb-3" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="blogs-tab" data-bs-toggle="tab" data-bs-target="#blogs-content" type="button" role="tab">
                    <i class="ti ti-file-text me-1"></i>All Blogs
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="comments-tab" data-bs-toggle="tab" data-bs-target="#comments-content" type="button" role="tab">
                    <i class="ti ti-message me-1"></i>Comments
                </button>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content">
            
            <!-- Blogs Tab -->
            <div class="tab-pane fade show active" id="blogs-content" role="tabpanel">

                <!-- Stat Cards -->
                <div class="row mb-3">
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card shadow-none h-100">
                            <div class="card-body text-center py-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="text-start">
                                        <p class="text-muted mb-1 fs-13">Total Blogs</p>
                                        <h4 class="mb-0">{{ \App\Models\Blog::count() }}</h4>
                                    </div>
                                    <div class="avatar avatar-md rounded bg-primary-transparent">
                                        <i class="ti ti-file-text fs-20 text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card shadow-none h-100">
                            <div class="card-body text-center py-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="text-start">
                                        <p class="text-muted mb-1 fs-13">Published</p>
                                        <h4 class="mb-0">{{ \App\Models\Blog::where('status','publish')->count() }}</h4>
                                    </div>
                                    <div class="avatar avatar-md rounded bg-success-transparent">
                                        <i class="ti ti-circle-check fs-20 text-success"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card shadow-none h-100">
                            <div class="card-body text-center py-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="text-start">
                                        <p class="text-muted mb-1 fs-13">Drafts</p>
                                        <h4 class="mb-0">{{ \App\Models\Blog::where('status','draft')->count() }}</h4>
                                    </div>
                                    <div class="avatar avatar-md rounded bg-warning-transparent">
                                        <i class="ti ti-edit fs-20 text-warning"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card shadow-none h-100">
                            <div class="card-body text-center py-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="text-start">
                                        <p class="text-muted mb-1 fs-13">Total Views</p>
                                        <h4 class="mb-0">12.5K</h4>
                                    </div>
                                    <div class="avatar avatar-md rounded bg-info-transparent">
                                        <i class="ti ti-eye fs-20 text-info"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Blog Table Card -->
                <div class="card shadow-none">
                    <div class="card-header bg-white border-bottom py-2">
                        <div class="row align-items-center g-2">
                            <div class="col-md-4">
                                <h6 class="mb-0">All Blogs</h6>
                            </div>
                            <div class="col-md-8">
                                <div class="d-flex align-items-center gap-2 justify-content-md-end flex-wrap">
                                    <div class="input-icon" style="width: 200px;">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-search fs-16"></i>
                                        </span>
                                        <input type="text" id="liveSearch" class="form-control form-control-sm" placeholder="Search...">
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                            <i class="ti ti-filter me-1"></i>Filter
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="{{ route('blogs.index') }}" class="dropdown-item"><i class="ti ti-list me-2"></i>All</a></li>
                                            <li><a href="{{ route('blogs.index') }}?status=publish" class="dropdown-item"><i class="ti ti-circle-check me-2 text-success"></i>Published</a></li>
                                            <li><a href="{{ route('blogs.index') }}?status=draft" class="dropdown-item"><i class="ti ti-edit me-2 text-warning"></i>Draft</a></li>
                                        </ul>
                                    </div>
                                    <a href="{{ route('blogs.create') }}" class="btn btn-primary btn-sm">
                                        <i class="ti ti-plus me-1"></i>Add
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body p-0">
                        @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show rounded-0 border-0 mb-0">
                            <i class="isax isax-tick-circle5 me-2"></i>{{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                        @endif

                        <div class="table-responsive">
                            <table class="table table-hover table-sm mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th style="width: 50px;">#</th>
                                        <th style="width: 80px;">Image</th>
                                        <th>Title</th>
                                        <th style="width: 100px;">Category</th>
                                        <th style="width: 100px;">Status</th>
                                        <th style="width: 100px;">Date</th>
                                        <th style="width: 90px;" class="text-end">Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="blogTable">
                                    @forelse($blogs as $blog)
                                    <tr>
                                        <td class="text-muted">{{ $blog->id }}</td>
                                        <td>
                                            @if($blog->image)
                                            <img src="{{ asset('uploads/blogs/'.$blog->image) }}" class="rounded" style="width:60px;height:40px;object-fit:cover;" alt="{{ $blog->title }}">
                                            @else
                                            <div class="bg-light rounded d-flex align-items-center justify-content-center" style="width:60px;height:40px;">
                                                <i class="ti ti-photo text-muted"></i>
                                            </div>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="fw-medium mb-1">{{ Str::limit($blog->title, 60) }}</div>
                                            <small class="text-muted">{{ Str::limit(strip_tags($blog->description), 70) }}</small>
                                        </td>
                                        <td>
                                            @if($blog->category)
                                            <span class="badge badge-soft-primary badge-sm">{{ $blog->category }}</span>
                                            @else
                                            <span class="text-muted">—</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($blog->status === 'publish')
                                            <span class="badge badge-soft-success badge-sm"><i class="ti ti-circle-check me-1"></i>Live</span>
                                            @else
                                            <span class="badge badge-soft-warning badge-sm"><i class="ti ti-edit me-1"></i>Draft</span>
                                            @endif
                                        </td>
                                        <td class="text-muted fs-13">{{ $blog->created_at->format('d M Y') }}</td>
                                        <td class="text-end">
                                            <div class="d-flex gap-1 justify-content-end">
                                                <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-sm btn-light" title="Edit">
                                                    <i class="ti ti-edit"></i>
                                                </a>
                                                <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this blog?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger" title="Delete">
                                                        <i class="ti ti-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="7" class="text-center py-4">
                                            <div class="text-muted">
                                                <i class="ti ti-file-text fs-1 mb-2 d-block"></i>
                                                <p class="mb-2">No blogs yet</p>
                                                <a href="{{ route('blogs.create') }}" class="btn btn-primary btn-sm">
                                                    <i class="ti ti-plus me-1"></i>Add your first blog
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                    @if($blogs->hasPages())
                    <div class="card-footer bg-white border-top">
                        {{ $blogs->links() }}
                    </div>
                    @endif
                </div>
            </div>

            <!-- Comments Tab -->
            <div class="tab-pane fade" id="comments-content" role="tabpanel">
                
                <!-- Stats Row -->
                <div class="row mb-3">
                    <div class="col-md-4 mb-3">
                        <div class="card shadow-none h-100">
                            <div class="card-body py-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <p class="text-muted mb-1 fs-13">Pending</p>
                                        <h4 class="mb-0">{{ $pendingCount }}</h4>
                                    </div>
                                    <div class="avatar avatar-md rounded bg-warning-transparent">
                                        <i class="ti ti-clock fs-20 text-warning"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card shadow-none h-100">
                            <div class="card-body py-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <p class="text-muted mb-1 fs-13">Approved</p>
                                        <h4 class="mb-0">{{ $approvedCount }}</h4>
                                    </div>
                                    <div class="avatar avatar-md rounded bg-success-transparent">
                                        <i class="ti ti-circle-check fs-20 text-success"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card shadow-none h-100">
                            <div class="card-body py-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <p class="text-muted mb-1 fs-13">Rejected</p>
                                        <h4 class="mb-0">{{ $rejectedCount }}</h4>
                                    </div>
                                    <div class="avatar avatar-md rounded bg-danger-transparent">
                                        <i class="ti ti-circle-x fs-20 text-danger"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Comments Table -->
                <div class="card shadow-none">
                    <div class="card-header bg-white border-bottom py-2">
                        <div class="row align-items-center g-2">
                            <div class="col-md-6">
                                <h6 class="mb-0">All Comments</h6>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex gap-2 justify-content-md-end">
                                    <a href="?tab=comments&status=pending" class="btn btn-sm btn-outline-warning">
                                        <i class="ti ti-clock me-1"></i>Pending
                                    </a>
                                    <a href="?tab=comments&status=approved" class="btn btn-sm btn-outline-success">
                                        <i class="ti ti-check me-1"></i>Approved
                                    </a>
                                    <a href="?tab=comments&status=rejected" class="btn btn-sm btn-outline-danger">
                                        <i class="ti ti-x me-1"></i>Rejected
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover table-sm mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Blog Post</th>
                                        <th>Comment</th>
                                        <th style="width: 100px;">Status</th>
                                        <th style="width: 100px;">Date</th>
                                        <th style="width: 120px;" class="text-end">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($comments as $comment)
                                    <tr>
                                        <td class="fw-medium">{{ $comment->name }}</td>
                                        <td class="text-muted fs-13">{{ $comment->email }}</td>
                                        <td>
                                            @if($comment->blog)
                                            <a href="{{ route('blog.details', $comment->blog_id) }}" target="_blank" class="text-primary text-decoration-none">
                                                {{ Str::limit($comment->blog->title, 35) }}
                                            </a>
                                            @else
                                            <span class="text-muted">—</span>
                                            @endif
                                        </td>
                                        <td>{{ Str::limit($comment->message, 50) }}</td>
                                        <td>
                                            @if($comment->status === 'approved')
                                            <span class="badge badge-soft-success badge-sm"><i class="ti ti-check me-1"></i>Approved</span>
                                            @elseif($comment->status === 'pending')
                                            <span class="badge badge-soft-warning badge-sm"><i class="ti ti-clock me-1"></i>Pending</span>
                                            @else
                                            <span class="badge badge-soft-danger badge-sm"><i class="ti ti-x me-1"></i>Rejected</span>
                                            @endif
                                        </td>
                                        <td class="text-muted fs-13">{{ $comment->created_at->format('d M Y') }}</td>
                                        <td class="text-end">
                                            <div class="d-flex gap-1 justify-content-end">
                                                @if($comment->status !== 'approved')
                                                <form action="{{ route('comments.approve', $comment->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button type="submit" class="btn btn-sm btn-success" title="Approve">
                                                        <i class="ti ti-check"></i>
                                                    </button>
                                                </form>
                                                @endif
                                                @if($comment->status !== 'rejected')
                                                <form action="{{ route('comments.reject', $comment->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button type="submit" class="btn btn-sm btn-warning" title="Reject">
                                                        <i class="ti ti-x"></i>
                                                    </button>
                                                </form>
                                                @endif
                                                <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger" title="Delete">
                                                        <i class="ti ti-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="7" class="text-center py-4">
                                            <div class="text-muted">
                                                <i class="ti ti-message fs-1 mb-2 d-block"></i>
                                                <p>No comments yet</p>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @if($comments->hasPages())
                    <div class="card-footer bg-white border-top py-2">
                        {{ $comments->links() }}
                    </div>
                    @endif
                </div>
            </div>

        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
$(document).ready(function() {
    $('#liveSearch').on('keyup', function() {
        const search = $(this).val();
        $.ajax({
            url: "{{ route('blogs.search') }}",
            data: { search: search },
            success: function(data) {
                let html = '';
                if (data.length > 0) {
                    data.forEach(blog => {
                        const img = blog.image ? 
                            `<img src="/uploads/blogs/${blog.image}" class="rounded" style="width:70px;height:50px;object-fit:cover;">` :
                            `<div class="bg-light rounded d-flex align-items-center justify-content-center" style="width:70px;height:50px;"><i class="isax isax-image5 text-muted"></i></div>`;
                        
                        const status = blog.status === 'publish' ?
                            '<span class="badge badge-soft-success"><i class="isax isax-tick-circle5 me-1"></i>Published</span>' :
                            '<span class="badge badge-soft-warning"><i class="isax isax-edit-25 me-1"></i>Draft</span>';
                        
                        html += `<tr>
                            <td>${blog.id}</td>
                            <td>${img}</td>
                            <td><h6 class="mb-1">${blog.title.substring(0, 50)}</h6></td>
                            <td>${blog.category || '—'}</td>
                            <td>${status}</td>
                            <td class="text-muted">${blog.created_at}</td>
                            <td>
                                <div class="d-flex gap-1">
                                    <a href="/admin/blogs/${blog.id}/edit" class="btn btn-sm btn-light"><i class="isax isax-edit-25"></i></a>
                                </div>
                            </td>
                        </tr>`;
                    });
                } else {
                    html = '<tr><td colspan="7" class="text-center py-4 text-muted">No results found</td></tr>';
                }
                $('#blogTable').html(html);
            }
        });
    });
});
</script>
@endpush
