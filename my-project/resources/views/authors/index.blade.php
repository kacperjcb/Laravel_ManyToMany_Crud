@extends('layouts.app')

@section('content')
    <h1>Lista Autorów</h1>
    <a href="{{ route('authors.create') }}" class="btn btn-primary">Dodaj Autora</a>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nazwa</th>
            <th>Książki</th>
            <th>Akcje</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($authors as $author)
            <tr>
                <td>{{ $author->id }}</td>
                <td>{{ $author->name }}</td>
                <td>
                    @foreach ($author->books as $book)
                        <a href="{{ route('books.show', $book->id) }}">{{ $book->title }}</a>
                        @if (!$loop->last)
                            ,
                        @endif
                    @endforeach
                </td>
                <td>
                    <a href="{{ route('authors.show', $author->id) }}" class="btn btn-info">Szczegóły</a>
                    <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-warning">Edytuj</a>
                    <form action="{{ route('authors.destroy', $author->id) }}" method="POST" style="display: inline;">
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
