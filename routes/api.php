<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\V1\PostController as PostV1;
use App\Http\Controllers\Api\V2\PostController as PostV2;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Rutas de la Versión 1
Route::prefix('v1')->group(function() {
    Route::apiResource('posts', PostV1::class)
        ->only(['show', 'index', 'destroy']);
});

// Rutas de la Versión 2
Route::prefix('v2')->group(function() {
    Route::apiResource('posts', PostV2::class)
        ->only(['show', 'index']);
});