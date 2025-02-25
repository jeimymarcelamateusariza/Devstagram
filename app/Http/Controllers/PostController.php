<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class PostController extends Controller implements HasMiddleware
{
    public function index()
    {
        return view('dashboard');
    }

    public static function middleware(): array
    {
        return [
            'auth',
        ];
    }
}
