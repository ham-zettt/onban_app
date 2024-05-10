<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function index() {
        return view('login.login-admin');
    }

    public function authenticate(Request $request) {

    }
}
