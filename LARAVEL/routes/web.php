<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ManajemenRuang;
use App\Http\Controllers\TentangController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    session()->flash('success', 'Selamat datang kembali! Dashboard berhasil dimuat. ✨');

    return view('dashboard');
})->name('dashboard');


Route::get('/tentang', [TentangController::class, 'index'])->name('tentang');
Route::get('/tentang/ruangan/{lantai}/{kapasitas}', [TentangController::class, 'filterRuangan']);

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');


Route::get('/ruangan/{lantai}/{id}', [TentangController::class, 'show'])->name('ruangan.show');

Route::get('/hitung/{a}/{b}', fn($a, $b) => $a + $b)->name('hitung');

// Manajemen ruang
Route::get('/manajemen-ruang', [ManajemenRuang::class, 'index'])->name('manajemen-ruang');
