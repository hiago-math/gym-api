<?php

use App\Http\Controllers\WorkoutController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'workout'], function () {
    Route::post('/store', [WorkoutController::class, 'storage']);
});
