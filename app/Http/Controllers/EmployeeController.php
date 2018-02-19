<?php

namespace App\Http\Controllers;


use App\Jobtype;
use App\User;
use App\Employee;
use App\Employer;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use App\Town;
use App\Job;
use App\Mail\Registration;
use Illuminate\Support\Facades\Auth;


class EmployeeController extends Controller
{
    public function registerCreate()
    {
        return view('employee.register');
    }

    public function loginCreate()
    {
        return view('employee.login');
    }

    public function registerStore()
    {
        $this->validate(request(), [
            'name' => 'required',
            'surname' => 'required',
            'town' => 'required',
            'age' => 'required',
            'jobtype' => 'required',
            'experience' => 'required',
            'school' => 'required',
            'phone' => 'required',
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
            'usertype' => 'employee'
        ]);

        //$type = \DB::table('jobtypes')->where('name', 'like', request('jobtype'))->pluck('id')->first();
        $jobtypeInput = request('jobtype');
        $type = Jobtype::where('name', 'like', $jobtypeInput)->first();
        if (is_null($type)) {
            $type = new Jobtype();
            $type->name = $jobtypeInput;
            $type->save();
        }
        $id = \DB::table('users')->pluck('id')->last();

        $employee = Employee::create([
            'id' => $id,
            'name' => request('name'),
            'surname' => request('surname'),
            'age' => request('age'),
            'school' => request('school'),
            'experience' => request('experience'),
            'phone' => request('phone'),
            'about' => request('about'),
            'jobtype_id' => $type->id
        ]);

        auth()->login($user);

        \Mail::to($user)->send(new Registration($user));


        return redirect('/employee/index');
    }

    public function loginStore()
    {
         if (!auth()->attempt(request(['email', 'password']))) {
            return back()->withErrors([
                'message' => 'Molimo provjerite svoje podatke i pokušajte ponovno.'
            ]);
        }
        if(Auth::user()->usertype == 'employee'){
            return redirect('/employee/index');
        }

        if(Auth::user()->usertype == 'employer'){
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


        return view('employee.index', compact('jobs'));
    }

    public function myFilter()
    {

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

    public function match()
    {
        //current user's jobtype_id
        $type = Employee::where('id', '=', auth()->user()->id)->pluck('jobtype_id')->first();

        //current user's town_id
        $town = auth()->user()->town_id;

        //same town users
        $users = \DB::table('users')->where('town_id', 'like', $town)->get();

        $employers = new Collection();

        foreach ($users as $user)://useri iz istog grada
        foreach(Employer::all() as $employer):
                if($employer->id == $user->id && $employer->jobtype_id ==$type):
                    $employers->add($employer);//employeri iz istog grada
                    endif;
                endforeach;
            endforeach;


        $jobs = new Collection();
        foreach ($employers as $employer):
            foreach ($employer->jobs as $job)
            $jobs->add($job);
            endforeach;

        return view('employee.index', compact('jobs'));

    }

    public function edit(Employee $employee){
        $town_id = \DB::table('users')->where('id', '=', $employee->id)->first()->town_id;
        $jobtype = \DB::table('jobtypes')->where('id', '=', $employee->jobtype_id)->first()->name;
        $email = \DB::table('users')->where('id', '=', $employee->id)->first()->email;
        \DB::table('employees')->where('id', '=', $employee->id)->delete();
        \DB::table('users')->where('id', '=', $employee->id)->delete();
        \DB::table('reviews')->where('reviewer', '=', $employee->id)->delete();
        \DB::table('reviews')->where('reviewee', '=', $employee->id)->delete();
        return view('employee.edit', compact('employee', 'town_id', 'jobtype', 'email'));
    }

    public function delete(Employee $employee){
        \DB::table('employees')->where('id', '=', $employee->id)->delete();
        \DB::table('users')->where('id', '=', $employee->id)->delete();
        return redirect('/');
    }

}
