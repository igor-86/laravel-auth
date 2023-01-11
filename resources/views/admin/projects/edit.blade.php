@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class=" text-center mt-4">Modifica {{ $project->title }}</h2>
        <div class="row justify-content-center">
            <div class="col-10">
                <form action="{{ route('admin.projects.update', $project->slug) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group mb-3">
                        <label for="title">Titolo</label>
                        <input type="text" name="title" id="title"
                            class="form-control @error('title') is-invalid @enderror"
                            value="{{ old('title', $project->title) }}">
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="article">Titolo</label>
                        <textarea name="article" id="article" class="form-control" rows="10">{{ old('article', $project->article) }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-warning">Salva</button>
                </form>
            </div>
        </div>
    </div>
@endsection