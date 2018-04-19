@extends('partials.index') @section('content')
    <div class="text-xs-center m-t-20">
        <a href="index.html" class="logo">
            <i class="zmdi zmdi-group-work icon-c-logo"></i>
            <span>Uplon</span>
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
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus> @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} row">
                <div class="col-xs-12">
                    <input id="password" type="password" class="form-control" name="password" required> @if ($errors->has('password'))
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
            <div class="form-group row m-b-0 text-xs-center">
                <div class="col-sm-12">
                    <button type="button" class="btn btn-facebook waves-effect waves-light m-t-20">
                        <i class="fa fa-facebook m-r-5"></i> Facebook
                    </button>

                    <button type="button" class="btn btn-twitter waves-effect waves-light m-t-20">
                        <i class="fa fa-twitter m-r-5"></i> Twitter
                    </button>

                    <button type="button" class="btn btn-googleplus waves-effect waves-light m-t-20">
                        <i class="fa fa-google-plus m-r-5"></i> Google+
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="clearfix"></div>
@endsection