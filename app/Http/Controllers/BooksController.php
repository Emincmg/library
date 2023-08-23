<?php

namespace App\Http\Controllers;

use App\Models\Book;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;
use GuzzleHttp;


class BooksController extends Controller
{

    private mixed $user;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::user() ? Auth::user() : Auth::guest();
            return $next($request);
        });

    }
    public function index() : View
    {
        return view('index');
    }

    public function addBookPage() : View
    {
        return view('addbook');
    }

    public function changeReadField($id,$value){

        $book = $this->user->books()->where('id',$id)->firstOrFail();

        $book->update(['readBefore' => $value]);
    }

    public function changeNoteField($id,$value){
        $book = $this->user->books()->where('id',$id)->firstOrFail();

        $book->update(['notes' => $value]);
    }

    public function changeRateField($id,$value){
        $book = $this->user->books()->where('id',$id)->firstOrFail();

        $book->update(['rate' => $value]);
    }

    public function deleteBook($id)
    {
        Book::destroy($id);
        return Response::json(['Book deleted!'], 204);
    }

    public function checkBookExists($volumeID){
        $checkBookTitle = $this->user->books()->where('volumeID',$volumeID)->first();
        if ($checkBookTitle){
            abort(409,'Book already exists.');
        }
    }


    /**
     * @throws GuzzleException
     */
    public function insertBook(Request $request, $volumeID, $readBefore, $note, $rate)
    {
        $bookData = $this->getBookData($volumeID,$readBefore,$note,$rate);

        $this->user->books()->save($bookData);
    }



    /**
     * @throws GuzzleException
     */
    protected function getBookData($volumeID, $readBefore, $note, $rate ) : Book
    {
        $client = new GuzzleHttp\Client();
        $response = $client->request('GET', 'https://www.googleapis.com/books/v1/volumes/'.$volumeID.'?key=AIzaSyDHg3e16JU-uJGpNEcx6S2aCkQV2u4oRcQ');

        $book = json_decode($response->getBody()->getContents(), true);

        return new Book([
            'title' => $book['volumeInfo']['title'] ?? null,
            'authors' => $book['volumeInfo']['authors'] ?? null,
            'explanation' => $book['volumeInfo']['description'] ?? null,
            'category' => $book['volumeInfo']['categories'] ?? null,
            'img' => $book['volumeInfo']['imageLinks']['thumbnail'] ?? null,
            'date' => $book['volumeInfo']['publishedDate'] ?? null,
            'pages' => $book['volumeInfo']['pageCount'] ?? null,
            'link' => $book['volumeInfo']['previewLink'] ?? null,
            'readBefore'=>($readBefore == "true") ? 1 : 0,
            'volumeID'=>$volumeID,
            'notes'=> $note ?? null,
            'rate'=>$rate ?? 0,
        ]);
    }

}

