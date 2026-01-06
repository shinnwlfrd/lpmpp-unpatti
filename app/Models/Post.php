<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'content', 'image', 'author', 'published_at', 'type'
    ];

    // Jika ingin published_at otomatis di-cast menjadi Carbon date
    protected $dates = ['published_at'];
}
