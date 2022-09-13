<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'artisan'], function () {
    require __DIR__ . '/artisan/artisan.php';
});
