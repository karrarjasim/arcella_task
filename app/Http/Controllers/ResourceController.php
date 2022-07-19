<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    public function index() {

        $resources = Resource::with('resourceable')->get();
        return response()->json($resources);
    }

    public function destroy(Resource $resource)
    {
        $resource->delete();
        return response()->json([
            'message'=>'Category Deleted Successfully!!'
        ]);
    }
}
