@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="py-2">Singolo fumetto</h1>
    <div class="row justify-content-center py-4">
        <div class="col-4 ">
            <div class="card">
                <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4 class="card-title text-center">{{ $comic->title }}</h4>
                  <p class="card-text">{{ $comic->description }}</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Prezzo: {{ $comic->price }}</li>
                  <li class="list-group-item">Serie: {{ $comic->series }}</li>
                  <li class="list-group-item">Data: {{ $comic->sale_date }}</li>
                  <li class="list-group-item">Tipo: {{ $comic->type }}</li>
                </ul>
              </div>
        </div>
    </div>
</div>
@endsection