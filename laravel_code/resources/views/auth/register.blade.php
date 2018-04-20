@extends('partials.index') @section('content')
<div class="text-xs-center m-t-20">
    <a href="#" class="logo">
        <i class="zmdi zmdi-group-work icon-c-logo"></i>
        <span>Synergic</span>
    </a>
</div>
<div class="m-t-10 p-20">
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
    <div class="row">
        <div class="col-xs-12 text-xs-center">
            <h6 class="text-muted text-uppercase m-b-0 m-t-0">Sign Up</h6>
        </div>
    </div>
    <form class="form-horizontal m-t-20" method="POST" action="{{ url('user_save') }}">
        {{ csrf_field() }}
        <div class="row">
            <label class="col-sm-4">Company Type</label>
            <div class="col-sm-8">
                <div class="radio c-input ">
                    <input name="role_id" id="radio2" value="3" checked="" type="radio">
                    <label for="radio2">
                        FMC
                    </label>
                </div>
                <div class="radio c-input ">
                    <input name="role_id" id="radio1" value="2" type="radio">
                    <label for="radio1">
                        OAM
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-12">
                <select class="select2 form-control select2-multiple" name="job_categories[]" multiple="multiple" data-placeholder="Select Job Categories">
                    <optgroup label="Alaskan/Hawaiian Time Zone">
                        <option value="AK">Alaska</option>
                        <option value="HI">Hawaii</option>
                    </optgroup>
                    <optgroup label="Pacific Time Zone">
                        <option value="CA">California</option>
                        <option value="NV">Nevada</option>
                        <option value="OR">Oregon</option>
                        <option value="WA">Washington</option>
                    </optgroup>
                    <optgroup label="Mountain Time Zone">
                        <option value="AZ">Arizona</option>
                        <option value="CO">Colorado</option>
                        <option value="ID">Idaho</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NM">New Mexico</option>
                        <option value="ND">North Dakota</option>
                        <option value="UT">Utah</option>
                        <option value="WY">Wyoming</option>
                    </optgroup>
                    <optgroup label="Central Time Zone">
                        <option value="AL">Alabama</option>
                        <option value="AR">Arkansas</option>
                        <option value="IL">Illinois</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="OK">Oklahoma</option>
                        <option value="SD">South Dakota</option>
                        <option value="TX">Texas</option>
                        <option value="TN">Tennessee</option>
                        <option value="WI">Wisconsin</option>
                    </optgroup>
                    <optgroup label="Eastern Time Zone">
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="IN">Indiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="OH">Ohio</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WV">West Virginia</option>
                    </optgroup>
                </select>
            </div>
        </div>
        <div class="form-group row {{ $errors->has('email') ? ' has-error' : '' }}">
            <div class="col-md-12">
                <input type="email" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}" required> @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="form-group row {{ $errors->has('name') ? ' has-error' : '' }}">
            <div class="col-md-12">
                <input type="text" placeholder="Contact Number" class="form-control" name="contact_no" value="{{ old('contact_no') }}" required> @if ($errors->has('number'))
                <span class="help-block">
                    <strong>{{ $errors->first('number') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="form-group row {{ $errors->has('name') ? ' has-error' : '' }}">
            <div class="col-md-12">
                <input type="text" placeholder="Company Name" class="form-control" name="name" value="{{ old('name') }}" required> @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="form-group row {{ $errors->has('password') ? ' has-error' : '' }}">
            <div class="col-md-12">
                <input placeholder="Password" type="password" class="form-control" name="password" required> @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="form-group row text-center m-t-10">
            <div class="col-xs-12">
                <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Save</button>
            </div>
        </div>
    </form>
</div>
@endsection