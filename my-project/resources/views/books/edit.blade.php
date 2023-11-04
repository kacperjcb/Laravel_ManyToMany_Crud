@extends('layouts.app')

@section('content')
    <h1>Edytuj Książkę</h1>
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Tytuł książki:</label>
            <input type="text" name="title" class="form-control" value="{{ $book->title }}" required>
        </div>
        <div class="form-group">
            <label for="authors">Autorzy:</label>
            <select name="authors[]" class="form-control" multiple required>
                @foreach ($authors as $author)
                    <option value="{{ $author->id }}" {{ in_array($author->id, $book->authors->pluck('id')->toArray()) ? 'selected' : '' }}>
                        {{ $author->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Zapisz zmiany</button>
    </form>
@endsection
