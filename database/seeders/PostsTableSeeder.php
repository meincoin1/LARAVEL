<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB; 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
   public function run()
{
    DB::table('posts')->insert([
        [
            'title' => 'Первая новость',
            'slug' => 'pervaya-novost',
            'text' => 'Текст первой новости',
            'likes' => 150,
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'title' => 'Интересная статья',
            'slug' => 'interesnaya-statya',
            'text' => 'Текст интересной статьи',
            'likes' => 85,
            'category_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'title' => 'Обзор iPhone',
            'slug' => 'obzor-iphone',
            'text' => 'Текст обзора iPhone',
            'likes' => 230,
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'title' => 'Вторая новость',
            'slug' => 'vtoraya-novost',
            'text' => 'Текст второй новости',
            'likes' => 45,
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'title' => 'Техническая статья',
            'slug' => 'tehnicheskaya-statya',
            'text' => 'Текст технической статьи',
            'likes' => 67,
            'category_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ]);
}
}
