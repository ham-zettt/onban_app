<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view("order-user/order-pilih-kendaraan", [
            "title" => "Pilih Kendaraan",
            "nama" => session('userData')->customer->nama,
            "role" => session('userData')->role
        ]);
    }
}
