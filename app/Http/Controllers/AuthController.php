<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('pages.auth.login');
    }

    public function register()
    {
        return view('pages.auth.register');
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

    public function registration(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users,username',
            'password' => 'required',
            'name' => 'required',
            'no_hp' => 'required',
        ]);

        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        $data['role'] = 'ORTU';
        User::create($data);
        return redirect()->route('login')->with('status', 'Berhasil Daftar Akun Sepatu lola, Silahkan masuk menggunakan akun username dan password yang sudah didaftarkan');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


}
