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

// Passport Auth
Route::post('/imones-registracija', 'App\Http\Controllers\CompanyController@register');
Route::post('/asmens-registracija', 'App\Http\Controllers\PersonController@register');
Route::post('/administratoriaus-registracija', 'App\Http\Controllers\AdminController@register');
Route::post('/admin-prisijungimas', 'App\Http\Controllers\AdminController@login');

Route::group([
    'middleware' => 'auth:api'
], function(){

});

