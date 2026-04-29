<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show()
    {
        DB::table('users')->where('age', 30)->update(['salary' => 500]);
        echo "Зарплата обновлена для юзеров с возрастом 30";
    }
}




