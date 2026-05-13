<?php

use App\Http\Controllers\PostController;

Route::get('/post/all', [PostController::class, 'getAll']);
Route::match(['get', 'post'], '/post/new', [PostController::class, 'newPost']);
Route::get('/post/change-first', [PostController::class, 'changeFirstPost']);
Route::match(['get', 'post'], '/post/edit/{id}', [PostController::class, 'editPost']);

// Задача 26.8 - массовые изменения
Route::get('/post/mass-update', [PostController::class, 'massUpdate']);

// Задача 26.9 - другие методы создания
Route::match(['get', 'post'], '/post/first-or-create', [PostController::class, 'firstOrCreatePost']);
Route::match(['get', 'post'], '/post/update-or-create', [PostController::class, 'updateOrCreatePost']);

// Задача 27.1 - удаление статьи
Route::get('/post/del/{id}', [PostController::class, 'delPost']);