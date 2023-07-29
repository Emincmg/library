<?php

namespace App\Http\Livewire;

use App\Models\Author;
use App\Models\Book;
use Livewire\Component;
use Livewire\WithPagination;

class Authors extends Component
{
    use WithPagination;

    public $search;

    protected $queryString = ['search'];

    public function render()
    {
        $lvsAutors=[];
        if ($this->search){
            $lvsAutors = Author::search($this->search);
        }else{
            $lvsAutors = Author::orderBy('author_name', 'ASC');
        }
        $lvAuthors = $lvsAutors->paginate(14);

        return view('livewire.authors', compact('lvAuthors'));
    }
}
