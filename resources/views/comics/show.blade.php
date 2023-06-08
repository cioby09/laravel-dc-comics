@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Info fumetto: {{ $comic->title }}</h2>
        <img src="{{ $comic->thumb }}" alt="">
        <ul class="list-group">
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
@endsection
