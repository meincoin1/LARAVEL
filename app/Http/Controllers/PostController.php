<?php

namespace App\Http\Controllers;
	
class PostController extends Controller
	{
		public function show()
		{
			return view('post.show', [
				'arr'=>[1, 2, 5, 6, 3, 7, 8, 10]
			]);
		}
	}

?>