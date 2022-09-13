<?php

use App\Http\Controllers\PermissionsController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'permission'], function () {
    Route::post('/store', [PermissionsController::class, 'storage']);
});
