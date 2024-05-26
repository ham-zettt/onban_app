<?php

namespace App\Http\Controllers\Worker;

use App\Models\Pesanan;
use App\Http\Controllers\Controller;
use App\Models\Worker;
use GuzzleHttp\Client;

class WorkerOrderController extends Controller
{

    public function hitungJarak($latCustomer, $longCustomer, $latWorker, $longWorker)
    {
        $apiKey = env("OPENROUTESERVICE_API_KEY");
        $url = 'https://api.openrouteservice.org/v2/directions/driving-car';
        $client = new Client();
        $response = $client->post($url, [
            'headers' => [
                'Authorization' => $apiKey,
                'Content-Type' => 'application/json',
            ],
            'body' => json_encode([
                'coordinates' => [
                    [$latCustomer, $longCustomer],
                    [$latWorker, $longWorker]
                ],
            ]),
        ]);

        $data = json_decode($response->getBody(), true);

        if (!empty($data['routes'])) {
            return $data['routes'][0]['summary']['distance'] / 1000; // Distance in kilometers
        }

        return null;
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
        $jarak = $this->hitungJarak($latWorker,
            $longWorker,
            $latCustomer,
            $longCustomer
        );

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
