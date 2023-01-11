@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="text-center mt-4">Inserisci un nuovo progetto</h2>
        <div class="row justify-content-center">
            <div class="col-10">
                <form action="{{ route('admin.projects.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="title">Titolo</label>
                        <input type="text" name="title" id="title"
                            class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="article">Descrizione</label>
                        <textarea name="article" id="article" class="form-control @error('article') is-invalid @enderror" rows="10">{{ old('article') }}</textarea>
                    </div>
                    <button class="btn btn-warning" type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
