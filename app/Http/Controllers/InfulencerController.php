<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Infulencer;

class InfulencerController extends Controller
{

    public function index() {
        $infulencers = Infulencer::all();
        return view('infulencers.index', compact('infulencers'));
    }

    public function store(Request $req) {
        $infulencer = new Infulencer;
        $infulencer->name = $req->name;
        $infulencer->twitter_link = $req->twitter_link;
        $infulencer->youtube_link = $req->youtube_link;
        $infulencer->instagram_link = $req->instagram_link;
        $infulencer->description = $req->description;
        $infulencer->save();

        return redirect()->route('infulencers.index');
    }
}
