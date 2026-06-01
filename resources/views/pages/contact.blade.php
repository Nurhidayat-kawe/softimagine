@extends('layouts.app')

@section('title', 'Kontak - SoftImagine')
@section('meta_description', 'Hubungi SoftImagine untuk konsultasi gratis pembuatan aplikasi Web, Android, dan Desktop. Tersedia WhatsApp dan Telegram.')

@section('content')

<section class="page-header">
    <div class="container text-center">
        <h1 data-aos="fade-up">Hubungi Kami</h1>
        <p class="fs-5" data-aos="fade-up" data-aos-delay="100">Ada pertanyaan? Kami siap membantu Anda</p>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-5" data-aos="fade-right">
                <span class="section-label"><i class="bi bi-chat-dots"></i> Kontak</span>
                <h2 class="section-title">Get In Touch</h2>
                <p style="color: var(--text-secondary); font-size: 1rem; line-height: 1.7; margin-bottom: 1.5rem;">Jangan ragu untuk menghubungi kami. Diskusikan project impian Anda dan dapatkan konsultasi gratis.</p>

                <div class="row g-3">
                    <div class="col-12">
                        <div class="contact-info-card">
                            <div class="icon-circle">
                                <i class="bi bi-whatsapp"></i>
                            </div>
                            <h6>Marketing</h6>
                            <a href="https://wa.me/6281391347956" target="_blank" style="font-size: 1.1rem; font-weight: 600; color: var(--primary);">0813-9134-7956</a>
                            <p class="mb-0 mt-1" style="font-size: 0.85rem; color: var(--text-muted);">Jatmiko I — Konsultasi & Penawaran</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="contact-info-card">
                            <div class="icon-circle">
                                <i class="bi bi-whatsapp"></i>
                            </div>
                            <h6>Analis & Programmer</h6>
                            <a href="https://wa.me/6281229548403" target="_blank" style="font-size: 1.1rem; font-weight: 600; color: var(--primary);">0812-2954-8403</a>
                            <p class="mb-0 mt-1" style="font-size: 0.85rem; color: var(--text-muted);">Nurhidayat — Analisis & Pengembangan</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="contact-info-card">
                            <div class="icon-circle">
                                <i class="bi bi-telegram"></i>
                            </div>
                            <h6>Telegram</h6>
                            <a href="https://t.me/6281229548403" target="_blank" style="font-size: 1.1rem; font-weight: 600; color: var(--primary);">0812-2954-8403</a>
                            <p class="mb-0 mt-1" style="font-size: 0.85rem; color: var(--text-muted);">Alternatif chat via Telegram</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="contact-info-card">
                            <div class="icon-circle">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <h6>Email</h6>
                            <a href="mailto:softtegal@gmail.com" style="font-size: 1.1rem; font-weight: 600; color: var(--primary);">softtegal@gmail.com</a>
                            <p class="mb-0 mt-1" style="font-size: 0.85rem; color: var(--text-muted);">Respons dalam 1x24 jam</p>
                        </div>
                    </div>
                </div>

                <div class="mt-4 p-4 rounded-3" style="background: var(--bg-secondary); border: 1px solid var(--border-color);">
                    <h6 class="fw-bold mb-2"><i class="bi bi-clock-history me-2" style="color: var(--primary);"></i>Jam Operasional</h6>
                    <div class="d-flex justify-content-between" style="font-size: 0.9rem; color: var(--text-secondary);">
                        <span>Senin - Jumat</span>
                        <span>08:00 - 17:00</span>
                    </div>
                    <div class="d-flex justify-content-between" style="font-size: 0.9rem; color: var(--text-secondary); margin-top: 0.35rem;">
                        <span>Sabtu</span>
                        <span>08:00 - 14:00</span>
                    </div>
                    <div class="d-flex justify-content-between" style="font-size: 0.9rem; color: var(--text-secondary); margin-top: 0.35rem;">
                        <span>Minggu</span>
                        <span>Libur</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-7" data-aos="fade-left">
                <div class="contact-form">
                    <h4 class="fw-bold mb-4">Kirim Pesan</h4>
                    <form action="{{ route('contact.send') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label>Nama Lengkap</label>
                                <input type="text" name="name" class="form-control" placeholder="Masukkan nama Anda" value="{{ old('name') }}" required>
                                @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="col-md-6">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Masukkan email Anda" value="{{ old('email') }}" required>
                                @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="col-md-6">
                                <label>No. Telepon</label>
                                <input type="tel" name="phone" class="form-control" placeholder="(opsional)" value="{{ old('phone') }}">
                                @error('phone') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="col-md-6">
                                <label>Subjek</label>
                                <input type="text" name="subject" class="form-control" placeholder="Subjek pesan" value="{{ old('subject') }}" required>
                                @error('subject') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="col-12">
                                <label>Pesan</label>
                                <textarea name="message" class="form-control" rows="5" placeholder="Tulis pesan Anda..." required>{{ old('message') }}</textarea>
                                @error('message') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-lg w-100">
                                    <i class="bi bi-send me-2"></i>Kirim Pesan
                                </button>
                            </div>
                        </div>
                    </form>
                    @if(session('success'))
                    <div class="alert alert-success mt-3 d-flex align-items-center gap-2">
                        <i class="bi bi-check-circle-fill fs-5"></i>
                        <div>{{ session('success') }}</div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding pt-0">
    <div class="container">
        <div class="rounded-4 overflow-hidden" style="border: 1px solid var(--border-color);" data-aos="fade-up">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.60912427899!2d106.773351!3d-6.229382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e1e1b1b1b1%3A0x0!2sJakarta!5e0!3m2!1sid!2sid!4v1" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>

<section class="cta-section" data-aos="fade-up">
    <div class="container text-center">
        <h2 class="mb-3">Lebih Cepat via WhatsApp?</h2>
        <p class="mb-4 fs-5">Klik tombol di bawah untuk chat langsung dengan tim kami.</p>
        <a href="https://wa.me/6281229548403?text=Halo%20SoftImagine!%20Saya%20ingin%20konsultasi%20gratis." target="_blank" class="btn btn-light btn-lg rounded-pill px-5">
            <i class="bi bi-whatsapp me-2"></i>Chat WhatsApp
        </a>
    </div>
</section>

@endsection
