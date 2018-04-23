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
@if(\Session::has('status'))
<div class="alert alert-success">
    <p>{{ \Session::get('status')}}</p>
</div>
@endif
<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
            <table id="datatable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Email</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($users) && count($users)>0) @foreach($users as $row)
                    <tr>
                        <td>{{$row->id}}</td>
                        <td>
                            @if(isset($row->image))
                                <img class="img" width="50" height="50" src="{{ asset('laravel_code/storage/app/public/user_image/'.$row->image) }}" alt="{{ $row->image }}" /> 
                            @else
                                <img class="img" width="50" height="50" src="{{ asset('laravel_code/storage/app/public/user.png') }}" alt="{{ $row->image }}" /> 
                            @endif
                        </td>
                        <td><a href="show_profile?id={{$row->id}}">{{ucwords($row->name)}}</a> </td>
                        <td>{{$row->user_role_name}}</td>
                        <td>{{$row->email}}</td>
                        <td>
                            <?php echo date_format(new DateTime($row->created_at), 'jS F Y g:ia');?>
                        </td>
                        <td>
                            <a class="" href="{{url('user_form?id='.$row->id)}}" title="Edit">
                                <i class="fa fa-edit fa-2x text-info"></i>
                            </a>
                            <a href="{{url('delete_user/'.$row->id)}}" onclick="return confirm('Are you sure you want to delete this item?');" title="Delete">
                                <i class="fa fa-trash fa-2x text-danger"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- end row -->
@endsection