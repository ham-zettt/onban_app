<?php

namespace App\Http\Controllers\Worker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WorkerHomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        return view('worker.index', [
            "nama" => session('userData')->worker->nama,
            "role" => session('userData')->role
        ]) ;
    }
}
