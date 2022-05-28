<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Infulencer;
use App\Models\InfulencerBook;

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
        $book->rakuten_url = $req->rakuten_url;
        $book->amazon_url = $req->amazon_url;
        $book->description = $req->description;
        $book->image_url = $req->image_url;
        $book->isbn = $req->isbn;
        $book->published_date = $req->published_date;
        $book->save();

        return redirect()->route('books.index');
    }

    public function search(Request $req) {

        $books = [];
        $results = [];
        $books = Book::where('title', 'like', "%$req->title%")->get();
        foreach($books as $item) {
            if(!Book::isRegisteredToInfulencerBookTable($item->id, $req->infulencer_id)) {
                $results[] = $item;
            }
        }

        // return response()->json([$books]);
        return response()->json([$results]);
    }

    public function test() {
        // $tmp = new Book;
        if(!Book::isRegisteredToInfulencerBookTable(7, 4)) {
            echo 'not';
        }else {
            echo 'registered';
        }
    }


}