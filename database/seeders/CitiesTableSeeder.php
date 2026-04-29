<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('cities')->insert([
            [
                'name' => 'Москва',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Санкт-Петербург',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Новосибирск',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Екатеринбург',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Казань',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Нижний Новгород',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Челябинск',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Омск',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Самара',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ростов-на-Дону',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}