<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function user_save(Request $request)
    {
        if($request && $request->id != ''){
            $validator = Validator::make($request->all(), [
                'role_id' => 'required',
                'email' => 'required|email',
                'password' => 'required|max:255',
                'name' => 'required|max:255',
            ]);
        }else{
            $validator = Validator::make($request->all(), [
                'role_id' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|max:255',
                'name' => 'required|max:255',
            ]);
        }

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }else{
            if($request && $request->id != ''){
                $obj = \App\User::find($request->id);
            }else{
                $obj = new \App\User;
            }
            $obj->role_id = $request->role_id;
            $obj->name = $request->name;
            $obj->email = $request->email;
            $obj->password = Hash::make($request->password);
            $obj->save();
            return redirect('users')->with('status','Record has been saved successfully');
        } 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /* Users
    -----------------------------------------------------------------------*/
    public function users()
    {
        $data = [];
        $data['title'] = 'Users';
        $data['users'] = DB::table('users as u')
        ->leftjoin('user_roles as r', 'r.id', '=', 'u.role_id')
        ->select('u.*','r.name as user_role_name')
        ->get();

        return view('users.users',$data);
    }

    /* Users
    -----------------------------------------------------------------------*/
    public function user_form(Request $request)
    {
        $data = [];
        if($request && $request->id != ''){
            $data['title'] = 'Edit User';
            $data['user'] = \App\User::find($request->id);
            $data['roles'] = DB::table('user_roles')->select('name', 'id')->get();
        }else{
            $data['title'] = 'Add User';
        }
        return view('users.user_form',$data);
    }

    public function edit($id)
    {
        $user = array();
        $obj = new \App\User;
        $user['data'] = $obj->find($id);
        $user['roles'] = DB::table('user_roles')->select('name', 'id')->get();
        return view('edit_user', $user);   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = new \App\User;
        $obj->where('id', '=', $id)->delete();
        return back()->with('status','Record has been deleted successfully');
    }

    public function add_user()
    {
        $users = DB::table('user_roles')->select('name', 'id')->get();
        return view('add_user', compact('users'));
    }

    public function user_profile()
    {
        $data = [];
        $data['title'] = 'Update Profile';
        return view('users.user_profile', $data);
    }

    public function user_registration(Request $request)
    {
        if($request && $request->id != ''){
            $validator = Validator::make($request->all(), [
                'role_id' => 'required',
                'email' => 'required|email',
                'password' => 'required|max:255',
                'name' => 'required|max:255',
            ]);
        }else{
            $validator = Validator::make($request->all(), [
                'role_id' => 'required',
                'email' => 'required|email|unique:users',
                'contact_no' => 'required|numeric',
                'name' => 'required|max:255',
                'password' => 'required|max:255'
            ]);
        }

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }else{
            if($request && $request->id != ''){
                $obj = \App\User::find($request->id);
            }else{
                $obj = new \App\User;
            }
            $arr_cat = $request->job_categories;
            $cat = implode(',', $arr_cat);

            $obj->role_id = $request->role_id;
            $obj->name = $request->name;
            $obj->email = $request->email;
            $obj->contact_no = $request->contact_no;
            $obj->job_categories = $cat;
            $obj->password = Hash::make($request->password);
            $obj->save();
            $last_id = DB::getPdo()->lastInsertId();
            $data = array(
                'user_id' => $last_id,
                'name' => $obj->name,
                'contact_no' => $obj->contact_no,
                'job_categories' => $obj->job_categories
            );
            $users = DB::table('company')->insert($data);
            return back()->with('status','Record has been saved successfully');
        } 
    }
}
