<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'book_link',
        'description',
        'image_url',
        'published_date'
    ];

    public function infulencer_books() {
        return $this->hasMany(InfulencerBook::class);
    }

    public static function isRegisteredToInfulencerBookTable($book_id, $infulencer_id) {
        return InfulencerBook::where('book_id', '=', $book_id)
                             ->where('infulencer_id', '=', $infulencer_id)
                             ->exists();
    }


}
