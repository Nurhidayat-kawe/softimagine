@extends('layouts.app')

@section('title', 'Portfolio - SoftImagine')
@section('meta_description', 'Lihat portfolio project yang telah kami kerjakan: aplikasi Web (Laravel), Android (Kotlin), Desktop (Java SE), dan SaaS.')

@section('content')

<section class="page-header">
    <div class="container text-center">
        <h1 data-aos="fade-up">Portfolio</h1>
        <p class="fs-5" data-aos="fade-up" data-aos-delay="100">Beberapa project yang telah kami kerjakan</p>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="text-center portfolio-filter mb-4" data-aos="fade-up">
            <button class="btn active" data-filter="all">Semua</button>
            @foreach ($categories as $cat)
            <button class="btn" data-filter="{{ $cat }}">{{ ucfirst($cat) }}</button>
            @endforeach
        </div>
        <div class="row g-4">
            @foreach ($portfolios as $portfolio)
            <div class="col-lg-4 col-md-6 portfolio-item" data-aos="fade-up" data-aos-delay="{{ $loop->index * 50 }}" data-category="{{ $portfolio['category'] }}">
                <div class="portfolio-card" data-bs-toggle="modal" data-bs-target="#portfolioModal{{ $loop->index }}">
                    <div class="portfolio-img" @if(!empty($portfolio['images'])) style="background: #000;" @else style="background: linear-gradient(135deg, {{ ['#4f46e5', '#7c3aed', '#059669', '#d97706', '#dc2626', '#0891b2', '#4f46e5', '#0d9488'][$loop->index % 8] }} 0%, {{ ['#4338ca', '#6d28d9', '#047857', '#b45309', '#b91c1c', '#0e7490', '#4338ca', '#0f766e'][$loop->index % 8] }} 100%);" @endif>
                        @if(!empty($portfolio['images']))
                        <img src="{{ asset('storage/' . $portfolio['images'][0]) }}" alt="{{ $portfolio['title'] }}" style="width: 100%; height: 100%; object-fit: cover; position: absolute; inset: 0;">
                        @else
                        <i class="bi {{ $portfolio['icon'] }}"></i>
                        @endif
                        <div class="portfolio-overlay">
                            <span><i class="bi bi-eye"></i>Lihat Detail</span>
                        </div>
                    </div>
                    <div class="portfolio-body">
                        <span class="category-badge">{{ $portfolio['category'] }}</span>
                        <h6>{{ $portfolio['title'] }}</h6>
                        <p>{{ Str::limit($portfolio['description'], 80) }}</p>
                        <small style="color: var(--text-muted); font-size: 0.82rem;">
                            <i class="bi bi-person me-1"></i>{{ $portfolio['client'] }}
                            <span class="ms-2"><i class="bi bi-calendar me-1"></i>{{ $portfolio['year'] }}</span>
                        </small>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="portfolioModal{{ $loop->index }}" tabindex="-1">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header border-0">
                            <h5 class="modal-title fw-bold">{{ $portfolio['title'] }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            @if(!empty($portfolio['images']))
                            <div class="row g-2 mb-4">
                                @foreach ($portfolio['images'] as $img)
                                <div class="col-6">
                                    <img src="{{ asset('storage/' . $img) }}" alt="{{ $portfolio['title'] }}" class="rounded-3 w-100" style="border: 1px solid var(--border-color); object-fit: cover; max-height: 250px;">
                                </div>
                                @endforeach
                            </div>
                            @else
                            <div class="text-center mb-4">
                                <div class="d-inline-flex align-items-center justify-content-center rounded-3 mb-3" style="width: 96px; height: 96px; background: linear-gradient(135deg, {{ ['#4f46e5', '#7c3aed', '#059669', '#d97706', '#dc2626', '#0891b2', '#4f46e5', '#0d9488'][$loop->index % 8] }} 0%, {{ ['#4338ca', '#6d28d9', '#047857', '#b45309', '#b91c1c', '#0e7490', '#4338ca', '#0f766e'][$loop->index % 8] }} 100%);">
                                    <i class="bi {{ $portfolio['icon'] }}" style="font-size: 2.5rem; color: white;"></i>
                                </div>
                            </div>
                            @endif
                            <p style="color: var(--text-secondary);">{{ $portfolio['description'] }}</p>
                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <small style="color: var(--text-muted);">Klien</small>
                                    <strong class="d-block">{{ $portfolio['client'] }}</strong>
                                </div>
                                <div class="col-md-6">
                                    <small style="color: var(--text-muted);">Tahun</small>
                                    <strong class="d-block">{{ $portfolio['year'] }}</strong>
                                </div>
                            </div>
                            <div class="mt-3">
                                <small style="color: var(--text-muted); display: block; margin-bottom: 0.5rem;">Teknologi</small>
                                <div class="d-flex flex-wrap gap-2">
                                    @foreach ($portfolio['tech'] as $tech)
                                    <span class="skill-tag">{{ $tech }}</span>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer border-0">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="cta-section" data-aos="fade-up">
    <div class="container text-center">
        <h2 class="mb-3">Tertarik dengan Portfolio Kami?</h2>
        <p class="mb-4 fs-5">Waktunya mewujudkan project Anda bersama SoftImagine.</p>
        <a href="https://wa.me/6281229548403?text=Halo%20SoftImagine!%20Saya%20tertarik%20dengan%20portfolio%20Anda.%20Mohon%20informasi%20lebih%20lanjut." target="_blank" class="btn btn-light btn-lg rounded-pill px-5">
            <i class="bi bi-whatsapp me-2"></i>Hubungi Kami
        </a>
    </div>
</section>

@endsection
