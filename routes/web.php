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

Route::get('/produk/batik-motif-jaranan', [BatikController::class, 'motif_jaran'])->name('batik.motif_jaran');
Route::get('/produk/pashmina-jati', [BatikController::class, 'motif_pashminajati'])->name('batik.motif_pashminajati');
Route::get('/produk/batik-ecoprint-jati1', [BatikController::class, 'motif_ecoprintjati1'])->name('batik.motif_ecoprintjati1');
Route::get('/produk/batik-ecoprint-jati2', [BatikController::class, 'motif_ecoprintjati2'])->name('batik.motif_ecoprintjati2');