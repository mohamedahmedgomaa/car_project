<?php

use App\Http\Modules\Users\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::apiResource('user', UserController::class);
