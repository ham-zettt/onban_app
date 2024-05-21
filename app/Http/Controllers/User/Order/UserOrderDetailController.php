<?php

namespace App\Http\Controllers\User\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserOrderDetailController extends Controller
{
    public function index() {
        return view('user.order.order-detail', [
            "title" => "Detail Pesanan",
            "nama" => session('userData')->customer->nama,
            "role" => session('userData')->role
        ]);
    }
}
