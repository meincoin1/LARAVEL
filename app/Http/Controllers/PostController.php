<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
	public function show()
	{
		$post = DB::table('posts')
		->whereIdAndSlug(1, 'my-page')
		->first();
	
	dump($post);


	}
}