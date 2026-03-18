<?php

namespace App\Http\Controllers;
	
class PostController extends Controller
	{
		public function show()
		{
			$val1 = 'Первый инпут';
			$val2 = 'Второй инпут';
			$val3 = 'Третий инпут';
			return view('post.show', [
				'val1' => $val1, 
				'val2' => $val2,
				'val3' => $val3
			]);
		}
	}

?>