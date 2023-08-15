<?php

namespace App\Http\Livewire;

use Flasher\Laravel\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use GuzzleHttp;

class SearchBooks extends Component
{


    use WithPagination;
    #[Url(history: true)]
    public string $search = '';

    /**
     * @throws GuzzleException
     */
    public function render()
    {
        $bookData = [];

        $client = new GuzzleHttp\Client();
        if ($this->search){
            $response = $client->request('GET', 'https://www.googleapis.com/books/v1/volumes?key=AIzaSyDHg3e16JU-uJGpNEcx6S2aCkQV2u4oRcQ&q=' . $this->search.'&projection=lite&printType=books&maxResults=20&orderBy=relevance&fields=items(id,volumeInfo)', ['decode_content' => 'gzip','Connection'=>'keep-alive']);
            $books = json_decode($response->getBody()->getContents(),1);
            $bookData = $books['items'];
        }
        return view('livewire.search-books', compact('bookData'));
    }
}
