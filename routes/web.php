<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('index');
});
Route::get('/albums', function () {
    return view('albums');
});
Route::get('/albumdetails', function () {
    return view('albumdetails');
});
Route::get('/artists', function () {
    return view('artists');
});
Route::get('/artistdetails', function () {
    return view('artistdetails');
});
Route::get('/songs', function () {
    return view('songs');
});
Route::get('/songdetails', function () {
    return view('songdetails');
});
Route::get('/search', function () {
    return view('search');
});

Route::get ('/login', fn () => view('login'))->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post ('/logout',[AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth', 'check_role:admin']], function () {
    Route::get('/admin', [DashboardController::class, 'index']);
}); 
Route::group(['middleware' => ['auth', 'check_role:user']], function () {
    Route::get('/home', fn () => view('index'));
});

Route::get('/register',[AuthController::class, 'showRegister'])->name('register');
Route::post('/register',[AuthController::class, 'registerUser'])->name('register.post');

Route::middleware('auth')->group(function () {
    Route::get('/myaccount', [AccountController::class, 'index'])->name('account.index');
    Route::post('/myaccount', [AccountController::class, 'update'])->name('account.update');
});

