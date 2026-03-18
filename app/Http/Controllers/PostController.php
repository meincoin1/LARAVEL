<?php

namespace App\Http\Controllers;
	
class PostController extends Controller
	{
		public function show()
		{
			$text = 'Вконтакте';
			$href = "vk.com";
			return view('post.show', [
				'text'=>$text,
				'href'=>$href
			]);
		}
	}

?>