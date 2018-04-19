<div class="col-sm-12 col-xs-12 col-md-12">
    <div class="card-box">
        <h4 class="header-title m-t-0">EDIT USER</h4>
        <div class="p-20">
            @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul style="text-decoration: none;">
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form role="form" data-parsley-validate novalidate method="POST" action="{{ url('update_user/'.$data->id) }}">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 form-control-label">Select Role
                        <span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-8">
                        <fieldset class="">
                            <select class="form-control" id="exampleSelect1" name="role_id">
                                @foreach($roles as $role)
                                <option @if($data->role_id == $role->id){echo "selected='selected'";}@endif value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach
                            </select>
                        </fieldset>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 form-control-label">Name
                        <span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-8">
                        <input type="text" required parsley-type="text" name="name" value="{{$data->name}}" class="form-control" id="inputEmail1" placeholder="Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 form-control-label">Email
                        <span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-8">
                        <input type="email" required parsley-type="email" name="email" value="{{$data->email}}" class="form-control" placeholder="Email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="hori-pass1" class="col-sm-2 form-control-label">Password
                        <span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-8">
                        <div>
                            <input type="password" required parsley-type="password" name="password" value="{{Hash::needsRehash($data->password)}}" class="form-control" placeholder="Password">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                            Update
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
