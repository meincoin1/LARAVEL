<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
	public function show()
	{
		$title = DB::table('posts')->where('id', '1')->value('title');
		echo $title;

		// dd($post);
	}
}