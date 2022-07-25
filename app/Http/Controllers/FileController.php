<?php

namespace App\Http\Controllers;

use App\Http\Requests\FileRequest;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function store(FileRequest $request) 
    {
        try {
            $file = $request->file('file');
        $file_path = 'uploads/'.$file->hashName();
        $file->move(public_path('uploads'), $file_path);
        $pdfFile = File::updateOrCreate(
            [
                'title' => $request->title,
            ],[
            'title' => $request->title,
            'link' => $file_path
        ]);
        $pdfFile->resources()->updateOrCreate(['resourceable_id' => $pdfFile->id]);

        return back();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
