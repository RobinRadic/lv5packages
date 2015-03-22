<?php namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Laradic\Themes\Contracts\AssetFactory;
use Laradic\Themes\Contracts\ThemeFactory;

class WelcomeController extends Controller {

    protected $app;

    protected $themes;

    protected $assets;

    public function __construct(Application $app, ThemeFactory $t, AssetFactory $assets)
    {
        $this->middleware('guest');

        #$app->
        $this->app = $app;

        $this->themes = $t;

        $this->assets = $assets;
    }

    public function index()
    {
        \Debugger::log('app', $this->app);
        \Debugger::log('themes', $this->app->themes);
        \Debugger::log('assets', $this->app->assets);
        \Debugger::log('theme', $this->app->themes->getActive());



        return view('welcome');
    }
}
