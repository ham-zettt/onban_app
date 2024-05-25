<?php

namespace App\Http\Controllers\User\Order;

use App\Models\Pesanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UpdateStatusOrderController extends Controller
{
    public function updateStatusAndPosition(Request $request)
    {

        $order = Pesanan::findOrFail($request->id_order);
        $order->status_order = "Menunggu Order";
        $order->alamat = $request->alamat;
        $order->latitude = $request->lat;
        $order->longitude = $request->long;
        $order->save();
        return response()->json(['message' => 'Status updated successfully'], 200);
        return redirect()->back()->with('success', 'Status order berhasil diperbarui.');
    }
}
