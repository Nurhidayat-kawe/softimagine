@extends('layouts.app')

@section('title', 'Layanan - SoftImagine')
@section('meta_description', 'Layanan pembuatan aplikasi Website (Laravel), Android (Kotlin), Desktop (Java SE), dan sewa SaaS dari SoftImagine.')

@section('content')

<section class="page-header">
    <div class="container text-center">
        <h1 data-aos="fade-up">Layanan Kami</h1>
        <p class="fs-5" data-aos="fade-up" data-aos-delay="100">Solusi lengkap untuk kebutuhan digital Anda</p>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="row g-4">
            @foreach ($services as $service)
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                <div class="service-card p-4">
                    <div class="d-flex align-items-start gap-3 mb-3">
                        <div class="service-icon flex-shrink-0">
                            <i class="bi {{ $service['icon'] }}"></i>
                        </div>
                        <div>
                            <h4 class="fw-bold" style="color: var(--text-primary);">{{ $service['title'] }}</h4>
                            <p style="color: var(--text-secondary); margin-bottom: 0;">{{ $service['description'] }}</p>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap gap-2 mt-3">
                        @foreach ($service['features'] as $feature)
                        <span class="skill-tag">{{ $feature }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="section-padding bg-body-tertiary">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="section-label"><i class="bi bi-tags"></i> Paket Harga</span>
            <h2 class="section-title">Pilihan Paket</h2>
            <p class="section-subtitle">Pilih paket yang sesuai dengan kebutuhan project Anda.</p>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="pricing-card">
                    <h5 class="fw-bold mb-3">Basic</h5>
                    <div class="price mb-3">
                        Rp 3JT <small>/project</small>
                    </div>
                    <p style="color: var(--text-secondary); font-size: 0.9rem; margin-bottom: 1.5rem;">Cocok untuk project sederhana dengan fitur dasar.</p>
                    <ul class="list-unstyled mb-4">
                        <li><i class="bi bi-check"></i>1 Modul Utama</li>
                        <li><i class="bi bi-check"></i>Database Design</li>
                        <li><i class="bi bi-check"></i>Responsive UI</li>
                        <li><i class="bi bi-check"></i>Basic Admin Panel</li>
                        <li style="color: var(--text-muted);"><i class="bi bi-x"></i>API Integration</li>
                        <li style="color: var(--text-muted);"><i class="bi bi-x"></i>Payment Gateway</li>
                        <li style="color: var(--text-muted);"><i class="bi bi-x"></i>Maintenance 30 Hari</li>
                    </ul>
                    <a href="https://wa.me/6281229548403?text=Halo%20SoftImagine!%20Saya%20tertarik%20dengan%20paket%20Basic." target="_blank" class="btn btn-outline-primary w-100 rounded-pill">Pilih Paket</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="pricing-card featured">
                    <div class="popular-badge">Paling Populer</div>
                    <h5 class="fw-bold mb-3">Professional</h5>
                    <div class="price mb-3">
                        Rp 7JT <small>/project</small>
                    </div>
                    <p style="color: var(--text-secondary); font-size: 0.9rem; margin-bottom: 1.5rem;">Cocok untuk project skala menengah dengan fitur lengkap.</p>
                    <ul class="list-unstyled mb-4">
                        <li><i class="bi bi-check"></i>3 Modul Utama</li>
                        <li><i class="bi bi-check"></i>Database Design</li>
                        <li><i class="bi bi-check"></i>Responsive UI + Animasi</li>
                        <li><i class="bi bi-check"></i>Full Admin Panel</li>
                        <li><i class="bi bi-check"></i>API Integration</li>
                        <li><i class="bi bi-check"></i>Payment Gateway</li>
                        <li><i class="bi bi-check"></i>Maintenance 60 Hari</li>
                    </ul>
                    <a href="https://wa.me/6281229548403?text=Halo%20SoftImagine!%20Saya%20tertarik%20dengan%20paket%20Professional." target="_blank" class="btn btn-primary w-100 rounded-pill">Pilih Paket</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="pricing-card">
                    <h5 class="fw-bold mb-3">Enterprise</h5>
                    <div class="price mb-3">
                        Rp 15JT+ <small>/project</small>
                    </div>
                    <p style="color: var(--text-secondary); font-size: 0.9rem; margin-bottom: 1.5rem;">Cocok untuk project skala besar dengan fitur kompleks.</p>
                    <ul class="list-unstyled mb-4">
                        <li><i class="bi bi-check"></i>Unlimited Modul</li>
                        <li><i class="bi bi-check"></i>Database Design + Optimization</li>
                        <li><i class="bi bi-check"></i>Premium UI/UX Design</li>
                        <li><i class="bi bi-check"></i>Full Admin Panel + Mobile</li>
                        <li><i class="bi bi-check"></i>Advanced API Integration</li>
                        <li><i class="bi bi-check"></i>Multi Payment Gateway</li>
                        <li><i class="bi bi-check"></i>Maintenance 1 Tahun</li>
                    </ul>
                    <a href="https://wa.me/6281229548403?text=Halo%20SoftImagine!%20Saya%20tertarik%20dengan%20paket%20Enterprise." target="_blank" class="btn btn-outline-primary w-100 rounded-pill">Pilih Paket</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-section" data-aos="fade-up">
    <div class="container text-center">
        <h2 class="mb-3">Butuh Solusi Khusus?</h2>
        <p class="mb-4 fs-5">Kami juga menerima project dengan kebutuhan custom. Diskusikan dengan tim kami.</p>
        <a href="https://wa.me/6281229548403?text=Halo%20SoftImagine!%20Saya%20ingin%20diskusi%20untuk%20project%20custom." target="_blank" class="btn btn-light btn-lg rounded-pill px-5">
            <i class="bi bi-whatsapp me-2"></i>Diskusi Sekarang
        </a>
    </div>
</section>

@endsection
