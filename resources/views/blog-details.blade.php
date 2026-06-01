<?php $page="blog-details";?>
@extends('layout.mainlayout')

{{-- Dynamic <title> --------------------------------------------------------}}
@section('meta_title', $blog->meta_title ?: $blog->title)

{{-- Dynamic <meta name="description"> -------------------------------------}}
@section('meta_description', $blog->meta_description ?: ($blog->excerpt ?: \Illuminate\Support\Str::limit(strip_tags($blog->description), 160)))

@section('content')

    <!-- Breadcrumb -->
    <div class="breadcrumb-bar breadcrumb-bg-01 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title mb-2">{{ $blog->title }}</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/') }}"><i class="isax isax-home5"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ url('blog') }}">Blog</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Wrapper -->
    <div class="content">
        <div class="container">
            <div class="row">

                <!-- ══════════════ MAIN CONTENT ══════════════ -->
                <div class="col-lg-8 col-md-12">
                    <div class="card blog-details mb-4 mb-lg-0">
                        <div class="card-body">
                            <div class="blog-content">

                                <!-- Featured Image -->
                                <div class="blog-image mb-3">
                                    @if($blog->image)
                                        <img src="{{ asset('uploads/blogs/' . $blog->image) }}"
                                             alt="{{ $blog->title }}"
                                             class="img-fluid rounded w-100"
                                             style="max-height:450px; object-fit:cover;">
                                    @else
                                        <img src="{{ URL::asset('build/img/blog/blog-sm-01.jpg') }}"
                                             alt="{{ $blog->title }}"
                                             class="img-fluid rounded">
                                    @endif
                                </div>

                                <!-- Meta row: author | date | category -->
                                <div class="d-flex align-items-center flex-wrap row-gap-2 mb-3">
                                    <a href="#"
                                       class="d-flex align-items-center fs-16 text-gray-9 pe-3 border-end me-3">
                                        <img src="{{ URL::asset('build/img/users/user-01.jpg') }}"
                                             alt="author"
                                             class="img-fluid avatar avatar-sm rounded-circle me-2">
                                        {{ $blog->author ?? 'Admin' }}
                                    </a>
                                    <div class="pe-3 border-end me-3">
                                        <span class="d-flex align-items-center fs-16 text-gray-9">
                                            <i class="isax isax-calendar-2 me-1"></i>
                                            {{ $blog->created_at->format('d M Y') }}
                                        </span>
                                    </div>
                                    @if($blog->category)
                                        <div>
                                            <span class="badge badge-sm badge-primary">
                                                {{ $blog->category }}
                                            </span>
                                        </div>
                                    @endif
                                </div>

                                <!-- Title -->
                                <div class="mb-3">
                                    <h2>{{ $blog->title }}</h2>
                                </div>

                                <!-- Excerpt (if set) -->
                                @if($blog->excerpt)
                                    <div class="mb-3">
                                        <p class="text-gray-6 fs-16 fw-medium">{{ $blog->excerpt }}</p>
                                    </div>
                                @endif

                                <!-- Full Description (rich HTML from CKEditor) -->
                                <div class="mb-3 text-gray-6 blog-description" style="line-height:1.8;">
                                    {!! $blog->description !!}
                                </div>

                                <!-- Tags & Share -->
                                <div class="mt-4 pb-3 border-bottom d-flex flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="d-flex align-items-center flex-wrap gap-2">
                                        <p class="fs-16 text-gray-9 mb-0 me-1">Tags :</p>
                                        @if($blog->tags)
                                            @foreach(array_filter(array_map('trim', explode(',', $blog->tags))) as $tag)
                                                <a href="{{ url('blog') }}?tag={{ urlencode($tag) }}"
                                                   class="badge badge-sm badge-secondary">
                                                    {{ $tag }}
                                                </a>
                                            @endforeach
                                        @else
                                            <span class="text-gray-6 fs-14">No tags</span>
                                        @endif
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <p class="fs-16 text-gray-9 mb-0 me-1">Share :</p>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}"
                                           target="_blank" class="me-1">
                                            <img src="{{ URL::asset('build/img/icons/facebook.svg') }}" alt="Facebook" class="img-fluid">
                                        </a>
                                        <a href="https://www.instagram.com/" target="_blank" class="me-1">
                                            <img src="{{ URL::asset('build/img/icons/insta.svg') }}" alt="Instagram" class="img-fluid">
                                        </a>
                                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($blog->title) }}"
                                           target="_blank" class="me-1">
                                            <img src="{{ URL::asset('build/img/icons/twitter.svg') }}" alt="Twitter" class="img-fluid">
                                        </a>
                                        <a href="https://wa.me/?text={{ urlencode($blog->title . ' ' . request()->fullUrl()) }}"
                                           target="_blank">
                                            <img src="{{ URL::asset('build/img/icons/whatsapp.svg') }}" alt="WhatsApp" class="img-fluid">
                                        </a>
                                    </div>
                                </div>

                                <!-- Author Box -->
                                <div class="my-4">
                                    <div class="border border-light br-10 p-3 d-md-flex align-items-center">
                                        <div class="blog-user-image me-md-3 mb-3 mb-md-0 flex-shrink-0">
                                            <img src="{{ URL::asset('build/img/users/user-01.jpg') }}"
                                                 alt="author"
                                                 class="img-fluid rounded">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="fs-14 text-primary mb-1">About Author</h6>
                                            <h6 class="fs-16 mb-1">{{ $blog->author ?? 'Admin' }}</h6>
                                            <p class="fs-15 text-gray-6 mb-0">
                                                Passionate travel writer sharing tips, guides and destination stories
                                                from around the world.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Approved Comments -->
                                @php
                                    $approvedComments = $blog->comments()->where('status','approved')->latest()->get();
                                @endphp

                                @if($approvedComments->count())
                                    <h6 class="mb-3">Comments ({{ $approvedComments->count() }})</h6>
                                    @foreach($approvedComments as $comment)
                                        <div class="my-3">
                                            <div class="border border-light rounded p-3">
                                                <div class="d-flex align-items-center justify-content-between mb-3">
                                                    <div class="d-flex align-items-center">
                                                        <span class="avatar avatar-md rounded-circle bg-primary d-flex align-items-center justify-content-center text-white fw-bold me-2">
                                                            {{ strtoupper(substr($comment->name, 0, 1)) }}
                                                        </span>
                                                        <div>
                                                            <h6 class="mb-0">{{ $comment->name }}</h6>
                                                            <span class="fs-13 fw-normal text-gray-6">
                                                                {{ $comment->created_at->diffForHumans() }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="fs-14 text-gray-6 mb-0">{{ $comment->message }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif

                                <!-- Write A Comment -->
                                <h6 class="mb-3 mt-4">Write A Comment</h6>

                                @if(session('comment_success'))
                                    <div class="alert alert-success alert-dismissible fade show rounded-3 mb-3">
                                        <i class="isax isax-tick-circle5 me-2"></i>
                                        {{ session('comment_success') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                    </div>
                                @endif

                                <form action="{{ route('comment.store', $blog->id) }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Name <span class="text-danger">*</span></label>
                                                <input type="text"
                                                       name="name"
                                                       class="form-control @error('name') is-invalid @enderror"
                                                       placeholder="Your name"
                                                       value="{{ old('name') }}"
                                                       required>
                                                @error('name')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Email <span class="text-danger">*</span></label>
                                                <input type="email"
                                                       name="email"
                                                       class="form-control @error('email') is-invalid @enderror"
                                                       placeholder="Your email"
                                                       value="{{ old('email') }}"
                                                       required>
                                                @error('email')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Message <span class="text-danger">*</span></label>
                                                <textarea name="message"
                                                          class="form-control @error('message') is-invalid @enderror"
                                                          rows="4"
                                                          placeholder="Write your comment…"
                                                          required>{{ old('message') }}</textarea>
                                                @error('message')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-sm btn-primary">
                                            <i class="isax isax-send-25 me-1"></i>Post Comment
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Main Content -->

                <!-- ══════════════ SIDEBAR ══════════════ -->
                <div class="col-lg-4 col-md-12 theiaStickySidebar">

                    <!-- Search -->
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="pb-3 border-bottom mb-3">
                                <h5 class="d-flex align-items-center">
                                    <span class="me-1 fs-16">
                                        <i class="isax isax-search-normal text-primary"></i>
                                    </span>
                                    Search
                                </h5>
                            </div>
                            <div class="blog-search">
                                <div class="search-content">
                                    <div class="search-feild position-relative">
                                        <span><i class="isax isax-search-normal"></i></span>
                                        <form action="{{ url('blog') }}" method="GET">
                                            <input type="text"
                                                   name="search"
                                                   class="form-control"
                                                   placeholder="Search blogs…">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Categories (dynamic) -->
                    <div class="card mb-3">
                        <div class="card-header border-0 pb-0">
                            <div class="pb-3 border-bottom">
                                <h5><i class="isax isax-candle text-primary fs-16 me-2"></i>Categories</h5>
                            </div>
                        </div>
                        <div class="card-body pt-3">
                            @forelse($categories as $cat)
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h6 class="fw-medium mb-0">
                                        <a href="{{ url('blog') }}?category={{ urlencode($cat->category) }}">
                                            {{ $cat->category }}
                                        </a>
                                    </h6>
                                    <p>({{ $cat->total }})</p>
                                </div>
                            @empty
                                <p class="text-gray-6 fs-14">No categories yet.</p>
                            @endforelse
                        </div>
                    </div>

                    <!-- Related Posts (dynamic) -->
                    <div class="card mb-3">
                        <div class="card-header border-0 pb-0">
                            <div class="pb-3 border-bottom">
                                <h5>
                                    <i class="ti ti-brand-blogger text-primary fs-16 me-2"></i>Related Posts
                                </h5>
                            </div>
                        </div>
                        <div class="card-body pt-3">
                            @forelse($related as $rel)
                                <div class="blog-post {{ !$loop->last ? 'mb-3' : '' }}">
                                    <div class="d-flex align-items-center">
                                        <a href="{{ route('blog.details', $rel->id) }}"
                                           class="avatar avatar-xxl me-2 flex-shrink-0">
                                            @if($rel->image)
                                                <img src="{{ asset('uploads/blogs/' . $rel->image) }}"
                                                     class="rounded"
                                                     style="width:70px;height:55px;object-fit:cover;"
                                                     alt="{{ $rel->title }}">
                                            @else
                                                <img src="{{ URL::asset('build/img/blog/blog-09.jpg') }}"
                                                     class="rounded"
                                                     alt="{{ $rel->title }}">
                                            @endif
                                        </a>
                                        <div>
                                            <a href="{{ route('blog.details', $rel->id) }}"
                                               class="two-line-ellipsis fs-14 fw-medium">
                                                {{ $rel->title }}
                                            </a>
                                            <div class="d-flex align-items-center mt-2">
                                                <a href="#"
                                                   class="d-flex align-items-center border-end pe-2 me-2">
                                                    <span class="avatar avatar-xs me-1">
                                                        <img src="{{ URL::asset('build/img/users/user-01.jpg') }}"
                                                             class="blog-user-img rounded-circle border border-light"
                                                             alt="author">
                                                    </span>
                                                    <p class="fs-14 text-truncate">
                                                        {{ Str::limit($rel->author ?? 'Admin', 10) }}
                                                    </p>
                                                </a>
                                                <p class="fs-14 text-truncate">
                                                    <i class="isax isax-calendar-2 me-1"></i>
                                                    {{ $rel->created_at->format('d M Y') }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p class="text-gray-6 fs-14">No related posts found.</p>
                            @endforelse
                        </div>
                    </div>

                    <!-- Popular Tags (dynamic from this blog + related) -->
                    <div class="card mb-0">
                        <div class="card-header border-0 pb-0">
                            <div class="pb-3 border-bottom">
                                <h5><i class="isax isax-tag text-primary fs-16 me-2"></i>Popular Tags</h5>
                            </div>
                        </div>
                        <div class="card-body pt-3 pb-2">
                            <div class="d-flex align-items-center flex-wrap category-tag">
                                @php
                                    // Collect all tags from current blog + related
                                    $allTags = collect();
                                    if ($blog->tags) {
                                        $allTags = $allTags->merge(
                                            array_filter(array_map('trim', explode(',', $blog->tags)))
                                        );
                                    }
                                    foreach ($related as $rel) {
                                        if ($rel->tags) {
                                            $allTags = $allTags->merge(
                                                array_filter(array_map('trim', explode(',', $rel->tags)))
                                            );
                                        }
                                    }
                                    $allTags = $allTags->unique()->values();
                                @endphp

                                @forelse($allTags as $tag)
                                    <a href="{{ url('blog') }}?tag={{ urlencode($tag) }}"
                                       class="badge badge-md fw-normal me-2 mb-2">
                                        {{ $tag }}
                                    </a>
                                @empty
                                    <a href="#" class="badge badge-md fw-normal me-2 mb-2">Travel</a>
                                    <a href="#" class="badge badge-md fw-normal me-2 mb-2">Guide</a>
                                    <a href="#" class="badge badge-md fw-normal me-2 mb-2">Tips</a>
                                @endforelse
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /Sidebar -->

            </div>
        </div>
    </div>

@endsection
