@extends('layouts.app')

@section('content')
<section class="py-28 bg-white">
    <div class="max-w-5xl mx-auto px-6">

        {{-- Judul proyek --}}
        <h1 class="text-4xl font-bold mb-6">
            {{ $portfolio->title }}
        </h1>

        {{-- Gambar utama --}}
        @if($portfolio->thumbnail)
            <img src="{{ asset('storage/' . $portfolio->thumbnail) }}"
                 class="w-full h-96 object-cover rounded-2xl mb-8">
        @endif

        {{-- Info proyek --}}
        <div class="grid md:grid-cols-3 gap-8 mb-8">

            <div>
                <p class="text-sm text-gray-500">Lokasi</p>
                <p class="font-semibold">
                    {{ $portfolio->location ?? '-' }}
                </p>
            </div>

            <div>
                <p class="text-sm text-gray-500">Tahun</p>
                <p class="font-semibold">
                    {{ $portfolio->year ?? '-' }}
                </p>
            </div>

            <div>
                <p class="text-sm text-gray-500">Klien</p>
                <p class="font-semibold">
                    {{ $portfolio->client ?? '-' }}
                </p>
            </div>

        </div>

        {{-- Deskripsi proyek --}}
        <div class="prose max-w-none text-gray-700">
            {{ $portfolio->description }}
        </div>

        {{-- Tombol kembali --}}
        <div class="mt-10">
            <a href="{{ route('portfolio.index') }}"
               class="text-blue-600 font-semibold hover:underline">
                ← Kembali ke Portfolio
            </a>
        </div>

    </div>
</section>
@endsection