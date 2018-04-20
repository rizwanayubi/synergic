@extends('layouts.app') @section('content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="btn-group pull-right m-t-15">
            <a href="{{url('all_job_cat')}}" type="button" class="btn btn-custom waves-effect waves-light">Back to Categories</a>
        </div>
        <h4 class="page-title">{{isset($title)?$title:''}}</h4>
    </div>
</div>
<div class="col-sm-12 col-xs-12 col-md-12">
    <div class="card-box">
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
           
            <form role="form" data-parsley-validate novalidate method="POST" action="{{ url('jobcat_save') }}">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{Request::input('id')}}">                
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 form-control-label">Title
                        <span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-8">
                        <input type="text" required parsley-type="text" name="title" value="{{old('title')}} {{isset($job->title)?$job->title:''}}" class="form-control"
                            placeholder="Title">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="hori-pass1" class="col-sm-2 form-control-label">Description
                        <span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-8">
                        <div>
                            <textarea required class="form-control" name="description" value="{{old('description')}}" placeholder="Description">{{isset($job->description)?$job->description:''}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                            Save
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