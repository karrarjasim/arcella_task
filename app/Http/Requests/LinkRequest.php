<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LinkRequest extends FormRequest
{

    public function rules()
    {
        return [
            'title' => 'required',
            'link' => 'required|url'
        ];
    }
}
