@extends('layouts.layout')

@section('title', 'index')

@section('content')
<h1 class="text-primary text-center">Comics</h1>

{{-- <a href=" {{ route( 'comics.create' ) }} " class="btn btn-success">Crea fumetto</a> --}}

<table class="table">
    <thead>
        <tr>
            <th scope="col">Thumb</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Series</th>
            <th scope="col">Sale_date</th>
            <th scope="col">Type</th>
        </tr>
    </thead>
    <tbody>

        @forelse ( $comics as $comic )
        <tr>
            <td>
                <img src="{{ $comic->thumb }}" alt="" width="50px">
            </td>
            <td>
               <h5>{{ $comic->title }}</h5> 
            </td>
            <td>
                {{ $comic->description }}
            </td>
            <td>
                {{ $comic->price }}€
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
                {{-- <a href=" {{ route( 'comics.show', $comic->id ) }} " class="btn btn-primary">view</a> --}}
            </td>
        </tr>
        @empty
        <h2>Il database è vuoto</h2>
        @endforelse
    </tbody>
</table>




@endsection