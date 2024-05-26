<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserOrderHistoriController extends Controller
{
    public function index() {
        return view('user.orderHistory', [
            "title" => "Histori Order",
            "nama" => session('userData')->customer->nama,
            "role" => session('userData')->role
        ]);
    }
}
