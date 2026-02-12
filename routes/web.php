<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::view('contacto', 'contact')->name('contacto');

Route::get('blog', [PostController::class, 'index'])->name('blog');

Route::view('nosotros', 'about')->name('nosotros');

require __DIR__.'/auth.php';
