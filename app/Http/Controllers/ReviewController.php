<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{

    public function store()
    {
        $this->validate(request(), [
            'description' => 'required|min:3',
            'grade' => 'required',
        ]);

        $review = Review::create([
            'reviewer' => auth()->id(),
            'reviewee' => request('reviewee'),
            'description' => request('description'),
            'grade' => request('grade')
        ]);

        return back();

    }
}
