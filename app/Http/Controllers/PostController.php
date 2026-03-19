<?php

namespace App\Http\Controllers;
	
class PostController extends Controller
	{
		public function show()
		{
			$data = [1];
			return view('post.show', [
				'data'=>$data
			]);
		}
	}

?>