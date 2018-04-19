<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'role_id' => 'required',
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|max:255'
        ]);
        
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }else{
            $obj = new \App\User;
            $obj->role_id = $request->role_id;
            $obj->name = $request->name;
            $obj->email = $request->email;
            $obj->password = Hash::make($request->password);
            $obj->save();

            return back()->with('Status','User has been added successfully');
        } 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = array();
        $obj = new \App\User;
        $user['data'] = $obj->find($id);
        $user['roles'] = DB::table('user_roles')->select('name', 'id')->get();
        return view('edit_user', $user);   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'role_id' => 'required',
            'name' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|max:255'
        ]);
        
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }else{
            $obj = new \App\User;
            $obj->role_id = $request->role_id;
            $obj->name = $request->name;
            $obj->email = $request->email;
            $obj->password = Hash::make($request->password);
            $obj->updated_at = date('Y-m-d h:i:s', strtotime('now'));
            $data = request()->except(['_token']);
            $obj->where('id', $id)->update($data);

            return view('users')->with('Status','User has been updated successfully');
        } 
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
        return back()->with('Status','User has been deleted successfully');
    }

    public function users()
    {
        $data = [];
        $data['title'] = 'Users';
        $data['users'] = \App\User::select('users.*', 'user_roles.name as role_name')->join('user_roles', 'user_roles.id', '=', 'users.id');
        return view('users',$data);
    }

    public function add_user()
    {
        $users = DB::table('user_roles')->select('name', 'id')->get();
        return view('add_user', compact('users'));
    }
}
