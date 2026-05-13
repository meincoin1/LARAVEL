<?php

use App\Http\Controllers\PostController;

// Список статей
Route::get('/post/all', [PostController::class, 'getAll']);

// Задача 26.1 - создание новой статьи
Route::match(['get', 'post'], '/post/new', [PostController::class, 'newPost']);

// Задача 26.2 - изменение статьи с id=1
Route::get('/post/change-first', [PostController::class, 'changeFirstPost']);

// Задача 26.3 - редактирование статьи 
Route::match(['get', 'post'], '/post/edit/{id}', [PostController::class, 'editPost']);