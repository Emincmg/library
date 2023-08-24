<?php


namespace App\Http\Controllers;


use App\Models\Contact;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;


class ContactController extends Controller

{

    /**
     * Write code on Method
     *
     * @return View ()
     */

    public function index() : \Illuminate\View\View

    {

        return view('contactForm');

    }


    /**
     * Write code on Method
     *
     * @return response()
     */

    public function store(Request $request)

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

//        return redirect()->route('index')
//            ->with(['success' => 'Your contact mail sent.']);

    }

}
