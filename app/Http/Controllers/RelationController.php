<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\City;
use App\Models\Country;
use App\Models\Product;
use App\Models\Category;

class RelationController extends Controller
{
    // Задача 28.2 - получить пользователя с профилем
    public function getUserWithProfile($id)
    {
        $user = User::with('profile')->find($id);
        return response()->json($user);
    }
    
    // Задача 28.3 - получить всех пользователей с профилями
    public function getAllUsersWithProfiles()
    {
        $users = User::with('profile')->get();
        return view('users_with_profiles', ['users' => $users]);
    }
    
    // Задача 28.5 - получить пользователя с городом
    public function getUserWithCity($id)
    {
        $user = User::with('city')->find($id);
        return response()->json($user);
    }
    
    // Задача 28.6 - получить всех пользователей с городами
    public function getAllUsersWithCities()
    {
        $users = User::with('city')->get();
        return view('users_with_cities', ['users' => $users]);
    }
    
    // Задача 28.8 - получить все города со странами
    public function getAllCitiesWithCountries()
    {
        $cities = City::with('country')->get();
        return view('cities_with_countries', ['cities' => $cities]);
    }
    
    // Задача 28.9 - получить пользователей с городами и странами
    public function getAllUsersWithCitiesAndCountries()
    {
        $users = User::with('city.country')->get();
        return view('users_with_cities_countries', ['users' => $users]);
    }
    
    // Задача 28.11 - получить все страны с городами
    public function getAllCountriesWithCities()
    {
        $countries = Country::with('cities')->get();
        return view('countries_with_cities', ['countries' => $countries]);
    }
    
    // Задача 28.12 - получить всех пользователей с их странами
    public function getAllUsersWithCountries()
    {
        $users = User::with('city.country')->get();
        return view('users_with_countries', ['users' => $users]);
    }
    
    // Задача 28.14 - получить продукты с категориями
    public function getAllProductsWithCategories()
    {
        $products = Product::with('categories')->get();
        return view('products_with_categories', ['products' => $products]);
    }
    
    // Задача 28.15 - получить категории с продуктами
    public function getAllCategoriesWithProducts()
    {
        $categories = Category::with('products')->get();
        return view('categories_with_products', ['categories' => $categories]);
    }
}