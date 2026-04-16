@extends('layouts.app')

@section('title', 'Kontak | CV. Parama Multi Konsultan')
@section('meta_description', 'Hubungi CV. Parama Multi Konsultan untuk layanan konsultan perencanaan, arsitektur, dan teknik sipil.')

@section('content')

<section class="bg-dark py-24 relative overflow-hidden">

    {{-- BACKGROUND GLOW --}}
    <div class="absolute inset-0 
        bg-[radial-gradient(circle_at_center,rgba(201,166,70,0.08),transparent)]">
    </div>

    <div class="relative max-w-6xl mx-auto px-6">

        {{-- HEADER --}}
        <div class="text-center mb-16" data-aos="fade-up">
            <h1 class="text-4xl md:text-5xl font-bold text-gold mb-4">
                Hubungi Kami
            </h1>
            <p class="text-slate-300 max-w-2xl mx-auto">
                Kami siap membantu kebutuhan perencanaan dan konsultasi proyek Anda. 
                Hubungi kami melalui kontak berikut.
            </p>
        </div>

        {{-- GRID --}}
        <div class="grid md:grid-cols-2 gap-10">

            {{-- LEFT: INFO --}}
            <div 
                data-aos="fade-right"
                class="bg-dark2 p-8 rounded-2xl border border-gold/20 
                       shadow-[0_0_20px_rgba(201,166,70,0.2)] space-y-5">

                <div>
                    <p class="text-gold font-semibold">Alamat</p>
                    <p class="text-slate-300 text-sm">
                        Perum Griya Gading Indah A-10, Kel. Pandean, Kec. Taman, Kota Madiun, Jawa Timur
                    </p>
                </div>

                <div>
                    <p class="text-gold font-semibold">Email</p>
                    <p class="text-slate-300 text-sm">
                        parama.multikonsult@gmail.com
                    </p>
                </div>

                <div>
                    <p class="text-gold font-semibold">Telepon</p>
                    <p class="text-slate-300 text-sm">
                        0812-9699-0171
                    </p>
                </div>

                <div class="pt-4 border-t border-white/10">
                    <p class="text-gold font-semibold mb-2">Jam Operasional</p>
                    <p class="text-slate-300 text-sm">
                        Senin – Jumat<br>
                        08.00 – 15.00 WIB
                    </p>
                    <p class="text-slate-300 text-sm mt-3">
                        Sabtu<br>
                        08.00 – 13.00 WIB
                    </p>
                </div>

            </div>

            {{-- RIGHT: MAP --}}
            <div 
                data-aos="fade-left"
                class="rounded-2xl overflow-hidden shadow-xl">

                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.3389778834644!2d111.5314276!3d-7.6466499!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79bf88bdd30bb5%3A0x6ba07e20baaf5c43!2sPARAMA%20Multi%20Konsultan!5e0!3m2!1sid!2sid!4v1774845387694!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                            style="border:0;" allowfullscreen loading="lazy"
                    class="w-full h-[300px] md:h-full border-0">
                </iframe>

            </div>

        </div>

        {{-- CTA --}}
        <div class="text-center mt-16" data-aos="fade-up" data-aos-delay="200">
            <a href="https://wa.me/6281296990171"
               class="inline-block bg-gold text-black font-semibold px-8 py-4 rounded-xl
                      hover:scale-105 transition
                      hover:shadow-[0_0_25px_rgba(201,166,70,0.8)]">

                Hubungi via WhatsApp
            </a>
        </div>

    </div>
</section>

@endsection