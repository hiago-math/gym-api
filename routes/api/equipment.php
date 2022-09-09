<?php

use App\Http\Controllers\EquipmentController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'equipment'], function () {
    Route::post('/store', [EquipmentController::class, 'storage']);
});
