<?php namespace LaradicAdmin\Extensions\Http\Controllers;

use Alert;
use Extensions;
use Illuminate\Support\MessageBag;
use Laradic\Admin\Http\Controllers\AdminController;
use Redirect;

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
            Alert::error('Could not find extension [' . $slug . ']');
            return Redirect::back();
        }
        $ex = Extensions::get($slug);
        if(!$ex->canInstall())
        {
            Alert::error('Could could install [' . $slug . '], check if all dependencies are installed');

            return Redirect::back();
        }

        $ex->install();

        return Redirect::back();
    }

    public function uninstall($vendor, $package)
    {
        $slug = "$vendor/$package";
        if(!Extensions::has($slug))
        {
            Alert::error('Could not find extension [' . $slug . ']');
            return Redirect::back();
        }
        $ex = Extensions::get($slug);
        if(!$ex->canUninstall())
        {
            Alert::error('Could could uninstall [' . $slug . '], check if all dependencies are installed');

            return Redirect::back();
        }

        $ex->uninstall();

        return Redirect::back();

    }

    public function remove()
    {

    }
}
