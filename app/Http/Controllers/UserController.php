<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show()
    {
        DB::table('users')->delete();
        echo "Все юзеры удалены";
    }
}




