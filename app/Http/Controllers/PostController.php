<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function show()
    {
        $posts = DB::table('posts')->get();
        dump($posts);
    }
}