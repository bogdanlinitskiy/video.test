<?php

namespace App\Http\Controllers\Admin;


use App\Actor;
use App\Category;
use App\Video;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class VideosController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        return view('admin.index_pages.videos',compact('videos'));
    }

    public function show(Video $video)
    {
        return view('videos.show',compact('video'));
    }

    public function create()
    {
        $categories = Category::all();
        $actors = Actor::all();
        return view('videos.create',compact('categories','actors'));
    }

    public function store()
    {
        $this->validate(request(),[
            'name' => 'required|unique:videos,name',
            'alias' => 'required|unique:videos,alias',
            'description' => 'required',
            'image' => 'required',
            'video' => 'required'
        ]);
        foreach (request()->files->get('image') as $file){
            foreach (request()->files->get('video') as $vid) {
                $vid = $vid->move(public_path() . '/videos/', time() . '_' . $vid->getClientOriginalName());
                $file = $file->move(public_path() . '/images/videos', time() . '_' . $file->getClientOriginalName());
                $video = new Video;
                $video->name = request('name');
                $video->alias = request('alias');
                $video->image = basename($file->getRealPath());
                $video->video = basename($vid->getRealPath());
                $video->description = request('description');
                $video->date = Carbon::now();
                $video->save();
                $video->attachingID($video);
            }
        }
        return redirect('/admin/videos');
    }

    public function edit(Video $video)
    {
        $categories = Category::all();
        return view('videos.edit',compact('video','categories'));
    }

    public function update(Video $video)
    {
        $this->validate(request(),[
            'name' => 'required|unique:videos,name,' . $video->id,
            'alias' => 'required|unique:videos,alias,' . $video->id,
            'description' => 'required'
        ]);

        if(request()->file('image')!=NULL){
            $image = Video::find($video->id);
            $dir = 'images/videos/';
            if ($image->image != '' && File::exists($dir . $image->image))
                File::delete($dir . $image->image);
            foreach (request()->files->get('image') as $file) {
                $file = $file->move(public_path() . '/images/videos/', time() . '_' . $file->getClientOriginalName());
                $video->update([
                    'name' => request('name'),
                    'alias' => request('alias'),
                    'image' => basename($file->getRealPath())
                ]);
                $video->attachingID($video);
            }
        }elseif(request()->file('image')==NULL){
            $video->update([
                'name' => request('name'),
                'alias' => request('alias')
            ]);
            $video->attachingID($video);
        }

        return redirect('/admin/videos');
    }

    public function delete(Video $video)
    {
        return view('videos.delete',compact('video'));
    }

    public function destroy(Video $video)
    {
        $video->delete();
        return redirect('/admin/videos');
    }

    public function popular()
    {
        $videos = Video::orderBy('views','desc')->paginate(9);
        return view('popular',compact('videos'));
    }

    public function newVideos()
    {
        $videos = Video::latest()->paginate(9);
        return view('newVideos',compact('videos'));
    }
}
