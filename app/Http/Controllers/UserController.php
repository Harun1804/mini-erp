<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function pelanggan()
    {
        return view('pelanggan');
    }

    public function tagihan()
    {
        return view('tagihan');
    }
}
