@extends('layouts.index') @section('content')
    <div class="text-xs-center m-t-20">
        <a href="#" class="logo">
        <span> <img src="assets/images/logo_login.png" alt="logo" width="60%"></span>
        </a>
    </div>
    <div class="m-t-10 p-20">
        <div class="row">
            <div class="col-xs-12 text-xs-center">
                <h6 class="text-muted text-uppercase m-b-0 m-t-0">Sign In</h6>
            </div>
        </div>
        <form class=" m-t-20" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} row">
                <div class="col-xs-12">
                    <input id="email" type="email" Placeholder ="Email" class="form-control" name="email" value="{{ old('email') }}" required autofocus> @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} row">
                <div class="col-xs-12">
                    <input id="password" Placeholder ="Password"  type="password" class="form-control" name="password" required> @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <div class="col-xs-12">
                    <div class="checkbox checkbox-custom">
                        <input type="checkbox" name="remember" {{ old( 'remember') ? 'checked' : '' }}>
                        <label for="checkbox-signup">
                            Remember me 
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group text-center row m-t-10">
                <div class="col-xs-12">
                    <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Log In</button>
                </div>
            </div>
            <div class="form-group row m-t-30 m-b-0">
                <div class="col-sm-12">
                    <a href="{{ route('password.request') }}" class="text-muted">
                        <i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                </div>
            </div>
        </form>
    </div>
    <div class="clearfix"></div>
@endsection