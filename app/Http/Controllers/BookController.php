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
        $books = Book::where('user_id', '<>', \Auth::id())->orderBy('created_at', 'desc')->paginate(20);
        return view('books.index', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create', ['book' => new Book]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:100',
            'author' => 'max:100',
            'publisher' => 'max:100',
        ]);
        $request->user()->books()->create($request->all());
        return redirect(route('home'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('books.show', ['book' => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $this->authorize($book);
        return view('books.edit', ['book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $this->authorize($book);
        $this->validate($request, [
            'title' => 'required|max:100',
            'author' => 'max:100',
            'publisher' => 'max:100',
        ]);
        $book->update($request->all());
        return redirect(route('books.show', $book));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $this->authorize($book);
        $book->delete();
        return redirect(route('home'));
    }
}
