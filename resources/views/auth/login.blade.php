@extends('layouts.app')

@section('content')

<div class="flex items-center justify-center min-h-screen">
    <div class="bg-dark2 p-8 rounded-xl w-full max-w-md">

        <h2 class="text-gold text-2xl mb-6 text-center">Login</h2>

        @if(session('success'))
            <div class="bg-green-500 text-white p-3 rounded mb-4 text-center">
                {{ session('success') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="bg-red-500 text-white p-3 rounded mb-4 text-center">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <input type="email" name="email" placeholder="Email"
                class="w-full mb-3 p-2 rounded bg-gray-800 text-white">

            <input type="password" name="password" placeholder="Password"
                class="w-full mb-4 p-2 rounded bg-gray-800 text-white">

            <button class="bg-gold w-full py-2 rounded text-black font-semibold">
                Login
            </button>

            <div class="text-center my-4 text-gray-400">atau</div>

            <a href="{{ route('auth.google') }}"
                class="flex items-center justify-center gap-2 bg-white text-black py-2 rounded hover:scale-105 transition">
                <img src="https://www.svgrepo.com/show/475656/google-color.svg" class="w-5">
                Login dengan Google
            </a>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>
        </form>

    </div>
</div>

@endsection