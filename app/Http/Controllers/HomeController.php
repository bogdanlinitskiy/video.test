<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $popular = Video::orderBy('views','desc')->paginate(9);
        $videos = Video::latest()->paginate(6);
        return view('home',compact('videos','popular'));
    }

}
