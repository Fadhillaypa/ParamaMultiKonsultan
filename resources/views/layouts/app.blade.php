<!DOCTYPE html><<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="{{ $service->description ?? 'Jasa konsultan profesional' }}">
    <meta name="keywords" content="konsultan, perencanaan, konstruksi, jasa konsultan">
    <meta name="author" content="CV Parama Multi Konsultan">
    <meta property="og:title" content="{{ $service->title ?? '' }}">
    <meta property="og:description" content="{{ $service->description ?? '' }}">
    <meta property="og:type" content="website">
    
    {{-- SEO --}}
    <title>@yield('title', 'CV. Parama Multi Konsultan')</title>
    <meta name="description" content="@yield('meta_description', 'CV Parama Multi Konsultan adalah jasa konsultan perencanaan profesional terpercaya.')">
    {{-- CSS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
    <style>
        * {
            transition: all 0.3s ease;
        }
    </style>
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <a href="https://wa.me/6281296990171?text=Halo,%20Saya%20ingin%20konsultasi%20mengenai%20proyek!"
    target="_blank"
    class="fixed bottom-6 right-6 bg-green-500 p-4 rounded-full hover:scale-110 transition z-50 animate-bounce shadow-[0_0_20px_rgba(34,197,94,0.7)]">

        <!-- Icon WhatsApp -->
        <svg xmlns="http://www.w3.org/2000/svg" 
            class="w-6 h-6 text-white" 
            fill="currentColor" 
            viewBox="0 0 24 24">
            <path d="M20.52 3.48A11.91 11.91 0 0012.03 0C5.4 0 .04 5.36.04 11.99c0 2.11.55 4.18 1.59 6.01L0 24l6.16-1.62a11.96 11.96 0 005.87 1.5h.01c6.63 0 12-5.36 12-11.99 0-3.2-1.25-6.2-3.52-8.41zM12.04 21.7h-.01a9.76 9.76 0 01-4.97-1.36l-.36-.21-3.66.96.98-3.57-.23-.37a9.74 9.74 0 01-1.5-5.16c0-5.4 4.39-9.79 9.79-9.79 2.61 0 5.06 1.02 6.91 2.87a9.72 9.72 0 012.87 6.91c0 5.4-4.39 9.79-9.79 9.79zm5.39-7.33c-.29-.15-1.7-.84-1.96-.93-.26-.1-.45-.15-.64.15-.19.29-.74.93-.91 1.12-.17.19-.34.21-.63.07-.29-.15-1.22-.45-2.32-1.44-.86-.77-1.44-1.73-1.61-2.02-.17-.29-.02-.45.13-.6.13-.13.29-.34.43-.51.14-.17.19-.29.29-.48.1-.19.05-.36-.02-.51-.07-.15-.64-1.54-.88-2.12-.23-.56-.47-.48-.64-.49l-.55-.01c-.19 0-.51.07-.77.36-.26.29-1 1-1 2.43 0 1.43 1.03 2.81 1.17 3 .14.19 2.02 3.08 4.89 4.32.68.29 1.21.46 1.63.59.68.22 1.29.19 1.78.12.54-.08 1.7-.7 1.94-1.38.24-.68.24-1.26.17-1.38-.07-.12-.26-.19-.55-.34z"/>
        </svg>
    </a>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script>
        AOS.init({
            duration: 800,
            once: true
        });
    </script>

<body class="bg-dark text-white">

    {{-- Navbar --}}
    <nav x-data="{ open: false }"
     class="fixed top-0 inset-x-0 z-50 bg-dark2/85 backdrop-blur border-b border-white/10">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex items-center justify-between h-20">

           {{-- LOGO --}}
            <a href="{{ url('/') }}" class="flex items-center gap-3 hover:opacity-90 transition">
                <img
                    src="{{ asset('images/logo.png') }}"
                    alt="Logo CV. Parama Multi Konsultan"
                    class="h-10 w-auto">
                <span class="hidden md:inline font-semibold tracking-tight text-lg">
                     Parama Multi Konsultan
                </span>
                <span class="md:hidden font-bold tracking-tight text-lg">
                    PMK
                </span>
            </a>

            {{-- MENU --}}
            <div class="hidden md:flex items-center gap-9 text-sm font-medium">
                <a href="/" class="text-slate-200 tracking-tight hover:text-gold transition">
                    Beranda
                </a>
                <a href="/#services" class="text-slate-200 tracking-tight hover:text-gold transition">
                    Layanan
                </a>
                <a href="/portfolio" class="text-slate-200 tracking-tight hover:text-gold transition">
                    Portfolio
                </a>
                <a href="/about" class="text-slate-200 tracking-tight hover:text-gold transition">
                    Tentang
                </a>
                <a href="/contact" class="text-slate-200 tracking-tight hover:text-gold transition">
                    Kontak
                </a>
            </div>

            {{-- ACTION --}}
            <div class="flex items-center gap-4">
                {{-- ACTION DESKTOP ONLY --}}
                <div class="hidden md:flex items-center gap-3">
                    @guest
                        <!-- LOGIN -->
                        <a href="{{ route('login') }}" class="relative px-5 py-2 text-sm font-semibold text-white border border-gold rounded-xl
                            overflow-hidden group transition">
                            <span class="relative z-10 flex items-center tracking-tight gap-2">
                                <!-- ICON -->
                                <svg class="w-4 h-4 transition tracking-tight group-hover:rotate-6" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path d="M16 11V7a4 4 0 10-8 0v4"/>
                                    <rect x="4" y="11" width="16" height="9" rx="2"/>
                                </svg>
                                Masuk
                            </span>

                            <!-- animasi background -->
                            <span class="absolute inset-0 bg-gold scale-x-0 group-hover:scale-x-100 origin-left transition duration-300"></span>
                        </a>

                        <!-- REGISTER -->
                        <a href="{{ route('register') }}"
                        class="relative px-5 py-2 text-sm font-semibold text-black bg-gold rounded-xl
                                overflow-hidden group transition">

                            <span class="relative z-10 flex items-center gap-2 tracking-tight group-hover:text-white transition">
                                <svg class="w-4 h-4 transition tracking-tight group-hover:rotate-6" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path d="M12 20h9"/>
                                    <path d="M16.5 3.5a2.1 2.1 0 113 3L7 19l-4 1 1-4z"/>
                                </svg>
                                Daftar
                            </span>

                            <!-- 🔥 REVERSE ANIMATION -->
                            <span class="absolute inset-0 bg-dark scale-x-0 group-hover:scale-x-100 origin-right transition duration-300"></span>
                        </a>
                    @endguest

                    @auth
                        {{-- USER DROPDOWN --}}
                        <div class="relative group">
                            <button class="flex items-center gap-3 focus:outline-none">
                                <div class="w-9 h-9 rounded-full overflow-hidden  ring-2 ring-transparent
                                        group-hover:ring-gold transition bg-slate-200 flex items-center justify-center">
                                    @if (auth()->user()->avatar)
                                        <img
                                            src="{{ auth()->user()->avatar }}"
                                            alt="{{ auth()->user()->name }}"
                                            referrerpolicy="no-referrer"
                                            onerror="this.src='https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name) }}'"
                                            class="w-full h-full object-cover"
                                        />
                                    @else
                                        <span class="text-sm font-semibold text-white">
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
                                <span class="hidden md:block text-sm font-medium text-slate-300">
                                    {{ auth()->user()->name }}
                                </span>

                                <svg class="w-4 h-4 text-slate-400 group-hover:rotate-180 transition"
                                    fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path d="M6 9l6 6 6-6"/>
                                </svg>
                            </button>

                            {{-- Dropdown --}}
                            <div class="absolute right-0 mt-3 w-48 bg-slate-300 rounded-xl shadow-lg
                                        border opacity-0 scale-95
                                        group-hover:opacity-100 group-hover:scale-100
                                        transition origin-top-right z-50">

                                <a href="{{ route('dashboard') }}"
                                class="block px-4 py-3 text-sm text-gray-700 hover:bg-gold">
                                    Dashboard
                                </a>

                                <a href="/profile"
                                class="block px-4 py-3 text-sm text-gray-700 hover:bg-gold">
                                    Profil Saya
                                </a>

                                <a href="{{ route('client.consultations.index') }}"
                                class="block px-4 py-3 text-sm text-gray-700 hover:bg-gold">
                                Riwayat Konsultasi
                                </a>

                                @auth
                                    @if(auth()->user()->is_admin)
                                        <a href="{{ route('admin.dashboard') }}"
                                        class="block px-4 py-2 text-sm hover:bg-gold">
                                            Panel Admin
                                        </a>
                                    @endif
                                @endauth

                                <div class="border-t"></div>

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit"
                                            class="w-full text-left px-4 py-3 text-sm
                                                text-red-400 hover:bg-gold">
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
                                                        bg-red-400 text-white
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

                {{-- HAMBURGER (MOBILE ONLY) --}}
                <button @click="open = !open"
                    class="md:hidden text-white focus:outline-none">

                    <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>

                    <svg x-show="open" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M6 6l12 12M6 18L18 6"/>
                    </svg>
                </button>
            </div>

        </div>
        {{-- MOBILE MENU --}}
        <div x-show="open"
            @click.away="open = false"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-2"
            x-transition:enter-end="opacity-100 translate-y-0"

            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-2"

            class="md:hidden bg-dark2 border-t border-white/10 px-6 py-4 space-y-4">

            <a href="/" class="block text-slate-200 hover:text-gold">Beranda</a>
            <a href="/#services" class="block text-slate-200 hover:text-gold">Layanan</a>
            <a href="/portfolio" class="block text-slate-200 hover:text-gold">Portfolio</a>
            <a href="/about" class="block text-slate-200 hover:text-gold">Tentang</a>
            <a href="/contact" class="block text-slate-200 hover:text-gold">Kontak</a>

            @guest
                <div class="pt-4 border-t border-white/10 space-y-2">
                    <a href="{{ route('login') }}" class="block text-white">Masuk</a>
                    <a href="{{ route('register') }}" class="block text-gold">Daftar</a>
                </div>
            @endguest

            @auth
                <div class="pt-4 border-t border-white/10 space-y-2">
                    <a href="{{ route('dashboard') }}" class="block text-white">Dashboard</a>
                    <a href="/profile" class="block text-white">Profil</a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="text-red-400">Logout</button>
                    </form>
                </div>
            @endauth
        </div>
    </div>
</nav>


    {{-- Content --}}
    <main>
        @yield('content')

        {{-- POPUP NOTIF --}}
        @if(session('success'))
        <div 
            x-data="{ show: true }"
            x-show="show"
            x-init="setTimeout(() => show = false, 3000)"

            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-5"
            x-transition:enter-end="opacity-100 translate-y-0"

            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"

            class="fixed top-5 right-5 z-50 bg-green-500 text-white px-6 py-3 rounded-xl shadow-lg"
        >
            <div class="flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="3"
                    viewBox="0 0 24 24">
                    <path d="M5 13l4 4L19 7"/>
                </svg>

                <span>{{ session('success') }}</span>
            </div>
        </div>
        @endif
    </main>

    {{-- Footer --}}
    <footer class="bg-dark text-slate-300 pt-14 pb-8">
    <div class="max-w-7xl mx-auto px-6">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">

            {{-- BRAND + SOCIAL --}}
            <div class="text-center md:text-left">
                <h3 class="text-xl font-semibold text-gold/80 mb-3">
                    Parama Multi Konsultan
                </h3>

                <p class="text-sm leading-relaxed mb-4">
                    Konsultan perencanaan profesional terpercaya dengan standar nasional.
                </p>

                {{-- SOCIAL --}}
                <div>
                    <h4 class="text-gold/80 font-semibold mb-5 mt-8">Ikuti Kami</h4>

                    <div class="flex justify-center md:justify-start gap-8">
                        <a href="https://www.instagram.com/parama.mk?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank"
                            class="hover:text-gold transition duration-300 hover:scale-125">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="/portfolio"
                            class="hover:text-gold transition duration-300 hover:scale-125">
                            <i class="fas fa-briefcase"></i>
                        </a>
                        <a href="mailto:parama.multikonsult@gmail.com"
                            class="hover:text-gold transition duration-300 hover:scale-125">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <a href="https://www.google.com/maps?q=PARAMA+Multi+Konsultan" target="_blank"
                            class="hover:text-gold transition duration-300 hover:scale-125">
                            <i class="fas fa-map-marker-alt"></i>
                        </a>
                        <a href="https://wa.me/6281296990171" target="_blank"
                            class="hover:text-gold transition duration-300 hover:scale-125">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>

            {{-- NAVIGATION --}}
            <div class="text-center md:text-left">
                <h4 class="text-gold/80 font-semibold mb-4">Navigasi</h4>
                <ul class="space-y-2">
                    <li><a href="/" class="hover:text-gold transition duration-300">Beranda</a></li>
                    <li><a href="/#services" class="hover:text-gold transition duration-300">Layanan</a></li>
                    <li><a href="/portfolio" class="hover:text-gold transition duration-300">Portfolio</a></li>
                    <li><a href="/about" class="hover:text-gold transition duration-300">Tentang</a></li>
                    <li><a href="/contact" class="hover:text-gold transition duration-300">Kontak</a></li>
                </ul>
            </div>

            {{-- KONTAK --}}
            <div class="text-center md:text-left">
                <h4 class="text-gold/80 font-semibold mb-4">Kontak</h4>

                <ul class="space-y-2 text-sm">
                    <li>📍 Perum Griya Gading Indah A-10, Kel. Pandean, Kec. Taman, Kota Madiun, Jawa Timur</li>
                    <li>📞 0812-9699-0171</li>
                    <li>✉️ parama.multikonsult@gmail.com</li>
                    <li>🕒 Senin - Jumat, 08:00 - 15:00 WIB</li>
                    <li>🕒 Sabtu, 08:00 - 13:00 WIB</li>
                </ul>
            </div>

            {{-- MAP --}}
            <div>
                <h4 class="text-gold/80 font-semibold mb-4 text-center md:text-left">
                    Lokasi Kami
                </h4>

                <div class="w-full h-52 md:h-56 lg:h-48 rounded-xl overflow-hidden relative shadow-[0_0_20px_rgba(201,166,70,0.3)]">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.3389778834644!2d111.5314276!3d-7.6466499!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79bf88bdd30bb5%3A0x6ba07e20baaf5c43!2sPARAMA%20Multi%20Konsultan!5e0!3m2!1sid!2sid!4v1774845387694!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                            style="border:0;" allowfullscreen loading="lazy"
                        class="w-full h-full border-0" loading="lazy">
                    </iframe>

                    {{-- BUTTON OPEN MAP --}}
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent pointer-events-none"></div>
                    <a href="https://www.google.com/maps?q=PARAMA+Multi+Konsultan"
                    target="_blank"
                    class="absolute bottom-3 right-3 bg-gold text-white text-xs px-3 py-1 rounded-lg shadow hover:scale-105 transition">
                        Buka Maps
                    </a>

                </div>
            </div>

        </div>

        {{-- COPYRIGHT --}}
        <div class="mt-12 border-t border-gold/40 pt-6 text-center text-sm text-slate-500">
            © {{ date('Y') }} Parama Multi Konsultan. All rights reserved.
        </div>

    </div>
</footer>

</body>
        </iframe>
        </div>
    </div>
    </footer>
</body>
</html>
