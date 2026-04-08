@extends('layouts.admin')

@section('content')

<div class="p-6">
<div class="flex justify-between items-center mb-8">
    <h2 class="text-2xl font-bold text-gold">Services</h2>

    <a href="{{ route('admin.services.create') }}"
       class="bg-gold text-white px-6 py-2 rounded-lg 
              hover:scale-105 transition shadow">
        + Tambah Service
    </a>
</div>

<div class="bg-dark2 rounded-xl p-6 shadow hover:shadow-[0_0_25px_rgba(201,166,70,0.25)] 
                border border-gold/40 hover:border-gold/60 hover:bg-dark transition">

    <table id="serviceTable" class="w-full text-left">
        <thead>
            <tr class="text-gold border-b border-gold/20">
                <th class="py-3">Judul</th>
                <th class="py-3">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach($services as $service)
            <tr class="border-b text-white border-white/5 hover:bg-dark transition">

                <td class="py-4">
                    {{ $service->title }}
                </td>

                <td class="flex justify-center gap-2">

                    <a href="{{ route('admin.services.edit', $service->id) }}"
                       class="px-3 py-1 bg-blue-500/80 text-white rounded hover:scale-105 transition">
                        Edit
                    </a>

                    <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button onclick="return confirm('Hapus layanan ini?')"
                        class="px-3 py-1 bg-red-500/80 text-white rounded hover:scale-105 transition">
                            Hapus
                        </button>
                    </form>

                </td>

            </tr>
            @endforeach
        </tbody>

    </table>

</div>
</div>
<script>
    $(document).ready(function () {
        $('#serviceTable').DataTable({
            responsive: true,
            pageLength: 5,
            language: {
                search: "Cari:",
                lengthMenu: "Tampilkan _MENU_ data",
                info: "Menampilkan _START_ - _END_ dari _TOTAL_ data"
            }
        });
    });
</script>

@endsection