<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->paginate(10);
    return view('jobs/index', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/create', function(){
    return view('jobs/create');
});

Route::get('/jobs/{id}', function ($id) {
        $job = Job::find($id);

    return view('jobs/show', ['job' => $job]);
});

Route::post('/jobs', function () {
    $validated = request()->validate([
        'title' => 'required|string|max:255|min:3',
        'salary' => 'required|string|max:255',
    ]);

    $employer = App\Models\Employer::first();
    $employerId = $employer ? $employer->id : null;

    Job::create([
        'title' => $validated['title'],
        'salary' => $validated['salary'],
        'employer_id' => $employerId,
    ]);

    return redirect('/jobs')->with('success', 'Job created successfully.');
});

Route::get('/jobs/{id}/edit', function ($id) {
    $job = Job::find($id);
    return view('jobs.edit', ['job' => $job]);
});

Route::put('/jobs/{id}', function ($id) {
    $job = Job::find($id);
    
    $validated = request()->validate([
        'title' => 'required|string|max:255|min:3',
        'salary' => 'required|string|max:255',
    ]);
    $job=Job::findOrFail($id);

    $job->update([
        'title' => $validated['title'],
        'salary' => $validated['salary'],
        
    ]);
    

    return redirect('/jobs')->with('success', 'Job updated successfully.');
});
//destroy
Route::delete('/jobs/{id}', function ($id) {
    $job = Job::findOrFail($id);
    $job->delete();
    return redirect('/jobs');
    });


Route::get('/contact', function () {
    return view('contact');
});


