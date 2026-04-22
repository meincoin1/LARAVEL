<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show()
    {
        $users = DB::table('users')->select('name', 'email as user_email')->get();
        dump($users);
    }
}


