<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
	public function show()
	{
			$id = DB::table('posts')->insertGetId([
		'title' => 'page',
		'slug'  => 'slug',
	]);
	echo $id;
	}
}