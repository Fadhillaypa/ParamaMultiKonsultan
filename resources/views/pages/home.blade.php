@extends('layouts.app')

@section('content')

{{-- HERO --}}
<section class="relative bg-dark text-white py-28">
    {{-- BACKGROUND GRID --}}
    <div class="absolute inset-0 bg-[url('/img/grid.svg')] opacity-10"></div>

    {{-- GOLD GLOW --}}
    <div class="absolute inset-0 
        bg-[radial-gradient(circle_at_center,rgba(201,166,70,0.08),transparent)]">
    </div>

    <div class="relative max-w-7xl mx-auto px-6 text-center pt-14 py-5">
        <span data-aos="fade-up"
            class="uppercase tracking-widest text-sm text-gold leading-relaxed">
            Konsultan Perencanaan Terdaftar INKINDO
        </span>

        <h1 data-aos="fade-up" data-aos-delay="100"
            class="mt-4 text-4xl md:text-5xl font-bold tracking-tight ">
            Solusi Konsultan Perencanaan Profesional<br>
            <span class="text-gold">Terpercaya & Berstandar Nasional</span>
        </h1>

        <p data-aos="fade-up" data-aos-delay="200"
            class="mt-6 max-w-3xl mx-auto text-slate-300 leading-relaxed text-lg">
            CV. Parama Multi Konsultan hadir membantu perencanaan, pengawasan, 
            dan manajemen proyek konstruksi dengan pendekatan profesional dan terukur.
        </p>

        <div data-aos="fade-up" data-aos-delay="300"
            class="mt-10 flex justify-center gap-4">
            <a href="contact"
               class="inline-block bg-gold text-white font-semibold px-8 py-4 rounded-xl shadow 
                hover:scale-105 hover:bg-dark2 transition hover:shadow-[0_0_25px_rgba(201,166,70,0.9)] 
                border border-gold/20 hover:border-gold">
                Mulai Konsultasi Sekarang
            </a>
        </div>
    </div>
</section>

{{-- TRUST INDICATORS --}}
<section class="bg-dark2 py-20">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">

            <div data-aos="fade-up" data-aos-delay="100"
                class="hover:scale-110 transition">
                <p class="text-3xl font-bold tracking-tight text-white drop-shadow-[0_0_8px_rgba(201,166,70,0.6)]">INKINDO</p>
                <p class="text-sm text-slate-300 leading-relaxed mt-2">Terdaftar Resmi</p>
            </div>

            <div data-aos="fade-up" data-aos-delay="200"
                class="hover:scale-110 transition">
                <p class="text-3xl font-bold tracking-tight text-gold drop-shadow-[0_0_8px_rgba(201,166,70,0.6)]">7+</p>
                <p class="text-sm text-slate-300 leading-relaxed mt-2">Tahun Pengalaman</p>
            </div>

            <div data-aos="fade-up" data-aos-delay="300"
                class="hover:scale-110 transition">
                <p class="text-3xl font-bold tracking-tight text-gold drop-shadow-[0_0_8px_rgba(201,166,70,0.6)]">50+</p>
                <p class="text-sm text-slate-300 leading-relaxed mt-2">Proyek Ditangani</p>
            </div>

            <div data-aos="fade-up" data-aos-delay="400"
                class="hover:scale-110 transition">
                <p class="text-3xl font-bold tracking-tight text-gold drop-shadow-[0_0_8px_rgba(201,166,70,0.6)]">Nasional</p>
                <p class="text-sm text-slate-300 leading-relaxed mt-2">Area Layanan</p>
            </div>

        </div>
    </div>
</section>

{{-- KENAPA MEMILIH KAMI --}}
<section class="bg-dark py-24">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-bold tracking-tight text-gold text-center mb-14">
            Mengapa Memilih Kami?
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

            {{-- CARD --}}
            <div data-aos="fade-up" data-aos-delay="100"
                class="group bg-dark2 p-8 rounded-2xl
                        border border-gold shadow-[0_0_20px_rgba(201,166,70,0.7)]
                        hover:shadow-xl
                        hover:-translate-y-2
                        transition duration-300">

                <div class="w-14 h-14 mb-6 flex items-center justify-center
                            rounded-xl bg-gold text-white
                            group-hover:scale-110 transition">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2.5"
                        viewBox="0 0 24 24">
                        <path d="M12 8v4l3 3"/>
                    </svg>
                </div>

                <h3 class="text-xl font-semibold tracking-tight text-slate-200 mb-3">
                    Tepat Waktu & Terukur
                </h3>

                <p class="text-slate-500 leading-relaxed text-sm">
                    Perencanaan matang, jadwal jelas, dan hasil terukur sesuai standar nasional.
                </p>
            </div>

            {{-- CARD --}}
            <div data-aos="fade-up" data-aos-delay="200"
                class="group bg-dark2 p-8 rounded-2xl
                        border border-gold shadow-[0_0_20px_rgba(201,166,70,0.7)]
                        hover:shadow-xl
                        hover:-translate-y-2
                        transition duration-300">

                <div class="w-14 h-14 mb-6 flex items-center justify-center
                            rounded-xl bg-gold text-white
                            group-hover:scale-110 transition">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2.5"
                        viewBox="0 0 24 24">
                        <path d="M9 12l2 2 4-4"/>
                    </svg>
                </div>

                <h3 class="text-xl font-semibold tracking-tight text-slate-200 mb-3">
                    Berstandar INKINDO
                </h3>

                <p class="text-slate-500 text-sm leading-relaxed">
                    Legal, profesional, dan sesuai regulasi nasional serta internasional.
                </p>
            </div>

            {{-- CARD --}}
            <div data-aos="fade-up" data-aos-delay="300"
                class="group bg-dark2 p-8 rounded-2xl
                        border border-gold shadow-[0_0_20px_rgba(201,166,70,0.7)]
                        hover:shadow-xl
                        hover:-translate-y-2
                        transition duration-300">

                <div class="w-14 h-14 mb-6 flex items-center justify-center
                            rounded-xl bg-gold text-white
                            group-hover:scale-110 transition">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2.5"
                        viewBox="0 0 24 24">
                        <path d="M13 16h-1v-4h-1"/>
                    </svg>
                </div>

                <h3 class="text-xl font-semibold tracking-tight text-slate-200 mb-3">
                    Tim Berpengalaman
                </h3>

                <p class="text-slate-500 text-sm leading-relaxed">
                    Didukung tenaga ahli berpengalaman lintas bidang perencanaan.
                </p>
            </div>

        </div>
    </div>
