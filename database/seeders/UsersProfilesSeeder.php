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
        
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        DB::table('cities')->insert([
            ['id' => 1, 'name' => 'Москва', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Санкт-Петербург', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Новосибирск', 'created_at' => now(), 'updated_at' => now()],
        ]);
        
        DB::table('users')->insert([
            [
                'id' => 1,
                'login' => 'ivan123',
                'password' => Hash::make('password123'),
                'city_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'login' => 'petr456',
                'password' => Hash::make('password456'),
                'city_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'login' => 'maria789',
                'password' => Hash::make('password789'),
                'city_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'login' => 'alexey111',
                'password' => Hash::make('password111'),
                'city_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'login' => 'elena222',
                'password' => Hash::make('password222'),
                'city_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        
        DB::table('profiles')->insert([
            [
                'name' => 'Иван',
                'surname' => 'Иванов',
                'email' => 'ivan@example.com',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Петр',
                'surname' => 'Петров',
                'email' => 'petr@example.com',
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Мария',
                'surname' => 'Сидорова',
                'email' => 'maria@example.com',
                'user_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Алексей',
                'surname' => 'Козлов',
                'email' => 'alexey@example.com',
                'user_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Елена',
                'surname' => 'Новикова',
                'email' => 'elena@example.com',
                'user_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}