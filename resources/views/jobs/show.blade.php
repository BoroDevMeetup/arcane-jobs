@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Job (id: {{ $job->id }})</div>
                    <div class="card-body">

                        <div class="job">
                            <div class="title">{{ $job->title }}</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection