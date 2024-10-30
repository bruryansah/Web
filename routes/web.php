<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexCon;
use App\Http\Controllers\LoginCon;
use App\Http\Controllers\DashboardCon;
use App\Http\Controllers\RegisterCon;


Route::get('/after', function () {
    return view('after');
});

Route::get('/out', function () {
    return view('out');
});

Route::get('index', [IndexCon::class, 'index.html']);

