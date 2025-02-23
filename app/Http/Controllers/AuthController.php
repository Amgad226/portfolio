<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $correctPassword = env('ADMIN_PASSWORD');
        if (!$correctPassword) {
            return back()->with('error', 'password is not registered');
        }
        $request->validate([
            'password' => 'required|string'
        ]);

        if ($request->password === $correctPassword) {
            session(['authenticated' => true]); 
            return redirect()->route('dashboard');
        }

        return back()->with('error', 'Incorrect password.');
    }

    public function logout()
    {
        session()->forget('authenticated');
        return redirect()->route('app');
    }
}
