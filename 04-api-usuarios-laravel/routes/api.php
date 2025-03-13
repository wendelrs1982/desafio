<?php

use App\Http\Controllers\Api\UsuarioApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('usuarios', UsuarioApiController::class)->except([
    'create', 'edit'
]);
