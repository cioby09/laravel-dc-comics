@extends('layouts.app')

@section('content')
    <div class="container d-flex flex-column justify-content-center">
        <h2 class="text-center">Info fumetto: {{ $comic->title }}</h2>
        <div class="d-flex align-items-center justify-content-center row">
            <img class="col-6 p-5" src="{{ $comic->thumb }}" alt="">
            <ul class="list-group p-5 col-6">
                <li class="list-group-item">
                    Descrizione: {{ $comic->description }}
                </li>
                <li class="list-group-item">
                    Prezzo: {{ $comic->price }}
                </li>
                <li class="list-group-item">
                    Serie: {{ $comic->series }}
                </li>
                <li class="list-group-item">
                    Tipo: {{ $comic->type }}
                </li>
                <li class="list-group-item">
                    Data di vendita: {{ $comic->sale_date }}
                </li>
            </ul>
        </div>
    </div>
@endsection
