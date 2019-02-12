@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create a Job</div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('job.create' ) }}" method="post">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description"></textarea>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="statusOpen" value="open">
                                <label class="form-check-label" for="statusOpen">
                                    Open
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="status" id="statusClosed" value="closed">
                                <label class="form-check-label" for="statusClosed">
                                    Closed
                                </label>
                            </div>

                            <select class="custom-select mb-3">
                                <option value="" selected> -- SELECT -- </option>
                                @foreach ($jobTypes as $jobType)
                                    <option value="{{ $jobType }}">{{ $jobType }}</option>
                                @endforeach
                            </select>
                            @csrf
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection