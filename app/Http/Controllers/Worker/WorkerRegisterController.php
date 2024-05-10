<?php

namespace App\Http\Controllers\Worker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WorkerRegisterController extends Controller
{
    public function index() {
        return view('register.register-worker');
    }

    public function store(Request $request) {

    }
}
