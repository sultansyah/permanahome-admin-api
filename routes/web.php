<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\FormulirInstalasiController;
use App\Http\Controllers\Admin\MasukanController;
use App\Http\Controllers\Admin\NotifikasiController;
use App\Http\Controllers\Admin\PaketLayananController;
use App\Http\Controllers\Admin\PengaduanController;
use App\Http\Controllers\Admin\PermanaHomeNumberController;
use App\Http\Controllers\Admin\PermintaanController;
use App\Http\Controllers\Admin\TagihanController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\UserPermanaHomeNumberController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function(){
    Route::view('login', 'login')->name('admin.auth.index');
    Route::post('login', [AuthController::class, 'login'])->name('admin.auth.login');
    Route::get('logout', [AuthController::class, 'logout'])->name('admin.auth.logout');

    Route::group(['middleware' => 'auth:web'], function() {
        Route::view('/', 'dashboard')->name('admin.dashboard');
    
        Route::get('berita', [BeritaController::class, 'index'])->name('admin.berita.index');

        Route::get('permana-home-number', [PermanaHomeNumberController::class, 'index'])->name('admin.permana-home-number.index');

        Route::get('formulir-instalasi', [FormulirInstalasiController::class, 'index'])->name('admin.formulir-instalasi.index');
        Route::get('formulir-instalasi/terima/{id}', [FormulirInstalasiController::class, 'terima'])->name('admin.formulir-instalasi.terima');

        Route::get('masukan', [MasukanController::class, 'index'])->name('admin.masukan.index');

        Route::get('notifikasi', [NotifikasiController::class, 'index'])->name('admin.notifikasi.index');

        Route::get('paket-layanan', [PaketLayananController::class, 'index'])->name('admin.paket-layanan.index');

        Route::get('pengaduan', [PengaduanController::class, 'index'])->name('admin.pengaduan.index');

        Route::get('permintaan', [PermintaanController::class, 'index'])->name('admin.permintaan.index');

        Route::get('tagihan', [TagihanController::class, 'index'])->name('admin.tagihan.index');

        Route::get('user', [UserController::class, 'index'])->name('admin.user.index');
        
        Route::get('user-permana-home-number', [UserPermanaHomeNumberController::class, 'index'])->name('admin.user-permana-home-number.index');
    });
});