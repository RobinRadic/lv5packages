<?php namespace LaradicAdmin\Extensions\Http\Controllers;

use Laradic\Admin\Http\Controllers\Controller;


class ExtensionController extends Controller
{
    public function __construct()
    {
        $this->middleware('sentry.admin');
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index()
    {

        return view('laradic/admin::index');
    }
}
