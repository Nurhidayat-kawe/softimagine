@extends('layouts.app')

@section('title', 'SoftImagine - Solusi Aplikasi Web, Android & Desktop')

@section('content')

    @include('components.hero-section')

    @include('components.services-section')

    @include('components.portfolio-section')

    @include('components.testimonials-section')

    <section class="section-padding bg-body-tertiary" data-aos="fade-up">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Artikel Terbaru</h2>
                <p class="section-subtitle">Tips, tutorial, dan informasi terbaru seputar dunia pengembangan aplikasi.</p>
            </div>
            <div class="row g-4">
                @foreach ($blogs->take(3) as $blog)
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <div class="blog-card">
                        <div class="blog-img" style="background: linear-gradient(135deg, {{ ['#2563eb', '#7c3aed', '#059669'][$loop->index ?? 0] }} 0%, {{ ['#1d4ed8', '#6d28d9', '#047857'][$loop->index ?? 0] }} 100%);">
                            <span class="category">{{ $blog['category'] }}</span>
                            <i class="bi {{ $blog['image'] }}"></i>
                        </div>
                        <div class="blog-body">
                            <div class="meta">
                                <i class="bi bi-calendar me-1"></i>{{ \Carbon\Carbon::parse($blog['date'])->format('d M Y') }}
                                <span class="ms-2"><i class="bi bi-clock me-1"></i>{{ $blog['read_time'] }}</span>
                            </div>
                            <h6>{{ $blog['title'] }}</h6>
                            <p>{{ $blog['excerpt'] }}</p>
                            <a href="{{ route('blog.show', $blog['slug']) }}" class="btn btn-sm btn-outline-primary rounded-pill">
                                Baca Selengkapnya <i class="bi bi-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-center mt-4">
                <a href="{{ route('blog') }}" class="btn btn-outline-primary btn-lg rounded-pill px-4">
                    <i class="bi bi-journal-text me-2"></i>Lihat Semua Artikel
                </a>
            </div>
        </div>
    </section>

    <section class="cta-section" data-aos="fade-up">
        <div class="container text-center">
            <h2 class="mb-3">Siap Wujudkan Aplikasi Impian Anda?</h2>
            <p class="mb-4 fs-5">Konsultasikan kebutuhan Anda dengan tim kami secara gratis.</p>
            <a href="https://wa.me/6281229548403?text=Halo%20SoftImagine!%20Saya%20ingin%20konsultasi%20gratis%20untuk%20pembuatan%20aplikasi." target="_blank" class="btn btn-light btn-lg rounded-pill px-5">
                <i class="bi bi-whatsapp me-2"></i>Hubungi Kami via WhatsApp
            </a>
        </div>
    </section>

@endsection
