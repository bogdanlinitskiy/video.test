<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;

class VideosController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        return view('videos.index',compact('videos'));
    }

    public function show(Video $video)
    {
        return view('videos.show',compact('video'));
    }

    public function popular()
    {
        $videos = Video::orderBy('views','desc')->paginate(9);
        return view('videos.popular',compact('videos'));
    }

    public function newVideos()
    {
        $videos = Video::latest()->paginate(9);
        return view('videos.newVideos',compact('videos'));
    }
}
