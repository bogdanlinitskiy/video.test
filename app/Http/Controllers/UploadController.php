<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function getForm()
    {
        return view('upload-form');
    }

    public function upload(Request $request)
    {
        foreach ($request->file() as $file) {
            foreach ($file as $f) {
                $f->move(public_path('videos'), time().'_'.$f->getClientOriginalName());
            }
        }
        return "Успех";
    }
}
