<?php

namespace App\Http\Controllers;
	
class PostController extends Controller
	{
		public function show()
		{
			$numbers = [10, 20, 30, 40, 50, 60, 70];
			return view('post.show', [
				'numbers'=>$numbers
			]);
		}
	}

?>