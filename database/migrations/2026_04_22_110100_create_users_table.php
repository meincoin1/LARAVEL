<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {

        DB::table('users')->insert([
            [
                'name' => 'Иван Петров',
                'email' => 'ivan@mail.com',
                'age' => 25,
                'salary' => 500,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Мария Иванова',
                'email' => 'maria@mail.com',
                'age' => 30,
                'salary' => 800,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Алексей Сидоров',
                'email' => 'alexey@mail.com',
                'age' => 22,
                'salary' => 400,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Елена Смирнова',
                'email' => 'elena@mail.com',
                'age' => 35,
                'salary' => 1200,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Дмитрий Козлов',
                'email' => 'dmitry@mail.com',
                'age' => 28,
                'salary' => 600,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ольга Новикова',
                'email' => 'olga@mail.com',
                'age' => 30,
                'salary' => 500,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Павел Морозов',
                'email' => 'pavel@mail.com',
                'age' => 40,
                'salary' => 1500,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Анна Воробьева',
                'email' => 'anna@mail.com',
                'age' => 26,
                'salary' => 450,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Сергей Лебедев',
                'email' => 'sergey@mail.com',
                'age' => 33,
                'salary' => 900,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Татьяна Соколова',
                'email' => 'tatyana@mail.com',
                'age' => 29,
                'salary' => 550,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'john',
                'email' => 'john@mail.com',
                'age' => 30,
                'salary' => 500,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@mail.com',
                'age' => 27,
                'salary' => 700,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bob Johnson',
                'email' => 'bob@mail.com',
                'age' => 32,
                'salary' => 850,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Alice Brown',
                'email' => 'alice@mail.com',
                'age' => 24,
                'salary' => 380,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tom Wilson',
                'email' => 'tom@mail.com',
                'age' => 38,
                'salary' => 1100,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
};