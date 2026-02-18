@extends('layouts.app')

@section('content')

{{-- HERO --}}
<section class="relative bg-gradient-to-br from-slate-900 to-slate-800 text-white py-28">
    <div class="absolute inset-0 bg-[url('/img/grid.svg')] opacity-10"></div>

    <div class="relative max-w-7xl mx-auto px-6 text-center pt-14 py-5">
        <span class="uppercase tracking-widest text-sm text-blue-400">
            Konsultan Perencanaan Terdaftar INKINDO
        </span>

        <h1 class="mt-4 text-4xl md:text-5xl font-bold leading-tight">
            Solusi Perencanaan Terpadu<br>
            <span class="text-blue-400">Profesional & Berstandar Nasional</span>
        </h1>

        <p class="mt-6 max-w-3xl mx-auto text-slate-300 text-lg">
            CV. Parama Multi Konsultan menghadirkan layanan perencanaan
            yang presisi, terukur, dan berorientasi pada kualitas jangka panjang.
        </p>

        <div class="mt-10 flex justify-center gap-4">
            <a href="#services"
               class="inline-block bg-blue-600 text-white font-semibold px-8 py-4 rounded-xl shadow 
               hover:scale-105 hover:bg-blue-500 transition">
                Lihat Layanan
            </a>

            <a href="contact"
               class="inline-block border border-white/30 px-8 py-4 rounded-xl shadow hover:scale-105
                      hover:bg-white hover:text-slate-900 transition">
                Konsultasi
            </a>
        </div>
    </div>
</section>

{{-- TRUST INDICATORS --}}
<section class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">

            <div>
                <p class="text-3xl font-bold text-blue-600">INKINDO</p>
                <p class="text-sm text-gray-500 mt-2">Terdaftar Resmi</p>
            </div>

            <div>
                <p class="text-3xl font-bold text-gray-800">7+</p>
                <p class="text-sm text-gray-500 mt-2">Tahun Pengalaman</p>
            </div>

            <div>
                <p class="text-3xl font-bold text-gray-800">50+</p>
                <p class="text-sm text-gray-500 mt-2">Proyek Ditangani</p>
            </div>

            <div>
                <p class="text-3xl font-bold text-gray-800">Nasional</p>
                <p class="text-sm text-gray-500 mt-2">Area Layanan</p>
            </div>

        </div>
    </div>
</section>

{{-- ABOUT US --}}
<section class="relative bg-gradient-to-br from-slate-900 to-slate-800 text-white py-20">
    <div class="max-w-5xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-6">
            Tentang CV. Parama Multi Konsultan
        </h2>
        <p class="text-gray-300 leading-relaxed">
            CV. Parama Multi Konsultan adalah perusahaan konsultan perencanaan
            terdaftar INKINDO yang berfokus pada layanan profesional,
            berstandar nasional dan internasional.
        </p>
    </div>
</section>

{{-- BENEFIT LOGIN --}}
<section class="relative bg-gradient-to-br from-slate-900 to-slate-800 text-white py-16">
    <div class="max-w-6xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-4">
            Benefit Klien Terdaftar
        </h2>
        <p class="mb-10 text-blue-100">
            Dapatkan akses eksklusif setelah login
        </p>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white/10 p-6 rounded-xl">
                📁 Akses Dokumen Proyek
            </div>
            <div class="bg-white/10 p-6 rounded-xl">
                📊 Monitoring Progress
            </div>
            <div class="bg-white/10 p-6 rounded-xl">
                💬 Konsultasi Langsung
            </div>
        </div>

        @guest
            <a href="{{ route('auth.google') }}"
               class="inline-block border border-white/30 px-8 py-4 mt-8 rounded-xl shadow hover:scale-105
                      hover:bg-white hover:text-slate-900 transition">
                Login untuk Akses Klien
            </a>
        @endguest
    </div>
</section>

{{-- SERVICES --}}

