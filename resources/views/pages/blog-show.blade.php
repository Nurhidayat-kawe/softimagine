@extends('layouts.app')

@section('title', $blog['title'] . ' - SoftImagine')
@section('meta_description', Str::limit($blog['excerpt'], 160))

@section('content')

<section class="page-header" style="padding: 7rem 0 3rem;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <span class="badge bg-light text-dark mb-3 px-3 py-2">{{ $blog['category'] }}</span>
                <h1 data-aos="fade-up">{{ $blog['title'] }}</h1>
                <div class="text-white-50 mt-3" data-aos="fade-up" data-aos-delay="100">
                    <small>
                        <i class="bi bi-person me-1"></i>{{ $blog['author'] }}
                        <span class="ms-3"><i class="bi bi-calendar me-1"></i>{{ \Carbon\Carbon::parse($blog['date'])->format('d M Y') }}</span>
                        <span class="ms-3"><i class="bi bi-clock me-1"></i>{{ $blog['read_time'] }}</span>
                    </small>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <article data-aos="fade-up">
                    <div class="blog-detail-content">
                        {!! $blog['content'] !!}
                    </div>

                    <div class="d-flex flex-wrap gap-2 mt-4 pt-4 border-top" style="border-color: var(--border-color);">
                        <span class="fw-bold me-2">Bagikan:</span>
                        <a href="https://wa.me/?text={{ urlencode($blog['title'] . ' - ' . route('blog.show', $blog['slug'])) }}" target="_blank" class="btn btn-sm btn-outline-success rounded-pill">
                            <i class="bi bi-whatsapp me-1"></i>WA
                        </a>
                        <a href="https://t.me/share/url?url={{ route('blog.show', $blog['slug']) }}&text={{ urlencode($blog['title']) }}" target="_blank" class="btn btn-sm btn-outline-info rounded-pill">
                            <i class="bi bi-telegram me-1"></i>Telegram
                        </a>
                        <a href="mailto:?subject={{ urlencode($blog['title']) }}&body={{ urlencode('Baca artikel ini: ' . route('blog.show', $blog['slug'])) }}" class="btn btn-sm btn-outline-secondary rounded-pill">
                            <i class="bi bi-envelope me-1"></i>Email
                        </a>
                    </div>
                </article>

                <div class="mt-5 pt-4 border-top" style="border-color: var(--border-color);">
                    <div class="d-flex align-items-center gap-3 p-4 rounded-3" style="background: var(--bg-secondary);">
                        <div class="flex-shrink-0">
                            <div class="d-flex align-items-center justify-content-center rounded-circle" style="width: 64px; height: 64px; background: var(--primary); color: white; font-weight: 700; font-size: 1.5rem;">
                                TS
                            </div>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">Tim SoftImagine</h6>
                            <small class="text-secondary">Kami adalah tim pengembang aplikasi yang berfokus pada Laravel, Kotlin, dan Java SE. Berpengalaman dalam membangun berbagai aplikasi web, mobile, dan desktop.</small>
                        </div>
                    </div>
                </div>

                @if(count($related) > 0)
                <div class="mt-5">
                    <h4 class="fw-bold mb-4">Artikel Terkait</h4>
                    <div class="row g-3">
                        @foreach ($related as $item)
                        <div class="col-md-4">
                            <div class="blog-card">
                                <div class="blog-img" style="height: 130px; background: linear-gradient(135deg, {{ ['#2563eb', '#7c3aed', '#059669'][$loop->index % 3] }} 0%, {{ ['#1d4ed8', '#6d28d9', '#047857'][$loop->index % 3] }} 100%);">
                                    <span class="category" style="font-size: 0.7rem;">{{ $item['category'] }}</span>
                                    <i class="bi {{ $item['image'] }}" style="font-size: 1.5rem;"></i>
                                </div>
                                <div class="blog-body p-3">
                                    <small class="text-muted">{{ \Carbon\Carbon::parse($item['date'])->format('d M Y') }}</small>
                                    <h6 class="mt-1" style="font-size: 0.9rem;">{{ $item['title'] }}</h6>
                                    <a href="{{ route('blog.show', $item['slug']) }}" class="btn btn-sm btn-outline-primary rounded-pill mt-1">Baca</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>

<section class="cta-section" data-aos="fade-up">
    <div class="container text-center">
        <h2 class="mb-3">Butuh Bantuan Pengembangan Aplikasi?</h2>
        <p class="mb-4 fs-5">Konsultasikan kebutuhan Anda dengan tim ahli kami.</p>
        <a href="https://wa.me/6281229548403?text=Halo%20SoftImagine!%20Saya%20butuh%20bantuan%20pengembangan%20aplikasi." target="_blank" class="btn btn-light btn-lg rounded-pill px-5">
            <i class="bi bi-whatsapp me-2"></i>Konsultasi Gratis
        </a>
    </div>
</section>

@endsection
