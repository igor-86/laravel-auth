@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-9">
                <div class="d-flex justify-content-between">
                    <h3>{{ $project->title }}</h3>
                    <div class="d-flex">
                        <span>Creato il:</span>
                        <p class="ms-4 color-date align-items-center">{{ $project->created_at }}</p>
                    </div>
                </div>
                <div>
                    <p class="mt-3">{{ $project->article }}</p>
                </div>
                <div>
                    <a class="btn btn-dark" href="{{ route('admin.projects.index') }}">Projects</a>
                </div>
            </div>
        </div>
    </div>
@endsection
