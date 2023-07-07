<?php

use App\Http\Controllers\Api\MasukanController;
use App\Http\Controllers\Api\UserController;
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

Route::group(['middleware' => 'jwt.verify'], function($router){

    Route::get('paket_layanan', [PaketLayananController::class, 'index']);

    Route::get('masukan', [MasukanController::class, 'index']);

    Route::get('users', [UserController::class, 'show']);
    Route::get('users/{username}', [UserController::class, 'getUserByUsername']);
});