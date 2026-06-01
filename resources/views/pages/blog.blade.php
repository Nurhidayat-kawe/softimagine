@extends('layouts.app')

@section('title', 'Blog - SoftImagine')
@section('meta_description', 'Baca artikel, tutorial, dan tips terbaru seputar pengembangan aplikasi web, android, desktop, dan SaaS dari SoftImagine.')

@section('content')

<section class="page-header">
    <div class="container text-center">
        <h1 data-aos="fade-up">Blog</h1>
        <p class="fs-5" data-aos="fade-up" data-aos-delay="100">Artikel, tutorial, dan tips seputar pengembangan aplikasi</p>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="row g-4">
            @forelse ($blogs as $blog)
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->index * 50 }}">
                <div class="blog-card">
                    <div class="blog-img" style="background: linear-gradient(135deg, {{ ['#2563eb', '#7c3aed', '#059669', '#d97706', '#dc2626', '#0891b2'][$loop->index % 6] }} 0%, {{ ['#1d4ed8', '#6d28d9', '#047857', '#b45309', '#b91c1c', '#0e7490'][$loop->index % 6] }} 100%);">
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
            @empty
            <div class="col-12 text-center py-5">
                <i class="bi bi-journal-text" style="font-size: 3rem; color: var(--text-muted);"></i>
                <p class="text-muted mt-3">Belum ada artikel tersedia.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

<section class="cta-section" data-aos="fade-up">
    <div class="container text-center">
        <h2 class="mb-3">Dapatkan Update Artikel Terbaru</h2>
        <p class="mb-4 fs-5">Ikuti kami untuk mendapatkan tips dan tutorial pengembangan aplikasi.</p>
        <a href="https://wa.me/6281229548403?text=Halo%20SoftImagine!%20Saya%20ingin%20berlangganan%20info%20artikel%20terbaru." target="_blank" class="btn btn-light btn-lg rounded-pill px-5">
            <i class="bi bi-whatsapp me-2"></i>Hubungi Kami via WA
        </a>
    </div>
</section>

@endsection
