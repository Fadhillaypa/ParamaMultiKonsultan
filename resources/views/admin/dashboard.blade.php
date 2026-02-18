@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')
<div class="p-6">
    <h1 class="text-2xl font-bold mb-6">Dashboard Admin</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        {{-- Card Konsultasi --}}
        <a href="{{ route('admin.consultations.index') }}"
           class="bg-white shadow rounded-2xl p-6 hover:shadow-lg transition">
            <h2 class="text-lg font-semibold text-gray-700">
                Kelola Konsultasi
            </h2>
            <p class="text-sm text-gray-500 mt-2">
                Lihat dan kelola semua data konsultasi dari client.
            </p>
        </a>

        {{-- Card Portfolio --}}
        <a href="{{ route('admin.portfolios.index') }}"
           class="bg-white shadow rounded-2xl p-6 hover:shadow-lg transition">
            <h2 class="text-lg font-semibold text-gray-700">
                Kelola Portfolio
            </h2>
            <p class="text-sm text-gray-500 mt-2">
                Tambah, edit, dan hapus portfolio proyek.
            </p>
        </a>

    </div>
</div>
@endsection