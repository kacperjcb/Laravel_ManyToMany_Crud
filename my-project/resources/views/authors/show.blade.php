@extends('layouts.app')

@section('content')
    <h1>Szczegóły Autora</h1>
    <p>ID: {{ $author->id }}</p>
    <p>Nazwa: {{ $author->name }}</p>
    <a href="{{ route('authors.index') }}" class="btn btn-primary">Powrót</a>
@endsection
