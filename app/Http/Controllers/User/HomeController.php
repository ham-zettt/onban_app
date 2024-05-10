<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {


        return view('user.index', [
            "nama" => session('userData')->customer->nama,
            "role" => session('userData')->role
        ]);
    }
}
