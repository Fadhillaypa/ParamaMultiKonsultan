@extends('layouts.admin')

@section('content')

<div class="p-6 max-w-4xl mx-auto">

<h2 class="text-2xl font-bold text-gold mb-6">Tambah Service</h2>

<form action="{{ route('admin.services.store') }}" method="POST" class="bg-dark2 p-8 rounded-2xl shadow border border-gold/30 space-y-6">
    @csrf

    {{-- TITLE --}}
    <div>
            <label class="block text-sm text-slate-300 mb-2">Title</label>
            <input type="text" name="title"
                class="w-full bg-dark border border-slate-600 rounded-xl px-4 py-3 text-white focus:border-gold focus:ring-0"
                required>
        </div>
    {{-- Deskripsi --}}
    <div>
            <label class="block text-sm text-slate-300 mb-2">Description</label>
            <textarea name="description" 
                class="w-full bg-dark border border-slate-600 rounded-xl px-4 py-3 
                text-white focus:border-gold focus:ring-0"></textarea>
        </div>
    
    {{-- LONG DESCRIPTION --}}
    <div>
            <label class="block text-sm text-slate-300 mb-2">Long Description</label>
            <textarea name="long_description" 
                class="w-full bg-dark border border-slate-600 rounded-xl px-4 py-3 
                    text-white focus:border-gold focus:ring-0"></textarea>
        </div>

    {{-- BENEFITS --}}
    <div>
            <label class="block text-sm text-slate-300 mb-2">Benefits</label>
            <textarea name="benefits" 
                class="w-full bg-dark border border-slate-600 rounded-xl px-4 py-3 
                text-white focus:border-gold focus:ring-0"></textarea>
        </div>

    {{-- ICON --}}
    <div class="mb-4">
        <label class="block text-sm text-slate-300 mb-2 font-medium">Icon</label>
        <select name="icon" class="w-full bg-dark border border-slate-600 rounded-xl px-3 py-2
                text-slate-400 focus:border-gold focus:ring-0">
            <option value="">-- Pilih Icon --</option>
            <option value="building">Building</option>
            <option value="cube">Cube</option>
            <option value="eye">Eye</option>
            <option value="clipboard">Clipboard</option>
            <option value="layers">Layers</option>
        </select>
    </div>

     {{-- Button --}}
        <div class="flex justify-end gap-3">
            <a href="{{ route('admin.services.index') }}"
               class="px-5 py-2 rounded-xl border border-slate-500 text-slate-300 hover:bg-red-400 hover:text-white
                        transition duration-300">
                Batal
            </a>

            <button class="px-6 py-2 rounded-xl bg-gold text-white hover:scale-105 transition">
                Simpan
            </button>
        </div>
</form>
</div>

@endsection