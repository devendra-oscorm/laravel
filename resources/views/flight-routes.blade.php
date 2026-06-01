<?php $page = "flight-routes"; ?>
@extends('layout.mainlayout')

@section('content')

    {{-- Breadcrumb --}}
    <div class="breadcrumb-bar breadcrumb-bg-05 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title mb-2">Flight Route Finder</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/') }}"><i class="isax isax-home5"></i></a>
                            </li>
                            <li class="breadcrumb-item">Flight</li>
                            <li class="breadcrumb-item active" aria-current="page">Route Finder</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container">

            {{-- Search Card — flight-grid style --}}
            <div class="card mb-4">
                <div class="card-body">
                    <div class="banner-form">
                        <form id="routeSearchForm">
                            <div class="d-flex align-items-center justify-content-between flex-wrap mb-2">
                                <div class="d-flex align-items-center">
                                    <div class="form-check d-flex align-items-center me-3 mb-2">
                                        <input class="form-check-input mt-0" type="radio" name="trip_type" id="fr-oneway" value="oneway" checked>
                                        <label class="form-check-label fs-14 ms-2" for="fr-oneway">Oneway</label>
                                    </div>
                                    <div class="form-check d-flex align-items-center me-3 mb-2">
                                        <input class="form-check-input mt-0" type="radio" name="trip_type" id="fr-roundtrip" value="roundtrip">
                                        <label class="form-check-label fs-14 ms-2" for="fr-roundtrip">Round Trip</label>
                                    </div>
                                    <div class="form-check d-flex align-items-center me-3 mb-2">
                                        <input class="form-check-input mt-0" type="radio" name="trip_type" id="fr-multiway" value="multiway">
                                        <label class="form-check-label fs-14 ms-2" for="fr-multiway">Multi Trip</label>
                                    </div>
                                </div>
                                <h6 class="fw-medium fs-16 mb-2">Millions of cheap flights. One simple search</h6>
                            </div>

                            <div class="d-lg-flex">
                                <div class="d-flex form-info">

                                    {{-- From --}}
                                    <div class="form-item">
                                        <div>
                                            <label class="form-label fs-14 text-default mb-1">From</label>
                                            <input type="text" id="from_city" name="from_city"
                                                class="form-control home-eight-title text-dark"
                                                placeholder="Select departure city"
                                                value="{{ htmlspecialchars($fromCity) }}"
                                                autocomplete="off">
                                            <p class="fs-12 mb-0" id="from_city_sub">
                                                {{ $fromCity ? $fromCity : 'Enter city name' }}
                                            </p>
                                        </div>
                                        <div id="from_city_list" class="autocomplete-dropdown d-none"></div>
                                    </div>

                                    {{-- To --}}
                                    <div class="form-item ps-2 ps-sm-3" style="position:relative;">
                                        <div>
                                            <label class="form-label fs-14 text-default mb-1">To</label>
                                            <input type="text" id="to_city" name="to_city"
                                                class="form-control home-eight-title text-dark"
                                                placeholder="Select destination city"
                                                value="{{ htmlspecialchars($toCity) }}"
                                                autocomplete="off">
                                            <p class="fs-12 mb-0" id="to_city_sub">
                                                {{ $toCity ? $toCity : 'Enter city name' }}
                                            </p>
                                        </div>
                                        <div id="to_city_list" class="autocomplete-dropdown d-none"></div>
                                        <span class="way-icon badge badge-primary rounded-pill translate-middle" id="fr-swap-btn" style="cursor:pointer;">
                                            <i class="fa-solid fa-arrow-right-arrow-left"></i>
                                        </span>
                                    </div>

                                    {{-- Departure --}}
                                    <div class="form-item">
                                        <label class="form-label fs-14 text-default mb-1">Departure</label>
                                        <input type="text" class="form-control datetimepicker" name="departure_date" value="{{ date('d-m-Y') }}">
                                        <p class="fs-12 mb-0">{{ date('l') }}</p>
                                    </div>

                                    {{-- Return (round trip) --}}
                                    <div class="form-item round-drip" style="display:none;">
                                        <label class="form-label fs-14 text-default mb-1">Return</label>
                                        <input type="text" class="form-control datetimepicker" name="return_date" value="{{ date('d-m-Y', strtotime('+7 days')) }}">
                                        <p class="fs-12 mb-0">{{ date('l', strtotime('+7 days')) }}</p>
                                    </div>

                                    {{-- Travellers --}}
                                    <div class="form-item dropdown">
                                        <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                            <label class="form-label fs-14 text-default mb-1">Travellers and cabin class</label>
                                            <h5 class="member-count">1 <span class="fw-normal fs-14">Person</span></h5>
                                            <p class="fs-12 mb-0"><span class="adult-count">1</span> Adult, <span class="cabin-class">Economy</span></p>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-end dropdown-xl">
                                            <h5 class="mb-3">Select Travelers & Class</h5>
                                            <div class="mb-3 border br-10 info-item pb-1">
                                                <h6 class="fs-16 fw-medium mb-2">Travellers</h6>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label class="form-label text-gray-9 mb-2">Adults <span class="text-default fw-normal">(12+ Yrs)</span></label>
                                                            <div class="custom-increment">
                                                                <div class="input-group">
                                                                    <span class="input-group-btn float-start">
                                                                        <button type="button" class="quantity-left-minus btn btn-light btn-number" data-type="minus" data-field=""><span><i class="isax isax-minus"></i></span></button>
                                                                    </span>
                                                                    <input type="text" name="adults" class="input-number" value="1" data-type="adult">
                                                                    <span class="input-group-btn float-end">
                                                                        <button type="button" class="quantity-right-plus btn btn-light btn-number" data-type="plus" data-field=""><span><i class="isax isax-add"></i></span></button>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label class="form-label text-gray-9 mb-2">Children <span class="text-default fw-normal">(2-12 Yrs)</span></label>
                                                            <div class="custom-increment">
                                                                <div class="input-group">
                                                                    <span class="input-group-btn float-start">
                                                                        <button type="button" class="quantity-left-minus btn btn-light btn-number" data-type="minus" data-field=""><span><i class="isax isax-minus"></i></span></button>
                                                                    </span>
                                                                    <input type="text" name="children" class="input-number" value="0" data-type="children">
                                                                    <span class="input-group-btn float-end">
                                                                        <button type="button" class="quantity-right-plus btn btn-light btn-number" data-type="plus" data-field=""><span><i class="isax isax-add"></i></span></button>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label class="form-label text-gray-9 mb-2">Infants <span class="text-default fw-normal">(0-2 Yrs)</span></label>
                                                            <div class="custom-increment">
                                                                <div class="input-group">
                                                                    <span class="input-group-btn float-start">
                                                                        <button type="button" class="quantity-left-minus btn btn-light btn-number" data-type="minus" data-field=""><span><i class="isax isax-minus"></i></span></button>
                                                                    </span>
                                                                    <input type="text" name="infants" class="input-number" value="0" data-type="infant">
                                                                    <span class="input-group-btn float-end">
                                                                        <button type="button" class="quantity-right-plus btn btn-light btn-number" data-type="plus" data-field=""><span><i class="isax isax-add"></i></span></button>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 border br-10 info-item pb-1">
                                                <span class="fs-16 fw-medium mb-2 text-dark d-block">Cabin Class</span>
                                                <div class="d-flex align-items-center flex-wrap mt-2">
                                                    <div class="form-check me-3 mb-3">
                                                        <input class="form-check-input cabin-radio" type="radio" value="Economy" name="cabin_class" id="fr-economy" checked>
                                                        <label class="form-check-label" for="fr-economy">Economy</label>
                                                    </div>
                                                    <div class="form-check me-3 mb-3">
                                                        <input class="form-check-input cabin-radio" type="radio" value="Premium Economy" name="cabin_class" id="fr-premium">
                                                        <label class="form-check-label" for="fr-premium">Premium Economy</label>
                                                    </div>
                                                    <div class="form-check me-3 mb-3">
                                                        <input class="form-check-input cabin-radio" type="radio" value="Business" name="cabin_class" id="fr-business">
                                                        <label class="form-check-label" for="fr-business">Business</label>
                                                    </div>
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input cabin-radio" type="radio" value="First Class" name="cabin_class" id="fr-first">
                                                        <label class="form-check-label" for="fr-first">First Class</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <a href="#" class="btn btn-light btn-sm me-2 cancel-btn">Cancel</a>
                                                <button type="button" class="btn btn-primary btn-sm apply-btn">Apply</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-primary search-btn rounded">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            {{-- Results container --}}
            <div id="resultsArea">

                {{-- Welcome state (shown when no search yet) --}}
                @if(!$fromCity || !$toCity)
                <div id="welcomeBox" class="card border-start border-info border-3">
                    <div class="card-body">
                        <h6 class="fw-semibold text-info mb-2">
                            <i class="isax isax-info-circle me-1"></i>Welcome to Flight Route Finder
                        </h6>
                        <p class="mb-2">Enter your departure city and destination city above to find available flight routes.</p>
                        <ul class="mb-0 ps-3 text-muted fs-14">
                            <li>Shows direct flights (0 stops)</li>
                            <li>Shows connecting flights with 1 stop</li>
                            <li>Shows connecting flights with 2 stops</li>
                        </ul>
                    </div>
                </div>
                @endif

                {{-- Results heading (hidden until search) --}}
                <div id="resultsHeading" class="d-none mb-3">
                    <h5 class="fw-semibold">
                        Routes from <span id="headFrom" class="text-primary"></span>
                        to <span id="headTo" class="text-primary"></span>
                    </h5>
                </div>

                {{-- Direct flights section --}}
                <div id="directSection" class="d-none mb-4">
                    <div class="mmt-section-head">
                        <span class="mmt-section-title">✈ Direct Flights</span>
                        <span id="directCount" class="mmt-badge-direct"></span>
                        <span id="directSpinner" class="spinner-border spinner-border-sm text-success ms-1" role="status"></span>
                    </div>
                    <div id="directCards"></div>
                </div>

                {{-- 1-stop section --}}
                <div id="oneStopSection" class="d-none mb-4">
                    <div class="mmt-section-head">
                        <span class="mmt-section-title">✈ 1-Stop Connections</span>
                        <span id="oneStopCount" class="mmt-badge-one"></span>
                        <span id="oneStopSpinner" class="spinner-border spinner-border-sm text-warning ms-1" role="status"></span>
                    </div>
                    <div id="oneStopCards"></div>
                </div>

                {{-- 2-stop section --}}
                <div id="twoStopSection" class="d-none mb-4">
                    <div class="mmt-section-head">
                        <span class="mmt-section-title">✈ 2-Stop Connections</span>
                        <span id="twoStopCount" class="mmt-badge-two"></span>
                        <span id="twoStopSpinner" class="spinner-border spinner-border-sm text-danger ms-1" role="status"></span>
                    </div>
                    <div id="twoStopCards"></div>
                </div>

                {{-- No results box --}}
                <div id="noResultsBox" class="d-none alert alert-warning d-flex align-items-start gap-2">
                    <i class="isax isax-warning-2 fs-20 mt-1"></i>
                    <div>
                        <strong>No Routes Found</strong>
                        <p class="mb-1 mt-1">We couldn't find any flights for this route.</p>
                        <ul class="mb-0 ps-3">
                            <li>Check if the city names are spelled correctly</li>
                            <li>Try using nearby major cities</li>
                        </ul>
                    </div>
                </div>

                {{-- Timing --}}
                <p id="queryTime" class="text-muted fs-12 text-end mt-2 d-none"></p>

            </div>
        </div>
    </div>

