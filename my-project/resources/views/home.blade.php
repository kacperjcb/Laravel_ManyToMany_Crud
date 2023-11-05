@extends('layouts.app')

@section('content')
    <h1>Strona Główna</h1>

    <ul>
        <li><a href="{{ route('authors.index') }}">Lista Autorów</a></li>
        <li><a href="{{ route('books.index') }}">Lista Książek</a></li>
    </ul>
@endsection
