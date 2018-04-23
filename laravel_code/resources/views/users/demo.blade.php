@extends('layouts.app') @section('content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="btn-group pull-right m-t-15">
            <a href="{{url('user_form')}}" type="button" class="btn btn-custom waves-effect waves-light">Add New User</a>
        </div>
        <h4 class="page-title">{{isset($title)?$title:''}}</h4>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <img class="img" width="50" height="50" src="{{ asset('laravel_code/storage/app/public/user.png') }}" alt="Image" />
        <div class="card-box table-responsive">
            <h5>User Information</h5>
            <hr>
            <div class="col-sm-6">
                <p>Date Of Joining</p>
                <p>01-01-2018</p>
            </div>
            <div class="col-sm-6">
                <p>Email</p>
                <p>abc@example.com</p>
            </div>
            <h5>Company Information</h5>
            <hr>
            <div class="col-sm-6">
                <p>Name</p>
                <p>Rizwan&Sons</p>
            </div>
            <div class="col-sm-6">
                <p>Contact</p>
                <p>abc@example.com</p>
            </div>
            <div class="col-sm-6">
                <p>Office Address</p>
                <p>68-T Gulberg ||</p>
            </div>
            <div class="col-sm-6">
                <p>Billing Address</p>
                <p>68-T Gulberg ||</p>
            </div>
            <div class="col-sm-6">
                <p>Company License</p>
                <p></p>
                <img class="img" width="50" height="50" src="{{ asset('laravel_code/storage/app/public/user.png') }}"
                    alt="Image" />
                </p>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
@endsection