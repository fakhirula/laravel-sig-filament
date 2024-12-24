<?php

use App\Http\Controllers\MapController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/indonesia', function () {
    return view('indonesia');
});

Route::get('/maps', [MapController::class, 'index']);