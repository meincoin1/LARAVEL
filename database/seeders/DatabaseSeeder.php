<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
	public function run()
	{
		DB::table('users')->insert([
				'name' => Str::random(10),
				'email' => Str::random(10).'@gmail.com',
				'password' => Hash::make('12345'),
			]);
	}
}