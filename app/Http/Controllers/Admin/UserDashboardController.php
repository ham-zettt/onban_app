<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
public function index(Request $request)
    {
        return view('dashboard.user.index', [
            "title" => "Dashboard User",
        ]);
    }
}
