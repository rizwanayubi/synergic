@extends('layouts.app') @section('content')
<div class="col-sm-12 col-xs-12 col-md-12">
    <div class="card-box">
        <h4 class="header-title m-t-0">ADD NEW USER ROLE</h4>
        <div class="p-20">
            @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul style="text-decoration: none;">
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif @if(\Session::has('Status'))
            <div class="alert alert-success">
                <p>{{ \Session::get('Status')}}</p>
            </div>
            @endif
           
            <form role="form" data-parsley-validate novalidate method="POST" action="{{ url('user_role') }}">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 form-control-label">Name
                        <span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-8">
                        <input type="text" required parsley-type="text" name="name" value="{{old('name'), $role->name}}" class="form-control" id="inputEmail3"
                            placeholder="Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="hori-pass1" class="col-sm-2 form-control-label">Description
                        <span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-8">
                        <div>
                            <textarea required class="form-control" name="description" value="{{old('description')}}" placeholder="Description"></textarea>
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