<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class PostController extends Controller implements HasMiddleware
{
    public function index(User $user)
    {
        
        return view('dashboard', [
            'user' => $user
         ]);
    }

    public static function middleware(): array
    {
        return [
            'auth',
        ];
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request)  {
        $validated = $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'imagen' => 'required' 
        ]);
        //Post::create([
            //'titulo' => $request->titulo,
            //'descripcion' => $request->descripcion,
            //'imagen' => $request->imagen,
            //'user_id' => auth()->user()->id
        //]);

        $request->user()->posts()->create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'imagen' => $request->imagen,
            'user_id' => auth()->user()->id
        ]);

        
        return redirect()->route('posts.index', auth()->user()->username);
    }
}
