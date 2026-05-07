<?php

use App\Http\Controllers\PostController;

// Задача 26.1 - создание новой статьи
Route::match(['get', 'post'], '/post/new', [PostController::class, 'newPost']);