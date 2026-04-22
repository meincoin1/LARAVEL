<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show()
    {
         $start = microtime(true);
        DB::table('posts')->where('id', '!=', 3)->get();
        $time = microtime(true) - $start;
        echo "Время выполнения: {$time} секунд";
    }
}


