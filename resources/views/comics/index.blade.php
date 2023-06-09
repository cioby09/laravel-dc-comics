@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="mt-2 d-flex justify-content-between align-items-center">
            <h2>Fumetti</h2>
            <a class="btn btn-success" href="{{ route('comics.create') }}" role="button">Inserisci nuovo fumetto</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Serie</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic->id }}</th>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>
                            <a class="btn btn-info" href="{{ route('comics.show', $comic->id) }}">
                                Info
                            </a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
