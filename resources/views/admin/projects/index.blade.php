@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="text-center mt-2">Lista dei miei progetti</h2>
        <div class="row justify-content-center mt-4">
            <div class="col-10">
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
                                        <a class="btn btn-success" href="">
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
