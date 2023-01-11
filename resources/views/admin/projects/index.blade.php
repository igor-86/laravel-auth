@extends('layouts.admin')

@section('content')
    <div class="container position-relative">
        <h2 class="text-center mt-4">Lista dei miei progetti</h2>
        <a class="btn btn-success pos-ab" href="{{ route('admin.projects.create') }}">New</a>
        <div class="row justify-content-center mt-5">
            <div class="col-10">
                {{-- Messaggio di avviso creazione progetto --}}
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Titolo</th>
                            <th scope="col">Data di creazione</th>
                            <th scope="col">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <th scope="row">{{ $project->title }}</th>
                                <td>{{ $project->created_at }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a class="btn btn-success"
                                            href="{{ route('admin.projects.show', $project->slug) }}">
                                            View
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
