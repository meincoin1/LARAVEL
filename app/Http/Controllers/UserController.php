<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show()
    {
        $users = DB::table('users')->whereNotIn('id', [1, 2, 3, 5])->get();
        dump($users);
    }
}


