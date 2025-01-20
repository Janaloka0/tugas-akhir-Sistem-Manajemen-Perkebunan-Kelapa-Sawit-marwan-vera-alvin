<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\KebunController;
use App\Http\Controllers\DistribusiController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\ProduksiController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\KategoriPanenController;
use App\Http\Middleware\CheckRole;


Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/', [LoginController::class, 'login']);
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

// admin
Route::middleware(['auth', CheckRole::class . ':admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.admin');
    });
    Route::resource('pengguna', PenggunaController::class);
    Route::resource('kebun', KebunController::class);
    Route::resource('petugas', PetugasController::class);
    Route::resource('produksi', ProduksiController::class);
    Route::resource('distribusi', DistribusiController::class);
    Route::resource('laporan', LaporanController::class);
    Route::resource('pembayaran', PembayaranController::class);
    Route::resource('kategori-panen', KategoriPanenController::class);
});

// manajer
Route::middleware(['auth', CheckRole::class . ':manajer'])->prefix('manajer')->group(function () {
    Route::get('/manajer-dashboard', function () {
        return view('dashboard.manajer');
    });

    Route::resource('pengguna', PenggunaController::class);
    Route::resource('kebun', KebunController::class);
    Route::resource('petugas', PetugasController::class);
    Route::resource('produksi', ProduksiController::class);
    Route::resource('distribusi', DistribusiController::class);
    Route::resource('laporan', LaporanController::class);
    Route::resource('pembayaran', PembayaranController::class);
    Route::resource('kategori-panen', KategoriPanenController::class);
});  // Menambahkan role 'manajer' sebagai argumen untuk middleware

Route::middleware(['auth', CheckRole::class . ':petugas_kebun'])->group(function () {
    Route::get('/petugas-kebun-dashboard', function () {
        return view('dashboard.petugas-kebun');

    });

    Route::resource('pengguna', PenggunaController::class);
    Route::resource('kebun', KebunController::class);
    Route::resource('petugas', PetugasController::class);
    Route::resource('produksi', ProduksiController::class);
    Route::resource('distribusi', DistribusiController::class);
    Route::resource('laporan', LaporanController::class);
    Route::resource('pembayaran', PembayaranController::class);
    Route::resource('kategori-panen', KategoriPanenController::class);
});
