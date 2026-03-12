<?php

namespace App\Http\Controllers;
	
class PostController extends Controller
	{
		public function show()
		{
			return view('post.show', [
				'arr'=>[1, 3, 5, 2]
			]);
		}
	}

?>