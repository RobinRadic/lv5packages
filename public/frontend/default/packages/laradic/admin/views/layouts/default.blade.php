@extends('theme::layout')

@section('notifications')
    @parent
    @include('laradic/admin::partials.alerts')
@stop
@section('header-nav-menu')
    <li><a href="{{ URL::toAdmin()}}">Dashboard</a></li>
    {!! HTML::dropdown_menu('Users', [
        'Users' => 'sentinel.users.index',
        'Groups' => 'sentinel.groups.index'
    ]) !!}
@stop
@section('header-nav-menu-right')
    <li>
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users"></i></a>
        <ul class="dropdown-menu dropdown-wide">
            <li>
                <a href="{{ URL::route('sentinel.profile.show') }}"><i class="fa fa-profile"></i> Profile</a>
                <a href="{{ URL::route('sentinel.logout') }}"><i class="fa fa-key"></i> Logout</a>
            </li>
        </ul>
    </li>
@stop
