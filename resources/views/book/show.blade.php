@extends('layouts.app')

@section('title', $book[0]->book_name)

@section('content')
    <div class="col s12 m12 l12 xl12">
        <h2 class="header center-align">{{$book[0]->book_name}}</h2>
        <div class="card horizontal">
            <div class="card-image" >
                <img class="activador" src="../images/{{$book[0]->book_image}}">
            </div>
            <div class="card-stacked">
                <div class="card-content">
                    <p class="center-align"><b>Sinopsis:</b></p>
                    <p>{{$book[0]->book_description}}</p>
                    <p class="center-align"><b>Categoría:</b> {{$book[0]->name}}</p>
                </div>
                <div class="card-action">
                    <a href="/book">Regresar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
