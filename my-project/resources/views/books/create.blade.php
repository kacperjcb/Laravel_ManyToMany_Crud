@extends('layouts.app')

@section('content')
    <h1>Dodaj Książkę</h1>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Tytuł książki:</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="authors">Autorzy:</label>
            <select name="authors[]" class="form-control" multiple required>
                @foreach ($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Dodaj</button>
    </form>
@endsection
