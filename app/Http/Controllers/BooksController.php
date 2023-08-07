<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidationRequest;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use GuzzleHttp;
use function PHPUnit\Framework\isFalse;


class BooksController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function addBookPage()
    {
        return view('addbook');
    }

    protected function insertBook(Request $request, $volumeID, $readBefore,$note ){
        $user = Auth::user();
        $checkBookTitle = $user->books()->where('volumeID',$volumeID)->first();
        if ($checkBookTitle){
            abort(409,'Book already exists.');
        }

        $client = new GuzzleHttp\Client();
        $response = $client->request('GET', 'https://www.googleapis.com/books/v1/volumes/'.$volumeID.'?key=AIzaSyDHg3e16JU-uJGpNEcx6S2aCkQV2u4oRcQ');

        $book = json_decode($response->getBody()->getContents(), true);


        $title = $book['volumeInfo']['title'] ?? null;
        $authors = $book['volumeInfo']['authors'] ?? null;
        $explanation = $book['volumeInfo']['description'] ?? null;
        $category = $book['volumeInfo']['categories'] ?? null;
        $img = $book['volumeInfo']['imageLinks']['thumbnail'] ?? null;
        $date = $book['volumeInfo']['publishedDate'] ?? null;
        $pages = $book['volumeInfo']['pageCount'] ?? null;
        $link = $book['volumeInfo']['previewLink'] ?? null;
        $readBeforeVal = ($readBefore == "true") ? 1 : 0;

        $bookData = new Book([
            'title' => $title,
            'authors' => $authors,
            'explanation' => $explanation,
            'category' => $category,
            'img' => $img,
            'date' => $date,
            'pages' => $pages,
            'link' => $link,
            'readBefore'=>$readBeforeVal,
            'volumeID'=>$volumeID,
            'notes'=> $note ?? null,
        ]);

        $user->books()->save($bookData);

    }

    public function changeReadField($id,$value){

        $user = Auth::user();
        $book = $user->books()->where('id',$id)->firstOrFail();

        $book->update(['readBefore' => $value]);
    }

    public function changeNoteField($id,$value){
        $user = Auth::user();
        $book = $user->books()->where('id',$id)->firstOrFail();

        $book->update(['notes' => $value]);
    }

    public function changeRateField($id,$value){
        $user = Auth::user();
        $book = $user->books()->where('id',$id)->firstOrFail();

        $book->update(['rate' => $value]);
    }

    public function deleteBook($id)
    {
        Book::destroy($id);
        return Response::json(['Book deleted!'], 204);
    }
}

