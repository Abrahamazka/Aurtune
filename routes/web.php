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