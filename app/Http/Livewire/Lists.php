<?php

namespace App\Http\Livewire;

use App\Models\Book;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;
use Symfony\Component\HttpFoundation\Response;

class Lists extends Component
{
    use WithPagination;
    public $sortField ='title';
    public $sortDirection ='asc';

    public $search ;

    protected $queryString = ['search'];

    public function render()
    {
        $user = Auth::user();
        $books=[];
        if (!empty($this->search)){
            $books = $user->books()->orderBy($this->sortField,$this->sortDirection)->where('title', 'like', '%' . $this->search . '%')->get();
        }else{
            $books = $user->books()->orderBy($this->sortField,$this->sortDirection)->get();
        }

        $booksCount = $user->books()->count();
        $authorsCount = $user->books->sum(function ($book) {
            return $book->authors !== null ? count($book->authors) : 0;
        });
        $categoriesCount = $user->books->sum(function ($book) {
            return $book->category !== null ? count($book->category) : 0;
        });
//       if ($this->search) {
//           $books->where('title', 'like', '%' . $this->search . '%');
//        }
        return view('livewire.lists',compact('books','booksCount','authorsCount','categoriesCount'));
    }

    public function sortBy($field){
        $this->sortField = $field;
    }
    public function sortDirection($direction){
        $this->sortDirection= $direction;
    }

}
