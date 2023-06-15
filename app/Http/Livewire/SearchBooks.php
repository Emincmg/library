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
    protected $paginationTheme = 'bootstrap';
    protected $queryString = ['search'];

    public $search;
    public function render()
    {
        $lvBooks=[];
        if($this->search){
            $lvBooks = Book::search($this->search)->paginate(10);
        }
        $lvpBooks = Book::orderBy('book_title', 'ASC')->paginate(10);
        $lvAuthors = Author::all();
        $lvCategories = Categories::all();
        return view('livewire.search-books',compact('lvBooks','lvCategories','lvAuthors','lvpBooks'));
    }
}
