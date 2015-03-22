@extends('layouts.default')
@section('page-header')
@stop

@section('content')
    <div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="box">
                <header>
                    <i class="fa fa-key"></i>
                    <h3>@yield('auth-title', 'Login')</h3>
                </header>
				<section>
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
						</div>
                    @endif
                    @section('auth-content')
                    <form class="" role="form" method="POST" action="{{ URL::toAdmin('auth/login') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="control-label" for="email">E-Mail Address</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
						</div>

						<div class="form-group">
							<label class="control-label" for="password">Password</label>

								<input id="password" type="password" class="form-control" name="password">

						</div>

						<div class="form-group">


									<label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>


						</div>

						<div class="form-group">

								<button type="submit" class="btn btn-primary" style="margin-right: 15px;">
                                    Login
                                </button>

								<a href="/password/email">Forgot Your Password?</a>

						</div>
                    </form>
                    @show
                </section>
		</div>
	</div>
</div>
@stop
