<?php namespace IcpAdmin\Werkbon\Http\Controllers;

use Illuminate\Routing\Controller;

class WerkbonController extends Controller
{
    /**
     * Show the application dashboard to the user.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('icp-admin/werkbon::index');
    }
}
