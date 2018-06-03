<?php

Route::group(['middleware' => 'web', 'prefix' => 'product', 'namespace' => 'Modules\Product\Http\Controllers'], function()
{
    Route::get('/', 'ProductController@index');
    Route::get('/addproduct', 'ProductController@create');
    Route::post('/addproduct', 'ProductController@store');
    Route::get('/ranking', 'ProductController@ranking');
    Route::post('/show', 'ProductController@show');
    Route::post('/update', 'ProductController@update');
});
