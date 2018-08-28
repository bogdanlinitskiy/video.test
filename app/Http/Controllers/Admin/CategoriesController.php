<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('Admin');
    }

    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index',compact('categories'));
    }

    public function show(Category $category)
    {
        return view('admin.categories.show',compact('category'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store()
    {
        $this->validate(request(),[
            'name'=> 'required|unique:categories,name',
            'alias'=> 'required|unique:categories,alias',
            'image'=> 'required'
        ]);

        $file = request()->file('image');
        $file = $file->move(public_path() . '/images/categories/', time() . '_' . $file->getClientOriginalName());
        Category::create([
            'name' => request('name'),
            'alias' => request('alias'),
            'image' => basename($file->getRealPath())
        ]);
        return redirect('/admin/categories');
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit',compact('category'));
    }

    public function update(Category $category)
    {
        $this->validate(request(),[
            'name'=> 'required|unique:categories,name,' . $category->id,
            'alias'=> 'required|unique:categories,alias,' . $category->id
        ]);
        if(request()->file('image')!=NULL){
            $image = Category::find($category->id);
                $dir = 'images/categories/';
                if ($image->image != '' && File::exists($dir . $image->image))
                    File::delete($dir . $image->image);
                $file = request()->file('image');
                $file = $file->move(public_path() . '/images/categories/', time() . '_' . $file->getClientOriginalName());
                $category->update([
                    'name' => request('name'),
                    'alias' => request('alias'),
                    'image' => basename($file->getRealPath())
                ]);
        }elseif(request()->file('image')==NULL){
            $category->update([
                'name' => request('name'),
                'alias' => request('alias')
            ]);
        }

        return redirect('/admin/categories');
    }

    public function delete(Category $category)
    {
        return view('admin.categories.delete',compact('category'));
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect('/admin/categories');
    }


}
