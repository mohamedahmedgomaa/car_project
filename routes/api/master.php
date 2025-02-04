<?php

use Illuminate\Support\Facades\Route;

Route::prefix('api')->group(function () {

    require __DIR__ . '/routes/auth.php';

    require __DIR__ . '/general.php';

    require __DIR__ . '/routes/user.php';

    Route::middleware('auth:api')->group(function () {


    });
});
