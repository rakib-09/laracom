<?php

Route::group(['middleware' => 'web', 'prefix' => 'cart', 'namespace' => 'Modules\Cart\Http\Controllers'], function()
{
    Route::get('/', 'CartController@show');
    Route::post('/', 'CartController@create');
    Route::delete('/', 'CartController@destroy');
    Route::get('/st', 'CartController@store');
});
