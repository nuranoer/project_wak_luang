<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BatikController;
use App\Http\Controllers\AdminController;

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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/detail', function () {
    //     return view('detail');
    // });
    
Route::get('/', [BatikController::class, 'index'])->name('batik.index');
Route::get('/{slug}', [BatikController::class, 'detail'])->name('batik.detail');
Route::get('/produk/batik-motif-jaranan', [BatikController::class, 'motif_jaran'])->name('batik.motif_jaran');
Route::get('/produk/batik-motif-3warna', [BatikController::class, 'motif_3warna'])->name('batik.motif_3warna');
Route::get('/produk/batik-bunga-gepyok', [BatikController::class, 'motif_bungagepyok'])->name('batik.motif_bungagepyok');
Route::get('/produk/batik-tulis-katun', [BatikController::class, 'motif_katun'])->name('batik.motif_katun');
Route::get('/produk/pashmina-maoni', [BatikController::class, 'pashmina_maoni'])->name('batik.pashmina_maoni');
Route::get('/produk/pashmina-secang', [BatikController::class, 'pashmina_secang'])->name('batik.pashmina_secang');
Route::get('/produk/pashmina-jati', [BatikController::class, 'motif_pashminajati'])->name('batik.motif_pashminajati');
Route::get('/produk/batik-ecoprint-jati1', [BatikController::class, 'motif_ecoprintjati1'])->name('batik.motif_ecoprintjati1');
Route::get('/produk/batik-ecoprint-jati2', [BatikController::class, 'motif_ecoprintjati2'])->name('batik.motif_ecoprintjati2');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/admin/produk/index', [AdminController::class, 'index'])->name('admin.produk.index');