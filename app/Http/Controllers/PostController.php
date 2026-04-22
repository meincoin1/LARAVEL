<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
	public function show()
	{
		$post = DB::table('posts')
		->whereId(1)
		->get();
	
	dump($post);

	}
}