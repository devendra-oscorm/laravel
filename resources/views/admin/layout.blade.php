<?php $page = 'admin-dashboard'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Dashboard – DreamsTour</title>

    @include('layout.partials.head-css')
</head>

<body class="admin-dashboard-body">

    <style>
        .admin-dashboard-body {
            background: #f4f7fb;
            min-height: 100vh;
            color: #111827;
        }

        .admin-dashboard-body .breadcrumb-bar,
        .admin-dashboard-body .xb-cursor,
        .admin-dashboard-body .back-to-top {
            display: none !important;
        }

        .admin-shell {
            min-height: 100vh;
            padding-left: 240px;
            transition: padding-left .2s ease;
        }

        .admin-sidebar-collapsed .admin-shell {
            padding-left: 76px;
        }

        .admin-shell-sidebar {
            position: fixed;
            inset: 0 auto 0 0;
            width: 240px;
            z-index: 1040;
            background: #101828;
            color: #ffffff;
            display: flex;
            flex-direction: column;
            border-right: 1px solid rgba(255, 255, 255, 0.08);
            transition: width .2s ease;
        }

        .admin-shell-overlay {
            display: none;
        }

        .admin-sidebar-collapsed .admin-shell-sidebar {
            width: 76px;
        }

        .admin-shell-brand {
            min-height: 76px;
            padding: 18px 22px;
            display: flex;
            align-items: center;
            gap: 12px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }

        .admin-shell-brand-icon {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            background: #0d6efd;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            flex-shrink: 0;
        }

        .admin-sidebar-collapsed .admin-shell-brand,
        .admin-sidebar-collapsed .admin-shell-user {
            padding-left: 18px;
            padding-right: 18px;
        }

        .admin-sidebar-collapsed .admin-shell-brand div,
        .admin-sidebar-collapsed .admin-shell-user .overflow-hidden,
        .admin-sidebar-collapsed .admin-shell-nav-label,
        .admin-sidebar-collapsed .admin-shell-nav span.nav-text,
        .admin-sidebar-collapsed .admin-shell-logout span {
            display: none !important;
        }

        .admin-shell-brand h6 {
            color: #ffffff;
            margin-bottom: 1px;
            font-size: 16px;
        }

        .admin-shell-brand p,
        .admin-shell-user p,
        .admin-shell-nav-label {
            color: rgba(255, 255, 255, 0.58);
        }

        .admin-shell-user {
            padding: 18px 22px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }

        .admin-shell-nav {
            padding: 18px 14px;
            flex: 1;
            overflow-y: auto;
        }

        .admin-shell-nav-label {
            display: block;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .08em;
            text-transform: uppercase;
            margin: 6px 10px 10px;
        }

        .admin-shell-nav a,
        .admin-shell-logout {
            width: 100%;
            min-height: 42px;
            padding: 10px 12px;
            border-radius: 8px;
            color: rgba(255, 255, 255, 0.74);
            display: flex;
            align-items: center;
            gap: 10px;
            border: 0;
            background: transparent;
            text-align: left;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 4px;
        }

        .admin-sidebar-collapsed .admin-shell-nav a,
        .admin-sidebar-collapsed .admin-shell-logout {
            justify-content: center;
            padding-left: 10px;
            padding-right: 10px;
        }

        .admin-shell-nav a:hover,
        .admin-shell-logout:hover,
        .admin-shell-nav a.active {
            color: #ffffff;
            background: rgba(255, 255, 255, 0.10);
        }

        .admin-shell-nav a.active {
            box-shadow: inset 3px 0 0 #0d6efd;
        }

        .admin-shell-topbar {
             position: sticky;
    top: 0;
    z-index: 1030;
            min-height: 76px;
            background: rgba(255, 255, 255, 0.94);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid #e9edf5;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            padding: 14px 28px;
            transition: margin-left .2s ease;
        }

        .admin-shell-topbar h5 {
            margin-bottom: 2px;
            font-size: 18px;
        }

        .admin-shell-topbar p {
            margin-bottom: 0;
            color: #667085;
            font-size: 13px;
        }

        .admin-dashboard-body .content {
            padding: 20px;
            min-height: calc(100vh - 76px);
        }

        .admin-dashboard-body .content>.container {
            max-width: 100%;
            padding-left: 0;
            padding-right: 0;
        }

        .admin-dashboard-body .card {
            border: 1px solid #edf0f5;
            box-shadow: 0 2px 8px rgba(16, 24, 40, 0.04) !important;
            margin-bottom: 0;
        }

        .admin-dashboard-body .card-body {
            padding: 1rem;
        }

        .admin-dashboard-body .card-header {
            padding: 0.875rem 1rem;
            background: #fff;
        }

        .admin-dashboard-body .row {
            margin-left: -8px;
            margin-right: -8px;
        }

        .admin-dashboard-body .row > * {
            padding-left: 8px;
            padding-right: 8px;
        }

        .admin-dashboard-body .mb-3 {
            margin-bottom: 16px !important;
        }

        .admin-dashboard-body .mb-4 {
            margin-bottom: 20px !important;
        }

        .admin-dashboard-body .gap-2 {
            gap: 0.5rem !important;
        }

        .admin-dashboard-body .gap-3 {
            gap: 0.75rem !important;
        }

        .admin-dashboard-body .content .row>.col-xl-3.col-lg-4.theiaStickySidebar {
            display: none !important;
        }

        .admin-dashboard-body .content .row>.col-xl-9.col-lg-8 {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .admin-mobile-sidebar-title {
            display: none;
        }

        @media (max-width: 991.98px) {
            .admin-shell-topbar {
                min-height: 70px;
                padding: 12px 16px;
                align-items: flex-start;
                flex-wrap: wrap;
            }

            .admin-dashboard-body .content {
                padding: 18px 14px;
            }

            .admin-shell-topbar .btn {
                padding-left: 10px;
                padding-right: 10px;
            }

            .admin-shell {
                padding-left: 0;
            }

            .admin-sidebar-collapsed .admin-shell {
                padding-left: 0;
            }

            .admin-shell-sidebar {
                width: 240px;
                transform: translateX(-100%);
                transition: transform .2s ease;
            }

            .admin-sidebar-open .admin-shell-sidebar {
                transform: translateX(0);
            }

            .admin-sidebar-collapsed .admin-shell-sidebar {
                width: 240px;
            }

            .admin-sidebar-collapsed .admin-shell-brand div,
            .admin-sidebar-collapsed .admin-shell-user .overflow-hidden,
            .admin-sidebar-collapsed .admin-shell-nav-label,
            .admin-sidebar-collapsed .admin-shell-nav span.nav-text,
            .admin-sidebar-collapsed .admin-shell-logout span {
                display: block !important;
            }

            .admin-sidebar-collapsed .admin-shell-nav a,
            .admin-sidebar-collapsed .admin-shell-logout {
                justify-content: flex-start;
                padding-left: 12px;
                padding-right: 12px;
            }

            .admin-sidebar-open .admin-shell-overlay {
                display: block;
                position: fixed;
                inset: 0;
                z-index: 1035;
                background: rgba(16, 24, 40, .48);
            }
        }

        @media (max-width: 575.98px) {
            .admin-shell-topbar h5 {
                font-size: 16px;
            }

            .admin-shell-topbar p {
                display: none;
            }

            .admin-shell-topbar>.d-flex:last-child {
                width: 100%;
                justify-content: space-between;
            }

            .admin-shell-topbar>.d-flex:last-child .btn {
                flex: 1;
                justify-content: center;
            }

            .admin-shell-topbar>.d-flex:last-child .btn i {
                margin-right: 0 !important;
            }

            .admin-shell-topbar>.d-flex:last-child .btn {
                font-size: 0;
            }

            .admin-shell-topbar>.d-flex:last-child .btn i {
                font-size: 16px;
            }
        }
    </style>

    <div class="admin-shell">
        <aside class="admin-shell-sidebar">


            <div class="admin-shell-user">
                <div class="d-flex align-items-center gap-2">
                    <span class="avatar avatar-md rounded-circle bg-primary d-flex align-items-center justify-content-center text-white fw-bold">
                        {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
                    </span>
                    <div class="overflow-hidden">
                        <h6 class="fs-14 text-white mb-0 text-truncate">{{ auth()->user()->name ?? 'Admin' }}</h6>
                        <p class="fs-12 mb-0 text-truncate">{{ auth()->user()->email ?? '' }}</p>
                    </div>
                </div>
            </div>

            <nav class="admin-shell-nav">
                <span class="admin-shell-nav-label">Main</span>
                <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') || request()->routeIs('admin.analytics') ? 'active' : '' }}">
                    <i class="isax isax-element-35 fs-18"></i><span class="nav-text">Dashboard</span>
                </a>

                <span class="admin-shell-nav-label mt-4">Blog Management</span>
                <a href="{{ route('blogs.index') }}" class="{{ request()->routeIs('blogs.index') || request()->routeIs('blogs.create') || request()->routeIs('blogs.edit') || request()->routeIs('admin.comments') ? 'active' : '' }}">
                    <i class="isax isax-document-text5 fs-18"></i><span class="nav-text">All Blogs</span>
                </a>

                <span class="admin-shell-nav-label mt-4">Bookings</span>
                <a href="{{ route('admin.bookings.flights') }}" class="{{ request()->routeIs('admin.bookings.flights') ? 'active' : '' }}">
                    <i class="isax isax-airplane5 fs-18"></i><span class="nav-text">Flight Bookings</span>
                </a>
                <a href="{{ route('admin.bookings.hotels') }}" class="{{ request()->routeIs('admin.bookings.hotels') ? 'active' : '' }}">
                    <i class="isax isax-building-35 fs-18"></i><span class="nav-text">Hotel Bookings</span>
                </a>

                <span class="admin-shell-nav-label mt-4">Finance</span>
                <a href="{{ route('admin.payments') }}" class="{{ request()->routeIs('admin.payments') ? 'active' : '' }}">
                    <i class="isax isax-card5 fs-18"></i><span class="nav-text">Payments</span>
                </a>
                <a href="{{ route('admin.refunds') }}" class="{{ request()->routeIs('admin.refunds') ? 'active' : '' }}">
                    <i class="isax isax-refresh-circle5 fs-18"></i><span class="nav-text">Refunds</span>
                </a>

                <span class="admin-shell-nav-label mt-4">Marketing</span>
                <a href="{{ route('admin.promo-codes') }}" class="{{ request()->routeIs('admin.promo-codes') ? 'active' : '' }}">
                    <i class="isax isax-ticket-25 fs-18"></i><span class="nav-text">Promo Codes</span>
                </a>

                <span class="admin-shell-nav-label mt-4">Settings</span>
                <a href="{{ route('admin.users') }}" class="{{ request()->routeIs('admin.users') ? 'active' : '' }}">
                    <i class="isax isax-profile-2user5 fs-18"></i><span class="nav-text">Users</span>
                </a>
                <a href="{{ route('admin.configuration') }}" class="{{ request()->routeIs('admin.configuration') ? 'active' : '' }}">
                    <i class="isax isax-setting-45 fs-18"></i><span class="nav-text">Configuration</span>
                </a>
                <a href="{{ route('admin.settings') }}" class="{{ request()->routeIs('admin.settings') ? 'active' : '' }}">
                    <i class="isax isax-user-edit4 fs-18"></i><span class="nav-text">Profile</span>
                </a>
            </nav>

            <div class="p-3 border-top" style="border-color: rgba(255,255,255,.08) !important;">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="admin-shell-logout">
                        <i class="isax isax-logout-15 fs-18"></i><span>Logout</span>
                    </button>
                </form>
            </div>
        </aside>
        <div class="admin-shell-overlay" id="adminSidebarOverlay"></div>

        <div class="admin-shell-topbar">
            <div class="d-flex align-items-center gap-2">
                <button type="button" class="btn btn-sm d-inline-flex align-items-center" id="adminSidebarToggle">
                    <i class="isax isax-menu-15 fs-2 text-primary"></i>
                </button>
                <div>
                    <h5>{{ trim($__env->yieldContent('admin_title', 'Admin Dashboard')) }}</h5>
                    <p>Manage blogs, comments, users, and publishing activity.</p>
                </div>
            </div>
            <div class="d-flex align-items-center gap-2">
                <a href="{{ url('/') }}"
   target="_blank"
   rel="noopener noreferrer"
   class="btn btn-light btn-sm d-inline-flex align-items-center">
    <i class="isax isax-home5 me-1"></i>Home
</a>
                <a href="{{ route('blog') }}" target="_blank" class="btn btn-light btn-sm d-inline-flex align-items-center">
                    <i class="isax isax-eye me-1"></i>View Site
                </a>
                <a href="{{ route('blogs.create') }}" class="btn btn-primary btn-sm d-inline-flex align-items-center">
                    <i class="isax isax-add-circle5 me-1"></i>Add Blog
                </a>
            </div>
        </div>

        <main>
            @yield('content')
        </main>
    </div>

    @include('layout.partials.vendor-scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggle = document.getElementById('adminSidebarToggle');
            const overlay = document.getElementById('adminSidebarOverlay');
            const collapsed = localStorage.getItem('adminSidebarCollapsed') === 'true';
            const isMobile = () => window.matchMedia('(max-width: 991.98px)').matches;

            if (collapsed && !isMobile()) {
                document.body.classList.add('admin-sidebar-collapsed');
            }

            if (toggle) {
                toggle.addEventListener('click', function() {
                    if (isMobile()) {
                        document.body.classList.toggle('admin-sidebar-open');
                        return;
                    }

                    document.body.classList.toggle('admin-sidebar-collapsed');
                    localStorage.setItem('adminSidebarCollapsed', document.body.classList.contains('admin-sidebar-collapsed'));
                });
            }

            if (overlay) {
                overlay.addEventListener('click', function() {
                    document.body.classList.remove('admin-sidebar-open');
                });
            }

            window.addEventListener('resize', function() {
                if (!isMobile()) {
                    document.body.classList.remove('admin-sidebar-open');
                }
            });
        });
    </script>
    @stack('scripts')

</body>

</html>