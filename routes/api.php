<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/clientes', function() {
    return [
        ['nome' => 'Julio', 'email' => 'julio@gmail.com'],
        ['nome' => 'Ana', 'email' => 'ana@gmail.com'],
        ['nome' => 'Carlos', 'email' => 'carlos@gmail.com'],
        ['nome' => 'Beatriz', 'email' => 'breatriz@gmail.com'],
        ['nome' => 'Fernando', 'email' => 'fernando@gmail.com'],
        ['nome' => 'Mariana', 'email' => 'mariana@gmail.com'],
        ['nome' => 'Lucas', 'email' => 'lucas@gmail.com'],
        ['nome' => 'Sofia', 'email' => 'sofia@gmail.com'],
        ['nome' => 'Rafael', 'email' => 'rafael@gmail.com'],
        ['nome' => 'Camila', 'email' => 'camila@gmail.com'],
        ['nome' => 'Bruno', 'email' => 'bruno@gmail.com'],
    ];
});

