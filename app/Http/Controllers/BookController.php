<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index', ['books' => Book::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $book = new Book;
        $book->title = $request->title;
        $book->author = $request->author;
        $book->published_on = $request->published_on;
        $book->save();
        return redirect(route('books.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('show', ['book' => Book::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('edit', ['book' => Book::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $book = Book::find($id);
        $book->title = $request->title;
        $book->author = $request->author;
        $book->published_on = $request->published_on;
        $book->save();
        return redirect(route('books.show', $book->id));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Book::find($id)->delete();
        return redirect(route('books.index'));
    }
}
