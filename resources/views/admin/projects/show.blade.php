@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-4">
    <div class="row justify-content-between">
        <h1>{{ $project->title }}</h1>
        <p>{{ $project->description }}</p>
        <h2>tipo: {{ $project->type ? $project->type->name : "Senza tipo" }}</h2>
        <h2>tipo: {{ $project->technology ? $project->technology->name : "Senza tecnologia" }}</h2>
        <img src="{{ $project->image }}" alt="{{ $project->title }}" />
    </div>
</div>

@endsection