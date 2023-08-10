<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


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

    public function editProfile(Request $request): \Illuminate\Http\JsonResponse
    {

        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ];


        $validator = Validator::make($request->all(), $rules);


        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ], 400);
        }

        $user = Auth::user();

        $user->name = $request->input('name');
        $user->email = $request->input('email');


        if ($request->has('info')) {
            $user->info = $request->input('info');
        }

        $filename = '';

        if ($request->hasFile('image')) {
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('app/images', $filename);
            $user->img = $filename;
        }

        $user->save();

        return response()->json([
            'message' => 'Profil başarıyla güncellendi.',
            'image' => $filename ? 'images/' . $filename : null,
        ], 200);
    }


}
