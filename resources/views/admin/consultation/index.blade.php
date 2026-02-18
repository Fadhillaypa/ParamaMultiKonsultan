@extends('layouts.app')

@section('title', 'Data Konsultasi')

@section('content')
<div class="bg-white rounded-xl shadow-sm p-5 mb-6 mt-24">
    <form method="GET"
          class="flex flex-col lg:flex-row gap-10 items-end">

        {{-- Search --}}
        <div class="flex-1">
            <label class="text-xs text-gray-500">Search</label>
            <input
                type="text"
                name="search"
                value="{{ request('search') }}"
                placeholder="Nama client, email, isi konsultasi"
                class="input w-full"
            >
        </div>

        {{-- Status --}}
        <div class="w-full lg:w-40">
            <label class="text-xs text-gray-500">Status</label>
            <select name="status" class="input w-full">
                <option value="">All</option>
                <option value="pending" @selected(request('status')=='pending')>Pending</option>
                <option value="process" @selected(request('status')=='process')>Process</option>
                <option value="done" @selected(request('status')=='done')>Done</option>
            </select>
        </div>

        {{-- Date From --}}
        <div>
            <label class="text-xs text-gray-500">From</label>
            <input type="date" name="from" value="{{ request('from') }}" class="input">
        </div>

        {{-- Date To --}}
        <div>
            <label class="text-xs text-gray-500">To</label>
            <input type="date" name="to" value="{{ request('to') }}" class="input">
        </div>

        {{-- Action --}}
        <div class="flex gap-2">
            <button class="btn-primary px-5 py-2 bg-blue-600 text-white rounded-xl text-sm
                            hover:bg-blue-700 transition">
                Apply
            </button>

            @if(request()->hasAny(['search','status','from','to']))
                <a href="{{ route('admin.consultations.index') }}"
                   class="btn-secondary">
                    Reset
                </a>
            @endif
        </div>
    </form>
</div>



<table class="w-full text-sm bg-white rounded-xl shadow mt-3">
    <thead class="bg-gray-50 text-gray-600 text-sm">
    <tr>
        <th class="px-4 py-3">No</th>
        <th class="px-4 py-3">Nama Klien</th>
        <th class="px-4 py-3">Email</th>
        <th class="px-4 py-3">Layanan</th>
        <th class="px-4 py-3">Pesan</th>
        <th class="px-4 py-3">Status</th>
        <th class="px-4 py-3">Tanggal</th>
        <th class="px-4 py-3 text-center">Aksi</th>
    </tr>
    </thead>

    <tbody class="divide-y text-sm">
        @foreach ($consultations as $item)
        <tr class="hover:bg-gray-50">

            <td class="px-4 py-3">
                {{ $loop->iteration }}
            </td>

            <td class="px-4 py-3 font-medium">
                {{ $item->user->name ?? 'Guest' }}
            </td>

            <td class="px-4 py-3 text-gray-600">
                {{ $item->user->email ?? '-' }}
            </td>

            <td class="px-4 py-3">
                {{ $item->service }}
            </td>

            <td class="px-4 py-3 max-w-xs truncate" title="{{ $item->message }}">
                {{ Str::limit($item->message, 50) }}
            </td>

            <td class="px-4 py-3">
                <span class="px-2 py-1 rounded-full text-xs
                    @if($item->status === 'pending') bg-yellow-100 text-yellow-700
                    @elseif($item->status === 'proses') bg-blue-100 text-blue-700
                    @else bg-green-100 text-green-700 @endif">
                    {{ ucfirst($item->status) }}
                </span>
            </td>

            <td class="px-4 py-3 text-gray-500">
                {{ $item->created_at->format('d M Y') }}
            </td>

            <td class="px-4 py-3 text-center">
                <a href="{{ route('admin.consultations.show', $item->id) }}"
                class="text-blue-600 hover:underline">
                    Detail
                </a>
            </td>

        </tr>
        @endforeach
        </tbody>

</table>

@endsection
