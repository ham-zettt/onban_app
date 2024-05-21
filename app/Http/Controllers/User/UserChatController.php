<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UserChatController extends Controller
{
    public function index() {
        return view('user.userChat', [
            "title" => "userChat",
            "nama" => session('userData')->customer->nama,
            "role" => session('userData')->role
        ]);
    }
}
