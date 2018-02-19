<?php

namespace App\Http\Controllers;

use App\Mail\Job;
use App\User;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function employeeSend(){
        $sender = auth()->user()->id;
        $receiver = User::where('email', 'like', request('receiver'))->first()->id;
        $job = \App\Job::where('id', '=', request('job'))->first()->id;
        \Mail::to(User::where('email', 'like', request('receiver'))->first())->send(new Job($sender, $receiver, $job));
        return redirect('/employee/index');
    }
}
