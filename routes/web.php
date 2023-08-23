<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BatikController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/produk/{slug}', [BatikController::class, 'motif_jaran'])->name('batik.motif_jaran');