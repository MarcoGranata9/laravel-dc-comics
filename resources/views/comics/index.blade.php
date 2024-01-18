@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="py-3">Tabella dei fumetti</h1>

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
                  <td class="align-bottom"><a class="btn btn-info" href="{{ route('comics.show', ['comic' => $comic->id]) }}">Dettagli</a></td>
                </tr>                    
                @endforeach
            </tbody>
          </table>
    </div>
@endsection