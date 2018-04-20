<?php

namespace App\Http\Controllers;
use Validator;
use App\JobCategory;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function jobcat_form(Request $request)
    {
        $data = [];
        if($request && $request->id != ''){
            $data['title'] = 'Edit Job Category';
            $data['job'] = \App\JobCategory::find($request->id);
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
                'title' => 'required|unique:job_categories|max:255',
                'description' => 'required|max:255'
            ]);
        }
        
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }else{
            if($request && $request->id != ''){
                $obj = \App\JobCategory::find($request->id);
            }else{
                $obj = new \App\JobCategory;
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
        $data['title'] = 'Categories';
        $data['categories'] = \App\JobCategory::all();
        return view('job.categories',$data);
    }
}
