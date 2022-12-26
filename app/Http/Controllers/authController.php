<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class authController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function login_action(Request $request)
    {
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect('biodata');
        }
        return back()->with('pesan-danger', 'Username atau Password anda salah');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function register_action(Request $request)
    {
        $user = new User();
        $user->username = $request->username;
        $user->password = Hash::make($request->password);

        $user->save();
        return redirect('login')->with('status','kamu berhasil registrasi');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
