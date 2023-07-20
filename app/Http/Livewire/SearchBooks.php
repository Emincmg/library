<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Book;
use App\Models\Author;
use App\Models\Categories;
use Livewire\WithPagination;

class SearchBooks extends Component
{
    use WithPagination;

    public $search;
    protected $queryString = ['search'];

    public function render()
    {
        $lvsBooks=[];
        if($this->search){
            $lvsBooks = Book::search($this->search);
        }else{
            $lvsBooks = Book::orderBy('book_title', 'ASC');
        }
        $lvBooks=$lvsBooks->paginate(12);
        $lvAuthors = Author::all();
        $lvCategories = Categories::all();

        return view('livewire.search-books',compact('lvBooks','lvCategories','lvAuthors'));
    }

}
