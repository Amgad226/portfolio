<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'password' => ['required', 'string', 'max:255'],
        ]);

        $passwordHash = config('services.admin.password_hash');

        if (! $passwordHash) {
            return back()->with('error', 'Admin access is not configured.');
        }

        if (! Hash::check($credentials['password'], $passwordHash)) {
            return back()->with('error', 'Incorrect password.');
        }

        $request->session()->regenerate();
        $request->session()->put('authenticated', true);

        return redirect()->route('dashboard');
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('app');
    }
}
