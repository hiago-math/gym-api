<?php

use App\Http\Controllers\AddressController;
use Illuminate\Support\Facades\Route;

Route::post('/', AddressController::class . '@storage');
