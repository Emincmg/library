<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidationRequest;
use App\Models\Author;
use App\Models\Book;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use GuzzleHttp;
use Illuminate\Support\Facades\Log;

class BooksController extends Controller
{
    public function index()
    {
        $books = Book::orderBy('title', 'ASC')->get();
        $bookCount = count($books);
        $authors = Author::all();
        $authorCount = count($authors);
        $bookStockSum = $books->sum('stock');
        return view('index', compact(['books', 'bookCount', 'authors', 'authorCount', 'bookStockSum']));
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

            //Author database check if exists
            $authorDbCheck = Author::where('author_name', $request->author)->first();
            if (!$authorDbCheck) {
                return abort('404', 'Author you provided doesnt exists in the application database. Go to author creation page?');
            }

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
        $categories = Categories::all('category');
        return view('addbook', compact('categories'));
    }

    public function addAuthor(Request $request)
    {

        $validationRequest = new ValidationRequest;
        $validatedData = $validationRequest->authorValidate($request);

        $_SESSION['author_name'] = $request->author_name;

        if ($validatedData) {
            //Author database check if exists
            $createdAuthor = Author::where('author_name', $request->author_name)->first();
            if ($createdAuthor) {
                return response()->json(['message' => 'Author already exists.'], 409);
            }
            Author::create($validatedData);
        }

        return response()->json(['message' => 'Author created successfully!'], 201);
    }

    public function addAuthorPage()
    {
        return view('addauthor');
    }

    public function editBook(Request $request)
    {
        $validationRequest = new ValidationRequest;
        $validatedData = $validationRequest->bookValidate($request);
        if ($validatedData) {
            Book::Where('id', $request->id)->update($validatedData);
        }
        return response()->json(['message' => 'Book edited successfully!'], 204);
    }

    public function editBookPage($id)
    {
        $book = Book::Where('id', $id)->first();
        $categories = Categories::all('category');
        return view('editbook', compact('categories', 'book'));
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

    protected function insertBook(Request $request, $volumeID){

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
        ]);

        $user->books()->save($bookData);

        return \response('created', 200);
    }

    protected function getBooksFromGoogleAPI(Request $request)
  {
        $token = $request->getContent();
        Log::debug($token);

       $client = new GuzzleHttp\Client();
        $response = $client->request('GET', 'https://www.googleapis.com/books/v1/volumes/vaJrnQEACAAJ'
       );

        $books = json_decode($response->getBody()->getContents(), 1);
        dd($books);
   }
}

