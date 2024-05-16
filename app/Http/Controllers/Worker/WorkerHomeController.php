<?php

namespace App\Http\Controllers\Worker;

use App\Http\Controllers\Controller;
use App\Http\Controllers\OrderTestController;
use App\Models\Order_test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkerHomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        return view('worker.index', [
            "title" => "Home",
            "orders" => DB::table('order')->get(),
            "role" => session('userData')->role,
            "worker" => session('userData')->worker
        ]);
    }
}
