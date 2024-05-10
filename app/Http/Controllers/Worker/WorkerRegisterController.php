<?php

namespace App\Http\Controllers\Worker;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Worker;

class WorkerRegisterController extends Controller
{
    public function index()
    {
        return view('register.register-worker', [
            "title" => "Register"
        ]);
    }

    public function store(Request $request)
    {
        // return $request;

        $request->validate([
            'nama_lengkap' => 'required',
            'username' => 'required|unique:login,username',
            'alamat' => 'required',
            'no_hp' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'konfirmasi_password' => 'required|same:password',
            "foto_ktp" => "file|max:2048",
            "foto_formal" => "file|max:2048",
        ]);

        if ($request->hasFile('foto_ktp')) {
            $fotoKtpPath = $request->file('foto_ktp')->store('worker');
        }

        if ($request->hasFile('foto_formal')) {
            $fotoFormalPath = $request->file('foto_formal')->store('worker');

        }
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
            'foto_ktp' => $fotoKtpPath ?? null,
            'foto_formal' => $fotoFormalPath ?? null,
        ]);


        return redirect(route('login-worker'))->with('success', 'Register Berhasil! Silahkan Login!');
    }
}
