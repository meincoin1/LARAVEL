<?php

namespace App\Http\Controllers;
	
class PostController extends Controller
	{
		public function show()
		{
			$location = [
				'country' => 'Беларусь',];
			return view('post.show', [
				'location'=>$location
			]);
		}
	}

?>