<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show()
    {
        $users = DB::table('users')
            ->leftJoin('cities', 'users.city_id', '=', 'cities.id')
            ->select('users.*', 'cities.name as city_name')
            ->get();
        dump($users);
    }
}




проверкаscaca