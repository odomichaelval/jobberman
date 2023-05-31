<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use Illuminate\Http\Request;

class JobController extends Controller


{ 
    // show all jobs
    public function index() {
        //dd(request()->tag);
    return view('jobberman.index', [
        'heading' => 'Jobberman',
        'jobs' => Jobs::latest()->filter(request(['tag', 'search']))->get()
    ]); 

}

//show single job
public function show(Jobs  $jobberman) {
return view('jobberman.show' , [
    'onejob' => $jobberman
]);
}


}

// standard naming conventions
// index -Displaying all jobs
// show - Display a single job
// create - create a new job
// store - Store a job
// edit - Edit a job
// update - Update a Job
// destroy - Delete a Job
