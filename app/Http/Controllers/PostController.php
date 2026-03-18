<?php

namespace App\Http\Controllers;
	
class PostController extends Controller
	{
		public function show()
		{
			$classCSS = 'green';
			return view('post.show', [
				'classCSS'=>$classCSS
			]);
		}
	}

?>