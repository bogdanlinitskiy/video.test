<?php

namespace App\Http\Controllers;

use App\Actor;
use Illuminate\Http\Request;

class ActorsController extends Controller
{
    public function index()
    {
        $actors = Actor::all();
        return view('actors.index',compact('actors'));
    }

    public function show(Actor $actor)
    {
        $age = date_diff(date_create($actor['birth_date']), date_create('today'))->y;
        return view('actors.show',compact('actor','age'));
    }
}
