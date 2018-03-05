<?php

Route::group(['middleware' => 'web', 'prefix' => 'profile', 'namespace' => 'Modules\Profile\Http\Controllers'], function()
{
    Route::get('/{id}', 'ProfileController@show');
});
