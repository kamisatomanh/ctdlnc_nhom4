<?php

use App\Livewire\Home\HomeIndex;
use Illuminate\Support\Facades\Route;
use App\Livewire\Post\PostSingle;
use App\Livewire\Login;
use App\Livewire\Register;
use App\Livewire\PostCreate;
use App\Livewire\TopPostByRank;


Route::get('/', HomeIndex::class)->name('home');
Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');
Route::get('post/{id}', PostSingle::class)->name('post');
Route::get('/posts/create', PostCreate::class)->middleware('auth')->name('posts.create');
Route::get('/posts/top', TopPostByRank::class);