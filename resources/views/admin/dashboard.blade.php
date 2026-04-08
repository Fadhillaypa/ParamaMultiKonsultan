@extends('layouts.admin')

@section('content')
<div class="flex justify-between items-center mb-8 mt-11">
    <div>
        <h1 class="text-3xl font-bold text-white">
            Dashboard Admin
        </h1>
        <p class="text-slate-400 text-sm">
            Overview data sistem secara real-time
        </p>
    </div>

    <div class="text-right">
        <p class="text-sm text-slate-400">Hari ini</p>
        <p class="text-white font-semibold">
            {{ now()->format('d M Y') }}
        </p>
    </div>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">

    {{-- TOTAL USER --}}
    <div class="bg-dark2 p-6 rounded-2xl border border-gold/20 
                hover:border-gold hover:shadow-[0_0_25px_rgba(201,166,70,0.2)] transition">
        <p class="text-slate-400 text-sm">Total Users</p>
        <h2 class="text-3xl font-bold text-white mt-2">
            {{ $totalUsers ?? 0 }}
        </h2>
    </div>

    {{-- TOTAL KONSULTASI --}}
    <div class="bg-dark2 p-6 rounded-2xl border border-gold/20 
                hover:border-gold hover:shadow-[0_0_25px_rgba(201,166,70,0.2)] transition">
        <p class="text-slate-400 text-sm">Total Konsultasi</p>
        <h2 class="text-3xl font-bold text-white mt-2">
            {{ $totalConsultations ?? 0 }}
        </h2>
    </div>

    {{-- PENDING --}}
    <div class="bg-dark2 p-6 rounded-2xl border border-yellow-400/20 
                hover:border-yellow-400 transition">
        <p class="text-slate-400 text-sm">Pending</p>
        <h2 class="text-3xl font-bold text-yellow-400 mt-2">
            {{ $pending ?? 0 }}
        </h2>
    </div>

    {{-- SELESAI --}}
    <div class="bg-dark2 p-6 rounded-2xl border border-green-400/20 
                hover:border-green-400 transition">
        <p class="text-slate-400 text-sm">Selesai</p>
        <h2 class="text-3xl font-bold text-green-400 mt-2">
            {{ $done ?? 0 }}
        </h2>
    </div>

</div>

<div class="grid lg:grid-cols-2 gap-6 mb-10">

    {{-- LINE CHART --}}
    <div class="bg-dark2 p-6 rounded-2xl border border-white/10">
        <h3 class="text-gold font-semibold mb-4">
            Konsultasi per Bulan
        </h3>
        <canvas id="lineChart"></canvas>
    </div>

    {{-- DOUGHNUT CHART --}}
    <div class="bg-dark2 p-6 rounded-2xl border border-white/10">
        <h3 class="text-gold font-semibold mb-4">
            Status Konsultasi
        </h3>
        <div class="flex justify-center items-center">
        <div class="w-auto h-auto">
            <canvas id="doughnutChart"></canvas>
        </div>
    </div>
    </div>

</div>

<div class="grid md:grid-cols-3 gap-6 mb-10">

    <a href="{{ route('admin.consultations.index') }}"
       class="bg-dark2 p-6 rounded-2xl border border-white/10 
              hover:border-gold hover:shadow-lg transition">
        <h3 class="text-white font-semibold">Kelola Konsultasi</h3>
        <p class="text-slate-400 text-sm">Lihat & update status</p>
    </a>

    <a href="{{ route('admin.portfolios.index') }}"
       class="bg-dark2 p-6 rounded-2xl border border-white/10 
              hover:border-gold hover:shadow-lg transition">
        <h3 class="text-white font-semibold">Kelola Portfolio</h3>
        <p class="text-slate-400 text-sm">Tambah & edit project</p>
    </a>

    <a href="{{ route('admin.users.index') }}"
       class="bg-dark2 p-6 rounded-2xl border border-white/10 
              hover:border-gold hover:shadow-lg transition">
        <h3 class="text-white font-semibold">Kelola Users</h3>
        <p class="text-slate-400 text-sm">Manajemen user</p>
    </a>

</div>

<div class="bg-dark2 p-6 rounded-2xl border border-white/10">
    <h3 class="text-lg font-semibold text-gold mb-4">
        Konsultasi Terbaru
    </h3>

    <div class="space-y-4">
        @foreach($latestConsultations ?? [] as $item)
            <div class="flex justify-between items-center border-b border-white/5 pb-3">
                <div>
                    <p class="text-white text-sm font-medium">
                        {{ $item->user->name ?? 'Guest' }}
                    </p>
                    <p class="text-slate-400 text-xs">
                        {{ Str::limit($item->message, 40) }}
                    </p>
                </div>

                <span class="text-xs px-2 py-1 rounded-full
                    @if($item->status=='pending') bg-yellow-400/20 text-yellow-400
                    @elseif($item->status=='process') bg-blue-400/20 text-blue-400
                    @else bg-green-400/20 text-green-400 @endif">
                    {{ $item->status }}
                </span>
            </div>
        @endforeach
    </div>
</div>

<script>
    // DATA DARI LARAVEL
    const monthlyData = @json($consultationsPerMonth);
    const statusData = @json($statusStats);

    // LABEL BULAN
    const months = ['Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agu','Sep','Okt','Nov','Des'];

    // FORMAT DATA
    const dataPerMonth = months.map((_, i) => monthlyData[i+1] ?? 0);

    // 🔥 LINE CHART
    new Chart(document.getElementById('lineChart'), {
        type: 'line',
        data: {
            labels: months,
            datasets: [{
                label: 'Konsultasi',
                data: dataPerMonth,
                borderColor: '#C9A646',
                backgroundColor: 'rgba(201,166,70,0.1)',
                tension: 0.4,
                fill: true
            }]
        },
        options: {
            plugins: {
                legend: { display: false }
            },
            scales: {
                x: {
                    ticks: { color: '#aaa' }
                },
                y: {
                    ticks: { color: '#aaa' }
                }
            }
        }
    });

    // 🔥 DOUGHNUT CHART
    new Chart(document.getElementById('doughnutChart'), {
        type: 'doughnut',
        data: {
            labels: ['Pending', 'Process', 'Done'],
            datasets: [{
                data: [
                    statusData.pending,
                    statusData.process,
                    statusData.done
                ],
                backgroundColor: [
                    '#facc15',
                    '#3b82f6',
                    '#22c55e'
                ]
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false, // 🔥 WAJIB
            plugins: {
                legend: {
                    position: 'bottom', // 🔥 biar rapi
                    labels: {
                        color: '#ddd',
                        padding: 15,
                        boxWidth: 12
                    }
                }
            }
        }
    });
</script>

@endsection