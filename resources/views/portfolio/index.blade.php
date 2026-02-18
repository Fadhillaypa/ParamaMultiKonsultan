@extends('layouts.app')

@section('content')
<section class="py-28 bg-gray-50">
    <div class="max-w-6xl mx-auto px-6">

        <h1 class="text-4xl font-bold mb-10 text-center">
            Portfolio Proyek
        </h1>

        <div class="grid md:grid-cols-3 gap-8">
            @forelse($portfolios as $portfolio)
                <a href="{{ route('portfolio.show', $portfolio) }}"
                   class="bg-white rounded-2xl shadow hover:shadow-lg transition overflow-hidden">

                    @if($portfolio->thumbnail)
                        <img src="{{ asset('storage/' . $portfolio->thumbnail) }}"
                             class="w-full h-48 object-cover">
                    @endif

                    <div class="p-5">
                        <h3 class="text-lg font-semibold">
                            {{ $portfolio->title }}
                        </h3>

                        <p class="text-sm text-gray-500">
                            {{ $portfolio->location ?? '-' }}
                            @if($portfolio->year)
                                • {{ $portfolio->year }}
                            @endif
                        </p>
                    </div>
                </a>
            @empty
                <p class="text-gray-500">Belum ada portfolio.</p>
            @endforelse
        </div>

    </div>
</section>
@endsection