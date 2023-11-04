@extends('layouts.app')

@section('content')
    <h1>Szczegóły Książki</h1>
    <p>ID: {{ $book->id }}</p>
    <p>Tytuł: {{ $book->title }}</p>
    <p>Autorzy:
        @foreach ($book->authors as $author)
            {{ $author->name }}
            @if (!$loop->last)
                ,
            @endif
        @endforeach
    </p>
    <a href="{{ route('books.index') }}" class="btn btn-primary">Powrót</a>
@endsection
