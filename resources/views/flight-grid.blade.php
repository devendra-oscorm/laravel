    <?php $page="flight-grid";?>
    @extends('layout.mainlayout')
    @section('content')

        <!-- ========================
            Start Page Content
        ========================= -->

        <!-- Breadcrumb -->
        <div class="breadcrumb-bar breadcrumb-bg-05 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <h2 class="breadcrumb-title mb-2">Flight</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="isax isax-home5"></i></a></li>
                                <li class="breadcrumb-item">Flight</li>
                                <li class="breadcrumb-item active" aria-current="page">Flight Grid</li>
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

                <!-- Flight Search -->
                <div class="card">
                    <div class="card-body">
                        <div class="banner-form">
                            <form action="{{ route('flight.search') }}" method="GET" class="">
                                @csrf
                                <div class="d-flex align-items-center justify-content-between flex-wrap mb-2">
                                    <div class="d-flex align-items-center">
                                        <div class="form-check d-flex align-items-center me-3 mb-2">
                                            <input class="form-check-input mt-0" type="radio" name="Radio" id="oneway"
                                                value="oneway" checked>
                                            <label class="form-check-label fs-14 ms-2" for="oneway">
                                                Oneway
                                            </label>
                                        </div>
                                        <div class="form-check d-flex align-items-center me-3 mb-2">
                                            <input class="form-check-input mt-0" type="radio" name="Radio" id="roundtrip"
                                                value="roundtrip">
                                            <label class="form-check-label fs-14 ms-2" for="roundtrip">
                                                Round Trip
                                            </label>
                                        </div>
                                        <div class="form-check d-flex align-items-center me-3 mb-2">
                                            <input class="form-check-input mt-0" type="radio" name="Radio" id="multiway"
                                                value="multiway">
                                            <label class="form-check-label fs-14 ms-2" for="multiway">
                                                Multi Trip
                                            </label>
                                        </div>
                                    </div>
                                    <h6 class="fw-medium fs-16 mb-2">Millions of cheap flights. One simple search</h6>
                                </div>
                                <div class="normal-trip">
                                    <div class="d-lg-flex">
                                        <div class="d-flex  form-info">
                                            <div class="form-item dropdown">
                                                <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                    aria-expanded="false" role="menu">
                                                    <label class="form-label fs-14 text-default mb-1">From</label>
                                                    <input type="text" id="from-city-display" class="form-control" placeholder="Select departure city">
                                                    <input type="hidden" name="from" id="from-iata">
                                                    <p id="from-airport-display" class="fs-12 mb-0">Select Airport</p>
                                                </div>
                                                <div class="dropdown-menu dropdown-md p-0">
                                                    <div class="input-search p-3 border-bottom">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control airport-search" data-target="from"
                                                                placeholder="Search Location">
                                                            <span class="input-group-text px-2 border-start-0"><i
                                                                    class="isax isax-search-normal"></i></span>
                                                        </div>
                                                    </div>
                                                    <ul class="airport-list" data-target="from">
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="form-item dropdown ps-2 ps-sm-3">
                                                <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                    aria-expanded="false" role="menu">
                                                    <label class="form-label fs-14 text-default mb-1">To</label>
                                                    <input type="text" id="to-city-display" class="form-control" placeholder="Select destination city">
                                                    <input type="hidden" name="to" id="to-iata">
                                                    <p id="to-airport-display" class="fs-12 mb-0">Select Airport</p>
                                                    <span
                                                        class="way-icon badge badge-primary rounded-pill translate-middle">
                                                        <i class="fa-solid fa-arrow-right-arrow-left"></i>
                                                    </span>
                                                </div>
                                                <div class="dropdown-menu dropdown-md p-0">
                                                    <div class="input-search p-3 border-bottom">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control airport-search" data-target="to"
                                                                placeholder="Search Location">
                                                            <span class="input-group-text px-2 border-start-0"><i
                                                                    class="isax isax-search-normal"></i></span>
                                                        </div>
                                                    </div>
                                                    <ul class="airport-list" data-target="to">
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="form-item">
                                                <label class="form-label fs-14 text-default mb-1">Departure</label>
                                                <input type="text" class="form-control datetimepicker" value="21-10-2024">
                                                <p class="fs-12 mb-0">Monday</p>
                                            </div>
                                            <div class="form-item round-drip">
                                                <label class="form-label fs-14 text-default mb-1">Return</label>
                                                <input type="text" class="form-control datetimepicker" value="23-10-2024">
                                                <p class="fs-12 mb-0">Wednesday</p>
                                            </div>
                                            <div class="form-item dropdown">
                                                <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                    aria-expanded="false" role="menu">
                                                    <label class="form-label fs-14 text-default mb-1">Travellers and cabin
                                                        class</label>
                                                    <h5>4 <span class="fw-normal fs-14">Persons</span></h5>
                                                    <p class="fs-12 mb-0">1 Adult, Economy</p>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end dropdown-xl">
                                                    <h5 class="mb-3">Select Travelers & Class</h5>
                                                    <div class="mb-3 border br-10 info-item pb-1">
                                                        <h6 class="fs-16 fw-medium mb-2">Travellers</h6>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label class="form-label text-gray-9 mb-2">Adults <span
                                                                            class="text-default fw-normal">( 12+ Yrs
                                                                            )</span></label>
                                                                    <div class="custom-increment">
                                                                        <div class="input-group">
                                                                            <span class="input-group-btn float-start">
                                                                                <button type="button"
                                                                                    class="quantity-left-minus btn btn-light btn-number"
                                                                                    data-type="minus" data-field="">
                                                                                    <span><i
                                                                                            class="isax isax-minus"></i></span>
                                                                                </button>
                                                                            </span>
                                                                            <input type="text" name="quantity"
                                                                                class=" input-number" value="01">
                                                                            <span class="input-group-btn float-end">
                                                                                <button type="button"
                                                                                    class="quantity-right-plus btn btn-light btn-number"
                                                                                    data-type="plus" data-field="">
                                                                                    <span><i
                                                                                            class="isax isax-add"></i></span>
                                                                                </button>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label class="form-label text-gray-9 mb-2">Childrens
                                                                        <span class="text-default fw-normal">( 2-12 Yrs
                                                                            )</span></label>
                                                                    <div class="custom-increment">
                                                                        <div class="input-group">
                                                                            <span class="input-group-btn float-start">
                                                                                <button type="button"
                                                                                    class="quantity-left-minus btn btn-light btn-number"
                                                                                    data-type="minus" data-field="">
                                                                                    <span><i
                                                                                            class="isax isax-minus"></i></span>
                                                                                </button>
                                                                            </span>
                                                                            <input type="text" name="quantity"
                                                                                class=" input-number" value="01">
                                                                            <span class="input-group-btn float-end">
                                                                                <button type="button"
                                                                                    class="quantity-right-plus btn btn-light btn-number"
                                                                                    data-type="plus" data-field="">
                                                                                    <span><i
                                                                                            class="isax isax-add"></i></span>
                                                                                </button>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label class="form-label text-gray-9 mb-2">Infants<span
                                                                            class="text-default fw-normal">( 0-12 Yrs
                                                                            )</span></label>
                                                                    <div class="custom-increment">
                                                                        <div class="input-group">
                                                                            <span class="input-group-btn float-start">
                                                                                <button type="button"
                                                                                    class="quantity-left-minus btn btn-light btn-number"
                                                                                    data-type="minus" data-field="">
                                                                                    <span><i
                                                                                            class="isax isax-minus"></i></span>
                                                                                </button>
                                                                            </span>
                                                                            <input type="text" name="quantity"
                                                                                class=" input-number" value="01">
                                                                            <span class="input-group-btn float-end">
                                                                                <button type="button"
                                                                                    class="quantity-right-plus btn btn-light btn-number"
                                                                                    data-type="plus" data-field="">
                                                                                    <span><i
                                                                                            class="isax isax-add"></i></span>
                                                                                </button>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 border br-10 info-item pb-1">
                                                        <h6 class="fs-16 fw-medium mb-2">Travellers</h6>
                                                        <div class="d-flex align-items-center flex-wrap">
                                                            <div class="form-check me-3 mb-3">
                                                                <input class="form-check-input" type="radio" value="Economy"
                                                                    name="cabin-class" id="economy" checked>
                                                                <label class="form-check-label" for="economy">
                                                                    Economy
                                                                </label>
                                                            </div>
                                                            <div class="form-check me-3 mb-3">
                                                                <input class="form-check-input" type="radio" value="Economy"
                                                                    name="cabin-class" id="premium-economy">
                                                                <label class="form-check-label" for="premium-economy">
                                                                    Premium Economy
                                                                </label>
                                                            </div>
                                                            <div class="form-check me-3 mb-3">
                                                                <input class="form-check-input" type="radio"
                                                                    value="Business" name="cabin-class" id="business">
                                                                <label class="form-check-label" for="business">
                                                                    Business
                                                                </label>
                                                            </div>
                                                            <div class="form-check mb-3">
                                                                <input class="form-check-input" type="radio"
                                                                    value="First Class" name="cabin-class" id="first-class">
                                                                <label class="form-check-label" for="first-class">
                                                                    First Class
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-end">
                                                        <a href="#" class="btn btn-light btn-sm me-2">Cancel</a>
                                                        <button type="submit" class="btn btn-primary btn-sm">Apply</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary search-btn rounded">Search</button>
                                    </div>
                                </div>
                                <div class="multi-trip">
                                    <div class="d-lg-flex">
                                        <div class="d-flex form-info">
                                            <div class="form-item dropdown">
                                                <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                    aria-expanded="false" role="menu">
                                                    <label class="form-label fs-14 text-default mb-1">From</label>
                                                    <input type="text" id="multi-from-city-display" class="form-control" placeholder="Select departure city">
                                                    <input type="hidden" id="multi-from-iata">
                                                    <p id="multi-from-airport-display" class="fs-12 mb-0">Select Airport</p>
                                                </div>
                                                <div class="dropdown-menu dropdown-md p-0">
                                                    <div class="input-search p-3 border-bottom">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control airport-search" data-target="multi-from"
                                                                placeholder="Search Location">
                                                            <span class="input-group-text px-2 border-start-0"><i
                                                                    class="isax isax-search-normal"></i></span>
                                                        </div>
                                                    </div>
                                                    <ul class="airport-list" data-target="multi-from"></ul>
                                                </div>
                                            </div>
                                            <div class="form-item dropdown ps-2 ps-sm-3">
                                                <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                    aria-expanded="false" role="menu">
                                                    <label class="form-label fs-14 text-default mb-1">To</label>
                                                    <input type="text" id="multi-to-city-display" class="form-control" placeholder="Select destination city">
                                                    <input type="hidden" id="multi-to-iata">
                                                    <p id="multi-to-airport-display" class="fs-12 mb-0">Select Airport</p>
                                                    <span
                                                        class="way-icon badge badge-primary rounded-pill translate-middle">
                                                        <i class="fa-solid fa-arrow-right-arrow-left"></i>
                                                    </span>
                                                </div>
                                                <div class="dropdown-menu dropdown-md p-0">
                                                    <div class="input-search p-3 border-bottom">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control airport-search" data-target="multi-to"
                                                                placeholder="Search Location">
                                                            <span class="input-group-text px-2 border-start-0"><i
                                                                    class="isax isax-search-normal"></i></span>
                                                        </div>
                                                    </div>
                                                    <ul class="airport-list" data-target="multi-to"></ul>
                                                </div>
                                            </div>
                                            <div class="form-item">
                                                <label class="form-label fs-14 text-default mb-1">Departure</label>
                                                <input type="text" class="form-control datetimepicker" value="21-10-2024">
                                                <p class="fs-12 mb-0">Monday</p>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary search-btn rounded">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /Flight Search -->

                <!-- Flight Types -->
                <div class="mb-2">
                    <div class="mb-3">
                        <h5 class="mb-2">Choose type of Flights you are interested</h5>
                    </div>
                    <div class="row">
                        <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="d-flex align-items-center hotel-type-item mb-3">
                                <a href="{{url('flight-grid')}}" class="avatar avatar-lg">
                                    <img src="{{URL::asset('build/img/flight/flight-company-01.svg')}}" class="rounded-circle" alt="img">
                                </a>
                                <div class="ms-2">
                                    <h6 class="fs-16 fw-medium"><a href="{{url('flight-grid')}}">American Airline</a></h6>
                                    <p class="fs-14">216 Flights</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="d-flex align-items-center hotel-type-item mb-3">
                                <a href="{{url('flight-grid')}}" class="avatar avatar-lg">
                                    <img src="{{URL::asset('build/img/flight/flight-company-02.svg')}}" class="rounded-circle" alt="img">
                                </a>
                                <div class="ms-2">
                                    <h6 class="fs-16 fw-medium"><a href="{{url('flight-grid')}}">Delta Airlines</a></h6>
                                    <p class="fs-14">569 Flights</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="d-flex align-items-center hotel-type-item mb-3">
                                <a href="{{url('flight-grid')}}" class="avatar avatar-lg">
                                    <img src="{{URL::asset('build/img/flight/flight-company-03.svg')}}" class="rounded-circle" alt="img">
                                </a>
                                <div class="ms-2">
                                    <h6 class="fs-16 fw-medium"><a href="{{url('flight-grid')}}">Emirates</a></h6>
                                    <p class="fs-14">129 Flights</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="d-flex align-items-center hotel-type-item mb-3">
                                <a href="{{url('flight-grid')}}" class="avatar avatar-lg">
                                    <img src="{{URL::asset('build/img/flight/flight-company-04.svg')}}" class="rounded-circle" alt="img">
                                </a>
                                <div class="ms-2">
                                    <h6 class="fs-16 fw-medium"><a href="{{url('flight-grid')}}">Air France</a></h6>
                                    <p class="fs-14">600 Flights</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="d-flex align-items-center hotel-type-item mb-3">
                                <a href="{{url('flight-grid')}}" class="avatar avatar-lg">
                                    <img src="{{URL::asset('build/img/flight/flight-company-05.svg')}}" class="rounded-circle" alt="img">
                                </a>
                                <div class="ms-2">
                                    <h6 class="fs-16 fw-medium"><a href="{{url('flight-grid')}}">Qatar Airways</a></h6>
                                    <p class="fs-14">200 Flights</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="d-flex align-items-center hotel-type-item mb-3">
                                <a href="{{url('flight-grid')}}" class="avatar avatar-lg">
                                    <img src="{{URL::asset('build/img/flight/flight-company-06.svg')}}" class="rounded-circle" alt="img">
                                </a>
                                <div class="ms-2">
                                    <h6 class="fs-16 fw-medium"><a href="{{url('flight-grid')}}">Air India</a></h6>
                                    <p class="fs-14">180 Flights</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Flight Types -->

                <div class="row">

                    <!-- Sidebar -->
                    <div class="col-xl-3 col-lg-4 theiaStickySidebar">
                        <div class="card filter-sidebar mb-4 mb-lg-0">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5>Filters</h5>
                                <a href="#" class="fs-14 link-primary">Reset</a>
                            </div>
                            <div class="card-body p-0">
                                <form action="#">
                                    <div class="p-3 border-bottom">
                                        <label class="form-label fs-16">Search by Airline Names</label>
                                        <div class="input-icon">
                                            <span class="input-icon-addon">
                                                <i class="isax isax-search-normal"></i>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Search by Airline Names">
                                        </div>
                                    </div>
                                    <div class="accordion accordion-list">
                                        <div class="accordion-item border-bottom p-3">
                                            <div class="accordion-header">
                                                <div class="accordion-button p-0" data-bs-toggle="collapse"
                                                    data-bs-target="#accordion-populars" aria-expanded="true"
                                                    aria-controls="accordion-populars" role="button">
                                                    <i class="isax isax-ranking me-2 text-primary"></i>Popular
                                                </div>
                                            </div>
                                            <div id="accordion-populars" class="accordion-collapse collapse show">
                                                <div class="accordion-body pt-2">
                                                    <div
                                                        class="form-checkbox form-check form-check-inline d-inline-flex align-items-center mt-2 me-2">
                                                        <input class="form-check-input ms-0 mt-0" name="popular1"
                                                            type="checkbox" id="popular1" checked>
                                                        <label class="form-check-label ms-2" for="popular1">
                                                            Breakfast Included
                                                        </label>
                                                    </div>
                                                    <div
                                                        class="form-checkbox form-check form-check-inline d-inline-flex align-items-center mt-2 me-2">
                                                        <input class="form-check-input ms-0 mt-0" name="popular2"
                                                            type="checkbox" id="popular2">
                                                        <label class="form-check-label ms-2" for="popular2">
                                                            Budget
                                                        </label>
                                                    </div>
                                                    <div
                                                        class="form-checkbox form-check form-check-inline d-inline-flex align-items-center mt-2 me-2">
                                                        <input class="form-check-input ms-0 mt-0" name="popular3"
                                                            type="checkbox" id="popular3">
                                                        <label class="form-check-label ms-2" for="popular3">
                                                            4 Star Hotels
                                                        </label>
                                                    </div>
                                                    <div
                                                        class="form-checkbox form-check form-check-inline d-inline-flex align-items-center mt-2 me-2">
                                                        <input class="form-check-input ms-0 mt-0" name="popular4"
                                                            type="checkbox" id="popular4">
                                                        <label class="form-check-label ms-2" for="popular4">
                                                            5 Star Hotels
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item border-bottom p-3">
                                            <div class="accordion-header">
                                                <div class="accordion-button p-0" data-bs-toggle="collapse"
                                                    data-bs-target="#accordion-popular" aria-expanded="true"
                                                    aria-controls="accordion-popular" role="button">
                                                    <i class="isax isax-coin me-2 text-primary"></i>Price Per Night
                                                </div>
                                            </div>
                                            <div id="accordion-popular" class="accordion-collapse collapse show">
                                                <div class="accordion-body">
                                                    <div class="filter-range">
                                                        <input type="text" id="range_03">
                                                    </div>
                                                    <div class="filter-range-amount">
                                                        <p class="fs-14">Range : <span class="text-gray-9 fw-medium">$200 -
                                                                $5695</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item border-bottom p-3">
                                            <div class="accordion-header">
                                                <div class="accordion-button p-0" data-bs-toggle="collapse"
                                                    data-bs-target="#accordion-flight" aria-expanded="true"
                                                    aria-controls="accordion-flight" role="button">
                                                    <i class="isax isax-airplane4 me-2 text-primary"></i>Airline Names
                                                </div>
                                            </div>
                                            <div id="accordion-flight" class="accordion-collapse collapse show">
                                                <div class="accordion-body">
                                                    <div class="more-content">
                                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                            <input class="form-check-input ms-0 mt-0" name="flight1"
                                                                type="checkbox" id="flight1">
                                                            <label class="form-check-label ms-2" for="flight1">
                                                                American Airlines
                                                            </label>
                                                        </div>
                                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                            <input class="form-check-input ms-0 mt-0" name="flight2"
                                                                type="checkbox" id="flight2">
                                                            <label class="form-check-label ms-2" for="flight2">
                                                                Delta Air Lines
                                                            </label>
                                                        </div>
                                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                            <input class="form-check-input ms-0 mt-0" name="flight3"
                                                                type="checkbox" id="flight3">
                                                            <label class="form-check-label ms-2" for="flight3">
                                                                Emirates
                                                            </label>
                                                        </div>
                                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                            <input class="form-check-input ms-0 mt-0" name="flight4"
                                                                type="checkbox" id="flight4">
                                                            <label class="form-check-label ms-2" for="flight4">
                                                                Air France
                                                            </label>
                                                        </div>
                                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                            <input class="form-check-input ms-0 mt-0" name="flight5"
                                                                type="checkbox" id="flight5">
                                                            <label class="form-check-label ms-2" for="flight5">
                                                                Japan Airlines
                                                            </label>
                                                        </div>
                                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                            <input class="form-check-input ms-0 mt-0" name="flight6"
                                                                type="checkbox" id="flight6">
                                                            <label class="form-check-label ms-2" for="flight6">
                                                                Qatar Airways
                                                            </label>
                                                        </div>
                                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                            <input class="form-check-input ms-0 mt-0" name="flight7"
                                                                type="checkbox" id="flight7">
                                                            <label class="form-check-label ms-2" for="flight7">
                                                                Air Canada
                                                            </label>
                                                        </div>
                                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                            <input class="form-check-input ms-0 mt-0" name="flight8"
                                                                type="checkbox" id="flight8">
                                                            <label class="form-check-label ms-2" for="flight8">
                                                                United Airlines
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="more-view fw-medium fs-14">Show More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item border-bottom p-3">
                                            <div class="accordion-header">
                                                <div class="accordion-button p-0" data-bs-toggle="collapse"
                                                    data-bs-target="#accordion-amenity" aria-expanded="true"
                                                    aria-controls="accordion-amenity" role="button">
                                                    <i class="isax isax-candle me-2 text-primary"></i>Amenities
                                                </div>
                                            </div>
                                            <div id="accordion-amenity" class="accordion-collapse collapse show">
                                                <div class="accordion-body">
                                                    <div class="more-content">
                                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                            <input class="form-check-input ms-0 mt-0" name="amenity1"
                                                                type="checkbox" id="amenity1">
                                                            <label class="form-check-label ms-2" for="amenity1">
                                                                Free Wifi
                                                            </label>
                                                        </div>
                                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                            <input class="form-check-input ms-0 mt-0" name="amenity2"
                                                                type="checkbox" id="amenity2">
                                                            <label class="form-check-label ms-2" for="amenity2">
                                                                Charging Ports
                                                            </label>
                                                        </div>
                                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                            <input class="form-check-input ms-0 mt-0" name="amenity3"
                                                                type="checkbox" id="amenity3">
                                                            <label class="form-check-label ms-2" for="amenity3">
                                                                Entertainment
                                                            </label>
                                                        </div>
                                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                            <input class="form-check-input ms-0 mt-0" name="amenity4"
                                                                type="checkbox" id="amenity4">
                                                            <label class="form-check-label ms-2" for="amenity4">
                                                                Blankets & Pillows
                                                            </label>
                                                        </div>
                                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                            <input class="form-check-input ms-0 mt-0" name="amenity5"
                                                                type="checkbox" id="amenity5">
                                                            <label class="form-check-label ms-2" for="amenity5">
                                                                Adjustable headrests
                                                            </label>
                                                        </div>
                                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                            <input class="form-check-input ms-0 mt-0" name="amenity6"
                                                                type="checkbox" id="amenity6">
                                                            <label class="form-check-label ms-2" for="amenity6">
                                                                Complimentary meals
                                                            </label>
                                                        </div>
                                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                            <input class="form-check-input ms-0 mt-0" name="amenity7"
                                                                type="checkbox" id="amenity7">
                                                            <label class="form-check-label ms-2" for="amenity7">
                                                                Privacy dividers
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="more-view fw-medium fs-14">Show More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item border-bottom p-3">
                                            <div class="accordion-header">
                                                <div class="accordion-button p-0" data-bs-toggle="collapse"
                                                    data-bs-target="#accordion-cabin" aria-expanded="true"
                                                    aria-controls="accordion-cabin" role="button">
                                                    <i class="isax isax-home-2 me-2 text-primary"></i>Cabin Class
                                                </div>
                                            </div>
                                            <div id="accordion-cabin" class="accordion-collapse collapse show">
                                                <div class="accordion-body">
                                                    <div class="more-content">
                                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                            <input class="form-check-input ms-0 mt-0" name="cabin1"
                                                                type="checkbox" id="cabin1">
                                                            <label class="form-check-label ms-2" for="cabin1">
                                                                Economy
                                                            </label>
                                                        </div>
                                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                            <input class="form-check-input ms-0 mt-0" name="cabin2"
                                                                type="checkbox" id="cabin2">
                                                            <label class="form-check-label ms-2" for="cabin2">
                                                                Premium Economy
                                                            </label>
                                                        </div>
                                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                            <input class="form-check-input ms-0 mt-0" name="cabin3"
                                                                type="checkbox" id="cabin3">
                                                            <label class="form-check-label ms-2" for="cabin3">
                                                                Business Class
                                                            </label>
                                                        </div>
                                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                            <input class="form-check-input ms-0 mt-0" name="cabin4"
                                                                type="checkbox" id="cabin4">
                                                            <label class="form-check-label ms-2" for="cabin4">
                                                                First Class
                                                            </label>
                                                        </div>
                                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                            <input class="form-check-input ms-0 mt-0" name="cabin5"
                                                                type="checkbox" id="cabin5">
                                                            <label class="form-check-label ms-2" for="cabin5">
                                                                Basic Economy
                                                            </label>
                                                        </div>
                                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                            <input class="form-check-input ms-0 mt-0" name="cabin6"
                                                                type="checkbox" id="cabin6">
                                                            <label class="form-check-label ms-2" for="cabin6">
                                                                Suite Class
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="more-view fw-medium fs-14">Show More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item border-bottom p-3">
                                            <div class="accordion-header">
                                                <div class="accordion-button p-0" data-bs-toggle="collapse"
                                                    data-bs-target="#accordion-meal" aria-expanded="true"
                                                    aria-controls="accordion-meal" role="button">
                                                    <i class="isax isax-reserve me-2 text-primary"></i>Meal plans available
                                                </div>
                                            </div>
                                            <div id="accordion-meal" class="accordion-collapse collapse show">
                                                <div class="accordion-body pt-2">
                                                    <div
                                                        class="form-checkbox form-check form-check-inline d-inline-flex align-items-center mt-2 me-2">
                                                        <input class="form-check-input ms-0 mt-0" name="meals1"
                                                            type="checkbox" id="meals1">
                                                        <label class="form-check-label ms-2" for="meals1">
                                                            All inclusive
                                                        </label>
                                                    </div>
                                                    <div
                                                        class="form-checkbox form-check form-check-inline d-inline-flex align-items-center mt-2 me-2">
                                                        <input class="form-check-input ms-0 mt-0" name="meals2"
                                                            type="checkbox" id="meals2">
                                                        <label class="form-check-label ms-2" for="meals2">
                                                            Breakfast
                                                        </label>
                                                    </div>
                                                    <div
                                                        class="form-checkbox form-check form-check-inline d-inline-flex align-items-center mt-2 me-2">
                                                        <input class="form-check-input ms-0 mt-0" name="meals3"
                                                            type="checkbox" id="meals3">
                                                        <label class="form-check-label ms-2" for="meals3">
                                                            Lunch
                                                        </label>
                                                    </div>
                                                    <div
                                                        class="form-checkbox form-check form-check-inline d-inline-flex align-items-center mt-2 me-2">
                                                        <input class="form-check-input ms-0 mt-0" name="meals4"
                                                            type="checkbox" id="meals4">
                                                        <label class="form-check-label ms-2" for="meals4">
                                                            Dinner
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item border-bottom p-3">
                                            <div class="accordion-header">
                                                <div class="accordion-button p-0" data-bs-toggle="collapse"
                                                    data-bs-target="#accordion-brand" aria-expanded="true"
                                                    aria-controls="accordion-brand" role="button">
                                                    <i class="isax isax-discount-shape me-2 text-primary"></i>Reviews
                                                </div>
                                            </div>
                                            <div id="accordion-brand" class="accordion-collapse collapse show">
                                                <div class="accordion-body">
                                                    <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                        <input class="form-check-input ms-0 mt-0" name="review1"
                                                            type="checkbox" id="review1">
                                                        <label class="form-check-label ms-2" for="review1">
                                                            <span class="rating d-flex align-items-center">
                                                                <i class="fas fa-star filled text-primary me-1"></i>
                                                                <i class="fas fa-star filled text-primary me-1"></i>
                                                                <i class="fas fa-star filled text-primary me-1"></i>
                                                                <i class="fas fa-star filled text-primary me-1"></i>
                                                                <i class="fas fa-star filled text-primary"></i>
                                                                <span class="ms-2">5 Star</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                        <input class="form-check-input ms-0 mt-0" name="review2"
                                                            type="checkbox" id="review2">
                                                        <label class="form-check-label ms-2" for="review2">
                                                            <span class="rating d-flex align-items-center">
                                                                <i class="fas fa-star filled text-primary me-1"></i>
                                                                <i class="fas fa-star filled text-primary me-1"></i>
                                                                <i class="fas fa-star filled text-primary me-1"></i>
                                                                <i class="fas fa-star filled text-primary"></i>
                                                                <span class="ms-2">4 Star</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                        <input class="form-check-input ms-0 mt-0" name="review3"
                                                            type="checkbox" id="review3">
                                                        <label class="form-check-label ms-2" for="review3">
                                                            <span class="rating d-flex align-items-center">
                                                                <i class="fas fa-star filled text-primary me-1"></i>
                                                                <i class="fas fa-star filled text-primary me-1"></i>
                                                                <i class="fas fa-star filled text-primary"></i>
                                                                <span class="ms-2">3 Star</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                        <input class="form-check-input ms-0 mt-0" name="review4"
                                                            type="checkbox" id="review4">
                                                        <label class="form-check-label ms-2" for="review4">
                                                            <span class="rating d-flex align-items-center">
                                                                <i class="fas fa-star filled text-primary me-1"></i>
                                                                <i class="fas fa-star filled text-primary"></i>
                                                                <span class="ms-2">2 Star</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center ps-0 mb-0">
                                                        <input class="form-check-input ms-0 mt-0" name="review5"
                                                            type="checkbox" id="review5">
                                                        <label class="form-check-label ms-2" for="review5">
                                                            <span class="rating d-flex align-items-center">
                                                                <i class="fas fa-star filled text-primary"></i>
                                                                <span class="ms-2">1 Star</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /Sidebar -->

                    <div class="col-xl-9 col-lg-8">
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <h6 class="mb-3">{{ $routes->count() }} Flights Found on Your Search</h6>
                            <div class="d-flex align-items-center flex-wrap">
                                <div class="list-item d-flex align-items-center mb-3">
                                    <a href="{{url('flight-grid')}}" class="list-icon active me-2"><i
                                            class="isax isax-grid-1"></i></a>
                                    <a href="{{url('flight-list')}}" class="list-icon me-2"><i
                                            class="isax isax-firstline"></i></a>
                                </div>
                                <div class="dropdown mb-3">
                                    <a href="#" class="dropdown-toggle py-2" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <span class="fw-medium text-gray-9">Sort By : </span>Recommended
                                    </a>
                                    <div class="dropdown-menu dropdown-sm">
                                        <form action="{{url('flight-grid')}}">
                                            <h6 class="fw-medium fs-16 mb-3">Sort By</h6>
                                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                <input class="form-check-input ms-0 mt-0" name="recommend" type="checkbox"
                                                    id="recommend1" checked>
                                                <label class="form-check-label ms-2" for="recommend1">Recommended</label>
                                            </div>
                                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                <input class="form-check-input ms-0 mt-0" name="recommend" type="checkbox"
                                                    id="recommend2">
                                                <label class="form-check-label ms-2" for="recommend2">Price: low to
                                                    high</label>
                                            </div>
                                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                <input class="form-check-input ms-0 mt-0" name="recommend" type="checkbox"
                                                    id="recommend3">
                                                <label class="form-check-label ms-2" for="recommend3">Price: high to
                                                    low</label>
                                            </div>
                                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                <input class="form-check-input ms-0 mt-0" name="recommend" type="checkbox"
                                                    id="recommend4">
                                                <label class="form-check-label ms-2" for="recommend4">Newest</label>
                                            </div>
                                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                <input class="form-check-input ms-0 mt-0" name="recommend" type="checkbox"
                                                    id="recommend5">
                                                <label class="form-check-label ms-2" for="recommend5">Ratings</label>
                                            </div>
                                            <div class="form-check d-flex align-items-center ps-0 mb-0">
                                                <input class="form-check-input ms-0 mt-0" name="recommend" type="checkbox"
                                                    id="recommend6">
                                                <label class="form-check-label ms-2" for="recommend6">Reviews</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-end border-top pt-3 mt-3">
                                                <a href="#" class="btn btn-light btn-sm me-2">Reset</a>
                                                <button type="submit" class="btn btn-primary btn-sm">Apply</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-info br-10 p-3 pb-2 mb-4">
                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                <p class="fs-14 fw-medium mb-2 d-inline-flex align-items-center"><i
                                        class="isax isax-info-circle me-2"></i>Save an average of 15% on thousands of
                                    flights when you're signed in</p>
                                <a href="{{url('login')}}" class="btn btn-white btn-sm mb-2">Sign In</a>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            @forelse($routes as $index => $route)
                                @php
                                    $flightImages = [
                                        'flight-09.jpg',
                                        'flight-05.jpg',
                                        'flight-07.jpg',
                                        'flight-08.jpg',
                                        'flight-06.jpg',
                                        'flight-01.jpg',
                                    ];

                                    $sourceCity = optional($route->sourceAirport)->city ?: $route->COL_3;
                                    $destinationCity = optional($route->destinationAirport)->city ?: $route->COL_5;
                                    $airlineName = optional($route->airline)->name ?: 'Airline';
                                    $airlineCode = $route->COL_1;
                                    $price = 250 + ($index * 45);
                                    $seatBadge = ['12 Seats Left', '18 Seats Left', '25 Seats Left', '21 Seats Left'][$index % 4];
                                    $rating = ['4.1', '4.4', '4.6', '4.8'][$index % 4];
                                    $departure = ['08:30', '10:00', '12:15', '14:45'][$index % 4];
                                    $arrival = ['10:45', '13:05', '16:35', '19:55'][$index % 4];

                                    $payload = [
                                        'route_type' => 'Direct',
                                        'stops' => 0,
                                        'airline_name' => $airlineName,
                                        'airline_code' => $airlineCode,
                                        'from_code' => $route->COL_3,
                                        'from_city' => $sourceCity,
                                        'to_code' => $route->COL_5,
                                        'to_city' => $destinationCity,
                                        'stop_city' => null,
                                        'stop_label' => 'Non stop',
                                        'price' => $price,
                                        'duration' => ['2h 15m', '3h 05m', '4h 20m', '5h 10m'][$index % 4],
                                        'departure' => $departure,
                                        'arrival' => $arrival,
                                    ];

                                    $flightDetailsUrl = route('flight.details', ['flight' => urlencode(json_encode($payload))]);
                                    $bookingUrl = route('flight.booking', ['flight' => urlencode(json_encode($payload))]);
                                @endphp

                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="{{ $flightDetailsUrl }}">
                                                <img src="{{ URL::asset('build/img/flight/' . $flightImages[$index % count($flightImages)]) }}" class="img-fluid" alt="img">
                                            </a>
                                            <div class="fav-item">
                                                <div class="d-flex align-items-center">
                                                    <a href="#" class="fav-icon me-2 {{ $index === 0 ? 'selected' : '' }}">
                                                        <i class="isax isax-heart5"></i>
                                                    </a>
                                                    @if($index === 0)
                                                        <span class="badge bg-indigo">Cheapest</span>
                                                    @endif
                                                </div>
                                                <span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium rounded">{{ $rating }}</span>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <div class="flight-loc d-flex align-items-center justify-content-between mb-2">
                                                <span class="loc-name d-inline-flex align-items-center"><i
                                                        class="isax isax-airplane rotate-45 me-2"></i>{{ $sourceCity }}</span>
                                                <a href="{{ $flightDetailsUrl }}" class="arrow-icon flex-shrink-0"><i
                                                        class="isax isax-arrow-2"></i></a>
                                                <span class="loc-name d-inline-flex align-items-center"><i
                                                        class="isax isax-airplane rotate-135 me-2"></i>{{ $destinationCity }}</span>
                                            </div>
                                            <h5 class="text-truncate mb-1"><a href="{{ $flightDetailsUrl }}">{{ $airlineName }}</a></h5>
                                            <div class="d-flex align-items-center mb-2">
                                                <span class="avatar avatar-sm me-2">
                                                    <img src="{{ URL::asset('build/img/icons/airindia.svg') }}" class="rounded-circle" alt="icon">
                                                </span>
                                                <p class="fs-14 mb-0 me-2">{{ $airlineName }}</p>
                                                <p class="fs-14 mb-0"><i class="ti ti-point-filled text-primary me-2"></i>Direct • {{ $route->COL_3 }} → {{ $route->COL_5 }}</p>
                                            </div>
                                            <div class="date-info p-2 mb-3">
                                                <p class="d-flex align-items-center"><i
                                                        class="isax isax-calendar-2 me-2"></i>{{ now()->addDays($index + 1)->format('M d, Y') }} - {{ now()->addDays($index + 3)->format('M d, Y') }}</p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <h6 class="text-primary"><span class="fs-14 fw-normal text-default">From
                                                    </span>${{ $price }}</h6>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="badge bg-outline-success fs-10 fw-medium">{{ $seatBadge }}</span>
                                                    <a href="{{ $bookingUrl }}" class="btn btn-primary btn-sm">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="col-12">
                                    <div class="alert alert-warning mb-4">
                                        No live flights are available right now. Try searching with another route or check back later.
                                    </div>
                                </div>
                            @endforelse
                        </div>

                        <!-- Pagination -->
                        <nav class="pagination-nav">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true"><i class="fa-solid fa-chevron-left"></i></span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item active"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true"><i class="fa-solid fa-chevron-right"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <!-- /Pagination -->

                    </div>

                </div>
            </div>
        </div>
        <!-- /Page Wrapper -->

        <!-- ========================
            End Page Content
        ========================= -->

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    function loadAirports(target, search = '') {
        fetch(`/api/airports?search=${encodeURIComponent(search)}`)
            .then(response => response.json())
            .then(data => {
                const list = document.querySelector(`.airport-list[data-target="${target}"]`);
                if (!list) return;
                list.innerHTML = '';

                data.forEach(airport => {
                    const li = document.createElement('li');
                    li.className = 'border-bottom';
                    li.innerHTML = `
                        <a class="dropdown-item airport-item" href="#" 
                           data-city="${airport.city}" 
                           data-iata="${airport.iata}" 
                           data-airport="${airport.name}">
                            <span class="fs-16 fw-medium text-dark dropdown-name">${airport.city}</span>
                            <p>${airport.name} (${airport.iata})</p>
                        </a>
                    `;
                    list.appendChild(li);
                });

                attachAirportItemHandlers();
            })
            .catch(error => console.error('Error loading airports:', error));
    }

    function attachAirportItemHandlers() {
        document.querySelectorAll('.airport-item').forEach(function(item) {
            item.removeEventListener('click', handleAirportItemClick);
            item.addEventListener('click', handleAirportItemClick);
        });
    }

    function handleAirportItemClick(e) {
        e.preventDefault();
        const target = this.closest('.airport-list').getAttribute('data-target');
        const city = this.getAttribute('data-city');
        const iata = this.getAttribute('data-iata');
        const airport = this.getAttribute('data-airport');

        if (target === 'from') {
            document.getElementById('from-city-display').value = city;
            document.getElementById('from-airport-display').textContent = airport;
            document.getElementById('from-iata').value = iata;
        } else if (target === 'to') {
            document.getElementById('to-city-display').value = city;
            document.getElementById('to-airport-display').textContent = airport;
            document.getElementById('to-iata').value = iata;
        } else if (target === 'multi-from') {
            document.getElementById('multi-from-city-display').value = city;
            document.getElementById('multi-from-airport-display').textContent = airport;
            document.getElementById('multi-from-iata').value = iata;
        } else if (target === 'multi-to') {
            document.getElementById('multi-to-city-display').value = city;
            document.getElementById('multi-to-airport-display').textContent = airport;
            document.getElementById('multi-to-iata').value = iata;
        }
    }

    let searchTimeout;
    document.querySelectorAll('.airport-search').forEach(function(input) {
        input.addEventListener('input', function() {
            const searchTerm = this.value;
            const target = this.getAttribute('data-target');

            clearTimeout(searchTimeout);
            searchTimeout = setTimeout(() => {
                loadAirports(target, searchTerm);
            }, 300);
        });

        input.closest('.dropdown').addEventListener('shown.bs.dropdown', function() {
            const target = input.getAttribute('data-target');
            loadAirports(target);
        });
    });

    loadAirports('from');
    loadAirports('to');
    loadAirports('multi-from');
    loadAirports('multi-to');
});
</script>
@endpush

