<?php

namespace App\Http\Controllers;

use App\Http\Requests\SnippetRequest;
use App\Models\Snippet;
use Illuminate\Http\Request;

class SnippetController extends Controller
{
    public function store(SnippetRequest $request) 
    {
         Snippet::create([
            'title' => $request->title,
            'descreption' => $request->descreption,
            'snippet' => $request->snippet
        ])->resources()->create();

        return back();
    }
}
