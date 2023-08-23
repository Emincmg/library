<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;


class ProfileController extends Controller
{

    private mixed $user;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::user() ? Auth::user() : Auth::guest();
            return $next($request);
        });

    }
    public function index() : View
    {
        $lastBooks = $this->user->books()->orderBy('created_at', 'desc')->take(5)->get();
        $lastNotes = $this->user->books()->orderBy('updated_at', 'desc')->take(5)->get();

        return view('profile', compact('lastBooks', 'lastNotes'));
    }


    public function editProfilePage() : View
    {
        return view('editprofile');
    }


    /**
     * @param array $data
     * @return \Illuminate\Validation\Validator
     */
    protected function validator(array $data) : \Illuminate\Validation\Validator
    {
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'old_password'=> 'required|string|max:255',
            'password' => $data['password']? 'required|min:8|confirmed' : '',
            'password_confirmation' => $data['password'] ? 'required' : '',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ];

        return Validator::make($data, $rules);
    }


    /**
     * @param Request $request
     * @return JsonResponse
     */
    protected function editProfile(Request $request) : JsonResponse
    {

        if (!Hash::check($request->get('old_password'), $this->user->password))
        {
            return response()->json([
                'message' => 'User password is invalid',
            ], 400);
        }

        if (strcmp($request->get('old_password'), $request->input('password')) == 0)
        {
            return response()->json(['message'=>'New password cant be same with your old password']);
        }

        $validated = $this->Validator($request->all());

        if ($validated->fails()) {
            return response()->json([
                'message' => $validated->errors(),
            ], 400);
        }

        if ($validated->passes()) {
            $this->user->name = $request->input('name');
            $this->user->email = $request->input('email');
            $this->user->password = Hash::make($request->input('password'));


            if ($request->has('info')) {
                $this->user->info = $request->input('info');
            }


            if ($request->hasFile('image')) {
                $filename = $request->input('image')->getClientOriginalName();
                $request->input('image')->storeAs('app/images', $filename);
                $this->user->img = $filename;
            }

            $this->user->save();
        }
        return response()->json([
            'message' => 'Profile edited.',
        ], 400);
    }


}
