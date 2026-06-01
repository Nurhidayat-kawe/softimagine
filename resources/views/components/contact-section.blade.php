<section class="section-padding bg-body-tertiary" id="contact">
    <div class="container">
        <div class="row g-5 align-items-start">
            <div class="col-lg-5" data-aos="fade-right">
                <span class="section-label"><i class="bi bi-envelope"></i> Kontak</span>
                <h2 class="section-title">Hubungi Kami</h2>
                <p class="section-subtitle text-start mb-4">Ada pertanyaan atau ingin diskusi? Jangan ragu untuk menghubungi kami.</p>
                <div class="row g-3">
                    <div class="col-12">
                        <div class="contact-info-card">
                            <div class="icon-circle">
                                <i class="bi bi-whatsapp"></i>
                            </div>
                            <h6>Marketing</h6>
                            <a href="https://wa.me/6281391347956" target="_blank">0813-9134-7956</a>
                            <small class="d-block text-muted" style="font-size: 0.8rem;">Jatmiko I</small>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="contact-info-card">
                            <div class="icon-circle">
                                <i class="bi bi-whatsapp"></i>
                            </div>
                            <h6>Analis & Programmer</h6>
                            <a href="https://wa.me/6281229548403" target="_blank">0812-2954-8403</a>
                            <small class="d-block text-muted" style="font-size: 0.8rem;">Nurhidayat</small>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="contact-info-card">
                            <div class="icon-circle">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <h6>Email</h6>
                            <a href="mailto:softtegal@gmail.com">softtegal@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7" data-aos="fade-left">
                <div class="contact-form">
                    <form action="{{ route('contact.send') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label>Nama Lengkap</label>
                                <input type="text" name="name" class="form-control" placeholder="Masukkan nama Anda" required>
                            </div>
                            <div class="col-md-6">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Masukkan email Anda" required>
                            </div>
                            <div class="col-md-6">
                                <label>No. Telepon</label>
                                <input type="tel" name="phone" class="form-control" placeholder="(opsional)">
                            </div>
                            <div class="col-md-6">
                                <label>Subjek</label>
                                <input type="text" name="subject" class="form-control" placeholder="Subjek pesan" required>
                            </div>
                            <div class="col-12">
                                <label>Pesan</label>
                                <textarea name="message" class="form-control" rows="5" placeholder="Tulis pesan Anda..." required></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-lg w-100">
                                    <i class="bi bi-send me-2"></i>Kirim Pesan
                                </button>
                            </div>
                        </div>
                    </form>
                    @if(session('success'))
                    <div class="alert alert-success mt-3">
                        <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
