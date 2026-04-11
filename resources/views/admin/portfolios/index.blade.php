@extends('layouts.admin')

@section('content')
<div class="p-6">

    {{-- HEADER --}}
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gold">
            Kelola Portfolio
        </h1>

        <a href="{{ route('admin.portfolios.create') }}"
           class="bg-gold/80 text-white px-5 py-2 rounded-xl 
                  hover:scale-105 hover:shadow-lg transition">
            + Tambah Portfolio
        </a>
    </div>

    {{-- CARD --}}
    <div class="bg-dark2 p-6 rounded-xl shadow hover:shadow-[0_0_25px_rgba(201,166,70,0.25)] 
                border border-gold/40 hover:border-gold/60 transition hover:bg-dark">

        <table id="portfolioTable" class="w-full text-sm border-separate border-spacing-y-2">

            {{-- HEADER --}}
            <thead>
            <tr class="text-gold/70 text-xs uppercase tracking-wider">
                <th class="px-6 py-3 text-left">Thumbnail</th>
                <th class="px-6 py-3 text-left">Judul</th>
                <th class="px-6 py-3 text-left">Lokasi</th>
                <th class="px-6 py-3 text-left">Layanan</th>
                <th class="px-6 py-3 text-left">Tahun</th>
                <th class="px-6 py-3 text-center">Aksi</th>
            </tr>
            </thead>

            {{-- BODY --}}
            <tbody>
                @forelse($portfolios as $portfolio)
                <tr class="bg-dark2 hover:bg-dark transition rounded-xl shadow border border-white/5">

                    {{-- THUMB --}}
                    <td class="px-6 py-4">
                        @if($portfolio->thumbnail)
                            <img src="{{ asset('storage/'.$portfolio->thumbnail) }}"
                                class="w-16 h-16 object-cover rounded-lg 
                                        border border-gold/30 
                                        hover:scale-110 transition">
                        @else
                            <div class="w-16 h-16 bg-slate-700 rounded-lg"></div>
                        @endif
                    </td>

                    {{-- TITLE --}}
                    <td class="px-6 py-4 font-semibold text-white">
                        {{ $portfolio->title }}
                    </td>

                    {{-- LOCATION --}}
                    <td class="px-6 py-4 text-slate-300">
                        {{ $portfolio->location }}
                    </td>

                    {{-- SERVICE --}}
                    <td class="px-6 py-4">
                        <span class="px-3 py-1 rounded-full text-xs 
                                    bg-gold/10 text-gold border border-gold/30">
                            {{ $portfolio->service_type }}
                        </span>
                    </td>

                    {{-- YEAR --}}
                    <td class="px-6 py-4 text-slate-400">
                        {{ $portfolio->year }}
                    </td>

                    {{-- ACTION --}}
                    <td class="px-6 py-4 text-center">
                        <div class="flex justify-center gap-2">

                            <a href="{{ route('admin.portfolios.edit', $portfolio) }}"
                            class="px-3 py-1 text-xs bg-blue-500/80 text-white rounded-lg 
                                    hover:scale-105 transition shadow">
                                Edit
                            </a>

                            <form action="{{ route('admin.portfolios.destroy', $portfolio) }}"
                                method="POST"
                                onsubmit="return confirm('Hapus portfolio ini?')">
                                @csrf
                                @method('DELETE')

                                <button class="px-3 py-1 text-xs bg-red-500 text-white rounded-lg 
                                            hover:scale-105 transition shadow">
                                    Hapus
                                </button>
                            </form>

                        </div>
                    </td>

                </tr>
                @empty
                <tr>
                    <td colspan="6" class="p-10 text-center text-slate-500">
                        Belum ada portfolio
                    </td>
                </tr>
                @endforelse
            </tbody>

        </table>
        <p class="text-sm text-slate-400 mt-3">
            Total: {{ count($portfolios) }} Data
        </p>
    </div>

</div>
<script>
$(document).ready(function() {
    $('#portfolioTable').DataTable({
        pageLength: 5,
        lengthMenu: [5, 10, 25, 50],
        ordering: true,
        responsive: true,
        language: {
            search: "Cari:",
            lengthMenu: "Tampilkan _MENU_ data",
            info: "Menampilkan _START_ - _END_ dari _TOTAL_ data",
            paginate: {
                next: "→",
                previous: "←"
            }
        }
    });
});
</script>
@endsection