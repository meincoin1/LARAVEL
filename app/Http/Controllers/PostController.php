<?php

namespace App\Http\Controllers;
	
class PostController extends Controller
	{
		public function show()
		{
			$numbers = [5, 8, 12, 0, 7, 3, 9];
			return view('post.show', [
				'numbers'=>$numbers
			]);
		}
	}

?>