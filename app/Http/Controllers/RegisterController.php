<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index () 
    {
    return view('auth.register');
    }
    public function store(Request $request)
    {
        //dd($request->get('username'));

        $validated = $request->validate([
            'name' => 'required|max:30',
            'username' => 'required|unique:users|min:3|max:30',
            'email' => 'required|unique:users|email|max:60',
            'password' => 'required|min:4|confirmed'

        ]);

    }
}
