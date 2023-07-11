@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-4">
    <div class="row justify-content-between">
        @foreach ($projects as $project)
            <div class="card p-0 mb-4" style="width: 18rem;">
                <img class="card-img-top" src="{{ $project->image }}" alt="{{ $project->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $project->title }}</h5>
                    <h6 class="card-title">{{ $project->description }}</h6>
                    <a href="{{ route("admin.projects.show", $project) }}" class="btn btn-primary">View details</a>
                </div>
            </div>
        @endforeach
    </div>
</div>



@endsection