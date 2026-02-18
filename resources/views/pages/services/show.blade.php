@extends('layouts.app')

@section('content')
{{-- Main Content --}}

<section class="bg-white py-28">
    <div class="max-w-6xl mx-auto px-6">
    <div class="grid md:grid-cols-2 gap-12 items-start">

        <section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

        {{-- Kiri: Icon layanan --}}
        <div class="flex justify-center">
            <div class="w-48 h-48 bg-blue-50 rounded-3xl flex items-center justify-center shadow-sm
            @switch($service->color)
                @case('indigo') text-indigo-600 @break
                @case('green') text-green-600 @break
                @case('red') text-red-600 @break
                @default text-gray-600
            @endswitch
        ">
            <div class="w-16 h-16 flex items-center justify-center
                        rounded-xl bg-white shadow mb-4">
                @include('components.service-icon', ['icon' => $service->icon])
            </div>
        </div>
        </div>    
    
        {{-- Kanan: Judul dan Deskripsi --}}
        <div>
            {{-- Title --}}
            <h1 class="text-4xl font-bold mb-4 text-slate-900">
                {{ $service->title }}
            </h1>

            <p class="text-gray-600 leading-relaxed mb-6">
                {{ $service->description }}
            </p>
        </div>
    </div>
</section>

        {{-- Manfaat --}}
        <div class="bg-slate-50 p-8 rounded-2xl shadow-sm mt-12">
            <h3 class="text-xl font-semibold mb-4">
                Manfaat untuk Klien
            </h3>

            <ul class="space-y-3 text-gray-700">
                <li>✔ Solusi teknis yang tepat</li>
                <li>✔ Mengurangi risiko kesalahan proyek</li>
                <li>✔ Efisiensi biaya dan waktu</li>
                <li>✔ Pendampingan profesional</li>
            </ul>
        </div>
    </div>
</div>

</section>

{{-- Cakupan Layanan --}}

<section class="bg-slate-50 py-16">
    <div class="max-w-5xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-10">
            Cakupan Layanan
        </h2>

    <div class="bg-white p-8 rounded-2xl shadow-sm">
        @if($service->scope)
            <ul class="space-y-3 text-gray-700">
                @foreach(explode("\n", $service->scope) as $item)
                    <li>• {{ $item }}</li>
                @endforeach
            </ul>
        @else
            <p class="text-gray-500">
                Detail cakupan layanan belum tersedia.
            </p>
        @endif
    </div>
</div>

</section>

{{-- BACK BUTTON --}}
<div class="py-1 max-w-6xl mx-auto px-24 mt-2 mb-10 ml-96">
        <a href="/#services"
           class="inline-block bg-blue-600 text-white font-semibold
                  px-8 py-4 rounded-xl shadow
                  hover:scale-105 transition">
            Kembali ke Layanan
        </a>

        {{-- CTA --}}
        @auth
            <a href="/consultation"
               class="inline-block bg-blue-600 text-white font-semibold px-8 py-4 rounded-xl shadow 
               hover:scale-105 hover:bg-blue-500 transition ml-6">
                Ajukan Konsultasi
            </a>
        @else
            <a href="{{ route('auth.google') }}"
               class="inline-block bg-blue-600 text-white font-semibold px-8 py-4 rounded-xl shadow 
               hover:scale-105 hover:bg-blue-500 transition">
                Login untuk Konsultasi
            </a>
        @endauth
</div>


@endsection
