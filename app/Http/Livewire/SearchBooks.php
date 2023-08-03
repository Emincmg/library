<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
            $response = $client->request('GET', 'https://www.googleapis.com/books/v1/volumes?key=AIzaSyDHg3e16JU-uJGpNEcx6S2aCkQV2u4oRcQ&q=' . $this->search);
            $books = json_decode($response->getBody()->getContents(), 1);
            $bookData = $books['items'];
        }


        return view('livewire.search-books', compact('bookData'));
    }

}
