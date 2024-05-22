<?php

namespace App\Http\Controllers\User\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KonfirmasiOrderController extends Controller
{
    public function index() {
        return view("user.order.konfirmasi-order", [
            "title" => "Konfirmasi Order",
            "nama" => session('userData')->customer->nama,
            "role" => session('userData')->role

        ]);
    }
}
