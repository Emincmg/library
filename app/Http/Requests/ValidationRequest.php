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
            'title' => 'required|max:255|regex:/^[\pL\s\- A-Za-z0-9]+$/u',
            "author' => 'required|max:255|regex:/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/u",
            'explanation' => 'required|max:1000',
            'category' => 'required',
            'date' => 'required',
            'img' => 'required|url',
            'stock'=>'required'
        ]);
    }

    public function authorValidate($request): array
    {
        return $request->validate([
            "author_name"=>"required|max:255|regex:/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/u",
            'author_explanation'=>'required|max:255',
            'author_born'=>'required',
            'author_img'=>'required|url'
        ]);
    }
}
