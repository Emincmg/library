<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $casts =
        [
            'book_category'=>'array'
        ];

    protected $fillable =
        [
            'book_title',
            'book_author',
            'book_explanation',
            'book_category',
            'book_img',
            'book_date',
            'book_views',
            'book_stock'
        ];
    public function categories()
    {
        return $this->hasMany('App\Categories');
    }
    public function author()
    {
        return $this->belongsTo('App\Author');
    }
}
