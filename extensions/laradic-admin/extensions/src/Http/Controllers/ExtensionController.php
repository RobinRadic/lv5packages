<?php namespace LaradicAdmin\Extensions\Http\Controllers;

use Extensions;
use Illuminate\Support\MessageBag;
use Laradic\Admin\Http\Controllers\AdminController;

class ExtensionController extends AdminController
{
    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index()
    {

        return view('laradic-admin/extensions::index')->with([
            'extensions' => Extensions::all()
        ]);

    }

    public function install($vendor, $package)
    {
        $slug = "$vendor/$package";
        if(!Extensions::has($slug))
        {
            \Alert::error('Could not find extension [' . $slug . ']');
            return \Redirect::back();
        }
        \Alert::error('Could not find extension [' . $slug . ']');
        return \Redirect::back();
    }

    public function uninstall($vendor, $package)
    {
        $slug = "$vendor/$package";
        if(!Extensions::has($slug))
        {
            \Alert::error('Could not find extension [' . $slug . ']');
            return \Redirect::back();
        }
        \Alert::error('Could not find extension [' . $slug . ']');
        return \Redirect::back();

    }
}
