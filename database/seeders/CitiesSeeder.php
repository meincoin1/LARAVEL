<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesSeeder extends Seeder
{
    public function run()
    {
        DB::table('countries')->insert([
            ['id' => 1, 'name' => 'Россия', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'США', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Германия', 'created_at' => now(), 'updated_at' => now()],
        ]);
        
        DB::table('cities')->insert([
            ['id' => 1, 'name' => 'Москва', 'country_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Санкт-Петербург', 'country_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Нью-Йорк', 'country_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'name' => 'Лос-Анджелес', 'country_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'name' => 'Берлин', 'country_id' => 3, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}