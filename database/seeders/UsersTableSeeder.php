<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'age' => 25,
                'salary' => 50000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'age' => 30,
                'salary' => 60000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bob Johnson',
                'email' => 'bob@example.com',
                'age' => 22,
                'salary' => 45000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Alice Brown',
                'email' => 'alice@example.com',
                'age' => 28,
                'salary' => 55000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Charlie Wilson',
                'email' => 'charlie@example.com',
                'age' => 35,
                'salary' => 70000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}