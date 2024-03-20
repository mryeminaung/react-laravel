<?php

use App\Http\Controllers\post\PostController;
use App\Http\Controllers\user\UserController;
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

/*

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

*/

/* API For Users */

Route::get('posts', [PostController::class, 'index']);
Route::get('posts/{post}', [PostController::class, 'show']);
Route::delete('posts/{post}', [PostController::class, 'destroy']);

/* API For Posts */

Route::get('users', [UserController::class, 'index']);
Route::get('users/{user}', [UserController::class, 'show']);
Route::delete('users/{user}', [UserController::class, 'destroy']);
