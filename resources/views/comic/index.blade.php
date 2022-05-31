@extends('layouts.layout')

@section('title', 'index')

@section('content')
<h1 class="text-primary text-center">Rick and morty</h1>

<a href=" {{ route( 'comics.create' ) }} " class="btn btn-success">Crea fumetto</a>

<table class="table">
    <thead>
        <tr>
            <th scope="col">thumb</th>
            <th scope="col">title</th>
            <th scope="col">description</th>
            <th scope="col">price</th>
            <th scope="col">series</th>
            <th scope="col">sale_date</th>
            <th scope="col">type</th>
        </tr>
    </thead>
    <tbody>

        @forelse ( $comics as $comic )
        <tr>
            <td>
                <img src="{{ $comic->thumb }}" alt="" width="50px">
            </td>
            <td>
                {{ $comic->title }}
            </td>
            <td>
                {{ $comic->description }}
            </td>
            <td>
                {{ $comic->price }}
            </td>
            <td>
                {{ $comic->series }}
            </td>
            <td>
                {{ $comic->sale_date }}
            </td>
            <td>
                {{ $comic->type }}
            </td>
            <td>
                <a href=" {{ route( 'comics.show', $comic->id ) }} " class="btn btn-primary">view</a>
            </td>
        </tr>
        @empty
        <h2>Il database è vuoto</h2>
        @endforelse
    </tbody>
</table>




@endsection