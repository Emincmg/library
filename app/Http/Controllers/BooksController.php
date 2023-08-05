<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidationRequest;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use GuzzleHttp;


class BooksController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function addBook(Request $request)
    {

        $validationRequest = new ValidationRequest;
        $validatedData = $validationRequest->bookValidate($request);

        //Store the form data
        session_start();
        $_SESSION['title'] = $_POST['title'];
        $_SESSION['author'] = $_POST['author'];
        $_SESSION['explanation'] = $_POST['explanation'];
        $_SESSION['img'] = $_POST['img'];
        $_SESSION['date'] = $_POST['date'];
        $_SESSION['stock'] = $_POST['stock'];
        $_SESSION['category'] = $_POST['category'];

        if ($validatedData) {

            //Book database check if exists
            $bookDbCheck = Book::where('title', $request->title)->first();
            if ($bookDbCheck) {
                return abort('409', 'Book already exits.');
            }
            Book::create($validatedData);
            session_destroy();
        }
        return response()->json(['message' => 'Book created successfully!'], 201);
    }

    public function addBookPage()
    {
        return view('addbook');
    }

    public function changeReadField($id,$value){

        $user = Auth::user();
        $book = $user->books()->where('id',$id)->firstOrFail();

        $book->update(['readBefore' => $value]);
    }
    public function deleteBook($id)
    {
        Book::destroy($id);
        return Response::json(['Book deleted!'], 204);
    }

    public function bookDetail($id)
    {
        $book = Book::Where('id', $id)->first();
        return view('book-detail', compact('book'));
    }

    protected function insertWillReadBook(Request $request, $volumeID){
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
            'readBefore'=>false,
            'volumeID'=>$volumeID
        ]);

        $user->books()->save($bookData);

    }
    protected function insertAlreadyReadBook(Request $request, $volumeID){

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
            'volumeID'=>$volumeID
        ]);

        $user->books()->save($bookData);
    }
}

