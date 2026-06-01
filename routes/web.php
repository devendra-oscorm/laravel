<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
Route::get('/', function () { return view('index-2'); })->name('index-2');
Route::get('/index-2', function () {
    return view('index-2');
});
Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/add-bus', function () {
    return view('add-bus');
})->name('add-bus');

Route::get('/add-car', function () {
    return view('add-car');
})->name('add-car');

Route::get('/add-cruise', function () {
    return view('add-cruise');
})->name('add-cruise');

Route::get('/add-flight', function () {
    return view('add-flight');
})->name('add-flight');

Route::get('/add-hotel', function () {
    return view('add-hotel');
})->name('add-hotel');

Route::get('/add-tour', function () {
    return view('add-tour');
})->name('add-tour');

Route::get('/agent-account-settings', function () {
    return view('agent-account-settings');
})->name('agent-account-settings');

Route::get('/agent-bus-booking', function () {
    return view('agent-bus-booking');
})->name('agent-bus-booking');

Route::get('/agent-car-booking', function () {
    return view('agent-car-booking');
})->name('agent-car-booking');

Route::get('/agent-chat', function () {
    return view('agent-chat');
})->name('agent-chat');

Route::get('/agent-cruise-booking', function () {
    return view('agent-cruise-booking');
})->name('agent-cruise-booking');

Route::get('/agent-dashboard', function () {
    return view('agent-dashboard');
})->name('agent-dashboard');

Route::get('/agent-earnings', function () {
    return view('agent-earnings');
})->name('agent-earnings');

Route::get('/agent-enquiry-details', function () {
    return view('agent-enquiry-details');
})->name('agent-enquiry-details');

Route::get('/agent-enquirers', function () {
    return view('agent-enquirers');
})->name('agent-enquirers');

Route::get('/agent-flight-booking', function () {
    return view('agent-flight-booking');
})->name('agent-flight-booking');

Route::get('/agent-hotel-booking', function () {
    return view('agent-hotel-booking');
})->name('agent-hotel-booking');

Route::get('/agent-listings', function () {
    return view('agent-listings');
})->name('agent-listings');

Route::get('/agent-notifications', function () {
    return view('agent-notifications');
})->name('agent-notifications');

Route::get('/agent-plans', function () {
    return view('agent-plans');
})->name('agent-plans');

Route::get('/agent-plans-settings', function () {
    return view('agent-plans-settings');
})->name('agent-plans-settings');

Route::get('/agent-review', function () {
    return view('agent-review');
})->name('agent-review');

Route::get('/agent-security-settings', function () {
    return view('agent-security-settings');
})->name('agent-security-settings');

Route::get('/agent-settings', function () {
    return view('agent-settings');
})->name('agent-settings');

Route::get('/agent-tour-booking', function () {
    return view('agent-tour-booking');
})->name('agent-tour-booking');

Route::get('/become-an-expert', function () {
    return view('become-an-expert');
})->name('become-an-expert');

Route::get('/blog-details', function () {
    return redirect()->route('blog');
})->name('blog-details');

Route::get('/blog', [BlogController::class, 'publicIndex'])->name('blog');
Route::get('/blog/{id}', [BlogController::class, 'publicShow'])->name('blog.details');
Route::post('/blog/{blogId}/comment', [CommentController::class, 'store'])->name('comment.store');

Route::get('/blog-list', function () {
    return view('blog-list');
})->name('blog-list');

Route::get('/booking-confirmation', function () {
    return view('booking-confirmation');
})->name('booking-confirmation');

Route::get('/bus-booking', function () {
    return view('bus-booking');
})->name('bus-booking');

Route::get('/bus-booking-confirmation', function () {
    return view('bus-booking-confirmation');
})->name('bus-booking-confirmation');

Route::get('/bus-details', function () {
    return view('bus-details');
})->name('bus-details');

Route::get('/bus-left-sidebar', function () {
    return view('bus-left-sidebar');
})->name('bus-left-sidebar');

Route::get('/bus-list', function () {
    return view('bus-list');
})->name('bus-list');

Route::get('/bus-right-sidebar', function () {
    return view('bus-right-sidebar');
})->name('bus-right-sidebar');

Route::get('/car-booking', function () {
    return view('car-booking');
})->name('car-booking');

Route::get('/car-booking-confirmation', function () {
    return view('car-booking-confirmation');
})->name('car-booking-confirmation');

Route::get('/car-details', function () {
    return view('car-details');
})->name('car-details');

Route::get('/car-grid', function () {
    return view('car-grid');
})->name('car-grid');

Route::get('/car-list', function () {
    return view('car-list');
})->name('car-list');

Route::get('/car-map', function () {
    return view('car-map');
})->name('car-map');

Route::get('/change-password', function () {
    return view('change-password');
})->name('change-password');

