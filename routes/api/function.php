<?php

use App\Http\Controllers\FunctionController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'function'], function () {
    Route::post('/', [FunctionController::class, 'storage']);
});
