<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use GuzzleHttp;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;


class BooksController extends Controller
{

    /**
     * Method user() returns a User object while method guest() returns boolean, therefore it is either an object or "false".
     *
     * @var Authenticatable
     */
    private Authenticatable $user;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::user() ?? Auth::guest();
            return $next($request);
        });

    }

    public function index(): View
    {
        return view('index');
    }

    public function addBookPage(): View
    {
        return view('addbook');
    }

    /**
     * Changes a books already read field.
     *
     * @param $id
     * @param $value
     * @return JsonResponse
     */
    public function changeReadField($id, $value): JsonResponse
    {
        $book = $this->user->books()->where('id', $id)->firstOrFail();

        $book->update(['readBefore' => $value]);

        return response()->json(['message' => 'Read field changed'], 204);
    }

    /**
     * Changes a books note field.
     *
     * @param $id
     * @param $value
     * @return JsonResponse
     */
    public function changeNoteField($id, $value): JsonResponse
    {
        $book = $this->user->books()->where('id', $id)->firstOrFail();

        $book->update(['notes' => $value]);

        return response()->json(['message' => 'Note field changed',], 204);
    }

    /**
     * Changes a books rate field.
     *
     * @param $id
     * @param $value
     * @return JsonResponse
     */
    public function changeRateField($id, $value): JsonResponse
    {
        $book = $this->user->books()->where('id', $id)->firstOrFail();

        $book->update(['rate' => $value]);

        return response()->json(['message' => 'Rate field changed',], 204);
    }

    /**
     * Deletes book
     *
     * @param $id
     * @return JsonResponse
     */
    public function deleteBook($id): JsonResponse
    {
        Book::destroy($id);
        return response()->json(['message' => 'Book deleted'], 204);
    }

    /**
     * Checks if book exists in the user list.
     *
     * @param $volumeID
     * @return JsonResponse
     */
    public function checkBookExists($volumeID): JsonResponse
    {
        $checkBookTitle = $this->user->books()->where('volumeID', $volumeID)->first();
        if ($checkBookTitle) {
            abort(409, 'Book already exists.');
        }
        return response()->json(['message' => 'Book checked', 204]);
    }


    /**
     * Inserts book to user list.
     *
     * @param Request $request
     * @return JsonResponse
     * @throws GuzzleException
     */
    public function store(Request $request): JsonResponse
    {
        $bookData = $this->getBookData($request['bookID'], $request['readBefore'], $request['note'],$request['rate']);

        $this->user->books()->save($bookData);

        return response()->json(['message' => 'Book added',], 201);
    }


    /**
     * Gets book data from Google Books API.
     *
     * @param $volumeID
     * @param $readBefore
     * @param $note
     * @param $rate
     * @return Book
     * @throws GuzzleException
     */
    protected function getBookData($volumeID, $readBefore, $note, $rate): Book
    {
        $client = new GuzzleHttp\Client();
        $response = $client->request('GET', 'https://www.googleapis.com/books/v1/volumes/' . $volumeID . '?key=AIzaSyDHg3e16JU-uJGpNEcx6S2aCkQV2u4oRcQ');

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
            'readBefore' => ($readBefore == "true") ? 1 : 0,
            'volumeID' => $volumeID,
            'notes' => $note ?? null,
            'rate' => $rate ?? 0,
        ]);
    }

}

