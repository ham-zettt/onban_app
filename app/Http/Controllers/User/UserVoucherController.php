<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserVoucherController extends Controller
{
    public function index() {
        return view('user.voucher', [
            "title" => "Voucher",
            "nama" => session('userData')->customer->nama,
            "role" => session('userData')->role
        ]);
    }
}
