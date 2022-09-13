<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'login'], function () {
    Route::post('/store', [LoginController::class, 'storage']);
});
