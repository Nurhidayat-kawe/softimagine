<section class="section-padding" id="services">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="section-label"><i class="bi bi-grid"></i> Layanan</span>
            <h2 class="section-title">Solusi Lengkap untuk Kebutuhan Digital Anda</h2>
            <p class="section-subtitle">Dari web, mobile, hingga desktop — kami hadirkan solusi terbaik dengan teknologi terkini.</p>
        </div>
        <div class="row g-4">
            @foreach ($services as $service)
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->index * 80 }}">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="bi {{ $service['icon'] }}"></i>
                    </div>
                    <h5>{{ $service['title'] }}</h5>
                    <p>{{ $service['description'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
