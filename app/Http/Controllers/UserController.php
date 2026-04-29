<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show()
    {
        DB::table('users')->where('id', 5)->update([
            'name' => 'Измененный юзер',
            'salary' => 2000,
            'updated_at' => now(),
        ]);
        echo "Юзер с ID=5 обновлен";
    }
}




