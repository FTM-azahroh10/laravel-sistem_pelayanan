<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function login()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {
        $authentication = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);


        if (auth()->attempt($authentication)) {
            $request->session()->regenerate();
            if (auth()->user()->role == 'admin') {
                return redirect('/dashboard-admin')->with('success', 'Login Berhasil, Halo ' . auth()->user()->name);
            } else if (auth()->user()->role == 'superadmin') {
                return redirect('/dashboard')->with('success', 'Login Berhasil, Halo ' . auth()->user()->name);
            } else {
                return redirect('/dashboard')->with('success', 'Login Berhasil, Halo ' . auth()->user()->name);
            }
        }


        return back()->with('error', 'Login Gagal');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
