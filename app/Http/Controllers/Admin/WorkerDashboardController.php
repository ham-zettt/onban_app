<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Worker;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class WorkerDashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index(Request $request)
    {
        $semuaWorker = Worker::all();
        return view('dashboard.worker.index', [
            "title" => "Dashboard Worker",
            "semuaWorker" => $semuaWorker,
        ]);
    }

    public function show(string $id)
    {
        $worker = Worker::findOrFail($id);
        return view('dashboard.worker.show', [
            "title" => "Detail Worker",
            "worker" => $worker,
        ]);
    }

    public function destroy(string $id)
    {
        $worker = Worker::findOrFail($id);
        $foto_ktp_path = $worker->foto_ktp;
        $foto_formal_path = $worker->foto_formal;
        Storage::delete([$foto_ktp_path, $foto_formal_path]);
        $login_id = $worker->login_id;
        $worker->delete();
        $login = User::findOrFail($login_id);
        $login->delete();
        return redirect()->route('admin-workers')->with('success', 'Worker berhasil dihapus!');
    }
}