Route::get('/chat', function () {
    return view('chat');
})->name('chat');

Route::get('/coming-soon', function () {
    return view('coming-soon');
})->name('coming-soon');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');

Route::get('/cruise-booking', function () {
    return view('cruise-booking');
})->name('cruise-booking');

Route::get('/cruise-booking-confirmation', function () {
    return view('cruise-booking-confirmation');
})->name('cruise-booking-confirmation');

Route::get('/cruise-details', function () {
    return view('cruise-details');
})->name('cruise-details');

Route::get('/cruise-grid', function () {
    return view('cruise-grid');
})->name('cruise-grid');

Route::get('/cruise-list', function () {
    return view('cruise-list');
})->name('cruise-list');

Route::get('/cruise-map', function () {
    return view('cruise-map');
})->name('cruise-map');

Route::get('/customer-bus-booking', function () {
    return view('customer-bus-booking');
})->name('customer-bus-booking');

Route::get('/customer-car-booking', function () {
    return view('customer-car-booking');
})->name('customer-car-booking');

Route::get('/customer-cruise-booking', function () {
    return view('customer-cruise-booking');
})->name('customer-cruise-booking');

Route::get('/customer-flight-booking', function () {
    return view('customer-flight-booking');
})->name('customer-flight-booking');

Route::get('/customer-hotel-booking', function () {
    return view('customer-hotel-booking');
})->name('customer-hotel-booking');

Route::get('/customer-tour-booking', function () {
    return view('customer-tour-booking');
})->name('customer-tour-booking');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/destination', function () {
    return view('destination');
})->name('destination');

Route::get('/edit-bus', function () {
    return view('edit-bus');
})->name('edit-bus');

Route::get('/edit-car', function () {
    return view('edit-car');
})->name('edit-car');

Route::get('/edit-cruise', function () {
    return view('edit-cruise');
})->name('edit-cruise');

Route::get('/edit-flight', function () {
    return view('edit-flight');
})->name('edit-flight');

Route::get('/edit-hotel', function () {
    return view('edit-hotel');
})->name('edit-hotel');

Route::get('/edit-tour', function () {
    return view('edit-tour');
})->name('edit-tour');

Route::get('/error-404', function () {
    return view('error-404');
})->name('error-404');

Route::get('/error-500', function () {
    return view('error-500');
})->name('error-500');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/flight-routes', [FlightController::class, 'findRoutes'])->name('flight-routes');

Route::get('/flight-booking', [FlightController::class, 'showBooking'])->name('flight.booking');

Route::get('/flight-booking-confirmation', function () {
    return view('flight-booking-confirmation');
})->name('flight-booking-confirmation');

Route::get('/flight-details', [FlightController::class, 'showDetails'])->name('flight.details');

Route::get('/flight/ajax/direct', [FlightController::class, 'ajaxDirect'])->name('flight.ajax.direct');
Route::get('/flight/ajax/onestop', [FlightController::class, 'ajaxOneStop'])->name('flight.ajax.onestop');
Route::get('/flight/ajax/twostop', [FlightController::class, 'ajaxTwoStop'])->name('flight.ajax.twostop');

Route::get('/flight-grid', [FlightController::class, 'grid'])->name('flight-grid');

Route::get('/flight-list', function () {
    return view('flight-list');
})->name('flight-list');

Route::get('/forgot-password', function () {
    return view('forgot-password');
})->name('forgot-password');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/hotel-booking', function () {
    return view('hotel-booking');
})->name('hotel-booking');

Route::get('/hotel-details', function () {
    return view('hotel-details');
})->name('hotel-details');

Route::get('/hotel-grid', function () {
    return view('hotel-grid');
})->name('hotel-grid');

Route::get('/hotel-list', function () {
    return view('hotel-list');
})->name('hotel-list');

Route::get('/hotel-map', function () {
    return view('hotel-map');
})->name('hotel-map');

Route::get('/index-2', function () {
    return view('index-2');
})->name('index-2');



Route::get('/index-rtl', function () {
    return view('index-rtl');
})->name('index-rtl');

Route::get('/integration-settings', function () {
    return view('integration-settings');
})->name('integration-settings');

Route::get('/invoices', function () {
    return view('invoices');
})->name('invoices');

// ── Front-end login (shows the travel-site login.blade.php) ──────────────────
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

// ── Admin login (shows auth/login.blade.php — glassmorphism design) ───────────
Route::get('/admin-login', [AuthController::class, 'showAdminLogin'])->name('admin.login');
Route::post('/admin-login', [AuthController::class, 'login'])->name('admin.login.submit');

// ── Register ──────────────────────────────────────────────────────────────────
Route::get('/admin-register', [AuthController::class, 'showRegister'])->name('admin.register');
Route::post('/admin-register', [AuthController::class, 'register'])->name('admin.register.store');

