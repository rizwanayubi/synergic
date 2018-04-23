@extends('layouts.index') 
@section('content')

<div class="text-xs-center m-t-20">
    <a href="#" class="logo">
            <span> <img src="assets/images/logo_login.png" alt="logo" width="60%"></span>
    </a>
</div>
<div class="m-t-10 p-20">
    @if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul style="text-decoration: none;">
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif @if(\Session::has('status'))
    <div class="alert alert-success">
        <p>{{ \Session::get('status')}}</p>
    </div>
    @endif
    <div class="row">
        <div class="col-xs-12 text-xs-center">
            <h6 class="text-muted text-uppercase m-b-0 m-t-0">Sign Up</h6>
        </div>
    </div>
    <form class="form-horizontal m-t-20" method="POST" action="{{ url('user_registration') }}">
        {{ csrf_field() }}
        <div class="row">
            <label class="col-sm-4">Company Type</label>
            <div class="col-sm-8">
                <div class="radio c-input ">
                    <input name="role_id" id="role_id_oam" value="2" checked="" type="radio" class="company_type">
                    <label for="role_id_oam">
                        OAM
                    </label>
                </div>
                <div  class="radio c-input ">
                    <input name="role_id" id="role_id_fmc" value="3"  type="radio" class="company_type"> 
                    <label for="role_id_fmc">
                        FMC
                    </label>
                </div>
            </div>
        </div>
        <div id="fmc_div" class="form-group row"  style="display:none">
            <div class="col-md-12">
                <select class="select2 form-control select2-multiple" style="width:100%" name="job_categories[]" multiple="multiple" data-placeholder="Job Categories">
                    @foreach(\App\JobCategory::all() as $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row {{ $errors->has('email') ? ' has-error' : '' }}">
            <div class="col-md-12">
                <input type="email" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}" required> @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="form-group row {{ $errors->has('name') ? ' has-error' : '' }}">
            <div class="col-md-12">
                <input type="text" placeholder="Contact Number" class="form-control" name="contact_no" value="{{ old('contact_no') }}" required> @if ($errors->has('number'))
                <span class="help-block">
                    <strong>{{ $errors->first('number') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="form-group row {{ $errors->has('name') ? ' has-error' : '' }}">
            <div class="col-md-12">
                <input type="text" placeholder="Company Name" class="form-control" name="name" value="{{ old('name') }}" required> @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="form-group row {{ $errors->has('password') ? ' has-error' : '' }}">
            <div class="col-md-12">
            <div class="effects">
                <div id="myPassword"></div>
            </div>
                <!-- <input placeholder="Password" type="password" class="form-control" name="password" required>  -->
                @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="form-group row text-center m-t-10">
            <div class="col-xs-12">
                <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Save</button>
            </div>
        </div>
    </form>
</div>
@endsection