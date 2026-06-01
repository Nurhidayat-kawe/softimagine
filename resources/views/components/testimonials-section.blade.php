<section class="section-padding" id="testimonials">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="section-label"><i class="bi bi-chat-quote"></i> Testimonial</span>
            <h2 class="section-title">Apa Kata Klien</h2>
            <p class="section-subtitle">Testimoni dari klien yang telah mempercayakan project mereka kepada kami.</p>
        </div>
        <div data-aos="fade-up">
            <div class="swiper testimonials-swiper">
                <div class="swiper-wrapper">
                    @foreach ($testimonials as $testimonial)
                    <div class="swiper-slide">
                        <div class="testimonial-card mx-2">
                            <div class="rating">
                                @for ($i = 0; $i < 5; $i++)
                                    <i class="bi bi-star{{ $i < $testimonial['rating'] ? '-fill' : '' }}"></i>
                                @endfor
                            </div>
                            <p class="quote">"{{ $testimonial['quote'] }}"</p>
                            <div class="author">
                                <div class="avatar">{{ $testimonial['avatar'] }}</div>
                                <div class="info">
                                    <h6>{{ $testimonial['name'] }}</h6>
                                    <small>{{ $testimonial['role'] }} — {{ $testimonial['company'] }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-pagination mt-4 position-relative"></div>
            </div>
        </div>
    </div>
</section>
