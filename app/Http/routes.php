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

use Symfony\Component\VarDumper\VarDumper;

Route::get('/', 'WelcomeController@index');

Route::get('blade-widgets', function ()
{
    $widgets = App::make('blade.widgets');

    return View::make('blade-widgets');
});

Route::get('blade', 'BladeExtensionsController@index');

Route::get('test/config/set', function ()
{

    \Config::getLoader()->set('test/test::foo', 'asdf');
    \Config::getLoader()->set('test/test::tester.foo', ['a' => '222']);
    \Config::getLoader()->set('app.timezone', 'ETC');
    #\Config::getLoader()->set('test/test::testman.test', ['a' => '222']);


    return Response::make('set');
});
Route::get('test/config/get', function ()
{

    VarDumper::dump(\Config::get('app'));
    VarDumper::dump(\Config::get('app.timezone'));
    VarDumper::dump(\Config::get('database'));
    VarDumper::dump(\Config::get('test/test::foo'));
    VarDumper::dump(\Config::get('test/test::tester'));
    VarDumper::dump(\Config::get('test/test::testman'));


    return Response::make('get');
});
Route::get('test/themes', 'TestController@themes');
Route::get('test/child-theme', 'TestController@themesChild');
