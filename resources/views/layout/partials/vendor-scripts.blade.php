    <!-- Jquery JS -->
    <script src="{{URL::asset('build/js/jquery-3.7.1.min.js')}}"></script>

    <!-- Bootstrap JS -->
    <script src="{{URL::asset('build/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Wow JS -->
    <script src="{{URL::asset('build/js/wow.min.js')}}"></script>

@if (Route::is(['agent-chat', 'agent-dashboard', 'agent-earnings', 'agent-enquirers', 'agent-hotel-booking', 'agent-listings', 'chat', 'dashboard']))
    <!-- Apex JS -->
    <script src="{{URL::asset('build/plugins/apexchart/apexcharts.min.js')}}"></script>
    <script src="{{URL::asset('build/plugins/apexchart/chart-data.js')}}"></script>
@endif

    <!-- MeanMenu Js -->
    <script src="{{URL::asset('build/js/jquery.meanmenu.min.js')}}"></script>

@if (Route::is(['activity-details', 'agent-account-settings', 'agent-activities-booking', 'agent-bus-booking', 'agent-business-details', 'agent-cancellation-requests', 'agent-car-booking', 'agent-chat', 'agent-commission-summary', 'agent-cruise-booking', 'agent-dashboard', 'agent-listings', 'agent-notifications', 'agent-payment-history', 'agent-pending-payouts', 'agent-plans-settings', 'agent-plans', 'agent-security-settings', 'agent-settings-notifications', 'agent-settings', 'agent-tour-guide', 'agent-visa-booking', 'bus-details', 'car-details', 'chat', 'cruise-details', 'customer-activities-booking', 'customer-bus-booking', 'customer-car-booking', 'customer-coupons', 'customer-cruise-booking', 'customer-flight-booking', 'customer-gift-cards', 'customer-hotel-booking', 'customer-loyalty-points', 'customer-referral-program', 'customer-reward-history', 'customer-tour-booking', 'customer-tour-guides', 'customer-visa-booking', 'dashboard', 'destination-details', 'faq', 'flight-details', 'gallery', 'guide-details', 'hotel-details', 'index-2', 'index-3', 'index-4', 'index-5', 'index-6', 'index-7', 'index-8', 'index-10', 'index-11', 'index-12', 'index-rtl', 'index', '/', 'integration-settings', 'my-profile', 'notification-settings', 'notification', 'preferences-sttings', 'pricing-plan-2', 'pricing-plan', 'profile-settings', 'recently-viewed', 'security-settings', 'support-fixes', 'testimonial', 'tour-details', 'visa-details', 'wallet', 'wishlist']))
    <!-- Fancybox JS -->
    <script src="{{URL::asset('build/plugins/fancybox/jquery.fancybox.min.js')}}"></script>
@endif

@if (Route::is(['activity-details', 'bus-details', 'car-details', 'cruise-details', 'destination-details', 'flight-details', 'index-2', 'index-4', 'index-9', 'index-10', 'index-11', 'index-12', 'index', '/', 'tour-details']))
    <!-- Slick Slider -->
    <script src="{{URL::asset('build/plugins/slick/slick.min.js')}}"></script>
@endif

@if (!Route::is(['login', 'register', 'forgot-password', 'change-password', 'error-404', 'error-500', 'coming-soon', 'under-maintenance', 'lock-screen']))
    <!-- Owlcarousel Js -->
    <script src="{{URL::asset('build/plugins/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Sticky Sidebar JS -->
    <script src="{{URL::asset('build/plugins/theia-sticky-sidebar/ResizeSensor.js')}}"></script>
    <script src="{{URL::asset('build/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js')}}"></script>
@endif

@if (Route::is(['about-us', 'activity-booking-confirmation', 'activity-booking', 'activity-grid', 'activity-list', 'activity-map', 'become-an-expert', 'blog-details', 'blog-grid', 'blog-list', 'booking-confirmation', 'bus-booking-confirmation', 'bus-booking', 'bus-left-sidebar', 'bus-list', 'bus-right-sidebar', 'bus-seat-selection', 'car-booking-information', 'card-booking', 'car-grid', 'car-list', 'car-map', 'contact-us', 'cruise-booking-confirmation', 'cruise-booking', 'cruise-grid', 'cruise-list', 'cruise-map', 'error-404', 'error-500', 'faq', 'flight-booking-confirmation', 'flight-booking', 'flight-grid', 'flight-list', 'flight-map', 'gallery', 'guide-booking-confirmation', 'guide-booking', 'guide-details', 'guide-grid', 'hotel-booking', 'hotel-grid', 'hotel-list', 'hotel-map', 'invoices', 'pricing-plan-2', 'pricing-plan', 'privacy-policy', 'terms-conditions', 'testimonial', 'tour-booking-confirmation', 'tour-booking', 'tour-grid', 'tour-list', 'tour-map', 'visa-booking-details', 'visa-details', 'visa-grid', 'visa-list', 'visa-requirements', 'visa-tracking']))
    <!-- Rangeslider JS -->
    <script src="{{URL::asset('build/plugins/ion-rangeslider/js/ion.rangeSlider.js')}}"></script>
    <script src="{{URL::asset('build/plugins/ion-rangeslider/js/custom-rangeslider.js')}}"></script>
    <script src="{{URL::asset('build/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
