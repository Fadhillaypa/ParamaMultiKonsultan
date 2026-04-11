@extends('layouts.admin') {{-- pakai layout admin kamu --}}

@section('content')

<div class="p-6 max-w-4xl mx-auto">

<h2 class="text-2xl font-bold text-gold mb-6">Edit Service</h2>

<form action="{{ route('admin.services.update', $service->id) }}" method="POST" class="bg-dark2 p-8 rounded-2xl shadow border border-gold/30 space-y-6">
    @csrf
    @method('PUT')

    {{-- TITLE --}}
    <div>
        <label class="text-slate-300">Title</label>
        <input type="text" name="title"
            value="{{ $service->title }}"
            class="w-full bg-dark border border-slate-600 rounded-xl px-4 py-3 text-white">
    </div>

    {{-- DESCRIPTION --}}
    <div>
        <label class="text-slate-300">Description</label>
        <textarea name="description"
        class="w-full bg-dark border border-slate-600 rounded-xl px-4 py-3 text-white">{{ $service->description }}</textarea>
    </div>

    {{-- LONG DESCRIPTION --}}
    <div>
        <label class="text-slate-300">Long Description</label>
        <textarea name="long_description"
        class="w-full bg-dark border border-slate-600 rounded-xl px-4 py-3 text-white">{{ $service->long_description }}</textarea>
    </div>

    {{-- BENEFITS --}}
    <div>
        <label class="text-slate-300">Benefits</label>
        <textarea name="benefits"
        class="w-full bg-dark border border-slate-600 rounded-xl px-4 py-3 text-white">
    {{ implode("\n", $service->benefits ?? []) }}
        </textarea>
    </div>

    {{-- ICON --}}
    <div class="mb-4">
        <label class="block text-sm text-slate-300 mb-2 font-medium">Icon</label>
        <select name="icon" class="w-full bg-dark border border-slate-600 rounded-xl px-3 py-2
                text-slate-400 focus:border-gold focus:ring-0">
            <option value="">-- Pilih Icon --</option>
            <option value="building" {{ $service->icon == 'building' ? 'selected' : '' }}>Building</option>
            <option value="cube" {{ $service->icon == 'cube' ? 'selected' : '' }}>Cube</option>
            <option value="eye" {{ $service->icon == 'eye' ? 'selected' : '' }}>Eye</option>
            <option value="clipboard" {{ $service->icon == 'clipboard' ? 'selected' : '' }}>Clipboard</option>
            <option value="layers" {{ $service->icon == 'layers' ? 'selected' : '' }}>Layers</option>
        </select>
    </div>

    <div class="flex justify-end gap-3">
            <a href="{{ route('admin.services.index') }}"
               class="px-5 py-2 border border-slate-500 text-slate-300 rounded-xl hover:bg-red-400 hover:text-white
                        transition duration-300">
                Batal
            </a>

            <button class="px-6 py-2 bg-gold text-white rounded-xl hover:scale-105 transition">
                Update Service
            </button>
    </div>

</form>
</div>

@endsection