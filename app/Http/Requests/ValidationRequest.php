<?php

namespace App\Http\Requests;

use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Http\FormRequest;

class ValidationRequest extends FormRequest
{

    /**
     * @param $request
     * @return array
     */
    public function bookValidate($request): array
    {
        return $request->validate([
            'book_title' => 'required|max:255|regex:/^[\pL\s\-]+$/u',
            'book_author' => 'required|max:255|regex:/^[\pL\s\-]+$/u',
            'book_explanation' => 'required|max:1000',
            'book_category' => 'required',
            'book_date' => 'required',
            'book_img' => 'required|url',
            'book_stock'=>'required'
        ]);
    }
}
