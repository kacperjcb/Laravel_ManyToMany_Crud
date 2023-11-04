@extends('layouts.app')

@section('content')
    <h1>Lista Książek</h1>
    <a href="{{ route('books.create') }}" class="btn btn-primary">Dodaj Książkę</a>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Tytuł</th>
            <th>Autorzy</th>
            <th>Akcje</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($books as $book)
            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->title }}</td>
                <td>
                    @foreach ($book->authors as $author)
                        {{ $author->name }}
                        @if (!$loop->last)
                            ,
                        @endif
                    @endforeach
                </td>
                <td>
                    <a href="{{ route('books.show', $book->id) }}" class="btn btn-info">Szczegóły</a>
                    <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning">Edytuj</a>
                    <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Usuń</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
