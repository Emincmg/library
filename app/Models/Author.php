<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable =
        [
            'author_name',
            'author_books',
            'author_born',
            'author_demise',
        ];

    public function books(){
        return $this->hasMany('App\Book');
    }
}
