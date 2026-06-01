<?php $page = 'admin-dashboard'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Dashboard – DreamsTour</title>

    @include('layout.partials.head-css')
</head>
<body>

@include('layout.partials.topbar')

@yield('content')

@include('layout.partials.footer')

<!-- Cursor -->
<div class="xb-cursor tx-js-cursor">
    <div class="xb-cursor-wrapper">
        <div class="xb-cursor--follower xb-js-follower"></div>
    </div>
</div>

@component('components.back-to-top')@endcomponent
@component('components.modal-popup')@endcomponent

@include('layout.partials.vendor-scripts')

</body>
</html>