@endsection

@push('scripts')
<script>
// ── City autocomplete ────────────────────────────────────────────────────────
const cityList = @json($cities);

function initAutocomplete(inputId, listId) {
    const input = document.getElementById(inputId);
    const list  = document.getElementById(listId);
    if (!input || !list) return;

    input.addEventListener('input', function () {
        const val = this.value.trim().toLowerCase();
        list.innerHTML = '';
        if (!val) { list.classList.add('d-none'); return; }

        const matches = cityList
            .filter(c => c && c.toLowerCase().startsWith(val))
            .slice(0, 10);

        if (!matches.length) { list.classList.add('d-none'); return; }

        matches.forEach(city => {
            const item = document.createElement('div');
            item.className = 'autocomplete-item';
            item.innerHTML = '<strong>' + city.substring(0, val.length) + '</strong>' + city.substring(val.length);
            item.addEventListener('mousedown', (e) => {
                e.preventDefault();
                input.value = city;
                list.classList.add('d-none');
            });
            list.appendChild(item);
        });
        list.classList.remove('d-none');
    });

    input.addEventListener('blur', () => setTimeout(() => list.classList.add('d-none'), 150));

    input.addEventListener('keydown', function (e) {
        const items  = list.querySelectorAll('.autocomplete-item');
        let   active = list.querySelector('.autocomplete-item.active');
        let   idx    = Array.from(items).indexOf(active);

        if (e.key === 'ArrowDown')       { e.preventDefault(); idx = (idx + 1) % items.length; }
        else if (e.key === 'ArrowUp')    { e.preventDefault(); idx = (idx - 1 + items.length) % items.length; }
        else if (e.key === 'Enter' && active) { e.preventDefault(); input.value = active.textContent; list.classList.add('d-none'); return; }
        else if (e.key === 'Escape')     { list.classList.add('d-none'); return; }
        else return;

        items.forEach(i => i.classList.remove('active'));
        if (items[idx]) items[idx].classList.add('active');
    });
}

