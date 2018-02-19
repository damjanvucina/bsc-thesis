<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Jobtype;
use App\Town;
use App\Employer;
use App\Job;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Mail\Registration;
use Illuminate\Support\Facades\Auth;


class EmployerController extends Controller
{

    public function registerCreate()
    {
        return view('employer.register');
    }

    public function loginCreate()
    {
        return view('employer.login');
    }

    public function registerStore()
    {

        $this->validate(request(), [
            'name' => 'required',
            'jobtype' => 'required',
            'numemployees' => 'required',
            'numjobs' => 'required',
            'town' => 'required',
            'about' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required',
        ]);

        $input = request('town');
        $town = Town::where('id', '=', $input)->first();
        if (is_null($town)) {
            $town = new Town();
            $town->id = $input;
            $town->save();
        }

        $user = User::create([
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'town_id' => request('town'),
            'usertype' => 'employer'
        ]);

       // $type = \DB::table('jobtypes')->where('name', 'like', request('jobtype'))->pluck('id')->first();
        $jobtypeInput = request('jobtype');
        $type = Jobtype::where('name', 'like', $jobtypeInput)->first();
        if (is_null($type)) {
            $type = new Jobtype();
            $type->name = $jobtypeInput;
            $type->save();
        }
        $id = \DB::table('users')->pluck('id')->last();

        $employer = Employer::create([
            'id' => $id,
            'name' => request('name'),
            'numemployees' => request('numemployees'),
            'numjobs' => request('numjobs'),
            'about' => request('about'),
            'jobtype_id' => $type->id
        ]);

        auth()->login($user);

       \Mail::to($user)->send(new Registration($user));



        return redirect('/employer/index');
    }

    public function loginStore()
    {
        if (!auth()->attempt(request(['email', 'password']))) {
            return back()->withErrors([
                'message' => 'Molimo provjerite svoje podatke i pokušajte ponovno.'
            ]);
        }
        if (Auth::user()->usertype == 'employee') {
            return redirect('/employee/index');
        }

        if (Auth::user()->usertype == 'employer') {
            return redirect('/employer/index');
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }

    public function index()
    {
        $jobs = Job::latest()->get();

        if (array_values(request(['req']))[0] == 'created_at') {

            $jobs = Job::latest()
                ->filterCreate(request(['month', 'year']))
                ->get();
        } elseif (array_values(request(['req']))[0] == 'startdate') {

            $jobs = Job::latest()
                ->filterStart(request(['month', 'year']))
                ->get();
        }

        return view('employer.index', compact('jobs'));
    }

    public function employer(Employer $employer)
    {
        return view('employer.show', compact('employer'));
    }

    public function employers()
    {
        $employers = Employer::latest()->get();
        return view('employer.browse', compact('employers'));
    }

    public function employees()
    {
        $employees = Employee::latest()->get();
        return view('employee.browse', compact('employees'));
    }

    public function employee(Employee $employee)
    {
        return view('employee.show', compact('employee'));
    }

    public function edit(Employer $employer)
    {
        $town_id = \DB::table('users')->where('id', '=', $employer->id)->first()->town_id;
        $jobtype = \DB::table('jobtypes')->where('id', '=', $employer->jobtype_id)->first()->name;
        $email = \DB::table('users')->where('id', '=', $employer->id)->first()->email;
        \DB::table('employers')->where('id', '=', $employer->id)->delete();
        \DB::table('users')->where('id', '=', $employer->id)->delete();
        \DB::table('jobs')->where('employer_id', '=', $employer->id)->delete();
        \DB::table('reviews')->where('reviewer', '=', $employer->id)->delete();
        \DB::table('reviews')->where('reviewee', '=', $employer->id)->delete();
        return view('employer.edit', compact('employer', 'town_id', 'jobtype', 'email'));
    }

    public function delete(Employer $employer)
    {
        \DB::table('employers')->where('id', '=', $employer->id)->delete();
        \DB::table('users')->where('id', '=', $employer->id)->delete();
        return redirect('/');
    }


}
