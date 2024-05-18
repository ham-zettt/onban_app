<?php

namespace App\Http\Controllers\Worker;

use App\Http\Controllers\Controller;
use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerHomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $id_worker = session('userData')->worker->id_worker;
        $status_menerima_order = Worker::findOrFail($id_worker)->status_menerima;
        return view('worker.index', [
            "title" => "Home",
            "worker" => session('userData')->worker,
            "status_menerima_order" => $status_menerima_order
        ]);
    }
}
