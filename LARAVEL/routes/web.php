<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManajemenMahasiswa;
use App\Http\Controllers\ManajemenRuang;
use App\Http\Controllers\PreferensiController;
use App\Http\Controllers\TentangController;


Route::get('/', function () {
    $count = session('visit_count', 0) + 1;
    session(['visit_count' => $count]);

    if (!session()->has('first_visit')) {
        session(['first_visit' => now()->translatedFormat('d M Y, H:i:s')]);
    }

    session(['last_visit' => now()->translatedFormat('d M Y, H:i:s')]);

    return view('welcome');
})->name('home');

Route::post('/reset-kunjungan', function () {

    session()->forget(['visit_count', 'first_visit', 'last_visit']);


    return redirect()->back()->with('welcome_toast', 'Statistik kunjungan berhasil di-ulang dari awal!');
})->name('kunjungan.reset');

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

Route::get('/preferensi', [PreferensiController::class, 'index'])->name('preferensi.index');
Route::post('/api/preferensi/simpan', [PreferensiController::class, 'store'])->name('preferensi.store');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/dashboard', function () {
        session()->flash('success', 'Selamat datang kembali! Dashboard berhasil dimuat. ✨');

        return view('dashboard');
    })->name('dashboard');


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
