<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BeritaController;
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
    Route::view('login', 'login')->name('admin.login');
    Route::post('login', [AuthController::class, 'login'])->name('admin.login.login');

    Route::view('/', 'dashboard')->name('admin.dashboard');

    Route::get('berita', [BeritaController::class, 'index'])->name('admin.berita.index');
});