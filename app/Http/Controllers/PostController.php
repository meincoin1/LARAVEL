<?php

namespace App\Http\Controllers;
	
class PostController extends Controller
	{
		public function show()
		{
			$string = ['Сегодня тепло', 'Сегодня холодно', 'Сегодня ни тепло, ни холодно'];
			return view('post.show', [
				'string'=>$string
			]);
		}
	}

?>