<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function create()
    {
        return view('login.create');
    }

    public function store()
    {
        if(!auth()->attempt(request(['email','password']))){
            return back()->withErrors([
                'message' => 'Check the correctness of the information entered'
            ]);
        }
        return redirect('/');
    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/');
    }
}
