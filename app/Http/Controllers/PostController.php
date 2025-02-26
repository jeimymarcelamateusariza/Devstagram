<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

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
}
