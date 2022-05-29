<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InfulencerBook;

class InfulencerBookController extends Controller
{
    public function create($book_id, $infulencer_id) {
       return InfulencerBook::create([
            'book_id' => $book_id,
            'infulencer_id' => $infulencer_id
        ]);
    }

    public function connect($book_id, $infulencer_id) {
        if($this->create($book_id, $infulencer_id)) {
            return response()->json(['status' => 'success']);
        }
    }

}
