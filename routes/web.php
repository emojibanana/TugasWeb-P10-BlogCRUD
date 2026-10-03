<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

//mengarah ke posts
Route::redirect('/', '/posts');

Route::resource('posts', PostController::class);
