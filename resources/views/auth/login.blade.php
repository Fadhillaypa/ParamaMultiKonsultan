@extends('layouts.app')

@section('content')

<div class="min-h-screen flex items-center justify-center px-4 bg-dark relative overflow-hidden">

    {{-- BACKGROUND GLOW --}}
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(201,166,70,0.08),transparent)]"></div>

    <div class="relative w-full max-w-md">

        <div class="bg-dark2/90 backdrop-blur p-8 rounded-2xl shadow-xl border border-gold/30">

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
                <div>
                    <input type="password" name="password" placeholder="Password"
                        class="w-full px-4 py-3 rounded-xl bg-gray-800 text-white 
                        focus:outline-none focus:ring-2 focus:ring-gold transition">
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
</div>

@endsection