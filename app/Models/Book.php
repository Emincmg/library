<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Book extends Model
{
    use HasFactory,Searchable;


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

    public function searchableAs()
    {
        return 'books_index';
    }
//    public function categories()
//    {
//        return $this->hasMany('App\Categories');
//    }
//    public function author()
//    {
//        return $this->belongsTo(Author::class,'book_author');
//    }
//    public function searchable(): bool
//    {
//        return $this->published || $this->searchable;
//    }
//
//    public function toSearchableArray(): array
//    {
//        return [
//            'book_title' => $this->book_title,
//            'book_author' => $this->book_content,
//            'category' => [
//                'book_category' => $this->book_category,
//            ],
//            'book_date'=>$this->book_date
//        ];
//    }
}
