@extends('layouts.admin')

@section('content')
<div class="max-w-4xl mx-auto">
    <div class="bg-white rounded-xl shadow p-6 space-y-4">

    <h1 class="text-2xl font-bold mb-6">
        Detail Konsultasi
    </h1>

    <div class="flex items-center justify-between mb-6">
        <div>
            @include('admin.consultation.status-badge', [
                'status' => $consultation->status
            ])
        </div>

        <div class="flex gap-2">
            {{-- Export PDF --}}
            <a href="{{ route('admin.consultations.export', $consultation->id) }}"
            target="_blank"
            class="btn-secondary px-5 py-2 bg-blue-600 text-white rounded-xl text-sm
                            hover:bg-blue-700 transition">
                📄 Export PDF
            </a>
        </div>
    </div>

        <div>
            <span class="text-gray-500 text-sm">Nama Klien</span>
            <p class="font-semibold">
                {{ $consultation->user->name ?? 'Guest' }}
            </p>
        </div>

        <div>
            <span class="text-gray-500 text-sm">Email</span>
            <p>{{ $consultation->user->email ?? '-' }}</p>
        </div>

        <div>
            <span class="text-gray-500 text-sm">Layanan</span>
            <p>{{ $consultation->service }}</p>
        </div>

        <div>
            <span class="text-gray-500 text-sm">Pesan</span>
            <p class="whitespace-pre-line">
                {{ $consultation->message }}
            </p>
        </div>

        <div>
            <span class="text-gray-500 text-sm">Status</span>
            <form method="POST"
                action="{{ route('admin.consultations.status', $consultation) }}"
                class="flex items-center gap-4 mt-6">
                @csrf

                <select name="status"
                    class="rounded-xl border-gray-300 text-sm">
                    <option value="pending" @selected($consultation->status=='pending')>
                        Pending
                    </option>
                    <option value="process" @selected($consultation->status=='process')>
                        Process
                    </option>
                    <option value="done" @selected($consultation->status=='done')>
                        Selesai
                    </option>
                </select>

                <button class="px-5 py-2 bg-blue-600 text-white rounded-xl text-sm
                            hover:bg-blue-700 transition">
                    Update Status
                </button>
            </form>
        </div>

        <div class="mt-10">
            <h3 class="font-semibold mb-4">Timeline Aktivitas</h3>

            <ol class="border-l border-gray-300 space-y-6">
                @foreach($consultation->activities as $activity)
                    <li class="ml-4">
                        <div class="text-xs text-gray-500">
                            {{ $activity->created_at->format('d M Y H:i') }}
                        </div>
                        <div class="font-medium">
                            {{ $activity->description }}
                        </div>
                    </li>
                @endforeach
            </ol>
        </div>

        <a href="{{ route('admin.consultations.index') }}"
        class="inline-block mt-6 text-blue-600 hover:underline">
            ← Kembali
        </a>

    </div>
</div>
@endsection
