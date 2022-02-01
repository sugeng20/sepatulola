<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('pages.auth.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if(Auth::user()->role == 'ADMIN') {
                return redirect()->intended('dashboard-admin');
            } else if(Auth::user()->role == 'GURU')  {
                return redirect()->intended('dashboard-guru');
            } else if(Auth::user()->role == 'ORTU')  {
                return redirect()->intended('dashboard-ortu');
            }
        }

        return back()->withErrors([
            'username' => 'Username dan Password tidak cocok!',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
