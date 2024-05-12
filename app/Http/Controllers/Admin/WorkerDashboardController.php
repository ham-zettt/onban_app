<?php

namespace App\Http\Controllers\Admin;

use App\Models\Worker;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
}
