@extends('partials.index')

@section('content')

    <div class="text-xs-center m-t-20"> 
        <a href="index.php" class="logo">
            <i class="zmdi zmdi-group-work icon-c-logo"></i>
            <span>Synergic</span>
        </a>
    </div>
    <div class="m-t-10 p-20">
        <div class="row">
            <div class="col-xs-12 text-xs-center">
                <h6 class="text-muted text-uppercase m-b-0 m-t-0">Reset Password</h6>
            </div>
        </div>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <form class="form-horizontal m-t-30" method="POST" action="{{ route('password.request') }}">
        {{ csrf_field() }}
        <input type="hidden" name="token" value="{{ $token }}">
            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }} row">
                <!-- <label for="email" class="col-md-4 control-label">E-Mail Address</label> -->

                <div class="col-md-12">
                    <input type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }} row">
                <!-- <label for="password" class="col-md-4 control-label">Password</label> -->

                <div class="col-md-12">
                    <input type="password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }} row">
                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row text-center m-t-20 m-b-0">
                <div class="col-xs-12">
                    <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Reset Password</button>
                </div>
            </div>

        </form>

    </div>
@endsection
