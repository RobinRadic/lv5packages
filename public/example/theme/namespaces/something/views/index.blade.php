@extends('awesome/theme::layout')
@section('content')
    <a href="{{ URL::to('test/themes') }}">To main</a>
    something index
    @parent
@show
