<?php

use App\Http\Controllers\WorkoutTypeController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'type-workout'], function () {
    Route::post('/store', [WorkoutTypeController::class, 'storage']);
});
