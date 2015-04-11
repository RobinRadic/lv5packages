<?php namespace LaradicAdmin\GithubEditor\Http\Controllers;

use Config;
use Extensions;
use Github\Client;
use Laradic\Admin\Http\Controllers\AdminController;
use Redirect;
use Request;
use Session;
use URL;
use View;

class GithubEditorController extends AdminController
{
    public function __construct()
    {
        parent::__construct();
        View::share('githubToken', Session::get('github-editor.access_token', false));
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index()
    {
        $clientId = Config::get('laradic-admin/github-editor::client_id');
        var_dump($clientId);
        return view('laradic-admin/github-editor::index');
    }

    public function signupGithub()
    {
        $clientId = Config::get('laradic-admin/github-editor::client_id');
        $callbackUrl = URL::toAdmin('github-editor/oauth2-callback');
        if(Request::getMethod() == 'GET')
        {
            $code = Request::get('code');
            if(isset($code))
            {
                $post = http_build_query([
                    'client_id' => $clientId ,
                    'redirect_uri' => $callbackUrl ,
                    'client_secret' => Config::get('laradic-admin/github-editor::client_secret'),
                    'code' => $code
                ]);

                $context = stream_context_create(array("http" => array(
                    "method" => "POST",
                    "header" => "Content-Type: application/x-www-form-urlencodedrn" .
                        "Content-Length: ". strlen($post) . "rn".
                        "Accept: application/json" ,
                    "content" => $post,
                )));

                $c = new Client();
              #  $c->authorization()->
                $json_data = file_get_contents("https://github.com/login/oauth/access_token", false, $context);

                $r = json_decode($json_data , true);

                $access_token = $r['access_token'];

                Session::set('github-editor.access_token', $access_token);


                var_dump($access_token);
                var_dump($r);
            }
            else
            {
                return Redirect::away("https://github.com/login/oauth/authorize?client_id=$clientId&redirect_uri=$callbackUrl&scope=user");
            }
        }
    }
}
