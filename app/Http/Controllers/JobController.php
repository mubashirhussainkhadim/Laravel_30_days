<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\User;
use App\Mail\JobPosted;

use Gate;
use Illuminate\Http\Request;
use App\Models\JobListing;
use Mail;
class JobController extends Controller
{
    public function index() {
 return view('jobs.index', ['jobs' => JobListing::with('employer')->latest()->paginate(9)]);
}
    public function create() {
        return view(view: 'jobs.create');
    }
    public function show(JobListing $job) {
        return view('jobs.show',data: ['job' => $job]);

    }
    public function store() {
        request()->validate([
            'name' => ['required' , 'min:4'],
            'salary' => ['required']
          ]);    
        $joblistimg = JobListing::create([
            'name' => request('name'),
            'salary' => request('salary'),
'employer_id' => auth()->check() ? (auth()->user()->employer_id ?? 1) : 1,
        ]);
        
        $joblistimg->load('employer.user'); // Preload necessary relationships
Mail::to($joblistimg->employer->user)->send(new JobPosted($joblistimg));
        return redirect('/jobs');
    }
    public function edit(JobListing $job)
    {
        // Gate::define('edit-job',function(User $user, JobListing $job){
        //     return $job->employer->user->is(Auth::user());
        // });
        // Check if the user is authenticated
        // if (Auth::guest()) {
        //     return redirect('/login');
        // }
        // if ($job->employer->user->isNot(Auth::user())){
        //      abort(403);
        // }
        
        // Gate::authorize( 'edit-job',['job' => $job]);
    
        // Render the edit view with the job listing
        return view('jobs.edit', ['job' => $job]);
    }
    
    public function update(JobListing $job) {
        request()->validate([
            'name' => ['required' , 'min:4'],
            'salary' => ['required']
          ]); 
        //   $job->name = request('name');
        //   $job->salary = request('salary');
        //   $job->save();
        $job->update([
             'name' => request('name'),
             'salary' => request('salary')
        ]);
        Gate::authorize('edit-job',['job' => $job]);

        return redirect(to: '/job/'. $job->id);
    }
    public function destroy(JobListing $job) {
        $job->delete();
        return redirect('/jobs');
    }
}
