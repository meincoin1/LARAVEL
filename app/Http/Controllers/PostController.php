<?php

namespace App\Http\Controllers;
	
class PostController extends Controller
	{
		public function show()
		{
			$animals = [
				'cat'=>'кошка',
				'dog'=>'собака',
				'pig'=>'свинка'
			];
			return view('post.show', [
				'animals'=> $animals
			]);
		}
	}

?>