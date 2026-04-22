<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB; 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Новости', 'slug' => 'news', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Статьи', 'slug' => 'articles', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Обзоры', 'slug' => 'reviews', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
