<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
	public function run()
	{
		DB::table('domains')->insert([
			'name' => Str::random(5) . '.' . Str::random(10) . '.com',
		]);
	}
}
