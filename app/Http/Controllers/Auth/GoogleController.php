<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class GoogleController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();

        // 🔥 ambil list admin dari config
        $adminEmails = config('app.admin_emails') ?? [];

        $isAdmin = in_array($googleUser->email, $adminEmails);

        $user = User::where('email', $googleUser->email)->first();

        if (!$user) {
            $user = User::create([
                'name' => $googleUser->name,
                'email' => $googleUser->email,
                'avatar' => $googleUser->avatar,
                'google_id' => $googleUser->id,
                'password' => null,
                'is_admin' => $isAdmin,
            ]);
        }

        auth()->login($user);

        // 🔥 redirect beda role
        if ($user->is_admin) {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->route('dashboard');
    }

}