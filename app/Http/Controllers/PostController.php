<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
	public function show()
	{
		$posts = DB::table('posts')
		->latest()
		->get();
	
	dump($posts);


	}
}