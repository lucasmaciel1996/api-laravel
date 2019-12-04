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
Route::get('devices/{id}','DevicesController@show');
Route::post('devices/','DevicesController@store');
Route::put('devices/{id}','DevicesController@update');
Route::delete('devices/{id}','DevicesController@delete');
