<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidationRequest;
use App\Models\Author;
use App\Models\Book;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class BooksController extends Controller
{
    public function index()
    {
        $books = Book::orderBy('book_title', 'ASC')->get();
        $bookCount = count($books);
        $featuredBook = Book::inRandomOrder()->first();
        $latestBook = Book::latest()->first();
        $leastBook = Book::orderBy('book_stock', 'ASC')->first();
        $categories = Categories::all('book_category');
        $categoryCount = count($categories);
        $authors = Author::all();
        $authorCount = count($authors);
        return view('frontend.index')
            ->with('books', $books)
            ->with('featuredBook', $featuredBook)
            ->with('latestBook', $latestBook)
            ->with('leastBook', $leastBook)
            ->with('categories', $categories)
            ->with('categoryCount', $categoryCount)
            ->with('authors', $authors)
            ->with('authorCount', $authorCount)
            ->with('bookCount', $bookCount);
    }


    public function addBook(Request $request)
    {
        $validationRequest = new ValidationRequest;
        $validatedData = $validationRequest->bookValidate($request);
        $createdAuthor = Author::where('author_name', $request->book_author)->first();

        if(!$createdAuthor){
            Author::create(['author_name' => $request->book_author,'author_books'=>$request->book_title]);
        }
        if ($validatedData) {
            $createdBook = Book::create($validatedData);
        }

        return response()->json(['created' => $createdBook]);
    }


    public function editBook(Request $request)
    {

        $validationRequest = new ValidationRequest;
        $validatedData = $validationRequest->bookValidate($request);
        if ($validatedData) {
            Book::Where('id', $request->id)->update($validatedData);
        }
        $editedBook = Book::find($request->id);
        return response()->json(['edited' => $editedBook]);
    }

    public function deleteBook(Request $request, $id)
    {
        Book::destroy($id);
        return response()->json(['success' => 'Record deleted successfully!']);
    }

//    public function __invoke(Request $request): JsonResponse
//    {
//        return new JsonResponse(
//            data: Book::search(
//                query: trim($request->get('search')) ?? '',
//            )->get(),
//            status: Response::HTTP_OK,
//        );
//    }
}

