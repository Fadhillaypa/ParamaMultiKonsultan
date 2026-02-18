@extends('layouts.app')

@section('title', 'Dashboard Client')

@section('content')
<section class="bg-gray-50 min-h-screen pt-28 py-16">
    <div class="max-w-7xl mx-auto px-6">

        {{-- HEADER --}}
        <div class="mb-10">
            <h1 class="text-3xl font-bold text-gray-800">
                Selamat Datang, {{ auth()->user()->name }}
            </h1>
            <p class="text-gray-500 mt-2">
                Akses layanan eksklusif klien CV. Parama Multi Konsultan
            </p>
        </div>

        {{-- STATS --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">

            <div class="bg-white p-6 rounded-2xl shadow">
                <p class="text-sm text-gray-500">Status Akun</p>
                <p class="text-xl font-semibold text-green-600 mt-2">
                    Aktif
                </p>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow">
                <p class="text-sm text-gray-500">Konsultasi</p>
                <p class="text-2xl font-bold text-gray-800">
                    {{ $consultationCount }}
                </p>
                <p class="text-sm text-gray-500">
                    Konsultasi Diajukan
                </p>
                @if($consultationCount == 0)
                    <p class="text-sm text-gray-400 mt-1">Belum ada konsultasi</p>
                @endif
            </div>

            <div class="bg-white p-6 rounded-2xl shadow">
                <p class="text-sm text-gray-500">Akses Dokumen</p>
                <p class="text-xl font-semibold mt-2">
                    Tersedia
                </p>
            </div>

        </div>

        {{-- QUICK ACTION --}}
        <div class="bg-white p-8 rounded-2xl shadow">
            <h2 class="text-xl font-semibold mb-6">
                Aksi Cepat
            </h2>

            <div class="grid md:grid-cols-3 gap-6">
                <a href="/consultation"
                   class="group p-6 border rounded-xl hover:border-blue-600 transition">
                    <h3 class="font-semibold group-hover:text-blue-600">
                        Ajukan Konsultasi
                    </h3>
                    <p class="text-sm text-gray-500 mt-2">
                        Diskusikan kebutuhan proyek Anda
                    </p>
                </a>

                <a href="/#services"
                   class="group p-6 border rounded-xl hover:border-blue-600 transition">
                    <h3 class="font-semibold group-hover:text-blue-600">
                        Layanan Kami
                    </h3>
                    <p class="text-sm text-gray-500 mt-2">
                        Detail jasa & spesifikasi teknis
                    </p>
                </a>

                <a href="/contact"
                   class="group p-6 border rounded-xl hover:border-blue-600 transition">
                    <h3 class="font-semibold group-hover:text-blue-600">
                        Hubungi Admin
                    </h3>
                    <p class="text-sm text-gray-500 mt-2">
                        Kontak langsung tim kami
                    </p>
                </a>
            </div>
        </div>

    </div>
</section>
@endsection
