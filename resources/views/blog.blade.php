<?php $page = "blog"; ?>
@extends('layout.mainlayout')
@section('content')

<!-- Breadcrumb -->
<div class="breadcrumb-bar breadcrumb-bg-02 text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-12">
                <h2 class="breadcrumb-title mb-2">Blog</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{url('/')}}"><i class="isax isax-home5"></i></a>
                        </li>
                        <li class="breadcrumb-item">Pages</li>
                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->

<!-- Page Wrapper -->
<div class="content">
    <div class="container">

        @if(isset($blogs) && $blogs->count() > 0)

        {{-- ── Dynamic blogs from DB ─────────────────────────────── --}}
        <div class="row justify-content-center">
@foreach($blogs as $blog)
<div class="col-xl-4 col-md-6">
    <div class="blog-item mb-4 wow fadeInUp" data-wow-delay="0.2s">

        <a href="{{ route('blog.details', $blog->id) }}" class="blog-img">

            @if($blog->image)
                <img src="{{ asset('uploads/blogs/'.$blog->image) }}"
                     alt="{{ $blog->title }}"
                     style="height:260px;width:100%;object-fit:cover;">
            @else
                <img src="{{ URL::asset('build/img/blog/blog-02.jpg') }}"
                     alt="{{ $blog->title }}"
                     style="height:260px;width:100%;object-fit:cover;">
            @endif

        </a>

        <span class="badge bg-primary fs-13 fw-medium">
            {{ $blog->category ?? 'Travel' }}
        </span>

        <div class="blog-info text-center">

            <div class="d-inline-flex align-items-center justify-content-center">

                <div class="d-inline-flex align-items-center border-end pe-3 me-3 mb-2">
                    <a href="#" class="d-flex align-items-center">

                        <span class="avatar avatar-sm me-2">
                            <img src="{{ URL::asset('build/img/users/user-02.jpg') }}"
                                 class="rounded-circle border border-white"
                                 alt="author">
                        </span>

                        <p>{{ $blog->author ?? 'Admin' }}</p>

                    </a>
                </div>

                <p class="text-white mb-2">
                    <i class="isax isax-calendar-2 me-2"></i>
                    {{ $blog->created_at->format('d M Y') }}
                </p>

            </div>

            <h5>
                <a href="{{ route('blog.details', $blog->id) }}">
                    {{ \Illuminate\Support\Str::limit($blog->title, 65) }}
                </a>
            </h5>

        </div>

    </div>
</div>
@endforeach


            {{-- Pagination --}}
            @if($blogs->hasPages())
            <div class="col-6">
                <nav class="pagination-nav">
                    <ul class="pagination justify-content-center">
                        {{-- Previous --}}
                        <li class="page-item {{ $blogs->onFirstPage() ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $blogs->previousPageUrl() }}">
                                <i class="fa-solid fa-chevron-left"></i>
                            </a>
                        </li>
                        @foreach($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
                        <li class="page-item {{ $blogs->currentPage() === $page ? 'active' : '' }}">
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                        @endforeach
                        {{-- Next --}}
                        <li class="page-item {{ !$blogs->hasMorePages() ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $blogs->nextPageUrl() }}">
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            @endif

        </div>

        @else

        {{-- ── No blogs yet message ─────────────────────────────── --}}
        <div class="row justify-content-center">
            <div class="col-md-6 text-center py-5">
                <i class="isax isax-document-text" style="font-size:60px;color:#e2e8f0;"></i>
                <h5 class="mt-3 text-muted">No blogs published yet</h5>
                <p class="text-muted">Check back soon for travel tips, guides and more.</p>
            </div>
        </div>

        @endif

    </div>
</div>
<!-- /Page Wrapper -->

@endsection