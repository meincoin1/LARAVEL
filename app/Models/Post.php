<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Задача 26.8 - для массового заполнения
    protected $fillable = [
        'title',
        'desc', 
        'date',
        'text'
    ];
}