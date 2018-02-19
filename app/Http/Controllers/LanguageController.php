<?php

namespace App\Http\Controllers;

use App\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LanguageController extends Controller
{
    public function index(Language $language){

        $jobs = $language->jobs()->get();

        if(auth()->user()->usertype == 'employer'){
            return view('employer.index', compact('jobs'));
        }
        elseif (auth()->user()->usertype == 'employee'){
            return view('employee.index', compact('jobs'));
        }

    }
}
