<?php namespace Laradic\TestApp\Http\Controllers;

use Stringy\Stringy;

class ThemesDemoController extends Controller {

	public function __construct()
	{
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
