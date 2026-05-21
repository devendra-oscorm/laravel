
@if (!Route::is(['index-2']))
    <div class="main-header">
        <!-- Header Topbar-->
        <div class="header-topbar text-center bg-transparent">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between flex-wrap">
                    <p class="d-flex align-items-center fw-medium fs-14 mb-2"><i class="isax isax-call5 me-2"></i>Toll
                        Free : +1 56565 56594</p>
                    <div class="d-flex align-items-center">
                        <p class="mb-2 me-3 d-flex align-items-center fw-medium fs-14"><i
                                class="isax isax-message-text-15 me-2"></i>Email : info@example.com</p>
                        <div class="dropdown flag-dropdown mb-2 me-3">
                            <a href="#" class="dropdown-toggle d-inline-flex align-items-center"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{URL::asset('build/img/flags/us-flag.svg')}}" class="me-2" alt="flag">ENG
                            </a>
                            <ul class="dropdown-menu p-2 mt-2">
                                <li>
                                    <a class="dropdown-item rounded d-flex align-items-center" href="#">
                                        <img src="{{URL::asset('build/img/flags/us-flag.svg')}}" class="me-2" alt="flag">ENG
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item rounded d-flex align-items-center" href="#">
                                        <img src="{{URL::asset('build/img/flags/arab-flag.svg')}}" class="me-2" alt="flag">ARA
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item rounded d-flex align-items-center" href="#">
                                        <img src="{{URL::asset('build/img/flags/france-flag.svg')}}" class="me-2" alt="flag">FRA
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="dropdown mb-2 me-3">
                            <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                USD
                            </a>
                            <ul class="dropdown-menu p-2 mt-2">
                                <li><a class="dropdown-item rounded" href="#">USD</a></li>
                                <li><a class="dropdown-item rounded" href="#">YEN</a></li>
                                <li><a class="dropdown-item rounded" href="#">EURO</a></li>
                            </ul>
                        </div>
                        <div class="fav-dropdown mb-2">
                            <a href="{{url('wishlist')}}" class="position-relative">
                                <i class="isax isax-heart"></i><span
                                    class="count-icon bg-secondary text-gray-9">0</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Header Topbar-->

        <!-- Header -->
        <header>
            <div class="container">
                <div class="offcanvas-info">
                    <div class="offcanvas-wrap">
                        <div class="offcanvas-detail">
                            <div class="offcanvas-head">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <a href="{{url('index-2')}}" class="black-logo-responsive">
                                        <img src="{{URL::asset('build/img/logo-dark.svg')}}" alt="logo-img">
                                    </a>
                                    <a href="{{url('index-2')}}" class="white-logo-responsive">
                                        <img src="{{URL::asset('build/img/logo.svg')}}" alt="logo-img">
                                    </a>
                                    <div class="offcanvas-close">
                                        <i class="ti ti-x"></i>
                                    </div>
                                </div>
                                <div class="wishlist-info d-flex justify-content-between align-items-center">
                                    <h6 class="fs-16 fw-medium">Wishlist</h6>
                                    <div class="d-flex align-items-center">
                                        <div class="fav-dropdown">
                                            <a href="{{url('wishlist')}}" class="position-relative">
                                                <i class="isax isax-heart"></i><span
                                                    class="count-icon bg-secondary text-gray-9">0</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mobile-menu fix mb-3"></div>
                            <div class="offcanvas__contact">
                                <div class="mt-4">
                                    <a href="{{url('add-hotel')}}" class="btn btn-primary w-100">Add Listing</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="offcanvas-overlay"></div>
                <div class="header-nav">
                    <div class="main-menu-wrapper">
                        <div class="navbar-logo">
                            <a class="logo-white header-logo" href="{{url('index-2')}}">
                                <img src="{{URL::asset('build/img/logo.svg')}}" class="logo" alt="Logo">
                            </a>
                            <a class="logo-dark header-logo" href="{{url('index-2')}}">
                                <img src="{{URL::asset('build/img/logo-dark.svg')}}" class="logo" alt="Logo">
                            </a>
                        </div>



                        <nav id="mobile-menu">
                            <ul class="main-nav">
                          
                                <li class="{{ Request::is('index-2', '/') ? 'active' : '' }}">
    <a href="{{url('index-2')}}">Home</a>
   </li>
                                <li class="has-submenu mega-innermenu {{ Request::is('flight-grid', 'edit-flight', 'flight-list', 'flight-details', 'flight-booking', 'flight-booking-confirmation', 'add-flight') ? 'active subdrop' : ''; }}">
                                    <a href="#">Flight<i class="fa-solid fa-angle-down"></i></a>
                                    <ul class="submenu mega-submenu">
                                        <li>
                                            <div class="megamenu-wrapper">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <h6>Flight Bookings</h6>
                                                        <ul>
                                                            <li class="{{ Request::is('flight-grid', 'edit-flight') ? 'active' : ''; }}"><a href="{{url('flight-grid')}}">Flight Grid</a></li>
                                                            <li class="{{ Request::is('flight-list') ? 'active' : ''; }}"><a href="{{url('flight-list')}}">Flight List</a></li>
                                                            <li class="{{ Request::is('flight-details', 'flight-booking') ? 'active' : ''; }}"><a href="{{url('flight-details')}}">Flight Details</a></li>
                                                            <li class="{{ Request::is('flight-booking-confirmation') ? 'active' : ''; }}"><a href="{{url('flight-booking-confirmation')}}">Flight
                                                                    Booking</a></li>
                                                            <li class="{{ Request::is('add-flight') ? 'active' : ''; }}"><a href="{{url('add-flight')}}">Add Flight</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="menu-img">
                                                            <img src="{{URL::asset('build/img/menu/flight.jpg')}}" alt="img"
                                                                class="img-fluid">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-submenu mega-innermenu {{ Request::is('hotel-grid', 'edit-hotel', 'hotel-list', 'hotel-map', 'hotel-details', 'hotel-booking', 'booking-confirmation', 'add-hotel') ? 'active subdrop' : ''; }}">
                                    <a href="#">Hotel<i class="fa-solid fa-angle-down"></i></a>
                                    <ul class="submenu mega-submenu">
                                        <li>
                                            <div class="megamenu-wrapper">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <h6>Hotel Bookings</h6>
                                                        <ul>
                                                            <li class="{{ Request::is('hotel-grid', 'edit-hotel') ? 'active' : ''; }}"><a href="{{url('hotel-grid')}}">Hotel Grid</a></li>
                                                            <li class="{{ Request::is('hotel-list') ? 'active' : ''; }}"><a href="{{url('hotel-list')}}">Hotel List</a></li>
                                                            <li class="{{ Request::is('hotel-map') ? 'active' : ''; }}"><a href="{{url('hotel-map')}}">Hotel Map</a></li>
                                                            <li class="{{ Request::is('hotel-details', 'hotel-booking') ? 'active' : ''; }}"><a href="{{url('hotel-details')}}">Hotel Details</a></li>
                                                            <li class="{{ Request::is('booking-confirmation') ? 'active' : ''; }}"><a href="{{url('booking-confirmation')}}">Hotel Booking</a>
                                                            </li>
                                                            <li class="{{ Request::is('add-hotel') ? 'active' : ''; }}"><a href="{{url('add-hotel')}}">Add Hotel</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="menu-img">
                                                            <img src="{{URL::asset('build/img/menu/hotel.jpg')}}" alt="img"
                                                                class="img-fluid">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-submenu mega-innermenu {{ Request::is('car-grid', 'edit-car', 'car-list', 'car-map', 'car-details', 'car-booking', 'car-booking-confirmation', 'add-car') ? 'active subdrop' : ''; }}">
                                    <a href="#">Car<i class="fa-solid fa-angle-down"></i></a>
                                    <ul class="submenu mega-submenu">
                                        <li>
                                            <div class="megamenu-wrapper">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <h6>Car Bookings</h6>
                                                        <ul>
                                                            <li class="{{ Request::is('car-grid', 'edit-car') ? 'active' : ''; }}"><a href="{{url('car-grid')}}">Car Grid</a></li>
                                                            <li class="{{ Request::is('car-list') ? 'active' : ''; }}"><a href="{{url('car-list')}}">Car List</a></li>
                                                            <li class="{{ Request::is('car-map') ? 'active' : ''; }}"><a href="{{url('car-map')}}">Car Map</a></li>
                                                            <li class="{{ Request::is('car-details', 'car-booking') ? 'active' : ''; }}"><a href="{{url('car-details')}}">Car Details</a></li>
                                                            <li class="{{ Request::is('car-booking-confirmation') ? 'active' : ''; }}"><a href="{{url('car-booking-confirmation')}}">Car Booking</a>
                                                            </li>
                                                            <li class="{{ Request::is('add-car') ? 'active' : ''; }}"><a href="{{url('add-car')}}">Add Car</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="menu-img">
                                                            <img src="{{URL::asset('build/img/menu/car.jpg')}}" alt="img"
                                                                class="img-fluid">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-submenu mega-innermenu {{ Request::is('cruise-grid', 'edit-cruise', 'cruise-list', 'cruise-map', 'cruise-details', 'cruise-booking', 'cruise-booking-confirmation', 'add-cruise') ? 'active subdrop' : ''; }}">
                                    <a href="#">Cruise<i class="fa-solid fa-angle-down"></i></a>
                                    <ul class="submenu mega-submenu">
                                        <li>
                                            <div class="megamenu-wrapper">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <h6>Cruise Bookings</h6>
                                                        <ul>
                                                            <li class="{{ Request::is('cruise-grid', 'edit-cruise') ? 'active' : ''; }}"><a href="{{url('cruise-grid')}}">Cruise Grid</a></li>
                                                            <li class="{{ Request::is('cruise-list') ? 'active' : ''; }}"><a href="{{url('cruise-list')}}">Cruise List</a></li>
                                                            <li class="{{ Request::is('cruise-map') ? 'active' : ''; }}"><a href="{{url('cruise-map')}}">Cruise Map</a></li>
                                                            <li class="{{ Request::is('cruise-details', 'cruise-booking') ? 'active' : ''; }}"><a href="{{url('cruise-details')}}">Cruise Details</a></li>
                                                            <li class="{{ Request::is('cruise-booking-confirmation') ? 'active' : ''; }}"><a href="{{url('cruise-booking-confirmation')}}">Cruise
                                                                    Booking</a></li>
                                                            <li class="{{ Request::is('add-cruise') ? 'active' : ''; }}"><a href="{{url('add-cruise')}}">Add Cruise</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="menu-img">
                                                            <img src="{{URL::asset('build/img/menu/cruise.jpg')}}" alt="img"
                                                                class="img-fluid">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-submenu mega-innermenu {{ Request::is('tour-grid', 'edit-tour', 'tour-list', 'tour-map', 'tour-details', 'tour-booking', 'tour-booking-confirmation', 'add-tour') ? 'active subdrop' : ''; }}">
                                    <a href="#">Tour<i class="fa-solid fa-angle-down"></i></a>
                                    <ul class="submenu mega-submenu">
                                        <li>
                                            <div class="megamenu-wrapper">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <h6>Tour Bookings</h6>
                                                        <ul>
                                                            <li class="{{ Request::is('tour-grid', 'edit-tour') ? 'active' : ''; }}"><a href="{{url('tour-grid')}}">Tour Grid</a></li>
                                                            <li class="{{ Request::is('tour-list') ? 'active' : ''; }}"><a href="{{url('tour-list')}}">Tour List</a></li>
                                                            <li class="{{ Request::is('tour-map') ? 'active' : ''; }}"><a href="{{url('tour-map')}}">Tour Map</a></li>
                                                            <li class="{{ Request::is('tour-details', 'tour-booking') ? 'active' : ''; }}"><a href="{{url('tour-details')}}">Tour Details</a></li>
                                                            <li class="{{ Request::is('tour-booking-confirmation') ? 'active' : ''; }}"><a href="{{url('tour-booking-confirmation')}}">Tour
                                                                    Booking</a></li>
                                                            <li class="{{ Request::is('add-tour') ? 'active' : ''; }}"><a href="{{url('add-tour')}}">Add Tour</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="menu-img">
                                                            <img src="{{URL::asset('build/img/menu/tour.jpg')}}" alt="img"
                                                                class="img-fluid">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-submenu mega-innermenu {{ Request::is('bus-list', 'bus-left-sidebar', 'bus-right-sidebar', 'bus-details', 'bus-seat-selection', 'bus-booking', 'bus-booking-confirmation', 'add-bus') ? 'active subdrop' : ''; }}">
                                    <a href="#">Bus<i class="fa-solid fa-angle-down"></i></a>
                                    <ul class="submenu mega-submenu">
                                        <li>
                                            <div class="megamenu-wrapper">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <h6>Bus Bookings</h6>
                                                        <ul>
                                                            <li class="{{ Request::is('bus-grid', 'edit-bus') ? 'active' : ''; }}"><a href="{{url('bus-list')}}">Bus List</a></li>
                                                            <li class="{{ Request::is('bus-left-sidebar') ? 'active' : ''; }}"><a href="{{url('bus-left-sidebar')}}">Bus Left Sidebar</a>
                                                            </li>
                                                            <li class="{{ Request::is('bus-right-sidebar') ? 'active' : ''; }}"><a href="{{url('bus-right-sidebar')}}">Bus Right Sidebar</a>
                                                            </li>
                                                            <li class="{{ Request::is('bus-details') ? 'active' : ''; }}"><a href="{{url('bus-details')}}">Bus Details</a></li>
                                                            <li class="{{ Request::is('bus-seat-selection') ? 'active' : ''; }}"><a href="{{url('bus-seat-selection')}}">Bus Seat Selection</a>
                                                            </li>
                                                            <li class="{{ Request::is('bus-booking', 'bus-booking-confirmation') ? 'active' : ''; }}"><a href="{{url('bus-booking')}}">Bus Booking</a></li>
                                                            <li class="{{ Request::is('add-bus') ? 'active' : ''; }}"><a href="{{url('add-bus')}}">Add Bus</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="menu-img">
                                                            <img src="{{URL::asset('build/img/menu/bus.jpg')}}" alt="img"
                                                                class="img-fluid">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-submenu megamenutab {{ Request::is('activity-grid', 'activity-list', 'activity-map', 'activity-details', 'activity-booking', 'activity-booking-confirmation', 'add-activity', 'visa-grid', 'visa-requirements', 'visa-list', 'visa-details', 'visa-booking-details', 'add-visa', 'visa-tracking', 'guide-grid', 'guide-details', 'guide-booking', 'guide-booking-confirmation', 'add-guide', 'about-us', 'gallery', 'testimonial', 'faq', 'pricing-plan', 'pricing-plan-2', 'team', 'invoices', 'blog-grid', 'blog-list', 'blog-details', 'index-rtl', 'destination', 'destination-details', 'recently-viewed', 'booking-confirmation', 'terms-conditions', 'privacy-policy', 'login',  'forgot-password', 'change-password', 'error-404', 'error-500', 'dashboard', 'customer-gift-cards', 'customer-loyalty-points', 'customer-referral-program', 'customer-reward-history', 'customer-tour-guides', 'chat', 'support-fixes', 'customer-activities-booking', 'customer-bus-booking', 'customer-flight-booking', 'customer-cruise-booking', 'customer-hotel-booking', 'customer-tour-booking', 'customer-car-booking', 'customer-visa-booking', 'review', 'wishlist', 'wallet', 'payment', 'customer-coupons', 'profile-settings', 'notification', 'my-profile', 'security-settings', 'notification-settings', 'integration-settings', 'agent-dashboard', 'agent-business-details', 'agent-cancellation-requests', 'agent-commission-summary', 'agent-tour-guide', 'agent-visa-booking', 'agent-listings', 'agent-activities-booking', 'agent-bus-booking', 'agent-flight-booking', 'agent-hotel-booking', 'agent-tour-booking', 'agent-cruise-booking', 'agent-car-booking', 'agent-enquirers', 'agent-earnings', 'agent-payment-history', 'agent-pending-payouts', 'agent-review', 'agent-settings', 'agent-account-settings', 'agent-security-settings', 'agent-plans-settings', 'agent-settings-notifications') ? 'active' : ''; }}">
                                    <a href="#">Pages<i class="fa-solid fa-angle-down"></i></a>
                                    <ul class="submenu mega-submenu">
                                        <li>
                                            <div class="megamenu-wrapper">
                                                <div class="row">
                                                    <!-- Left Side Tabs -->
                                                    <div class="col-lg-3">
                                                        <div class="nav flex-column nav-pills menu-tab" id="menu-tab"
                                                            role="tablist" aria-orientation="vertical">
                                                            <ul>
                                                                <li>
                                                                    <a class="nav-link {{ Request::is('activity-grid', 'activity-list', 'activity-map', 'activity-details', 'activity-booking', 'activity-booking-confirmation', 'add-activity') ? 'active' : ''; }}" id="activity-tab"
                                                                        data-bs-toggle="tab" href="#activity"
                                                                        role="tab">
                                                                        Activity
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="nav-link {{ Request::is('visa-grid', 'visa-requirements', 'visa-list', 'visa-details', 'visa-booking-details', 'add-visa', 'visa-tracking') ? 'active' : ''; }}" id="visa-tab"
                                                                        data-bs-toggle="tab" href="#visa" role="tab">
                                                                        Visa
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="nav-link {{ Request::is('guide-grid', 'guide-details', 'guide-booking', 'guide-booking-confirmation', 'add-guide') ? 'active' : ''; }}" id="guide-tab"
                                                                        data-bs-toggle="tab" href="#guide" role="tab">
                                                                        Guide
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="nav-link {{ Request::is('about-us', 'gallery', 'testimonial', 'faq', 'pricing-plan', 'pricing-plan-2', 'team', 'invoices', 'blog-grid', 'blog-list', 'blog-details', 'index-rtl', 'destination', 'destination-details', 'recently-viewed', 'booking-confirmation', 'terms-conditions', 'privacy-policy', 'login', 'register', 'forgot-password', 'change-password', 'error-404', 'error-500') ? 'active' : ''; }}" id="pages-tab"
                                                                        data-bs-toggle="tab" href="#pages" role="tab">
                                                                        Pages
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="nav-link {{ Request::is('dashboard', 'customer-gift-cards', 'customer-loyalty-points', 'customer-referral-program', 'customer-reward-history', 'customer-tour-guides', 'chat', 'support-fixes', 'customer-activities-booking', 'customer-bus-booking', 'customer-flight-booking', 'customer-cruise-booking', 'customer-hotel-booking', 'customer-tour-booking', 'customer-car-booking', 'customer-visa-booking', 'review', 'wishlist', 'wallet', 'payment', 'customer-coupons', 'profile-settings', 'notification', 'my-profile', 'security-settings', 'notification-settings', 'integration-settings', 'agent-dashboard', 'agent-business-details', 'agent-cancellation-requests', 'agent-commission-summary', 'agent-tour-guide', 'agent-visa-booking', 'agent-listings', 'agent-activities-booking', 'agent-bus-booking', 'agent-flight-booking', 'agent-hotel-booking', 'agent-tour-booking', 'agent-cruise-booking', 'agent-car-booking', 'agent-enquirers', 'agent-earnings', 'agent-payment-history', 'agent-pending-payouts', 'agent-review', 'agent-settings', 'agent-account-settings', 'agent-security-settings', 'agent-plans-settings', 'agent-settings-notifications') ? 'active' : ''; }}" id="dashboard-tab"
                                                                        data-bs-toggle="tab" href="#dashboard"
                                                                        role="tab">
                                                                        Dashboard
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- Right Side Content -->
                                                    <div class="col-lg-9">
                                                        <div class="tab-content tab-menulist" id="menu-tabContent">
                                                            <div class="tab-pane fade {{ Request::is('activity-grid', 'activity-list', 'activity-map', 'activity-details', 'activity-booking', 'activity-booking-confirmation', 'add-activity') ? 'active show' : ''; }}" id="activity" role="tabpanel">
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <h6>Activity</h6>
                                                                        <ul>
                                                                            <li class="{{ Request::is('activity-grid') ? 'active' : ''; }}"><a href="{{url('activity-grid')}}">Activity
                                                                                    Grid</a></li>
                                                                            <li class="{{ Request::is('activity-list') ? 'active' : ''; }}"><a href="{{url('activity-list')}}">Activity
                                                                                    List</a></li>
                                                                            <li class="{{ Request::is('activity-map') ? 'active' : ''; }}"><a href="{{url('activity-map')}}">Activity
                                                                                    Map</a></li>
                                                                            <li class="{{ Request::is('activity-details', 'activity-booking') ? 'active' : ''; }}"><a href="{{url('activity-details')}}">Activity
                                                                                    Details</a></li>
                                                                            <li class="{{ Request::is('activity-booking-confirmation') ? 'active' : ''; }}"><a
                                                                                    href="{{url('activity-booking-confirmation')}}">Activity
                                                                                    Booking Confirmation</a></li>
                                                                            <li class="{{ Request::is('add-activity') ? 'active' : ''; }}"><a href="{{url('add-activity')}}">Add
                                                                                    Activity</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="menu-img">
                                                                            <img src="{{URL::asset('build/img/menu/activity.jpg')}}"
                                                                                alt="img" class="img-fluid">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade {{ Request::is('visa-grid', 'visa-requirements', 'visa-list', 'visa-details', 'visa-booking-details', 'add-visa', 'visa-tracking') ? 'active show' : ''; }}" id="visa" role="tabpanel">
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <h6>Visa</h6>
                                                                        <ul>
                                                                            <li class="{{ Request::is('visa-grid', 'visa-requirements') ? 'active' : ''; }}"><a href="{{url('visa-grid')}}">Visa Grid</a>
                                                                            </li>
                                                                            <li class="{{ Request::is('visa-list') ? 'active' : ''; }}"><a href="{{url('visa-list')}}">Visa List</a>
                                                                            </li>
                                                                            <li class="{{ Request::is('visa-details') ? 'active' : ''; }}"><a href="{{url('visa-details')}}">Visa
                                                                                    Details</a></li>
                                                                            <li class="{{ Request::is('visa-booking-details') ? 'active' : ''; }}"><a href="{{url('visa-booking-details')}}">Visa
                                                                                    Booking Confirmation</a></li>
                                                                            <li class="{{ Request::is('add-visa') ? 'active' : ''; }}"><a href="{{url('add-visa')}}">Add Visa</a>
                                                                            </li>
                                                                            <li class="{{ Request::is('visa-tracking') ? 'active' : ''; }}"><a href="{{url('visa-tracking')}}">Track
                                                                                    Visa</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="menu-img">
                                                                            <img src="{{URL::asset('build/img/menu/visa.jpg')}}"
                                                                                alt="img" class="img-fluid">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade {{ Request::is('guide-grid', 'guide-details', 'guide-booking', 'guide-booking-confirmation', 'add-guide') ? 'active show' : ''; }}" id="guide" role="tabpanel">
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <h6>Guide</h6>
                                                                        <ul>
                                                                            <li class="{{ Request::is('guide-grid') ? 'active' : ''; }}"><a href="{{url('guide-grid')}}">Guide Grid</a>
                                                                            </li>
                                                                            <li class="{{ Request::is('guide-details') ? 'active' : ''; }}"><a href="{{url('guide-details')}}">Guide
                                                                                    Details</a></li>
                                                                            <li class="{{ Request::is('guide-booking') ? 'active' : ''; }}"><a href="{{url('guide-booking')}}">Guide
                                                                                    Booking</a></li>
                                                                            <li class="{{ Request::is('guide-booking-confirmation') ? 'active' : ''; }}"><a
                                                                                    href="{{url('guide-booking-confirmation')}}">Guide
                                                                                    Booking Confirmation</a></li>
                                                                            <li class="{{ Request::is('add-guide') ? 'active' : ''; }}"><a href="{{url('add-guide')}}">Add Guide</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="menu-img">
                                                                            <img src="{{URL::asset('build/img/menu/guide.jpg')}}"
                                                                                alt="img" class="img-fluid">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade {{ Request::is('about-us', 'gallery', 'testimonial', 'faq', 'pricing-plan', 'pricing-plan-2', 'team', 'invoices', 'blog-grid', 'blog-list', 'blog-details', 'index-rtl', 'destination', 'destination-details', 'recently-viewed', 'booking-confirmation', 'terms-conditions', 'privacy-policy', 'login', 'register', 'forgot-password', 'change-password', 'error-404', 'error-500') ? 'active show' : ''; }}" id="pages"
                                                                role="tabpanel">
                                                                <h6>Pages</h6>
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <ul>
                                                                            <li class="{{ Request::is('about-us') ? 'active' : ''; }}"><a href="{{url('about-us')}}">About</a></li>
                                                                            <li class="{{ Request::is('gallery') ? 'active' : ''; }}"><a href="{{url('gallery')}}">Gallery</a></li>
                                                                            <li class="{{ Request::is('testimonial') ? 'active' : ''; }}"><a
                                                                                    href="{{url('testimonial')}}">Testimonials</a>
                                                                            </li>
                                                                            <li class="{{ Request::is('faq') ? 'active' : ''; }}"><a href="{{url('faq')}}">Faq</a></li>
                                                                            <li class="{{ Request::is('pricing-plan') ? 'active' : ''; }}"><a href="{{url('pricing-plan')}}">Pricing
                                                                                    Plan</a></li>
                                                                            <li class="{{ Request::is('pricing-plan-2') ? 'active' : ''; }}"><a href="{{url('pricing-plan-2')}}">Pricing
                                                                                    Plan 2</a></li>
                                                                            <li class="{{ Request::is('team') ? 'active' : ''; }}"><a href="{{url('team')}}">Teams</a></li>
                                                                            <li class="{{ Request::is('invoices') ? 'active' : ''; }}"><a
                                                                                    href="{{url('invoices')}}">Invoice</a>
                                                                            </li>
                                                                            <li class="{{ Request::is('blog-grid') ? 'active' : ''; }}"><a href="{{url('blog-grid')}}">Blogs Grid</a>
                                                                            </li>
                                                                            <li class="{{ Request::is('blog-list') ? 'active' : ''; }}"><a href="{{url('blog-list')}}">Blogs List</a>
                                                                            </li>
                                                                            <li class="{{ Request::is('blog-details') ? 'active' : ''; }}"><a href="{{url('blog-details')}}">Blogs
                                                                                    Details</a></li>
                                                                            <li class="{{ Request::is('index-rtl') ? 'active' : ''; }}"><a href="{{url('index-rtl')}}">RTL</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <ul>
                                                                            <li class="{{ Request::is('destination') ? 'active' : ''; }}"><a
                                                                                    href="{{url('destination')}}">Destination</a>
                                                                            </li>
                                                                            <li class="{{ Request::is('destination-details') ? 'active' : ''; }}"><a href="{{url('destination-details')}}">Destination
                                                                                    Details</a></li>
                                                                            <li class="{{ Request::is('recently-viewed') ? 'active' : ''; }}"><a href="{{url('recently-viewed')}}">Recently
                                                                                    Viewed</a></li>
                                                                            <li class="{{ Request::is('booking-confirmation') ? 'active' : ''; }}"><a href="{{url('booking-confirmation')}}">Booking
                                                                                    Confirmation</a></li>
                                                                            <li class="{{ Request::is('terms-conditions') ? 'active' : ''; }}"><a href="{{url('terms-conditions')}}">Terms &
                                                                                    Conditions</a></li>
                                                                            <li class="{{ Request::is('privacy-policy') ? 'active' : ''; }}"><a href="{{url('privacy-policy')}}">Privacy
                                                                                    Policy</a></li>
                                                                            <li class="{{ Request::is('login') ? 'active' : ''; }}"><a href="{{url('login')}}">Login</a></li>
                                                                            <li class="{{ Request::is('register') ? 'active' : ''; }}"><a href="{{url('register')}}">Register</a>
                                                                            </li>
                                                                            <li class="{{ Request::is('forgot-password') ? 'active' : ''; }}"><a href="{{url('forgot-password')}}">Forgot
                                                                                    Password</a></li>
                                                                            <li class="{{ Request::is('change-password') ? 'active' : ''; }}"><a href="{{url('change-password')}}">Change
                                                                                    Password</a></li>
                                                                            <li class="{{ Request::is('error-404') ? 'active' : ''; }}"><a href="{{url('error-404')}}">404 Error</a>
                                                                            </li>
                                                                            <li class="{{ Request::is('error-500') ? 'active' : ''; }}"><a href="{{url('error-500')}}">500 Error</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade {{ Request::is('dashboard', 'customer-gift-cards', 'customer-loyalty-points', 'customer-referral-program', 'customer-reward-history', 'customer-tour-guides', 'chat', 'support-fixes', 'customer-activities-booking', 'customer-bus-booking', 'customer-flight-booking', 'customer-cruise-booking', 'customer-hotel-booking', 'customer-tour-booking', 'customer-car-booking', 'customer-visa-booking', 'review', 'wishlist', 'wallet', 'payment', 'customer-coupons', 'profile-settings', 'notification', 'my-profile', 'security-settings', 'notification-settings', 'integration-settings', 'agent-dashboard', 'agent-business-details', 'agent-cancellation-requests', 'agent-commission-summary', 'agent-tour-guide', 'agent-visa-booking', 'agent-listings', 'agent-activities-booking', 'agent-bus-booking', 'agent-flight-booking', 'agent-hotel-booking', 'agent-tour-booking', 'agent-cruise-booking', 'agent-car-booking', 'agent-enquirers', 'agent-earnings', 'agent-payment-history', 'agent-pending-payouts', 'agent-review', 'agent-settings', 'agent-account-settings', 'agent-security-settings', 'agent-plans-settings', 'agent-settings-notifications') ? 'active show' : ''; }}" id="dashboard" role="tabpanel">
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <h6>User Dashboard</h6>
                                                                        <ul>
                                                                            <li class="{{ Request::is('dashboard', 'customer-gift-cards', 'customer-loyalty-points', 'customer-referral-program', 'customer-reward-history', 'customer-tour-guides', 'chat', 'support-fixes') ? 'active' : ''; }}"><a href="{{url('dashboard')}}">User
                                                                                    Dashboard</a></li>
                                                                            <li class="{{ Request::is('customer-activities-booking', 'customer-bus-booking', 'customer-flight-booking', 'customer-cruise-booking', 'customer-hotel-booking', 'customer-tour-booking', 'customer-car-booking', 'customer-visa-booking') ? 'active' : ''; }}"><a href="{{url('customer-flight-booking')}}">My
                                                                                    Bookings</a></li>
                                                                            <li class="{{ Request::is('review') ? 'active' : ''; }}"><a href="{{url('review')}}">Reviews</a></li>
                                                                            <li class="{{ Request::is('wishlist') ? 'active' : ''; }}"><a href="{{url('wishlist')}}">Wishlist</a>
                                                                            </li>
                                                                            <li class="{{ Request::is('wallet') ? 'active' : ''; }}"><a href="{{url('wallet')}}">Wallet</a></li>
                                                                            <li class="{{ Request::is('payment') ? 'active' : ''; }}"><a href="{{url('payment')}}">Payments</a></li>
                                                                            <li class="{{ Request::is('customer-coupons') ? 'active' : ''; }}"><a href="{{url('customer-coupons')}}">Offers &
                                                                                    Rewards</a></li>
                                                                            <li class="{{ Request::is('profile-settings') ? 'active' : ''; }}"><a href="{{url('profile-settings')}}">Profile
                                                                                    Settings</a></li>
                                                                            <li class="{{ Request::is('notification') ? 'active' : ''; }}"><a
                                                                                    href="{{url('notification')}}">Notifications</a>
                                                                            </li>
                                                                            <li class="{{ Request::is('my-profile') ? 'active' : ''; }}"><a href="{{url('my-profile')}}">My Profile</a>
                                                                            </li>
                                                                            <li class="{{ Request::is('security-settings', 'notification-settings', 'integration-settings') ? 'active' : ''; }}"><a
                                                                                    href="{{url('profile-settings')}}">Settings</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <h6>Agent Dashboard</h6>
                                                                        <ul>
                                                                            <li class="{{ Request::is('agent-dashboard', 'agent-business-details', 'agent-cancellation-requests', 'agent-commission-summary', 'agent-tour-guide', 'agent-visa-booking') ? 'active' : ''; }}"><a
                                                                                    href="{{url('agent-dashboard')}}">Dashboard</a>
                                                                            </li>
                                                                            <li class="{{ Request::is('agent-listings') ? 'active' : ''; }}"><a
                                                                                    href="{{url('agent-listings')}}">Listings</a>
                                                                            </li>
                                                                            <li class="{{ Request::is('agent-activities-booking', 'agent-bus-booking', 'agent-flight-booking', 'agent-hotel-booking', 'agent-tour-booking', 'agent-cruise-booking', 'agent-car-booking') ? 'active' : ''; }}"><a
                                                                                    href="{{url('agent-hotel-booking')}}">Bookings</a>
                                                                            </li>
                                                                            <li class="{{ Request::is('agent-enquirers') ? 'active' : ''; }}"><a
                                                                                    href="{{url('agent-enquirers')}}">Enquiries</a>
                                                                            </li>
                                                                            <li class="{{ Request::is('agent-earnings') ? 'active' : ''; }}"><a
                                                                                    href="{{url('agent-earnings')}}">Earnings</a>
                                                                            </li>
                                                                            <li class="{{ Request::is('agent-pending-payouts', 'agent-payment-history') ? 'active' : ''; }}"><a href="{{url('agent-pending-payouts')}}">Payouts</a>
                                                                            </li>
                                                                            <li class="{{ Request::is('agent-review') ? 'active' : ''; }}"><a href="{{url('agent-review')}}">Reviews</a>
                                                                            </li>
                                                                            <li class="{{ Request::is('agent-settings', 'agent-account-settings', 'agent-security-settings', 'agent-plans-settings', 'agent-settings-notifications') ? 'active' : ''; }}"><a
                                                                                    href="{{url('agent-settings')}}">Settings</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="{{ Request::is('contact-us') ? 'active' : ''; }}">
                                    <a href="{{url('contact-us')}}">Contact</a>
                                </li>
                            </ul>
                        </nav>




                        <div class="header-btn d-flex align-items-center">
                            <div class="me-3">
                                <a href="#" id="dark-mode-toggle" class="theme-toggle">
                                    <i class="isax isax-moon"></i>
                                </a>
                                <a href="#" id="light-mode-toggle" class="theme-toggle">
                                    <i class="isax isax-sun-1"></i>
                                </a>
                            </div>
                            <div class="dropdown profile-dropdown">
                                <a href="#" class="d-flex align-items-center" data-bs-toggle="dropdown">
                                    <span class="avatar avatar-md">
                                        <img src="{{URL::asset('build/img/users/user-05.jpg')}}" alt="Img"
                                            class="img-fluid rounded-circle border border-white border-4">
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                    <li>
                                        <a class="dropdown-item d-inline-flex align-items-center rounded fw-medium p-2"
                                            href="{{url('dashboard')}}">Dashboard</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-inline-flex align-items-center rounded fw-medium p-2"
                                            href="{{url('customer-hotel-booking')}}">My Booking</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-inline-flex align-items-center rounded fw-medium p-2"
                                            href="{{url('my-profile')}}">My Profile</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider my-2">
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-inline-flex align-items-center rounded fw-medium p-2"
                                            href="{{url('profile-settings')}}">Settings</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-inline-flex align-items-center rounded fw-medium p-2"
                                            href="{{url('login')}}">Logout</a>
                                    </li>
                                </ul>
                            </div>
                            <a href="{{url('add-hotel')}}" class="btn btn-primary me-0">Add Listing</a>
                            <div class="header__hamburger d-xl-none my-auto">
                                <div class="sidebar-menu">
                                    <i class="isax isax-menu5"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- /Header -->
    </div>
