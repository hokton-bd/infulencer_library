<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Infulencer;
use App\Models\InfulencerBook;

class BookController extends Controller
{
    public function getBook($id) {
        return Book::find($id);
    }
    
    public function index() {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function show($id) {
        $book = $this->getBook($id);
        return view('books.show', compact('book'));
    }

    public function store(Request $req) {
        $book = Book::create([
            'title' => $req->title,
            'description' => $req->description,
            'isbn' => $req->isbn,
            'amazon_url' => $req->amazon_url,
            'rakuten_url' => $req->rakuten_url,
            'image_url' => $req->image_url,
            'author' => $req->author,
        ]);

        return response()->json(['result' => 'true']);
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

        return response()->json([$results]);
    }


}