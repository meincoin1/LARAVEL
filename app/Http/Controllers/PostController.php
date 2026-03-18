<?php

namespace App\Http\Controllers;
	
class PostController extends Controller
	{
		public function show()
		{
			$animals = [
				'1'=>'1',
				'2'=>'2',
				'3'=>'3'
			];
			return view('post.show', [
				'animals'=> $animals
			]);
		}
	}

?>