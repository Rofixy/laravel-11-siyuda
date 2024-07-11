<?php

use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Rute untuk halaman admin
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');

//Rute untuk halaman user
Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');

use App\Http\Controllers\PengajuanController;

// Route untuk menampilkan formulir pengajuan (GET)
Route::get('/pengajuan', [PengajuanController::class, 'create'])->name('pengajuan.create');

// Route untuk menyimpan data pengajuan (POST)
Route::post('/pengajuan', [PengajuanController::class, 'store'])->name('pengajuan.store');

use App\Http\Controllers\PengajuanAdminController;

// Route untuk halaman admin CRUD Pengajuan
    Route::prefix('admin')->group(function () {
        
        Route::resource('pengajuans', PengajuanAdminController::class);
        
        // Route::get('pengajuan', [PengajuanAdminController::class, 'index'])->name('admin.pengajuan.index');
        // Route::get('pengajuan/{id_pengajuan}/edit', [PengajuanAdminController::class, 'edit'])->name('admin.pengajuan.edit');
        // Route::put('pengajuan/{id_pengajuan}', [PengajuanAdminController::class, 'update'])->name('admin.pengajuan.update');
        // Route::delete('pengajuan/{id_pengajuan}', [PengajuanAdminController::class, 'destroy'])->name('admin.pengajuan.destroy');
        Route::post('pengajuan/{pengajuan}/approve', [PengajuanAdminController::class, 'approve'])->name('pengajuans.approve');
        Route::post('pengajuan/{pengajuan}/reject', [PengajuanAdminController::class, 'reject'])->name('pengajuans.reject');
    });


use App\Http\Controllers\UserController;

// Route untuk halaman pemberitahuan user
Route::get('/pemberitahuan', [UserController::class, 'pemberitahuan'])->name('pemberitahuan');


Route::get('/print-pdf', [PdfController::class, 'printUndangan'])->name('undanganyudisium');