<section id="services" class="bg-slate-50 py-20">
    <div class="max-w-7xl mx-auto px-6">

    {{-- Heading --}}
    <div class="text-center max-w-2xl mx-auto mb-14">
        <h2 class="text-4xl font-bold text-slate-900 mb-4">
            Layanan Konsultasi Profesional
        </h2>
        <p class="text-slate-600">
            Kami menyediakan berbagai layanan konsultasi teknik untuk
            mendukung perencanaan, pengawasan, dan keberhasilan proyek Anda.
        </p>
    </div>

    {{-- Service Cards --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse ($services as $service)
            <a href="{{ route('services.show', $service->id) }}"
               class="group bg-white p-6 rounded-xl shadow
                        hover:shadow-xl transition
                        border-t-4
                        @switch($service->color)
                            @case('indigo') border-indigo-500 @break
                            @case('green') border-green-600 @break
                            @case('red') border-red-600 @break
                        @endswitch">

                    <div class="mb-4
                        @switch($service->color)
                            @case('indigo') text-indigo-600 @break
                            @case('green') text-green-600 @break
                            @case('red') text-red-600 @break
                            @default text-gray-600
                        @endswitch
                        group-hover:scale-110 transition">
                    @include('components.service-icon', ['icon' => $service->icon])
                </div>

                <h3 class="text-xl font-semibold text-slate-900 mb-3">
                    {{ $service->title }}
                </h3>

                <p class="text-slate-600 text-sm leading-relaxed">
                    {{ $service->description }}
                </p>

                <span class="inline-block mt-6 text-sm font-semibold text-blue-600 group-hover:underline">
                    Lihat Detail →
                </span>
            </a>
        @empty
            <p class="text-center text-gray-500 col-span-3">
                Layanan belum tersedia
            </p>
        @endforelse
    </div>
</div>
</section>


{{-- KENAPA MEMILIH KAMI --}}
<section class="bg-gray-50 py-12">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-14">
            Mengapa Memilih Kami?
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

            {{-- CARD --}}
            <div class="group bg-white p-8 rounded-2xl
                        border border-gray-100
                        shadow-md hover:shadow-xl
                        hover:-translate-y-2
                        transition duration-300">

                <div class="w-14 h-14 mb-6 flex items-center justify-center
                            rounded-xl bg-amber-600 text-white
                            group-hover:scale-110 transition">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2.5"
                        viewBox="0 0 24 24">
                        <path d="M12 8v4l3 3"/>
                    </svg>
                </div>

                <h3 class="text-xl font-semibold mb-3">
                    Tepat Waktu & Terukur
                </h3>

                <p class="text-gray-600 text-sm leading-relaxed">
                    Perencanaan matang, jadwal jelas, dan hasil terukur sesuai standar nasional.
                </p>
            </div>

            {{-- CARD --}}
            <div class="group bg-white p-8 rounded-2xl
                        border border-gray-100
                        shadow-md hover:shadow-xl
                        hover:-translate-y-2
                        transition duration-300">

                <div class="w-14 h-14 mb-6 flex items-center justify-center
                            rounded-xl bg-emerald-600 text-white
                            group-hover:scale-110 transition">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2.5"
                        viewBox="0 0 24 24">
                        <path d="M9 12l2 2 4-4"/>
                    </svg>
                </div>

                <h3 class="text-xl font-semibold mb-3">
                    Berstandar INKINDO
                </h3>

                <p class="text-gray-600 text-sm leading-relaxed">
                    Legal, profesional, dan sesuai regulasi nasional serta internasional.
                </p>
            </div>

            {{-- CARD --}}
            <div class="group bg-white p-8 rounded-2xl
                        border border-gray-100
                        shadow-md hover:shadow-xl
                        hover:-translate-y-2
                        transition duration-300">

                <div class="w-14 h-14 mb-6 flex items-center justify-center
                            rounded-xl bg-violet-600 text-white
                            group-hover:scale-110 transition">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2.5"
                        viewBox="0 0 24 24">
                        <path d="M13 16h-1v-4h-1"/>
                    </svg>
                </div>

                <h3 class="text-xl font-semibold mb-3">
                    Konsultasi Fleksibel
                </h3>

                <p class="text-gray-600 text-sm leading-relaxed">
                    Diskusi online / offline, cepat tanggap, dan fokus solusi terbaik.
                </p>
            </div>

        </div>
    </div>
</section>


{{-- KEUNGGULAN KAMI --}}
<section class="bg-slate-50 py-20">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-14">
            Keunggulan Kami
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

            <div class="bg-white p-8 rounded-xl border hover:border-blue-600 transition">
                <h3 class="font-semibold text-lg mb-3">
                    Pendekatan Profesional
                </h3>
                <p class="text-gray-600 text-sm">
                    Setiap proyek dianalisis secara komprehensif dengan metodologi terukur.
                </p>
            </div>

            <div class="bg-white p-8 rounded-xl border hover:border-blue-600 transition">
                <h3 class="font-semibold text-lg mb-3">
                    Kepatuhan Regulasi
                </h3>
                <p class="text-gray-600 text-sm">
                    Seluruh perencanaan mengacu pada standar nasional dan peraturan berlaku.
                </p>
            </div>

            <div class="bg-white p-8 rounded-xl border hover:border-blue-600 transition">
                <h3 class="font-semibold text-lg mb-3">
                    Tim Berpengalaman
                </h3>
                <p class="text-gray-600 text-sm">
                    Didukung tenaga ahli berpengalaman lintas bidang perencanaan.
                </p>
            </div>

        </div>
    </div>
</section>


{{-- CARA KERJA --}}
<section class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-12">
            Alur Kerja Kami
        </h2>

        <div class="grid md:grid-cols-4 gap-8 text-center">
            @foreach(['Konsultasi','Analisis','Perencanaan','Finalisasi'] as $step)
                <div>
                    <div class="w-12 h-12 mx-auto rounded-full bg-blue-600 text-white flex items-center justify-center font-bold mb-4">
                        {{ $loop->iteration }}
                    </div>
                    <p class="font-semibold">{{ $step }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>


{{-- PROJECT FOCUS --}}
<section class="bg-slate-50 py-20">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-bold mb-10 text-center">
            Bidang Keahlian Utama
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white p-8 rounded-xl border hover:border-blue-600 transition">
                <h4 class="font-semibold mb-2">Perencanaan Arsitektur</h4>
                <p class="text-gray-600 text-sm">
                    Hunian, gedung komersial, dan fasilitas publik.
                </p>
            </div>

            <div class="bg-white p-8 rounded-xl border hover:border-blue-600 transition">
                <h4 class="font-semibold mb-2">Manajemen Konstruksi</h4>
                <p class="text-gray-600 text-sm">
                    Pengendalian mutu, biaya, dan waktu pelaksanaan proyek.
                </p>
            </div>
        </div>
    </div>
</section>


{{-- SIAP MULAI? --}}
<section class="relative bg-gradient-to-br from-slate-900 to-slate-800 py-20 mb-0 text-white overflow-hidden">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">
            Siap Memulai Proyek Anda?
        </h2>

        <p class="text-blue-100 mb-8">
            Konsultasikan kebutuhan perencanaan Anda bersama tim profesional kami.
        </p>

        <a href="contact"
           class="inline-block bg-blue-600 text-white font-semibold
                  px-8 py-4 rounded-xl shadow
                  hover:scale-105 transition">
            Hubungi Kami
        </a>
    </div>
</section>


@endsection
