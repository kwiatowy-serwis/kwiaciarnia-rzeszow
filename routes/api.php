<?php

use Illuminate\Http\Request;

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


//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::get('/flower', 'FlowerController@index');

Route::post('/flower/order', 'FlowerController@order');

Route::get('/flower/companyPlace', 'FlowerController@companyPlace');





//Route::get('/flower', function () {
//    Route::get('/home', 'HomeController@index')->name('home');
//     return \App\Http\Resources\Flower::collection(\App\Flower::all());
//});