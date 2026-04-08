@extends('layouts.admin')

@section('content')

<h2 class="text-2xl font-bold text-gold mb-6">Tambah Service</h2>

<form action="{{ route('admin.services.store') }}" method="POST" class="space-y-4">
    @csrf

    <input type="text" name="title" placeholder="Judul"
        class="w-full p-3 rounded bg-dark2 border border-gold/20">

    <textarea name="description" placeholder="Deskripsi"
        class="w-full p-3 rounded bg-dark2 border border-gold/20"></textarea>

    <textarea name="long_description" placeholder="Detail"
        class="w-full p-3 rounded bg-dark2 border border-gold/20"></textarea>

    <textarea name="benefits" placeholder="Pisah enter"
        class="w-full p-3 rounded bg-dark2 border border-gold/20"></textarea>

    <button class="bg-gold px-6 py-3 rounded hover:scale-105 transition">
        Simpan
    </button>
</form>

@endsection