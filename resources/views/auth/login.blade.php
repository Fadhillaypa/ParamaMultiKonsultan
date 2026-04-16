@extends('layouts.auth')

@section('content')

<div class="relative w-full max-w-md">

        {{-- MOBILE LOGO --}}
        <div class="md:hidden text-center mb-6">
            <img src="{{ asset('images/logo.png') }}" class="mx-auto h-14 mb-3">

            <h1 class="text-lg font-semibold text-gold">
                Parama Multi Konsultan
            </h1>
        </div>

        {{-- CARD --}}
        <div data-aos="fade-up"
            data-aos-duration="800"
            class="bg-dark2/90 backdrop-blur p-8 rounded-2xl shadow-xl border border-gold/30">

            {{-- TITLE --}}
            <h2 class="text-gold text-3xl font-bold text-center mb-2">
                Selamat Datang
            </h2>
            <p class="text-center text-slate-400 mb-6 text-sm">
                Masuk untuk melanjutkan ke dashboard
            </p>

            {{-- ERROR --}}
            @if ($errors->any())
                <div class="bg-red-500/90 text-white p-3 rounded-lg mb-4 text-center text-sm">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf

                {{-- EMAIL --}}
                <div>
                    <input type="email" name="email" placeholder="Email"
                        class="w-full px-4 py-3 rounded-xl bg-gray-800 text-white 
                        focus:outline-none focus:ring-2 focus:ring-gold transition">
                </div>

                {{-- PASSWORD --}}
                <div x-data="{ show: false }" class="relative">
                    <input 
                        :type="show ? 'text' : 'password'" 
                        name="password" 
                        placeholder="Password"
                        class="w-full px-4 py-3 rounded-xl bg-gray-800 text-white 
                            focus:outline-none focus:ring-2 focus:ring-gold transition pr-12">

                    {{-- ICON --}}
                    <button type="button" 
                        @click="show = !show"
                        class="absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 hover:text-gold">

                        {{-- EYE OFF --}}
                        <svg x-show="show" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path d="M2.458 12C3.732 7.943 7.523 5 12 5
                                    c4.478 0 8.268 2.943 9.542 7
                                    -1.274 4.057-5.064 7-9.542 7
                                    -4.477 0-8.268-2.943-9.542-7z"/>
                            <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>

                        {{-- EYE --}}
                        <svg x-show="!show" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path d="M13.875 18.825A10.05 10.05 0 0112 19
                                    c-4.478 0-8.268-2.943-9.542-7
                                    a9.956 9.956 0 012.042-3.362"/>
                            <path d="M6.223 6.223A9.956 9.956 0 0112 5
                                    c4.478 0 8.268 2.943 9.542 7
                                    a9.956 9.956 0 01-4.132 5.411"/>
                            <path d="M15 12a3 3 0 00-3-3"/>
                            <path d="M3 3l18 18"/>
                        </svg>

                    </button>
                </div>

                {{-- REMEMBER --}}
                <div class="flex items-center justify-between text-sm text-slate-400">
                    <label class="flex items-center gap-2">
                        <input type="checkbox" name="remember" class="accent-gold">
                        Remember me
                    </label>

                    <a href="{{ route('password.request') }}" class="hover:text-gold">
                        Lupa password?
                    </a>
                </div>

                {{-- BUTTON LOGIN --}}
                <button 
                    class="w-full py-3 rounded-xl bg-gold text-black font-semibold
                           hover:scale-105 transition duration-300
                           hover:shadow-[0_0_20px_rgba(201,166,70,0.6)]">
                    Login
                </button>

                {{-- DIVIDER --}}
                <div class="text-center text-slate-500 text-sm">atau</div>

                {{-- GOOGLE --}}
                <a href="{{ route('auth.google') }}"
                    class="flex items-center justify-center gap-3 bg-white text-black py-3 rounded-xl 
                           hover:scale-105 transition">
                    <img src="https://www.svgrepo.com/show/475656/google-color.svg" class="w-5">
                    Login dengan Google
                </a>

                <div class="text-center mt-6 text-sm text-slate-400">
                    Belum punya akun?
                    <a href="{{ route('register') }}" class="text-gold hover:underline">
                        Daftar sekarang
                    </a>
                </div>

            </form>

        </div>

    </div>

@endsection