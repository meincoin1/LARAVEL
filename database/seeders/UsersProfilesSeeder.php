<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersProfilesSeeder extends Seeder
{
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        
        DB::table('profiles')->truncate();
        DB::table('users')->truncate();
        DB::table('cities')->truncate();
        DB::table('countries')->truncate();
        
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        DB::table('countries')->insert([
            ['id' => 1, 'name' => 'Россия', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'США', 'created_at' => now(), 'updated_at' => now()],
        ]);
        
        DB::table('cities')->insert([
            ['id' => 1, 'name' => 'Москва', 'country_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Санкт-Петербург', 'country_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Нью-Йорк', 'country_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ]);
        
        DB::table('users')->insert([
            ['id' => 1, 'login' => 'ivan123', 'password' => Hash::make('123'), 'city_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'login' => 'petr456', 'password' => Hash::make('456'), 'city_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'login' => 'john789', 'password' => Hash::make('789'), 'city_id' => 3, 'created_at' => now(), 'updated_at' => now()],
        ]);
        
        DB::table('profiles')->insert([
            ['name' => 'Иван', 'surname' => 'Иванов', 'email' => 'ivan@mail.ru', 'user_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Петр', 'surname' => 'Петров', 'email' => 'petr@mail.ru', 'user_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'John', 'surname' => 'Smith', 'email' => 'john@mail.com', 'user_id' => 3, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}