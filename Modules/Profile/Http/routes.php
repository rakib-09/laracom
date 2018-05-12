<?php

Route::group(['middleware' => 'web', 'prefix' => 'profile', 'namespace' => 'Modules\Profile\Http\Controllers'], function()
{
    Route::get('/profileinfo', 'ProfileController@show');
    Route::post('/updateinfo', 'ProfileController@edit');

});
