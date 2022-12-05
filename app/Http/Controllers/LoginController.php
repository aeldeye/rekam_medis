<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        if (Auth::user()) {
            if (auth()->user()->level == 1)
                return redirect()->intended('/admin/dashboard');
            elseif (auth()->user()->level == 2)
                return redirect()->intended('/user/dashboard');
        }

        return view('login.login_index');
    }

    public function proses(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            if (auth()->user()->level == 1) {
                // dd(auth()->user()->role);
                return redirect('/admin/dashboard')->with('pesan', 'Anda Login Sebagai "' . auth()->user()->name . '"');
            } elseif (auth()->user()->level == 2) {
                return redirect('/user/dashboard')->with('pesan', 'Anda Login Sebagai "' . auth()->user()->name . '"');
            }
        } else {
            return redirect('/login')->with('gagal', 'Periksa Username dan Password anda');
        }

        return redirect()->back();
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
