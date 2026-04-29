<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show()
    {
        DB::table('users')->where('id', 5)->delete();
        echo "Юзер с ID=5 удален";
    }
}




