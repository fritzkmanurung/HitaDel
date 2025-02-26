<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SettingController;

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

Route::apiResource('posts', PostController::class);
Route::apiResource('users', UserController::class);
Route::get('posts/{post}/likes', [PostController::class, 'likes']);
Route::get('posts/{post}/comments', [PostController::class, 'comments']);
Route::get('users/{user}/posts', [UserController::class, 'showUserPosts']);
Route::apiResource('settings', SettingController::class);