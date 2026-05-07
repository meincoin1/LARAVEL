<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function newPost(Request $request)
    {
        if ($request->has('submit')) {
            $post = new Post();
            $post->title = $request->title;
            $post->desc = $request->desc;
            $post->text = $request->text;
            $post->date = $request->date;
            $post->save();
            
            return redirect('/post/all');
        }
        
        return view('posts.new');
    }
    
    public function getAll()
    {
        $posts = Post::all();
        return view('posts.all', ['posts' => $posts]);
    }
}