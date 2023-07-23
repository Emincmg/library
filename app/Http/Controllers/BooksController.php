<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidationRequest;
use App\Models\Author;
use App\Models\Book;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Response;

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
        $bookEntries =0;
        return view('frontend.index',compact(['books','bookCount','categories','categoryCount','authors','authorCount','bookEntries']));
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

        if ($validatedData) {

            //Author database check if exists
            $authorDbCheck = Author::where('author_name', $request->book_author)->first();
            if (!$authorDbCheck) {
                return abort('404','Author you provided doesnt exists in the application database. Go to author creation page?');
            }

            //Book database check if exists
            $bookDbCheck= Book::where('book_title',$request->book_title)->first();
            if($bookDbCheck){
                return abort('409','Book already exits.');
            }
            Book::create($validatedData);
            session_destroy();
        }
        return response()->json(['message'=>'Book created successfully!'],201);
    }

    public function addBookPage(){
        $categories = Categories::all('book_category');
        return view('frontend.addbook',compact('categories'));
    }

    public function addAuthor(Request $request){

        $validationRequest = new ValidationRequest;
        $validatedData = $validationRequest->authorValidate($request);

        $_SESSION['author_name'] = $request->author_name;

        if($validatedData){
            //Author database check if exists
            $createdAuthor = Author::where('author_name', $request->author_name)->first();
            if ($createdAuthor) {
                return response()->json(['message'=>'Author already exists.'],409);
            }
            Author::create($validatedData);
        }

        return response()->json(['message'=>'Author created successfully!'],201);
    }

    public function addAuthorPage(){
        return view('frontend.addauthor');
    }

    public function editBook(Request $request)
    {
        $validationRequest = new ValidationRequest;
        $validatedData = $validationRequest->bookValidate($request);
        if ($validatedData) {
            Book::Where('id', $request->id)->update($validatedData);
        }
        Book::find($request->id);
        return response()->json(['message'=>'Book edited successfully!'],204);
    }

    public function deleteBook($id)
    {
        Book::destroy($id);
        return Response::json(['Book deleted!'],204);
    }
}

