@extends('layouts.app')

@section('title', 'Konsultasi')

@section('content')
<section class="bg-gray-50 py-20 mt-4 min-h-screen">
    <div class="max-w-4xl mx-auto px-6">

        <div class="bg-white rounded-2xl shadow p-10">

            <h1 class="text-2xl font-bold mb-2">
                Ajukan Konsultasi
            </h1>
            <p class="text-gray-500 mb-8">
                Silakan isi form di bawah, tim kami akan segera menghubungi Anda.
            </p>

            @if(session('success'))
                <div class="mb-6 p-4 bg-green-100 text-green-700 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('consultation.store') }}" class="space-y-6">
                @csrf

                {{-- SERVICE --}}
                <div>
                    <label class="block text-sm font-medium mb-2">
                        Pilih Layanan
                    </label>
                    <select name="service" required
                        class="w-full border rounded-xl px-4 py-3 focus:ring focus:ring-blue-200">
                        <option value="">-- Pilih Layanan --</option>
                        <option>Konsultasi Perencanaan</option>
                        <option>Pengawasan Proyek</option>
                        <option>Manajemen Konstruksi</option>
                        <option>Studi Kelayakan</option>
                    </select>
                </div>

                {{-- PHONE --}}
                <div>
                    <label class="block text-sm font-medium mb-2">
                        No. WhatsApp
                    </label>
                    <input type="text" name="phone"
                        class="w-full border rounded-xl px-4 py-3 focus:ring focus:ring-blue-200"
                        placeholder="08xxxxxxxx">
                </div>

                {{-- MESSAGE --}}
                <div>
                    <label class="block text-sm font-medium mb-2">
                        Jelaskan Kebutuhan Anda
                    </label>
                    <textarea name="message" rows="5"
                        class="w-full border rounded-xl px-4 py-3 focus:ring focus:ring-blue-200"
                        placeholder="Deskripsikan kebutuhan proyek Anda"></textarea>
                </div>

                {{-- SUBMIT --}}
                <div class="flex justify-end">
                    <button
                        class="px-8 py-3 rounded-xl bg-blue-600 text-white font-semibold
                               hover:bg-blue-900 transition">
                        Kirim Konsultasi
                    </button>
                </div>
            </form>

        </div>

    </div>
</section>
@endsection
