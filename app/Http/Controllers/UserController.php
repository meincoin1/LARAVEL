<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show()
    {
        $users = DB::table('users')->orderBy('updated_at', 'desc')->get();
        dump($users);
    }
}


