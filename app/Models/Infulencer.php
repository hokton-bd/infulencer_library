<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infulencer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'twitter_link',
        'instagram_link',
        'youtube_link',
        'description',
    ];

    public function infulencer_books() {
        return $this->hasMany(InfulencerBook::class);
    }

    /**
     * Get all of the books for the Infulencer
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function books(): HasManyThrough
    {
        return $this->hasManyThrough(Book::class, InfulencerBook::class);
    }


}
