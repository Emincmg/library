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

    public function insertAlreadyReadBook(Request $request, $volumeID){

        $client = new GuzzleHttp\Client();
        $response = $client->request('GET', 'https://www.googleapis.com/books/v1/volumes/'.$volumeID);

        $book = json_decode($response->getBody()->getContents(), true);
        $user = Auth::user();

        $title = $book['volumeInfo']['title'] ?? null;
        $authors = $book['volumeInfo']['authors'] ?? null;
        $explanation = $book['volumeInfo']['description'] ?? null;
        $category = $book['volumeInfo']['categories'] ?? null;
        $img = $book['volumeInfo']['imageLinks']['thumbnail'] ?? null;
        $date = $book['volumeInfo']['publishedDate'] ?? null;
        $pages = $book['volumeInfo']['pageCount'] ?? null;
        $link = $book['volumeInfo']['canonicalVolumeLink'] ?? null;

        $bookData = new Book([
            'title' => $title,
            'authors' => $authors,
            'explanation' => $explanation,
            'category' => $category,
            'img' => $img,
            'date' => $date,
            'pages' => $pages,
            'link' => $link,
            'readBefore'=>true,
        ]);

        $user->books()->save($bookData);
    }

}
