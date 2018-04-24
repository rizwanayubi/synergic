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

    public function delete_cat($id)
    {
        $obj = new \App\JobCategory;
        $obj->where('id', '=', $id)->delete();
        return back()->with('status','Record has been deleted successfully');
    }

    public function job_form(Request $request)
    {
        $data = [];
        if($request && $request->id != ''){
            $data['title'] = 'Edit Job';
        }else{
            $data['title'] = 'Add Job';
        }
        return view('job.post_job',$data);
    }

    public function save_job(Request $request)
    {
        if($request && $request->id != ''){
            $validator = Validator::make($request->all(), [
                'title' => 'required|max:255',
                'building' => 'required',
                'focal_name' => 'required|max:255',
                'focal_email' => 'required|max:255',
                'job_type' => 'required|max:255',
                'assests' => 'required|max:255',
                'purposal_validity' => 'required|max:255',
                'payment' => 'required|max:255',
                'purposal_format' => 'required|max:255',
                'staffing' => 'required|max:255',
                'uniform' => 'required|max:255'

            ]);
        }else{
            $validator = Validator::make($request->all(), [
                'title' => 'required|max:255',
                'building' => 'required',
                'focal_name' => 'required|max:255',
                'focal_email' => 'required|max:255',
                'job_type' => 'required|max:255',
                'assests' => 'required|max:255',
                'purposal_validity' => 'required|max:255',
                'payment' => 'required|max:255',
                'purposal_format' => 'required|max:255',
                'staffing' => 'required|max:255',
                'uniform' => 'required|max:255'
            ]);
        }
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }else{
            if($request && $request->id != ''){
                $obj = \App\Job::find($request->id);
            }else{
                $obj = new \App\Job;
            }
            $obj->title = $request->title;
            $obj->building = $request->title;
            $obj->focal_name = $request->focal_name;
            $obj->focal_email = $request->focal_email;
            $obj->job_type = $request->job_type;
            $obj->assests = $request->assests;
            $obj->purposal_validity = $request->purposal_validity;
            $obj->payment = $request->payment;
            $obj->purposal_format = $request->purposal_format;
            $obj->staffing = $request->staffing;
            $obj->uniform = $request->uniform;
            $obj->save();

            return back()->with('status','Record has been saved successfully');
        }
    }

    public function delete_job($id)
    {
        $obj = new \App\Job;
        $obj->where('id', $id)->delete();
        return back()->with('status','Record has been deleted successfully');
    }

    public function jobs()
    {
        $data = [];
        $data['title'] = 'Jobs';
        $data['jobs'] = \App\Job::all();
        return view('job.categories',$data);
    }

}
