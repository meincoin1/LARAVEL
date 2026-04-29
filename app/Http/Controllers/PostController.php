<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
    }
    
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show', ['post' => $post]);
    }
    
    public function store()
    {
        $post = Post::create([
            'title' => 'Новая статья',
            'desc' => 'Краткое описание',
            'text' => 'Полный текст',
            'date' => now(),
        ]);
        
        return redirect('/posts');
    }
    
    public function update($id)
    {
        $post = Post::find($id);
        $post->update([
            'title' => 'Обновленный заголовок'
        ]);
        
        return redirect('/posts');
    }
    
    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();
        
        return redirect('/posts');
    }
}