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
        'rakuten_url',
        'amazon_url',
        'description',
        'image_url',
        'published_date',
        'isbn'
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
