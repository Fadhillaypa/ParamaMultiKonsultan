@extends('layouts.app')

@section('content')
<section class="max-w-5xl mx-auto py-10 px-6">
    <h1 class="text-2xl font-bold mb-6">Notifikasi</h1>

    @forelse($notifications as $n)
        <div class="bg-white p-4 rounded-xl shadow mb-4">
            <p class="font-medium">{{ $n->data['message'] }}</p>
            <p class="text-sm text-gray-500 mt-1">
                {{ $n->created_at->diffForHumans() }}
            </p>
        </div>
    @empty
        <p class="text-gray-500">Belum ada notifikasi.</p>
    @endforelse
</section>
@endsection