</section>

{{-- SERVICES --}}
<section id="services" class="bg-dark2 py-24">
    <div class="max-w-7xl mx-auto px-6">

    {{-- Heading --}}
    <div class="text-center max-w-2xl mx-auto mb-14">
        <h2 class="text-4xl font-bold tracking-tight text-gold mb-4">
            Layanan Konsultasi Profesional
        </h2>
        <p class="text-slate-300 leading-relaxed">
            Kami menyediakan berbagai layanan konsultasi teknik untuk
            mendukung perencanaan, pengawasan, dan keberhasilan proyek Anda.
        </p>
    </div>

    {{-- Service Cards --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse ($services as $service)
            <a data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}"
                href="{{ route('services.show', $service) }}"
               class="relative group bg-dark p-6 rounded-xl shadow
                        border-t-4 transition duration-300 
                        hover:-translate-y-2 hover:shadow-xl
                        active:scale-95
                        @switch($service->color)
                            @case('indigo') border-gold @break
                            @case('green') border-gold @break
                            @case('red') border-gold @break
                            @default border-gold
                        @endswitch">

                {{-- OVERLAY --}}
                <div class="absolute inset-0 bg-gold/5 opacity-0 group-hover:opacity-100 transition duration-300 rounded-xl"></div>

                {{-- ICON --}}
                    <div class="relative mb-4
                        @switch($service->color)
                            @case('indigo') text-gold @break
                            @case('green') text-gold @break
                            @case('red') text-gold @break
                            @default text-gold
                        @endswitch
                        group-hover:scale-110 
                        group-hover:rotate-3 transition duration-300">
                    @include('components.service-icon', ['icon' => $service->icon])
                </div>

                {{-- TITLE --}}
                <h3 class="relative text-xl font-semibold tracking-tight text-slate-200 mb-3">
                    {{ $service->title }}
                </h3>

                {{-- DESC --}}
                <p class="relative text-slate-500 text-sm leading-relaxed">
                    {{ $service->description }}
                </p>

                {{-- VALUE POINT --}}
                <ul class="relative mt-4 space-y-2 text-sm text-slate-400">
                    <li>✔ Analisis profesional</li>
                    <li>✔ Pendekatan terukur</li>
                    <li>✔ Tim berpengalaman</li>
                </ul>

                {{-- CTA --}}
                <span class="relative inline-block font-semibold text-gold">
                    Pelajari Layanan →
                    <span class="absolute left-0 -bottom-1 w-0 h-[2px] bg-gold transition-all duration-500 group-hover:w-full"></span>
                </span>
            </a>
        @empty
            <p class="text-center text-slate-300 col-span-3">
                Layanan belum tersedia
            </p>
        @endforelse
    </div>
</div>
</section>

{{-- CARA KERJA --}}
<section class="bg-dark py-24">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-bold tracking-tight text-center text-gold mb-12">
            Alur Kerja Kami
        </h2>

        <div class="grid md:grid-cols-4 gap-8 text-center">
            @foreach(['Konsultasi Awal','Analisis Kebutuhan','Perencanaan Solusi','Pendampingan Proyek'] as $step)
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

{{-- SIAP MULAI? --}}
<section class="bg-dark2 py-24 mb-0 text-slate-200 overflow-hidden">
    <div data-aos="zoom-in"
        class="max-w-4xl mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-3xl text-gold font-bold tracking-tight mb-6">
            Siap Memulai Proyek Anda?
        </h2>

        <p class="text-slate-400 leading-relaxed mb-8">
            Konsultasikan kebutuhan perencanaan Anda bersama tim profesional kami.
        </p>
        <p class="text-sm text-slate-500 leading-relaxed mb-4">
            Atau hubungi kami langsung via WhatsApp
        </p>

        <a href="https://wa.me/6281296990171?text=Halo,%20Saya%20ingin%20konsultasi%20mengenai%20proyek!"
           class="inline-block bg-gold text-white font-semibold
                  px-8 py-4 rounded-xl shadow
                  hover:scale-105 transition  
                  hover:shadow-[0_0_25px_rgba(201,166,70,0.9)]">
            Mulai Konsultasi Sekarang
        </a>
        <p class="text-sm text-slate-400 leading-relaxed mt-3">
            Gratis konsultasi awal • Respon cepat
        </p>
    </div>
</section>


@endsection
