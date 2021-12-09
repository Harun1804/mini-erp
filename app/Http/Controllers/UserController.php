<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Tagihan;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        $pelanggan = Pelanggan::count();
        $tagihan = Tagihan::count();
        return view('dashboard',compact(['pelanggan','tagihan']));
    }

    public function pelanggan()
    {
        return view('pelanggan');
    }

    public function tagihan()
    {
        return view('tagihan');
    }

    public function detailTagihan($id)
    {
        return view('detailtagihan',compact('id'));
    }
}
