<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin Panel')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

<div class="min-h-screen flex">

    {{-- SIDEBAR --}}
    <aside class="w-64 bg-white shadow-lg hidden md:block">
        <div class="p-6 font-bold text-blue-600 text-lg">
            Admin Panel
        </div>

        <nav class="px-4 space-y-2">

            <a href="{{ route('admin.dashboard') }}"
            class="block px-4 py-2 rounded-lg text-gray-700 hover:bg-blue-50">
                Dashboard
            </a>

            <a href="{{ route('admin.consultations.index') }}"
            class="block px-4 py-2 rounded-lg text-gray-700 hover:bg-blue-50">
                Konsultasi
            </a>

            <a href="{{ route('admin.portfolios.index') }}"
            class="block px-4 py-2 rounded-lg text-gray-700 hover:bg-blue-50">
                Portfolio
            </a>

        </nav>
    </aside>

    {{-- MAIN --}}
    <main class="flex-1 p-6">
        @yield('content')
    </main>

</div>

</body>
</html>
