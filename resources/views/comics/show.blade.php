@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-around align-items-center">
      <h1 class="py-2">Singolo fumetto</h1>
      @include('modals.delete')
      <div class="d-flex">
        <a class="btn btn-warning me-3" href="{{ route('comics.edit', ['comic' => $comic->id]) }}"><i class="fa-solid fa-pen-to-square"></i></a>
        <form action="{{ route('comics.destroy', ['comic'=> $comic->id]) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger delete-btn" data-title="{{ $comic->title }}"><i class="fa-solid fa-trash"></i></button>
        </form> 
      </div>
    </div>

    @if (Session::has('message'))
      <div class="alert alert-success">
        {{ Session::get('message') }}
      </div>
    @endif

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