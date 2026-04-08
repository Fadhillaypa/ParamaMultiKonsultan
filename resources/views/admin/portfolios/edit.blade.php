@extends('layouts.admin')

@section('content')
<div class="p-6 max-w-4xl mx-auto">

    <h1 class="text-2xl font-bold text-gold mb-6">
        Edit Portfolio
    </h1>

    <form action="{{ route('admin.portfolios.update', $portfolio) }}"
          method="POST"
          enctype="multipart/form-data"
          class="bg-dark2 p-8 rounded-2xl shadow border border-gold/30 space-y-6">

        @csrf
        @method('PUT')

        <div>
            <label class="text-slate-300">Judul</label>
            <input type="text" name="title" value="{{ $portfolio->title }}"
                class="w-full bg-dark border border-slate-600 rounded-xl px-4 py-3 text-white">
        </div>

        <div>
            <label class="text-slate-300">Lokasi</label>
            <input type="text" name="location" value="{{ $portfolio->location }}"
                class="w-full bg-dark border border-slate-600 rounded-xl px-4 py-3 text-white">
        </div>

        <div>
            <label class="text-slate-300">Jenis Layanan</label>
            <input type="text" name="service_type" value="{{ $portfolio->service_type }}"
                class="w-full bg-dark border border-slate-600 rounded-xl px-4 py-3 text-white">
        </div>

        <div>
            <label class="text-slate-300">Tahun</label>
            <input type="number" name="year" value="{{ $portfolio->year }}"
                class="w-full bg-dark border border-slate-600 rounded-xl px-4 py-3 text-white">
        </div>

        {{-- Thumbnail --}}
        <div>
            <label class="text-slate-300">Thumbnail</label>

            <input type="file" name="thumbnail" id="thumbnailInput">

            @if($portfolio->thumbnail)
                <img src="{{ asset('storage/'.$portfolio->thumbnail) }}"
                     class="w-40 h-40 mt-3 rounded-xl object-cover">
            @endif

            <img id="previewImage"
                 class="hidden w-40 h-40 mt-3 rounded-xl object-cover">
        </div>

        <div class="flex justify-end gap-3">
            <a href="{{ route('admin.portfolios.index') }}"
               class="px-5 py-2 border border-slate-500 text-slate-300 rounded-xl">
                Batal
            </a>

            <button class="px-6 py-2 bg-gold text-white rounded-xl hover:scale-105 transition">
                Update
            </button>
        </div>

    </form>
</div>

<script>
document.getElementById('thumbnailInput').addEventListener('change', function(e) {
    const file = e.target.files[0];
    const preview = document.getElementById('previewImage');

    if (file) {
        preview.src = URL.createObjectURL(file);
        preview.classList.remove('hidden');
    }
});
</script>

@endsection