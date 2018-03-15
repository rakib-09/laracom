<?php

Route::group(['middleware' => 'web', 'prefix' => 'product', 'namespace' => 'Modules\Product\Http\Controllers'], function()
{
    Route::get('/', 'ProductController@index');
    Route::get('/addproduct', 'ProductController@create');
    Route::post('/addproduct', 'ProductController@store');
});
