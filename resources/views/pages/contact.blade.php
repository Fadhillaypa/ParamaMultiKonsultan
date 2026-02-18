@extends('layouts.app')

@section('title', 'Kontak | CV. Parama Multi Konsultan')
@section('meta_description', 'Hubungi CV. Parama Multi Konsultan untuk layanan konsultan perencanaan, arsitektur, dan teknik sipil.')

@section('content')

<section class="bg-white py-20">
    <div class="max-w-5xl mx-auto px-6">
        <h1 class="text-4xl font-bold text-blue-600 mb-6">
            Hubungi Kami
        </h1>

        <p class="text-gray-600 mb-10">
            Silakan hubungi kami untuk informasi layanan dan kerja sama.
        </p>

        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-gray-50 p-6 rounded-xl">
                <p><strong>Alamat:</strong> Kota Madiun, Jawa Timur</p>
                <p><strong>Email:</strong> info@paramamultikonsultan.co.id</p>
                <p><strong>Telepon:</strong> 08xxxxxxxx</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow">
                <p class="font-semibold mb-2">Jam Operasional</p>
                <p>Senin – Jumat</p>
                <p>08.00 – 17.00 WIB</p>
            </div>
        </div>
    </div>
</section>

@endsection
