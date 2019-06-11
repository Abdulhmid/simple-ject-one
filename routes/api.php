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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'items'], function() {
    Route::get('/', 'ItemsController@index')->name('items');
    Route::get('/{post}', 'ItemsController@show')->name('items.show');
    Route::post('/', 'ItemsController@store')->name('items.store');
    Route::put('/{post}', 'ItemsController@update')->name('items.update');
    Route::delete('/{post}', 'ItemsController@delete')->name('items.delete');
});
