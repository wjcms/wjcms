<?php

use App\Http\Controllers\Auth\RegisterController;
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

Route::group(['namespace'=>'System','prefix'=>'system','middleware'=>['auth:sanctum']], function () {
    Route::apiResource('package', 'PackageController');
    Route::apiResource('group', 'GroupController');
});


Route::group(['namespace'=>'User','prefix'=>'user'], function () {
    Route::post('register', 'RegisterController');
    Route::post('login', 'LoginController');
});
