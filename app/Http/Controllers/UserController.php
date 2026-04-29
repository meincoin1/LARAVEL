<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show()
    {
        $names = DB::table('users')->pluck('name');
        dump($names);
    }
}


