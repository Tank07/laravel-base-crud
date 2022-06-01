@extends('layouts.layout')

@section('title', 'edit')

@section('content')
<div class="container text-center">
    <h1 class="text-primary text-center">Modifica un fumetto</h1>


    <form action="{{ route( 'comics.update', $comic->id ) }}" method="POST">
        @method('PUT')
        @csrf

        @method('PUT')
        @csrf

        <div class="row">
            <div class="col-6 my-1">
                <label for="title" class="form-label">Title</label>
                <input type="text" id="title" class="form-control" name="title" 
                value="{{ old('title', $comic->title) }}"
                placeholder="Qui devi specificare il titolo del fumetto">
            </div>
            <div class="col-6 my-1">
                <label for="description" class="form-label">Description</label>
                <input type="text" id="description" class="form-control"
                    name="description"  
                    value="{{ old('description', $comic->description) }}"
                    placeholder="Qui devi scrivere la descrizione del fumetto">
            </div>
            <div class="col-6 my-1">
                <label for="price" class="form-label">Price</label>
                <input type="text" id="price" class="form-control"
                    name="price" 
                    value="{{ old('price', $comic->price) }}"
                    placeholder=" Qui devi specificare il prezzo del fumetto">
            </div>
            <div class="col-6 my-1">
                <label for="series" class="form-label">Series</label>
                <input type="text" id="series" class="form-control"
                    name="series" 
                    value="{{ old('series', $comic->series) }}"
                    placeholder="Qui devi specificare a quale serie appartiene">
            </div>
            <div class="col-6 my-1">
                <label for="sale_date" class="form-label">Sale date</label>
                <input type="date" id="sale_date" class="form-control"
                    name="sale_date" 
                    value="{{ old('sale_date', $comic->sale_date) }}"
                    placeholder="Inserisci la data in cui è stato publicato">
            </div>
            <div class="col-6 my-1">
                <label for="type" class="form-label">Type</label>
                <input type="text" id="type" class="form-control"
                    name="type" 
                    value="{{ old('type', $comic->type) }}"
                    placeholder="Qui devi specificare il tipo di fumetto">
            </div>
            <div class="col-6 my-1">
                <label for="image" class="form-label">Image</label>
                <input type="text" id="thumb" class="form-control"
                    name="thumb" 
                    value="{{ old('thumb', $comic->thumb) }}"
                    placeholder="Qui devi specificare l'url dell'immagine">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Invia dati</button>

    </form>


</div>
@endsection