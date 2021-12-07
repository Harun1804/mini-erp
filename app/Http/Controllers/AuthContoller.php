<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthContoller extends Controller
{
    public function loginPage()
    {
        # code...
    }

    public function login(Request $request)
    {
        $data = [
            'username' => ['required'],
            'password' => ['required']
        ];

        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'username' => 'Data Anda Salah',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->regenerate();
        return redirect()->route('login')->with('success','Berhasil Logout');
    }
}
