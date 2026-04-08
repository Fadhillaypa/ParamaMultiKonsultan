@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen">
    <div class="bg-dark2 p-8 rounded-xl w-full max-w-md">

        <h2 class="text-gold text-2xl mb-6 text-center">Register</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <input type="name" name="name" placeholder="Name"
                class="w-full mb-3 p-2 rounded bg-gray-800 text-white">

        <!-- Email Address -->
        <input type="email" name="email" placeholder="Email"
                class="w-full mb-3 p-2 rounded bg-gray-800 text-white">

        <!-- Password -->
        <input type="password" name="password" placeholder="Password"
                class="w-full mb-4 p-2 rounded bg-gray-800 text-white">
        
        <!-- Confirm Password -->
        <input type="password_confirmation" name="password_confirmation" placeholder="Confirm Password"
                class="w-full mb-4 p-2 rounded bg-gray-800 text-white">

        <button class="bg-gold w-full py-2 rounded text-black font-semibold">
                Register
            </button>

            <div class="text-center my-4 text-gray-400">atau</div>

            <a href="{{ route('auth.google') }}"
                class="flex items-center justify-center gap-2 bg-white text-black py-2 rounded">
                <img src="https://www.svgrepo.com/show/475656/google-color.svg" class="w-5">
                Login dengan Google
            </a>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Sudah memiliki akun?') }}
            </a>
        </div>
    </form>
    </div>
</div>
@endsection
