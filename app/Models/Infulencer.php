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
}
