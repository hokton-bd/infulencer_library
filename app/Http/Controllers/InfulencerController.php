<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Infulencer;

class InfulencerController extends Controller
{

    public function getInfulencer($id) {
        $infulencer = Infulencer::find($id);
        return $infulencer;
    }

    public function index() {
        $infulencers = Infulencer::all();
        return view('infulencers.index', compact('infulencers'));
    }

    public function show($id) {
        $infulencer = $this->getInfulencer($id);

        return view('infulencers.show', compact('infulencer'));
    }

    public function store(Request $req) {
        $infulencer = new Infulencer;
        $infulencer->name = $req->name;
        $infulencer->blog_url = $req->blog_url;
        $infulencer->twitter_link = $req->twitter_link;
        $infulencer->youtube_link = $req->youtube_link;
        $infulencer->instagram_link = $req->instagram_link;
        $infulencer->description = $req->description;
        $infulencer->save();

        return redirect()->route('infulencers.index');
    }

    public function edit($id) {
        $infulencer = $this->getInfulencer($id);
        return view('admin.infulencers.edit', compact('infulencer'));
    }

    public function update(Request $req) {
        $infulencer = $this->getInfulencer($req->id);
        $infulencer->update([
            ''
        ]);
    }

    public function connect($id) {
        $infulencer = $this->getInfulencer($id);
        return view('admin.infulencers.connect', compact('infulencer'));
    }

}
