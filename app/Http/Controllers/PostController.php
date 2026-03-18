<?php

namespace App\Http\Controllers;
	
class PostController extends Controller
	{
		public function show()
		{
			$str = '<b>text</b>';
			return view('post.show', [
				'str'=>$str
			]);
		}
	}

?>