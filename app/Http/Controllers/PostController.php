<?php

namespace App\Http\Controllers;
	
class PostController extends Controller
	{
		public function show()
		{
			return view('post.show', [
				"name"=>"Вика",
				"age"=> 22,
				"salary"=>200000
			]);
		}
	}

?>