<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Dashboard') - {{ config('app.name') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css">
    @vite(['resources/css/admin.css', 'resources/js/admin.js'])
</head>
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">

        <nav class="app-header navbar navbar-expand bg-body shadow-sm">
            <div class="container-fluid">
                <button class="navbar-toggler border-0 me-2" type="button" data-bs-toggle="sidebar" aria-label="Toggle sidebar">
                    <i class="bi bi-list fs-5"></i>
                </button>
                <a href="{{ route('admin.dashboard') }}" class="navbar-brand fw-bold" style="font-size: 1.1rem;">
                    <i class="bi bi-code-square me-2" style="color: var(--primary);"></i>Soft<span style="color: var(--primary);">Imagine</span>
                </a>
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" data-bs-toggle="dropdown">
                            <i class="bi bi-person-circle fs-5"></i>
                            <span class="ms-1 d-none d-md-inline">{{ Auth::user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><span class="dropdown-item-text small text-muted">{{ Auth::user()->email }}</span></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right me-2"></i>Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <aside class="app-sidebar bg-body" data-bs-theme="dark">
            <div class="sidebar-brand fw-bold text-center py-3">
                <i class="bi bi-code-square me-2"></i>SoftImagine
            </div>
            <nav class="mt-2">
                <ul class="nav sidebar-menu flex-column">
                    <li class="nav-item">
                        <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                            <i class="bi bi-speedometer2 me-2"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.services.index') }}" class="nav-link {{ request()->routeIs('admin.services.*') ? 'active' : '' }}">
                            <i class="bi bi-grid me-2"></i>
                            <span>Services</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.portfolios.index') }}" class="nav-link {{ request()->routeIs('admin.portfolios.*') ? 'active' : '' }}">
                            <i class="bi bi-briefcase me-2"></i>
                            <span>Portfolios</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.testimonials.index') }}" class="nav-link {{ request()->routeIs('admin.testimonials.*') ? 'active' : '' }}">
                            <i class="bi bi-chat-quote me-2"></i>
                            <span>Testimonials</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.blogs.index') }}" class="nav-link {{ request()->routeIs('admin.blogs.*') ? 'active' : '' }}">
                            <i class="bi bi-journal-text me-2"></i>
                            <span>Blog</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.team.index') }}" class="nav-link {{ request()->routeIs('admin.team.*') ? 'active' : '' }}">
                            <i class="bi bi-people me-2"></i>
                            <span>Team</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.stats.index') }}" class="nav-link {{ request()->routeIs('admin.stats.*') ? 'active' : '' }}">
                            <i class="bi bi-bar-chart me-2"></i>
                            <span>Stats</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.settings.index') }}" class="nav-link {{ request()->routeIs('admin.settings.*') ? 'active' : '' }}">
                            <i class="bi bi-gear me-2"></i>
                            <span>Settings</span>
                        </a>
                    </li>
                    <li class="nav-item mt-3 pt-3 border-top border-secondary">
                        <a href="{{ route('home') }}" class="nav-link" target="_blank">
                            <i class="bi bi-globe me-2"></i>
                            <span>Lihat Website</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <main class="app-main">
            <div class="app-content">
                <div class="container-fluid">
                    <div class="py-3">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger alert-dismissible fade show">
                                {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif
                        @yield('content')
                    </div>
                </div>
            </div>
        </main>

        <footer class="app-footer">
            <div class="container-fluid text-center text-muted py-2 small">
                &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
            </div>
        </footer>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js"></script>
    @stack('scripts')
</body>
</html>
