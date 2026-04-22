<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
        $posts = DB::table('posts')
            ->leftJoin('categories', 'categories.id', '=', 'posts.category_id')
            ->get();
        
        dump($posts);
    }
}