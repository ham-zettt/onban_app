<?php

namespace App\Http\Controllers\User\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChooseVehicleController extends Controller
{
    public function __invoke()
    {
        return view('user.order.order-choose-vehicle', [
            "title" => "Pilih Kendaraan",
            "nama" => session('userData')->customer->nama,
            "role" => session('userData')->role
        ]);
    }
}
