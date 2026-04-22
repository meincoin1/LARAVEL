<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
	public function show()
	{
		$post = DB::table('posts')->where('id', 1)->first();

		dd($post);
	}
}