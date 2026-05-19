<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\City;
use App\Models\Country;

class UserController extends Controller
{
    public function getUserWithProfile($id)
    {
        $user = User::with('profile')->find($id);
        return response()->json($user);
    }
    
    public function getAllUsersWithProfiles()
    {
        $users = User::with('profile')->get();
        return view('users_with_profiles', ['users' => $users]);
    }
    
    public function getUserWithCity($id)
    {
        $user = User::with('city')->find($id);
        return response()->json($user);
    }
    
    public function getAllUsersWithCities()
    {
        $users = User::with('city')->get();
        return view('users_with_cities', ['users' => $users]);
    }
    
    public function getAllCitiesWithCountries()
    {
        $cities = City::with('country')->get();
        return view('cities_with_countries', ['cities' => $cities]);
    }
    
    public function getAllUsersWithCitiesAndCountries()
    {
        $users = User::with('city.country')->get();
        return view('users_with_cities_countries', ['users' => $users]);
    }
    
    // Задача 28.11
    public function getAllCountriesWithCities()
    {
        $countries = Country::with('cities')->get();
        return view('countries_with_cities', ['countries' => $countries]);
    }
}