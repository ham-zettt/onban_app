<?php

namespace App\Http\Controllers\AppGuide;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppGuideController extends Controller
{
    public function indexuser()
    {
        return view('appguide.user.index');
    }
    public function indexguidepanduan($category)
    {
        return view('appguide.user.panduan', compact('category'));
    }

    public function indexworker()
    {
        return view('appguide.worker.index');
    }
}
