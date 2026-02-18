@extends('layouts.admin')

@section('content')
<div class="p-6">

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Kelola Portfolio</h1>

        <a href="{{ route('admin.portfolios.create') }}"
           class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
            + Tambah Portfolio
        </a>
    </div>
    <div class="bg-white shadow rounded-xl overflow-hidden">
        <table class="w-full">
            <thead class="bg-gray-100">
                <tr>
                    <th class="p-4 text-left">Thumbnail</th>
                    <th class="p-4 text-left">Judul</th>
                    <th class="p-4 text-left">Lokasi</th>
                    <th class="p-4 text-left">Layanan</th>
                    <th class="p-4 text-left">Tahun</th>
                    <th class="p-4 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($portfolios as $portfolio)
                <tr class="border-t">
                    <td class="p-4">
                        @if($portfolio->thumbnail)
                            <img src="{{ asset('storage/' . $portfolio->thumbnail) }}"
                                 class="w-16 h-16 object-cover rounded">
                        @else
                            <div class="w-16 h-16 bg-gray-200 rounded"></div>
                        @endif
                    </td>
                    <td class="p-4 font-semibold">
                        {{ $portfolio->title }}
                    </td>
                    <td class="p-4">
                        {{ $portfolio->location }}
                    </td>
                    <td class="p-4">
                        {{ $portfolio->service_type }}
                    </td>
                    <td class="p-4">
                        {{ $portfolio->year }}
                    </td>
                    <td class="p-4 flex gap-3">
                        <a href="{{ route('admin.portfolios.edit', $portfolio) }}"
                           class="text-blue-600 hover:underline">
                            Edit
                        </a>

                        <form action="{{ route('admin.portfolios.destroy', $portfolio) }}"
                              method="POST"
                              onsubmit="return confirm('Hapus portfolio ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600 hover:underline">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="p-6 text-center text-gray-500">
                        Belum ada portfolio.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>
@endsection