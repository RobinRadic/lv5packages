@extends('laradic/admin::layouts.default')


@section('scripts.boot')

    <script>
        (function(){

            var packadic = (window.packadic = window.packadic || {});

            packadic.mergeConfig({
                oauth_io: '{{ Config::get('laradic-admin/github-editor::oauth_io') }}',
                requireJS: {
                    paths  : {
                        'github-editor': '{{ Asset::uri("laradic-admin/github-editor::github-editor") }}'
                    }
                }
            });

            packadic.bindEventHandler('starting', function(){
                require(['github-editor'], function(githubEditor){
                    githubEditor.init();
                    console.log('githubEditor', githubEditor);
                    window.githubEditor = githubEditor;
                })
            });

        }.call());
    </script>

    @parent
@stop
