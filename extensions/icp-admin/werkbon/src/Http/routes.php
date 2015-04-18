<?php
Route::group(['prefix' => 'werkbon'], function ()
{
    Route::get('/', ['as' => 'icp-admin.werkbon.index', 'uses' => 'WerkbonController@index']);
});
