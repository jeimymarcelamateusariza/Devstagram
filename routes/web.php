<?php

use App\Http\Controllers\ImagenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('principal');
});
Route::get('/crear-cuenta', [RegisterController::class, 'index'])->name('register');
Route::post('/crear-cuenta', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');


Route::get('/{user:username}', [PostController::class, 'index']) ->name('posts.index');
Route::get('/post/create', [PostController::class, 'create' ])->name('post.create');
Route::post('/posts', [PostController::class, 'store' ])->name('posts.store');

Route::post('/imagenes', [ImagenController::class, 'store'])->name('imagenes.store');