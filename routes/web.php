<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataViewController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// use App\Http\Controllers\DataViewController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/data-view', [DataViewController::class, 'index'])->name('data.view');