initAutocomplete('from_city', 'from_city_list');
initAutocomplete('to_city',   'to_city_list');

// ── Swap cities ───────────────────────────────────────────────────────────────
document.getElementById('fr-swap-btn')?.addEventListener('click', function () {
    const f = document.getElementById('from_city');
    const t = document.getElementById('to_city');
    const tmp = f.value; f.value = t.value; t.value = tmp;
});

// ── Round trip toggle ─────────────────────────────────────────────────────────
document.querySelectorAll('input[name="trip_type"]').forEach(r => {
    r.addEventListener('change', function () {
        document.querySelectorAll('.round-drip').forEach(el => {
            el.style.display = this.value === 'roundtrip' ? '' : 'none';
        });
    });
});

// ── AJAX search ──────────────────────────────────────────────────────────────
const ROUTES = {
    direct:  '{{ route("flight.ajax.direct") }}',
    oneStop: '{{ route("flight.ajax.onestop") }}',
    twoStop: '{{ route("flight.ajax.twostop") }}'
};
const FLIGHT_BOOKING_ROUTE = '{{ route("flight.booking") }}';

function show(id)   { document.getElementById(id).classList.remove('d-none'); }
function hide(id)   { document.getElementById(id).classList.add('d-none'); }
function text(id,t) { document.getElementById(id).textContent = t; }
function html(id,h) { document.getElementById(id).innerHTML  = h; }

