<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;


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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Rute untuk menampilkan daftar buku
Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');

// Rute untuk menampilkan form membuat buku baru
Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');

// Rute untuk menyimpan buku baru ke dalam database
Route::post('/buku', [BukuController::class, 'store'])->name('buku.store');

// Rute untuk menampilkan detail buku
Route::get('/buku/{id}', [BukuController::class, 'show'])->name('buku.show');

// Rute untuk menampilkan form mengedit buku
Route::get('/buku/{id}/edit', [BukuController::class, 'edit'])->name('buku.edit');

// Rute untuk mengupdate buku dalam database
Route::post('/buku/{id}/update', [BukuController::class, 'update'])->name('buku.update');

// Rute untuk menghapus buku dari database
Route::get('/buku/{id}/hapus', [BukuController::class, 'destroy'])->name('buku.destroy');

