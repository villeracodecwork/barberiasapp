<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\{
   // ClienteController,
    AuthController,
   // ReservaController
};

// Clientes
/* Route::post('/cliente/registrar', [ClienteController::class, 'registrar']);
Route::post('/cliente/verificar', [ClienteController::class, 'verificar']); */

// Usuarios (barbero/admin)
Route::post('/register', [AuthController::class, 'register']);
Route::post('/verify-code', [AuthController::class, 'verifyCode']);
Route::post('/login', [AuthController::class, 'login']);

// Protegidas
/* Route::middleware('auth:sanctum')->group(function () {
    Route::post('/reservar', [ReservaController::class, 'crear']);  

    Route::middleware('role:barbero')->group(function () {
        Route::get('/mis-citas', [ReservaController::class, 'barberoIndex']);
    });

    Route::middleware('role:admin')->group(function () {
        Route::get('/admin/citas', [ReservaController::class, 'adminIndex']);
    });
}); */


