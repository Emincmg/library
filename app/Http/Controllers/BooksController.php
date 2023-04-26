<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidationRequest;
use Illuminate\Http\Request;
use App\Models\Book;

class BooksController extends Controller
{
    public function deleteBook(Request $request, $id)
    {
        Book::destroy($id);
        return response()->json(['success' => 'Record deleted successfully!']);
    }

    public function getDetailBook($id)
    {
        $detailBook = Book::find($id);
        return $detailBook;

    }

    public function addBook(Request $request)
    {
        $validationRequest = new ValidationRequest;
        $validatedData = $validationRequest->bookValidate($request);

        if ($validatedData) {
            Book::create($validatedData);
        }
        return redirect(route('home'));
    }

    public function index()
    {
        $books = Book::all();
        $count = count($books);
        $featuredBook = Book::inRandomOrder()->first();
        $latestBook = Book::latest()->first();
        $leastBook = Book::orderBy('book_stock', 'ASC')->first();
        return view('frontend.index')
            ->with('books', $books)
            ->with('featuredBook', $featuredBook)
            ->with('latestBook', $latestBook)
            ->with('leastBook', $leastBook)
            ->with('count', $count);
    }

    public function editBook(Request $request)
    {
        $validationRequest = new ValidationRequest;
        $validatedData = $validationRequest->bookValidate($request);
        if ($validatedData) {
            Book::Where('id',$request->id)->update($validatedData);
        }
    }

}

