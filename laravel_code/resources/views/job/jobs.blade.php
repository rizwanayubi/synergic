@extends('layouts.app') @section('content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="btn-group pull-right m-t-15">
            <a href="{{url('job_form')}}" type="button" class="btn btn-custom waves-effect waves-light">Add New Job</a>
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
                        <th>Title</th>
                        <th>Building</th>
                        <th>Focal Name</th>
                        <th>Focal Email</th>
                        <th>Job Type</th>
                        <th>Assests</th>
                        <th>Purposal Validity</th>
                        <th>payment</th>
                        <th>Purposal Format</th>
                        <th>Staffing</th>
                        <th>Uniform</th>
                        <th>Created_At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($users) && count($users)>0) @foreach($users as $row)
                    <tr>
                        <td>{{$row->id}}</td>
                        <td>{{ucwords($row->title)}}</td>
                        <td>{{$row->building}}</td>
                        <td>{{$row->focal_name}}</td>
                        <td>{{$row->focal_email}}</td>
                        <td>{{$row->job_type}}</td>
                        <td><?php 
                            $assests = $row->job_type; //job categories IDs in string separating with comma
                            $assest = explode(',', $assests); //Make categories an array
                            $i=0;
                            if(isset($all_assests)):
                                foreach($all_assests as $all): //compare all categories IDs with User category IDs
                                    if($all->id == $assest[$i]):?> 
                                        {{$row->assests . " ,"}}
                            <?php endif; $i++; endforeach; endif;?>
                        </td>
                        <td>{{$row->purposal_validity}}</td>
                        <td>{{$row->payment}}</td>
                        <td>{{purposal_format}}</td>
                        <td>{{$row->staffing}}</td>
                        <td>{{$row->uniform}}</td>
                        <td>
                            <?php echo date_format(new DateTime($row->created_at), 'jS F Y g:ia');?>
                        </td>
                        <td>
                            <a class="" href="{{url('job_form?id='.$row->id)}}" title="Edit">
                                <i class="fa fa-edit fa-2x text-info"></i>
                            </a>
                            <a href="{{url('delete_job/'.$row->id)}}" onclick="return confirm('Are you sure you want to delete this item?');" title="Delete">
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