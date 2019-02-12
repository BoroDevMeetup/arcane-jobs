<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use App\Http\Resources\JobCollection;
use App\Http\Resources\Job as JobResource;

class JobController extends Controller
{
    public function index($filter = null)
    {
        if (is_null($filter)) {
            $jobs = Job::simplePaginate(10);
        } else {
            $jobs = Job::where('type', '=', $filter)->simplePaginate(10);
        }

        return view('jobs.index', ['jobs' => $jobs]);
    }

    public function create()
    {
        $jobTypes = Job::jobTypes();
        return view('jobs.create', ['jobTypes' => $jobTypes]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|min:5|max:255',
        ]);
    }

    public function update()
    {
        //
    }

    public function show($id)
    {
        $job = Job::findOrFail($id);
        return view('jobs.show', ['job' => $job]);
    }
}
