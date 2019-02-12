@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Jobs</div>
                    <div class="card-body">
                        <a href="{{ route('job.create') }}" class="btn btn-primary">Create a Job</a>
                        <ul id="jobs">
                            @foreach ($jobs as $job)
                                <li class="job">
                                    <div class="title">
                                        <a href="{{ route('job.show', ['id' => $job->id]) }}">
                                            {{ $job->title }}
                                        </a>
                                        by {{ $job->company->name }}
                                    </div>

                                    <div class="location">
                                        {{ $job->location }}
                                    </div>

                                    <div class="content">
                                        {{ $job->short_description }}
                                    </div>
                                </li>
                            @endforeach
                        </ul>

                        {{ $jobs->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection