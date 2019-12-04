<?php

use Illuminate\Http\Request;
use App\Models\Devices;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('devices','DevicesController@index');
Route::get('device/{id}','DevicesController@show');
Route::get('device/{id}/properties','DevicesController@properties');
Route::post('device/','DevicesController@store');
Route::put('device/{id}','DevicesController@update');
Route::delete('device/{id}','DevicesController@delete');

Route::get('properties','PropertiesController@index');
Route::get('propertie/{id}','PropertiesController@show');
Route::post('propertie/','PropertiesController@store');
Route::put('propertie/{id}','PropertiesController@update');
Route::delete('propertie/{id}','PropertiesController@delete');
