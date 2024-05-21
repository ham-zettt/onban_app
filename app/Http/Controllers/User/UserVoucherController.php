<?php

namespace App\Http\Controllers\User;

use App\Models\Voucher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserVoucherController extends Controller
{
    public function index() {

        $allVoucher = Voucher::all();
        return view('user.voucher', [
            "title" => "Voucher",
            "nama" => session('userData')->customer->nama,
            "role" => session('userData')->role,
            "vouchers" => $allVoucher

        ]);
    }
}
