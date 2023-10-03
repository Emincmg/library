<?php


namespace App\Http\Controllers;


use App\Models\Contact;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;


class ContactController extends Controller

{
    public function index() : View
    {
        return view('contactForm');
    }


    /**
     * Write code on Method
     *
     * @param Request $request
     * @return JsonResponse
     */

    public function store(Request $request) : JsonResponse
    {

        $request->validate([

            'name' => 'required',

            'email' => 'required|email',

            'phone' => 'required|',

            'subject' => 'required',

            'message' => 'required'

        ]);


        Contact::create($request->all());

        return \response()->json(['message'=>'Contact mail sent']);
    }
}
