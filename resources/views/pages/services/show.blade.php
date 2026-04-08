@extends('layouts.app')

@section('title', $service->title . ' - Jasa Konsultan Profesional')

@section('meta_description', $service->description)

@section('content')
{{-- Main Content --}}

{{-- HERO --}}
<section class="relative bg-dark text-white py-24 overflow-hidden">

    {{-- BACKGROUND --}}
    <div class="absolute inset-0 bg-[url('/img/grid.svg')] opacity-10"></div>
    <div class="absolute inset-0 
        bg-[radial-gradient(circle_at_top,rgba(201,166,70,0.08),transparent)]"></div>

    <div class="relative max-w-5xl mx-auto px-6 text-center">

        <h1 class="text-4xl md:text-5xl font-bold tracking-tight mb-6"
            data-aos="fade-up">
            {{ $service->title }}
        </h1>

        <p class="text-slate-300 leading-relaxed text-lg max-w-2xl mx-auto"
            data-aos="fade-up" data-aos-delay="100">
            {{ $service->description }}
        </p>

        <div class="mt-10"
            data-aos="fade-up" data-aos-delay="200">
            <a href="https://wa.me/6281296990171?text=Saya%20ingin%20konsultasi%20{{ urlencode($service->title) }}"
               class="inline-block bg-gold text-white font-semibold px-8 py-4 rounded-xl
                      hover:scale-105 transition
                      shadow-[0_0_25px_rgba(201,166,70,0.5)]">
                Konsultasi Sekarang
            </a>
        </div>

    </div>
</section>

{{-- TRUST BADGE --}}
<section class="bg-dark2 py-10 border-y border-white/5">
    <div class="max-w-6xl mx-auto px-6 flex flex-wrap justify-center gap-10 text-center">

        <div>
            <p class="text-2xl font-bold text-gold" data-aos="fade-up">INKINDO</p>
            <p class="text-xs text-slate-400" data-aos="fade-up" data-aos-delay="100">Terdaftar Resmi</p>
        </div>

        <div>
            <p class="text-2xl font-bold text-gold" data-aos="fade-up" data-aos-delay="100">7+</p>
            <p class="text-xs text-slate-400" data-aos="fade-up" data-aos-delay="200">Tahun Pengalaman</p>
        </div>

        <div>
            <p class="text-2xl font-bold text-gold" data-aos="fade-up" data-aos-delay="200">50+</p>
            <p class="text-xs text-slate-400" data-aos="fade-up" data-aos-delay="300">Proyek</p>
        </div>

    </div>
</section>

{{-- HIGHLIGHT / VALUE --}}
<section class="bg-dark2 py-20">
    <div class="max-w-6xl mx-auto px-6">

        <div class="grid md:grid-cols-3 gap-8">

            <div class="bg-dark p-6 rounded-xl border border-gold/20"
                data-aos="fade-up">
                <h3 class="text-gold font-semibold mb-2">Profesional</h3>
                <p class="text-slate-400 text-sm">
                    Dikerjakan oleh tenaga ahli berpengalaman.
                </p>
            </div>

            <div class="bg-dark p-6 rounded-xl border border-gold/20"
                data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-gold font-semibold mb-2">Terukur</h3>
                <p class="text-slate-400 text-sm">
                    Menggunakan metode yang jelas dan terstandar.
                </p>
            </div>

            <div class="bg-dark p-6 rounded-xl border border-gold/20"
                data-aos="fade-up" data-aos-delay="200">
                <h3 class="text-gold font-semibold mb-2">Terpercaya</h3>
                <p class="text-slate-400 text-sm">
                    Berstandar INKINDO dan pengalaman nasional.
                </p>
            </div>

        </div>

    </div>
</section>

