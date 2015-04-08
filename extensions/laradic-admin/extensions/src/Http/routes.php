<?php
Route::group(['prefix' => config('laradic_admin.base_route') . '/extensions'], function ()
{
    Route::get('/', ['as' => 'laradic.admin.extensions', 'uses' => 'ExtensionController@index']);
    Route::get('uninstall/{vendor}/{package}', ['as' => 'laradic.admin.extensions.uninstall', 'uses' => 'ExtensionController@uninstall']);
    Route::get('install/{vendor}/{package}', ['as' => 'laradic.admin.extensions.install', 'uses' => 'ExtensionController@install']);
});
