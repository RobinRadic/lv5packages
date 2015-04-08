<?php
Route::group(['prefix' => config('laradic_admin.base_route') . '/extensions'], function ()
{
    Route::get('/', ['as' => 'laradic.admin.extensions', 'uses' => 'ExtensionController@index']);
});

#Route::get(, 'AdminController@index');

