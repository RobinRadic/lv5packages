<?php namespace Laradic\TestApp\Http\Controllers;

use Illuminate\Contracts\Config\Repository;
use Stringy\Stringy;

class ConfigController extends Controller {

    protected $config;
	public function __construct(Repository $config)
	{
        $this->config = $config;
		//$this->middleware('guest');
	}


    public function index()
    {
        return view('welcome');
    }

    public function page()
    {
        return view('welcome');
    }



}
