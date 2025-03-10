<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PostController::class,'index'])->name('posts.index')->middleware('auth');
Route::get('/register', [RegisterController::class,'create'])->name('register.create');
Route::post('/register', [RegisterController::class,'store'])->name('register.create');

Route::get('/login',[SessionController::class,'create'])->name('login');
Route::post('/login',[SessionController::class,'store'])->name('login.store');

Route::get('/logout',[SessionController::class,'destroy'])->name('logout.destroy');

Route::get('/create/{user_id}', [PostController::class,'create'])->name('posts.create');
Route::get('/profile/{id}', [PostController::class,'misposts'])->name('posts.misposts');

Route::post('/store/{user_id}', [PostController::class,'store'])->name('posts.store');
Route::delete('/destroy/{id}', [PostController::class,'destroy'])->name('posts.destroy');




