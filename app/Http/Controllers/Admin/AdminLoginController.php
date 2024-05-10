<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function index() {
        return view('login.login-admin');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);



        if (auth()->attempt($credentials)) {
            $user = Auth::user();
            $userData = User::with('admin')->find($user->id);
            session(['userData' => $userData]);
            return redirect()->intended(route('admin-dashboard'));
        }
        return back()->with('error', 'Login Gagal! Silahkan cek username dan password anda!');
    }
}
