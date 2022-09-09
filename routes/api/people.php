<?php

use App\Http\Controllers\PeopleController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'people'], function () {
    Route::post('/store', [PeopleController::class, 'storage']);
});
