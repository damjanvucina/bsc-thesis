<?php

namespace App\Http\Controllers;

use App\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{

    public function index(Skill $skill){

        $jobs = $skill->jobs()->get();


        if(auth()->user()->usertype == 'employer'){
            return view('employer.index', compact('jobs'));
        }
        elseif (auth()->user()->usertype == 'employee'){
            return view('employee.index', compact('jobs'));
        }

    }
}