// ── Logout ────────────────────────────────────────────────────────────────────
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

// ── Admin panel (protected by auth middleware) ────────────────────────────────
Route::middleware(['auth'])->prefix('admin')->group(function () {

    // Blog CRUD
    Route::get('/blogs',              [BlogController::class, 'index'])  ->name('blogs.index');
    Route::get('/blogs/create',       [BlogController::class, 'create']) ->name('blogs.create');
    Route::post('/blogs',             [BlogController::class, 'store'])  ->name('blogs.store');
    Route::get('/blogs/{blog}/edit',  [BlogController::class, 'edit'])   ->name('blogs.edit');
    Route::put('/blogs/{blog}',       [BlogController::class, 'update']) ->name('blogs.update');
    Route::delete('/blogs/{blog}',    [BlogController::class, 'destroy'])->name('blogs.destroy');

    // AJAX live search
    Route::get('/blogs/search',       [BlogController::class, 'search']) ->name('blogs.search');

    // Placeholder pages (return simple views or redirect to blogs for now)
    Route::get('/analytics', function () { return view('admin.analytics.index'); })->name('admin.analytics');
    Route::get('/users',     function () { return view('admin.users.index'); })    ->name('admin.users');
    Route::get('/comments',  [CommentController::class, 'index'])                  ->name('admin.comments');
    Route::patch('/comments/{comment}/approve', [CommentController::class, 'approve'])->name('comments.approve');
    Route::patch('/comments/{comment}/reject',  [CommentController::class, 'reject']) ->name('comments.reject');
    Route::delete('/comments/{comment}',        [CommentController::class, 'destroy'])->name('comments.destroy');
    Route::get('/settings',  function () { return view('admin.settings.index'); }) ->name('admin.settings');
});

Route::get('/my-profile', function () {
    return view('my-profile');
})->name('my-profile');

Route::get('/notification', function () {
    return view('notification');
})->name('notification');

Route::get('/notification-settings', function () {
    return view('notification-settings');
})->name('notification-settings');

Route::get('/payment', function () {
    return view('payment');
})->name('payment');

Route::get('/preferences-settings', function () {
    return view('preferences-settings');
})->name('preferences-settings');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('/pricing-plan', function () {
    return view('pricing-plan');
})->name('pricing-plan');

Route::get('/profile-settings', function () {
    return view('profile-settings');
})->name('profile-settings');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/review', function () {
    return view('review');
})->name('review');

Route::get('/security-settings', function () {
    return view('security-settings');
})->name('security-settings');

Route::get('/support-fixes', function () {
    return view('support-fixes');
})->name('support-fixes');

Route::get('/team', function () {
    return view('team');
})->name('team');

Route::get('/terms-conditions', function () {
    return view('terms-conditions');
})->name('terms-conditions');

Route::get('/testimonial', function () {
    return view('testimonial');
})->name('testimonial');

Route::get('/tour-booking', function () {
    return view('tour-booking');
})->name('tour-booking');

Route::get('/tour-booking-confirmation', function () {
    return view('tour-booking-confirmation');
})->name('tour-booking-confirmation');

Route::get('/tour-details', function () {
    return view('tour-details');
})->name('tour-details');

Route::get('/tour-grid', function () {
    return view('tour-grid');
})->name('tour-grid');

Route::get('/tour-list', function () {
    return view('tour-list');
})->name('tour-list');

Route::get('/tour-map', function () {
    return view('tour-map');
})->name('tour-map');

Route::get('/under-maintenance', function () {
    return view('under-maintenance');
})->name('under-maintenance');

Route::get('/wallet', function () {
    return view('wallet');
})->name('wallet');

Route::get('/wishlist', function () {
    return view('wishlist');
})->name('wishlist');

// New Pages v1.0.9
Route::get('/activity-booking-confirmation', function () {
    return view('activity-booking-confirmation');
})->name('activity-booking-confirmation');

Route::get('/activity-booking', function () {
    return view('activity-booking');
})->name('activity-booking');

Route::get('/activity-details', function () {
    return view('activity-details');
})->name('activity-details');

Route::get('/activity-grid', function () {
    return view('activity-grid');
})->name('activity-grid');

Route::get('/activity-list', function () {
    return view('activity-list');
})->name('activity-list');

Route::get('/activity-map', function () {
    return view('activity-map');
})->name('activity-map');

Route::get('/add-activity', function () {
    return view('add-activity');
})->name('add-activity');

Route::get('/add-guide', function () {
    return view('add-guide');
})->name('add-guide');

Route::get('/add-visa', function () {
    return view('add-visa');
})->name('add-visa');

Route::get('/agent-activities-booking', function () {
    return view('agent-activities-booking');
})->name('agent-activities-booking');

Route::get('/agent-business-details', function () {
    return view('agent-business-details');
})->name('agent-business-details');

