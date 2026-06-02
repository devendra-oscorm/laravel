
<!DOCTYPE html>
@if(!Route::is(['index-rtl']))
<html lang="en">
@endif
@if(Route::is(['index-rtl']))
<html lang="en" dir="rtl">
@endif
<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @stack('meta_tags')
    @hasSection('meta_title')
        <title>@yield('meta_title') – DreamsTour</title>
        <meta name="description" content="@yield('meta_description')">
    @else
        <title>DreamsTour - Travel and Tour Booking Bootstrap 5 template</title>
        <meta name="description" content="DreamsTour - A premium Bootstrap 5 template crafted for travel and tour booking. Tailored for travel agencies and booking platforms, it features flight, hotel, and tour reservations, and holiday packages.">
    @endif
    <meta name="keywords" content="travel booking template, tour booking, Bootstrap 5 travel template, DreamsTour, hotel booking, flights booking, holiday packages, tour agency website, travel agency template, travel HTML template, booking system, responsive travel template, Bootstrap travel website">
    <meta name="author" content="Dreams Technologies">
    <meta name="robots" content="index, follow">

@include('layout.partials.head-css')
</head>

@php
    $isErrorPage   = in_array($page ?? '', ['error-404','error-500','under-maintenance','coming-soon']);
    $isAuthPage    = in_array($page ?? '', ['login','register','forgot-password','change-password']);
    $isNoShellPage = $isErrorPage || $isAuthPage || Route::is(['index-10','index-12','admin.login','admin.register']);
@endphp

@if(!$isNoShellPage)
<body>
@endif

@if(Route::is(['index-2']))
 <!-- Loader -->
 <div id="loader-wrapper">
    <div id="loader">
        <span class="loader-line"></span>
    </div>
</div>
<!-- /Loader -->
@endif

@if($isAuthPage)
<body class="bg-light-200">
@endif

@if($isErrorPage)
<body class="bg-primary-transparent">
@endif
@if(($page ?? '') === 'coming-soon')
<body class="coming-soon-bg">
@endif

@if(!$isNoShellPage)
@include('layout.partials.topbar')
@endif
@yield('content')
@if(!$isNoShellPage)
@include('layout.partials.footer')
@endif

<!-- Cursor -->
<div class="xb-cursor tx-js-cursor">
    <div class="xb-cursor-wrapper">
        <div class="xb-cursor--follower xb-js-follower"></div>
    </div>
</div>
<!-- /Cursor -->

@component('components.back-to-top')
@endcomponent

@component('components.modal-popup')
@endcomponent

@include('layout.partials.vendor-scripts')

</body>
</html>