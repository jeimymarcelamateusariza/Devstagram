<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index () 
    {
    return view('auth.register');
    }
    public function store(Request $request)
    {
        //dd($request->get('username'));

        //modificar el request
        $request->request->add(['username' => Str::slug( $request->username)]);

        //Validación
        $validated = $request->validate([
            'name' => 'required|max:30',
            'username' => 'required|unique:users|min:3|max:30',
            'email' => 'required|unique:users|email|max:60',
            'password' => 'required|min:4|confirmed'

        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make( $request->password),      
        ]);

        //Autenticar un usuario
        auth()->attempt($request->only('email', 'password'));

        //Redireccionar
        return redirect()->route('posts.index');

    }
}