{{-- DETAIL SPLIT --}}
<section class="bg-dark py-20">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

        {{-- TEXT --}}
        <div>
            <h2 class="text-3xl font-bold text-gold mb-6"
                data-aos="fade-up">
                Tentang Layanan
            </h2>

            <div class="text-slate-300 leading-relaxed space-y-4"
                data-aos="fade-up" data-aos-delay="100">
                {!! $service->content ?? $service->long_description !!}
            </div>
        </div>

        {{-- VISUAL --}}
        <div class="relative">
            <div class="absolute inset-0 
                bg-[radial-gradient(circle,rgba(201,166,70,0.15),transparent)]">
            </div>

            <div class="bg-dark2 p-10 rounded-2xl border border-gold/30 
                        shadow-[0_0_30px_rgba(201,166,70,0.15)]">

                <h3 class="text-white font-semibold mb-4"
                    data-aos="fade-up">
                    Kenapa layanan ini penting?
                </h3>

                @forelse($service->benefits ?? [] as $item)
                    <p class="text-slate-300 space-y-3 font-medium text-sm"
                        data-aos="fade-up" data-aos-delay="100">
                        ✔ {{ $item }}
                    </p>
                @empty
                    <p class="text-slate-400 text-center col-span-2">
                        Belum ada keunggulan tersedia
                    </p>
                @endforelse
            </div>
        </div>

    </div>
</section>

{{-- PROCESS MINI --}}
<section class="bg-dark2 py-20">
    <div class="max-w-6xl mx-auto px-6 text-center">

        <h2 class="text-3xl font-bold text-gold mb-12">
            Alur Layanan
        </h2>

        <div class="grid md:grid-cols-4 gap-8 text-center">
            @foreach(['Konsultasi','Analisis','Perencanaan','Eksekusi'] as $step)
                <div data-aos="fade-right"
                    data-aos-delay="{{ $loop->iteration * 150 }}"
                    class="relative flex flex-col items-center group
                    transition duration-300 hover:-translate-y-2">

                    {{-- BULATAN --}}
                    <div class="w-12 h-12 rounded-full bg-gold text-white flex items-center justify-center font-bold mb-4 z-10
                                transition duration-300
                                group-hover:scale-110
                                hover:-translate-y-2 hover:shadow-xl
                                group-hover:shadow-[0_0_15px_rgba(201,166,70,0.8)]" style="transition-delay: {{ $loop->iteration * 100 }}ms">
                        {{ $loop->iteration }}
                    </div>

                    {{-- GARIS --}}
                    @if(!$loop->last)
                        <div class="hidden md:block absolute top-6 left-1/2 translate-x-16 w-[calc(80%-3rem)] h-[2px] bg-gold 
                                    opacity-0 group-hover:opacity-100 transition duration-500"></div>
                    @endif

                    {{-- TEXT --}}
                    <p class="font-semibold text-slate-200 leading-relaxed">
                        {{ $step }}
                    </p>

                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- FAQ --}}
<section class="bg-dark py-20">
    <div class="max-w-4xl mx-auto px-6">

        <h2 class="text-3xl font-bold text-gold mb-10 text-center">
            Pertanyaan Umum
        </h2>

        <div class="space-y-4">

            @foreach([
                ['q' => 'Berapa lama proses layanan?', 'a' => 'Tergantung kompleksitas proyek.'],
                ['q' => 'Apakah bisa online?', 'a' => 'Ya, bisa online maupun offline.'],
                ['q' => 'Apakah ada konsultasi awal?', 'a' => 'Ya, kami menyediakan konsultasi awal.']
            ] as $faq)

            <div class="bg-dark2 border border-white/10 rounded-xl overflow-hidden">

                <button onclick="toggleFAQ(this)"
                        class="w-full text-left p-5 flex justify-between items-center text-white">

                    <span>{{ $faq['q'] }}</span>
                    <span class="text-gold">+</span>

                </button>

                <div class="hidden px-5 pb-5 text-slate-400 text-sm">
                    {{ $faq['a'] }}
                </div>

            </div>

            @endforeach

        </div>

    </div>
</section>

{{-- CTA (WA langsung) --}}
<a href="https://wa.me/6281296990171?text=Saya%20ingin%20konsultasi%20{{ urlencode($service->title) }}"
   class="fixed bottom-6 left-6 bg-gold text-white px-6 py-3 rounded-full shadow-lg
          hover:scale-110 transition z-50">
    💬 Konsultasi
</a>
<script>
function toggleFAQ(button) {
    const content = button.nextElementSibling;
    content.classList.toggle('hidden');

    const icon = button.querySelector('span:last-child');
    icon.textContent = content.classList.contains('hidden') ? '+' : '-';
}
</script>

@endsection
