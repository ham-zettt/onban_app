<?php

namespace App\Http\Controllers\Worker;

use App\Models\Pesanan;
use App\Http\Controllers\Controller;
use App\Models\Worker;

class WorkerOrderController extends Controller
{
    public function show($id_order)
    {
        $order = Pesanan::with(['customer', 'tipe_layanan', 'metode_pembayaran'])->findOrFail($id_order);
        // $id_worker = session('userData')->worker->id_worker;
        // $status_menerima_order = Worker::findOrFail($id_worker)->status_menerima;
        return view('worker.order', [
            "title" => "Order",
            "order" => $order,
            "role" => session('userData')->role,
            "worker" => session('userData')->worker
        ]);
    }
}
