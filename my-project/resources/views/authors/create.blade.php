@extends('layouts.app')

@section('content')
    <h1>Dodaj Autora</h1>
    <form action="{{ route('authors.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nazwa autora:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Dodaj</button>
    </form>
@endsection
