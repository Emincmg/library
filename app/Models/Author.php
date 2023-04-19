<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $casts =
        [
            'author_books' => 'array'
        ];

    protected $fillable =
        [
            'author_name',
            'author_books',
            'author_born',
            'author_demise',
        ];
}
