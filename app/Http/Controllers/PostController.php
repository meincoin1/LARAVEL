<?php

namespace App\Http\Controllers;
	
class PostController extends Controller
	{
		public function show()
		{
			// $users = ['Вика', 'Оля', 'Наташа'];
			$users = [];
			return view('post.show', [
				'users'=>$users
			]);
		}
	}

?>