<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\LogoutController;
use App\Http\Controllers\Tamu\BukuTamuController;

// Route untuk menampilkan halaman login admin
Route::get('/', function () {
    return view('admin.loginadmin');
})->name('login');

// Route untuk menangani proses autentikasi admin
Route::post('/', [LoginController::class, 'authentication'])->name('admin.login.submit');
Route::get('/Index', [LoginController::class, 'index'])->name('admin.index');
Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');




    Route::get('/galeri', [GaleriController::class, 'index'])->name('admin.galeri.index');
    Route::get('/galeri_input', [GaleriController::class, 'input'])->name('admin.galeri_input');
    Route::post('/galeri/store', [GaleriController::class, 'store'])->name('admin.galeri.store');
    Route::get('/galeri_edit{id}', [GaleriController::class, 'edit'])->name('admin.galeri.edit');
    Route::put('/galeri/update{id}', [GaleriController::class, 'update'])->name('admin.galeri.update');
    Route::delete('/galeri/destroy{id}', [GaleriController::class, 'destroy'])->name('admin.galeri.delete');

Route::get('/Tamu', function () {
    return view('tamu.index');
})->name('tamu.index');

    Route::get('/Tamu', [BukuTamuController::class, 'index'])->name('index');