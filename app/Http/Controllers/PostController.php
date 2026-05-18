<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Задача 26.1 - создание новой статьи
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
    
    // Задача 26.2 - изменение статьи с id=1
    public function changeFirstPost()
    {
        $post = Post::find(1);
        $post->title = 'Новый заголовок записи с id 1';
        $post->desc = 'Новое описание записи с id 1';
        $post->save();
        
        return redirect('/post/all');
    }
    
    // Задача 26.3 + 26.5 + 26.6 + 26.7 - редактирование статьи
    public function editPost(Request $request, $id)
    {
        $post = Post::find($id);
        
        if (!$post) {
            abort(404, 'Статья не найдена');
        }
        
        if ($request->has('submit')) {
            $post->title = $request->title;
            $post->desc = $request->desc;
            $post->date = $request->date;
            $post->text = $request->text;
            $post->save();
            
            return redirect('/post/all')->with('success', 'Статья #' . $post->id . ' "' . $post->title . '" успешно обновлена');
        }
        
        return view('editPost', ['post' => $post]);
    }
    
    // Задача 26.4 - список всех статей
    public function getAll()
    {
        // Задача 27.3 - получаем только НЕудаленные статьи (мягкое удаление)
        $posts = Post::all(); // По умолчанию all() не возвращает мягко удаленные
        return view('posts.all', ['posts' => $posts]);
    }
    
    // Задача 26.8 - массовые изменения
    public function massUpdate()
    {
        // Обновляю все статьи, где id = 1 или 2
        Post::whereIn('id', [1, 2])->update([
            'status' => 'published'
        ]);
        
        // Обновляю все статьи с датой до 2024-01-01
        Post::where('date', '<', '2024-01-01')->update([
            'status' => 'archived'
        ]);
        
        return redirect('/post/all')->with('success', 'Массовое обновление выполнено');
    }
    
    // Задача 26.9 - firstOrCreate
    public function firstOrCreatePost(Request $request)
    {
        if ($request->has('submit')) {
            $post = Post::firstOrCreate(
                ['title' => $request->title],
                [
                    'desc' => $request->desc,
                    'date' => $request->date,
                    'text' => $request->text
                ]
            );
            
            return redirect('/post/all')->with('success', 'Статья найдена или создана через firstOrCreate');
        }
        
        return view('posts.firstOrCreate');
    }
    
    // Задача 26.9 - updateOrCreate
    public function updateOrCreatePost(Request $request)
    {
        if ($request->has('submit')) {
            $post = Post::updateOrCreate(
                ['id' => $request->id],
                [
                    'title' => $request->title,
                    'desc' => $request->desc,
                    'date' => $request->date,
                    'text' => $request->text
                ]
            );
            
            return redirect('/post/all')->with('success', 'Статья обновлена или создана через updateOrCreate');
        }
        
        return view('posts.updateOrCreate');
    }

    // Задача 27.1 - удаление статьи (жесткое удаление через delete)
    public function delPost($id)
    {
        // Задача 27.1 - находим статью по id
        $post = Post::find($id);
        
        if (!$post) {
            abort(404, 'Статья не найдена');
        }
        
        // Задача 27.2 - сохраняем название для флеш-сообщения
        $title = $post->title;
        
        // Задача 27.1 - удаляем статью
        // Задача 27.3 - при использовании SoftDeletes это будет МЯГКОЕ удаление
        $post->delete();
        
        // Задача 27.2 - редирект с флеш-сообщением, содержащим title
        return redirect('/post/all')->with('success', 'Статья "' . $title . '" успешно удалена');
    }

    // Задача 27.4 - вывод списка удаленных статей
    public function getDeletedPost()
    {
        // Задача 27.4 - onlyTrashed() получает только мягко удаленные записи
        $deletedPosts = Post::onlyTrashed()->get();
        return view('posts.deleted', ['posts' => $deletedPosts]);
    }
    
    // Задача 27.5 - восстановление удаленной статьи
    public function restorePost($id)
    {
        // Задача 27.5 - находим удаленную статью среди мягко удаленных
        $post = Post::onlyTrashed()->find($id);
        
        if (!$post) {
            abort(404, 'Удаленная статья не найдена');
        }
        
        $title = $post->title;
        
        // Задача 27.5 - восстанавливаем статью
        $post->restore();
        
        return redirect('/post/deleted')->with('success', 'Статья "' . $title . '" успешно восстановлена');
    }
}