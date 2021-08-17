<?php

use App\Http\Controllers\FunctionController;
use Illuminate\Support\Facades\Route;

Route::post('/', FunctionController::class . '@storage');
