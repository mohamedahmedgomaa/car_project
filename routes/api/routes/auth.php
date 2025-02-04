<?php

use App\Http\Modules\Users\Controllers\AuthController;
use App\Http\Modules\Users\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->group(function () {
    Route::post('logout', [AuthController::class, 'logout'])->middleware(
        'auth:api'
    );
    Route::prefix('me')->middleware('auth:api')->group(function () {
        Route::get('/', [AuthController::class, 'me']);
        Route::put('update', [UserController::class, 'update']);
    });

    Route::post('login', [AuthController::class, 'login']);
});
