<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class PostController extends Controller
{
    /**
     * Задача 25.2 и 25.3
     * Получение списка всех статей и вывод в виде HTML таблицы
     * 
     * Задача 25.7
     * Сортировка статей по убыванию даты публикации
     * 
     * Задача 25.8 и 25.9
     * Динамическая сортировка по полям id, title, date
     * 
     * @param string $order Поле для сортировки (id, title, date)
     * @param string $dir Направление сортировки (asc, desc)
     * @return \Illuminate\View\View
     */
    public function getAll($order = 'date', $dir = 'desc')
    {
        // Задача 25.8: поля для сортировки
        $allowedOrders = ['id', 'title', 'date'];
        
        // Задача 25.9: направления сортировки
        $allowedDirs = ['asc', 'desc'];
        
        // если передано неверное - ставим date
        if (!in_array($order, $allowedOrders)) {
            $order = 'date';
        }
        
        // если передано неверное - ставим desc
        if (!in_array($dir, $allowedDirs)) {
            $dir = 'desc';
        }
        
        // Задача 25.3: Получение всех статей
        // Задача 25.7 и 25.8: Сортировка по указанному полю и направлению
        $posts = Post::orderBy($order, $dir)->get();
        
        // Передаем данные в представление
        return view('posts.all', [
            'posts' => $posts,
            'order' => $order,
            'dir' => $dir     
        ]);
    }
    
    /**
     * Задача 25.4 и 25.5
     * 
     * Задача 25.10
     * 
     * @param int $id ID статьи
     * @return \Illuminate\View\View
     */
    public function getOne($id)
    {
        try {
            // Задача 25.10
            $post = Post::findOrFail($id);
            
            // Задача 25.5
            return view('posts.one', ['post' => $post]);
            
        } catch (ModelNotFoundException $e) {
            abort(404, 'Статья с таким ID не найдена');
        }
    }
}