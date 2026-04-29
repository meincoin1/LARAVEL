<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show()
    {
        $id = DB::table('users')->insertGetId([
            'name' => 'Юзер с ID',
            'email' => 'id@mail.com',
            'age' => 28,
            'salary' => 1200,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        echo "ID нового юзера: " . $id;
    }
}




