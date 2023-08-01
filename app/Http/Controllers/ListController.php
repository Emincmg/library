<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListController extends Controller
{
    public function index(){
        $user = Auth::user();
        $readBooks = $user->books()->where('readBefore',true)->get();
        $unreadBooks = $user->books()->where('readBefore',false)->get();
        return view('list',compact('readBooks','unreadBooks'));
    }
}
