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
    <form role="form" data-parsley-validate novalidate method="POST" enctype="multipart/form-data" action="{{ url('update_profile/'.Auth::user()->id) }}">
        {{ csrf_field() }}
        <div class="col-sm-12 col-xs-12 col-md-6">
            <div class="card-box">
                <!-- <div class="col-md-2"></div> -->
                <div class="col-md-12">
                    <div class="p-10">
                        <h4 class="header-title m-t-0 m-b-15">Personal information</h4>
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
                        <input type="hidden" name="id" value="{{isset(Auth::user()->id)?Auth::user()->id:''}}">
                        <div class="form-group row">
                            <div class="col-sm-6 padding-left-0 padding-right-0">
                                <label for="inputEmail3" class="col-sm-12 form-control-label">Name
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-sm-12">
                                    <input type="text" required parsley-type="text" placeholder="Name" name="name" value="{{isset(Auth::user()->name)?Auth::user()->name:''}}"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 padding-left-0 padding-right-0">
                                <label for="inputEmail3" class="col-sm-12 form-control-label">Email
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-sm-12">
                                    <input type="email" required parsley-type="email" name="email" value="{{isset(Auth::user()->email)?Auth::user()->email:''}}"
                                        class="form-control" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 padding-left-0 padding-right-0">
                                <label for="hori-pass1" class="col-sm-12 form-control-label">Password
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-sm-12">
                                    <div>
                                        <input type="password" required parsley-type="password" name="password" class="form-control" placeholder="Password">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-6 padding-left-0 padding-right-0">
                                <label for="profile_image" class="col-sm-12 form-control-label">Profile Image
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-sm-12">
                                    <input type="file" name="user_image">
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-6 padding-left-0 padding-right-0">
                                <div class="col-sm-12">
                                    <img class="img" width="150" height="150" src="{{ asset( 'laravel_code/storage/app/public/user_image/' . Auth::user()->image) }}"
                                        alt="{{ Auth::user()->image }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-2"></div> -->
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-sm-12 col-xs-12 col-md-6">
            <div class="card-box">
                <!-- <div class="col-md-2"></div> -->
                <div class="col-md-12">
                    <div class="p-10">
                        <h4 class="header-title m-t-0 m-b-15">Other details</h4>
                        <div class="form-group row">
                            <div class="col-sm-6 padding-left-0 padding-right-0">
                                <label for="inputEmail3" class="col-sm-12 form-control-label">Billing Address
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-sm-12">
                                    <input type="text" required parsley-type="text" name="billing_address" value="{{old('billing_address')}}{{isset($company->billing_address)?$company->billing_address:''}}" class="form-control"
                                        placeholder="Billing Address">
                                </div>
                            </div>
                            <div class="col-sm-6 padding-left-0 padding-right-0">
                                <label for="inputEmail3" class="col-sm-12 form-control-label">Office Address
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-sm-12">
                                    <input type="text" required parsley-type="text" name="office_address" value="{{old('office_address')}}{{isset($company->office_address)?$company->office_address:''}}" class="form-control"
                                        placeholder="Office Address">
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-6 padding-left-0 padding-right-0 m-b-15">
                                <label for="licence_Image" class="col-sm-12 form-control-label">Licence Image
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-sm-12">
                                    <input type="file" name="licence_image">
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-6 padding-left-0 padding-right-0">
                                <div class="col-sm-12">
                                    <img class="img" width="150" height="150" src="{{ asset( 'laravel_code/storage/app/public/company_image/' . $company->license) }}"
                                        alt="{{ $company->license }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-2"></div> -->
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-sm-12 col-xs-12 col-md-12">
            <div class="form-group row">
                <div class="col-sm-8">
                    <button type="submit" class="profie_update btn btn-success waves-effect waves-light">
                        Update
                    </button>
                    <button type="reset" class="btn btn-danger waves-effect m-l-5">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
</div>
</form>
@endsection