@endif

@if (!Route::is(['login', 'register', 'forgot-password', 'change-password', 'error-404', 'error-500', 'coming-soon', 'under-maintenance', 'lock-screen']))
    <!-- Select2 JS -->
    <script src="{{URL::asset('build/plugins/select2/js/select2.min.js')}}"></script>
@endif

@if (Route::is(['add-activity', 'add-bus', 'add-car', 'add-cruise', 'add-flight', 'add-guide', 'add-hotel', 'add-tour', 'add-visa', 'agent-enquiry-details', 'edit-bus', 'edit-car', 'edit-cruise', 'edit-flight', 'edit-hotel', 'edit-tour']))
    <!-- Quill Editor JS -->
    <script src="{{URL::asset('build/plugins/quill/quill.min.js')}}"></script>
@endif

@if (!Route::is(['login', 'register', 'forgot-password', 'change-password', 'error-404', 'error-500', 'coming-soon', 'under-maintenance', 'lock-screen']))
    <!-- Counter JS -->
    <script src="{{URL::asset('build/js/jquery.counterup.min.js')}}"></script>
    <script src="{{URL::asset('build/js/jquery.waypoints.min.js')}}"></script>

    <!-- Datepicker Core JS -->
    <script src="{{URL::asset('build/plugins/moment/moment.js')}}"></script>
    <script src="{{URL::asset('build/js/bootstrap-datetimepicker.min.js')}}"></script>
@endif

@if (Route::is(['agent-account-settings', 'agent-activities-booking', 'agent-bus-booking', 'agent-business-details', 'agent-cancellation-requests', 'agent-car-booking', 'agent-commission-summary', 'agent-cruise-booking', 'agent-earnings', 'agent-enquirers', 'agent-flight-booking', 'agent-hotel-booking', 'agent-payment-history', 'agent-pending-payouts', 'agent-plans-settings', 'agent-plans', 'agent-review', 'agent-security-settings', 'agent-settings-notifications', 'agent-settings', 'agent-tour-booking', 'agent-tour-guide', 'agent-visa-booking', 'customer-activities-booking', 'customer-bus-booking', 'customer-car-booking', 'customer-coupons', 'customer-cruise-booking', 'customer-flight-booking', 'customer-gift-cards', 'customer-hotel-booking', 'customer-loyalty-points', 'customer-referral-program', 'customer-reward-history', 'customer-tour-booking', 'customer-tour-guides', 'customer-visa-booking', 'destination', 'index-2', 'index-3', 'index-4', 'index-5', 'index-6', 'index-7', 'index-8', 'index-10', 'index-11', 'index-12', 'index-rtl', 'index', '/', 'integration-settings', 'notification-settings', 'payment', 'preferences-settings', 'profile-settings', 'review', 'security-settings', 'support-fixes', 'wallet', 'wishlist']))
    <!-- Daterangepikcer JS -->
    <script src="{{URL::asset('build/js/moment.js')}}"></script>
    <script src="{{URL::asset('build/plugins/daterangepicker/daterangepicker.js')}}"></script>
@endif

@if (Route::is(['chat', 'agent-chat']))
    <!-- Slimscroll JS -->
    <script src="{{URL::asset('build/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
@endif

@if (Route::is(['hotel-map']))
    <!-- map JS -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6adZVdzTvBpE2yBRK8cDfsss8QXChK0I"></script>
    <script src="{{URL::asset('build/js/map-grid.js')}}"></script>
@endif

@if (Route::is(['car-map']))
    <!-- map JS -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6adZVdzTvBpE2yBRK8cDfsss8QXChK0I"></script>
    <script src="{{URL::asset('build/js/map-car.js')}}"></script>
@endif

@if (Route::is(['cruise-map']))
    <!-- map JS -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6adZVdzTvBpE2yBRK8cDfsss8QXChK0I"></script>
    <script src="{{URL::asset('build/js/map-cruise.js')}}"></script>
@endif

@if (Route::is(['tour-map']))
    <!-- map JS -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6adZVdzTvBpE2yBRK8cDfsss8QXChK0I"></script>
    <script src="{{URL::asset('build/js/map-tour.js')}}"></script>
@endif

@if (Route::is(['activity-map']))
    <!-- map JS -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6adZVdzTvBpE2yBRK8cDfsss8QXChK0I"></script>
    <script src="{{URL::asset('build/js/map-activity.js')}}"></script>
@endif

    <!-- cursor JS -->
    <script src="{{URL::asset('build/js/cursor.js')}}"></script>

@if (Route::is(['agent-account-settings', 'agent-plans-settings', 'agent-plans', 'agent-security-settings', 'security-settings']))
    <!-- Mobile Input -->
    <script src="{{URL::asset('build/plugins/intltelinput/js/intlTelInput.js')}}"></script>
@endif

@if (!Route::is(['index-rtl']))
    <!-- Script JS -->
    <script src="{{URL::asset('build/js/script.js')}}"></script>
@endif

@if (Route::is(['index-rtl']))
    <!-- Script JS -->
    <script src="{{URL::asset('build/js/script-rtl.js')}}"></script>
@endif