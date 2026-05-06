<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function getAll()
    {
        $posts = Post::all();
        return view('posts.all', ['posts' => $posts]);
    }
}