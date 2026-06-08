
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
                                <a href="{{url('/')}}" class="black-logo-responsive">
                                    <img src="{{URL::asset('build/img/logo-dark.svg')}}" alt="logo-img">
                                </a>
                                <a href="{{url('/')}}" class="white-logo-responsive">
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
                        <a class="logo-white header-logo" href="{{url('/')}}">
                            <img src="{{URL::asset('build/img/logo.svg')}}" class="logo" alt="Logo">
                        </a>
                        <a class="logo-dark header-logo" href="{{url('/')}}">
                            <img src="{{URL::asset('build/img/logo-dark.svg')}}" class="logo" alt="Logo">
                        </a>
                    </div>

                    <nav id="mobile-menu">
                        <ul class="main-nav">
                            <li class="{{ Request::is('/') ? 'active' : '' }}">
                                <a href="{{url('/')}}">Home</a>
                            </li>

                            {{-- Flight --}}
                            <li class="has-submenu mega-innermenu {{ Request::is('flight-grid','edit-flight','flight-list','flight-details','flight-booking','flight-booking-confirmation','add-flight') ? 'active subdrop' : '' }}">
                                <a href="#">Flight<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h6>Flight Bookings</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('flight-grid','edit-flight') ? 'active' : '' }}"><a href="{{url('flight-grid')}}">Flight Grid</a></li>
                                                        <li class="{{ Request::is('flight-list') ? 'active' : '' }}"><a href="{{url('flight-list')}}">Flight List</a></li>
                                                        <li class="{{ Request::is('flight-details','flight-booking') ? 'active' : '' }}"><a href="{{url('flight-details')}}">Flight Details</a></li>
                                                        <li class="{{ Request::is('flight-booking-confirmation') ? 'active' : '' }}"><a href="{{url('flight-booking-confirmation')}}">Flight Booking</a></li>
                                                        <li class="{{ Request::is('add-flight') ? 'active' : '' }}"><a href="{{url('add-flight')}}">Add Flight</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="menu-img">
                                                        <img src="{{URL::asset('build/img/menu/flight.jpg')}}" alt="Flight" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            {{-- Hotel --}}
                            <li class="has-submenu mega-innermenu {{ Request::is('hotel-grid','edit-hotel','hotel-list','hotel-map','hotel-details','hotel-booking','booking-confirmation','add-hotel') ? 'active subdrop' : '' }}">
                                <a href="#">Hotel<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h6>Hotel Bookings</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('hotel-grid','edit-hotel') ? 'active' : '' }}"><a href="{{url('hotel-grid')}}">Hotel Grid</a></li>
                                                        <li class="{{ Request::is('hotel-list') ? 'active' : '' }}"><a href="{{url('hotel-list')}}">Hotel List</a></li>
                                                        <li class="{{ Request::is('hotel-map') ? 'active' : '' }}"><a href="{{url('hotel-map')}}">Hotel Map</a></li>
                                                        <li class="{{ Request::is('hotel-details') ? 'active' : '' }}"><a href="{{url('hotel-details')}}">Hotel Details</a></li>
                                                        <li class="{{ Request::is('hotel-booking','booking-confirmation') ? 'active' : '' }}"><a href="{{url('hotel-booking')}}">Hotel Booking</a></li>
                                                        <li class="{{ Request::is('add-hotel') ? 'active' : '' }}"><a href="{{url('add-hotel')}}">Add Hotel</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="menu-img">
                                                        <img src="{{URL::asset('build/img/menu/hotel.jpg')}}" alt="Hotel" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            {{-- Car --}}
                            <li class="has-submenu mega-innermenu {{ Request::is('car-grid','edit-car','car-list','car-map','car-details','car-booking','car-booking-confirmation','add-car') ? 'active subdrop' : '' }}">
                                <a href="#">Car<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h6>Car Rentals</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('car-grid','edit-car') ? 'active' : '' }}"><a href="{{url('car-grid')}}">Car Grid</a></li>
                                                        <li class="{{ Request::is('car-list') ? 'active' : '' }}"><a href="{{url('car-list')}}">Car List</a></li>
                                                        <li class="{{ Request::is('car-map') ? 'active' : '' }}"><a href="{{url('car-map')}}">Car Map</a></li>
                                                        <li class="{{ Request::is('car-details') ? 'active' : '' }}"><a href="{{url('car-details')}}">Car Details</a></li>
                                                        <li class="{{ Request::is('car-booking','car-booking-confirmation') ? 'active' : '' }}"><a href="{{url('car-booking')}}">Car Booking</a></li>
                                                        <li class="{{ Request::is('add-car') ? 'active' : '' }}"><a href="{{url('add-car')}}">Add Car</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="menu-img">
                                                        <img src="{{URL::asset('build/img/menu/car.jpg')}}" alt="Car" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            {{-- Cruise --}}
                            <li class="has-submenu mega-innermenu {{ Request::is('cruise-grid','edit-cruise','cruise-list','cruise-map','cruise-details','cruise-booking','cruise-booking-confirmation','add-cruise') ? 'active subdrop' : '' }}">
                                <a href="#">Cruise<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h6>Cruise Bookings</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('cruise-grid','edit-cruise') ? 'active' : '' }}"><a href="{{url('cruise-grid')}}">Cruise Grid</a></li>
                                                        <li class="{{ Request::is('cruise-list') ? 'active' : '' }}"><a href="{{url('cruise-list')}}">Cruise List</a></li>
                                                        <li class="{{ Request::is('cruise-map') ? 'active' : '' }}"><a href="{{url('cruise-map')}}">Cruise Map</a></li>
                                                        <li class="{{ Request::is('cruise-details') ? 'active' : '' }}"><a href="{{url('cruise-details')}}">Cruise Details</a></li>
                                                        <li class="{{ Request::is('cruise-booking','cruise-booking-confirmation') ? 'active' : '' }}"><a href="{{url('cruise-booking')}}">Cruise Booking</a></li>
                                                        <li class="{{ Request::is('add-cruise') ? 'active' : '' }}"><a href="{{url('add-cruise')}}">Add Cruise</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="menu-img">
                                                        <img src="{{URL::asset('build/img/menu/cruise.jpg')}}" alt="Cruise" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            {{-- Bus --}}
                            <li class="has-submenu mega-innermenu {{ Request::is('bus-list','bus-left-sidebar','bus-right-sidebar','bus-details','bus-seat-selection','bus-booking','bus-booking-confirmation','add-bus') ? 'active subdrop' : '' }}">
                                <a href="#">Bus<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h6>Bus Bookings</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('bus-list') ? 'active' : '' }}"><a href="{{url('bus-list')}}">Bus List</a></li>
                                                        <li class="{{ Request::is('bus-details') ? 'active' : '' }}"><a href="{{url('bus-details')}}">Bus Details</a></li>
                                                        <li class="{{ Request::is('bus-seat-selection') ? 'active' : '' }}"><a href="{{url('bus-seat-selection')}}">Seat Selection</a></li>
                                                        <li class="{{ Request::is('bus-booking','bus-booking-confirmation') ? 'active' : '' }}"><a href="{{url('bus-booking')}}">Bus Booking</a></li>
                                                        <li class="{{ Request::is('add-bus') ? 'active' : '' }}"><a href="{{url('add-bus')}}">Add Bus</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="menu-img">
                                                        <img src="{{URL::asset('build/img/menu/bus.jpg')}}" alt="Bus" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li class="{{ Request::is('blog', 'blog-list', 'blog-details') ? 'active' : '' }}">
                                <a href="{{url('blog')}}">Blog</a>
                            </li>
                            <li class="{{ Request::is('about-us') ? 'active' : '' }}">
                                <a href="{{url('about-us')}}">About</a>
                            </li>
                            <li class="{{ Request::is('contact-us') ? 'active' : '' }}">
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
                        @auth
                        <div class="dropdown profile-dropdown">
                            <a href="#" class="d-flex align-items-center" data-bs-toggle="dropdown">
                                <span class="avatar avatar-md">
                                    <img src="{{URL::asset('build/img/users/user-05.jpg')}}" alt="Img"
                                        class="img-fluid rounded-circle border border-white ">
                                </span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                <li class="px-2 pb-2 border-bottom mb-2">
                                    <span class="fw-semibold d-block">{{ auth()->user()->name }}</span>
                                    <span class="text-muted fs-13">{{ auth()->user()->email }}</span>
                                </li>
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
                                <li><hr class="dropdown-divider my-2"></li>
                                <li>
                                    <a class="dropdown-item d-inline-flex align-items-center rounded fw-medium p-2"
                                        href="{{url('profile-settings')}}">Settings</a>
                                </li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit"
                                            class="dropdown-item d-inline-flex align-items-center rounded fw-medium p-2 text-danger w-100 border-0 bg-transparent">
                                            <i class="isax isax-logout-15 me-2"></i>Logout
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <a href="{{url('add-hotel')}}" class="btn btn-primary me-0">Add Listing</a>
                        @else
                        <a href="{{url('login')}}" class="btn btn-primary d-inline-flex align-items-center me-2">
                            <i class="isax isax-lock5 me-2"></i>Login
                        </a>
                        <a href="{{url('register')}}" class="btn btn-dark d-inline-flex align-items-center me-0">
                            <i class="isax isax-profile-remove5 me-2"></i>Register
                        </a>
                        @endauth
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
                                <a href="{{url('/')}}" class="black-logo-responsive">
                                    <img src="{{URL::asset('build/img/logo-dark.svg')}}" alt="logo-img">
                                </a>
                                <a href="{{url('/')}}" class="white-logo-responsive">
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
                        <a class="logo-white header-logo" href="{{url('/')}}">
                            <img src="{{URL::asset('build/img/logo-dark.svg')}}" class="logo" alt="Logo">
                        </a>
                        <a class="logo-dark header-logo" href="{{url('/')}}">
                            <img src="{{URL::asset('build/img/logo.svg')}}" class="logo" alt="Logo">
                        </a>
                    </div>
                    <nav id="mobile-menu">
                        <ul class="main-nav">
                            <li class="{{ Route::is('index-2') ? 'active' : '' }}">
                                <a href="{{ url('/') }}">Home</a>
                            </li>

                            {{-- Flight --}}
                            <li class="has-submenu mega-innermenu {{ Request::is('flight-grid','edit-flight','flight-list','flight-details','flight-booking','flight-booking-confirmation','add-flight') ? 'active subdrop' : '' }}">
                                <a href="#">Flight<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h6>Flight Bookings</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('flight-grid','edit-flight') ? 'active' : '' }}"><a href="{{url('flight-grid')}}">Flight Grid</a></li>
                                                        <li class="{{ Request::is('flight-list') ? 'active' : '' }}"><a href="{{url('flight-list')}}">Flight List</a></li>
                                                        <li class="{{ Request::is('flight-details','flight-booking') ? 'active' : '' }}"><a href="{{url('flight-details')}}">Flight Details</a></li>
                                                        <li class="{{ Request::is('flight-booking-confirmation') ? 'active' : '' }}"><a href="{{url('flight-booking-confirmation')}}">Flight Booking</a></li>
                                                        <li class="{{ Request::is('add-flight') ? 'active' : '' }}"><a href="{{url('add-flight')}}">Add Flight</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="menu-img">
                                                        <img src="{{URL::asset('build/img/menu/flight.jpg')}}" alt="Flight" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            {{-- Hotel --}}
                            <li class="has-submenu mega-innermenu {{ Request::is('hotel-grid','edit-hotel','hotel-list','hotel-map','hotel-details','hotel-booking','booking-confirmation','add-hotel') ? 'active subdrop' : '' }}">
                                <a href="#">Hotel<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h6>Hotel Bookings</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('hotel-grid','edit-hotel') ? 'active' : '' }}"><a href="{{url('hotel-grid')}}">Hotel Grid</a></li>
                                                        <li class="{{ Request::is('hotel-list') ? 'active' : '' }}"><a href="{{url('hotel-list')}}">Hotel List</a></li>
                                                        <li class="{{ Request::is('hotel-map') ? 'active' : '' }}"><a href="{{url('hotel-map')}}">Hotel Map</a></li>
                                                        <li class="{{ Request::is('hotel-details') ? 'active' : '' }}"><a href="{{url('hotel-details')}}">Hotel Details</a></li>
                                                        <li class="{{ Request::is('hotel-booking','booking-confirmation') ? 'active' : '' }}"><a href="{{url('hotel-booking')}}">Hotel Booking</a></li>
                                                        <li class="{{ Request::is('add-hotel') ? 'active' : '' }}"><a href="{{url('add-hotel')}}">Add Hotel</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="menu-img">
                                                        <img src="{{URL::asset('build/img/menu/hotel.jpg')}}" alt="Hotel" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            {{-- Car --}}
                            <li class="has-submenu mega-innermenu {{ Request::is('car-grid','edit-car','car-list','car-map','car-details','car-booking','car-booking-confirmation','add-car') ? 'active subdrop' : '' }}">
                                <a href="#">Car<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h6>Car Rentals</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('car-grid','edit-car') ? 'active' : '' }}"><a href="{{url('car-grid')}}">Car Grid</a></li>
                                                        <li class="{{ Request::is('car-list') ? 'active' : '' }}"><a href="{{url('car-list')}}">Car List</a></li>
                                                        <li class="{{ Request::is('car-map') ? 'active' : '' }}"><a href="{{url('car-map')}}">Car Map</a></li>
                                                        <li class="{{ Request::is('car-details') ? 'active' : '' }}"><a href="{{url('car-details')}}">Car Details</a></li>
                                                        <li class="{{ Request::is('car-booking','car-booking-confirmation') ? 'active' : '' }}"><a href="{{url('car-booking')}}">Car Booking</a></li>
                                                        <li class="{{ Request::is('add-car') ? 'active' : '' }}"><a href="{{url('add-car')}}">Add Car</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="menu-img">
                                                        <img src="{{URL::asset('build/img/menu/car.jpg')}}" alt="Car" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            {{-- Cruise --}}
                            <li class="has-submenu mega-innermenu {{ Request::is('cruise-grid','edit-cruise','cruise-list','cruise-map','cruise-details','cruise-booking','cruise-booking-confirmation','add-cruise') ? 'active subdrop' : '' }}">
                                <a href="#">Cruise<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h6>Cruise Bookings</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('cruise-grid','edit-cruise') ? 'active' : '' }}"><a href="{{url('cruise-grid')}}">Cruise Grid</a></li>
                                                        <li class="{{ Request::is('cruise-list') ? 'active' : '' }}"><a href="{{url('cruise-list')}}">Cruise List</a></li>
                                                        <li class="{{ Request::is('cruise-map') ? 'active' : '' }}"><a href="{{url('cruise-map')}}">Cruise Map</a></li>
                                                        <li class="{{ Request::is('cruise-details') ? 'active' : '' }}"><a href="{{url('cruise-details')}}">Cruise Details</a></li>
                                                        <li class="{{ Request::is('cruise-booking','cruise-booking-confirmation') ? 'active' : '' }}"><a href="{{url('cruise-booking')}}">Cruise Booking</a></li>
                                                        <li class="{{ Request::is('add-cruise') ? 'active' : '' }}"><a href="{{url('add-cruise')}}">Add Cruise</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="menu-img">
                                                        <img src="{{URL::asset('build/img/menu/cruise.jpg')}}" alt="Cruise" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            {{-- Bus --}}
                            <li class="has-submenu mega-innermenu {{ Request::is('bus-list','bus-left-sidebar','bus-right-sidebar','bus-details','bus-seat-selection','bus-booking','bus-booking-confirmation','add-bus') ? 'active subdrop' : '' }}">
                                <a href="#">Bus<i class="fa-solid fa-angle-down"></i></a>
                                <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h6>Bus Bookings</h6>
                                                    <ul>
                                                        <li class="{{ Request::is('bus-list') ? 'active' : '' }}"><a href="{{url('bus-list')}}">Bus List</a></li>
                                                        <li class="{{ Request::is('bus-details') ? 'active' : '' }}"><a href="{{url('bus-details')}}">Bus Details</a></li>
                                                        <li class="{{ Request::is('bus-seat-selection') ? 'active' : '' }}"><a href="{{url('bus-seat-selection')}}">Seat Selection</a></li>
                                                        <li class="{{ Request::is('bus-booking','bus-booking-confirmation') ? 'active' : '' }}"><a href="{{url('bus-booking')}}">Bus Booking</a></li>
                                                        <li class="{{ Request::is('add-bus') ? 'active' : '' }}"><a href="{{url('add-bus')}}">Add Bus</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="menu-img">
                                                        <img src="{{URL::asset('build/img/menu/bus.jpg')}}" alt="Bus" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li class="{{ Request::is('about-us') ? 'active' : '' }}">
                                <a href="{{url('about-us')}}">About</a>
                            </li>
                            <li class="{{ Request::is('blog', 'blog-list', 'blog-details') ? 'active' : '' }}">
                                <a href="{{url('blog')}}">Blog</a>
                            </li>
                            <li class="{{ Request::is('contact-us') ? 'active' : '' }}">
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
                        @auth
                        <div class="dropdown profile-dropdown">
                            <a href="#" class="d-flex align-items-center" data-bs-toggle="dropdown">
                                <span class="avatar avatar-md">
                                    <img src="{{URL::asset('build/img/users/user-05.jpg')}}" alt="Img"
                                        class="img-fluid rounded-circle border border-white">
                                </span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                <li class="px-2 pb-2 border-bottom mb-2">
                                    <span class="fw-semibold d-block">{{ auth()->user()->name }}</span>
                                    <span class="text-muted fs-13">{{ auth()->user()->email }}</span>
                                </li>
                                <li>
                                    <a class="dropdown-item d-inline-flex align-items-center rounded fw-medium p-2"
                                        href="{{url('dashboard')}}">Dashboard</a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-inline-flex align-items-center rounded fw-medium p-2"
                                        href="{{url('my-profile')}}">My Profile</a>
                                </li>
                                <li><hr class="dropdown-divider my-2"></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit"
                                            class="dropdown-item d-inline-flex align-items-center rounded fw-medium p-2 text-danger w-100 border-0 bg-transparent">
                                            <i class="isax isax-logout-15 me-2"></i>Logout
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        @else
                        <a href="{{url('login')}}" class="btn btn-primary d-inline-flex align-items-center me-2"><i
                                class="isax isax-lock5 me-2"></i>Login</a>
                        <a href="{{url('register')}}" class="btn btn-dark d-inline-flex align-items-center me-0"><i
                                class="isax isax-profile-remove5 me-2"></i>Register</a>
                        @endauth
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
