@extends('layouts.app') @section('content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="btn-group pull-right m-t-15">
            <a href="{{url('user_role')}}" type="button" class="btn btn-custom waves-effect waves-light">Add User Role</a>
        </div>
        <h4 class="page-title">{{isset($title)?$title:''}}</h4>
    </div>
</div>
@if(\Session::has('Status'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <p>{{ \Session::get('Status')}}</p>
    </div>
@endif
<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
            <table id="datatable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($all_roles) && count($all_roles)>0) 
                        @foreach($all_roles as $role)
                            <tr>
                                <td>{{$role->id}}</td>
                                <td>{{ucwords($role->name)}}</td>
                                <td>{{$role->description}}</td>
                                <td><?php echo date_format(new DateTime($role->created_at), 'jS F Y g:ia');?></td>                                
                                <td>
                                    <a href="{{url('user_role?id='.$role->id)}}" title="Edit">
                                        <i class="fa fa-edit fa-2x text-info"></i>
                                    </a>
                                    <a href="{{url('delete_role/'.$role->id)}}" title="Delete">
                                        <i class="fa fa-trash fa-2x text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach 
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- end row -->
@endsection