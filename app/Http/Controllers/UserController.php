<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Задача 28.2 - получить одного пользователя вместе с профилем
    public function getUserWithProfile($id)
    {
        // Жадная загрузка - получаем пользователя и его профиль одним запросом
        $user = User::with('profile')->find($id);
        
        if (!$user) {
            return response()->json(['error' => 'Пользователь не найден'], 404);
        }
        
        // Выводим результат
        return response()->json([
            'id' => $user->id,
            'login' => $user->login,
            'profile' => $user->profile ? [
                'name' => $user->profile->name,
                'surname' => $user->profile->surname,
                'email' => $user->profile->email
            ] : null
        ]);
    }
    
    // Задача 28.3 - получить всех пользователей с профилями
    public function getAllUsersWithProfiles()
    {
        // Получаем всех пользователей с их профилями
        $users = User::with('profile')->get();
        
        // Передаем в представление
        return view('users_with_profiles', ['users' => $users]);
    }
}