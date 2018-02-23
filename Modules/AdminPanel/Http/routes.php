<?php

Route::group(['middleware' => 'web', 'prefix' => 'adminpanel', 'namespace' => 'Modules\AdminPanel\Http\Controllers'], function()
{
    Route::get('/', 'AdminPanelController@index');
});
