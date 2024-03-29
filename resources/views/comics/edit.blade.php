@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="pb-5">Modifica: {{ $comic->title }}</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-6 text-center">


                <form action="{{ route('comics.update', ['comic'=> $comic->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{old('title') ?? $comic->title }}">
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Descrizione" id="description" name="description" style="height: 100px">{{old('description') ?? $comic->description }}</textarea>
                        <label for="description">Descrizione</label>
                    </div>                      
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Immagine</label>
                        <input type="text" class="form-control" id="thumb" name="thumb" value="{{old('thumb') ??  $comic->thumb }}">
                    </div>              
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="text" class="form-control" id="price" name="price" value="{{old('price') ?? $comic->price }}">
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">Serie</label>
                        <input type="text" class="form-control" id="series" name="series" value="{{old('series') ?? $comic->series }}">
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data</label>
                        <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{old('sale_date') ?? $comic->sale_date }}">
                    </div>
                    <div>
                        <label for="type" class="form-label">Tipo</label>
                        <select class="form-select mb-3" id="type" name="type">
                            <option value="">Seleziona un' opzione</option>
                            <option @selected(old('type', $comic->type) === 'comic book') value="comic book">Comic book</option>
                            <option @selected(old('type', $comic->type) === 'graphic novel') value="graphic novel">Graphic novel</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary mb-3">Modifica</button>
                </form>                
            </div>
        </div>
    </div>    
@endsection