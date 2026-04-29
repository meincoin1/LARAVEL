<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show()
    {
        DB::table('users')->insert([
            ['name' => 'Юзер 1', 'email' => 'user1@mail.com', 'age' => 20, 'salary' => 500],
            ['name' => 'Юзер 2', 'email' => 'user2@mail.com', 'age' => 25, 'salary' => 600],
            ['name' => 'Юзер 3', 'email' => 'user3@mail.com', 'age' => 30, 'salary' => 700],
        ]);
        echo "Добавлено 3 юзера";
    }
}




