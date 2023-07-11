<?php

use App\Http\Controllers\Api\BeritaController;
use App\Http\Controllers\Api\FormulirInstalasiController;
use App\Http\Controllers\Api\MasukanController;
use App\Http\Controllers\Api\PermanaHomeNumbersController;
use App\Http\Controllers\Api\TagihanController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\UserPermanaHomeNumberController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\PaketLayananController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('jwt.verify')->get('test', function (Request $request) {
//     return 'success';
// });

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::post('is-email-exist', [UserController::class, 'isEmailExist']);

Route::put('lupa-password', [AuthController::class, 'lupaPassword']);

Route::group(['middleware' => 'jwt.verify'], function($router){
    Route::post('logout', [AuthController::class, 'logout']);

    Route::get('paket_layanan', [PaketLayananController::class, 'index']);
    Route::get('paket_layanan/{area}', [PaketLayananController::class, 'getPaketLayananByArea']);

    Route::get('masukan', [MasukanController::class, 'getByUserId']);
    
    Route::get('users', [UserController::class, 'show']);
    // Route::get('users/{username}', [UserController::class, 'getUserByUsername']);
    Route::put('users', [UserController::class, 'update']);

    Route::get('user-permana-home-number', [UserPermanaHomeNumberController::class, 'show']);
    Route::post('user-permana-home-number', [UserPermanaHomeNumberController::class, 'store']);
    Route::put('user-permana-home-number', [UserPermanaHomeNumberController::class, 'update']);
    Route::delete('user-permana-home-number/{id}', [UserPermanaHomeNumberController::class, 'destroy']);

    Route::post('formulir-instalasi', [FormulirInstalasiController::class, 'store']);

    Route::get('permana-home-number/{id}', [PermanaHomeNumbersController::class, 'getById']);

    Route::get('tagihan/{id}', [TagihanController::class, 'getById']);

    Route::get('berita', [BeritaController::class, 'index']);
});