<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <div class="brand-icon">
                <i class="bi bi-cpu"></i>
            </div>
            <span class="brand-text">Soft<span class="highlight">Imagine</span></span>
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center gap-1">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}" data-text="Beranda">
                        <span class="nav-label">Beranda</span>
                        <span class="nav-indicator"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}" data-text="Tentang">
                        <span class="nav-label">Tentang</span>
                        <span class="nav-indicator"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}" data-text="Layanan">
                        <span class="nav-label">Layanan</span>
                        <span class="nav-indicator"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('portfolio') ? 'active' : '' }}" href="{{ route('portfolio') }}" data-text="Portfolio">
                        <span class="nav-label">Portfolio</span>
                        <span class="nav-indicator"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('blog*') ? 'active' : '' }}" href="{{ route('blog') }}" data-text="Blog">
                        <span class="nav-label">Blog</span>
                        <span class="nav-indicator"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}" data-text="Kontak">
                        <span class="nav-label">Kontak</span>
                        <span class="nav-indicator"></span>
                    </a>
                </li>
                <li class="nav-divider"></li>
                <li class="nav-item">
                    <div class="theme-toggle" id="themeToggle" role="button" aria-label="Toggle theme">
                        <div class="toggle-track">
                            <div class="toggle-thumb">
                                <i class="bi bi-sun-fill"></i>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item ms-1">
                    <a href="https://wa.me/6281229548403?text=Halo%20SoftImagine!%20Saya%20tertarik%20dengan%20layanan%20Anda." target="_blank" class="btn-nav-wa">
                        <i class="bi bi-whatsapp"></i>
                        <span>Hubungi</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
