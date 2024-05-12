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
            "title" => "Home",
            "role" => session('userData')->role,
            "worker" => session('userData')->worker
        ]);
    }
}
