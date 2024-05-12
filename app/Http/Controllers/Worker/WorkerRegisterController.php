<?php

namespace App\Http\Controllers\Worker;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Worker;

class WorkerRegisterController extends Controller
{
    public function index() {
        return view('register.register-worker');
    }

    public function store(Request $request) {

        $request->validate([
            'nama' => 'required',
            'username' => 'required|unique:login,username',
            'alamat' => 'required',
            'no_hp' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'konfirmasi_password' => 'required|same:password',
        ]);


        $login = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'worker',
        ]);

        Worker::create([
            'login_id' => $login->id,
            'nama' => $request->nama_lengkap,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
        ]);


        return redirect(route('login-worker'))->with('success', 'Register Berhasil! Silahkan Login!');

    }
}
