<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
    return view('home');
});
Route::get('/jobs', function () {
    return view('jobs.index', [
        'jobs' => Job::with('employer')->cursorPaginate()
    ]);
});
Route::post('/jobs', function () {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required', 'min:6'],
    ]);
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);
    return redirect("/jobs");
});
Route::get('/jobs/create', function () {
    return view('jobs.create');
});
Route::get('/jobs/{id}', function ($id) {

    $job = Job::find($id);
    return view('jobs.show', ['job' => $job]);
});

Route::get('/jobs/{id}/edit', function ($id) {
    $job = Job::find($id);
    return view('jobs.edit', ['job' => $job]);
});
Route::patch('/jobs/{id}', function ($id) {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required', 'min:6'],
    ]);
    $job = Job::findorFail($id);
    $job->update([
        'title'=>request('title'),
        'salary'=>request('salary')
    ]);
    return redirect('/jobs/'.$job->id);
});
Route::delete('/jobs/{id}', function ($id) {
    Job::findorFail($id)->delete();
    return redirect('/jobs');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
