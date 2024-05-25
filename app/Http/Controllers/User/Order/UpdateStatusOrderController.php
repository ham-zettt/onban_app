<?php

namespace App\Http\Controllers\User\Order;

use App\Models\Pesanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UpdateStatusOrderController extends Controller
{
    public function updateStatusAndPosition(Request $request)
    {
        // ambil jam saat ini dan tanggal saat ini
        $jam = date('H:i:s');
        $tanggal = date('Y-m-d');


        $order = Pesanan::findOrFail($request->id_order);
        $order->status_order = $request->status_order;
        $order->latitude = $request->latitude;
        $order->longitude = $request->longitude;
        $order->voucher_id = $request->voucher_id;
        $order->waktu = $jam;
        $order->tanggal = $tanggal;
        $order->alamat = $request->alamat;
        $order->save();
        return redirect()->route('home')->with('success', 'Orderan berhasil di buat, tunggu Worker mengambil orderan anda.');
    }
}
