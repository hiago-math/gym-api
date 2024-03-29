<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/', function () {
   return view('welcome');
})->name('welcome');

Route::get('/phpinfo', function () {
    return view('phpinfo');
})->name('php_info');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'api'], function () {
    require __DIR__ . '/api/academy.php';
    require __DIR__ . '/api/equipment.php';
    require __DIR__ . '/api/function.php';
    require __DIR__ . '/api/import.php';
    require __DIR__ . '/api/login.php';
    require __DIR__ . '/api/people.php';
    require __DIR__ . '/api/permission.php';
    require __DIR__ . '/api/type-workout.php';
    require __DIR__ . '/api/workout.php';
});