@endif


@if (Route::is(['index-2']))
    <div class="main-header main-header-nine">
        <!-- Header Topbar-->
        <div class="header-topbar topbar-four topbar-nine text-center">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between flex-wrap">
                    <div class="d-flex align-items-center">
                        <div class="dropdown flag-dropdown me-3 mt-1">
                            <a href="#" class="dropdown-toggle d-inline-flex align-items-center"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{URL::asset('build/img/flags/us-flag.svg')}}" class="me-2" alt="flag">ENG
                            </a>
                            <ul class="dropdown-menu p-2 mt-2">
                                <li>
                                    <a class="dropdown-item rounded d-flex align-items-center" href="">
                                        <img src="{{URL::asset('build/img/flags/us-flag.svg')}}" class="me-2" alt="flag">ENG
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item rounded d-flex align-items-center" href="#">
                                        <img src="{{URL::asset('build/img/flags/arab-flag.svg')}}" class="me-2" alt="flag">ARA
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item rounded d-flex align-items-center" href="#">
                                        <img src="{{URL::asset('build/img/flags/france-flag.svg')}}" class="me-2" alt="flag">FRA
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle p-2 py-1 rounded-pill fs-12 fw-medium"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                USD
                            </a>
                            <ul class="dropdown-menu p-2 mt-2">
                                <li><a class="dropdown-item rounded" href="#">USD</a></li>
                                <li><a class="dropdown-item rounded" href="#">YEN</a></li>
                                <li><a class="dropdown-item rounded" href="#">EURO</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="d-flex align-items-center flex-wrap">
                        <p class="d-flex align-items-center fs-14 mb-0 me-3 "><i class="isax isax-call5 me-2"></i>Toll Free : +1 56565 56594</p>
                        <p class="mb-0 d-flex align-items-center fs-14"><i class="isax isax-message-text-15 me-2"></i>Email : info@example.com</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Header Topbar-->

        <!-- Header -->
        <header class="header-four header-nine">
            <div class="container-fluid">
                <div class="offcanvas-info">
                    <div class="offcanvas-wrap">
                        <div class="offcanvas-detail">
                            <div class="offcanvas-head">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <a href="{{url('index')}}" class="black-logo-responsive">
                                        <img src="{{URL::asset('build/img/logo-dark.svg')}}" alt="logo-img">
                                    </a>
                                    <a href="{{url('index')}}" class="white-logo-responsive">
                                        <img src="{{URL::asset('build/img/logo.svg')}}" alt="logo-img">
                                    </a>
                                    <div class="offcanvas-close">
                                        <i class="ti ti-x"></i>
                                    </div>
                                </div>
                                <div class="wishlist-info d-flex justify-content-between align-items-center">
                                    <h6 class="fs-16 fw-medium">Wishlist</h6>
                                    <div class="d-flex align-items-center">
                                        <div class="fav-dropdown">
                                            <a href="{{url('wishlist')}}" class="position-relative">
                                                <i class="isax isax-heart"></i><span
                                                    class="count-icon bg-secondary text-gray-9">0</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mobile-menu fix mb-3"></div>
                            <div class="offcanvas__contact">
                                <div class="mt-4">
                                    <div class="header-dropdown d-flex flex-fill">
                                        <div class="w-100">
                                            <div class="dropdown flag-dropdown mb-2">
                                                <a href="#"
                                                    class="dropdown-toggle bg-white border d-flex align-items-center"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <img src="{{URL::asset('build/img/flags/us-flag.svg')}}" class="me-2" alt="flag">ENG
                                                </a>
                                                <ul class="dropdown-menu p-2">
                                                    <li>
                                                        <a class="dropdown-item rounded d-flex align-items-center"
                                                            href="#">
                                                            <img src="{{URL::asset('build/img/flags/us-flag.svg')}}" class="me-2"
                                                                alt="flag">ENG
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item rounded d-flex align-items-center"
                                                            href="#">
                                                            <img src="{{URL::asset('build/img/flags/arab-flag.svg')}}" class="me-2"
                                                                alt="flag">ARA
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item rounded d-flex align-items-center"
                                                            href="#">
                                                            <img src="{{URL::asset('build/img/flags/france-flag.svg')}}" class="me-2"
                                                                alt="flag">FRA
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle bg-white border d-block"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    USD
                                                </a>
                                                <ul class="dropdown-menu p-2">
                                                    <li><a class="dropdown-item rounded" href="#">USD</a></li>
                                                    <li><a class="dropdown-item rounded" href="#">YEN</a></li>
                                                    <li><a class="dropdown-item rounded" href="#">EURO</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn btn-dark w-100 mb-3"><a href="#" class="text-white"
                                            data-bs-toggle="modal" data-bs-target="#login-modal">Sign In</a> / <a
                                            href="{{url('register')}}" class="text-white" data-bs-toggle="modal"
                                            data-bs-target="#register-modal">Sign Up</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="offcanvas-overlay"></div>
                <div class="header-nav">
                    <div class="main-menu-wrapper">
                        <div class="navbar-logo">
                            <a class="logo-white header-logo" href="{{url('index')}}">
                                <img src="{{URL::asset('build/img/logo-dark.svg')}}" class="logo" alt="Logo">
                            </a>
                            <a class="logo-dark header-logo" href="{{url('index')}}">
                                <img src="{{URL::asset('build/img/logo.svg')}}" class="logo" alt="Logo">
                            </a>
                        </div>
                        <nav id="mobile-menu">
                            <ul class="main-nav">
                                <li class="{{ Route::is('index-2') ? 'active' : '' }}">
                                    <a href="{{ url('/') }}">Home</a>
                                </li>
                                <li class="has-submenu mega-innermenu {{ Request::is('flight-grid', 'edit-flight', 'flight-list', 'flight-details', 'flight-booking', 'flight-booking-confirmation', 'add-flight') ? 'active subdrop' : ''; }}">
                                    <a href="#">Flight<i class="fa-solid fa-angle-down"></i></a>
                                    <ul class="submenu mega-submenu">
                                        <li>
                                            <div class="megamenu-wrapper">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <h6>Flight Bookings</h6>
                                                        <ul>
                                                            <li class="{{ Request::is('flight-grid', 'edit-flight') ? 'active' : ''; }}"><a href="{{url('flight-grid')}}">Flight Grid</a></li>
                                                            <li class="{{ Request::is('flight-list') ? 'active' : ''; }}"><a href="{{url('flight-list')}}">Flight List</a></li>
                                                            <li class="{{ Request::is('flight-details', 'flight-booking') ? 'active' : ''; }}"><a href="{{url('flight-details')}}">Flight Details</a></li>
                                                            <li class="{{ Request::is('flight-booking-confirmation') ? 'active' : ''; }}"><a href="{{url('flight-booking-confirmation')}}">Flight
                                                                    Booking</a></li>
                                                            <li class="{{ Request::is('add-flight') ? 'active' : ''; }}"><a href="{{url('add-flight')}}">Add Flight</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="menu-img">
                                                            <img src="{{URL::asset('build/img/menu/flight.jpg')}}" alt="img"
                                                                class="img-fluid">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-submenu mega-innermenu {{ Request::is('hotel-grid', 'edit-hotel', 'hotel-list', 'hotel-map', 'hotel-details', 'hotel-booking', 'booking-confirmation', 'add-hotel') ? 'active subdrop' : ''; }}">
                                    <a href="#">Hotel<i class="fa-solid fa-angle-down"></i></a>
                                    <ul class="submenu mega-submenu">
                                        <li>
                                            <div class="megamenu-wrapper">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <h6>Hotel Bookings</h6>
                                                        <ul>
                                                            <li class="{{ Request::is('hotel-grid', 'edit-hotel') ? 'active' : ''; }}"><a href="{{url('hotel-grid')}}">Hotel Grid</a></li>
                                                            <li class="{{ Request::is('hotel-list') ? 'active' : ''; }}"><a href="{{url('hotel-list')}}">Hotel List</a></li>
                                                            <li class="{{ Request::is('hotel-map') ? 'active' : ''; }}"><a href="{{url('hotel-map')}}">Hotel Map</a></li>
                                                            <li class="{{ Request::is('hotel-details', 'hotel-booking') ? 'active' : ''; }}"><a href="{{url('hotel-details')}}">Hotel Details</a></li>
                                                            <li class="{{ Request::is('booking-confirmation') ? 'active' : ''; }}"><a href="{{url('booking-confirmation')}}">Hotel Booking</a>
                                                            </li>
                                                            <li class="{{ Request::is('add-hotel') ? 'active' : ''; }}"><a href="{{url('add-hotel')}}">Add Hotel</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="menu-img">
                                                            <img src="{{URL::asset('build/img/menu/hotel.jpg')}}" alt="img"
                                                                class="img-fluid">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-submenu mega-innermenu {{ Request::is('car-grid', 'edit-car', 'car-list', 'car-map', 'car-details', 'car-booking', 'car-booking-confirmation', 'add-car') ? 'active subdrop' : ''; }}">
                                    <a href="#">Car<i class="fa-solid fa-angle-down"></i></a>
                                    <ul class="submenu mega-submenu">
                                        <li>
                                            <div class="megamenu-wrapper">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <h6>Car Bookings</h6>
                                                        <ul>
                                                            <li class="{{ Request::is('car-grid', 'edit-car') ? 'active' : ''; }}"><a href="{{url('car-grid')}}">Car Grid</a></li>
                                                            <li class="{{ Request::is('car-list') ? 'active' : ''; }}"><a href="{{url('car-list')}}">Car List</a></li>
                                                            <li class="{{ Request::is('car-map') ? 'active' : ''; }}"><a href="{{url('car-map')}}">Car Map</a></li>
                                                            <li class="{{ Request::is('car-details', 'car-booking') ? 'active' : ''; }}"><a href="{{url('car-details')}}">Car Details</a></li>
                                                            <li class="{{ Request::is('car-booking-confirmation') ? 'active' : ''; }}"><a href="{{url('car-booking-confirmation')}}">Car Booking</a>
                                                            </li>
                                                            <li class="{{ Request::is('add-car') ? 'active' : ''; }}"><a href="{{url('add-car')}}">Add Car</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="menu-img">
                                                            <img src="{{URL::asset('build/img/menu/car.jpg')}}" alt="img"
                                                                class="img-fluid">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-submenu mega-innermenu {{ Request::is('cruise-grid', 'edit-cruise', 'cruise-list', 'cruise-map', 'cruise-details', 'cruise-booking', 'cruise-booking-confirmation', 'add-cruise') ? 'active subdrop' : ''; }}">
                                    <a href="#">Cruise<i class="fa-solid fa-angle-down"></i></a>
                                    <ul class="submenu mega-submenu">
                                        <li>
                                            <div class="megamenu-wrapper">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <h6>Cruise Bookings</h6>
                                                        <ul>
                                                            <li class="{{ Request::is('cruise-grid', 'edit-cruise') ? 'active' : ''; }}"><a href="{{url('cruise-grid')}}">Cruise Grid</a></li>
                                                            <li class="{{ Request::is('cruise-list') ? 'active' : ''; }}"><a href="{{url('cruise-list')}}">Cruise List</a></li>
                                                            <li class="{{ Request::is('cruise-map') ? 'active' : ''; }}"><a href="{{url('cruise-map')}}">Cruise Map</a></li>
                                                            <li class="{{ Request::is('cruise-details', 'cruise-booking') ? 'active' : ''; }}"><a href="{{url('cruise-details')}}">Cruise Details</a></li>
                                                            <li class="{{ Request::is('cruise-booking-confirmation') ? 'active' : ''; }}"><a href="{{url('cruise-booking-confirmation')}}">Cruise
                                                                    Booking</a></li>
                                                            <li class="{{ Request::is('add-cruise') ? 'active' : ''; }}"><a href="{{url('add-cruise')}}">Add Cruise</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="menu-img">
                                                            <img src="{{URL::asset('build/img/menu/cruise.jpg')}}" alt="img"
                                                                class="img-fluid">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-submenu mega-innermenu {{ Request::is('tour-grid', 'edit-tour', 'tour-list', 'tour-map', 'tour-details', 'tour-booking', 'tour-booking-confirmation', 'add-tour') ? 'active subdrop' : ''; }}">
                                    <a href="#">Tour<i class="fa-solid fa-angle-down"></i></a>
                                    <ul class="submenu mega-submenu">
                                        <li>
                                            <div class="megamenu-wrapper">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <h6>Tour Bookings</h6>
                                                        <ul>
                                                            <li class="{{ Request::is('tour-grid', 'edit-tour') ? 'active' : ''; }}"><a href="{{url('tour-grid')}}">Tour Grid</a></li>
                                                            <li class="{{ Request::is('tour-list') ? 'active' : ''; }}"><a href="{{url('tour-list')}}">Tour List</a></li>
                                                            <li class="{{ Request::is('tour-map') ? 'active' : ''; }}"><a href="{{url('tour-map')}}">Tour Map</a></li>
                                                            <li class="{{ Request::is('tour-details', 'tour-booking') ? 'active' : ''; }}"><a href="{{url('tour-details')}}">Tour Details</a></li>
                                                            <li class="{{ Request::is('tour-booking-confirmation') ? 'active' : ''; }}"><a href="{{url('tour-booking-confirmation')}}">Tour
                                                                    Booking</a></li>
                                                            <li class="{{ Request::is('add-tour') ? 'active' : ''; }}"><a href="{{url('add-tour')}}">Add Tour</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="menu-img">
                                                            <img src="{{URL::asset('build/img/menu/tour.jpg')}}" alt="img"
                                                                class="img-fluid">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-submenu mega-innermenu {{ Request::is('bus-list', 'bus-left-sidebar', 'bus-right-sidebar', 'bus-details', 'bus-seat-selection', 'bus-booking', 'bus-booking-confirmation', 'add-bus') ? 'active subdrop' : ''; }}">
                                    <a href="#">Bus<i class="fa-solid fa-angle-down"></i></a>
                                    <ul class="submenu mega-submenu">
                                        <li>
                                            <div class="megamenu-wrapper">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <h6>Bus Bookings</h6>
                                                        <ul>
                                                            <li class="{{ Request::is('bus-grid', 'edit-bus') ? 'active' : ''; }}"><a href="{{url('bus-list')}}">Bus List</a></li>
                                                            <li class="{{ Request::is('bus-left-sidebar') ? 'active' : ''; }}"><a href="{{url('bus-left-sidebar')}}">Bus Left Sidebar</a>
                                                            </li>
                                                            <li class="{{ Request::is('bus-right-sidebar') ? 'active' : ''; }}"><a href="{{url('bus-right-sidebar')}}">Bus Right Sidebar</a>
                                                            </li>
                                                            <li class="{{ Request::is('bus-details') ? 'active' : ''; }}"><a href="{{url('bus-details')}}">Bus Details</a></li>
                                                            <li class="{{ Request::is('bus-seat-selection') ? 'active' : ''; }}"><a href="{{url('bus-seat-selection')}}">Bus Seat Selection</a>
                                                            </li>
                                                            <li class="{{ Request::is('bus-booking', 'bus-booking-confirmation') ? 'active' : ''; }}"><a href="{{url('bus-booking')}}">Bus Booking</a></li>
                                                            <li class="{{ Request::is('add-bus') ? 'active' : ''; }}"><a href="{{url('add-bus')}}">Add Bus</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="menu-img">
                                                            <img src="{{URL::asset('build/img/menu/bus.jpg')}}" alt="img"
                                                                class="img-fluid">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-submenu megamenutab {{ Request::is('activity-grid', 'activity-list', 'activity-map', 'activity-details', 'activity-booking', 'activity-booking-confirmation', 'add-activity', 'visa-grid', 'visa-requirements', 'visa-list', 'visa-details', 'visa-booking-details', 'add-visa', 'visa-tracking', 'guide-grid', 'guide-details', 'guide-booking', 'guide-booking-confirmation', 'add-guide', 'about-us', 'gallery', 'testimonial', 'faq', 'pricing-plan', 'pricing-plan-2', 'team', 'invoices', 'blog-grid', 'blog-list', 'blog-details', 'index-rtl', 'destination', 'destination-details', 'recently-viewed', 'booking-confirmation', 'terms-conditions', 'privacy-policy', 'login', 'register', 'forgot-password', 'change-password', 'error-404', 'error-500', 'dashboard', 'customer-gift-cards', 'customer-loyalty-points', 'customer-referral-program', 'customer-reward-history', 'customer-tour-guides', 'chat', 'support-fixes', 'customer-activities-booking', 'customer-bus-booking', 'customer-flight-booking', 'customer-cruise-booking', 'customer-hotel-booking', 'customer-tour-booking', 'customer-car-booking', 'customer-visa-booking', 'review', 'wishlist', 'wallet', 'payment', 'customer-coupons', 'profile-settings', 'notification', 'my-profile', 'security-settings', 'notification-settings', 'integration-settings', 'agent-dashboard', 'agent-business-details', 'agent-cancellation-requests', 'agent-commission-summary', 'agent-tour-guide', 'agent-visa-booking', 'agent-listings', 'agent-activities-booking', 'agent-bus-booking', 'agent-flight-booking', 'agent-hotel-booking', 'agent-tour-booking', 'agent-cruise-booking', 'agent-car-booking', 'agent-enquirers', 'agent-earnings', 'agent-payment-history', 'agent-pending-payouts', 'agent-review', 'agent-settings', 'agent-account-settings', 'agent-security-settings', 'agent-plans-settings', 'agent-settings-notifications') ? 'active' : ''; }}">
                                    <a href="#">Pages<i class="fa-solid fa-angle-down"></i></a>
                                    <ul class="submenu mega-submenu">
                                        <li>
                                            <div class="megamenu-wrapper">
                                                <div class="row">
                                                    <!-- Left Side Tabs -->
                                                    <div class="col-lg-3">
                                                        <div class="nav flex-column nav-pills menu-tab" id="menu-tab"
                                                            role="tablist" aria-orientation="vertical">
                                                            <ul>
                                                                <li>
                                                                    <a class="nav-link {{ Request::is('activity-grid', 'activity-list', 'activity-map', 'activity-details', 'activity-booking', 'activity-booking-confirmation', 'add-activity') ? 'active' : ''; }}" id="activity-tab"
                                                                        data-bs-toggle="tab" href="#activity"
                                                                        role="tab">
                                                                        Activity
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="nav-link {{ Request::is('visa-grid', 'visa-requirements', 'visa-list', 'visa-details', 'visa-booking-details', 'add-visa', 'visa-tracking') ? 'active' : ''; }}" id="visa-tab"
                                                                        data-bs-toggle="tab" href="#visa" role="tab">
                                                                        Visa
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="nav-link {{ Request::is('guide-grid', 'guide-details', 'guide-booking', 'guide-booking-confirmation', 'add-guide') ? 'active' : ''; }}" id="guide-tab"
                                                                        data-bs-toggle="tab" href="#guide" role="tab">
                                                                        Guide
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="nav-link {{ Request::is('about-us', 'gallery', 'testimonial', 'faq', 'pricing-plan', 'pricing-plan-2', 'team', 'invoices', 'blog-grid', 'blog-list', 'blog-details', 'index-rtl', 'destination', 'destination-details', 'recently-viewed', 'booking-confirmation', 'terms-conditions', 'privacy-policy', 'login', 'register', 'forgot-password', 'change-password', 'error-404', 'error-500') ? 'active' : ''; }}" id="pages-tab"
                                                                        data-bs-toggle="tab" href="#pages" role="tab">
                                                                        Pages
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="nav-link {{ Request::is('dashboard', 'customer-gift-cards', 'customer-loyalty-points', 'customer-referral-program', 'customer-reward-history', 'customer-tour-guides', 'chat', 'support-fixes', 'customer-activities-booking', 'customer-bus-booking', 'customer-flight-booking', 'customer-cruise-booking', 'customer-hotel-booking', 'customer-tour-booking', 'customer-car-booking', 'customer-visa-booking', 'review', 'wishlist', 'wallet', 'payment', 'customer-coupons', 'profile-settings', 'notification', 'my-profile', 'security-settings', 'notification-settings', 'integration-settings', 'agent-dashboard', 'agent-business-details', 'agent-cancellation-requests', 'agent-commission-summary', 'agent-tour-guide', 'agent-visa-booking', 'agent-listings', 'agent-activities-booking', 'agent-bus-booking', 'agent-flight-booking', 'agent-hotel-booking', 'agent-tour-booking', 'agent-cruise-booking', 'agent-car-booking', 'agent-enquirers', 'agent-earnings', 'agent-payment-history', 'agent-pending-payouts', 'agent-review', 'agent-settings', 'agent-account-settings', 'agent-security-settings', 'agent-plans-settings', 'agent-settings-notifications') ? 'active' : ''; }}" id="dashboard-tab"
                                                                        data-bs-toggle="tab" href="#dashboard"
                                                                        role="tab">
                                                                        Dashboard
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- Right Side Content -->
                                                    <div class="col-lg-9">
                                                        <div class="tab-content tab-menulist" id="menu-tabContent">
                                                            <div class="tab-pane fade {{ Request::is('activity-grid', 'activity-list', 'activity-map', 'activity-details', 'activity-booking', 'activity-booking-confirmation', 'add-activity') ? 'active show' : ''; }}" id="activity" role="tabpanel">
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <h6>Activity</h6>
                                                                        <ul>
                                                                            <li class="{{ Request::is('activity-grid') ? 'active' : ''; }}"><a href="{{url('activity-grid')}}">Activity
                                                                                    Grid</a></li>
                                                                            <li class="{{ Request::is('activity-list') ? 'active' : ''; }}"><a href="{{url('activity-list')}}">Activity
                                                                                    List</a></li>
                                                                            <li class="{{ Request::is('activity-map') ? 'active' : ''; }}"><a href="{{url('activity-map')}}">Activity
                                                                                    Map</a></li>
                                                                            <li class="{{ Request::is('activity-details', 'activity-booking') ? 'active' : ''; }}"><a href="{{url('activity-details')}}">Activity
                                                                                    Details</a></li>
                                                                            <li class="{{ Request::is('activity-booking-confirmation') ? 'active' : ''; }}"><a
                                                                                    href="{{url('activity-booking-confirmation')}}">Activity
                                                                                    Booking Confirmation</a></li>
                                                                            <li class="{{ Request::is('add-activity') ? 'active' : ''; }}"><a href="{{url('add-activity')}}">Add
                                                                                    Activity</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="menu-img">
                                                                            <img src="{{URL::asset('build/img/menu/activity.jpg')}}"
                                                                                alt="img" class="img-fluid">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade {{ Request::is('visa-grid', 'visa-requirements', 'visa-list', 'visa-details', 'visa-booking-details', 'add-visa', 'visa-tracking') ? 'active show' : ''; }}" id="visa" role="tabpanel">
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <h6>Visa</h6>
                                                                        <ul>
                                                                            <li class="{{ Request::is('visa-grid', 'visa-requirements') ? 'active' : ''; }}"><a href="{{url('visa-grid')}}">Visa Grid</a>
                                                                            </li>
                                                                            <li class="{{ Request::is('visa-list') ? 'active' : ''; }}"><a href="{{url('visa-list')}}">Visa List</a>
                                                                            </li>
                                                                            <li class="{{ Request::is('visa-details') ? 'active' : ''; }}"><a href="{{url('visa-details')}}">Visa
                                                                                    Details</a></li>
                                                                            <li class="{{ Request::is('visa-booking-details') ? 'active' : ''; }}"><a href="{{url('visa-booking-details')}}">Visa
                                                                                    Booking Confirmation</a></li>
                                                                            <li class="{{ Request::is('add-visa') ? 'active' : ''; }}"><a href="{{url('add-visa')}}">Add Visa</a>
                                                                            </li>
                                                                            <li class="{{ Request::is('visa-tracking') ? 'active' : ''; }}"><a href="{{url('visa-tracking')}}">Track
                                                                                    Visa</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="menu-img">
                                                                            <img src="{{URL::asset('build/img/menu/visa.jpg')}}"
                                                                                alt="img" class="img-fluid">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade {{ Request::is('guide-grid', 'guide-details', 'guide-booking', 'guide-booking-confirmation', 'add-guide') ? 'active show' : ''; }}" id="guide" role="tabpanel">
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <h6>Guide</h6>
                                                                        <ul>
                                                                            <li class="{{ Request::is('guide-grid') ? 'active' : ''; }}"><a href="{{url('guide-grid')}}">Guide Grid</a>
                                                                            </li>
                                                                            <li class="{{ Request::is('guide-details') ? 'active' : ''; }}"><a href="{{url('guide-details')}}">Guide
                                                                                    Details</a></li>
                                                                            <li class="{{ Request::is('guide-booking') ? 'active' : ''; }}"><a href="{{url('guide-booking')}}">Guide
                                                                                    Booking</a></li>
                                                                            <li class="{{ Request::is('guide-booking-confirmation') ? 'active' : ''; }}"><a
                                                                                    href="{{url('guide-booking-confirmation')}}">Guide
                                                                                    Booking Confirmation</a></li>
                                                                            <li class="{{ Request::is('add-guide') ? 'active' : ''; }}"><a href="{{url('add-guide')}}">Add Guide</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="menu-img">
                                                                            <img src="{{URL::asset('build/img/menu/guide.jpg')}}"
                                                                                alt="img" class="img-fluid">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade {{ Request::is('about-us', 'gallery', 'testimonial', 'faq', 'pricing-plan', 'pricing-plan-2', 'team', 'invoices', 'blog-grid', 'blog-list', 'blog-details', 'index-rtl', 'destination', 'destination-details', 'recently-viewed', 'booking-confirmation', 'terms-conditions', 'privacy-policy', 'login', 'register', 'forgot-password', 'change-password', 'error-404', 'error-500') ? 'active show' : ''; }}" id="pages"
                                                                role="tabpanel">
                                                                <h6>Pages</h6>
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <ul>
                                                                            <li class="{{ Request::is('about-us') ? 'active' : ''; }}"><a href="{{url('about-us')}}">About</a></li>
                                                                            <li class="{{ Request::is('gallery') ? 'active' : ''; }}"><a href="{{url('gallery')}}">Gallery</a></li>
                                                                            <li class="{{ Request::is('testimonial') ? 'active' : ''; }}"><a
                                                                                    href="{{url('testimonial')}}">Testimonials</a>
                                                                            </li>
                                                                            <li class="{{ Request::is('faq') ? 'active' : ''; }}"><a href="{{url('faq')}}">Faq</a></li>
                                                                            <li class="{{ Request::is('pricing-plan') ? 'active' : ''; }}"><a href="{{url('pricing-plan')}}">Pricing
                                                                                    Plan</a></li>
                                                                            <li class="{{ Request::is('pricing-plan-2') ? 'active' : ''; }}"><a href="{{url('pricing-plan-2')}}">Pricing
                                                                                    Plan 2</a></li>
                                                                            <li class="{{ Request::is('team') ? 'active' : ''; }}"><a href="{{url('team')}}">Teams</a></li>
                                                                            <li class="{{ Request::is('invoices') ? 'active' : ''; }}"><a
                                                                                    href="{{url('invoices')}}">Invoice</a>
                                                                            </li>
                                                                            <li class="{{ Request::is('blog-grid') ? 'active' : ''; }}"><a href="{{url('blog-grid')}}">Blogs Grid</a>
                                                                            </li>
                                                                            <li class="{{ Request::is('blog-list') ? 'active' : ''; }}"><a href="{{url('blog-list')}}">Blogs List</a>
                                                                            </li>
                                                                            <li class="{{ Request::is('blog-details') ? 'active' : ''; }}"><a href="{{url('blog-details')}}">Blogs
                                                                                    Details</a></li>
                                                                            <li class="{{ Request::is('index-rtl') ? 'active' : ''; }}"><a href="{{url('index-rtl')}}">RTL</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <ul>
                                                                            <li class="{{ Request::is('destination') ? 'active' : ''; }}"><a
                                                                                    href="{{url('destination')}}">Destination</a>
                                                                            </li>
                                                                            <li class="{{ Request::is('destination-details') ? 'active' : ''; }}"><a href="{{url('destination-details')}}">Destination
                                                                                    Details</a></li>
                                                                            <li class="{{ Request::is('recently-viewed') ? 'active' : ''; }}"><a href="{{url('recently-viewed')}}">Recently
                                                                                    Viewed</a></li>
                                                                            <li class="{{ Request::is('booking-confirmation') ? 'active' : ''; }}"><a href="{{url('booking-confirmation')}}">Booking
                                                                                    Confirmation</a></li>
                                                                            <li class="{{ Request::is('terms-conditions') ? 'active' : ''; }}"><a href="{{url('terms-conditions')}}">Terms &
                                                                                    Conditions</a></li>
                                                                            <li class="{{ Request::is('privacy-policy') ? 'active' : ''; }}"><a href="{{url('privacy-policy')}}">Privacy
                                                                                    Policy</a></li>
                                                                            <li class="{{ Request::is('login') ? 'active' : ''; }}"><a href="{{url('login')}}">Login</a></li>
                                                                            <li class="{{ Request::is('register') ? 'active' : ''; }}"><a href="{{url('register')}}">Register</a>
                                                                            </li>
                                                                            <li class="{{ Request::is('forgot-password') ? 'active' : ''; }}"><a href="{{url('forgot-password')}}">Forgot
                                                                                    Password</a></li>
                                                                            <li class="{{ Request::is('change-password') ? 'active' : ''; }}"><a href="{{url('change-password')}}">Change
                                                                                    Password</a></li>
                                                                            <li class="{{ Request::is('error-404') ? 'active' : ''; }}"><a href="{{url('error-404')}}">404 Error</a>
                                                                            </li>
                                                                            <li class="{{ Request::is('error-500') ? 'active' : ''; }}"><a href="{{url('error-500')}}">500 Error</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade {{ Request::is('dashboard', 'customer-gift-cards', 'customer-loyalty-points', 'customer-referral-program', 'customer-reward-history', 'customer-tour-guides', 'chat', 'support-fixes', 'customer-activities-booking', 'customer-bus-booking', 'customer-flight-booking', 'customer-cruise-booking', 'customer-hotel-booking', 'customer-tour-booking', 'customer-car-booking', 'customer-visa-booking', 'review', 'wishlist', 'wallet', 'payment', 'customer-coupons', 'profile-settings', 'notification', 'my-profile', 'security-settings', 'notification-settings', 'integration-settings', 'agent-dashboard', 'agent-business-details', 'agent-cancellation-requests', 'agent-commission-summary', 'agent-tour-guide', 'agent-visa-booking', 'agent-listings', 'agent-activities-booking', 'agent-bus-booking', 'agent-flight-booking', 'agent-hotel-booking', 'agent-tour-booking', 'agent-cruise-booking', 'agent-car-booking', 'agent-enquirers', 'agent-earnings', 'agent-payment-history', 'agent-pending-payouts', 'agent-review', 'agent-settings', 'agent-account-settings', 'agent-security-settings', 'agent-plans-settings', 'agent-settings-notifications') ? 'active show' : ''; }}" id="dashboard" role="tabpanel">
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <h6>User Dashboard</h6>
                                                                        <ul>
                                                                            <li class="{{ Request::is('dashboard', 'customer-gift-cards', 'customer-loyalty-points', 'customer-referral-program', 'customer-reward-history', 'customer-tour-guides', 'chat', 'support-fixes') ? 'active' : ''; }}"><a href="{{url('dashboard')}}">User
                                                                                    Dashboard</a></li>
                                                                            <li class="{{ Request::is('customer-activities-booking', 'customer-bus-booking', 'customer-flight-booking', 'customer-cruise-booking', 'customer-hotel-booking', 'customer-tour-booking', 'customer-car-booking', 'customer-visa-booking') ? 'active' : ''; }}"><a href="{{url('customer-flight-booking')}}">My
                                                                                    Bookings</a></li>
                                                                            <li class="{{ Request::is('review') ? 'active' : ''; }}"><a href="{{url('review')}}">Reviews</a></li>
                                                                            <li class="{{ Request::is('wishlist') ? 'active' : ''; }}"><a href="{{url('wishlist')}}">Wishlist</a>
                                                                            </li>
                                                                            <li class="{{ Request::is('wallet') ? 'active' : ''; }}"><a href="{{url('wallet')}}">Wallet</a></li>
                                                                            <li class="{{ Request::is('payment') ? 'active' : ''; }}"><a href="{{url('payment')}}">Payments</a></li>
                                                                            <li class="{{ Request::is('customer-coupons') ? 'active' : ''; }}"><a href="{{url('customer-coupons')}}">Offers &
                                                                                    Rewards</a></li>
                                                                            <li class="{{ Request::is('profile-settings') ? 'active' : ''; }}"><a href="{{url('profile-settings')}}">Profile
                                                                                    Settings</a></li>
                                                                            <li class="{{ Request::is('notification') ? 'active' : ''; }}"><a
                                                                                    href="{{url('notification')}}">Notifications</a>
                                                                            </li>
                                                                            <li class="{{ Request::is('my-profile') ? 'active' : ''; }}"><a href="{{url('my-profile')}}">My Profile</a>
                                                                            </li>
                                                                            <li class="{{ Request::is('security-settings', 'notification-settings', 'integration-settings') ? 'active' : ''; }}"><a
                                                                                    href="{{url('profile-settings')}}">Settings</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <h6>Agent Dashboard</h6>
                                                                        <ul>
                                                                            <li class="{{ Request::is('agent-dashboard', 'agent-business-details', 'agent-cancellation-requests', 'agent-commission-summary', 'agent-tour-guide', 'agent-visa-booking') ? 'active' : ''; }}"><a
                                                                                    href="{{url('agent-dashboard')}}">Dashboard</a>
                                                                            </li>
                                                                            <li class="{{ Request::is('agent-listings') ? 'active' : ''; }}"><a
                                                                                    href="{{url('agent-listings')}}">Listings</a>
                                                                            </li>
                                                                            <li class="{{ Request::is('agent-activities-booking', 'agent-bus-booking', 'agent-flight-booking', 'agent-hotel-booking', 'agent-tour-booking', 'agent-cruise-booking', 'agent-car-booking') ? 'active' : ''; }}"><a
                                                                                    href="{{url('agent-hotel-booking')}}">Bookings</a>
                                                                            </li>
                                                                            <li class="{{ Request::is('agent-enquirers') ? 'active' : ''; }}"><a
                                                                                    href="{{url('agent-enquirers')}}">Enquiries</a>
                                                                            </li>
                                                                            <li class="{{ Request::is('agent-earnings') ? 'active' : ''; }}"><a
                                                                                    href="{{url('agent-earnings')}}">Earnings</a>
                                                                            </li>
                                                                            <li class="{{ Request::is('agent-pending-payouts', 'agent-payment-history') ? 'active' : ''; }}"><a href="{{url('agent-pending-payouts')}}">Payouts</a>
                                                                            </li>
                                                                            <li class="{{ Request::is('agent-review') ? 'active' : ''; }}"><a href="{{url('agent-review')}}">Reviews</a>
                                                                            </li>
                                                                            <li class="{{ Request::is('agent-settings', 'agent-account-settings', 'agent-security-settings', 'agent-plans-settings', 'agent-settings-notifications') ? 'active' : ''; }}"><a
                                                                                    href="{{url('agent-settings')}}">Settings</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="{{ Request::is('contact-us') ? 'active' : ''; }}">
                                    <a href="{{url('contact-us')}}">Contact</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="header-btn d-flex align-items-center">
                            <div class="me-3">
                                <a href="#" id="dark-mode-toggle" class="theme-toggle">
                                    <i class="isax isax-moon"></i>
                                </a>
                                <a href="#" id="light-mode-toggle" class="theme-toggle">
                                    <i class="isax isax-sun-1"></i>
                                </a>
                            </div>
                            <div class="fav-dropdown me-3">
                                <a href="{{url('wishlist')}}" class="position-relative wishlist-icon">
                                    <i class="isax isax-heart"></i><span
                                        class="count-icon bg-secondary text-gray-9">0</span>
                                </a>
                            </div>
                            <a href="#" class="btn btn-primary d-inline-flex align-items-center me-2"><i
                                    class="isax isax-lock5 me-2"></i>Login</a>
                            <a href="{{url('register')}}" class="btn btn-dark d-inline-flex align-items-center me-0"><i
                                    class="isax isax-profile-remove5 me-2"></i>Register</a>
                            <div class="header__hamburger d-xl-none my-auto">
                                <div class="sidebar-menu">
                                    <i class="isax isax-menu5"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- /Header -->
    </div>
@endif




