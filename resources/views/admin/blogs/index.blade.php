@extends('admin.layout')
@section('admin_title', 'Blog Dashboard')

@section('content')

@php use Illuminate\Support\Str; @endphp




<!-- Page Wrapper -->
<div class="content">
    <div class="container">
        <div class="row">

            <!-- ══════════════ SIDEBAR ══════════════ -->
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
                        <div class="d-flex align-items-center justify-content-center gap-2 mt-2">
                            <span class="badge badge-soft-success badge-md rounded-pill">
                                <i class="isax isax-verify5 me-1"></i>Admin
                            </span>
                        </div>
                    </div>
                    <div class="card-body user-sidebar-body">
                        <ul>
                            <li>
                                <a href="{{ route('blogs.index') }}"
                                    class="d-flex align-items-center {{ request()->is('admin/blogs') && !request()->is('admin/blogs/create') ? 'active' : '' }}">
                                    <i class="isax isax-grid-55 me-2"></i>Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('blogs.create') }}"
                                    class="d-flex align-items-center {{ request()->is('admin/blogs/create') ? 'active' : '' }}">
                                    <i class="isax isax-add-circle5 me-2"></i>Add Blog
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.analytics') }}" class="d-flex align-items-center">
                                    <i class="isax isax-chart-25 me-2"></i>Analytics
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.users') }}" class="d-flex align-items-center">
                                    <i class="isax isax-profile-2user5 me-2"></i>Users
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.comments') }}" class="d-flex align-items-center">
                                    <i class="isax isax-message-text-15 me-2"></i>Comments
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.settings') }}" class="d-flex align-items-center">
                                    <i class="isax isax-setting-25 me-2"></i>Settings
                                </a>
                            </li>
                            <li class="logout-link">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit"
                                        class="d-flex align-items-center pb-0 w-100 border-0 bg-transparent text-start"
                                        style="cursor:pointer; color:inherit; font-size:inherit; padding: 10px 0;">
                                        <i class="isax isax-logout-15 me-2"></i>Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Sidebar -->

            <!-- ══════════════ MAIN CONTENT ══════════════ -->
            <div class="col-xl-9 col-lg-8">

                <!-- Stat Cards -->
                <div class="row">
                    <div class="col-xl-3 col-sm-6 d-flex">
                        <div class="card shadow-none flex-fill">
                            <div class="card-body text-center">
                                <span class="avatar avatar rounded-circle bg-primary mb-2">
                                    <i class="isax isax-document-text5 fs-24"></i>
                                </span>
                                <p class="mb-1">Total Blogs</p>
                                <h5 class="mb-2">{{ \App\Models\Blog::count() }}</h5>
                                <a href="{{ route('blogs.index') }}" class="fs-14 link-primary text-decoration-underline">View All</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 d-flex">
                        <div class="card shadow-none flex-fill">
                            <div class="card-body text-center">
                                <span class="avatar avatar rounded-circle bg-success mb-2">
                                    <i class="isax isax-tick-circle5 fs-24"></i>
                                </span>
                                <p class="mb-1">Published</p>
                                <h5 class="mb-2">{{ \App\Models\Blog::where('status','publish')->count() }}</h5>
                                <p class="d-flex align-items-center justify-content-center fs-14">
                                    <i class="isax isax-arrow-up-15 me-1 text-success"></i>Live on site
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 d-flex">
                        <div class="card shadow-none flex-fill">
                            <div class="card-body text-center">
                                <span class="avatar avatar rounded-circle bg-orange mb-2">
                                    <i class="isax isax-edit-25 fs-24"></i>
                                </span>
                                <p class="mb-1">Drafts</p>
                                <h5 class="mb-2">{{ \App\Models\Blog::where('status','draft')->count() }}</h5>
                                <p class="fs-14 text-muted">Unpublished</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 d-flex">
                        <div class="card shadow-none flex-fill">
                            <div class="card-body text-center">
                                <span class="avatar avatar rounded-circle bg-info mb-2">
                                    <i class="isax isax-eye4 fs-24"></i>
                                </span>
                                <p class="mb-1">Total Views</p>
                                <h5 class="mb-2">12.5K</h5>
                                <p class="d-flex align-items-center justify-content-center fs-14">
                                    <i class="isax isax-arrow-up-15 me-1 text-success"></i>8% this month
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Blog Table Card -->
                <div class="card shadow-none">
                    <div class="card-body">

                        <!-- Table header -->
                        <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
                            <h6 class="mb-0">All Blogs</h6>
                            <div class="d-flex align-items-center gap-2 flex-wrap">
                                <!-- Live search -->
                                <div class="input-icon">
                                    <span class="input-icon-addon">
                                        <i class="isax isax-search-normal-15"></i>
                                    </span>
                                    <input type="text"
                                        id="liveSearch"
                                        class="form-control"
                                        placeholder="Search blogs…"
                                        style="width:220px;">
                                </div>
                                <!-- Filter by status -->
                                <div class="dropdown">
                                    <a href="#"
                                        class="dropdown-toggle btn bg-light-200 btn-sm text-gray-6 rounded-pill fw-normal fs-14 d-inline-flex align-items-center"
                                        data-bs-toggle="dropdown">
                                        <i class="isax isax-calendar-2 me-2 fs-14 text-gray-6"></i>Filter
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                        <li><a href="{{ route('blogs.index') }}" class="dropdown-item rounded-1"><i class="ti ti-point-filled me-1"></i>All</a></li>
                                        <li><a href="{{ route('blogs.index') }}?status=publish" class="dropdown-item rounded-1"><i class="ti ti-point-filled me-1 text-success"></i>Published</a></li>
                                        <li><a href="{{ route('blogs.index') }}?status=draft" class="dropdown-item rounded-1"><i class="ti ti-point-filled me-1 text-warning"></i>Draft</a></li>
                                    </ul>
                                </div>
                                <a href="{{ route('blogs.create') }}" class="btn btn-primary btn-sm d-inline-flex align-items-center gap-1">
                                    <i class="isax isax-add-circle5 fs-16"></i> Add Blog
                                </a>
                            </div>
                        </div>

                        @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show rounded-3 mb-4" role="alert">
                            <i class="isax isax-tick-circle5 me-2"></i>{{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                        @endif

                        <!-- Table -->
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="blogTable">
                                    @forelse($blogs as $blog)
                                    <tr>
                                        <td class="fs-14 text-gray-6">{{ $blog->id }}</td>
                                        <td>
                                            @if($blog->image)
                                            <a href="#" class="avatar avatar-lg flex-shrink-0">
                                                <img src="{{ asset('uploads/blogs/'.$blog->image) }}"
                                                    class="img-fluid rounded"
                                                    style="width:70px;height:50px;object-fit:cover;"
                                                    alt="{{ $blog->title }}">
                                            </a>
                                            @else
                                            <span class="avatar avatar-lg rounded bg-light-200 d-flex align-items-center justify-content-center">
                                                <i class="isax isax-image5 fs-20 text-gray-6"></i>
                                            </span>
                                            @endif
                                        </td>
                                        <td>
                                            <h6 class="fs-15 fw-medium mb-1">{{ Str::limit($blog->title, 45) }}</h6>
                                            <p class="fs-13 text-gray-6 mb-0">{{ Str::limit(strip_tags($blog->description), 55) }}</p>
                                        </td>
                                        <td>
                                            @if($blog->category)
                                            <span class="badge badge-soft-primary badge-sm rounded-pill">
                                                <i class="isax isax-tag5 me-1"></i>{{ $blog->category }}
                                            </span>
                                            @else
                                            <span class="text-gray-6 fs-14">—</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($blog->status === 'publish')
                                            <span class="badge badge-soft-success badge-sm rounded-pill">
                                                <i class="isax isax-tick-circle5 me-1"></i>Published
                                            </span>
                                            @else
                                            <span class="badge badge-soft-warning badge-sm rounded-pill">
                                                <i class="isax isax-edit-25 me-1"></i>Draft
                                            </span>
                                            @endif
                                        </td>
                                        <td class="fs-14 text-gray-6">
                                            <i class="isax isax-calendar-2 me-1"></i>
                                            {{ $blog->created_at->format('d M Y') }}
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <a href="{{ route('blogs.edit', $blog->id) }}"
                                                    class="btn btn-sm bg-light-200 text-gray-9 d-inline-flex align-items-center gap-1">
                                                    <i class="isax isax-edit-25 fs-14"></i>Edit
                                                </a>
                                                <form action="{{ route('blogs.destroy', $blog->id) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Delete this blog?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-sm bg-danger-transparent text-danger d-inline-flex align-items-center gap-1">
                                                        <i class="isax isax-trash5 fs-14"></i>Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="7" class="text-center py-5">
                                            <span class="avatar avatar-xl rounded-circle bg-light-200 d-inline-flex align-items-center justify-content-center mb-3">
                                                <i class="isax isax-document-text5 fs-28 text-gray-6"></i>
                                            </span>
                                            <p class="text-gray-6 mb-2">No blogs yet.</p>
                                            <a href="{{ route('blogs.create') }}" class="btn btn-primary btn-sm">
                                                <i class="isax isax-add-circle5 me-1"></i>Add your first blog
                                            </a>
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination -->
                        <div class="mt-3">
                            {{ $blogs->links() }}
                        </div>

                    </div>
                </div>
                <!-- /Blog Table Card -->

            </div>
            <!-- /Main Content -->

        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    $('#liveSearch').on('keyup', function() {
        const search = $(this).val();
        $.ajax({
            url: "{{ url('/admin/blogs/search') }}",
            dataType: 'json',
            data: {
                search
            },
            success: function(data) {
                if (!Array.isArray(data)) {
                    window.location.href = "{{ url('/admin-login') }}";
                    return;
                }

                let rows = '';
                if (data.length) {
                    data.forEach(b => {
                        const img = b.image ?
                            `<a href="#" class="avatar avatar-lg flex-shrink-0">
                               <img src="/uploads/blogs/${b.image}" class="img-fluid rounded"
                                    style="width:70px;height:50px;object-fit:cover;" alt="${b.title}">
                           </a>` :
                            `<span class="avatar avatar-lg rounded bg-light-200 d-flex align-items-center justify-content-center">
                               <i class="isax isax-image5 fs-20 text-gray-6"></i>
                           </span>`;

                        const statusBadge = b.status === 'publish' ?
                            `<span class="badge badge-soft-success badge-sm rounded-pill"><i class="isax isax-tick-circle5 me-1"></i>Published</span>` :
                            `<span class="badge badge-soft-warning badge-sm rounded-pill"><i class="isax isax-edit-25 me-1"></i>Draft</span>`;

                        const catBadge = b.category ?
                            `<span class="badge badge-soft-primary badge-sm rounded-pill"><i class="isax isax-tag5 me-1"></i>${b.category}</span>` :
                            `<span class="text-gray-6 fs-14">—</span>`;

                        rows += `<tr>
                        <td class="fs-14 text-gray-6">${b.id}</td>
                        <td>${img}</td>
                        <td><h6 class="fs-15 fw-medium mb-1">${b.title}</h6></td>
                        <td>${catBadge}</td>
                        <td>${statusBadge}</td>
                        <td class="fs-14 text-gray-6"></td>
                        <td>
                            <a href="/admin/blogs/${b.id}/edit"
                               class="btn btn-sm bg-light-200 text-gray-9 d-inline-flex align-items-center gap-1">
                                <i class="isax isax-edit-25 fs-14"></i>Edit
                            </a>
                        </td>
                    </tr>`;
                    });
                } else {
                    rows = `<tr><td colspan="7" class="text-center py-4 text-gray-6">No results found</td></tr>`;
                }
                $('#blogTable').html(rows);
            },
            error: function(jqXHR, textStatus) {
                if (jqXHR.status === 401 || jqXHR.status === 419 || textStatus === 'parsererror') {
                    window.location.href = "{{ url('/admin-login') }}";
                }
            }
        });
    });
</script>
@endpush
