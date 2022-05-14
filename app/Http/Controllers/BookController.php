<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    
    public function index() {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function store(Request $req) {
        $book = new Book;
        $book->title = $req->title;
        $book->author = $req->author;
        $book->book_link = $req->book_link;
        $book->description = $req->description;
        $book->image_url = $req->image_url;
        $book->published_date = $req->published_date;
        $book->save();

        return redirect()->route('books.index');
    }

}
