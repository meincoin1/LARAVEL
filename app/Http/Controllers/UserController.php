<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show()
    {
         // Способ 1: toSql()
        $query = DB::table('posts')->where('id', '!=', 3)->toSql();
        dump($query);
        
        // Способ 2: dd()
        // DB::table('posts')->where('id', '!=', 3)->dd();
        
        // Способ 3: getQueryLog()
        // DB::enableQueryLog();
        // DB::table('posts')->where('id', '!=', 3)->get();
        // dump(DB::getQueryLog());
    }
}


