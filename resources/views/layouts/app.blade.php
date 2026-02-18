<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    {{-- SEO --}}
    <title>@yield('title', 'CV. Parama Multi Konsultan')</title>
    <meta name="description" content="@yield('meta_description')">
    
    {{-- CSS --}}
    @vite('resources/css/app.css')

</head>
<body class="bg-gray-50 text-gray-800">

    {{-- Navbar --}}
    <nav class="fixed top-0 inset-x-0 z-50 bg-white/85 backdrop-blur border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex items-center justify-between h-20">

           {{-- LOGO --}}
            <a href="{{ url('/') }}" class="flex items-center gap-3 hover:opacity-90 transition">
                <img
                    src="{{ asset('images/logo.png') }}"
                    alt="Logo CV. Parama Multi Konsultan"
                    class="h-10 w-auto">
                <span class="hidden md:inline font-semibold text-lg">
                     Parama Multi Konsultan
                </span>
                <span class="md:hidden font-bold text-lg">
                    PMK
                </span>
            </a>

            {{-- MENU --}}
            <div class="hidden md:flex items-center gap-9 text-sm font-medium">
                <a href="/" class="text-gray-700 hover:text-blue-600 transition">
                    Home
                </a>
                <a href="/#services" class="text-gray-700 hover:text-blue-600 transition">
                    Layanan
                </a>
                <a href="/portfolio" class="text-gray-700 hover:text-blue-600 transition">
                    Portfolio
                </a>
                <a href="/about" class="text-gray-700 hover:text-blue-600 transition">
                    Tentang
                </a>
                <a href="/contact" class="text-gray-700 hover:text-blue-600 transition">
                    Kontak
                </a>
            </div>

            {{-- ACTION --}}
            <div class="flex items-center gap-4">

                @guest
                    {{-- LOGIN GOOGLE --}}
                    <a href="{{ route('auth.google') }}"
                    class="flex items-center gap-2 px-4 py-2
                            border border-gray-200 rounded-xl
                            text-sm font-medium
                            hover:bg-gray-50 transition">

                        <img src="https://www.svgrepo.com/show/475656/google-color.svg"
                            class="w-4 h-4" alt="Google">

                        <span>Login</span>
                    </a>
                @endguest

                @auth
                    {{-- USER DROPDOWN --}}
                    <div class="relative group">
                        <button class="flex items-center gap-3 focus:outline-none">
                            <div class="w-9 h-9 rounded-full overflow-hidden  ring-2 ring-transparent
                                    group-hover:ring-blue-500 transition bg-gray-200 flex items-center justify-center">
                                @if (auth()->user()->avatar)
                                    <img
                                        src="{{ auth()->user()->avatar }}"
                                        alt="{{ auth()->user()->name }}"
                                        referrerpolicy="no-referrer"
                                        onerror="this.src='https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name) }}'"
                                        class="w-full h-full object-cover"
                                    />
                                @else
                                    <span class="text-sm font-semibold text-gray-600">
                                        {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                                    </span>
                                @endif
                            </div>

                            @php
                                [$label, $color] = auth()->user()->roleBadge();
                            @endphp

                            <span class="text-xs bg-{{ $color }}-100 text-{{ $color }}-700 px-2 py-1 rounded-full">
                                {{ $label }}
                            </span>
                            <span class="hidden md:block text-sm font-medium text-gray-700">
                                {{ auth()->user()->name }}
                            </span>

                            <svg class="w-4 h-4 text-gray-500 group-hover:rotate-180 transition"
                                fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path d="M6 9l6 6 6-6"/>
                            </svg>
                        </button>

                        {{-- Dropdown --}}
                        <div class="absolute right-0 mt-3 w-48 bg-white rounded-xl shadow-lg
                                    border opacity-0 scale-95
                                    group-hover:opacity-100 group-hover:scale-100
                                    transition origin-top-right z-50">

                            <a href="{{ route('dashboard') }}"
                            class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50">
                                Dashboard
                            </a>

                            <a href="/profile"
                            class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50">
                                Profil Saya
                            </a>

                            <a href="{{ route('client.consultations.index') }}"
                            class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50">
                            Riwayat Konsultasi
                            </a>

                            @auth
                                @if(auth()->user()->role === 'admin')
                                    <a href="{{ route('admin.dashboard') }}"
                                    class="block px-4 py-2 text-sm hover:bg-gray-50">
                                        Panel Admin
                                    </a>
                                @endif
                            @endauth

                            <div class="border-t"></div>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                        class="w-full text-left px-4 py-3 text-sm
                                            text-red-600 hover:bg-red-50">
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                    @if(auth()->check() && auth()->user()->role === 'client')
                                @php
                                    $unread = auth()->user()->unreadNotifications()->count();
                                @endphp

                                <a href="{{ route('client.notifications') }}" class="relative">
                                    🔔

                                    @if($unread > 0)
                                        <span class="absolute -top-2 -right-2
                                                    bg-red-600 text-white
                                                    text-[10px] min-w-[18px] h-[18px]
                                                    flex items-center justify-center
                                                    rounded-full">
                                            {{ $unread }}
                                        </span>
                                    @endif
                                </a>
                            @endif
                @endauth
            </div>

        </div>
    </div>
</nav>


    {{-- Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-slate-800 text-white">
        <div class="max-w-7xl mx-auto px-6 py-6 text-center text-sm">
            © {{ date('Y') }} CV. Parama Multi Konsultan — Madiun
        </div>
    </footer>

</body>
</html>
