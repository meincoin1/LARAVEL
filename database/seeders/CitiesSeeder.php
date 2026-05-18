<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesSeeder extends Seeder
{
    public function run()
    {
        DB::table('cities')->insert([
            ['id' => 1, 'name' => 'Москва', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Санкт-Петербург', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Новосибирск', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'name' => 'Екатеринбург', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'name' => 'Казань', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}