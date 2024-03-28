<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\XenovoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

    /**
     * Write code on Method
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse()
     */
    public function index(Request $request)
    {
        $mailData = [
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'message'=> $request['message'],
            'subject'=> $request['subject'],
        ];
        if ($request->has('file')) {
            $filename = $request->file('file')->getClientOriginalName();
            $request->file('file')->storePubliclyAs('/contact', $filename);
            $mailData['file'] = $filename;
        }

        Mail::to('emin-comoglu@hotmail.com')->send(new ContactMail($mailData));

        return response()->json(['success'=>true,'message'=>'Mail sent!'],'200');
    }
}
