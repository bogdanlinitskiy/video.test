<?php

namespace App\Http\Controllers\Admin;

use App\Actor;
use App\Category;
use App\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index()
    {
        $data['last_added']['videos'] = Video::latest()->limit(3)->get();
        $data['last_added']['categories'] = Category::latest()->limit(3)->get();
        $data['last_added']['actors'] = Actor::latest()->limit(3)->get();
        return view('admin.main',$data);
    }
}
