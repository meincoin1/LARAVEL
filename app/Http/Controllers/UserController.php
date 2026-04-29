<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show()
    {
        $user = DB::table('users')->where('id', 3)->first();
        
        echo "<p>Имя: {$user->name}</p>";
        echo "<p>Возраст: {$user->age}</p>";
        echo "<p>Email: {$user->email}</p>";
    }
}


