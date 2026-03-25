<?php

namespace App\Http\Controllers;
	
class PostController extends Controller
	{
		public function show()
		{
			$numbers = [1, 2, 3, 4, 5, 6, 7];
			return view('post.show', [
				'numbers'=>$numbers
			]);
		}
	}

?>