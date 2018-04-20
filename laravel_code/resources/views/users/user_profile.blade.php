@extends('layouts.app') @section('content')

<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="btn-group pull-right m-t-15 m-b-15 ">
            <a href="" type="button" class="btn btn-custom waves-effect waves-light">Go Back</a>
        </div>
        <h4 class="page-title">{{isset($title)?$title:''}}</h4>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 col-xs-12 col-md-12">
        <div class="card-box">
<<<<<<< HEAD

                <div class="col-md-1"></div>

    <div class="col-md-10">
            
            <div class="p-20">
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
                <form role="form" data-parsley-validate novalidate method="POST" action="{{ url('user_save') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{Request::input('id')}}">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 form-control-label">Name
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-sm-8">
                            <input type="text" required parsley-type="text" placeholder="Name" name="name" value="{{old('name')}}{{isset($user->name)?$user->name:''}}"
                                class="form-control">
                        </div>
=======
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="p-20">
                    @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul style="text-decoration: none;">
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
>>>>>>> 323d68933253b8b088d1be28d594496e533f32da
                    </div>
                    @endif @if(\Session::has('status'))
                    <div class="alert alert-success">
                        <p>{{ \Session::get('status')}}</p>
                    </div>
                    @endif
                    <form role="form" data-parsley-validate novalidate method="POST" action="{{ url('update_profile/'.Auth::user()->id) }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{isset(Auth::user()->id)?Auth::user()->id:''}}">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 form-control-label">Name
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" required parsley-type="text" placeholder="Name" name="name" value="{{isset(Auth::user()->name)?Auth::user()->name:''}}"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 form-control-label">Email
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-8">
                                <input type="email" required parsley-type="email" name="email" value="{{isset(Auth::user()->email)?Auth::user()->email:''}}"
                                    class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="hori-pass1" class="col-sm-2 form-control-label">Password
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-8">
                                <div>
                                    <input type="password" required parsley-type="password" name="password" class="form-control" placeholder="Password">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <button type="submit" class="btn btn-success waves-effect waves-light">
                                    Update
                                </button>
                                <button type="reset" class="btn btn-danger waves-effect m-l-5">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

            <div class="col-md-1"></div>

            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
@endsection