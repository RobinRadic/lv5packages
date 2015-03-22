@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-12">content</div>
    </div>
@stop

@section('scripts.boot')
    @parent
    @if(isset($menu))
    <script>
        (function(){
            require(['theme/sidebar'], function(sidebar){
                sidebar.init({!! json_encode($menu) !!})
            });
            //window.packadic.site.data.navigation.sidebar =

        }.call());
    </script>
    @endif
@stop
