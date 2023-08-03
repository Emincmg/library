<?php

namespace App\Http\Livewire;

use App\Models\Book;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Symfony\Component\HttpFoundation\Response;
class Lists extends Component
{
    public function render()
    {
        $user = Auth::user();
        $readBooks = $user->books()->where('readBefore',true)->get();
        $unreadBooks = $user->books()->where('readBefore',false)->get();
        $booksCount = $user->books()->count();
        $authorsCount = $user->books->sum(function ($book) {
            return count($book->authors);
        });
        $categoriesCount = $user->books->sum(function ($book) {
            return $book->category !== null ? count($book->category) : 0;
        });
        return view('livewire.lists',compact('readBooks','unreadBooks','booksCount','authorsCount','categoriesCount'));
    }
}
