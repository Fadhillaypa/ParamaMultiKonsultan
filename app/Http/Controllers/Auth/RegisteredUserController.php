<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', 'min:6'],
        ]);

        $adminEmails = array_map('trim', config('app.admin_emails') ?? []);
        $email = trim($request->email);

        $isAdmin = in_array($email, $adminEmails);

        $user = new \App\Models\User();

        $user->name = $request->name;
        $user->email = $email;
        $user->password = Hash::make($request->password);
        $user->is_admin = $isAdmin;

        $user->save();

        // ❌ HAPUS INI
        // auth()->login($user);

        // ✅ REDIRECT KE LOGIN
        return redirect()->route('login')
            ->with('success', 'Registrasi berhasil, silakan login');
            }
}
