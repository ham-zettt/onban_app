<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\User\UserLoginController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\UserRegisterController;
use App\Http\Controllers\Worker\WorkerLoginController;
use App\Http\Controllers\Worker\WorkerRegisterController;

Route::get('/', SessionController::class)->middleware('guest');

// Route Login Customer
Route::prefix('login')->group(function () {
    // Route Login
    Route::get('/', [UserLoginController::class, 'index'])->name('login');
    Route::post('/', [UserLoginController::class, 'authenticate']);
});


// Route Register Customer
Route::prefix('register')->group(function () {
    // Route Register
    Route::get('/', [UserRegisterController::class, 'index'])->name('register');
    Route::post('/', [UserRegisterController::class, 'store']);
});

// Route Customer
Route::get("/home", HomeController::class)->name('home')->middleware('auth');


// Route Admin
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminLoginController::class, 'index'])->name('login-admin');
    Route::post('/login', [AdminLoginController::class, 'authenticate']);
});

// Route Worker

Route::prefix('worker')->group(function () {
    // Register
    Route::get('/register', [WorkerRegisterController::class, 'index'])->name('register-worker');
    Route::post('/register', [WorkerRegisterController::class, 'store']);

    // Login
    Route::get('/login', [WorkerLoginController::class, 'index'])->name('login-worker');
    Route::post('/login', [WorkerLoginController::class, 'authenticate']);
});


// Route Logout

Route::get('/logout', function () {
    session()->forget('userData');
    Auth::logout();
    return redirect()->route('login');
})->name('logout');






Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    })->name('admin-dashboard');
});
