<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManajemenMahasiswa;
use App\Http\Controllers\ManajemenRuang;
use App\Http\Controllers\TentangController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


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
    Route::middleware(['auth', 'cek.admin'])->group(function () {
        // Manajemen ruang
        Route::get('/manajemen-ruang', [ManajemenRuang::class, 'index'])->name('manajemen-ruang');
    });

    // Manajemen mahasiswa
    Route::get('/manajemen-mahasiswa', [ManajemenMahasiswa::class, 'index'])->name('manajemen-mahasiswa');
    Route::get('/manajemen-mahasiswa/create', [ManajemenMahasiswa::class, 'create'])->name('manajemen-mahasiswa.create');
    Route::post('/manajemen-mahasiswa', [ManajemenMahasiswa::class, 'store'])->name('manajemen-mahasiswa.store');
    Route::get('/manajemen-mahasiswa/{mahasiswa}', [ManajemenMahasiswa::class, 'show'])->name('manajemen-mahasiswa.show');
    Route::get('/manajemen-mahasiswa/{mahasiswa}/edit', [ManajemenMahasiswa::class, 'edit'])->name('manajemen-mahasiswa.edit');
    Route::put('/manajemen-mahasiswa/{mahasiswa}', [ManajemenMahasiswa::class, 'update'])->name('manajemen-mahasiswa.update');
    Route::delete('/manajemen-mahasiswa/{mahasiswa}', [ManajemenMahasiswa::class, 'destroy'])->name('manajemen-mahasiswa.destroy');
});

require __DIR__ . '/auth.php';
