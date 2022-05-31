@extends('layouts.layout')

@section('title', 'create')

@section('content')
<div class="container text-center">
    <h1 class="text-primary text-center">Creare nuovo fumetto</h1>


    <form action="{{ route( 'comics.store' ) }}" method="POST">

        @csrf

        <div class="row">
            <div class="col-6 my-1">
                <label for="title" class="form-label">Title</label>
                <input type="text" id="title" class="form-control" name="title" 
                placeholder="Qui devi specificare il titolo del fumetto" required>
            </div>
            <div class="col-6 my-1">
                <label for="description" class="form-label">Description</label>
                <input type="text" id="description" class="form-control"
                    name="description"  
                    placeholder="Qui devi scrivere la descrizione del fumetto" required>
            </div>
            <div class="col-6 my-1">
                <label for="price" class="form-label">Price</label>
                <input type="text" id="price" class="form-control"
                    name="price" 
                    placeholder=" Qui devi specificare il prezzo del fumetto" required>
            </div>
            <div class="col-6 my-1">
                <label for="series" class="form-label">Series</label>
                <input type="text" id="series" class="form-control"
                    name="series" 
                    placeholder="Qui devi specificare a quale serie appartiene" required>
            </div>
            <div class="col-6 my-1">
                <label for="sale_date" class="form-label">Sale date</label>
                <input type="date" id="sale_date" class="form-control"
                    name="sale_date" 
                    placeholder="Inserisci la data in cui è stato publicato" required>
            </div>
            <div class="col-6 my-1">
                <label for="type" class="form-label">Type</label>
                <input type="text" id="type" class="form-control"
                    name="type" 
                    placeholder="Qui devi specificare il tipo di fumetto" required>
            </div>
            <div class="col-6 my-1">
                <label for="image" class="form-label">Image</label>
                <input type="text" id="thumb" class="form-control"
                    name="thumb" 
                    placeholder="Qui devi specificare l'url dell'immagine" required>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Invia dati</button>

    </form>


</div>
@endsection