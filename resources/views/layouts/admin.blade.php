<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin Panel')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite('resources/css/app.css')
</head>
{{-- DataTables CSS --}}
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
{{-- CUSTOM STYLE --}}
    <style>
        table.dataTable {
            color: #e5e7eb;
        }

        .dataTables_wrapper {
            color: #9ca3af !important; 
        }

        .dataTables_wrapper .dataTables_filter input {
            background: #1f2937 !important;
            border: 1px solid #d4af37 !important;
            color: white !important;
            padding: 6px;
            border-radius: 6px;
        }

        .dataTables_wrapper .dataTables_length select {
            background: #1f2937 !important;
            color: white !important;
            border: 1px solid #d4af37 !important;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button {
            color: white !important;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            background: #d4af37 !important;
            color: black !important;
            border-radius: 6px;
        }
        .dataTables_wrapper .dataTables_filter label {
            color: #d4af37;
        }

        .dataTables_wrapper .dataTables_info {
            color: #9ca3af;
        }

        table.dataTable tbody tr {
            border-bottom: 1px solid rgba(255,255,255,0.08) !important;
        }

        table.dataTable thead th {
            border-bottom: 1px solid rgba(212,175,55,0.4) !important; /* gold */
        }

        table.dataTable thead {
            color: #d4af37 !important; /* gold */
        }

        .dataTables_wrapper .dataTables_filter input {
            background: #1f2937 !important;
            border: 1px solid #d4af37 !important;
            color: white !important;
        }

        .dataTables_wrapper .dataTables_length select {
            background: #1f2937 !important;
            color: white !important;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button {
            color: #e5e7eb !important;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            background: #d4af37 !important;
            color: black !important;
        }

        table.dataTable tbody tr:hover {
            background-color: rgba(212,175,55,0.05) !important;
        }
    </style>

{{-- CHART.JS --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<body class="bg-dark2">
    <div class="fixed inset-0 -z-10 
        bg-[radial-gradient(circle_at_top,rgba(201,166,70,0.05),transparent)]">
    </div>

<div class="min-h-screen flex">

    {{-- SIDEBAR --}}
    <aside class="w-64 bg-dark shadow-lg hidden md:block">
        <a href="{{ url('/') }}" class="flex items-center gap-1 hover:opacity-90 transition">
        <img
                    src="{{ asset('images/logo.png') }}"
                    alt="Logo CV. Parama Multi Konsultan"
                    class="h-14 w-auto ml-9 mt-8">
        <div class="p-4 mt-8 font-bold text-gold tracking-tight text-lg">
            Panel Admin
        </div>
        </a>

        <nav class="px-4 space-y-4 mt-11">

            <a href="{{ route('admin.dashboard') }}"
            class="block px-4 py-2 rounded-lg text-slate-300 hover:bg-gold/50
            {{ request()->routeIs('admin.dashboard*') ? 'bg-gold/80 text-white' : 'hover:bg-gold/50' }}">
                Dashboard
            </a>

            <a href="{{ route('admin.users.index') }}"
            class="block px-4 py-2 rounded-lg text-slate-300 hover:bg-gold/50
            {{ request()->routeIs('admin.users.*') ? 'bg-gold/80 text-white' : 'hover:bg-gold/50' }}">
                Users
            </a>

            <a href="{{ route('admin.consultations.index') }}"
            class="block px-4 py-2 rounded-lg text-slate-300 hover:bg-gold/50
            {{ request()->routeIs('admin.consultations.*') ? 'bg-gold/80 text-white' : 'hover:bg-gold/50' }}">
                Konsultasi
            </a>

            <a href="{{ route('admin.portfolios.index') }}"
            class="block px-4 py-2 rounded-lg text-slate-300 hover:bg-gold/50
            {{ request()->routeIs('admin.portfolios.*') ? 'bg-gold/80 text-white' : 'hover:bg-gold/50' }}">
                Portfolio
            </a>

            <a href="{{ route('admin.services.index') }}"
            class="block px-4 py-2 rounded-lg transition text-slate-300
            {{ request()->routeIs('admin.services.*') ? 'bg-gold/80 text-white' : 'hover:bg-gold/50' }}">
                Services
            </a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit"
                    onclick="return confirm('Yakin ingin logout?')"
                    class="w-full flex items-center gap-2 px-4 py-2 rounded-lg
                        text-red-300 hover:bg-red-400 hover:text-white
                        transition duration-300">

                    🔓 Logout
                </button>
            </form>

        </nav>
    </aside>

    {{-- MAIN --}}
    <main class="flex-1 p-6">
        @yield('content')
    </main>

</div>

</body>
</html>
