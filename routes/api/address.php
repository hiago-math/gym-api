<?php

use App\Http\Controllers\AddressController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'address'], function () {
    Route::post('/store', [AddressController::class, 'storage']);
});
