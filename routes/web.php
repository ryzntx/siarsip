<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PimpinanController;

use App\Http\Controllers\ArsipMasukController;
use App\Http\Controllers\ArsipKeluarController;

require __DIR__.'/auth.php';

Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->intended();
    }
    return view('auth.login');
})->middleware('guest');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Route::patch('/profile/edit/ubahPassword', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


});

Route::middleware(['auth', 'role:admin'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::get('/admin/kelola_user', [AdminController::class, 'kelola_user'])->name('admin.kelola_user');
    Route::get('/admin/kelola_user/add', [AdminController::class, 'add_user'])->name('admin.add_user');
    Route::post('/admin/kelola_user/insert', [AdminController::class, 'insert_user']);
    Route::get('/admin/kelola_user/delete/{id}', [AdminController::class, 'delete_user']);

    Route::get('/admin/tambah_dokumen', [AdminController::class, 'tambah_dokumen'])->name('admin.tambah_dokumen');
    Route::get('/admin/tambah_dokumen/insert', [AdminController::class, 'store'])->name('admin.store');

    // Route::get('/admin/tambah_dokumen/insert', [AdminController::class, 'store'])->name('admin.store');


    Route::get('/admin/arsip_masuk', [ArsipMasukController::class, 'index'])->name('admin.arsip_masuk');

    Route::get('/admin/arsip_keluar', [ArsipKeluarController::class, 'index'])->name('admin.arsip_keluar');

    Route::get('/admin/rekap', [AdminController::class, 'rekap'])->name('admin.rekap_dokumen');


});

Route::middleware(['auth', 'role:pimpinan'])->group(function(){
    Route::get('/pimpinan/dashboard', [PimpinanController::class, 'dashboard'])->name('agent.dashboard');
});

