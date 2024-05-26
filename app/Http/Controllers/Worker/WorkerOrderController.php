<?php

namespace App\Http\Controllers\Worker;

use App\Models\Pesanan;
use App\Http\Controllers\Controller;
use App\Models\Worker;

class WorkerOrderController extends Controller
{

    public function hitungJarak($latCustomer, $longCustomer, $latWorker, $longWorker)
    {
        $earthRadius = 6371;
        $latFrom = deg2rad($latWorker);
        $lonFrom = deg2rad($longWorker);
        $latTo = deg2rad($latCustomer);
        $lonTo = deg2rad($longCustomer);

        $latDelta = $latTo - $latFrom;
        $lonDelta = $lonTo - $lonFrom;

        $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
            cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
        return $angle * $earthRadius;
    }
    public function ambilOrder(string $id_order)
    {
        // ambil pesanan id_order yang mau di ambil
        $order = Pesanan::with(['customer', 'tipe_layanan', 'voucher'])->findOrFail($id_order);
        // ambil data worker yang nerima order
        $worker = Worker::findOrFail(session('userData')->worker->id_worker);
        $latWorker = $worker->latitude;
        $longWorker = $worker->longitude;
        $latCustomer = $order->latitude;
        $longCustomer = $order->longitude;

        // hitung jarak antara worker dan customer
        $jarak = $this->hitungJarak($latCustomer, $longCustomer, $latWorker, $longWorker);

        // harga per km
        $hargaPerKm = 3000;

        // hitung total harga
        $hargaLayanan = $order->tipe_layanan->harga_tipe_layanan;
        $totalHarga = $hargaLayanan + ($hargaPerKm * $jarak);

        // update order
        $order->total_harga = $totalHarga;
        $order->jarak = $jarak;
        


        $order->worker_id = $worker->id_worker;
        $order->status_order = 'Diproses';
        $order->save();


        return view('worker.order', [
            "title" => "Order",
            "order" => $order,
            "role" => session('userData')->role,
            "worker" => session('userData')->worker,
            "latWorker" => $latWorker,
            "longWorker" => $longWorker

        ]);
    }

    public function finishedOrder($id_order)
    {
        $order = Pesanan::with(['customer', 'tipe_layanan'])->findOrFail($id_order);
        $order->status_order = 'Selesai';
        $order->save();
        return redirect()->route('worker-home');
    }

}