function buildPrice(stops) {
    if (stops === 0) return 500;
    if (stops === 1) return 650;
    return 780;
}

function buildDuration(stops) {
    if (stops === 0) return '3h 45m';
    if (stops === 1) return '7h 10m';
    return '11h 25m';
}

function buildDeparture(stops) {
    if (stops === 0) return '08:30';
    if (stops === 1) return '09:50';
    return '11:15';
}

function buildArrival(stops) {
    if (stops === 0) return '12:15';
    if (stops === 1) return '17:00';
    return '22:40';
}

function createFlightPayload(opts) {
    return {
        route_type: opts.route_type,
        stops: opts.stops,
        airline_name: opts.airlineName,
        airline_code: opts.airlineCode,
        from_code: opts.fromCode,
        from_city: opts.fromCity,
        to_code: opts.toCode,
        to_city: opts.toCity,
        stop_city: opts.stopCity,
        stop_label: opts.stopLabel,
        price: opts.price ?? buildPrice(opts.stops),
        duration: opts.duration ?? buildDuration(opts.stops),
        departure: opts.departure ?? buildDeparture(opts.stops),
        arrival: opts.arrival ?? buildArrival(opts.stops)
    };
}

function redirectToFlightBooking(payload) {
    const url = `${FLIGHT_BOOKING_ROUTE}?flight=${encodeURIComponent(JSON.stringify(payload))}`;
    window.location.href = url;
}

function attachSelectionHandlers() {
    document.addEventListener('click', function (event) {
        const button = event.target.closest('.mmt-btn');
        if (!button) {
            return;
        }

        event.preventDefault();
        const payload = JSON.parse(decodeURIComponent(button.dataset.flight));
        redirectToFlightBooking(payload);
    });
}

