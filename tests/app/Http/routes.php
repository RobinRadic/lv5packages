<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['namespace' => 'Laradic\TestApp\Http\Controllers'], function(){
    Route::get('/', 'AppController@index');
    Route::get('blade-extensions', 'AppController@blade');
    Route::get('blade-extensions/markdown', 'AppController@markdown');
    Route::get('blade-extensions/markdown2', 'AppController@markdown2');
});

Route::group(['namespace' => 'Laradic\TestApp\Http\Controllers'], function(){
    Route::get('/themes', 'ThemesDemoController@index');
    Route::get('/themes/{page}', 'ThemesDemoController@show');
});


Route::group(['namespace' => 'Laradic\TestApp\Http\Controllers'], function(){
    Route::get('/config', 'ConfigController@index');
});
