<?php

use App\Http\Controllers\RelationController;

// Задача 28.2
Route::get('/user/{id}/profile', [RelationController::class, 'getUserWithProfile']);
// Задача 28.3
Route::get('/users/profiles', [RelationController::class, 'getAllUsersWithProfiles']);
// Задача 28.5
Route::get('/user/{id}/city', [RelationController::class, 'getUserWithCity']);
// Задача 28.6
Route::get('/users/cities', [RelationController::class, 'getAllUsersWithCities']);
// Задача 28.8
Route::get('/cities/countries', [RelationController::class, 'getAllCitiesWithCountries']);
// Задача 28.9
Route::get('/users/cities-countries', [RelationController::class, 'getAllUsersWithCitiesAndCountries']);
// Задача 28.11
Route::get('/countries/cities', [RelationController::class, 'getAllCountriesWithCities']);
// Задача 28.12
Route::get('/users/countries', [RelationController::class, 'getAllUsersWithCountries']);
// Задача 28.14
Route::get('/products/categories', [RelationController::class, 'getAllProductsWithCategories']);
// Задача 28.15
Route::get('/categories/products', [RelationController::class, 'getAllCategoriesWithProducts']);