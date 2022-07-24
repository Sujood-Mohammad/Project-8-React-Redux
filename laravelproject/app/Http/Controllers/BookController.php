<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getBooks()
    {
        $books = Book::all();
        return $books;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function addBook(Request $request)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'author_name' => 'required',
            'image' => 'required|max:5048|mimes:jpeg,jpg,png',
        ]);

        $book = new Book;
        $book->title = $request->title;
        $book->description = $request->description;
        $book->author_name = $request->author_name;
        $book->image = $request->image;
        $book->save();

        return response()->json([
            'book' => $book,
            'message' => 'Book added successfully'
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookRequest  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function updateBook(Request $request, $id)
    {

        $book = Book::find($id);

        $book->title = $request->title;
        $book->description = $request->description;
        $book->author_name = $request->author_name;
        $book->image = $request->image;

        $book->save();

        return response()->json([
            'status' => true,
            'message' => 'Book updated successfully.'
            ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Book::destroy($id);

         return response()->json([
            'status' => true,
            'message' => 'Book deleted successfully.'
            ]);
    }
}
