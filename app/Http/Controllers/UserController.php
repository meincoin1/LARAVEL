<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show()
    {
        DB::table('users')->insert([
            'name' => 'Новый юзер',
            'email' => 'new@mail.com',
            'age' => 25,
            'salary' => 1000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        echo "Юзер добавлен";
    }
}




