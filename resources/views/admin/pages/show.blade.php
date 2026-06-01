@extends('admin.layout')

@section('content')
    <div class="table-card">
        <h3>{{ $page->title }}</h3>
        <p class="text-muted mb-3">{{ $page->description }}</p>

        <div class="page-content">
            {!! $page->content !!}
        </div>
    </div>
@endsection
