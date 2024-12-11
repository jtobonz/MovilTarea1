<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\PerroController;

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/perros', [PerroController::class, 'store']);
    Route::put('/perros/{id}', [PerroController::class, 'update']);
    Route::delete('/perros/{id}', [PerroController::class, 'destroy']);
});

Route::get('/perros', [PerroController::class, 'index']);
Route::get('/perros/{id}', [PerroController::class, 'show']);


Route::get('/hola-mundo', [EstudianteController::class, 'holaMundo']);

Route::post('/signup', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);