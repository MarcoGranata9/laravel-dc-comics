@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="pb-5">Crea un nuovo fumetto</h1>

        {{-- Errori del form --}}
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>            
        @endif

        {{-- Form --}}
        <div class="row justify-content-center">
            <div class="col-6 text-center">

                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Descrizione" id="description" name="description" style="height: 100px">{{ old('description') }}</textarea>
                        <label for="description">Descrizione</label>
                    </div>                      
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Immagine</label>
                        <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb') }}">
                    </div>              
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">Serie</label>
                        <input type="text" class="form-control" id="series" name="series" value="{{ old('series') }}">
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data</label>
                        <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date') }}">
                    </div>
                    <div>
                        <label for="type" class="form-label">Tipo</label>
                        <select class="form-select mb-3" id="type" name="type">
                            <option value="">Seleziona un' opzione</option>
                            <option @selected(old('type') === "comic book") value="comic book">Comic book</option>
                            <option @selected(old('type') === "graphic novel") value="graphic novel">Graphic novel</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary mb-3">Salva</button>
                </form>                
            </div>
        </div>
    </div>
@endsection