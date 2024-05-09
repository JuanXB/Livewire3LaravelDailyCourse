<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('posts/create', 'posts.create')->middleware(['auth', 'verified']);
Route::view('posts/{post}/edit', 'posts.edit')->middleware(['auth', 'verified']);

require __DIR__ . '/auth.php';
