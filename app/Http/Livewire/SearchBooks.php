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
        $lvBooks=[];
        if($this->search){
            $lvBooks = Book::search($this->search)->simplePaginate(10);
        }
        $lvpBooks = Book::simplePaginate(10);
        $lvAuthors = Author::all();
        $lvCategories = Categories::all();
        return view('livewire.search-books',compact('lvBooks','lvCategories','lvAuthors','lvpBooks'));
    }
}
