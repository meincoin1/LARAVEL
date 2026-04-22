<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
	public function show()
	{
		$posts = DB::table('posts')
			->whereNotNull('updated_at')
			->get();

		dump($posts);

	}
}