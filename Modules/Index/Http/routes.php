<?php

Route::group(['middleware' => 'web', 'prefix' => 'index', 'namespace' => 'Modules\Index\Http\Controllers'], function()
{
    Route::get('/', 'IndexController@index');
});
