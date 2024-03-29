<?php

namespace App\Http\Livewire;


use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Lists extends Component
{
    use WithPagination;
    public string $sortField ='title';
    public string $sortDirection ='asc';

    public $search ;

    protected array $queryString = ['search'];


    public function render()
    {
        $user = Auth::user();

        $booksReadBefore = $user->books()
            ->orderBy($this->sortField, $this->sortDirection)
            ->where('title', 'like', '%' . $this->search . '%')
            ->where('readBefore', 1)
            ->paginate(5);

        $booksNotReadBefore = $user->books()
            ->orderBy($this->sortField, $this->sortDirection)
            ->where('title', 'like', '%' . $this->search . '%')
            ->where('readBefore', '!=', 1)
            ->paginate(5);

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
        return view('livewire.lists',compact('booksReadBefore','booksNotReadBefore','booksCount','authorsCount','categoriesCount','notesCount'));
    }

    public function sortBy($field) : void {
        $this->sortField = $field;
    }
    public function sortDirection($direction) : void{
        $this->sortDirection= $direction;
    }

    public function changeRateField($id,$rating) : void{
        $user = Auth::user();
        $book = $user->books()->where('id',$id)->firstOrFail();

        $book->update(['rate' => $rating]);
    }
}
