<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
//    public function index()
//    {
//        return view('categories.index');
//    }

    public function show(Category $category)
    {
        return view('categories.show',compact('category'));
    }
}
