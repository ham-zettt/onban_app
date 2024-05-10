<?php

namespace App\Http\Controllers\Worker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WorkerLoginController extends Controller
{
    public function index() {
        return view('login.login-worker');
    }

    public function authenticate(Request $request) {

    }
}
