<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
class MailController extends Controller
{

    /**
     * Write code on Method
     *
     * @param Request $request
     * @return JsonResponse()
     */
    public function index(Request $request)
    {
        $mailData = [
            'name' => $request['name'],
            'email' => $request['email'],
        ];
        if ($request->has('file')) {
            $filename = $request->file('file')->getClientOriginalName();
            $request->file('file')->storePubliclyAs('/contact', $filename);
            $mailData['file'] = $filename;
        }

        Mail::to('emin-comoglu@hotmail.com')->send(new ContactMail($mailData));

        return \response()->json('Mail Sent!');
    }
}
