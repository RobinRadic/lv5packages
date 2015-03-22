@extends('layouts.auth')

@section('auth-title')
    Login
@stop
@section('auth-content')
    {!! Form::open(['url' => URL::toAdmin('auth/login'), 'class' => 'form-material']) !!}
        <div class="form-group">
            {!! Form::label('email', 'E-Mail Address', array('class' => 'control-label')) !!}
            {!! Form::email('email', old('email'), array('class' => 'form-control')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password', 'Password', array('class' => 'control-label')) !!}
            {!! Form::password('password', array('class' => 'form-control')) !!}
        </div>

        <div class="form-group">
            <label>{!! Form::checkbox('remember', 1, old('remember')) !!} Remember Me</label>
        </div>

        <div class="form-group">
            {!! Form::submit('Login', ['class' => 'btn btn-primary margin-right']) !!}
            <a href="{{ URL::toAdmin('password/email') }}">Forgot Your Password?</a>
        </div>
    {!! Form::close() !!}
@stop
