<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        $authors = Author::all();
        return view('books.create', compact('authors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'authors' => 'required|array',
        ]);

        $book = Book::create(['title' => $request->input('title')]);
        $book->authors()->attach($request->input('authors'));

        return redirect()->route('books.index')->with('success', 'Książka została dodana.');
    }

    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    public function edit(Book $book)
    {
        $authors = Author::all();
        return view('books.edit', compact('book', 'authors'));
    }

    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required',
            'authors' => 'required|array',
        ]);

        $book->update(['title' => $request->input('title')]);
        $book->authors()->sync($request->input('authors'));

        return redirect()->route('books.index')->with('success', 'Książka została zaktualizowana.');
    }

    public function destroy(Book $book)
    {
        $book->authors()->detach();
        $book->delete();

        return redirect()->route('books.index')->with('success', 'Książka została usunięta.');
    }
}
