<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PutraController;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [PutraController::class, 'home']);
Route::get('/buku', [PutraController::class, 'buku']);