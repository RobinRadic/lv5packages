<?php namespace App\Http\Controllers;

use Themes, Asset, Navigation;
use View;

class TestController extends Controller
{
    public function __construct()
    {
        Themes::setActive('example/theme');
    }

    public function themes()
    {
        return View::make('index');
    }

    public function themesChild()
    {
        Themes::setActive('example/child-theme');

        return View::make('index');
    }

    public function themes2()
    {
        return View::make('something::index');
    }
}
