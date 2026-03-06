<?php

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