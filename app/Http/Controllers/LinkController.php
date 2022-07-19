<?php

namespace App\Http\Controllers;

use App\Http\Requests\LinkRequest;
use App\Models\Link;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Boolean;

class LinkController extends Controller
{
    public function store(LinkRequest $request) 
    {
         Link::create([
            'title' => $request->title,
            'link' => $request->link,
            'new_tab' => (Boolean) $request->new_tab == "on" ? true: false
        ])->resources()->create();

        return back();
    }
}
