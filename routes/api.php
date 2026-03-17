<?php

use App\Http\Controllers\Api\ProductoController;
use Illuminate\Support\Facades\Route;

// Estas rutas serán accesibles en: https://fran-asensio-production.up.railway.app/api/...
Route::get('/productos', [ProductoController::class, 'index']);
Route::get('/productos/{id}', [ProductoController::class, 'show']);

// Ruta para que el Admin cree productos
Route::middleware('auth:sanctum')->post('/productos', [ProductoController::class, 'store']);