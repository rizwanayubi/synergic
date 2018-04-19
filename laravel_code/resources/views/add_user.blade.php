@extends('layouts.app') @section('content')
<div class="col-sm-12 col-xs-12 col-md-12">
    <div class="card-box">
        <h4 class="header-title m-t-0">ADD NEW USER</h4>
        <div class="p-20">
            <form role="form" data-parsley-validate novalidate method="POST" action="{{ url('user_submit') }}">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 form-control-label">Select Role
                        <span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-8">
                        <fieldset class="">
                            <select class="form-control" id="exampleSelect1">
                                @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
                            </select>
                        </fieldset>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 form-control-label">Name
                        <span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-8">
                        <input type="text" required parsley-type="text" name="user_name" class="form-control" id="inputEmail1" placeholder="Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 form-control-label">Email
                        <span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-8">
                        <input type="email" required parsley-type="email" name="user_email" class="form-control" id="inputEmail2" placeholder="Email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="hori-pass1" class="col-sm-2 form-control-label">Password
                        <span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-8">
                        <div>
                            <input type="password" required parsley-type="password" name="user_password" class="form-control" id="inputEmail3" placeholder="Password">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                            Register
                        </button>
                        <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                            Cancel
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection