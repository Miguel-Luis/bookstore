@extends('layouts.app')

@section('title', 'Books')

@section('content')
    <div class="row">
        @foreach ($books as $book)
            <div class="card large col s12 m6 l4 xl3">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="images/{{$book->book_image}}">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">{{$book->book_name}}<i class="material-icons right">more_vert</i></span>
                    <p>{{$book->name}}</p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">{{$book->book_name}}<i class="material-icons right">close</i></span>
                    <span>{{$book->book_author}}</span>
                    <p>{{$book->book_description}}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
