<?php

namespace App\Http\Controllers\User\Order;

use App\Models\TipeLayanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pesanan;

class UserOrderController extends Controller
{
    public function createOrder() {
        $id_customer = session('userData')->customer->id_customer;

        $order = Pesanan::create([
            'customer_id' => $id_customer,
        ]);

        return redirect()->route('order-choose-vehicle', ['id_order' => $order->id_order]);
    }

    public function chooseVehicle($id_order) {
        $allTipeLayanan = TipeLayanan::all();
        return view('user.order.order-choose-vehicle', [
            "title" => "Pilih Kendaraan",
            "nama" => session('userData')->customer->nama,
            "role" => session('userData')->role,
            "allTipeLayanan" => $allTipeLayanan,
            "id_order" => $id_order
        ]);
    }






    public function cancelOrder($id_order) {
        $order = Pesanan::find($id_order);
        $order->update([
            'status_order' => 'Dibatalkan',
        ]);
        return redirect()->route('home');
    }


}
