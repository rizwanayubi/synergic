@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-7 ">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>{{$title}}</h4>
                </div>
                <div class="panel-body">
                    <div class="box box-info">
                        <div class="box-body">
                            <div class="col-sm-6">
                                <div align="center">
                                    <img class="img" width="150" height="150" src="{{ asset('laravel_code/storage/app/public/user_image/'.$profile->image) }}" alt="{{ $profile->image }}" /> 
                                    <!--Upload Image Js And Css-->
                                </div>
                                <br>
                                <!-- /input-group -->
                            </div> 
                            @if(isset($profile))
                            <div class="col-sm-6">
                                <h4 style="color:#00b1b1;">{{$profile->name}}</h4>
                                @if(isset($role))
                                <span>
                                    <p>{{$role->role}}</p>
                                </span>
                                @endif
                            </div>
                            <div class="clearfix"></div>
                            <hr style="margin:5px 0 5px 0;">
                            <div class="col-sm-5 col-xs-6 tital">Full Name:</div>
                            <div class="col-sm-7 col-xs-6 ">{{$profile->name}}</div>


                            <div class="col-sm-5 col-xs-6 tital">Email:</div>
                            <div class="col-sm-7">{{$profile->email}}</div>


                            <div class="col-sm-5 col-xs-6 tital">Date Of Joining:</div>
                            <div class="col-sm-7"><?php echo date_format(new DateTime($profile->created_at), 'jS F Y g:ia');?></div>
                            @endif
                            @if(isset($company))

                            <div class="col-sm-5 col-xs-6 tital">Company:</div>
                            <div class="col-sm-7">{{$company->name}}</div>
                            <div class="col-sm-5 col-xs-6 tital">Job Categories:</div>
                            <div class="col-sm-7">
                                <?php 
                                $cats = $company->job_categories; //job categories IDs in string separating with comma
                                $catarray = explode(',', $cats); //Make categories an array
                                $i=0;
                                if(isset($categories)):
                                foreach($categories as $category): //compare all categories IDs with User category IDs
                                    if($category->id == $catarray[$i]):?>
                                        {{$category->title . " ,"}}
                                <?php endif; $i++; endforeach; endif;?>
                            </div> 
                            <div class="col-sm-5 col-xs-6 tital">Contact No:</div>
                            <div class="col-sm-7">{{$company->contact_no}}</div>

                            <div class="col-sm-5 col-xs-6 tital">Office Address:</div>
                            <div class="col-sm-7">{{$company->office_address}}</div>

                            <div class="col-sm-5 col-xs-6 tital">Billing Address:</div>
                            <div class="col-sm-7">{{$company->billing_address}}</div>

                            <div class="col-sm-5 col-xs-6 tital">Company License:</div>
                            <img class="img" width="150" height="150" src="{{ asset('laravel_code/storage/app/public/company_image/'.$company->license) }}" alt="{{ $company->license }}" />                             
                            @endif
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection