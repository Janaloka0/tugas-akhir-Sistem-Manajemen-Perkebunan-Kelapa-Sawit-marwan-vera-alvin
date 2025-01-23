<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
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
Route::middleware([CheckRole::class . ':admin'])->prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('layouts.dashboard.admin');
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


Route::middleware([CheckRole::class . ':manajer'])->prefix('manajer')->group(function () {

    Route::get('/', function () {
        return view('layouts.dashboard.manajer');
    });

    Route::resource('kebun', KebunController::class);
    Route::resource('petugas', PetugasController::class);
    Route::resource('produksi', ProduksiController::class);
    Route::resource('distribusi', DistribusiController::class);
    Route::resource('laporan', LaporanController::class);
    Route::resource('pembayaran', PembayaranController::class);
    Route::resource('kategori-panen', KategoriPanenController::class);
});  // Menambahkan role 'manajer' sebagai argumen untuk middleware

Route::middleware([CheckRole::class . ':petugas_kebun'])->prefix('petugas-kebun')->group(function () {
    Route::get('/', function () {
        return view('layouts.dashboard.petugas-kebun');

    });

    Route::resource('kebun', KebunController::class);
    Route::resource('produksi', ProduksiController::class);
    Route::resource('laporan', LaporanController::class);
    Route::resource('kategori-panen', KategoriPanenController::class);
});

