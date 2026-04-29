<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show()
    {
        $users = DB::table('users')->where('age', '>', 30)->orderBy('updated_at', 'asc')->get();
        dump($users);
    }
}


