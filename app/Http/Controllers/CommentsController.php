<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    public function store(Video $video)
    {
        $this->validate(request(),[
            'text' =>'required|min:4|max:145'
        ]);
        Comment::create(
            [
                'text' => request('text'),
                'video_id' => $video->id,
                'user_id' => Auth::user()->id
            ]);
        return back();
    }
}
