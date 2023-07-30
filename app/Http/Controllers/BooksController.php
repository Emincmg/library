<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidationRequest;
use App\Models\Author;
use App\Models\Book;
use App\Models\Categories;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use GuzzleHttp;
use Illuminate\Support\Facades\Log;
use App\Services\GoogleBooksService;

class BooksController extends Controller
{
    public function index()
    {
        $books = Book::orderBy('book_title', 'ASC')->get();
        $bookCount = count($books);
        $categories = Categories::all('book_category');
        $categoryCount = count($categories);
        $authors = Author::all();
        $authorCount = count($authors);
        $bookStockSum = $books->sum('book_stock');
        return view('frontend.index', compact(['books', 'bookCount', 'categories', 'categoryCount', 'authors', 'authorCount', 'bookStockSum']));
    }
    public function addBook(Request $request)
    {

        $validationRequest = new ValidationRequest;
        $validatedData = $validationRequest->bookValidate($request);

        //Store the form data
        session_start();
        $_SESSION['book_title'] = $_POST['book_title'];
        $_SESSION['book_author'] = $_POST['book_author'];
        $_SESSION['book_explanation'] = $_POST['book_explanation'];
        $_SESSION['book_img'] = $_POST['book_img'];
        $_SESSION['book_date'] = $_POST['book_date'];
        $_SESSION['book_stock'] = $_POST['book_stock'];
        $_SESSION['book_category'] = $_POST['book_category'];

        if ($validatedData) {

            //Author database check if exists
            $authorDbCheck = Author::where('author_name', $request->book_author)->first();
            if (!$authorDbCheck) {
                return abort('404', 'Author you provided doesnt exists in the application database. Go to author creation page?');
            }

            //Book database check if exists
            $bookDbCheck = Book::where('book_title', $request->book_title)->first();
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
        $categories = Categories::all('book_category');
        return view('frontend.addbook', compact('categories'));
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
        return view('frontend.addauthor');
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
        $categories = Categories::all('book_category');
        return view('frontend.editbook', compact('categories', 'book'));
    }

    public function deleteBook($id)
    {
        Book::destroy($id);
        return Response::json(['Book deleted!'], 204);
    }

    public function bookDetail($id)
    {
        $book = Book::Where('id', $id)->first();
        return view('frontend.book-detail', compact('book'));
    }

    protected function getBooksFromGoogleAPI(Request $request)
    {
        $token = $request->getContent();
        Log::debug($token);

//        $client = new GuzzleHttp\Client();
//        $response = $client->request('GET', 'https://api.collectapi.com/book/newBook', [
//            'headers' => [
//                'authorization' => "apikey 1nlKQ7aMXGYtOfvz7YrfAc:4y8LyQBDJ6dxKiCY5xWToy",
//                'content-Type' => 'application/json'
//            ]]);
//        $books = json_decode($response->getBody()->getContents(),1)['result'];
//        foreach ($books as $book){
//            $collection[]= array(
//                ""
//            )
//        }
    }
}

