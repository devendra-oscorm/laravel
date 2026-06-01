@if (!Route::is(['index-2', 'index-4', 'index-5', 'index-6', 'index-7', 'index-8', 'index-9', 'index-10', 'index-11', 'index-12', 'index', 'login', 'register', 'forgot-password', 'change-password', 'error-404', 'error-500', 'under-maintenance', 'coming-soon']))
    <!-- Global Footer -->
    <footer>
        <div class="container">
            <div class="footer-top">
                <div class="row row-cols-lg-5 row-cols-md-3 row-cols-sm-2 row-cols-1">
                    <div class="col">
                        <div class="footer-widget">
                            <h5>Pages</h5>
                            <ul class="footer-menu">
                                <li><a href="{{url('team')}}">Our Team</a></li>
                                <li><a href="{{url('pricing-plan')}}">Pricing Plans</a></li>
                                <li><a href="{{url('gallery')}}">Gallery</a></li>
                                <li><a href="{{url('profile-settings')}}">Settings</a></li>
                                <li><a href="{{url('my-profile')}}">Profile</a></li>
                                <li><a href="{{url('agent-listings')}}">Listings</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="footer-widget">
                            <h5>Company</h5>
                            <ul class="footer-menu">
                                <li><a href="{{url('about-us')}}">About Us</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="{{url('blog')}}">Blog</a></li>
                                <li><a href="#">Affiliate Program</a></li>
                                <li><a href="{{url('add-flight')}}">Add Your Listing</a></li>
                                <li><a href="#">Our Partners</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="footer-widget">
                            <h5>Destinations</h5>
                            <ul class="footer-menu">
                                <li><a href="#">Hawai</a></li>
                                <li><a href="#">Istanbul</a></li>
                                <li><a href="#">San Diego</a></li>
                                <li><a href="#">Belgium</a></li>
                                <li><a href="#">Los Angeles</a></li>
                                <li><a href="#">Newyork</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="footer-widget">
                            <h5>Support</h5>
                            <ul class="footer-menu">
                                <li><a href="{{url('contact-us')}}">Contact Us</a></li>
                                <li><a href="#">Legal Notice</a></li>
                                <li><a href="{{url('privacy-policy')}}">Privacy Policy</a></li>
                                <li><a href="{{url('terms-conditions')}}">Terms and Conditions</a></li>
                                <li><a href="{{url('chat')}}">Chat Support</a></li>
                                <li><a href="#">Refund Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="footer-widget">
                            <h5>Services</h5>
                            <ul class="footer-menu">
                                <li><a href="{{url('hotel-grid')}}">Hotel</a></li>
                                <li><a href="#">Activity Finder</a></li>
                                <li><a href="{{url('flight-grid')}}">Flight Finder</a></li>
                                <li><a href="{{url('tour-grid')}}">Holiday Rental</a></li>
                                <li><a href="{{url('car-grid')}}">Car Rental</a></li>
                                <li><a href="{{url('tour-details')}}">Holiday Packages</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-wrap bg-white">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-xl-3 col-xxl-3">
                            <div class="mb-3 text-center text-xl-start">
                                <a href="{{url('/')}}" class="d-block footer-logo-light">
                                    <img src="{{URL::asset('build/img/logo-dark.svg')}}" alt="logo">
                                </a>
                                <a href="{{url('/')}}" class="footer-logo-dark">
                                    <img src="{{URL::asset('build/img/logo.svg')}}" alt="logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4 col-xxl-4">
                        
                        </div>
                        <div class="col-lg-12 col-xl-5 col-xxl-5">
                            <div class="d-sm-flex align-items-center justify-content-center justify-content-xl-end">
                                <div class="d-flex align-items-center justify-content-center justify-content-sm-start me-0 pe-0 me-sm-3 pe-sm-3 border-end mb-3">
                                    <span class="avatar avatar-lg bg-primary rounded-circle flex-shrink-0">
                                        <i class="ti ti-headphones-filled fs-24"></i>
                                    </span>
                                    <div class="ms-2">
                                        <p class="mb-1">Customer Support</p>
                                        <p class="fw-medium text-dark">+1 56589 54598</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-center justify-content-sm-start mb-3">
                                    <span class="avatar avatar-lg bg-secondary rounded-circle flex-shrink-0">
                                        <i class="ti ti-message fs-24 text-gray-9"></i>
                                    </span>
                                    <div class="ms-2">
                                        <p class="mb-1">Drop Us an Email</p>
                                        <p class="fw-medium text-dark">info@example.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-img">
                    <img src="{{URL::asset('build/img/bg/footer.svg')}}" class="img-fluid" alt="img">
                </div>
            </div>
        </div>
        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <p class="fs-14">Copyright &copy; 2026. All Rights Reserved, <a href="#" class="text-primary fw-medium">DreamsTour</a></p>
                            <div class="d-flex align-items-center">
                                <ul class="social-icon">
                                    <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                            <ul class="card-links">
                                <li><a href="#"><img src="{{URL::asset('build/img/icons/card-01.svg')}}" alt="img"></a></li>
                                <li><a href="#"><img src="{{URL::asset('build/img/icons/card-02.svg')}}" alt="img"></a></li>
                                <li><a href="#"><img src="{{URL::asset('build/img/icons/card-03.svg')}}" alt="img"></a></li>
                                <li><a href="#"><img src="{{URL::asset('build/img/icons/card-04.svg')}}" alt="img"></a></li>
                                <li><a href="#"><img src="{{URL::asset('build/img/icons/card-05.svg')}}" alt="img"></a></li>
                                <li><a href="#"><img src="{{URL::asset('build/img/icons/card-06.svg')}}" alt="img"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endif

