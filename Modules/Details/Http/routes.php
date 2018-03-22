<?php

Route::group(['middleware' => 'web', 'prefix' => 'details', 'namespace' => 'Modules\Details\Http\Controllers'], function()
{
    Route::get('/{id}', 'DetailsController@index');
});
