@extends('layouts.app')

@section('title', 'Tentang Kami - SoftImagine')
@section('meta_description', 'Kenali lebih dekat SoftImagine, tim pengembang aplikasi profesional yang berfokus pada Laravel, Kotlin, dan Java SE.')

@section('content')

<section class="page-header">
    <div class="container text-center">
        <h1 data-aos="fade-up">Tentang Kami</h1>
        <p class="fs-5" data-aos="fade-up" data-aos-delay="100">Kenali lebih dekat tim di balik SoftImagine</p>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="about-visual">
                    <div class="visual-bg">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <div class="about-experience">
                        <h3>5+</h3>
                        <small>Tahun Pengalaman</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <span class="section-label"><i class="bi bi-info-circle"></i> Tentang Kami</span>
                <h2 class="section-title">Kami Menghadirkan <span class="text-gradient">Solusi Digital</span> Terbaik</h2>
                <p style="color: var(--text-secondary); font-size: 1.1rem; line-height: 1.7; margin-bottom: 1.5rem;">SoftImagine adalah tim pengembang aplikasi yang berfokus pada pembuatan aplikasi Website (Laravel), Android (Kotlin), dan Desktop (Java SE) serta layanan sewa SaaS.</p>
                <p style="color: var(--text-secondary); line-height: 1.7;">Kami percaya bahwa teknologi yang tepat dapat mengubah cara bisnis beroperasi. Dengan pengalaman lebih dari 5 tahun, kami telah membantu 35+ klien dari berbagai industri mewujudkan aplikasi impian mereka.</p>
                <div class="row g-3 mt-4">
                    <div class="col-6">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill" style="color: var(--primary);"></i>
                            <span style="font-weight: 500;">Tepat Waktu</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill" style="color: var(--primary);"></i>
                            <span style="font-weight: 500;">Kualitas Terjamin</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill" style="color: var(--primary);"></i>
                            <span style="font-weight: 500;">Support 24/7</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill" style="color: var(--primary);"></i>
                            <span style="font-weight: 500;">Teknologi Modern</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding bg-body-tertiary">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="section-label"><i class="bi bi-clock-history"></i> Perjalanan</span>
            <h2 class="section-title">Perjalanan Kami</h2>
            <p class="section-subtitle">Dari awal berdiri hingga sekarang, berikut perjalanan SoftImagine.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8" data-aos="fade-up">
                <div class="timeline-modern">
                    <div class="timeline-item">
                        <h5>2020</h5>
                        <p>SoftImagine didirikan dengan fokus pada pengembangan aplikasi web menggunakan Laravel.</p>
                    </div>
                    <div class="timeline-item">
                        <h5>2021</h5>
                        <p>Memperluas layanan ke pengembangan aplikasi Android native dengan Kotlin.</p>
                    </div>
                    <div class="timeline-item">
                        <h5>2022</h5>
                        <p>Menambahkan layanan pengembangan aplikasi desktop enterprise dengan Java SE.</p>
                    </div>
                    <div class="timeline-item">
                        <h5>2023</h5>
                        <p>Meluncurkan layanan SaaS Rental, menyediakan aplikasi siap pakai dengan model sewa bulanan.</p>
                    </div>
                    <div class="timeline-item">
                        <h5>2024-2025</h5>
                        <p>Telah menyelesaikan 50+ project dan dipercaya oleh 35+ klien dari berbagai industri.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="section-label"><i class="bi bi-people"></i> Tim</span>
            <h2 class="section-title">Tim Kami</h2>
            <p class="section-subtitle">Para profesional di balik setiap project yang kami kerjakan.</p>
        </div>
        <div class="row g-4">
            @foreach ($team as $member)
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                <div class="team-card">
                    <div class="team-avatar">{{ $member['initials'] }}</div>
                    <h6>{{ $member['name'] }}</h6>
                    <div class="role">{{ $member['role'] }}</div>
                    @if ($member['phone'])
                    <a href="https://wa.me/{{ $member['phone'] }}" target="_blank" class="btn btn-sm rounded-pill mt-2 px-3" style="background: #25D366; color: white; font-size: 0.75rem; display: inline-flex; align-items: center; gap: 0.3rem;">
                        <i class="bi bi-whatsapp"></i>Chat
                    </a>
                    @endif
                    <div class="mt-3">
                        @foreach ($member['skills'] as $skill)
                        <span class="skill-tag">{{ $skill }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="section-label"><i class="bi bi-building"></i> Legalitas</span>
            <h2 class="section-title">Identitas Perusahaan</h2>
            <p class="section-subtitle">SoftImagine adalah bagian dari CV Solusi Prima Abadi, badan usaha yang bergerak di bidang pengembangan software.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8" data-aos="fade-up">
                <div class="timeline-modern">
                    <div class="timeline-item">
                        <h5>Nama Badan Usaha</h5>
                        <p>CV Solusi Prima Abadi</p>
                    </div>
                    <div class="timeline-item">
                        <h5>Bidang Usaha</h5>
                        <p>Pengembangan Software (Website, Android, Desktop) & Layanan SaaS</p>
                    </div>
                    <div class="timeline-item">
                        <h5>NIB</h5>
                        <p class="text-muted"><em>Menyusul</em></p>
                    </div>
                    <div class="timeline-item">
                        <h5>NPWP</h5>
                        <p class="text-muted"><em>Menyusul</em></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding bg-body-tertiary">
    <div class="container">
        <div class="row g-4">
            @foreach ($stats as $stat)
            <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                <div class="display-large text-primary mb-1" style="font-size: 2.5rem;">{{ $stat['value'] }}</div>
                <p style="color: var(--text-secondary); font-size: 0.95rem;">{{ $stat['label'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="cta-section" data-aos="fade-up">
    <div class="container text-center">
        <h2 class="mb-3">Tertarik Bekerja Sama?</h2>
        <p class="mb-4 fs-5">Hubungi kami dan diskusikan project Anda secara gratis.</p>
        <a href="https://wa.me/6281229548403?text=Halo%20SoftImagine!%20Saya%20tertarik%20untuk%20bekerja%20sama." target="_blank" class="btn btn-light btn-lg rounded-pill px-5">
            <i class="bi bi-whatsapp me-2"></i>Hubungi Kami
        </a>
    </div>
</section>

@endsection
