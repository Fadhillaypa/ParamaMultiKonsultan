<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Auth - Parama Multi Konsultan</title>
    @vite('resources/css/app.css')
    <script defer src="https://unpkg.com/alpinejs"></script>
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>

<body class="bg-dark text-white relative">

    {{-- BACK BUTTON --}}
    <a href="{{ url('/') }}" 
       data-aos="fade-up"
        data-aos-duration="800"
        class="absolute top-5 left-8 z-50 flex items-center gap-2 
              px-4 py-2 rounded-xl bg-dark2/80 backdrop-blur
              border border-gold/40
              text-slate-300 hover:text-gold
              hover:scale-105 transition duration-300
              shadow-lg hover:shadow-[0_0_15px_rgba(201,166,70,0.6)]">

        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24">
            <path d="M15 19l-7-7 7-7"/>
        </svg>
    </a>

    <div class="min-h-screen grid md:grid-cols-2">

        {{-- LEFT (DESKTOP ONLY) --}}
        <div class="hidden md:flex items-center justify-center bg-dark relative">
            <div class="text-center px-10">
                <img src="{{ asset('images/logo.png') }}" 
                    data-aos="fade-up"
                    data-aos-duration="700"
                    class="h-16 mx-auto mb-6">

                <h1 data-aos="fade-up"
                    data-aos-duration="800"
                    class="text-3xl font-bold text-gold mb-3">
                    Parama Multi Konsultan
                </h1>

                <p data-aos="fade-up"
                    data-aos-duration="1000"
                    class="text-slate-400 text-sm">
                    Solusi profesional untuk proyek konstruksi Anda
                </p>
            </div>
        </div>

        {{-- RIGHT (FORM) --}}
        <div class="flex items-center justify-center px-6 py-10">
            @yield('content')
        </div>

    </div>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true
        });
    </script>

</body>
</html>