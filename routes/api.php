<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DHT11Controller;
use App\Http\Controllers\BMP180Controller;
use App\Http\Controllers\DataViewController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::apiResource('dht11', DHT11Controller::class);
Route::apiResource('bmp180', BMP180Controller::class);

// Route::get('/data-view', [DataViewController::class, 'index'])->name('data.view');