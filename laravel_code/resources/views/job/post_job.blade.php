@extends('layouts.app') @section('content')
@section('css')
<style>
.error-message {
    list-style-type: none !important;
}
</style>
@endsection
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="btn-group pull-right m-t-15 m-b-15 ">
            <a href="" type="button" class="btn btn-custom waves-effect waves-light">Back To Jobs</a>
        </div>
        <h4 class="page-title">{{isset($title)?$title:''}}</h4>
    </div>
</div>
<div class="row">
    <form role="form" data-parsley-validate novalidate method="POST" enctype="multipart/form-data" action="{{ url('save_job') }}">
        {{ csrf_field() }}
        <div class="col-sm-12 col-xs-12 col-md-12">
            <div class="card-box">
                <!-- <div class="col-md-2"></div> -->
                <div class="col-md-12">
                    <div class="p-10">
                        @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul  class="error-message">
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
                        <input type="hidden" name="id" value="{{Request::input('id')}}">
                        <div class="form-group row">
                            <div class="col-sm-6 padding-left-0 padding-right-0">
                                <label for="inputEmail3" class="col-sm-12 form-control-label">Job Title
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-sm-12">
                                    <input type="text" required parsley-type="text" placeholder="Job Title" name="title" value="{{old('title')}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 padding-left-0 padding-right-0">
                                <label for="inputEmail3" class="col-sm-12 form-control-label">Select Building
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-sm-12">
                                    <div id="fmc_div" class="form-group row">
                                        <div class="col-md-12">
                                            <select class="form-control" name="building">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <h5>Focal Person</h5>
                                <div class="col-sm-6 padding-left-0 padding-right-0">
                                    <label for="inputEmail3" class="col-sm-12 form-control-label">Name
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-sm-12">
                                        <input type="text" required parsley-type="text" placeholder="Name" name="focal_name" value="{{old('focal_name')}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6 padding-left-0 padding-right-0">
                                    <label for="inputEmail3" class="col-sm-12 form-control-label">Email
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-sm-12">
                                        <input type="email" required parsley-type="email" placeholder="Email" name="focal_email" value="{{old('focal_email')}}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <h5>Select Job Type</h5>
                                <div class="col-sm-6 padding-left-0 padding-right-0">
                                    <div class="radio radio-info radio-inline">
                                        <input value="option1" name="job_type" checked="" type="radio">
                                        <label for="inlineRadio1">Annual Maintenance</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 padding-left-0 padding-right-0">
                                    <div class="radio radio-info radio-inline">
                                        <input value="option1" name="job_type" type="radio">
                                        <label for="inlineRadio1">Breakdown Maintenance</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 padding-left-0 padding-right-0">
                                <label for="inputEmail3" class="col-sm-12 form-control-label">Select Assests
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-sm-12">
                                    <div id="fmc_div" class="form-group row">
                                        <div class="col-md-12">
                                            <select class="form-control" name"assests">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="inputEmail3" class="col-sm-12 form-control-label">Purposal Validity
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-sm-12">
                                    <input type="number" required parsley-type="number" placeholder="Purposal Validity" name="purposal_validity" value="{{old('purposal_validity')}}"
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 padding-left-0 padding-right-0">
                                <label for="inputEmail3" class="col-sm-12 form-control-label">Payment Terms
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-sm-12">
                                    <input type="text" required parsley-type="text" placeholder="Payment Terms" name="payment" value="{{old('payment')}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="inputEmail3" class="col-sm-12 form-control-label">Purposal Format
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-sm-12">
                                    <input type="text" required parsley-type="text" placeholder="Purposal Format" name="purposal_format" value="{{old('purposal_format')}}"
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 padding-left-0 padding-right-0">
                                <h5>Staffing</h5>
                                <div class="col-sm-6 padding-left-0 padding-right-0">
                                    <div class="radio radio-info radio-inline">
                                        <input value="standard" name="staffing" checked="" type="radio">
                                        <label for="inlineRadio1">Standard</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 padding-left-0 padding-right-0">
                                    <div class="radio radio-info radio-inline">
                                        <input value="customized" name="staffing" type="radio">
                                        <label for="inlineRadio1">Customized</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <h5>Unifrom</h5>
                                <div class="col-sm-6 padding-left-0 padding-right-0">
                                    <div class="radio radio-info radio-inline">
                                        <input value="standard" name="uniform" checked="" type="radio">
                                        <label for="inlineRadio1">Standard</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 padding-left-0 padding-right-0">
                                    <div class="radio radio-info radio-inline">
                                        <input value="customized" name="uniform" type="radio">
                                        <label for="inlineRadio1">Customized</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-6 padding-left-0 padding-right-0">
                                <div class="col-sm-12">

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
                        Save
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