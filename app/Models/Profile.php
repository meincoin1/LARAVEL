<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';
    protected $fillable = ['name', 'surname', 'email', 'user_id'];
    
    // Задача 28.1 - обратная связь belongsTo (для полноты)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}