// ── MakeMyTrip style card builders ───────────────────────────────────────────
function airlineLogo(code) {
    // Colored circle with airline code as fallback logo
    const colors = ['#e63946','#2196f3','#ff9800','#4caf50','#9c27b0','#00bcd4','#f44336','#3f51b5'];
    const color  = colors[(code?.charCodeAt(0) ?? 65) % colors.length];
    return `<div style="width:42px;height:42px;border-radius:8px;background:${color};display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700;font-size:13px;flex-shrink:0;">${code ?? '?'}</div>`;
}

function stopBadge(stops) {
    if (stops === 0) return `<span style="color:#27ae60;font-size:12px;font-weight:600;">Non stop</span>`;
    if (stops === 1) return `<span style="color:#e67e22;font-size:12px;font-weight:600;">1 Stop</span>`;
    return `<span style="color:#e74c3c;font-size:12px;font-weight:600;">2 Stops</span>`;
}

function flightCard(opts) {
    const { airlineCode, airlineName, fromCode, fromCity, toCode, toCity, stops, viaHtml } = opts;
    const payload = createFlightPayload(opts);
    const encodedPayload = encodeURIComponent(JSON.stringify(payload));

    return `
    <div class="mmt-card">
        <div class="mmt-card-inner">
            <div class="mmt-airline">
                ${airlineLogo(airlineCode)}
                <div class="mmt-airline-info">
                    <div class="mmt-airline-name">${airlineName ?? 'Unknown Airline'}</div>
                    <div class="mmt-airline-code">${airlineCode ?? ''}</div>
                </div>
            </div>
            <div class="mmt-route">
                <div class="mmt-city">
                    <div class="mmt-iata">${fromCode}</div>
                    <div class="mmt-cityname">${fromCity}</div>
                </div>
                <div class="mmt-line">
                    <div class="mmt-stop-label">${stopBadge(stops)}</div>
                    <div class="mmt-line-bar">
                        <span class="mmt-dot"></span>
                        <span class="mmt-dash"></span>
                        ${stops > 0 ? '<span class="mmt-stop-dot"></span><span class="mmt-dash"></span>' : ''}
                        ${stops > 1 ? '<span class="mmt-stop-dot"></span><span class="mmt-dash"></span>' : ''}
                        <span class="mmt-plane">✈</span>
                        <span class="mmt-dot"></span>
                    </div>
                    ${viaHtml ? `<div class="mmt-via">${viaHtml}</div>` : ''}
                </div>
                <div class="mmt-city mmt-city-right">
                    <div class="mmt-iata">${toCode}</div>
                    <div class="mmt-cityname">${toCity}</div>
                </div>
            </div>
            <div class="mmt-action">
                <div class="mmt-price">View Prices</div>
                <button class="mmt-btn" data-flight="${encodedPayload}">Book Now</button>
            </div>
        </div>
    </div>`;
}

function directCard(r, i) {
    return flightCard({
        route_type: 'Direct',
        airlineCode:  r.airline_code,
        airlineName:  r.airline_name,
        fromCode:     r.source_airport,
        fromCity:     r.source_city,
        toCode:       r.destination_airport,
        toCity:       r.dest_city,
        stopCity:     null,
        stopLabel:    'Non stop',
        stops:        0,
        viaHtml:      null
    });
}

function oneStopCard(r, i) {
    return flightCard({
        route_type: '1 Stop',
        airlineCode:  r.airline_code1,
        airlineName:  r.airline_name1,
        fromCode:     r.source_airport,
        fromCity:     r.source_city,
        toCode:       r.destination_airport,
        toCity:       r.dest_city,
        stopCity:     r.mid_city,
        stopLabel:    `1 stop via ${r.mid} (${r.mid_city})`,
        stops:        1,
        viaHtml:      `via ${r.mid} (${r.mid_city})`
    });
}

function twoStopCard(r, i) {
    return flightCard({
        route_type: '2 Stops',
        airlineCode:  r.airline_code1,
        airlineName:  r.airline_name1,
        fromCode:     r.source_airport,
        fromCity:     r.source_city,
        toCode:       r.destination_airport,
        toCity:       r.dest_city,
        stopCity:     `${r.mid1} / ${r.mid2}`,
        stopLabel:    `2 stops via ${r.mid1} (${r.mid1_city}) · ${r.mid2} (${r.mid2_city})`,
        stops:        2,
        viaHtml:      `via ${r.mid1} (${r.mid1_city}) · ${r.mid2} (${r.mid2_city})`
    });
}

