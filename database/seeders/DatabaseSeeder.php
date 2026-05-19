<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        
        DB::table('category_product')->truncate();
        DB::table('profiles')->truncate();
        DB::table('users')->truncate();
        DB::table('cities')->truncate();
        DB::table('countries')->truncate();
        DB::table('products')->truncate();
        DB::table('categories')->truncate();
        
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        // Страны
        DB::table('countries')->insert([
            ['id' => 1, 'name' => 'Россия', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'США', 'created_at' => now(), 'updated_at' => now()],
        ]);
        
        // Города
        DB::table('cities')->insert([
            ['id' => 1, 'name' => 'Москва', 'country_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Санкт-Петербург', 'country_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Нью-Йорк', 'country_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ]);
        
        // Пользователи
        DB::table('users')->insert([
            ['id' => 1, 'login' => 'ivan123', 'password' => Hash::make('123'), 'city_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'login' => 'petr456', 'password' => Hash::make('456'), 'city_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'login' => 'john789', 'password' => Hash::make('789'), 'city_id' => 3, 'created_at' => now(), 'updated_at' => now()],
        ]);
        
        // Профили
        DB::table('profiles')->insert([
            ['name' => 'Иван', 'surname' => 'Иванов', 'email' => 'ivan@mail.ru', 'user_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Петр', 'surname' => 'Петров', 'email' => 'petr@mail.ru', 'user_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'John', 'surname' => 'Smith', 'email' => 'john@mail.com', 'user_id' => 3, 'created_at' => now(), 'updated_at' => now()],
        ]);
        
        // Категории
        DB::table('categories')->insert([
            ['id' => 1, 'name' => 'Электроника', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Одежда', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Книги', 'created_at' => now(), 'updated_at' => now()],
        ]);
        
        // Товары
        DB::table('products')->insert([
            ['id' => 1, 'name' => 'iPhone 15', 'price' => 999.99, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Samsung Galaxy', 'price' => 899.99, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Футболка', 'price' => 29.99, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'name' => 'Laravel Book', 'price' => 49.99, 'created_at' => now(), 'updated_at' => now()],
        ]);
        
        // Связь товаров с категориями
        DB::table('category_product')->insert([
            ['category_id' => 1, 'product_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 1, 'product_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 2, 'product_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 3, 'product_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 1, 'product_id' => 4, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}