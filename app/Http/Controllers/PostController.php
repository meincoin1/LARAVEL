<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
	public function run()
	{
		DB::table('posts')->where('likes', '>', 46)->dd();
	}
}