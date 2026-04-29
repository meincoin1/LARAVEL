<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show()
    {
        $user = DB::table('users')->whereEmail('john@mail.com')->first();
        dump($user);
    }
}


