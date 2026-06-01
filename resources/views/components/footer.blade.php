<footer class="footer">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4">
                <a class="navbar-brand d-inline-block mb-3" href="{{ route('home') }}">
                    <i class="bi bi-code-square me-2"></i>Soft<span>Imagine</span>
                </a>
                <p class="text-secondary small">Solusi lengkap pengembangan aplikasi Website (Laravel), Android (Kotlin), Desktop (Java SE), dan sewa SaaS. Wujudkan aplikasi impian Anda bersama kami.</p>
                <div class="social-links mt-3">
                    <a href="https://wa.me/6281229548403" target="_blank" title="WhatsApp"><i class="bi bi-whatsapp"></i></a>
                    <a href="https://t.me/6281229548403" target="_blank" title="Telegram"><i class="bi bi-telegram"></i></a>
                    <a href="mailto:softtegal@gmail.com" title="Email"><i class="bi bi-envelope"></i></a>
                    <a href="#" title="Instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" title="GitHub"><i class="bi bi-github"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-4">
                <h6>Menu</h6>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="{{ route('home') }}">Beranda</a></li>
                    <li class="mb-2"><a href="{{ route('about') }}">Tentang</a></li>
                    <li class="mb-2"><a href="{{ route('services') }}">Layanan</a></li>
                    <li class="mb-2"><a href="{{ route('portfolio') }}">Portfolio</a></li>
                    <li class="mb-2"><a href="{{ route('blog') }}">Blog</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4">
                <h6>Layanan</h6>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="{{ route('services') }}">Website (Laravel)</a></li>
                    <li class="mb-2"><a href="{{ route('services') }}">Android (Kotlin)</a></li>
                    <li class="mb-2"><a href="{{ route('services') }}">Desktop (Java SE)</a></li>
                    <li class="mb-2"><a href="{{ route('services') }}">SaaS Rental</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4">
                <h6>Kontak</h6>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <small style="color: var(--text-muted); font-size: 0.75rem;">Marketing (Jatmiko)</small><br>
                        <a href="https://wa.me/6281391347956" target="_blank">
                            <i class="bi bi-whatsapp me-2"></i>0813-9134-7956
                        </a>
                    </li>
                    <li class="mb-2">
                        <small style="color: var(--text-muted); font-size: 0.75rem;">Analis & Programmer (Nurhidayat)</small><br>
                        <a href="https://wa.me/6281229548403" target="_blank">
                            <i class="bi bi-whatsapp me-2"></i>0812-2954-8403
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="mailto:softtegal@gmail.com">
                            <i class="bi bi-envelope me-2"></i>softtegal@gmail.com
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <small class="text-muted">&copy; {{ date('Y') }} SoftImagine. All rights reserved.</small>
                    <br>
                    <small class="text-muted">CV Solusi Prima Abadi</small>
                </div>
                <div class="col-md-6 text-center text-md-end mt-2 mt-md-0">
                    <small class="text-muted">
                        <i class="bi bi-code-slash me-1"></i>Built with Laravel & Bootstrap
                    </small>
                </div>
            </div>
        </div>
    </div>
</footer>
