<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $primaryKey = 'book_category';

    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable=
        [
            'book_category'
        ];

    public function books()
    {
        return $this ->hasMany('App\Book');
    }
}
