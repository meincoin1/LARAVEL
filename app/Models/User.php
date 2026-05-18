<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $fillable = ['login', 'password'];
    
    // Задача 28.1 - связь один к одному с профилем
    public function profile()
    {
        return $this->hasOne(Profile::class, 'user_id', 'id');
    }
}