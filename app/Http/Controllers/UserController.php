<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show()
    {
        $users = DB::table('users')->orderBy('created_at', 'asc')->get();
        dump($users);
    }
}


