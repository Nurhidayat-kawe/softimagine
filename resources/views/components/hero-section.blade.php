<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 hero-content" data-aos="fade-up">
                <p class="hero-overline">Software Development & SaaS Rental</p>
                <h1 class="hero-title">
                    Kami Bikin Aplikasi <span class="highlight">Web, Android, & Desktop</span>
                </h1>
                <p class="hero-subtitle">
                    SoftImagine siap mewujudkan aplikasi impian Anda dengan teknologi
                    <strong>Laravel</strong>, <strong>Kotlin</strong>, dan <strong>Java SE</strong>.
                    Profesional, tepat waktu, dan siap pakai.
                </p>
                <div class="hero-actions">
                    <a href="https://wa.me/6281229548403?text=Halo%20SoftImagine!%20Saya%20ingin%20konsultasi%20gratis." target="_blank" class="btn-hero-primary">
                        <i class="bi bi-whatsapp"></i>
                        Konsultasi Gratis
                    </a>
                    <a href="{{ route('portfolio') }}" class="btn-hero-secondary">
                        <i class="bi bi-grid-3x3-gap"></i>
                        Lihat Portfolio
                    </a>
                </div>
                <div class="hero-contact mt-3">
                    <span class="hero-contact-item">
                        <i class="bi bi-whatsapp"></i> <a href="https://wa.me/6281229548403" target="_blank">0812-2954-8403</a>
                    </span>
                    <span class="hero-contact-item">
                        <i class="bi bi-telegram"></i> <a href="https://t.me/6281229548403" target="_blank">0812-2954-8403</a>
                    </span>
                </div>
            </div>
            <div class="col-lg-5" data-aos="fade-left" data-aos-delay="100">
                <div class="hero-services-grid">
                    @foreach ($services as $s)
                    <div class="hero-service-item">
                        <div class="hsi-icon">
                            <i class="bi {{ $s['icon'] }}"></i>
                        </div>
                        <div>
                            <div class="hsi-title">{{ $s['title'] }}</div>
                            <div class="hsi-desc">{{ $s['short'] ?? '' }}</div>
                        </div>
                        <i class="bi bi-chevron-right hsi-arrow"></i>
                    </div>
                    @endforeach
                    <div class="hero-service-item hero-service-item-all">
                        <span>Butuh bantuan? <a href="{{ route('contact') }}">Hubungi kami <i class="bi bi-arrow-right"></i></a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
