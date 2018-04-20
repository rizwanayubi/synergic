<?php

namespace App\Http\Controllers;
use Validator;
use App\JobCat;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function jobcat_form(Request $request)
    {
        $data = [];
        if($request && $request->id != ''){
            $data['title'] = 'Edit Job Category';
            $data['job'] = \App\JobCat::find($request->id);
        }else{
            $data['title'] = 'Add Job Category';
        }
        return view('job.job_category',$data);
    }

    public function jobcat_save(Request $request)
    {
        if($request && $request->id != ''){
            $validator = Validator::make($request->all(), [
                'title' => 'required|max:255',
                'description' => 'required|max:255'

            ]);
        }else{
            $validator = Validator::make($request->all(), [
                'title' => 'required|unique:job_cat|max:255',
                'description' => 'required|max:255'
            ]);
        }
        
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }else{
            if($request && $request->id != ''){
                $obj = \App\JobCat::find($request->id);
            }else{
                $obj = new \App\JobCat;
            }
            $obj->title = $request->title;
            $obj->description = $request->description;
            $obj->save();

            return back()->with('status','Record has been saved successfully');
        } 
    }

    public function categories()
    {
        $data = [];
        $data['title'] = 'Users';
        $data['users'] = \App\JobCat::all();
        return view('job.all_categories',$data);
    }
}
