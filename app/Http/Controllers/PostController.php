<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
	public function show()
	{
		$posts = DB::table('posts')
			->whereNotBetween('likes', [1, 100])
			->get();

		dump($posts);

	}
}