<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Hash;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function update_profile(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|max:255'
        ]);
        if($request->hasFile('user_file'))
        {
            $path = $request->user_file->getClientOriginalName(); 
            return $request->file('user_file')->storeAs('public/user_image', $path);
        }
                
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }else{
            $obj = \App\User::find($request->id);
            $obj->name = $request->name;
            $obj->email = $request->email;
            $obj->image = $profile_image->getClientOriginalName();
            $obj->password = Hash::make($request->password);
            $obj->save();

            $data = array(
                'billing_address' => $request->input('billing_address'),
                'office_address' => $request->input('office_address'),
                'license' => $license_image->getClientOriginalName()
            ); 
            DB::table('company')->where('user_id', $request->id)->update($data);

            return back()->with('status','Record has been saved successfully');
        }
    }
    


}
