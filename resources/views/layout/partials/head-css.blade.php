    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{URL::asset('build/img/apple-touch-icon.png')}}">

    <!-- Favicon -->
    <link rel="icon" href="{{URL::asset('build/img/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{URL::asset('build/img/favicon.png')}}" type="image/x-icon">

@if (!Route::is(['index-rtl']))
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{URL::asset('build/css/bootstrap.min.css')}}">
@endif

@if (Route::is(['index-rtl']))
	<!-- Bootstrap RTL CSS -->
	<link rel="stylesheet" href="{{URL::asset('build/css/bootstrap.rtl.min.css')}}">
@endif

@if (!Route::is(['login','register','forgot-password','change-password','error-404','error-500','under-maintenance','coming-soon','index-rtl']))
    <!-- Theme Settings Js -->
    <script src="{{URL::asset('build/js/theme-script.js')}}"></script>
@endif

@if (!Route::is(['login','register','forgot-password','change-password','error-404','error-500','under-maintenance','coming-soon','index-rtl']))
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{URL::asset('build/css/animate.css')}}">
@endif

    <!-- Main.css -->
    <link rel="stylesheet" href="{{URL::asset('build/css/meanmenu.css')}}">

    <!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="{{URL::asset('build/plugins/tabler-icons/tabler-icons.css')}}">

    <!-- Fontawesome Icon CSS -->
    <link rel="stylesheet" href="{{URL::asset('build/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('build/plugins/fontawesome/css/all.min.css')}}">

@if (Route::is(['activity-details', 'bus-details', 'car-details', 'cruise-details', 'destination-details', 'flight-details', 'index-2', 'index-4', 'index-9', 'index-10', 'index-11', 'index-12', 'index', '/', 'tour-details']))
    <!-- Slick CSS -->
    <link rel="stylesheet" href="{{URL::asset('build/plugins/slick/slick.css')}}">
@endif

@if (Route::is(['activity-details', 'agent-account-settings', 'agent-activities-booking', 'agent-bus-booking', 'agent-business-details', 'agent-cancellation-requests', 'agent-car-booking', 'agent-chat', 'agent-commission-summary', 'agent-cruise-booking', 'agent-dashboard', 'agent-listings', 'agent-notifications', 'agent-payment-history', 'agent-pending-payouts', 'agent-plans-settings', 'agent-plans', 'agent-security-settings', 'agent-settings-notifications', 'agent-settings', 'agent-tour-guide', 'agent-visa-booking', 'bus-details', 'car-details', 'chat', 'cruise-details', 'customer-activities-booking', 'customer-bus-booking', 'customer-car-booking', 'customer-coupons', 'customer-cruise-booking', 'customer-flight-booking', 'customer-gift-cards', 'customer-hotel-booking', 'customer-loyalty-points', 'customer-referral-program', 'customer-reward-history', 'customer-tour-booking', 'customer-tour-guides', 'customer-visa-booking', 'dashboard', 'destination-details', 'faq', 'flight-details', 'gallery', 'guide-details', 'hotel-details', 'index-2', 'index-3', 'index-4', 'index-5', 'index-6', 'index-7', 'index-8', 'index-10', 'index-11', 'index-12', 'index-rtl', 'index', '/', 'integration-settings', 'my-profile', 'notification-settings', 'notification', 'preferences-sttings', 'pricing-plan-2', 'pricing-plan', 'profile-settings', 'recently-viewed', 'security-settings', 'support-fixes', 'testimonial', 'tour-details', 'visa-details', 'wallet', 'wishlist']))
    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="{{URL::asset('build/plugins/fancybox/jquery.fancybox.min.css')}}">
@endif

@if (!Route::is(['login', 'register', 'forgot-password', 'change-password', 'error-404', 'error-500', 'coming-soon', 'under-maintenance', 'lock-screen']))
    <!-- Owlcarousel CSS -->
    <link rel="stylesheet" href="{{URL::asset('build/plugins/owlcarousel/owl.carousel.min.css')}}">

    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="{{URL::asset('build/css/bootstrap-datetimepicker.min.css')}}">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{URL::asset('build/plugins/select2/css/select2.min.css')}}">
@endif

    <!-- Iconsax CSS -->
    <link rel="stylesheet" href="{{URL::asset('build/css/iconsax.css')}}">

