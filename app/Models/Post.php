<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // Задача 27.3 - подключаем трейт для мягкого удаления

class Post extends Model
{
    use SoftDeletes; // Задача 27.3 - включаем мягкое удаление
    
    protected $fillable = [
        'title',
        'desc',
        'date',
        'text'
    ];
    
    // Задача 27.3 - добавляем поле deleted_at для мягкого удаления
    protected $dates = ['deleted_at'];
}