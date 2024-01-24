<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Registration
Route::post('/register', [AuthController::class, 'register']);

// Login
Route::post('/login', [AuthController::class, 'login']);

// Forgot Password
Route::post('/forgot-password', [AuthController::class, 'forgotPassword']);

// Logout
// Route::post('/logout', [AuthController::class, 'logout']);


// Route::middleware('auth:sanctum')->group(function () {
//     Route::get('user', [\App\Http\Controllers\AuthController::class, 'user']);
//     // Route::post('logout', [\App\Http\Controllers\AuthController::class, 'logout']);
// });
