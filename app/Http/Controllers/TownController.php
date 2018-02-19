<?php

namespace App\Http\Controllers;

use App\Employer;
use App\Job;
use App\Town;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class TownController extends Controller
{

    public function index(Town $town)
    {

        $users = $town->users()
            ->where('usertype', 'like', 'employer')->get();
        //dd($users);

        $employers = new Collection();
        foreach ($users as $user):
            $employer = Employer::where('id', '=', $user->id)->first();
            $employers->add($employer);


        endforeach;

        // dd($employers);


        $jobs = new Collection();
        foreach ($employers as $employer):
            $joblist = $employer->jobs;
            foreach ($joblist as $job):
                $jobs->add($job);
            endforeach;
        endforeach;



        if (auth()->user()->usertype == 'employer') {
            return view('employer.index', compact('jobs'));
        } elseif (auth()->user()->usertype == 'employee') {
            return view('employee.index', compact('jobs'));
        }

    }
}
