<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show()
    {
        DB::table('users')->where('age', 30)->increment('salary', 100);
        echo "Зарплата увеличена на 100";
    }
}




