<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show()
    {
        $users = DB::table('users')->whereBetween('age', [30, 40])->get();
        dump($users);
    }
}


