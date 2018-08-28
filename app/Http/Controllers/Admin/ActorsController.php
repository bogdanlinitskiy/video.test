<?php

namespace App\Http\Controllers\Admin;

use App\Actor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ActorsController extends Controller
{
    public function __construct()
    {
        $this->middleware('Admin');
    }

    public function index()
    {
        $actors = Actor::all();
        return view('admin.actors.index',compact('actors'));
    }

    public function create()
    {
        return view('admin.actors.create');
    }

    public function store(Actor $actor)
    {
        $this->validate(request(),[
            'nickname'=> 'required|unique:actors,nickname',
            'first_name'=> 'required|unique:actors,first_name',
            'last_name'=> 'required|unique:actors,last_name',
            'birth_date'=> 'required',
            'height'=> 'required',
            'image'=> 'required'
        ]);

        $alias = strtolower(request('first_name').request('last_name'));
        str_replace(' ', '_', $alias);
        $time = strtotime(request('birth_date'));
        $date = date('Y-m-d',$time);

        $file = request()->file('image');
        $file = $file->move(public_path() . '/images/actors/', time() . '_' . $file->getClientOriginalName());
        Actor::create([
            'nickname' => request('nickname'),
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'alias' => $alias,
            'birth_date' => $date,
            'height' => request('height'),
            'image' => basename($file->getRealPath())
        ]);
        return redirect('/admin/actors');
    }

    public function show(Actor $actor)
    {
        $age = date_diff(date_create($actor['birth_date']), date_create('today'))->y;
        return view('admin.actors.show',compact('actor','age'));
    }

    public function edit(Actor $actor)
    {
        return view('admin.actors.edit',compact('actor'));
    }

    public function update(Actor $actor)
    {
        $this->validate(request(),[
            'nickname'=> 'required|unique:actors,nickname,' . $actor->id,
            'first_name'=> 'required|unique:actors,first_name,' . $actor->id,
            'last_name'=> 'required|unique:actors,last_name,' . $actor->id,
            'birth_date'=> 'required',
            'height'=> 'required',
        ]);

        $alias = strtolower(request('first_name').request('last_name'));
        str_replace(' ', '_', $alias);
        $time = strtotime(request('birth_date'));
        $date = date('Y-m-d',$time);

        if(request()->file('image')!=NULL){
            $image = Actor::find($actor->id);
            $dir = 'images/categories/';
            if ($image->image != '' && File::exists($dir . $image->image))
                File::delete($dir . $image->image);
            $file = request()->file('image');
            $file = $file->move(public_path() . '/images/actors/', time() . '_' . $file->getClientOriginalName());
            $actor->update([
                'nickname' => request('nickname'),
                'first_name' => request('first_name'),
                'last_name' => request('last_name'),
                'alias' => $alias,
                'birth_date' => $date,
                'height' => request('height'),
                'image' => basename($file->getRealPath())
            ]);
        }elseif(request()->file('image')==NULL){
            $actor->update([
                'nickname' => request('nickname'),
                'first_name' => request('first_name'),
                'last_name' => request('last_name'),
                'alias' => $alias,
                'birth_date' => $date,
                'height' => request('height')
            ]);
        }
        return redirect('/admin/actors');
    }

    public function delete(Actor $actor)
    {
        return view('admin.actors.delete',compact('actor'));
    }

    public function destroy(Actor $actor)
    {
        $actor->delete();
        return redirect('/admin/actors');
    }
}
