<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ListController extends Controller
{
    /**
     * @return View
     */
    public function index() : View
    {
        /** @var User $user */
        $user = Auth::user();

        $readBooks = $user->books()->where('readBefore', true)->get();
        $unreadBooks = $user->books()->where('readBefore', false)->get();

        return view('list', compact('readBooks', 'unreadBooks'));
    }

}
