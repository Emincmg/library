<?php

namespace App\Http\Controllers;

use App\Mail\XenovoMail;
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
     * @return false|null()
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

        Mail::to('job@xenovo.net')->send(new XenovoMail($mailData));

        return http_redirect('https://xenovo.com.tr/jr-grafik-tasarimci');
    }
}
