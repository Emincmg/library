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

    public $rating;

    public $search ;

    protected $queryString = ['search'];


    public function render()
    {
        $user = Auth::user();

        $books = $user->books()->orderBy($this->sortField,$this->sortDirection)->where('title', 'like', '%' . $this->search . '%')->get();

        $booksCount = $user->books()->count();
        $authorsCount = $user->books->sum(function ($book) {
            return $book->authors !== null ? count($book->authors) : 0;
        });
        $categoriesCount = $user->books->sum(function ($book) {
            return $book->category !== null ? count($book->category) : 0;
        });
        $notesCount = $user->books->sum(function ($book) {
            return $book->notes !== null ? 1 : 0;
        });
        return view('livewire.lists',compact('books','booksCount','authorsCount','categoriesCount','notesCount'));
    }

    public function sortBy($field){
        $this->sortField = $field;
    }
    public function sortDirection($direction){
        $this->sortDirection= $direction;
    }

    public function changeRateField($id,$rating){
        $user = Auth::user();
        $book = $user->books()->where('id',$id)->firstOrFail();

        $book->update(['rate' => $rating]);
    }
}
