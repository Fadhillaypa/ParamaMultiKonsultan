@extends('layouts.admin') {{-- pakai layout admin kamu --}}

@section('content')

<h2 class="text-2xl font-bold text-gold mb-6">Edit Service</h2>

<form action="{{ route('admin.services.update', $service->id) }}" method="POST" class="space-y-4">
    @csrf
    @method('PUT')

    {{-- TITLE --}}
    <input type="text" name="title"
        value="{{ $service->title }}"
        class="w-full p-3 rounded bg-dark2 border border-gold/20">

    {{-- DESCRIPTION --}}
    <textarea name="description"
        class="w-full p-3 rounded bg-dark2 border border-gold/20">{{ $service->description }}</textarea>

    {{-- LONG DESCRIPTION --}}
    <textarea name="long_description"
        class="w-full p-3 rounded bg-dark2 border border-gold/20">{{ $service->long_description }}</textarea>

    {{-- BENEFITS --}}
    <textarea name="benefits"
        class="w-full p-3 rounded bg-dark2 border border-gold/20">
{{ implode("\n", $service->benefits ?? []) }}
    </textarea>

    <button class="bg-gold px-6 py-3 rounded text-white hover:scale-105 transition">
        Update Service
    </button>

</form>

@endsection