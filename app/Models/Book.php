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
            'category'=>'array',
            'authors'=>'array',
            'readBefore'=>'boolean'
        ];

    protected $fillable =
        [
            'title',
            'authors',
            'explanation',
            'category',
            'img',
            'date',
            'views',
            'pages',
            'rate',
            'notes',
            'link',
            'readBefore',
            'volumeID'
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
//        return $this->belongsTo(Author::class,'author');
//    }
//    public function searchable(): bool
//    {
//        return $this->published || $this->searchable;
//    }
//
    public function toSearchableArray(): array
    {
        return [
            'title' => $this->title,
            'authors' => $this->authors,
            'date'=>$this->date
        ];
    }
}
