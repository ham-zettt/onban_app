<?php

namespace App\Http\Controllers\Worker;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class WorkerLoginController extends Controller
{
    public function index() {
        return view('login.login-worker');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);



        if (auth()->attempt($credentials)) {
            $user = Auth::user();
            $userData = User::with('worker')->find($user->id);
            session(['userData' => $userData]);
            return redirect()->intended(route('worker-home'));
        }

        return back()->with('error', 'Login Gagal! Silahkan cek username dan password anda!');
    }
}
