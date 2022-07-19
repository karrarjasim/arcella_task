<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SnippetRequest extends FormRequest
{
  
    public function rules()
    {
        return [
            'title' => 'required',
            'descreption' => 'required',
            'snippet' => 'required',
        ];
    }
}
