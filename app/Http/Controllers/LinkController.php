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

        $link =  Link::updateOrCreate(
            [
                'title' => $request->title,
            ],
            [
            'title' => $request->title,
            'link' => $request->link,
            'new_tab' => (Boolean) $request->new_tab == "on" ? true: false
            ]);

        $link->resources()->updateOrCreate(['resourceable_id' => $link->id]);

        return back();
    }
}
