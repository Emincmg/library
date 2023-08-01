<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Book;
use App\Models\Author;
use App\Models\Categories;
use Livewire\WithPagination;
use GuzzleHttp;

class SearchBooks extends Component
{
    use WithPagination;

    public $search;
    protected $queryString = ['search'];

    public function render()
    {
        $bookData = [];

        $client = new GuzzleHttp\Client();
        if ($this->search){
            $response = $client->request('GET', 'https://www.googleapis.com/books/v1/volumes?q=' . $this->search);
            $books = json_decode($response->getBody()->getContents(), 1);
            $bookData = $books['items'];
        }


        return view('livewire.search-books', compact('bookData'));
    }

}
