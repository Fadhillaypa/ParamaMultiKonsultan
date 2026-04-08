@extends('layouts.admin')

@section('content')
<div class="p-3 mt-3">
<div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-bold text-gold">Data Konsultasi</h2>
</div>

<div class="bg-dark2 rounded-2xl p-6 mb-6 
            border border-gold/40 hover:border-gold/60 hover:bg-dark
            shadow hover:shadow-[0_0_25px_rgba(201,166,70,0.25)] 
            transition">
    <form method="GET"
          class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-4 items-end">

        {{-- Search --}}
        <div class="flex-1">
            <label class="text-xs text-slate-400 mb-1 block">Search</label>
            <input
                type="text"
                name="search"
                value="{{ request('search') }}"
                placeholder="Nama client, email, isi konsultasi"
                class="w-full px-4 py-2 rounded-lg bg-dark border border-white/10
                       text-white placeholder-slate-500
                       focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold transition"
            >
        </div>

        {{-- Status --}}
        <div class="w-full lg:w-40">
            <label class="text-xs text-slate-400 mb-1 block">Status</label>
            <select name="status" class="w-full px-3 py-2 rounded-lg bg-dark border border-white/10
                       text-slate-500 focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold transition">
                <option value="">All</option>
                <option value="pending" @selected(request('status')=='pending')>Pending</option>
                <option value="process" @selected(request('status')=='process')>Process</option>
                <option value="done" @selected(request('status')=='done')>Done</option>
            </select>
        </div>

        {{-- Date From --}}
        <div>
            <label class="text-xs text-slate-400 mb-1 block">From</label>
            <input type="date" name="from" value="{{ request('from') }}" class="input w-full px-3 py-2 rounded-lg bg-dark border border-white/10 text-slate-500">
        </div>

        {{-- Date To --}}
        <div>
            <label class="text-xs text-slate-400">To</label>
            <input type="date" name="to" value="{{ request('to') }}" class="input w-full px-3 py-2 rounded-lg bg-dark border border-white/10 text-slate-500">
        </div>

        {{-- Action --}}
        <div class="flex gap-2">
            <button class="btn-primary px-5 py-2 text-white rounded-xl text-sm
                            hover:bg-gold/60 flex-1 bg-gold 
                           hover:scale-105 hover:shadow-lg transition">
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


<div class="bg-dark2 rounded-xl shadow p-5 mb-6 hover:shadow-[0_0_25px_rgba(201,166,70,0.25)] 
                border border-gold/40 hover:border-gold/60 hover:bg-dark transition">
<table class="w-full text-sm bg-dark2 hover:bg-dark rounded-xl shadow mt-3">
    <thead class="text-gold/80 border-b border-gold/40">
    <tr class="hover:bg-white/5 transition">
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
        <tr class="hover:bg-white/5 transition">

            <td class="px-4 py-3 text-slate-300">
                {{ $loop->iteration }}
            </td>

            <td class="px-4 py-3 font-medium text-slate-300">
                {{ $item->user->name ?? 'Guest' }}
            </td>

            <td class="px-4 py-3 text-slate-300">
                {{ $item->user->email ?? '-' }}
            </td>

            <td class="px-4 py-3 text-slate-300">
                {{ $item->service }}
            </td>

            <td class="px-4 py-3 max-w-xs text-slate-300 truncate" title="{{ $item->message }}">
                {{ Str::limit($item->message, 50) }}
            </td>

            <td class="px-4 py-3 text-slate-300">
                <span class="px-3 py-1 rounded-full text-xs
                @if($item->status === 'pending') bg-yellow-500/20 text-yellow-400
                @elseif($item->status === 'process') bg-blue-500/20 text-blue-400
                @else bg-green-500/20 text-green-400 @endif">
                    {{ ucfirst($item->status) }}
                </span>
            </td>

            <td class="px-4 py-3 text-slate-300">
                {{ $item->created_at->format('d M Y') }}
            </td>

            <td class="px-4 py-3 text-center">
                <a href="{{ route('admin.consultations.show', $item->id) }}"
                class="text-gold hover:underline">
                    Detail
                </a>
            </td>
        </tr>
        @endforeach
        </tbody>
</table>
    <p class="text-sm text-slate-400 mt-3">
        Total: {{ $consultations->total() }} data
    </p>
</div>
</div>

@endsection
