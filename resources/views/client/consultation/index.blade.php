@extends('layouts.app')

@section('content')

<section class="bg-gray-50 min-h-screen py-20 mt-6">
    <div class="max-w-7xl mx-auto px-6">

        {{-- HEADER --}}
        <div class="mb-12">
            <h1 class="text-3xl font-bold text-gray-800">
                Riwayat Konsultasi Anda
            </h1>
            <p class="text-gray-500 mt-2 max-w-2xl">
                Pantau seluruh pengajuan konsultasi Anda bersama
                <span class="font-semibold text-blue-600">
                    CV. Parama Multi Konsultan
                </span>
                secara transparan dan profesional.
            </p>
        </div>

        {{-- SUMMARY --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">

            <div class="bg-white p-6 rounded-2xl shadow">
                <p class="text-sm text-gray-500">Total Konsultasi</p>
                <p class="text-3xl font-bold mt-2">
                    {{ $consultations->count() }}
                </p>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow">
                <p class="text-sm text-gray-500">Sedang Diproses</p>
                <p class="text-3xl font-bold text-blue-600 mt-2">
                    {{ $consultations->where('status','process')->count() }}
                </p>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow">
                <p class="text-sm text-gray-500">Selesai</p>
                <p class="text-3xl font-bold text-green-600 mt-2">
                    {{ $consultations->where('status','done')->count() }}
                </p>
            </div>

        </div>

        {{-- TABLE --}}
        <div class="bg-white rounded-2xl shadow overflow-hidden">
            <table class="w-full text-sm">
                <thead class="bg-gray-100 text-gray-600">
                    <tr>
                        <th class="px-6 py-4 text-left">Layanan</th>
                        <th class="px-6 py-4 text-left">Kontak</th>
                        <th class="px-6 py-4 text-center">Status</th>
                        <th class="px-6 py-4 text-center">Tanggal</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($consultations as $item)
                        <tr class="border-t hover:bg-gray-50 transition">
                            <td class="px-6 py-4 font-medium">
                                {{ $item->service }}
                            </td>

                            <td class="px-6 py-4 text-gray-600">
                                {{ $item->phone }}
                            </td>

                            <td class="px-6 py-4 text-center">
                                <span class="px-4 py-1 rounded-full text-xs font-semibold
                                    @if($item->status == 'pending') bg-yellow-100 text-yellow-700
                                    @elseif($item->status == 'process') bg-blue-100 text-blue-700
                                    @else bg-green-100 text-green-700 @endif">
                                    {{ ucfirst($item->status) }}
                                </span>
                            </td>

                            <td class="px-6 py-4 text-center text-gray-500">
                                {{ $item->created_at->format('d M Y') }}
                            </td>
                        </tr>
                    @empty
                        {{-- EMPTY STATE --}}
                        <tr>
                            <td colspan="4" class="py-20 text-center">
                                <p class="text-gray-400 mb-4">
                                    Anda belum memiliki riwayat konsultasi
                                </p>
                                <a href="{{ route('consultation.create') }}"
                                   class="inline-flex px-6 py-3 rounded-xl
                                          bg-blue-600 text-white font-semibold
                                          hover:bg-blue-700 transition shadow">
                                    Ajukan Konsultasi Sekarang
                                </a>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{-- CTA PROMOSI HALUS --}}
        <div class="mt-16 text-center">
            <p class="text-gray-600 mb-4">
                Butuh pendampingan lanjutan atau konsultasi proyek baru?
            </p>
            <a href="{{ route('consultation.create') }}"
               class="inline-flex px-8 py-3 rounded-xl
                      border border-blue-600 text-blue-600 font-semibold
                      hover:bg-blue-50 transition">
                Konsultasi Lanjutan
            </a>
        </div>
        
    </div>
</section>

@endsection
