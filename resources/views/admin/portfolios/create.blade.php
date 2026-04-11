@extends('layouts.admin')

@section('content')
<div class="p-6 max-w-4xl mx-auto">

    <h1 class="text-2xl font-bold text-gold mb-6">
        Tambah Portfolio
    </h1>

    <form action="{{ route('admin.portfolios.store') }}"
          method="POST"
          enctype="multipart/form-data"
          class="bg-dark2 p-8 rounded-2xl shadow
                 border border-gold/30 space-y-6">

        @csrf

        {{-- Title --}}
        <div>
            <label class="block text-sm text-slate-300 mb-2">Judul</label>
            <input type="text" name="title"
                class="w-full bg-dark border border-slate-600 rounded-xl px-4 py-3 text-white focus:border-gold focus:ring-0"
                required>
        </div>

        {{-- Location --}}
        <div>
            <label class="block text-sm text-slate-300 mb-2">Lokasi</label>
            <input type="text" name="location"
                class="w-full bg-dark border border-slate-600 rounded-xl px-4 py-3 text-white">
        </div>

        {{-- Service --}}
        <div>
            <label class="block text-sm text-slate-300 mb-2">Jenis Layanan</label>
            <input type="text" name="service_type"
                class="w-full bg-dark border border-slate-600 rounded-xl px-4 py-3 text-white">
        </div>

        {{-- Year --}}
        <div>
            <label class="block text-sm text-slate-300 mb-2">Tahun</label>
            <input type="number" name="year"
                class="w-full bg-dark border border-slate-600 rounded-xl px-4 py-3 text-white">
        </div>

        {{-- Thumbnail Upload --}}
        <div>
            <label class="block text-sm text-slate-300 mb-2">Thumbnail</label>

            <input type="file" name="thumbnail" id="thumbnailInput"
                class="w-full text-slate-300">

            {{-- Preview --}}
            <div class="mt-4">
                <img id="previewImage"
                     class="hidden w-40 h-40 object-cover rounded-xl border border-gold/30">
            </div>
        </div>

        {{-- Button --}}
        <div class="flex justify-end gap-3">
            <a href="{{ route('admin.portfolios.index') }}"
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

{{-- IMAGE PREVIEW SCRIPT --}}
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