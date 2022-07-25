<?php

namespace App\Http\Controllers;

use App\Http\Requests\SnippetRequest;
use App\Models\Snippet;
use Illuminate\Http\Request;

class SnippetController extends Controller
{
    public function store(SnippetRequest $request) 
    {
        $snippet =  Snippet::updateOrCreate(
            [
                'title' => $request->title,
            ],
            [
            'title' => $request->title,
            'descreption' => $request->descreption,
            'snippet' => $request->snippet
        ]);
        $snippet->resources()->updateOrCreate(['resourceable_id' => $snippet->id]);

        return back();
    }
}
