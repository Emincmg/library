<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class ListController extends Controller
{
    public function index() : View
    {
        $user = Auth::user();

        $readBooks = $user->books()->where('readBefore', true)->get();
        $unreadBooks = $user->books()->where('readBefore', false)->get();

        return view('list', compact('readBooks', 'unreadBooks'));
    }

}
