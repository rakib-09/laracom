<?php

Route::group(['middleware' => 'web', 'prefix' => 'cart', 'namespace' => 'Modules\Cart\Http\Controllers'], function()
{
    Route::get('/', 'CartController@show');
    Route::post('/', 'CartController@create');
    Route::post('/delete', 'CartController@destroy');
    Route::post('/update', 'CartController@update');
    Route::get('/st', 'CartController@store');
});
