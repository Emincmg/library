<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    public function index(){
        $user = Auth::user();
        $lastBooks = $user->books()->orderBy('created_at', 'desc')->take(5)->get();
      $lastNotes = $user->books()->orderBy('updated_at','desc')->take(5)->get();

        return view('profile',compact('lastBooks','lastNotes'));
    }

    public function editProfilePage(){
        return view('editprofile');
    }

    public function editProfile(Request $request){

        $user = Auth::user();

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->info = $request->input('info');

        if($request->hasFile('image')){
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('public/images',$filename);
            Auth()->user()->update(['img'=>$filename]);
        }


        $user->save();

        return response()->json([
            'message' => 'Image uploaded successfully.',
            'image' => 'images/' . $filename
        ], 200);
    }
}
