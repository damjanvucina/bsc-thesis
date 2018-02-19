<?php

namespace App\Http\Controllers;

use App\Job;
use App\Language;
use App\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{

    public function create(){
        return view('jobs.create');
    }

    public function store(Request $request){

        $data = $request->all();

        $this->validate(request(),[
            'startdate' => 'required|after:yesterday',
            'enddate' => 'required|after:startdate',
            'payment' => 'required',
            'salary' => 'required',
            'requiredexperience' => 'required',
            'description' => 'required'
        ]);

//        $type = \DB::table('jobtypes')->where('name', 'like', request('jobtype'))->pluck('id')->first();
        $userid = Auth::id();
        $type = \DB::table('employers')->where('id', 'like', $userid)->pluck('jobtype_id')->first();

        $job = Job::create([
            'startdate' => request('startdate'),
            'enddate' => request('enddate'),
            'payment' => request('payment'),
            'salary' => request('salary'),
            'description' => request('description'),
            'jobtype_id' => $type,
            'requiredexperience' => request('requiredexperience'),
            'employer_id' => Auth::id()
        ]);

        $languages = $data['languages'];

        foreach ($languages as $input) {

            $language = Language::where('name','=',$input)->first();

            if (is_null($language)){
                $language = new Language();
                $language->name=$input;
                $language->save();

            }
            $job->languages()->attach([$language->id]);
        }

        $skills = $data['skills'];

        foreach ($skills as $input) {

            $skill = Skill::where('name','=',$input)->first();

            if (is_null($skill)){
                $skill = new Skill();
                $skill->name=$input;
                $skill->save();

            }
            $job->skills()->attach([$skill->id]);
        }

        //dodaj slanje maila kao potvrdu objavljivanja posla

        return redirect('/employer/index');

    }

    public function show(Job $job){
        return view('jobs.show', compact('job'));
    }

    public function edit(Job $job){
        \DB::table('jobs')->where('id', '=', $job->id)->delete();
        \DB::table('job_language')->where('job_id', '=', $job->id)->delete();
        \DB::table('job_skill')->where('job_id', '=', $job->id)->delete();
        return view('jobs.edit', compact('job'));
    }

    public function delete(Job $job){
        \DB::table('jobs')->where('id', '=', $job->id)->delete();
        \DB::table('job_language')->where('job_id', '=', $job->id)->delete();
        \DB::table('job_skill')->where('job_id', '=', $job->id)->delete();
        $jobs = Job::latest()->get();
        return redirect('/employer/index');
    }

}
