<?php

use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login.login-user');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/login', function () {
    return view('login.login-user');
})->name('login-user');

Route::get('/register', function () {
    return view('register.register-user');
})->name('register-user');

Route::get('/worker/login', function () {
    return view('register.register-worker');
})->name('login-worker');

Route::get('/worker/register', function () {
    return view('register.register-worker');
})->name('register-worker');



Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    })->name('admin-dashboard');
});
