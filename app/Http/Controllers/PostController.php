<?php

namespace App\Http\Controllers;
	
class PostController extends Controller
	{
		public function show()
		{
			return view('post.show', [
				'arr'=>[1, 2, 3], 
				'elem'=>[4, 5, 6]
			]);
		}
	}

?>
