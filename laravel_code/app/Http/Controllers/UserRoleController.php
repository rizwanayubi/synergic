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
    public function save_role(Request $request)
    {
        if($request && $request->id != ''){
            $validator = Validator::make($request->all(), [
                'name' => 'required|max:255',
                'description' => 'required|max:255'
            ]);
        }else{
            $validator = Validator::make($request->all(), [
                'name' => 'required|max:255|unique:user_roles',
                'description' => 'required|max:255'
            ]);
        }

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }else{
            if($request && $request->id != ''){
                $obj = \App\UserRoles::find($request->id);
            }else{
                $obj = new \App\UserRoles;
            }
            $obj->name = $request->name;
            $obj->description = $request->description;
            $obj->save();

            return back()->with('status','User role has been added successfully');
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
        $data = [];
        if($request && $request->id != ''){
            $data['title'] = 'Edit Role';
            $data['role'] = \App\UserRoles::find($request->id);
        }else{
            $data['title'] = 'Add Role';
        }
        return view('edit_role', $user);  
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
            'name' => 'required|max:255',
            'description' => 'required|max:255'
        ]);
        
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }else{
            $obj = new \App\UserRoles;
            $obj->name = $request->name;
            $obj->description = $request->description;
            $obj->updated_at = date('Y-m-d h:i:s', strtotime('now'));
            $data = request()->except(['_token']);
            $obj->where('id', $id)->update($data);

            return view('all_user_role')->with('status','User role has been updated successfully');
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
        $obj = new \App\UserRoles;
        $obj->where('id', '=', $id)->delete();
        return back()->with('status','Record has been saved successfully');
    }

    public function user_role(Request $request)
    {
        $data = [];
        if($request && $request->id != ''){
            $data['title'] = 'Edit Role';
            $data['role'] = \App\UserRoles::find($request->id);
        }else{
            $data['title'] = 'Add Role';
        }
        return view('user_role', $data);  
    }

    public function users()
    {
        $obj = new \App\UserRoles;
        $users = $boj->select('name', 'id')->get();
        return view('users', compact('users'));   
    }

    public function all_user_role()
    {
        $data = [];
        $data['title'] = 'User Roles';
        $obj = new \App\UserRoles;
        $data['all_roles'] = $obj->get();
        return view('all_user_role', $data);   
    }

}
