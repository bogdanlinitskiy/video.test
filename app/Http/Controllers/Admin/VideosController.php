<?php

namespace App\Http\Controllers\Admin;


use App\Video;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        return view('videos.create');
    }

    public function store()
    {
        $this->validate(request(),[
            'name' => 'required|unique:videos,name',
            'alias' => 'required|unique:videos,alias',
            'description' => 'required'
        ]);

        foreach (request()->files->get('image') as $file){
            foreach (request()->files->get('video') as $vid) {
                $vid = $vid->move(public_path() . '/videos/', time() . '_' . $vid->getClientOriginalName());
                $file = $file->move(public_path() . '/images/', time() . '_' . $file->getClientOriginalName());
                $video = new Video;
                $video->name = request('name');
                $video->alias = request('alias');
                $video->image = basename($file->getRealPath());
                $video->video = basename($vid->getRealPath());
                $video->description = request('description');
                $video->views = 0;
                $video->likes = 0;
                $video->dislikes = 0;
                $video->date = Carbon::now();
                $video->save();
            }
        }
        return redirect('/admin/videos');
    }

    public function edit(Video $video)
    {
        return view('videos.edit',compact('video'));
    }

    public function update(Video $video)
    {
        if(request()->files->get('image') != NULL){
            foreach (request()->files->get('image') as $file){
                foreach (request()->files->get('video') as $vid) {
                    $vid = $vid->move(public_path() . '/videos/', time() . '_' . $vid->getClientOriginalName());
                    $file = $file->move(public_path() . '/images/', time() . '_' . $file->getClientOriginalName());
                    $video->update([
                        'name' => request('name'),
                        'alias' => request('alias'),
                        'description' => request('description'),
                        $video->image = basename($file->getRealPath()),
                        $video->video = basename($vid->getRealPath())
                    ]);
                }
            }
        }elseif (request()->files->get('image') == NULL) {
            $video->update([
            'name' => request('name'),
            'alias' => request('alias'),
            'description' => request('description')
        ]);
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
}