async function fetchSection(url, params, sectionId, cardsId, countId, spinnerId, cardFn) {
    show(sectionId);
    show(spinnerId);
    html(cardsId, '');
    text(countId, '');

    try {
        const qs  = new URLSearchParams(params).toString();
        const res = await fetch(`${url}?${qs}`, { headers: { 'X-Requested-With': 'XMLHttpRequest' } });
        const data = await res.json();

        hide(spinnerId);
        text(countId, data.length);

        if (data.length === 0) {
            html(cardsId, '<p class="text-muted fs-14 ms-1">No routes found for this stop type.</p>');
        } else {
            html(cardsId, data.map(cardFn).join(''));
        }
        return data.length;
    } catch (err) {
        hide(spinnerId);
        html(cardsId, '<p class="text-danger fs-14 ms-1">Error loading results.</p>');
        return 0;
    }
}

document.getElementById('routeSearchForm').addEventListener('submit', async function (e) {
    e.preventDefault();

    const fromCity = document.getElementById('from_city').value.trim();
    const toCity   = document.getElementById('to_city').value.trim();
    if (!fromCity || !toCity) return;

    // Reset UI
    const welcomeBox = document.getElementById('welcomeBox');
    if (welcomeBox) welcomeBox.classList.add('d-none');
    hide('noResultsBox');
    hide('queryTime');
    show('resultsHeading');
    text('headFrom', fromCity);
    text('headTo', toCity);

    const params  = { from_city: fromCity, to_city: toCity };
    const t0      = performance.now();

    // Fire all 3 requests in parallel — page stays responsive
    const [d, o, t] = await Promise.all([
        fetchSection(ROUTES.direct,  params, 'directSection',  'directCards',  'directCount',  'directSpinner',  (r,i) => directCard(r,i)),
        fetchSection(ROUTES.oneStop, params, 'oneStopSection', 'oneStopCards', 'oneStopCount', 'oneStopSpinner', (r,i) => oneStopCard(r,i)),
        fetchSection(ROUTES.twoStop, params, 'twoStopSection', 'twoStopCards', 'twoStopCount', 'twoStopSpinner', (r,i) => twoStopCard(r,i)),
    ]);

    const elapsed = Math.round(performance.now() - t0);

    if (d + o + t === 0) {
        show('noResultsBox');
    }

    const timeEl = document.getElementById('queryTime');
    timeEl.textContent = `⏱ All results loaded in ${elapsed} ms`;
    show('queryTime');

    // Update URL without reload so user can share/bookmark
    const url = new URL(window.location);
    url.searchParams.set('from_city', fromCity);
    url.searchParams.set('to_city', toCity);
    window.history.pushState({}, '', url);
});

attachSelectionHandlers();

// Auto-trigger search if URL has params (e.g. shared link or back button)
// Use setTimeout to ensure all JS is ready after layout scripts load
setTimeout(function() {
    const from = document.getElementById('from_city').value.trim();
    const to   = document.getElementById('to_city').value.trim();
    if (from && to) {
        document.getElementById('routeSearchForm').dispatchEvent(new Event('submit'));
    }
}, 100);
</script>

