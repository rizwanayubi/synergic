@extends('layouts.app') @section('content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="btn-group pull-right m-t-15">
            <a href="{{url('user_form')}}" type="button" class="btn btn-custom waves-effect waves-light">Add New User</a>
        </div>
        <h4 class="page-title">{{isset($title)?$title:'User Profile'}}</h4>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div clss="col-sm-12">
            <div class="left company_image">
                <img class="img rounded-circle rounded" width="50" height="50" src="{{ asset('laravel_code/storage/app/public/user.png') }}" alt="Image" />
            </div>
                <p class="lead m-b-0"><b>Rizwan Khan</b></p>
                <p class="text-muted font-13 m-t-0">FMC Company</p>
            <div class="clearfix"></div>
        </div>
        <div class="card-box primary_border_top">
            <div class="col-sm-12">  
                <div class="pull-left">  
                    <h4 class="m-t-10 header-title">User Information</h4>
                </div>
                <div class="pull-right">  
                    <!-- <h4 class="m-t-10 header-title">User Information</h4> -->
                    <!-- <ul class="list-inline m-b-0 m-t-10">
                        <li class="list-inline-item">
                            Lorem ipsum
                        </li>
                        <li class="list-inline-item">
                            Phasellus iaculis
                        </li>
                        <li class="list-inline-item">
                            Nulla volutpat
                        </li>
                    </ul> -->
                    <div class="btn-group m-b-0">
                        <a href="#" class="btn btn-info-outline waves-effect waves-light btn-sm">Edit</a>
                        <a href="#" class="btn btn-info-outline waves-effect waves-light btn-sm">Inactivate staff member</a>
                        <a href="#" class="btn btn-info-outline waves-effect waves-light btn-sm">Block access</a>
                    </div>
                </div>
               
            </div>
            <div class="col-sm-12">  
                <hr>
            </div>
            <div class="col-sm-6">
                <p class="text-dark m-b-0 m-t-0">Date Of Joining</p>
                <p class="text-muted m-b-10 font-13">01-01-2018</p>
            </div>
            <div class="col-sm-6">
                <p  class="text-dark m-b-0 m-t-0">Email</p>
                <p class="text-muted m-b-10 font-13">abc@example.com</p>
            </div>
            <div class="col-sm-12">            
                <h4 class="m-t-10 header-title">Company Information</h4>
                <hr>
            </div>

            <div class="col-sm-6">
                <p class="text-dark m-b-0 m-t-0">Company Name</p>
                <p class="text-muted m-b-10 font-13">Rizwan&Sons</p>
            </div>
            <div class="col-sm-6">
                <p class="text-dark m-b-0 m-t-0">Contact #</p>
                <p class="text-muted m-b-10 font-13">(971) 000-000 00</p>
            </div>
            <div class="col-sm-6">
                <p class="text-dark m-b-0 m-t-0">Office Address</p>
                <p class="text-muted m-b-10 font-13">68-T Gulberg ||</p>
            </div>
            <div class="col-sm-6">
                <p class="text-dark m-b-0 m-t-0">Billing Address</p>
                <p class="text-muted m-b-10 font-13">68-T Gulberg ||</p>
            </div>
            <div class="col-sm-12">
                <h4 class="m-t-10 header-title">Company License</h4>
                <hr>
                <img class="img" width="50" height="50" src="{{ asset('laravel_code/storage/app/public/user.png') }}" alt="Image" />
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- end row -->
@endsection