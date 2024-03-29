@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="py-3">Tabella dei fumetti</h1>
            <div>
                <a class="btn btn-info" href="{{ route('comics.create') }}">Aggiungi un fumetto <i class="fa-solid fa-plus"></i></a>
            </div>
        </div>

        @if (Session::has('message'))
            <div class="alert alert-success">
              {{ Session::get('message') }}
            </div>
        @endif

        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Titolo</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Immagine</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Serie</th>
                <th scope="col">Data</th>
                <th scope="col">Tipo</th>
                <th scope="col">Azioni</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                <tr>
                  <th scope="row">{{ $comic->id }}</th>
                  <td>{{ $comic->title }}</td>
                  <td class="text-break">{{ $comic->description }}</td>
                  <td class="text-break">{{ $comic->thumb }}</td>
                  <td>{{ $comic->price }}</td>
                  <td>{{ $comic->series }}</td>
                  <td>{{ $comic->sale_date }}</td>
                  <td>{{ $comic->type }}</td>
                  <td class="align-bottom">
                    <a class="btn btn-primary mb-3" href="{{ route('comics.show', ['comic' => $comic->id]) }}"><i class="fa-solid fa-circle-info"></i></a>
                    <a class="btn btn-warning mb-3" href="{{ route('comics.edit', ['comic' => $comic->id]) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                    <form action="{{ route('comics.destroy', ['comic'=> $comic->id]) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger delete-btn" data-title="{{ $comic->title }}"><i class="fa-solid fa-trash"></i></button>
                    </form> 
                  </td>
                </tr>                    
                @endforeach
              </tbody>
            </table>
            @include('modals.delete')    
    </div>
@endsection