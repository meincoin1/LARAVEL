<?php

use App\Http\Controllers\UserController;

// Задача 28.2 - маршрут для получения пользователя с профилем
Route::get('/user/{id}/profile', [UserController::class, 'getUserWithProfile']);

// Задача 28.3 - маршрут для всех пользователей с профилями
Route::get('/users/profiles', [UserController::class, 'getAllUsersWithProfiles']);

Route::get('/user/{id}/city', [UserController::class, 'getUserWithCity']);

Route::get('/users/cities', [UserController::class, 'getAllUsersWithCities']);

Route::get('/cities/countries', [UserController::class, 'getAllCitiesWithCountries']);

Route::get('/countries/cities', [UserController::class, 'getAllCountriesWithCities']);