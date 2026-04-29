<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show()
    {
        $users = DB::table('users')->where('salary', 500)->orWhereBetween('age', [20, 30])->get();
        dump($users);
    }
}


