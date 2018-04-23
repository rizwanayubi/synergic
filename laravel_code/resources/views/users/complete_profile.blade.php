@extends('layouts.app') @section('content')

@section('css')
<style>
#profile_image{
    border: 2px solid rgb(167, 164, 164);
}
</style>
@endsection
<div class="row">
    <div class="col-sm-12">
        <div class="btn-group pull-right m-t-15">
            <a href="{{url('users')}}" type="button" class="btn btn-custom waves-effect waves-light">Go Back</a>
        </div>
        <h4 class="page-title">{{isset($title)?$title:''}}</h4>
    </div>
</div>

<div class="row">
    <div class="col-sm-3">
        <div class="card-box table-responsive">
            <table id="datatable" class="table">
                <tr>
                    <th style="text-align:center;">{{$profile->name}}</th>
                </tr>
                <tr>
                    <td style="text-align:center;" class="user-image">
                        <img id="profile_image" class="img-thumbnail" width="200" height="200" src="{{ asset('laravel_code/storage/app/public/user_image/'.$profile->image) }}"
                            alt="{{ $profile->image }}" />
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-sm-9">
        <div class="card-box table-responsive">
            <table id="datatable" class="table table-striped table-bordered">
                @if(isset($profile))
                <tr>
                    <th>Name</th>
                    <td>{{$profile->name}}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{$profile->email}}</td>
                </tr>
                <tr>
                    <th>Date Of Joining</th>
                    <td>
                        <?php echo date_format(new DateTime($profile->created_at), 'jS F Y g:ia');?>
                    </td>
                </tr>
                @endif
                @if(isset($company))
                <tr>
                    <th>Company</th>
                    <td>{{$company->name}}</td>
                </tr>
                <tr>
                    <?php 
                    $cats = $company->job_categories; //job categories IDs in string separating with comma
                    $catarray = explode(',', $cats); //Make categories an array
                    $i=0;
                ?>
                    <tr>
                        <th>Job Categories</th>
                        <td>
                            <?php 
                            if(isset($categories)):
                                foreach($categories as $category): //compare all categories IDs with User category IDs
                                     if($category->id == $catarray[$i]):?> {{$category->title . " ,"}}
                            <?php endif; $i++; endforeach; endif;?>
                        </td>
                    </tr>
                    <tr>
                        <th>Contact No</th>
                        <td>{{$company->contact_no}}</td>
                    </tr>
                    <tr>
                        <th>Office Address</th>
                        <td>{{$company->office_address}}</td>
                    </tr>
                    <tr>
                        <th>Billing Address</th>
                        <td>{{$company->billing_address}}</td>
                    </tr>
                    <tr>
                        <th>Company License</th>
                        <td>
                            <img class="img-thumbnail" width="100" height="100" src="{{ asset('laravel_code/storage/app/public/company_image/'.$company->license) }}"
                                alt="{{ $company->license }}" />
                        </td>
                    </tr>
                    @endif
            </table>
        </div>
    </div>
</div>
@endsection