@extends('layouts.app')

@section('title', 'Tentang Kami | CV. Parama Multi Konsultan')
@section('meta_description', 'Profil CV. Parama Multi Konsultan, konsultan perencanaan terdaftar INKINDO yang berpengalaman dan profesional.')

@section('content')

<section class="bg-white py-20">
    <div class="max-w-5xl mx-auto px-6">
        <h1 class="text-4xl font-bold text-blue-600 mb-6">
            Tentang CV. Parama Multi Konsultan
        </h1>

        <p class="text-gray-700 leading-relaxed mb-4">
            CV. Parama Multi Konsultan merupakan perusahaan konsultan perencanaan
            terdaftar INKINDO yang berpusat di Kota Madiun.
        </p>

        <p class="text-gray-700 leading-relaxed mb-4">
            Kami berkomitmen menghadirkan layanan profesional di bidang arsitektur,
            rekayasa struktur, dan teknik sipil dengan standar nasional dan internasional.
        </p>

        <p class="text-gray-700 leading-relaxed">
            Dengan tenaga ahli berpengalaman, kami siap menjadi mitra strategis
            pembangunan dan infrastruktur di Indonesia.
        </p>
    </div>
</section>

<section class="bg-gray-50 py-20">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-8 text-center">
        <div class="bg-white p-6 rounded-xl shadow">
            <h3 class="font-semibold text-lg">Terdaftar INKINDO</h3>
            <p class="text-sm text-gray-600">Legal & terpercaya</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow">
            <h3 class="font-semibold text-lg">Standar ISO</h3>
            <p class="text-sm text-gray-600">Mutu & keselamatan</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow">
            <h3 class="font-semibold text-lg">Tenaga Profesional</h3>
            <p class="text-sm text-gray-600">Berpengalaman</p>
        </div>
    </div>
</section>

@endsection
