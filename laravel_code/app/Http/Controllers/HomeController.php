<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Input;
use DB;
use Validator;
use UploadServiceProvider\Uploader;
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
        
        
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }else{
            $obj = \App\User::find($request->id);
            if($request->hasFile('user_image'))
            {
                $user_image = $request->user_image->getClientOriginalName(); 
                $request->file('user_image')->storeAs('public/user_image', $user_image);
                $obj->image = $user_image;
            }
            if($request->hasFile('licence_image'))
            {
                $company_image = $request->licence_image->getClientOriginalName(); 
                $request->file('licence_image')->storeAs('public/company_image', $company_image);
                $data['license'] = $company_image;
            } 
            $obj->name = $request->name;
            $obj->email = $request->email;
            $obj->password = Hash::make($request->password);
            $obj->save();

            $data['billing_address'] = $request->input('billing_address');
            $data['office_address'] = $request->input('office_address');
            DB::table('company')->where('user_id', $request->id)->update($data);

            return back()->with('status','Record has been saved successfully');
        }
    }

    public function show_profile()
    {
        $data = [];
        $data['title'] = "User Profile";
        $id = Input::get('id');
        $data['profile'] = \App\User::find($id);
        $data['role'] = DB::table('user_roles')->where('id', $data['profile']['role_id'])->select('name as role')->first();
        $data['company'] = DB::table('company')->where('user_id',$id)->first();
        $data['categories'] = \App\JobCategory::get();
        return view('users.complete_profile', $data);
    }

    public function demo()
    {
        return view('users.demo');
    }
}