@if (Route::is(['about-us', 'activity-booking-confirmation', 'activity-booking', 'activity-grid', 'activity-list', 'activity-map', 'become-an-expert', 'blog-details', 'blog-grid', 'blog-list', 'booking-confirmation', 'bus-booking-confirmation', 'bus-booking', 'bus-left-sidebar', 'bus-list', 'bus-right-sidebar', 'bus-seat-selection', 'car-booking-information', 'card-booking', 'car-grid', 'car-list', 'car-map', 'contact-us', 'cruise-booking-confirmation', 'cruise-booking', 'cruise-grid', 'cruise-list', 'cruise-map', 'error-404', 'error-500', 'faq', 'flight-booking-confirmation', 'flight-booking', 'flight-grid', 'flight-list', 'flight-map', 'gallery', 'guide-booking-confirmation', 'guide-booking', 'guide-details', 'guide-grid', 'hotel-booking', 'hotel-grid', 'hotel-list', 'hotel-map', 'invoices', 'pricing-plan-2', 'pricing-plan', 'privacy-policy', 'terms-conditions', 'testimonial', 'tour-booking-confirmation', 'tour-booking', 'tour-grid', 'tour-list', 'tour-map', 'visa-booking-details', 'visa-details', 'visa-grid', 'visa-list', 'visa-requirements', 'visa-tracking']))
    <!-- Rangeslider CSS -->
    <link rel="stylesheet" href="{{URL::asset('build/plugins/ion-rangeslider/css/ion.rangeSlider.css')}}">
    <link rel="stylesheet" href="{{URL::asset('build/plugins/ion-rangeslider/css/ion.rangeSlider.min.css')}}">
@endif

@if (Route::is(['add-activity', 'add-bus', 'add-car', 'add-cruise', 'add-flight', 'add-guide', 'add-hotel', 'add-tour', 'add-visa', 'agent-enquiry-details', 'edit-bus', 'edit-car', 'edit-cruise', 'edit-flight', 'edit-hotel', 'edit-tour']))
    <!-- Quill css -->
    <link rel="stylesheet" href="{{URL::asset('build/plugins/quill/quill.core.css')}}">
    <link rel="stylesheet" href="{{URL::asset('build/plugins/quill/quill.snow.css')}}">
@endif

@if (Route::is(['agent-account-settings', 'agent-plans-settings', 'agent-plans', 'agent-security-settings', 'security-settings']))
    <!-- Mobile CSS-->
    <link rel="stylesheet" href="{{URL::asset('build/plugins/intltelinput/css/intlTelInput.css')}}">
@endif

@if (Route::is(['agent-account-settings', 'agent-activities-booking', 'agent-bus-booking', 'agent-business-details', 'agent-cancellation-requests', 'agent-car-booking', 'agent-commission-summary', 'agent-cruise-booking', 'agent-earnings', 'agent-enquirers', 'agent-flight-booking', 'agent-hotel-booking', 'agent-payment-history', 'agent-pending-payouts', 'agent-plans-settings', 'agent-plans', 'agent-review', 'agent-security-settings', 'agent-settings-notifications', 'agent-settings', 'agent-tour-booking', 'agent-tour-guide', 'agent-visa-booking', 'customer-activities-booking', 'customer-bus-booking', 'customer-car-booking', 'customer-coupons', 'customer-cruise-booking', 'customer-flight-booking', 'customer-gift-cards', 'customer-hotel-booking', 'customer-loyalty-points', 'customer-referral-program', 'customer-reward-history', 'customer-tour-booking', 'customer-tour-guides', 'customer-visa-booking', 'destination', 'index-2', 'index-3', 'index-4', 'index-5', 'index-6', 'index-7', 'index-8', 'index-10', 'index-11', 'index-12', 'index-rtl', 'index', '/', 'integration-settings', 'notification-settings', 'payment', 'preferences-settings', 'profile-settings', 'review', 'security-settings', 'support-fixes', 'wallet', 'wishlist']))
    <!-- Daterangepikcer CSS -->
    <link rel="stylesheet" href="{{URL::asset('build/plugins/daterangepicker/daterangepicker.css')}}">
@endif

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{URL::asset('build/css/style.css')}}">