<style>
.autocomplete-dropdown {
    position: absolute;
    top: 100%;
    left: 0;
    right: 0;
    z-index: 1050;
    background: #fff;
    border: 1px solid #dee2e6;
    border-top: none;
    border-radius: 0 0 6px 6px;
    max-height: 220px;
    overflow-y: auto;
    box-shadow: 0 4px 12px rgba(0,0,0,.1);
}
.autocomplete-item {
    padding: 9px 14px;
    cursor: pointer;
    font-size: 14px;
    border-bottom: 1px solid #f1f1f1;
}
.autocomplete-item:hover,
.autocomplete-item.active { background-color: #f0f4ff; }
.border-3 { border-width: 3px !important; }
.bg-success-light { background-color: rgba(25,135,84,.12); }
.bg-primary-light  { background-color: rgba(13,110,253,.12); }
.bg-warning-light  { background-color: rgba(255,193,7,.15); }
/* form-item needs relative for dropdown */
.form-item { position: relative; }
/* ── Autocomplete ── */
.autocomplete-dropdown {
    position: absolute; top: 100%; left: 0; right: 0; z-index: 1050;
    background: #fff; border: 1px solid #dee2e6; border-top: none;
    border-radius: 0 0 6px 6px; max-height: 220px; overflow-y: auto;
    box-shadow: 0 4px 12px rgba(0,0,0,.1);
}
.autocomplete-item { padding: 9px 14px; cursor: pointer; font-size: 14px; border-bottom: 1px solid #f1f1f1; }
.autocomplete-item:hover, .autocomplete-item.active { background-color: #f0f4ff; }
.form-item { position: relative; }

/* ── MakeMyTrip style flight card ── */
.mmt-card {
    background: #fff;
    border: 1px solid #e2e2e2;
    border-radius: 10px;
    margin-bottom: 12px;
    box-shadow: 0 1px 6px rgba(0,0,0,.07);
    overflow: hidden;
    transition: box-shadow .2s;
}
.mmt-card:hover { box-shadow: 0 4px 18px rgba(0,0,0,.13); }
.mmt-card-inner {
    display: flex;
    align-items: center;
    padding: 18px 20px;
    gap: 20px;
    flex-wrap: wrap;
}
.mmt-airline {
    display: flex;
    align-items: center;
    gap: 10px;
    min-width: 140px;
}
.mmt-airline-name { font-size: 14px; font-weight: 600; color: #1a1a1a; }
.mmt-airline-code { font-size: 12px; color: #888; margin-top: 2px; }
.mmt-route {
    flex: 1;
    display: flex;
    align-items: center;
    gap: 12px;
    min-width: 260px;
}
.mmt-city { text-align: center; min-width: 60px; }
.mmt-city-right { text-align: center; }
.mmt-iata { font-size: 22px; font-weight: 700; color: #1a1a1a; line-height: 1; }
.mmt-cityname { font-size: 12px; color: #666; margin-top: 3px; }
.mmt-line {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 4px;
}
.mmt-stop-label { font-size: 12px; font-weight: 600; }
.mmt-line-bar {
    display: flex;
    align-items: center;
    width: 100%;
    gap: 0;
}
.mmt-dot {
    width: 8px; height: 8px;
    border-radius: 50%;
    background: #ccc;
    flex-shrink: 0;
}
.mmt-dash {
    flex: 1;
    height: 2px;
    background: linear-gradient(90deg, #ccc 60%, transparent 60%);
    background-size: 6px 2px;
}
.mmt-stop-dot {
    width: 10px; height: 10px;
    border-radius: 50%;
    background: #fff;
    border: 2px solid #e67e22;
    flex-shrink: 0;
}
.mmt-plane { font-size: 16px; color: #e63946; flex-shrink: 0; }
.mmt-via { font-size: 11px; color: #e67e22; text-align: center; }
.mmt-action {
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    gap: 8px;
    min-width: 110px;
}
.mmt-price { font-size: 12px; color: #888; }
.mmt-btn {
    background: #e63946;
    color: #fff;
    border: none;
    border-radius: 6px;
    padding: 8px 20px;
    font-size: 13px;
    font-weight: 700;
    cursor: pointer;
    letter-spacing: .5px;
    transition: background .2s;
}
.mmt-btn:hover { background: #c0392b; }

/* Section headers */
.mmt-section-head {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 10px 0 8px;
    border-bottom: 2px solid #f0f0f0;
    margin-bottom: 14px;
}
.mmt-section-title { font-size: 15px; font-weight: 700; color: #1a1a1a; }
.mmt-badge-direct  { background: #e8f8f0; color: #27ae60; border-radius: 20px; padding: 3px 12px; font-size: 12px; font-weight: 600; }
.mmt-badge-one     { background: #fff3e0; color: #e67e22; border-radius: 20px; padding: 3px 12px; font-size: 12px; font-weight: 600; }
.mmt-badge-two     { background: #fdecea; color: #e74c3c; border-radius: 20px; padding: 3px 12px; font-size: 12px; font-weight: 600; }
</style>
@endpush
