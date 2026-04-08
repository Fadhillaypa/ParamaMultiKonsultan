<div class="space-y-5">

    <div>
        <label class="block mb-1 font-medium">Judul</label>
        <input type="text" name="title"
               value="{{ old('title', $portfolio->title ?? '') }}"
               class="w-full border rounded-lg p-2">
    </div>

    <div>
        <label class="block mb-1 font-medium">Lokasi</label>
        <input type="text" name="location"
               value="{{ old('location', $portfolio->location ?? '') }}"
               class="w-full border rounded-lg p-2">
    </div>

    <div>
        <label class="block mb-1 font-medium">Tahun</label>
        <input type="text" name="year"
               value="{{ old('year', $portfolio->year ?? '') }}"
               class="w-full border rounded-lg p-2">
    </div>

    <div>
        <label class="block mb-1 font-medium">Klien</label>
        <input type="text" name="client"
               value="{{ old('client', $portfolio->client ?? '') }}"
               class="w-full border rounded-lg p-2">
    </div>

    <div>
        <label class="block mb-1 font-medium">Jenis Layanan</label>
        <input type="text" name="service_type"
            value="{{ old('service_type', $portfolio->service_type ?? '') }}"
            class="w-full border rounded-lg p-2"
            placeholder="Contoh: Arsitektur, Interior, Renovasi">
    </div>

    <div>
        <label class="block mb-1 font-medium">Thumbnail</label>
        <input type="file" name="thumbnail" class="w-full">
    </div>

    <div>
        <label class="block mb-1 font-medium">Deskripsi</label>
        <textarea name="description"
                  rows="5"
                  class="w-full border rounded-lg p-2">{{ old('description', $portfolio->description ?? '') }}</textarea>
    </div>

</div>