Route::get('/agent-cancellation-requests', function () {
    return view('agent-cancellation-requests');
})->name('agent-cancellation-requests');

Route::get('/agent-commission-summary', function () {
    return view('agent-commission-summary');
})->name('agent-commission-summary');

Route::get('/agent-payment-history', function () {
    return view('agent-payment-history');
})->name('agent-payment-history');

Route::get('/agent-pending-payouts', function () {
    return view('agent-pending-payouts');
})->name('agent-pending-payouts');

Route::get('/agent-settings-notifications', function () {
    return view('agent-settings-notifications');
})->name('agent-settings-notifications');

Route::get('/agent-tour-guide', function () {
    return view('agent-tour-guide');
})->name('agent-tour-guide');

Route::get('/agent-visa-booking', function () {
    return view('agent-visa-booking');
})->name('agent-visa-booking');

Route::get('/bus-seat-selection', function () {
    return view('bus-seat-selection');
})->name('bus-seat-selection');

Route::get('/customer-activities-booking', function () {
    return view('customer-activities-booking');
})->name('customer-activities-booking');

Route::get('/customer-coupons', function () {
    return view('customer-coupons');
})->name('customer-coupons');

Route::get('/customer-gift-cards', function () {
    return view('customer-gift-cards');
})->name('customer-gift-cards');

Route::get('/customer-loyalty-points', function () {
    return view('customer-loyalty-points');
})->name('customer-loyalty-points');

Route::get('/customer-referral-program', function () {
    return view('customer-referral-program');
})->name('customer-referral-program');

Route::get('/customer-reward-history', function () {
    return view('customer-reward-history');
})->name('customer-reward-history');

Route::get('/customer-tour-guides', function () {
    return view('customer-tour-guides');
})->name('customer-tour-guides');

Route::get('/customer-visa-booking', function () {
    return view('customer-visa-booking');
})->name('customer-visa-booking');

Route::get('/destination-details', function () {
    return view('destination-details');
})->name('destination-details');

Route::get('/guide-booking-confirmation', function () {
    return view('guide-booking-confirmation');
})->name('guide-booking-confirmation');

Route::get('/guide-booking', function () {
    return view('guide-booking');
})->name('guide-booking');

Route::get('/guide-details', function () {
    return view('guide-details');
})->name('guide-details');

Route::get('/guide-grid', function () {
    return view('guide-grid');
})->name('guide-grid');

Route::get('/index-8', function () {
    return view('index-8');
})->name('index-8');

Route::get('/index-9', function () {
    return view('index-9');
})->name('index-9');

Route::get('/index-10', function () {
    return view('index-10');
})->name('index-10');

Route::get('/index-11', function () {
    return view('index-11');
})->name('index-11');

Route::get('/index-12', function () {
    return view('index-12');
})->name('index-12');

Route::get('/pricing-plan-2', function () {
    return view('pricing-plan-2');
})->name('pricing-plan-2');

Route::get('/recently-viewed', function () {
    return view('recently-viewed');
})->name('recently-viewed');

Route::get('/visa-booking-details', function () {
    return view('visa-booking-details');
})->name('visa-booking-details');

Route::get('/visa-details', function () {
    return view('visa-details');
})->name('visa-details');

Route::get('/visa-grid', function () {
    return view('visa-grid');
})->name('visa-grid');

Route::get('/visa-list', function () {
    return view('visa-list');
})->name('visa-list');

Route::get('/visa-requirements', function () {
    return view('visa-requirements');
})->name('visa-requirements');

Route::get('/visa-tracking', function () {
    return view('visa-tracking');
})->name('visa-tracking');


Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
// Airport autocomplete API
Route::get('/get-airports', [FlightController::class, 'getAirports'])
    ->name('airports.search');

Route::get('/api/airports', [FlightController::class, 'getAirports'])
    ->name('api.airports');

// Flight search route (IATA-based, used by flight-grid)
Route::get('/search-flights', [FlightController::class, 'search'])
    ->name('flight.search');

// Flight Route Finder (city-name based, direct / 1-stop / 2-stop)
Route::get('/flight-routes', [FlightController::class, 'findRoutes'])
    ->name('flight.routes');

// AJAX endpoints — called by flight-routes page after load
Route::get('/api/flight-routes/direct',   [FlightController::class, 'ajaxDirect'])  ->name('flight.ajax.direct');
Route::get('/api/flight-routes/one-stop', [FlightController::class, 'ajaxOneStop']) ->name('flight.ajax.onestop');
Route::get('/api/flight-routes/two-stop', [FlightController::class, 'ajaxTwoStop']) ->name('flight.ajax.twostop');

    Route::get('/test-airports', function() {
    $airports = App\Models\Airport::where('city', 'like', '%New%')->limit(5)->get();
    return response()->json($airports);
});