@if (Route::is(['index-2']))
    <!-- Home Page Footer (index-2) -->
    <footer class="footer-nine">
        <div class="footer-top">
            <div class="container">
                <div class="row row-gap-4">
                    <div class="col-xl-7">
                        <div class="footer-about">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="footer-about-text">
                                        <a href="{{url('/')}}" class="d-inline-block mb-1">
                                            <img src="{{URL::asset('build/img/logo.svg')}}" alt="logo">
                                        </a>
                                        <p class="text-white">Our mission is to offer you a seamless and enjoyable car rental experience. Whether you’re planning a road trip</p>
                                    </div>
                                    <div class="home-nine-title text-white">Subscribe to Our Newsletter</div>
                                    <p class="text-white mb-3">Just sign up and we'll send you a notification by email.</p>
                                    <div class="footer-input">
                                        <div class="input-group align-items-center justify-content-center">
                                            <span class="input-group-text px-1"><i class="isax isax-message-favorite5"></i></span>
                                            <input type="email" class="form-control" placeholder="Enter Email Address">
                                            <button type="submit" class="btn btn-primary btn-md">Subscribe</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="footer-widget mb-0">
                                        <div class="home-nine-title">Services</div>
                                        <ul class="footer-menu">
                                            <li><a href="{{url('hotel-grid')}}">Hotel</a></li>
                                            <li><a href="{{url('activity-grid')}}">Activity Finder</a></li>
                                            <li><a href="{{url('flight-grid')}}">Flight finder</a></li>
                                            <li><a href="{{url('tour-grid')}}">Tour Packages</a></li>
                                            <li><a href="{{url('car-grid')}}">Car Rental</a></li>
                                            <li><a href="{{url('cruise-grid')}}">Luxury Cruises</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5">
                       <div class="footer-image" style="background-image: url(./build/img/bg/footer-nine-bg.jpg)">
                          <div class="footer-content">
                            <h2>Explore Beyond the Horizon: Discover the World’s Wonders</h2>
                            <a href="#" class="btn btn-primary"><i class="isax isax-call-outgoing me-1"></i> Contact Us</a>
                          </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <img src="{{URL::asset('./build/img/bg/footer-nine-bg2.png')}}" alt="img">
        </div>
        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copy-right">
                            <p>Copyright &copy; 2026 <a href="#" class="fw-medium">DreamsTour</a>, All Rights Reserved</p>
                            <div class="d-flex align-items-center">
                                <ul class="social-icon">
                                    <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                            <ul class="policy-links">
                                <li><a href="#">Legal Notice</a></li>
                                <li><a href="#">Refund Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div id="scroll-progress" class="scroll-progress">
            <span id="progress-value">0%</span>
        </div>
    </footer>
@endif

@if (Route::is(['index-4']))
    <!-- Footer Four -->
    <footer class="footer-two">
        <div class="container">
            <div class="footer-top">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="footer-widget">
                            <span class="d-block mb-2 footer-logo-light"><img src="{{URL::asset('build/img/logo-dark.svg')}}" alt="Img"></span>
                            <span class="mb-2 footer-logo-dark"><img src="{{URL::asset('build/img/logo.svg')}}" alt="Img"></span>
                            <p class="mb-3">The experience of booking your flight tickets, hotel stay</p>
                     
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="footer-widget">
                                    <h5>Company</h5>
                                    <ul class="footer-menu">
                                        <li><a href="{{url('about-us')}}">About Us</a></li>
                                        <li><a href="#">Careers</a></li>
                                        <li><a href="{{url('blog')}}">Blog</a></li>
                                        <li><a href="#">Affiliate Program</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="footer-widget">
                                    <h5>Destinations</h5>
                                    <ul class="footer-menu">
                                        <li><a href="#">Hawai</a></li>
                                        <li><a href="#">Istanbul</a></li>
                                        <li><a href="#">San Diego</a></li>
                                        <li><a href="#">Belgium</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="footer-widget">
                                    <h5>Support</h5>
                                    <ul class="footer-menu">
                                        <li><a href="{{url('contact-us')}}">Contact Us</a></li>
                                        <li><a href="#">Legal Notice</a></li>
                                        <li><a href="{{url('privacy-policy')}}">Privacy Policy</a></li>
                                        <li><a href="{{url('terms-conditions')}}">Terms and Conditions</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="footer-widget">
                                    <h5>Services</h5>
                                    <div class="customer-info">
                                        <div class="customer-info-icon">
                                            <span><i class="isax isax-headphone5"></i></span>
                                        </div>
                                        <div class="customer-info-content">
                                            <span>Customer Support</span>
                                            <h6>+1 56589 54598</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endif