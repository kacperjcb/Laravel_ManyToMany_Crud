@extends('layouts.app')

@section('content')
    <h1>Edytuj Autora</h1>
    <form action="{{ route('authors.update', $author->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nazwa autora:</label>
            <input type="text" name="name" class="form-control" value="{{ $author->name }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Zapisz zmiany</button>
    </form>
@endsection
