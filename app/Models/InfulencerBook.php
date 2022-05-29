<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfulencerBook extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_id',
        'infulencer_id'
    ];

    /**
     * Get the books that owns the InfulencerBook
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function books(): BelongsTo
    {
        return $this->belongsTo(Book::class);
    }
    
    // public static function create($book_id, $infulencer_id) {
    //     return InfulencerBook::create([
    //         'book_id' => $book_id,
    //         'infulencer_id' => $infulencer_id
    //     ]);
    // }

}
