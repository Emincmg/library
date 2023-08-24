<?php


namespace App\Http\Controllers;


use App\Models\Contact;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;


class ContactController extends Controller

{

    /**
     * Write code on Method
     *
     * @return response()
     */

    public function index(): Response

    {

        return view('contactForm');

    }


    /**
     * Write code on Method
     *
     * @return response()
     */

    public function store(Request $request): Response

    {

        $request->validate([

            'name' => 'required',

            'email' => 'required|email',

            'phone' => 'required|',

            'subject' => 'required',

            'message' => 'required'

        ]);


        Contact::create($request->all());


//        return redirect()->route('index')
//            ->with(['success' => 'Your contact mail sent.']);

    }

}
