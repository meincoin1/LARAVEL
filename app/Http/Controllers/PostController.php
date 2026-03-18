<?php

namespace App\Http\Controllers;
	
class PostController extends Controller
	{
		public function show()
		{
				$user = [
				'name'=> 'Дима',
				'age'=>35,
				'salary'=>150000
				];
			return view('post.show', [
				'user'=>$user
			]);
		}
	}

?>