<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Задача 28.5 - получить пользователя с городом
public function getUserWithCity($id)
{
    $user = User::with('city')->find($id);
    
    if (!$user) {
        return response()->json(['error' => 'Пользователь не найден'], 404);
    }
    
    return response()->json([
        'id' => $user->id,
        'login' => $user->login,
        'city' => $user->city ? $user->city->name : null
    ]);
}

// Задача 28.6 - получить всех пользователей с городами
public function getAllUsersWithCities()
{
    $users = User::with('city')->get();
    return view('users_with_cities', ['users' => $users]);
}
}