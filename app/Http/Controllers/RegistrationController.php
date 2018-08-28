<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function store()
    {
        $this->validate(request(),[
           'name' => 'required|unique:users,name',
           'email' => 'required|unique:users,email',
           'password' => 'required|min:6|max:40|confirmed',
        ]);
        User::create([
           'name' => request('name'),
           'email' => request('email'),
           'password' => bcrypt(request('password'))
        ]);
        return redirect('/');
    }
}
