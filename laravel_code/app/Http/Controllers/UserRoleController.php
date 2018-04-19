<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AllUser;
use DB;
use Validator;

class UserRoleController extends Controller
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
            'name' => 'required|max:255|unique:user_roles',
            'description' => 'required|max:255'
        ]);
        
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }else{
            $obj = new \App\UserRoles;
            $obj->name = $request->name;
            $obj->description = $request->description;
            $obj->save();

            return back()->with('Status','User role has been added successfully');
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
        $user['role'] = DB::table('user_roles')->find($id);
        return view('user_role', $user);   
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('user_roles')->where('id', '=', $id)->delete();
        return back()->with('Status','User role has been deleted successfully');
    }

    public function user_role()
    {
        return view('user_role');   
    }

    public function users()
    {
        $users = DB::table('user_roles')->select('name', 'id')->get();
        return view('users', compact('users'));   
    }

    public function all_user_role()
    {
        $data = [];
        $data['title'] = 'User Roles';
        $data['all_roles'] = DB::table('user_roles')->get();
        return view('all_user_role', $data);   
    }

}
