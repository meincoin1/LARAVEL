<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // 26.2: Изменение статьи с id=1
    public function changeFirstPost()
    {
        $post = Post::find(1);
        $post->title = 'Новый заголовок записи с id 1';
        $post->desc = 'Новое описание записи с id 1';
        $post->save();

    }
    
    // // 26.1: Создание новой статьи
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
    
    // Список всех статей
    public function getAll()
    {
        $posts = Post::all();
        return view('posts.all', ['posts' => $posts]);
    }
}