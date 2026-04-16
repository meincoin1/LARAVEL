<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('posts')->insert([
            [
                'title' => 'First Post',
                'slug' => 'first-post',
                'likes' => 150,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Second Post',
                'slug' => 'second-post',
                'likes' => 230,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Third Post',
                'slug' => 'third-post',
                'likes' => 89,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Laravel Tutorial',
                'slug' => 'laravel-tutorial',
                'likes' => 450,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'PHP Tips',
                'slug' => 'php-tips',
                'likes' => 320,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}