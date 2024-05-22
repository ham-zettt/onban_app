<?php

namespace App\Http\Controllers\User\Order;

use App\Http\Controllers\Controller;
use App\Models\TipeLayanan;
use Illuminate\Http\Request;

class ChooseVehicleController extends Controller
{
    public function __invoke()
    {
        $allTipeLayanan = TipeLayanan::all();
        return view('user.order.order-choose-vehicle', [
            "title" => "Pilih Kendaraan",
            "nama" => session('userData')->customer->nama,
            "role" => session('userData')->role,
            "allTipeLayanan" => $allTipeLayanan
        ]);
    }
}
