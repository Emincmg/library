<?php

namespace App\Http\Livewire;

use App\Models\Author;
use Livewire\Component;
use Livewire\WithPagination;

class Authors extends Component
{
    use WithPagination;

    public function render()
    {
        $lvAuthors = Author::orderBy('author_name','ASC')->paginate(6);

        return view('livewire.authors',compact('lvAuthors'));
    }
}
