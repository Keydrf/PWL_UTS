<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PeminjamanController;

Route::get('/pelanggan', [PelangganController::class, 'index']);
Route::get('/pelanggan/{id}', [PelangganController::class, 'show'])->name('pelanggan.show');

Route::get('/peminjaman', [PeminjamanController::class, 'index']);
Route::get('/peminjaman/{id}', [PeminjamanController::class, 'show'])->name('peminjaman.show');

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/try', function () {
    return view('welcomet');
});
