@extends('layouts.app')

@section('content')
    <h1>Szczegóły Autora</h1>
    <p>ID: {{ $author->id }}</p>
    <p>Nazwa: {{ $author->name }}</p>

    <h2>Książki napisane przez autora:</h2>
    <ul>
        @foreach ($books as $book)
            <li><a href="{{ route('books.show', $book->id) }}">{{ $book->title }}</a></li>
        @endforeach
    </ul>

    <a href="{{ route('authors.index') }}" class="btn btn-primary">Powrót</a>
@endsection
