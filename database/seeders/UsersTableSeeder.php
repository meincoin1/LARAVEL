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
                'name' => 'Иван Петров',
                'email' => 'ivan@mail.com',
                'age' => 25,
                'salary' => 500,
                'city_id' => 1, // Москва
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Мария Иванова',
                'email' => 'maria@mail.com',
                'age' => 28,
                'salary' => 800,
                'city_id' => 2, // Санкт-Петербург
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Алексей Сидоров',
                'email' => 'alexey@mail.com',
                'age' => 22,
                'salary' => 400,
                'city_id' => 1, // Москва
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Елена Смирнова',
                'email' => 'elena@mail.com',
                'age' => 35,
                'salary' => 1200,
                'city_id' => 3, // Новосибирск
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Дмитрий Козлов',
                'email' => 'dmitry@mail.com',
                'age' => 30,
                'salary' => 600,
                'city_id' => 4, // Екатеринбург
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ольга Новикова',
                'email' => 'olga@mail.com',
                'age' => 26,
                'salary' => 550,
                'city_id' => 5, // Казань
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Павел Морозов',
                'email' => 'pavel@mail.com',
                'age' => 40,
                'salary' => 1500,
                'city_id' => 2, // Санкт-Петербург
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Анна Воробьева',
                'email' => 'anna@mail.com',
                'age' => 29,
                'salary' => 700,
                'city_id' => 6, // Нижний Новгород
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'john',
                'email' => 'john@mail.com',
                'age' => 30,
                'salary' => 500,
                'city_id' => 7, // Челябинск
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@mail.com',
                'age' => 27,
                'salary' => 750,
                'city_id' => 8, // Омск
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}