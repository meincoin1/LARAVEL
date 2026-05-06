<?php

use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Задача 25.2, 25.8, 25.9
Route::get('/post/all/{order?}/{dir?}', [PostController::class, 'getAll'])
    ->where('order', 'id|title|date')
    ->where('dir', 'asc|desc');

// Задача 25.4
Route::get('/post/{id}', [PostController::class, 'getOne'])
    ->where('id', '[0-9]+');