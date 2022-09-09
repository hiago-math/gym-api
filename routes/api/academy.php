<?php

use App\Http\Controllers\AcademyTrainingController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'academy-training'], function () {
    Route::post('/store', [AcademyTrainingController::class, 'storage']);
});
