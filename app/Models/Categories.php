<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Categories extends Model
{
    use Searchable;
    protected $primaryKey = 'category';

    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable=
        [
            'category'
        ];

//    public function books()
//    {
//        return $this ->hasMany('App\Book');
//    }
}
