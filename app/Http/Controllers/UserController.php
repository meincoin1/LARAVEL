<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show()
    {
        DB::table('users')->where('id', 1)->increment('age');
        echo "Возраст увеличен";
    }
}




