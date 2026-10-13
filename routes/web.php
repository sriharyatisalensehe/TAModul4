<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;

Route::get('/form', [LaporanController::class, 'create']);
Route::post('/simpan-laporan', [LaporanController::class, 'store'])->name('laporan.store');
Route::get('/daftar-laporan', [LaporanController::class, 'index'])->name('laporan.index');