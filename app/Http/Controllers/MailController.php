<?php

namespace App\Http\Controllers;

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
            'select'=> $request['select']
        ];
        if ($request->has('file')) {
            $filename = $request->file('file')->getClientOriginalName();
            $request->file('file')->storePubliclyAs('/contact', $filename);
            $mailData['file'] = $filename;
        }

        Mail::to('application@xenovo.com.tr')->send(new XenovoMail($mailData));

        return response()->json(['message'=>'Mail sent!'],'201');
    }
}
