define([ 'jquery', 'config', 'plugins/oauth-io', 'plugins/github-api' ], function( $, config, OAuth, Github ){

    OAuth.initialize(config.oauth_io);

    var api = {};
    var editor = {
        Github: Github,
        github: null
    };
    var $el = $('#github-editor');


    (function Editor(){

        editor.initLogin = function(){
            $('#github-editor-login').on('click', function( e ){
                e.preventDefault();
                if( api.isAuthorized() ){
                    console.log('Already authorized')
                } else {
                    api.authorize()
                }
            });
        };

        editor.init = function(){
            editor.initLogin();

            if(api.isAuthorized()){
                editor.github = new Github({
                    token: api.request().access_token,
                    auth: 'oauth'
                });
            }
        };

    }.call());

    (function Api(){

        api.authorize = function( cb ){
            OAuth.popup('github', {cache: true}).done(function( result ){
                if( _.isFunction(cb) ){
                    cb(result);
                }

            }).fail(function( err ){
                console.log(err);
            });
        };

        api.isAuthorized = function(){
            return _.isObject(OAuth.create('github'));
        };

        api.request = function(){
            return OAuth.create('github');
        };
    }.call());


    editor.api = api;
    return editor;
});
