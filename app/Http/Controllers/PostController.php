<?php

namespace App\Http\Controllers;
	
class PostController extends Controller
	{
		public function show()
		{
			$class = 'red';
			return view('post.show', [
				'class'=> $class
			]);
		}
	}

?>